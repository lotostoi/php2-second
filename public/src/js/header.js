class $ {
  static el = (val, cont = document) => cont.querySelector(val)
  static all = (val, cont = document) => cont.querySelectorAll(val)
}

const _await = (time) =>
  new Promise((res) => {
    setTimeout(() => res(), time)
  })
async function setMessage(message, value) {
  message.innerHTML = value
  message.classList.remove('hiden')
  await _await(3000)
  message.classList.add('hiden')
  message.innerHTML = ''
}

// active scroll

new SmoothScroll(['a[href*="#"]'], {speed: 600})

// *******************start menu *************************
switchViewHeader()
window.addEventListener('scroll', switchViewHeader)
function switchViewHeader() {
  let scroll = window.pageYOffset || document.documentElement.scrollTop
  let elsForModify = $.all('.modif')
  if (scroll > 5) {
    elsForModify.forEach((e) => e.classList.add('active'))
  } else {
    elsForModify.forEach((e) => e.classList.remove('active'))
  }
}
$.el('.header__cont').setAttribute('style', 'transition: padding .7s')

const onOf = $.el('.on-of')
const menu = $.el('.header__nav > .menu')
onOf.addEventListener('click', (e) => {
  e.preventDefault()
  menu.classList.toggle('active')
})

menu.addEventListener('click', (e) => {
  if (e.target.tagName === 'A') {
    menu.classList.remove('active')
  }
})

// *******************end menu *************************

const blokes = [...$.all('.resume__allInformation')]

