$(document).ready(function() {
    $(window).load(function() {

        const botonAceptarCookies = document.getElementById('btn-aceptar-cookies');
        const avisoCookies = document.getElementById('aviso-cookies');
        const fondoAvisoCookies = document.getElementById('fondo-aviso-cookies');

        function Preloader() {
            var preloader = $('.preloader');
            preloader.delay(7000).fadeOut('slow');
        }

        dataLayer = [];

        if (!localStorage.getItem('cookies-aceptadas')) {
            avisoCookies.classList.add('activo');
            fondoAvisoCookies.classList.add('activo');

            Preloader();
        } else {
            $('.preloader').hide();
            dataLayer.push({ 'event': 'cookies-aceptadas' });
        }

        botonAceptarCookies.addEventListener('click', () => {
            avisoCookies.classList.remove('activo');
            fondoAvisoCookies.classList.remove('activo');

            sessionStorage.setItem('.preloader', true);

            localStorage.setItem('cookies-aceptadas', true);


            dataLayer.push({ 'event': 'cookies-aceptadas' });
        });
    });
});