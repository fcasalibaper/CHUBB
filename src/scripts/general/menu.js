import $ from 'jquery';
import { isMobile, DownTo, UpTo } from '../utils/utils';

export default function Menu() {
  const chubb = {
    init: () => {
      $(document).ready(function() {
        chubb.ready();
      })
    },
    ready : () => {
      chubb.resize();
      chubb.menu.hamburguerMenu();
      chubb.menu.menuActive();
      chubb.mobileClass();
      
    },
    resize: () => {
      $(window).on('resize', function() {
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
  
    menu : {
      actionResize : () => {
          if ( DownTo('sm') && !$('body').hasClass('closeMenu') ) {
              $('body').addClass('closeMenu')
          } else if ( UpTo('md') && $('body').hasClass('closeMenu') ) {
              $('body').removeClass('closeMenu')
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
    }
  }
  chubb.init();
}
Menu();