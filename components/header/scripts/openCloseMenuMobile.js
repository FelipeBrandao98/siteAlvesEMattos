const openCloseMenu = document.getElementById('open-close-menu-mobile')
const menuMobile = document.getElementById('header-menu')

function openCloseMenuMobile() {
  menuMobile.classList.toggle('hide')
}

openCloseMenu.addEventListener('click', () => {
  openCloseMenuMobile()
})