import $ from 'jquery';
import Boostrap from 'bootstrap';
import { isMobile, DownTo, UpTo, toolResponsive, addToLocalStorageObject, findLastIndex, stringHasNumber } from '../utils/utils';
import datepicker from 'js-datepicker';

// initialStorage
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
    },
    newItem: {
        'inputs': [],
        'state': false,
    }
}

// window.hashes = [];
window.stateArray = [];

// last true in array
window.lastStepTrue = findLastIndex(stateArray, 'state', true);

export default function General() {
    const chubb = {
        init: () => {
            $(document).ready(function(){
                chubb.ready();
            }); 
        },

        ready: () => {
            // toolResponsive();
            chubb.modals.init();
            chubb.dataManage.init();
            chubb.formValidation.init();
            chubb.boxes.init();
            chubb.popUp.init();
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

            // COTIZAR SEGURO NUEVO
            if (window.location.pathname.indexOf('cotizar_seguro_nuevo') > 0 ) {
                $box.find('.coverSelect').on('click', function() {
                    const $parent = $(this).parent().closest($box);
                    if ($box.hasClass('active')) {
                        $parent.siblings().removeClass('active')
                        $parent.toggleClass('active');
                    } else {
                        $parent.toggleClass('active');
                    }
                })
            }

            // CONSULTA DE OPERACIONES Y CARTERA
            if (window.location.pathname.indexOf('consulta_operaciones') > 0 ) {
                $box.find('.coverSelect').find('a').on('click', function() {
                    let $getId = $(this).attr('class');
                    const $parent = $(this).parent().closest($box);

                    $box.find('.coverSelect').find('a').removeClass('btn-withOutHover--selected')
                    $(this).addClass('btn-withOutHover--selected')
                    
                    $('.cover__list__item').removeClass('active')
                    $parent.add('.cover__list').removeClass('active');
                    $parent.add('.cover__list').addClass('active');

                    // seleccionar
                    if ( $getId.indexOf('seleccionar') > 0 ) {
                        $parent.find('.cover__list').find('.cover__list__item').removeClass('active')
                        // $parent.toggleClass('active');
                        $parent.find('.cover__list').find('#seleccionar').toggleClass('active');
                    }

                    // editar
                    if ( $getId.indexOf('editar') > 0) {
                        $parent.find('.cover__list').find('.cover__list__item').removeClass('active')
                        // $parent.toggleClass('active');
                        $parent.find('.cover__list').find('#editar').toggleClass('active')
                    }

                    // eliminar
                    if ( $getId.indexOf('eliminar') > 0) {
                        $parent.remove();
                    }
                })
            }
        },

        popUp : {
            init: () => {
                chubb.popUp.openModal();
                chubb.popUp.openDetail();
            },

            openModal: () => {
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

            openDetail: () => {
                const $popUpBtn = $('.popUp').find('a');

                $popUpBtn.on('click', function() {
                    let $hash = $(this).attr('href');

                    $('.boxes_detalle').toggleClass('active');
                    $('.dateContent').toggleClass('inactive')
                    chubb.boxes.hashChanger.goToTheNextNotCompleted($hash);
                    
                })
            }
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
                    const $box = $('.boxes');
                    console.log('newHasH: ', newHash)
                    let urlPath = window.location.pathname;

                    if ( urlPath.indexOf('cotizar_seguro_nuevo') > 0 && (initStorage !== undefined || initStorage.length !== 0) ) {
                        console.log('cotizar_seguro_nuevo')
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
                    }

                    if ( urlPath.indexOf('consulta_operaciones') > 0 && $box.hasClass('active') ) {
                        switch (newHash) {
                            case '#datos_generales_consulta':
                            case 'newItem':
                                window.location.hash = '#datos_generales_consulta';
                            break;
                            case '#item_coberturas':
                                window.location.hash = '#item_coberturas';
                            break;
                            case '#detalle_emision':
                                window.location.hash = '#detalle_emision';
                            break;
                        }
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
                            //chubb.newItemSet.init($(this));
                        }
                        form.classList.add('was-validated');
                    }, false);
                });   
            },

            // si esta validado setea el state en 'completed', sino vacio
            formValidated : (el, validated ) => {
                let element = el[0].id;

                if ( validated === true ) {
                    // console.log('validated')
                    chubb.formValidation.finalStepValidation(element);
                    chubb.dataManage.steps(element);
                    chubb.boxes.hashChanger.goToTheNextNotCompleted(element);
                } else {
                    $(`#${element}`).attr('state' , '');
                }
            },

            finalStepValidation : (step) => {
                if (step === 'step3' ) {
                    $('#modalCover').modal('hide'); 
                }
                if (step === 'step4' ) {
                    $('#modalExito').modal('show'); 
                }
            },
        },

        // opciones de operaciones y cartera items added
        // newItem
        newItemSet: {
            // #addItem
            init : () => {
                chubb.newItemSet.printHtml();
            },

            printHtml : (el) => {
                // console.log('newItem: ', initStorage['newItem'].inputs);

                const auto = initStorage['newItem'].inputs;

                if ( auto.length > 0 ) {
                    const marca = auto[1].value;
                    const anio = auto[2].value;
                    const modelo = auto[3].value;

                    let newItem = `
                        <div class="cover__box cover__box--grey">
                            <div class="cover__title">
                                <h4>
                                    ${marca}, ${anio}, ${modelo}
                                </h4>
                    
                                <aside class="coverSelect">
                                    <a href="#" class="btn btn-withOutHover btn-seleccionar">
                                        <span>
                                            Seleccionar cobertura
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-withOutHover btn-editar">
                                        <span>
                                            Editar
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-withOutHover btn-eliminar">
                                        <span>
                                            Eliminar
                                        </span>
                                    </a>
                                </aside>
                            </div>
                
                            <div class="cover__list" style="overflow:visible">
                            </div>
                        </div>
                        <!-- box -->
                    `;

                    // APPEND TO LAST
                    $('.cover').append(newItem);
                    chubb.newItemSet.lastItemAdded();
                }
            },

            lastItemAdded : () => {
                // LAST GET COLOR AND CLASS 'last'
                let $lastCover = $('.cover__box');
                let last = $lastCover.length;

                $lastCover.removeClass('last');
                $lastCover.eq(last - 1).toggleClass('last');
                
                // Set .php in html
                $.ajax({
                    url: '../includes/consulta_operaciones_seleccionar-editar.inc.php',
                    beforeSend: function () {
                        $(".cover__box--grey.last").append('<span class="loading">Cargando...<span>');
                    },
                    success : function(data) {
                        console.log('hola')
                        $('.loading').remove();
                        setTimeout(function () {
                            $('.cover__box--grey.last > .cover__list').append(data);
                        }, 1000)
                    },
                    error: function() {
                        console.log("No se ha podido obtener la información");
                    }
                })

                // cleaning initialStorage["newItem"]
                // initStorage['newItem'].inputs = [];
                // initStorage['newItem'].state = false;

                // add funcionality for new buttons on DOM

                $(document).ajaxSuccess(function(event, xhr, settings) {
                    console.log('cargado ajax')
                    if (settings.url.indexOf('consulta_operaciones_seleccionar-editar') > -1) {
                        chubb.cover();
                        chubb.modals.init();
                    }
                })
                
            },
        },

        // manejo de datos y localStorage para almacenar y persistir datos antes/despues del refresco de la página
        dataManage : {
            init : () => {
                //chubb.dataManage.setArrayFirstTime();
                //chubb.dataManage.printValuesFromLocalStorage();
                chubb.dataManage.stepInTheDOM();
            },
            
            // escribe el nuevo estado en el array global (initStorage) y lo guarda en el localStorage
            stepState : (id) => {
                initStorage[id].state = true;
                //chubb.dataManage.saveDataOnStorage('steps', initStorage);
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

                if ($forms.attr('id') !== undefined ) {
                    for (let index = 0; index < $formsLength ; index++) {
                        let step = `step${index + 1}`;
                        
                        if ( initStorage[step].state === true ) {
                            //chubb.boxes.hashChanger.goToTheNextNotCompleted(step);
                            chubb.dataManage.steps(step);
                        }
                    }
                }
            },

            // si existe un locastorage, suma los valores almacenados dentro de los inputs correspondientes en cada paso
            printValuesFromLocalStorage : () => {
                let $forms = $('.needs-validation');
                let $formsLength = $forms.length;
                let local = chubb.dataManage.getDataOnStorage('steps');

                if ( localStorage.length > 0 && $forms.attr('id') !== undefined ) {
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
                
                //chubb.dataManage.saveDataOnStorage('steps', initStorage);
                chubb.dataManage.stepState(idStep); // le pasa el id del paso
                chubb.newItemSet.init(); // operaciones / cartera - "agregar item"
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
                const idsArray = ['#datos_generales','#item','#cobertura','#datos_solicitante'];
                let elementNumber = el.attr('id');
                
                if ( stringHasNumber(elementNumber) && window.location.pathname.indexOf('cotizar_seguro_nuevo') > 0 ) {
                    elementNumber = elementNumber.match(/\d+/)[0];
                    elementNumber = Number(elementNumber);
                    $(idsArray[elementNumber]).removeClass('active').addClass('completed');
                    $(idsArray[elementNumber+1]).addClass('active');    
                    chubb.boxes.hashChanger.changeHashURL($(idsArray[elementNumber]));
                }
            }
        },

        modals : {
            init: () => {
                chubb.modals.ready();
            },
            ready : () => {
                chubb.modals.inputClick();
                chubb.modals.selectType();
            },
        
            removeAccesories : () => {
              const $ul = $('.boxes__accesories__added__content');
              let $removeBtn = $ul.find('li');
        
              $removeBtn.on('click', '.delete, .icon-cancel, .delete > span', function() {
                  console.log('remove: ')
                  let $this = $(this);
                  $this.parent().closest('li').remove();
              })
        
            },
        
            // modales
            inputClick: () => {
                let $el = $('.falseSelect, .selectItem');
                
                $el.click(function(e) {
                    let $this = $(this);
                    let $nameModal = $this.attr('rel');
                    $this.addClass('open'); // avoid click others lis
                    chubb.modals.nameModal($this);
                    chubb.modals.withOutModel($this);
                    chubb.modals.getLiFiltered($this, $nameModal);
                })
            },
        
            nameModal: (el) => {
                const nameOfModal = el.attr('rel');
                chubb.modals.typeOfModal.showTypeOfModal(nameOfModal)
                chubb.modals.openHideModal(nameOfModal);
            },
        
            selectType: () => {
                const $search = $('input.search-input');
                $search.on('input', function() {
                    let that = this.value;
                    chubb.modals.filterBrands(that);
                });
            },
        
            filterBrands: (filtered) => {
                const $ulText = $('ul.list-text');
                const $liText = $ulText.find('li');
                
                if ( $liText.length > 0 ) {
                    $liText.hide().filter(function() {
                        return $(this).text().toLowerCase().indexOf( filtered ) > -1;
                    })
                    .show();
                }
            },
        
            // get li clickeed and pass them input clicked and new text of selecition
            getLiFiltered: (clicked, modalName) => {
                const $ulText = $('ul.list-text');
                const $liText = $ulText.find('li');
        
                $liText.on('click', function() {
                    let text;
        
                    switch (modalName) {
                        case 'broker': 
                            text = $(this).find('.name').text();
                        break;
                        case 'accesorios':
                            let name = $(this).find('.name').text();
                            let price = $(this).find('.price').text();
                            
                            text = {
                                name,
                                price
                            }
                        break;
                        case 'marca' : 
                            text = $(this).find('.name').text();
                        break;                      
                    }
        
                    if (clicked.hasClass('open')) {
                        // if => avoid click others lis
                        chubb.modals.printTextSelectedInInput(clicked, text, modalName);
                        clicked.removeClass('open');
                    }
                })
        
            },
        
            withOutModel: (clicked) => {
                const el = $('span.withOutModel');
        
                el.on('click', function() {
                    let text = `No se encontró mi modelo`;
                    if (clicked.hasClass('open')) {
                        // if => avoid click others lis
                        chubb.modals.printTextSelectedInInput(clicked, text);
                        clicked.removeClass('open');
                    }
                })
            },
        
            // clean input when close modal
            clearInput: () => {
                const $modal = $('#modalSelect');
                const $el = $modal.find('input.search-input');
        
                chubb.modals.filterBrands('');
        
                if ($el.length) {
                    $el.val('');
                }
            },
        
            // print selected text
            printTextSelectedInInput: (el, text, modalName) => {
                const $modal = $('#modalSelect');
        
                switch (modalName) {
                    case 'broker':
                        el.val(text);
                    break;
                    case 'accesorios':
                        let li = `<li>
                                <span>${text.name}</span>
                                <div class="price">${text.price}</div>
                                <div class="delete"><i class="icon icon-cancel"></i><span>Borrar</span></div>
                            </li>`;
                        $('.boxes__accesories__added__content').prepend(li)
                        chubb.modals.removeAccesories();
                    break;  
                    case 'marca' : 
                        el.val(text);
                    break;                      
                }
        
                // hide modal
                $modal.modal('hide');
            },
        
            typeOfModal: {
                showTypeOfModal: (nameOfModal) => {
                    chubb.modals.typeOfModal.changeTexts(nameOfModal);
                },
                changeTexts: (nameOfModal) => {
                    const $modal = $('#modalSelect');
                    const title = $modal.find('.modal-title');
                    const placeholder = $modal.find('input.search-input');
        
                    switch (nameOfModal) {
                        case 'accesorios':
                            title.text('Búsqueda de accesorios')
                            placeholder.attr('placeholder', 'Buscar accesorios')
                            break;
                        case 'broker':
                            title.text('Búsqueda de broker')
                            placeholder.attr('placeholder', 'Buscar nombre / código broker')
                            break;
                        case 'marca':
                            title.text('Elija el modelo de su auto')
                            placeholder.attr('placeholder', 'Buscar por modelo')
                            break;
                    }
                }
            },
        
            openHideModal: (nameOfModalToHide) => {
                const $modal = $('#modalSelect');
                $modal.addClass(nameOfModalToHide);
                $modal.on('hidden.bs.modal', function (e) {
                    $(this).removeClass(nameOfModalToHide);
                    chubb.modals.clearInput();
                });
            }
        }
    };

    chubb.init();

};
General();
