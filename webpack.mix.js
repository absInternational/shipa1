const mix = require('laravel-mix');

mix.styles([
    'public/frontend/css/bootstrap.min.css',
    'public/frontend/css/meanmenu.css',
    'public/frontend/css/sal.css',
    'public/frontend/css/magnific-popup.css',
    'public/frontend/css/swiper.min.css',
    'public/frontend/css/owl.carousel.css',
    'public/frontend/css/icons.css',
    'public/frontend/css/odometer.min.css',
    'public/frontend/css/nice-select.css',
    'public/frontend/css/animate.css',
    'public/frontend/css/style.css',
    'public/frontend/css/responsive.css',
], 'public/css/app.min.css');  

mix.minify('public/css/app.min.css'); 

mix.version();
