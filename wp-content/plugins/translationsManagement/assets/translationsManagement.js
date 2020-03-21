;(function ($) {
  "use strict";

  var AdminManagement = {
    request: undefined,
    translator: undefined,
    selectedRequest: undefined,
    selectedTranslator: undefined,
    requestID: undefined,
    translatorID: undefined,
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
      $('#admin_confirm_selection').click(AdminManagement.confirmSelection);
    },

    requestSelect: function () {
      $(this).css('background-color', '#EBDEF0');
      AdminManagement.selectedRequest = $(this);
      AdminManagement.requestID = $(this).data('id');
    },

    translatorSelect: function () {
      $(this).css('background-color', '#FADBD8');
      AdminManagement.selectedTranslator = $(this);
      AdminManagement.translatorID = $(this).data('id');
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
      AdminManagement.requestID = undefined;
      AdminManagement.translatorID = undefined;
      AdminManagement.adminConfirmActions.hide();
    },

    confirmSelection: function () {
      $.ajax({
        url: adminAjax.url,
        type: 'POST',
        data: {
          action: 'assignTranslator',
          requestID: AdminManagement.requestID,
          translatorID: AdminManagement.translatorID
        },
        success: function (response) {
          console.log(response);
        }
      });
    }
  };

  $(function () {
    AdminManagement.init();
  })

})(jQuery);
