import $ from 'jquery';
import Boostrap from 'bootstrap';
import { isMobile, DownTo, UpTo, toolResponsive } from '../utils/utils';
// import Pikaday from 'pikaday';

export default function General() {
    const chubb = {
        init: () => {
            $(document).ready(function(){
                chubb.ready();
            }); 
        },

        ready: () => {
            toolResponsive();
            chubb.formValidation.init();
            chubb.boxes.init();
            chubb.popUp();
            chubb.cover();
            chubb.checkBoxOne();
            chubb.seeMore();
            // const picker = new Pikaday({
            //     field: document.getElementById('datepicker'),
            //     format: 'dd-M-yy',
            //     onSelect: function() {
            //         console.log(this.getMoment().format('dd-M-yy'));
            //     }
            // });
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
