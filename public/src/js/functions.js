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
