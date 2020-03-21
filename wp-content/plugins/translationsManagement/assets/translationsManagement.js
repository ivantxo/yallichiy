;(function ($) {
  "use strict";

  var AdminManagement = {
    request: undefined,
    translator: undefined,
    selectedRequest: undefined,
    selectedTranslator: undefined,
    adminConfirmRequest: undefined,
    adminConfirmTranslator: undefined,
    adminConfirmActions: undefined,

    init: function () {
      AdminManagement.request = $('.request');
      AdminManagement.translator = $('.translator');
      AdminManagement.selectedRequest = undefined;
      AdminManagement.selectedTranslator = undefined;
      AdminManagement.adminConfirmRequest = $('#admin_confirm_request');
      AdminManagement.adminConfirmTranslator = $('#admin_confirm_translator');
      AdminManagement.adminConfirmActions = $('#admin_confirm_actions');
      AdminManagement.bindActions();
    },

    bindActions: function () {
      this.request.click(AdminManagement.requestSelect);
      this.translator.click(AdminManagement.translatorSelect);
      $('#admin_clear_selection').click(AdminManagement.clearSelection);
    },

    requestSelect: function () {
      $(this).css('background-color', '#EBDEF0');
      AdminManagement.selectedRequest = $(this);
    },

    translatorSelect: function () {
      $(this).css('background-color', '#FADBD8');
      AdminManagement.selectedTranslator = $(this);
      if (typeof AdminManagement.selectedRequest !== 'undefined' &&
        typeof AdminManagement.selectedTranslator !== 'undefined') {
        AdminManagement.adminConfirmRequest.html(AdminManagement.selectedRequest.html());
        AdminManagement.adminConfirmTranslator.html(AdminManagement.selectedTranslator.html());
        AdminManagement.adminConfirmActions.show();
      }
    },

    clearSelection: function () {
      AdminManagement.selectedRequest.css('background-color', '#FFFFFF');
      AdminManagement.selectedTranslator.css('background-color', '#FFFFFF');
      AdminManagement.adminConfirmRequest.html('');
      AdminManagement.adminConfirmTranslator.html('');
      AdminManagement.selectedRequest = undefined;
      AdminManagement.selectedTranslator = undefined;
      AdminManagement.adminConfirmActions.hide();
    }

    // click en confirmar ajax request
  };

  $(function () {
    AdminManagement.init();
  })

})(jQuery);
