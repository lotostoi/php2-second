const accessDel = document.querySelector('.accessDel')
const btn = document.querySelector('.delete')

let flag = false

accessDel.addEventListener('click', (e) => {

    btn.classList.toggle('block')
    flag = !flag

})

btn.addEventListener('click', (e) => {
    if (!flag) e.preventDefault()
})