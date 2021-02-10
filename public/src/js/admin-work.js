const img = document.querySelector('.img-work')
const cont = document.querySelector('.picture')
const path = document.querySelector(`input[name="linkToImg"]`)

if (!img.value) {
    cont.innerHTML = `<span>No picture..</span>`
}

img.addEventListener('change', async (e) => {

    const body = new FormData()
    body.append('file', e.target.files[0])
    const { link } = await http.post('work/loadImg', body)
    cont.innerHTML = `<img src="${link}">`
    path.value = link.replace("/src", "src")
    console.log(path)

})