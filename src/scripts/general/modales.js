import $ from 'jquery';
import PopperJs from 'popper.js';
import Boostrap from 'bootstrap';
// import { isMobile, DownTo, UpTo } from '../utils/utils';

export default function Modales() {
  const chubb = {
    init: () => {
      $(document).ready(function() {
        chubb.ready();
      })
    },
    ready : () => {
      chubb.inputClick();
      chubb.selectType();
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
            chubb.nameModal($this);
            chubb.withOutModel($this);
            chubb.getLiFiltered($this, $nameModal);
        })
    },

    nameModal: (el) => {
        const nameOfModal = el.attr('rel');
        chubb.typeOfModal.showTypeOfModal(nameOfModal)
        chubb.openHideModal(nameOfModal);
    },

    selectType: () => {
        const $search = $('input.search-input');
        $search.on('input', function() {
            let that = this.value;
            chubb.filterBrands(that);
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
                chubb.printTextSelectedInInput(clicked, text, modalName);
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
                chubb.printTextSelectedInInput(clicked, text);
                clicked.removeClass('open');
            }
        })
    },

    // clean input when close modal
    clearInput: () => {
        const $modal = $('#modalSelect');
        const $el = $modal.find('input.search-input');

        chubb.filterBrands('');

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
                chubb.removeAccesories();
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
            chubb.typeOfModal.changeTexts(nameOfModal);
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
            chubb.clearInput();
        });
    }

    
  }

  chubb.init();
}
Modales();