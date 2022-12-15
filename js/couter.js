
  function rander(){
    document.getElementById('output').textContent = 
    Math.floor(Math.random()*(10))+5;
}
window.setInterval(rander, 80);