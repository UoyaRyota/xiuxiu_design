jQuery(function ($) {

  function contactFocus($input,$label) {
  $($input).blur(function() {
    if($(this).val().length === 0) {
      $($label).removeClass("focus");
    } else {
      return;
    }
    })
    .focus(function(){
      $($label).addClass("focus")
    });
  }
  contactFocus('.test1', '.nice-label');
  contactFocus('.test2', '.nice-label2');
  contactFocus('.test3', '.nice-label3');
  contactFocus('.test4', '.nice-label4');

  function addValidationClass ($formId,$class,$validation) {

    $($formId).validationEngine(
      'attach', {
          promptPosition: "bottom"//エラーメッセージ位置の指定
      }
  );
    $($class).addClass($validation);
  }
  addValidationClass('#validation-id','.test1','validate[required]');
  addValidationClass('#validation-id','.test2','validate[required]');
  addValidationClass('#validation-id','.test3','validate[custom[email]]');
  addValidationClass('#validation-id','.textarea-sample','validate[minSize[100]]');
});