require('bootstrap');
require('./script');
// require('jquery');
window.$=window.jQuery=require('jquery');

document.Dropzone = require('dropzone');
Dropzone.autoDiscover = false;

require('./adImages');