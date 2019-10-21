import $ from 'jquery';
import Boostrap from 'bootstrap';
import { isMobile, DownTo, UpTo, toolResponsive, addToLocalStorageObject, findLastIndex } from '../utils/utils';
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

window.hashes = [];
window.stateArray = [];
// iteartion in all states and save in array

// last true in array
window.lastStepTrue = findLastIndex(stateArray, 'state', true);
//chubb.boxes.hashChanger.nextHash(lastStepTrue);

export default function General() {
    const chubb = {
        init: () => {
            $(document).ready(function(){
                chubb.ready();
            }); 
        },

        ready: () => {
            // toolResponsive();
            chubb.dataManage.init();
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
            let operaciones = [".datePicker-desde",".datePicker-hasta"];
            let cotizar = [".datePicker-Nacimiento",".datePicker-Vigencia"];

            if ( path.indexOf("/consulta_operaciones.php") > -1) {
                operaciones.map( function(el, i) {
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

            if ( path.indexOf("/cotizar_seguro_nuevo.php") > -1 ) {
                cotizar.map( function(el, i) {
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
            })

            table.find('td.view').add('.popUp').mouseleave(function() {
                
                if($(this).find('.popUp').hasClass('active')) {
                    $(this).find('.popUp').removeClass('active');
                } 
            })
            
        },

        // interaccion de steps (1,2,3,4) segun clicks o cambios de hash en la url
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
                        chubb.boxes.hashChanger.goToTheNextNotCompleted(window.location.hash);
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

                goToTheNextNotCompleted : (newHash) => {
                    let $box = $('.boxes');
                    let $boxes = $box.find('.boxes__box');
                    // $boxes.removeClass('active');

                    console.log('newHasH: ', newHash)

                    if ( initStorage !== undefined || initStorage.length !== 0 ) {
                        // let redefine = [
                        //     initStorage.step1.state == true && '#datos_generales',
                        //     initStorage.step2.state == true && '#item',
                        //     initStorage.step3.state == true && '#cobertura',
                        //     initStorage.step4.state == true && '#datos_solicitante',
                        // ]
                        //console.log('redefine: ', redefine[0])

                        switch (newHash) {
                            case '#datos_generales':
                            case 'step1':
                                if ( initStorage.step1.state == true || initStorage.step2.state == false ) {
                                    window.location.hash = '#datos_generales';
                                } else {
                                    window.location.hash = '#item';
                                }
                            break;
                            case '#item':
                            case 'step2':
                                if ( initStorage.step1.state == true ) {
                                    window.location.hash = '#item';
                                } else {
                                    window.location.hash = '#datos_generales';
                                }
                            break;
                            case '#cobertura':
                            case 'step3':
                                if ( initStorage.step2.state == true ) {
                                    window.location.hash = '#cobertura';
                                } else {
                                    window.location.hash = '#item';
                                }
                            break;
                            case '#datos_solicitante':
                            case 'step4':
                                if ( initStorage.step3.state == true ) {
                                    window.location.hash = '#datos_solicitante';
                                } else {
                                    window.location.hash = '#cobertura';
                                }
                            break;
                            default:
                                window.location.hash = '#datos_generales';
                            break;
                        }
                        

                        // if ( (newHash == '#datos_generales' || newHash == 'step1') && initStorage.step1.state == false ) {
                        //     window.location.hash = '#datos_generales';
                        // }

                        // if ( (newHash == '#item' || newHash == 'step2') && initStorage.step1.state == false ) {
                        //     window.location.hash = '#datos_generales';
                        // } else{
                        //     window.location.hash = '#item';
                        // }

                        // if ( (newHash == '#cobertura' || newHash == 'step3') && initStorage.step2.state == true ) {
                        //     window.location.hash = '#item';
                        // } else {
                        //     window.location.hash = '#cobertura';
                        // }

                        // if ( (newHash == '#datos_solicitante' || newHash == 'step4') && initStorage.step3.state == true ) {
                        //     window.location.hash = '#cobertura';
                        // }else {
                        //     window.location.hash = '#datos_solicitante';
                        // }

                    }

                    // 

                    // if (stateArray[0].state == true ) {
                    //     window.location.hash = '#datos_solicitante';
                    // }
                    
                },

                nextHash : (lastStepTrue) => {
                    if (lastStepTrue < 0) {
                        $('#datos_generales').addClass('active');
                        // window.location.hash = '#datos_generales';
                        console.log('nextHash: step1')
                    }

                    if (lastStepTrue == 0) {
                        $('#item').addClass('active');
                        // window.location.hash = '#item';
                        console.log('nextHash: step1')
                    }
                    if (lastStepTrue == 1) {
                        $('#cobertura').addClass('active');
                        // window.location.hash = '#cobertura';
                        console.log('nextHash: step2')
                    }
                    
                    if (lastStepTrue == 2) {
                        $('#datos_solicitante').addClass('active');
                        // window.location.hash = '#datos_solicitante';
                        console.log('nextHash: step3')
                    }
                    
                    if (lastStepTrue == 3) {
                        $('#datos_solicitante').addClass('active');
                        // window.location.hash = '#datos_solicitante';
                        console.log('nextHash: step4')
                    }
                }
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
                            chubb.formValidation.formValidated($(this), true);
                            chubb.dataManage.goToNextSibling($(this))
                            chubb.dataManage.getAllDataInForm($(this));
                        }
                        form.classList.add('was-validated');
                    }, false);
                });   
            },

            // si esta validado setea el state en 'completed', sino vacio
            formValidated : (el, validated ) => {
                let element = el[0].id;

                if ( validated === true ) {
                    console.log('validated')
                    chubb.formValidation.finalStepValidation(element);
                    chubb.dataManage.steps(element);
                    chubb.boxes.hashChanger.goToTheNextNotCompleted(element);
                } else {
                    $(`#${element}`).attr('state' , '');
                }
            },

            finalStepValidation : (step) => {
                if (step === 'step4' ) {
                    $('#modalExito').modal('show'); 
                }
            },

            
        },

        // manejo de datos y localStorage para almacenar y persistir datos antes/despues del refresco de la página
        dataManage : {
            init : () => {
                chubb.dataManage.setArrayFirstTime();
                chubb.dataManage.printValuesFromLocalStorage();
                chubb.dataManage.stepInTheDOM();
            },
            
            // escribe el nuevo estado en el array global (initStorage) y lo guarda en el localStorage
            stepState : (id) => {
                initStorage[id].state = true;
                chubb.dataManage.saveDataOnStorage('steps', initStorage);
            },

            // dumb function, recibe el paso completado y se lo devuelve al paso correspondiente dentro del DOM, lo setea.
            steps : (step) => {
                console.log('steps :', step)
                switch ( step ) {
                    case 'step1': 
                        $('#datos_generales').attr('state','completed')
                    break;
                    case 'step2': 
                        $('#item').attr('state','completed')
                    break;
                    case 'step3': 
                        $('#cobertura').attr('state','completed')
                    break;
                    case 'step4': 
                        $('#datos_solicitante').attr('state','completed')
                    break;
                }
            },

            // al refrescar la página si el array global (initStorage.step${1,2,3, o 4}) esta seteado en true cambia el estado del DOM pasandesolo a un dumb function
            stepInTheDOM : () => {
                let $forms = $('.needs-validation');
                let $formsLength = $forms.length;
                for (let index = 0; index < $formsLength ; index++) {
                    let step = `step${index + 1}`;
                    
                    if ( initStorage[step].state === true ) {
                        console.log('stepInTheDOM: ', step)
                        //chubb.boxes.hashChanger.goToTheNextNotCompleted(step);
                        chubb.dataManage.steps(step);
                    }
                }
            },

            // si existe un locastorage, suma los valores almacenados dentro de los inputs correspondientes en cada paso
            printValuesFromLocalStorage : () => {
                let $forms = $('.needs-validation');
                let $formsLength = $forms.length
                let local = chubb.dataManage.getDataOnStorage('steps');

                if ( localStorage.length > 0 ) {
                    for (let index = 0; index < $formsLength; index++) {
                        let $step = $(`#step${index+1}`);
                        let $stepInputs = $step.find('.form-control, .form-check-input');
                        let $stepLocalArray = local[`step${index+1}`].inputs;

                        if ( $stepLocalArray.length > 0 || localStorage.length > 0 ) {

                            $stepInputs.map(function (i) {
                                if ( local[`step${index+1}`].inputs.length > 0 ) {
                                    if ( $(this).hasClass('form-control') ) {
                                        $(this).val(local[`step${index+1}`].inputs[i].value);
                                    } else if ( $(this).hasClass('form-check-input') ) {
                                        $(this).prop('checked',  local[`step${index+1}`].inputs[i].value)
                                    }
                                }
                            })
                        }
                    }
                }
            },

            // obtiene todos los datos submiteados de los inputs, selects, checkboxs y los almacena en el array global (initStorage), y luego este ultimo se lo pasa al LocalStorage, para q persistan al refrescar la pagina
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
                });
                
                chubb.dataManage.saveDataOnStorage('steps', initStorage);
                chubb.dataManage.stepState(idStep);
            },

            // dumb function guarda un valor/objeto/array en el localStorage
            saveDataOnStorage : (name = 'test', value = {a:1,b:2}) => {
                localStorage.setItem(name, JSON.stringify(value));
            },

            // dumb function obtiene datos del localStorage
            getDataOnStorage : (name = 'test') => {
                return JSON.parse(localStorage.getItem(name));
            },

            // si NO exite un localStorage con contenido, le pasa lo que tenga la variable global (initStorage), si tiene, entonces pasa lo contrario, le pasa el contenido de localStorage al array global (initStorage)
            setArrayFirstTime : () => {
                if ( localStorage.length <= 0 ) {
                   chubb.dataManage.saveDataOnStorage('steps', initStorage);
                } else {
                    let arr = chubb.dataManage.getDataOnStorage('steps');
                    initStorage = arr;
                }
            },
            
            // al presionar siguiente en los forms pasa al siguiente paso y cambia la URL
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
