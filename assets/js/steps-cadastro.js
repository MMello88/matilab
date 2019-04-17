"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// Class Template
// =============================================================
var stepsDemo =
/*#__PURE__*/
function () {
  function stepsDemo() {
    _classCallCheck(this, stepsDemo);

    this.init();
  }

  _createClass(stepsDemo, [{
    key: "init",
    value: function init() {
      // event handlers
      this.handleValidations();
      this.handleSteps();
    }
  }, {
    key: "validateBy",
    value: function validateBy(trigger) {
      var $trigger = $(trigger); //Botão diparado
      var group = $trigger.data().validate; // retorna o valor "fieldset01" da propriedade data-validate que está no botão
      var groupId = $trigger.parents('.content').attr('id'); // retorna o valor "test-l-1" id da div
      var $groupStep = $("[data-target=\"#".concat(groupId, "\"]")); // pega a barra de steps atual Ex. Conta, para depois colocar seu status
      var $form = $trigger.parents('form');
      $groupStep.removeClass('success error'); // give step item a validate state

      $.ajax({
        type: "POST",
        url: $form.attr('action'),
        data: $form.serialize(),
        success: function(data){
          var jsonData = JSON.parse(data);
          console.log(jsonData);
          if(jsonData.code == '1'){
            varToastr.delayToasts("success",jsonData.message);
            $groupStep.addClass('success');
            
            if ($trigger.hasClass('submit')) {
              window.location = concat(base_url,'accounts/view/settings');
            } else {
              stepperDemo.next();
            }
          }
          else if(jsonData.code == '2'){
            varToastr.delayToasts("info",jsonData.message);
            $groupStep.addClass('error');
          }
          else if(jsonData.code == '3'){
            varToastr.delayToasts("warning",jsonData.message);
            $groupStep.addClass('error');
          }
          else if(jsonData.code == '4'){
            varToastr.delayToasts("danger",jsonData.message);
            $groupStep.addClass('error');
          }

        },
        error: function(data) {
          varToastr.delayToasts("danger",data);
          $groupStep.addClass('error');
        }
      });

      /*$('#stepper-form').parsley().on('form:validate', function (formInstance) {
        var isValid = formInstance.isValid({
          group: group
        }); // normalize states

        $groupStep.removeClass('success error'); // give step item a validate state

        if (isValid) {
          $groupStep.addClass('success'); // go to next step or submit

          if ($trigger.hasClass('submit')) {
            $('#submitfeedback').toast('show');
            console.log($('#stepper-form').serializeArray());
          } else {
            stepperDemo.next();
          }
        } else {
          $groupStep.addClass('error');
        }
      }).validate({
        group: group
      }); // kill listener
      

      $('#stepper-form').parsley().off('form:validate');*/
    }
  }, {
    key: "handleValidations",
    value: function handleValidations() {
      var self = this; // validate on next buttons

      $('.next').on('click', function () {
        console.log("next");
        self.validateBy(this);
      }); // prev buttons

      $('.prev').on('click', function () {
        var $trigger = $(this);
        var groupId = $trigger.parents('.content').attr('id');
        var $groupStep = $("[data-target=\"#".concat(groupId, "\"]")); // normalize states

        $groupStep.removeClass('success error');
        $groupStep.prev().removeClass('success error');
        stepperDemo.previous();
      }); // save creadit card

      $('#savecc').on('click', function () {
        $('#stepper-form').parsley().whenValidate({
          group: 'creditcard'
        });
      }); // submit button

      $('.submit').on('click', function () {
        console.log("submit");
        self.validateBy(this);
      });
    }
  }, {
    key: "handleSteps",
    value: function handleSteps() {
      var selector = document.querySelector('#stepper');
      window.stepperDemo = new Stepper(selector, {
        linear: false
      });
    }
  }]);

  return stepsDemo;
}();
/**
 * Keep in mind that your scripts may not always be executed after the theme is completely ready,
 * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
 */


$(document).on('theme:init', function () {
  new stepsDemo();
});