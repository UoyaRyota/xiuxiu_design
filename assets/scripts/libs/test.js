function load_effect() {
  var element = document.getElementsByClassName('scroll-up');
  if(!element) return; // 要素がない場合は終了
  
  for(var i = 0; i < element.length; i++) { 
    element[i].classList.add('is-show');
  }
}
setTimeout(load_effect, 300); // 600ミリ秒経過後に実行
