var counter = 2

document.getElementById('radio1').checked = true

setInterval(function(){
  document.getElementById('radio' + counter).checked = true
  counter++
  if (counter > 4) {
    counter = 1
  }
}, 5000)
