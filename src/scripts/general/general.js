import $ from 'jquery';
import PopperJs from 'popper.js';
import Boostrap from 'bootstrap';
import { isMobile, DownTo, UpTo } from '../utils/utils';

export default function General() {
    const chubb = {
        init: () => {
            $(document).ready(function(){
                chubb.ready();
            }); 
        },

        ready: () => {
            chubb.toolResponsive();
            chubb.menu.hamburguerMenu();
            chubb.formValidation.init();
            chubb.menu.menuActive();
            // chubb.modal.init();
            chubb.typeTextArea();
            chubb.boxes.init();
            // chubb.popOver();
            // chubb.modalPlan.init();
            chubb.popUp();
            chubb.mobileClass();
            chubb.cover.open();
            // chubb.heightMenuFix();
            chubb.resize();
            chubb.checkBoxOne();
        },

        resize: () => {
            $(window).on('resize', function() {
                // chubb.heightMenuFix();
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
                    const $parent = $(this).parent().closest($box);
                    if ($box.hasClass('active')) {
                        $parent.siblings().removeClass('active')
                        $parent.toggleClass('active');
                    } else {
                        $parent.toggleClass('active');
                    }

                    // setTimeout(() => {
                    //     chubb.heightMenuFix();
                    //     console.log('time')
                    // }, 100);
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
                } 
            })
            
        },

        heightMenuFix: () => {
            let $contentH = $('.cFull')[0].scrollHeight;
            let $header = $('.header')[0].scrollHeight;

            const $menu = $('.menu, .content');

            $menu.height('100%');

            if ( UpTo('md') ) {
                $menu.height($contentH - $header);
            } else {
                $menu.height('100%');
            }

            console.log('height: ',$menu.height())
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

        checkBoxOne: () => {
            $('input.oneSelected').on('change', function() {
                $('input.oneSelected').not(this).prop('checked', false);  
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
            
        }
        
    };

    chubb.init();

};
General();
