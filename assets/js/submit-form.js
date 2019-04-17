"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// Class Template
// =============================================================
var submitForm =
/*#__PURE__*/
function () {
  function submitForm() {
    _classCallCheck(this, submitForm);

    this.init();
  }

  _createClass(submitForm, [{
    key: "init",
    value: function init() {
      // event handlers
      this.handleValidations();
    }
  }, {
    key: "validateBy",
    value: function validateBy(trigger) {
      var $trigger = $(trigger); //Botão diparado
      var $form = $trigger.parents('form');

      $.ajax({
        type: "POST",
        url: $form.attr('action'),
        data: $form.serialize(),
        success: function(data){
          var jsonData = JSON.parse(data);
          if(jsonData.code == '1'){
            varToastr.delayToasts("success",jsonData.message);
            
            if ($trigger.hasClass('submit')) {
              window.location = base_url;
            }
          }
          else if(jsonData.code == '2'){
            varToastr.delayToasts("info",jsonData.message);
          }
          else if(jsonData.code == '3'){
            varToastr.delayToasts("warning",jsonData.message);
          }
          else if(jsonData.code == '4'){
            varToastr.delayToasts("danger",jsonData.message);
          }
        },
        error: function(data) {
          varToastr.delayToasts("danger",data);
        }
      });
    }
  }, {
    key: "handleValidations",
    value: function handleValidations() {
      var self = this; // validate on save buttons

      $('.sendToSave').on('click', function () {
        console.log(this);
        //self.validateBy(this);
      });
    }
  }]);

  return submitForm;
}();
/**
 * Keep in mind that your scripts may not always be executed after the theme is completely ready,
 * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
 */


$(document).on('theme:init', function () {
  new submitForm();
});