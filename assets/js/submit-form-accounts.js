"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// Class Template
// =============================================================
var $image_crop;

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
          console.log(jsonData);
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
    key: "uploadAvatarClick",
    value: function uploadAvatarClick(trigger) {
      var toastmsg = varToastr;
      $image_crop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
      }).then(function(response){
        $.ajax({
          type: "POST",
          url: base_url + "Accounts/settings_upload_avatar",
          data:{"image": response},
          success:function(data)
          {
            var jdata = JSON.parse(data);
            if(jdata.code == '1'){
              $("#imgAvatarNavBar").attr("src", base_url_assets + "assets/images/avatars/" + jdata.img);
              $("#imgAvatarHeader").attr("src", base_url_assets + "assets/images/avatars/" + jdata.img);
              $("#imgAvatar").attr("src", base_url_assets + "assets/images/avatars/" + jdata.img);
              toastmsg.delayToasts("info",jdata.message);
            } else {
              toastmsg.delayToasts("info",jdata.message);
            }
          },
          error: function(data){
            toastmsg.delayToasts("danger", data);
          }
        });
      })
    }
  }, {
    key: "uploadAvatarChange",
    value: function uploadAvatarChange(trigger) {
      var reader = new FileReader();
      reader.onload = function (event) {
        $image_crop.croppie('bind', {
          url: event.target.result
        }).then(function(){
          console.log('jQuery bind complete');
        });
      }
      reader.readAsDataURL(trigger.files[0]);
      //$('#avatarModal').modal('show');
    }
  }, {
    key: "clearInput",
    value: function clearInput(trigger, tipo) {
      var $trigger = $(trigger); //Botão diparado
      var $form = $trigger.parents('form');
      if (tipo == "ClearPass"){
        $("input[type='password']").val('');
      }
    }
  }, {
    key: "handleValidations",
    value: function handleValidations() {
      var self = this; // validate on save buttons

      $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
          width:200,
          height:200,
          type:'square' //circle, square
        },
        boundary:{
          width:300,
          height:300
        }
      });

      $('.sendToSave').on('click', function () {
        self.validateBy(this);
      });

      $('.sendToSaveAvatar').on('click', function () {
        self.uploadAvatarClick(this);
      });

      $('.viewAvatar').on('change', function () {
        self.uploadAvatarChange(this);
      }); 

      $('.clearPass').on('click', function () {
        self.clearInput(this, 'ClearPass');
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