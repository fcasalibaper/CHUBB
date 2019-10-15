import $ from 'jquery';
import Boostrap from 'bootstrap';
import { isMobile, DownTo, UpTo, toolResponsive, addToLocalStorageObject } from '../utils/utils';
import datepicker from 'js-datepicker';

window.initStorage = {
    step1: {
        'inputs': [],
        'state': false,
    },
    step2: {
        'inputs': [],
        'state': false,
    },
    step3: {
        'inputs': [],
        'state': false,
    },
    step4: {
        'inputs': [],
        'state': false,
    }
}

export default function General() {
    const chubb = {
        init: () => {
            $(document).ready(function(){
                chubb.ready();
            }); 
        },

        ready: () => {
            // toolResponsive();
            chubb.formValidation.init();
            chubb.boxes.init();
            chubb.popUp();
            chubb.cover();
            chubb.checkBoxOne();
            chubb.seeMore();
            chubb.dayPicker();
        },

        dayPicker : () => {
            const path = window.location.pathname;
            let el = [".datePicker-desde",".datePicker-hasta"];

            if ( path === "/consulta_operaciones.php" ) {
                el.map( function(el, i) {
                    datepicker(el, {
                        customMonths: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        customDays: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                        formatter: (input, date, instance) => {
                            const value = date.toLocaleDateString()
                            input.value = value // => '1/1/2099'
                        }
                    })
                })
            }
            
        },

        // operations see more
        seeMore : () => {
            const $btn = $('.seeMore');
            const $target = $('.seeMoreTarget');

            $btn.on('click', function() {
                if ( !$target.hasClass('seeMoreTarget--close') ) {
                    $(this).addClass('open');
                    $(this).text('Ver más');
                    $target.addClass('seeMoreTarget--close');
                    $('html, body').animate({
                        scrollTop: 0
                    },500);
                } else {
                    $(this).removeClass('open');
                    $(this).text('Ver menos');
                    $target.removeClass('seeMoreTarget--close');
                }
            })
        },
        
        // open and close cobertura items
        cover : () => {
            const $box = $('.cover__box');

            $box.find('.coverSelect').on('click', function() {
                const $parent = $(this).parent().closest($box);
                if ($box.hasClass('active')) {
                    $parent.siblings().removeClass('active')
                    $parent.toggleClass('active');
                } else {
                    $parent.toggleClass('active');
                }
            })
        },

        popUp : () => {
            const table = $('table.table');

            table.find('td.view').on('click',function(){
                $(this).find('.popUp').addClass('active');
                console.log('hola')
                
            })

            table.find('td.view').add('.popUp').mouseleave(function() {
                
                if($(this).find('.popUp').hasClass('active')) {
                    $(this).find('.popUp').removeClass('active');
                } 
            })
            
        },

        // steps 1,2,3,4
        boxes: {
            init: () => {
                chubb.boxes.hashChanger.hashChanged();
                chubb.boxes.modifyAction();
            },
            
            // open and modify box inputs
            modifyAction : () => {
                const $box = $('.boxes__box');

                $box.find('span.modify').on('click', function () {
                    let $this = $(this).parent().closest($box);

                    // on click cchange hash
                    chubb.boxes.hashChanger.changeHashURL($this);

                    if ($this.attr('state') === 'completed') {
                        // remueve .active de los q esten abiertos
                        $box.removeClass('active');
                        // pone active al actual clickeado
                        $this.addClass('active');
                    }
                })
            },

            hashChanger: {
                hashManage: () => {
                    let hash = window.location.hash;
                    chubb.boxes.hashChanger.openBox(hash);
                },
                hashChanged: () => {
                    $(window).on('hashchange', function( e ) {
                        chubb.boxes.hashChanger.hashManage();
                    }).trigger('hashchange');
                },
                changeHashURL : (el) => {
                    let newHash = el.attr('id');
                    window.location.hash = `#${newHash}`;
                },

                openBox: (el) => {
                    let $boxes = $('.boxes__box');

                    // si tiene clase active
                    if ( $boxes.hasClass('active') ) {
                        $boxes.removeClass('active');
                        $(el).addClass('active');
                    } else {
                        $(el).addClass('active');
                    }
                    
                },

            },
        },

        checkBoxOne: () => {
            $('input.oneSelected').on('change', function() {
                $('input.oneSelected').not(this).prop('checked', false);  
            });
        }, 
       
        formValidation : {
            init : () => {
                chubb.formValidation.validateForm();
                chubb.formValidation.setArrayFirstTime();
                chubb.formValidation.printValuesFromLocalStorage();
            },
            validateForm : () => {
                const forms = $('.needs-validation');
                let validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        event.preventDefault();
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            chubb.formValidation.formValidated($(this), false)
                        } else {
                            form.classList.add('validated');
                            chubb.formValidation.formValidated($(this), true)
                            chubb.formValidation.goToNextSibling($(this))
                            chubb.formValidation.getAllDataInForm($(this));
                        }
                        form.classList.add('was-validated');
                    }, false);
                });   
            },

            formValidated: (el, validated ) => {
                let element = el.parent().closest('.boxes__box');

                if ( validated === true ) {
                    element.attr('state' , 'completed');
                    console.log('validado: ',validated)
                } else {
                    element.attr('state' , '');
                    console.log('validado: ',validated)
                }
                
            },

            stateChecker : (step) => {
                let stepCheck = JSON.parse(localStorage.getItem('steps'))
                if ( stepCheck[step].state === true ) {
                    $(`#${step}`).attr('state','completed');
                } else if ( stepCheck.step3.state === true ) {
                    $('#cobertura').attr('state','completed');  
                }
            },

            stepState : (id) => {
                initStorage[id].state = true;
                chubb.formValidation.saveDataOnStorage('steps', initStorage)
                chubb.formValidation.stateChecker(id)
                console.log(JSON.parse(localStorage.getItem('steps')));
            },

            printValuesFromLocalStorage : () => {
                let $forms = $('.needs-validation');
                let $formsLength = $forms.length
                let local = chubb.formValidation.getDataOnStorage('steps');

                for (let index = 0; index < $formsLength; index++) {
                    let $step = $(`#step${index+1}`);
                    let $stepInputs = $step.find('.form-control, .form-check-input');
                    let $stepLocalArray = local[`step${index+1}`].inputs;

                    console.log( $stepLocalArray );

                    if ($stepLocalArray.length > 0) {

                        $stepInputs.map(function (i) {
                            console.log('dentro del map: ',local[`step${index+1}`].inputs[i])
                            if ( $(this).hasClass('form-control') ) {
                                $(this).val(local[`step${index+1}`].inputs[i].value);
                            } else if ( $(this).hasClass('form-check-input') ) {
                                $(this).prop('checked',  local[`step${index+1}`].inputs[i].value)
                            }
                        })
                    }
                }
            },

            getAllDataInForm : (el) => {
                let idStep = el[0].id;
                let input =  el.find('.form-control, .form-check-input');
                let lengthInput = input.length - 1;

                input.map(function (i) {
                    let name = $(this).attr('id');
                    let value;
                    if ( $(this).hasClass('form-control') ) {
                        value = $(this).val();
                    } else if ( $(this).hasClass('form-check-input') ) {
                        value = $(this).prop('checked')
                    }

                    // si el objeto esta vacio crea el mismo con el name y el value, sino, si es q el valor esta creado, lo cambia por el otro nuevo valor
                    if ( Object.entries(initStorage[idStep].inputs).length <= lengthInput) {
                        initStorage[idStep].inputs.push( {
                            name : name,
                            value : value
                        })
                    } else if ( initStorage[idStep].inputs[i].value !== value || initStorage[idStep].inputs[i].value !== null || initStorage[idStep].inputs[i].value !== 'undefined' || initStorage[idStep].inputs[i].value == '' ) {
                        initStorage[idStep].inputs[i].name = name;
                        initStorage[idStep].inputs[i].value = value;
                    }
                    
                    // chubb.validateForm.getDataLocalStorage(idStep )
                });
                chubb.formValidation.stepState(idStep);
            },

            saveDataOnStorage : (name = 'test', value = {a:1,b:2}) => {
                localStorage.setItem(name, JSON.stringify(value));
            },

            setArrayFirstTime : () => {
                let arr = chubb.formValidation.getDataOnStorage('steps');
                console.log('arr: ', arr)
                initStorage.push( arr.step2.inputs )
            },

            getDataOnStorage : (name = 'test') => {
                return JSON.parse(localStorage.getItem(name));
            },

            goToNextSibling : (el) => {
                let element = el.parent().closest('.boxes__box');
                let nextSibling = element.next();

                if (element !== undefined ) {
                    
                    element.removeClass('active').addClass('completed');
                    nextSibling.addClass('active');

                    chubb.boxes.hashChanger.changeHashURL(nextSibling);
                }
            }
        }
        
    };

    chubb.init();

};
General();
