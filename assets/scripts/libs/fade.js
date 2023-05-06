function load_effect() {
  var element = document.getElementsByClassName('scroll-up');
  if(!element) return; 
  
  for(var i = 0; i < element.length; i++) { 
    element[i].classList.add('is-show');
  }
}
setTimeout(load_effect, 300); 

