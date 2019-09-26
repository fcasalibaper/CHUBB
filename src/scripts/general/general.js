import $ from 'jquery';
import PopperJs from 'popper.js';
import Boostrap from 'bootstrap';

export default function General() {
    // ESPECIFICO DE LANDING HOTSALE
    const chubb = {
        init: () => {
            $(document).ready(function(){
                chubb.ready();
            }); 
        },

        ready: () => {
            chubb.toolResponsive();
            chubb.hamburguerMenu();
            chubb.formValidation();
            chubb.modal.init();
            chubb.typeTextArea();
            chubb.progressBar();
            // chubb.popOver();
            // chubb.modalPlan.init();
        },

        popOver: () => {
            $('[data-toggle="popover"]').popover({
                trigger: 'hover'
            })
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

        progressBar: () => {
            const timeline = $('.timeline').find('.progress-bar');
            let porcentaje = timeline.attr('aria-valuenow');
            timeline
                .css('width',`${porcentaje}%`).find('span').text(`${porcentaje}%`);

            if (porcentaje >= 0) {
                $('.point.point1').addClass('active');
            } 
            if (porcentaje >= 50) {
                $('.point.point2').addClass('active');
            } 
            if (porcentaje >= 100) {
                $('.point.point3').addClass('active');
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

        hamburguerMenu: () => {
            $('.hamburger-button').on('click', function(event){
                event.preventDefault();
                
                $(this).toggleClass('active');
                $('body').toggleClass('menuVisible');
            });
        },

        formValidation : () => {
            var forms = $('.needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
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

                    // avoid onClick repetition 
                    $('.falseSelect').removeClass('open');
                });
            }

        }
    };

    chubb.init();

};
General();
