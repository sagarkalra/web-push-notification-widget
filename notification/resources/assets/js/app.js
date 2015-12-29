window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');
require('daterangepicker');
$('input[name="registration_date"]').daterangepicker(
  { 
    format: 'YYYY-MM-DD',
    startDate: '2013-01-01',
    endDate: '2013-12-31'
  },
  function(start, end, label) {
    alert('A date range was chosen: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  }
);