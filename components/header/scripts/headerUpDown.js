const headerToChange = document.getElementById('header-animated')

document.addEventListener('scroll', function() {
    if (window.scrollY == 0) {
      headerToChange.classList.value = 'on-top'
    }
    else if (window.scrollY >= 1) {
      headerToChange.classList.value = ''
    }
})