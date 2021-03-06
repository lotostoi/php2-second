const addTag = $.el('#add-tag')
const inputTag = $.el('#admin-filters-tag')
const newTag = $.el('#new-tag')
const errorMessage = $.el('.filters-error')
const message = $.el('.filters-message')
const containerForTags = $.el('.admin-filters__wrapper')
const textError = `Ошибка при обращении к серверу. Потворите попытку позже...`
const wrapper = $.el('.admin-filters')
wrapper.addEventListener('click', async (e) => {
    const el = e.target
    e.preventDefault()
    if (el === addTag) {
        try {
            const body = new FormData(newTag)
            const {
                result,
                error,
                id
            } = await http.post('filters/add', body)
            if (error) {
                setMessage(errorMessage, error)
                newTag.reset()
            }
            if (result) {
                const tag = {
                    id: id,
                    name: inputTag.value,
                }
                containerForTags.insertAdjacentHTML('beforeEnd', renderTag(tag))
                setMessage(message, `Tэг ${inputTag.value} успешно добавлен!`)
                newTag.reset()
            }
        } catch (e) {
            console.log(e)
            setMessage(errorMessage, textError)
        }
    }
    if (el.dataset.delete) {
        const id = el.dataset.delete
        const tag = $.el(`input[data-input="${id}"]`).value
        try {
            await http.get(`filters/del?id=${id}`)
            setMessage(message, `Тэг ${tag.value} успешно удален`)
            $.el(`div[data-tag="${id}"]`).classList.add('hiden')
        } catch (e) {
            console.log(e)
            setMessage(errorMessage, textError)
        }
    }
    if (el.dataset.save) {
        const id = el.dataset.save
        const tag = $.el(`input[data-input="${id}"]`)
        try {
            await http.post(
                `filters/edit`, {
                id,
                tag: tag.value,
            },
                true
            )
            setMessage(message, `Тэг ${tag.value} успешно изменен`)
        } catch (e) {
            console.log(e)
            setMessage(errorMessage, textError)
        }
    }
})

function renderTag({
    id,
    name
}) {
    return `
                    <div class="filter" data-tag = "${id}">
                        <input type="text" data-input="${id}" value="${name}">
                        <button data-save="${id}">Сохранить</button>
                        <button data-delete="${id}">Удалить</button>
                    </div>
                `
}