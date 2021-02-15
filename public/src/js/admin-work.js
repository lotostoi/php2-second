const img = document.querySelector('.img-work')
const cont = document.querySelector('.picture')
const path = document.querySelector(`input[name="linkToImg"]`)
const props = document.querySelector(`input[name="change"]`)
const wrapper = document.querySelector('.admin-catalog')

const editWork = document.querySelector(".editWork")
const addWork = document.querySelector(".addWork")

let inputsChanged = ''
if (!img.value) {
    cont.innerHTML = `<span>Drop picture</span>`
}
if (path.value) {
    cont.innerHTML = `<img src="/${path.value}">`
}

img.addEventListener('change', async (e) => {

    const body = new FormData()
    body.append('file', e.target.files[0])
    const { link } = await http.post('work/loadImg', body)
    cont.innerHTML = `<img src="${link}">`
    path.value = link.replace("/src", "src")
    console.log(path)

})

let srcimg, tags, title, git, project, description

wrapper.addEventListener('input', (e) => {
    let el = e.target

    if (addWork) {

        el.name.includes('_tag_') && (tags = true)
        path.value !== '' && (srcimg = true)
        el.name == 'title' && (title = true)
        el.name == 'git' && (git = true)
        el.name == 'project' && (project = true)
        el.name == 'description' && (description = true)

        if (srcimg && tags && title && git && project && description) {
            addWork.classList.remove('block')
            addWork.removeAttribute('disabled')
            props.value = 'ok'
        }
    }

    if (editWork) {
        if (el.tagName === "INPUT" || el.tagName === "TEXTAREA") {
            props.value = 'ok'
            editWork.classList.remove('block')
            editWork.removeAttribute('disabled')
        }
    }


})

