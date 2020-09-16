window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
try {
    window.$ = window.jQuery = require('jquery'); //Esto me incluye el jQuery
    window.Popper = require('popper.js').default;
    Chart = require('chart.js');

    require('bootstrap');
    require('datatables.net')(window, $); //ESto activo el datatable.net
    require('jszip');
    require('pdfmake');
    require('datatables.net-dt')();
    require('datatables.net-buttons-dt')();
    require('datatables.net-buttons/js/buttons.colVis.js')();
    require('datatables.net-buttons/js/buttons.flash.js')();
    require('datatables.net-buttons/js/buttons.html5.js')();
    require('datatables.net-buttons/js/buttons.print.js')();
    require('datatables.net-searchpanes-dt')();
} catch (e) {}
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

/* require('jquery'); */
/* var $ = require('jquery'); */
/* require('datatables.net')(window, $); */
/* require( 'datatables.net-bs4' )(window, $);
require( 'datatables.net-buttons-bs4' )(window, $); */