jQuery(document).ready(function($) {
  $('.request').click(function () {
    $(this).css('background-color', '#EBDEF0');
    console.log('id', $(this).data('id'));
  });

  $('.translator').click(function () {
    $(this).css('background-color', '#FADBD8');
    console.log('id', $(this).data('id'));
  });
});
