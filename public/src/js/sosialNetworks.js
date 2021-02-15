const checkedNetwork = $.el('#checked_network')
if (checkedNetwork) {
  checkedNetwork.addEventListener('change', (e) => {
    if (checkedNetwork.checked) {
      $.el('#vk_save').value = $.el('#fb_save').value = 1
    } else {
      $.el('#vk_save').value = $.el('#fb_save').value = 0
    }
  })
}