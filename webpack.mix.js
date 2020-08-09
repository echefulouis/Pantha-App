const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.combine([
//     'public/frontend/vendors/bootstrap/css/bootstrap.min.css',
//     'public/frontend/vendors/aos/css/aos.css',
//     'public/frontend/vendors/animate/animate.css',
//     'public/frontend/css/tailwind.css',
//     'public/frontend/css/flaticon.css',
//     'public/frontend/vendors/font-awesome-4.7.0/css/font-awesome.min.css',
//     'public/frontend/vendors/gridder-master/dist/css/jquery.gridder.css',
//     'public/frontend/vendors/owl.carousel/css/owl.carousel.min.css',
//     'public/frontend/vendors/owl.carousel/css/owl.theme.default.min.css',
//     'public/frontend/vendors/toastr/toastr.min599c.css',
//     'public/frontend/css/style.css',
//     'public/frontend/css/category-view.css'

// ], 'public/css/front-master.css');

// mix.combine([
//     'public/frontend/vendors/jquery/jquery.min.js',
//     'public/frontend/vendors/popper/popper.min.js',
//     'public/frontend/vendors/bootstrap/js/bootstrap.min.js',
//     'public/frontend/vendors/aos/js/aos.js',
//     'public/frontend/js/jquery.ui.widget.js',
//     'public/frontend/vendors/gridder-master/dist/js/jquery.gridder.min.js',
//     'public/frontend/vendors/owl.carousel/js/owl.carousel.min.js',
//     'public/frontend/vendors/toastr/toastr.min599c.js',
//     'public/frontend/js/header.js',
//     'public/frontend/js/script.js'

// ], 'public/js/front-master.js');

// mix.combine([
//     'public/frontend/vendors/bootstrap/css/bootstrap.min.css',
//     'public/frontend/vendors/aos/css/aos.css',
//     'public/frontend/vendors/animate/animate.css',
//     'public/frontend/css/tailwind.css',
//     'public/frontend/css/flaticon.css',
//     'public/frontend/vendors/font-awesome-4.7.0/css/font-awesome.min.css',
//     'public/frontend/vendors/gridder-master/dist/css/jquery.gridder.css',
//     'public/frontend/vendors/owl.carousel/css/owl.carousel.min.css',
//     'public/frontend/vendors/owl.carousel/css/owl.theme.default.min.css',
//     'public/frontend/vendors/toastr/toastr.min599c.css',
//     'public/frontend/css/style.css',
//     'public/frontend/css/category-view.css'

// ], 'public/css/front-master.css');

// mix.combine([
//     'public/frontend/vendors/jquery/jquery.min.js',
//     'public/frontend/vendors/popper/popper.min.js',
//     'public/frontend/vendors/bootstrap/js/bootstrap.min.js',
//     'public/frontend/vendors/aos/js/aos.js',
//     'public/frontend/js/jquery.ui.widget.js',
//     'public/frontend/vendors/gridder-master/dist/js/jquery.gridder.min.js',
//     'public/frontend/vendors/owl.carousel/js/owl.carousel.min.js',
//     'public/frontend/vendors/toastr/toastr.min599c.js',
//     'public/frontend/js/header.js',
//     'public/frontend/js/script.js'

// ], 'public/js/front-master.js');


mix.js('resources/js/backend/app.js', 'public/js')
	.sass('resources/sass/backend/app.scss', 'public/css');


mix.js('resources/js/frontend/frontend.js', 'public/js')
	.sass('resources/sass/frontend/frontend.scss', 'public/css');
