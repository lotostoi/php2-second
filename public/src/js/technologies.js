const addForm = document.getElementById('add_technology')
const wrapper = document.querySelector('.technologyes')

addForm.addEventListener('submit', async (e) => {
  e.preventDefault(addForm)
  const result = await http.post('technologies/add', new FormData(e.target))
  if (result.id) {
    wrapper.insertAdjacentHTML('afterbegin', renderElem(result))
  }
})

wrapper.addEventListener('click', async (e) => {
  const button = wrapper.querySelector(`button.del-tec[data-id="${e.target.dataset.id}"]`)
  const id = +e.target.dataset.id

  if (e.target.type === 'checkbox') {
    if (button.classList.contains('block')) {
      button.classList.remove('block')
      button.removeAttribute('disabled')
    } else {
      button.classList.add('block')
      button.setAttribute('disabled', 'disabled')
    }
  }

  if (e.target.classList.contains('del-tec')) {
    e.preventDefault()
    const { result } = await http.post('technologies/del', { id: id })
    if (result) {
      wrapper.querySelector(`div[data-wrapp="${id}"]`).remove()
    }
  }

  if (e.target.classList.contains('edit')) {
    e.preventDefault()
    const result = await http.post('technologies/edit', new FormData(e.target.parentNode))
    if (result.length) {
      console.log(result);
      wrapper.innerHTML = ''
      const newList = result.map((tec) => renderElem(tec)).join('')
      console.log(newList);
      wrapper.insertAdjacentHTML('afterbegin', newList) 
    }
  }
})

function renderElem({ id, title, linkToImg, order }) {
  return `
            <div class="technology" data-wrapp="${id}">
				<div class="content-technology">
				    <img src="${linkToImg}" alt="html">
					<span>${title}</span>
        </div>
        <form class="edit" id="edit_technology" data-edit-from="${id}">
            <input type="hidden" name="id" value="${id}">
						<span class="name-field">Название:</span>
						<input type="text" name="title" value ="${title}">
						<span class="name-field">Порядок:</span>
						<input type="text" name="order" value="${order}">
						<input type="file" name="file" id="file">
						<button class = "edit" data-id="${id}">Редактировать</button>
				</form>
				<form class="delete" id="del_technology">
					<div class="check">
					    <input type="checkbox" name="sure" data-id="${id}">
						<p>Вы уверены?</p>
					</div>
						<button class="block del-tec" data-id="${id}" disabled>Удалить</button>
				</form>	
			</div>			
    
    `
}
