// Checkea si el elemento existe en la parte VISIBLE de la pantalla (window view)
export function checkIsInScreen(element, fullyInView) {
  const pageTop       = $(window).scrollTop(),
        pageBottom    = pageTop + $(window).height(),
        elementTop    = $(element).offset().top,
        elementBottom = elementTop + $(element).height();

  // CHECKEA SI EL ELEMENTO SELECCIONADO ESTA EN VISTA (si el 2do atributo pasado es false, checkea a penas aparece, si es true checkea si esta completamente en vista) ej :
  /* if (homeFvg.vitrinasDestacada.checkIsInScreen($('.home_catDestacadas'), false)) {
    primarias.addClass('active');
  } else {
    primarias.removeClass('active');
  } */

  if (fullyInView === true) {
      return ((pageTop < elementTop) && (pageBottom > elementBottom));
  } else {
      return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
  }
}

// Devuelve TRUE o  FALSE, si es un despositivo apple
export function isAppleDevice() {
  if (navigator.userAgent.match(/(iPhone|iPod|iPad)/) != null) {
    return true;
  }
  return false;
}

// LE PASAS EL ELEMENTO Q NECESITA OTRO TIPO DE CSS SI ES SAFARI (le suma la clase '.isSafari')
export function isSafari(element) {
  if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
    $(element).addClass('isSafari');
  }
}

/* ES PARA BOTON TIPO "VER MÁS", al clickearlo le cambia una clase al padre y el texto del boton clickeado
Le pasa 6 parametros:
elemento clickeado,
elemento a quien agregarle la clase,
clase que queremos aregarle,
elemento a quien cambiarle texto,
texto al hacer click (tiene un texto por defecto 'Ver menos categorías')
texto al cerrar (tiene un texto por defecto 'Ver más categorías')
*/
export function clickToggle (elementClicked, elementToAddClass, classToAddandRemove, elementToChangeText, textOpen = 'Ver menos categorías', textClose  = 'Ver más categorías') {
  $(elementClicked).find(elementToChangeText).text(textClose);

  $(elementClicked).on('click', (e) => {
    e.preventDefault();
    $(elementToAddClass).toggleClass(classToAddandRemove);

    if ($(elementToAddClass).hasClass(classToAddandRemove)) {
      $(elementClicked).find(elementToChangeText).text(textOpen);
    } else {
      $(elementClicked).find(elementToChangeText).text(textClose);
    }
  });
}
