$(document).ready(function() {
    $('#order_list').DataTable( {

    "scrollX": true,
    columnDefs: [
      {bSortable: false, targets: [5]},
    ],

    "oLanguage": {
      "sSearch": "",
      "sSearchPlaceholder": "Search Accounts..."
    }
    }
    );
} );
$(document).ready(function() {
    $('#payment_list').DataTable( {

    "oLanguage": {
      "sSearch": "",
      "sSearchPlaceholder": "Search Records..."
    }
    }
    );
} );

$('#password, #confirm_password').on('keyup', function () {
  $('#button').prop('disabled', true);
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('').css('color', 'green');
    $('#button').prop('disabled', false);
  } else 
    $('#message').html('Password Not Matching').css('color', 'red');
});