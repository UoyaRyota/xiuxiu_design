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
});