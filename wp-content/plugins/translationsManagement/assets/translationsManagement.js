jQuery(document).ready(function($) {
  var request = $('.request');
  var translator = $('.translator');
  var requestID = undefined;
  var translatorID = undefined;

  request.click(function () {
    $(this).css('background-color', '#EBDEF0');
    requestID = $(this).attr('id');
    console.log('id', requestID);
  });

  translator.click(function () {
    $(this).css('background-color', '#FADBD8');
    translatorID = $(this).attr('id');
    console.log('id', translatorID);
    if (typeof requestID !== 'undefined' && typeof translatorID !== 'undefined') {
      $('#admin_confirm_request').html($('#' + requestID).html());
      $('#admin_confirm_translator').html($('#' + translatorID).html());
      $('#admin_confirm_actions').show();
    }
  });
});
