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
  const button = wrapper.querySelector(`button[data-id="${e.target.dataset.id}"]`)
  const id = +e.target.dataset.id
  if (e.target.tagName === 'INPUT') {
    if (button.classList.contains('block')) {
      button.classList.remove('block')
      button.removeAttribute('disabled')
    } else {
      button.classList.add('block')
      button.setAttribute('disabled', 'disabled')
    }
  }

  if (e.target.tagName === 'BUTTON') {
    e.preventDefault(addForm)
    const { result } = await http.post('technologies/del', { id: id })
    if (result) {
      wrapper.querySelector(`div[data-wrapp="${id}"]`).remove()
    }
  }
})

function renderElem({ id, title, linkToImg }) {
  return `
            <div class="technology" data-wrapp="${id}">
				<div class="content-technology">
				    <img src="${linkToImg}" alt="html">
					<span>${title}</span>
				</div>
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
