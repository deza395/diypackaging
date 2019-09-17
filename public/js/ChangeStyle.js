
window.addEventListener('load', function () {
    var cssStyles = document.querySelector('#style');
    var styleButton = document.querySelector('#btn-style');
    var styleLogo= document.querySelector('#logo');

    if (styleButton) {

        styleButton.addEventListener('click', function () {


            if (cssStyles.getAttribute('href') == '/css/change.css') {
                cssStyles.setAttribute('href', '/css/home.css');
            } else {
                cssStyles.setAttribute('href', '/css/change.css');
            }

            if (styleLogo.getAttribute('src') == '/img/logo-diy2.png') {
                styleLogo.setAttribute('src', '/img/logo-diy.png');
            } else {
              styleLogo.setAttribute('src', '/img/logo-diy2.png');
                        }


             localStorage.setItem('cssCookie', cssStyles.getAttribute('href'));
             localStorage.setItem('logoCookie', styleLogo.getAttribute('src'));
         })
      }

     cssStyles.setAttribute('href', localStorage.getItem('cssCookie'));
      styleLogo.setAttribute('src', localStorage.getItem('logoCookie'));

});
