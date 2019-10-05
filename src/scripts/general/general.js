import $ from 'jquery';
import PopperJs from 'popper.js';
import Boostrap from 'bootstrap';
import { isMobile, DownTo, UpTo } from '../utils/utils';



export default function General() {
    // ESPECIFICO DE LANDING HOTSALE
    const chubb = {
        init: () => {
            $(document).ready(function(){
                chubb.ready();
            }); 
        },

        ready: () => {
            chubb.resize();
            chubb.toolResponsive();
            chubb.menu.hamburguerMenu();
            chubb.formValidation.init();
            chubb.menu.menuActive();
            chubb.modal.init();
            chubb.typeTextArea();
            chubb.boxes.init();
            // chubb.popOver();
            // chubb.modalPlan.init();
            chubb.heightMenuFix();
            chubb.popUp();
            chubb.mobileClass();
            chubb.cover.open();
        },

        resize: () => {
            $(window).on('resize', function() {
                chubb.heightMenuFix();
                chubb.mobileClass();
                chubb.menu.actionResize();
            })
        },

        mobileClass : () => {
            const $menu = $('body');
            if ( DownTo('sm') ) {
                if ( !$menu.hasClass('mobile') ) {
                    $menu.addClass('mobile');
                    $('body').addClass('closeMenu')
                }
            } else {
                if ( $menu.hasClass('mobile') ) {
                    $menu.removeClass('mobile')
                    $('body').removeClass('closeMenu')
                }
            }
        },

        cover : {
            open: () => {
                const $box = $('.cover__box');

                $box.find('.coverSelect').on('click', function() {
                    $(this).parent().closest($box).toggleClass('active');
                })
            },
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
                    console.log('chau')
                } 
            })
            
        },

        heightMenuFix: () => {
            let $contentH = $('body')[0].scrollHeight;
            const $menu = $('.menu, .content');

            if ( UpTo('md') ) {
                $menu.css('height',`${$contentH}px`);
            } else {
                $menu.css('height', '100%');
            }
        },

        boxes: {
            init: () => {
                chubb.boxes.hashChanger.hashChanged();
                chubb.boxes.modifyAction();
            },

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

        popOver: () => {
            $('[data-toggle="popover"]').popover({
                trigger: 'hover'
            })
        },

        menu : {
            actionResize : () => {
                if ( DownTo('sm') && !$('body').hasClass('closeMenu') ) {
                    $('body').addClass('closeMenu')
                    console.log('mobile')
                } else if ( UpTo('md') && $('body').hasClass('closeMenu') ) {
                    $('body').removeClass('closeMenu')
                    console.log('desktop')
                }
            },

            menuActive: () => {
                const path = window.location.pathname;
                const $menu = $('.menu__list');
                
                $menu.find('li').each( function (i, el) {
                    let $rel = $(this).attr('rel');
                    
                    if ( path.match($rel) ) {
                        $(this).addClass('active')
                    } else if ( (path.length === 0 || path === "/" || path.match(/^\/?index/)) && $(this).attr('rel') == 'consulta_cartelera' ) {
                        $(this).addClass('active');
                    }
                })
            },

            hamburguerMenu: () => {
                const $elAction = $('.header__button');
                const $body = $('body');
    
                $elAction.on('click', function(event){
                    event.preventDefault();
                    
                    $(this).toggleClass('active');
                    $body.toggleClass('closeMenu');
                });
            },


        },

        

        modalPlan: {
            init: () => {
                chubb.modalPlan.getClicked();
                chubb.modalPlan.closeModal();
            },
            getClicked: () => {
                const $clicked = $('.plan').find('a.btn__link');
                $clicked.click(function(e) {
                    e.preventDefault();
                    let $this = $(this).data('info');
                    chubb.modalPlan.getUlData($this);
                    chubb.modalPlan.getHeaderText($this);
                })
            },
            getUlData: (numberClicked) => {
                
                let $ulContent = $('#modalMasInfo').find('.modal-body > ul');
                
                // looping objects selected
                for (var key in dataInfo[numberClicked]) {
                    if (dataInfo[numberClicked].hasOwnProperty(key)) {
                        let name = key;
                        let yesNo = dataInfo[numberClicked][name];
                        let ele = `
                            <li>
                            <span>${key}</span>
                            ${
                                typeof yesNo === 'boolean' ? `
                                <i class="icon icon-${yesNo ? 'yes' : 'no' }"></i> `
                                :
                                `
                                <i class="textIcon">${yesNo}</i>
                                `
                            }
                            </li>
                        `;

                        // print elements html
                        $ulContent.append(ele);
                        
                    }
                }

            },

            getHeaderText: (numberClicked) => {
                let $plan = $('.plan:eq('+numberClicked+')');
                let $header = $plan.find('.plan__title').html();
                let $body = $plan.find('.plan__body').html();
                let $link = $plan.find('.btn.btn-primary').attr('href');

                const $modal = $('#modalMasInfo');
                let $modalHeader = $modal.find('.modal-header > .title');
                let $modalPrice = $modal.find('.detail > span');
                
                $modal.find('.detail > a').attr('href',$link);
                $modalHeader.html($header);
                $modalPrice.html($body);

            },

            closeModal: () => {
                const $modal = $('#modalMasInfo');
                const $ul = $modal.find('.modal-body > ul');

                $modal.on('hidden.bs.modal', function (e) {
                    $ul.html('');
                });
            }

        },

        typeTextArea: () => {
            const $textarea = $('textarea');
            const $label = $textarea.siblings('label');
            const $labelExist = $label.length > 0;

            if ($labelExist || !$label.children('span').length > 0) {
                $label.append('<span>500 carácteres</span>')
            }
            
            $textarea.keyup(function(){
                let textCount = $(this).val().length;
                $label.find('span').text(`${500 - textCount} carácteres`);
            });
        },

        toolResponsive: () => {
            const toolHTML = `
                <div class="toolresponsive">
                    <div class="toolresponsive__break toolresponsive__break--xl">XL</div>
                    <div class="toolresponsive__break toolresponsive__break--lg">LG</div>
                    <div class="toolresponsive__break toolresponsive__break--md">MD</div>
                    <div class="toolresponsive__break toolresponsive__break--sm">SM</div>
                    <div class="toolresponsive__break toolresponsive__break--xs">XS</div>
                </div>
            `;

            $('body').append(toolHTML);
            
        },

       

        formValidation : {
            init : () => {
                chubb.formValidation.validateForm();
            },
            validateForm : () => {
                var forms = $('.needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
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

            goToNextSibling : (el) => {
                let element = el.parent().closest('.boxes__box');
                let nextSibling = element.next();

                if (element !== undefined ) {
                    
                    element.removeClass('active').addClass('completed');
                    nextSibling.addClass('active');

                    chubb.boxes.hashChanger.changeHashURL(nextSibling);
                }
            }
            
        },

        modal : {
            init: () => {
                chubb.modal.inputClick();
                chubb.modal.selectType();
            },
            inputClick: () => {
                let $el = $('input.falseSelect');
                
                $el.click(function(e) {
                    let $this = $(this);
                    $this.addClass('open'); // avoid click others lis
                    chubb.modal.nameModal($this);
                    chubb.modal.withOutModel($this);
                    chubb.modal.getLiFiltered($this);
                })
            },

            nameModal: (el) => {
                const nameOfModal = el.attr('rel');
                chubb.modal.typeOfModal.showTypeOfModal(nameOfModal)
                chubb.modal.openHideModal(nameOfModal);
            },

            selectType: () => {
                const $search = $('input.search-input');
                $search.on('input', function() {
                    let that = this.value;
                    chubb.modal.filterBrands(that);
                });
            },

            filterBrands: (filtered) => {
                const $ulText = $('ul.list-text');
                const $ulLogos = $('ul.logoBrands');

                const $liText = $ulText.find('li');
                const $logoslis = $ulLogos.find('li');
                
                
                if ( $liText.length > 0 ) {
                    $liText.hide().filter(function() {
                        return $(this).text().toLowerCase().indexOf( filtered ) > -1;
                    })
                    .show();
                }

                if ( $logoslis.length > 0 ) {
                    $logoslis.hide().filter(function() {
                        return $(this).find('img').attr('alt').toLowerCase().indexOf( filtered ) > -1;
                    })
                    .show();
                }
            },

            // get li clickeed and pass them input clicked and new text of selecition
            getLiFiltered: (clicked) => {
                const $ulText = $('ul.list-text');
                const $ulLogos = $('ul.logoBrands');

                const $liText = $ulText.find('li');
                const $logoslis = $ulLogos.find('li');

                $liText.on('click', function() {
                    console.log('lptm: ',clicked);
                    let text = $(this).text();
                    if (clicked.hasClass('open')) {
                         // if => avoid click others lis
                        chubb.modal.printTextSelectedInInput(clicked, text);
                        clicked.removeClass('open');
                    }
                })

                $logoslis.on('click', function() {
                    let text = $(this).find('img')[0].attributes[1].value;
                    if (clicked.hasClass('open')) {
                        // if => avoid click others lis
                        chubb.modal.printTextSelectedInInput(clicked, text);
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
                        chubb.modal.printTextSelectedInInput(clicked, text);
                        clicked.removeClass('open');
                    }
                })
            },

            // clean input when close modal
            clearInput: () => {
                const $modal = $('#modal');
                const $el = $modal.find('input.search-input');

                chubb.modal.filterBrands('');

                if ($el.length) {
                    $el.val('');
                }
            },

            // print selected text
            printTextSelectedInInput: (el, text) => {
                const $modal = $('#modal');
                el.val(text);

                // hide modal
                $modal.modal('hide');
            },

            typeOfModal: {
                showTypeOfModal: (nameOfModal) => {
                    chubb.modal.typeOfModal.changeTexts(nameOfModal);
                },
                changeTexts: (nameOfModal) => {
                    const $modal = $('#modal');
                    const title = $modal.find('.modal-title');
                    const placeholder = $modal.find('input.search-input');

                    switch (nameOfModal) {
                        case 'open-marca':
                            title.text('Elija la marca de su auto')
                            placeholder.attr('placeholder', 'Buscar por marca')
                            break;
                        case 'open-modelo':
                            title.text('Elija la modelo de su auto')
                            placeholder.attr('placeholder', 'Buscar por modelo')
                            break;
                        case 'open-version':
                            title.text('Elija el modelo de su auto')
                            placeholder.attr('placeholder', 'Buscar por modelo')
                            break;
                    }
                }
            },

            openHideModal: (nameOfModalToHide) => {
                const $modal = $('#modal');
                $modal.addClass(nameOfModalToHide);
                $modal.on('hidden.bs.modal', function (e) {
                    $(this).removeClass(nameOfModalToHide);
                    chubb.modal.clearInput();
                });
            }

        }
    };

    chubb.init();

};
General();
