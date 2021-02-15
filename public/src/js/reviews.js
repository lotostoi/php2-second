const reviews = document.querySelector('#reviews')
const wrapperForReviews = document.querySelector('.reviews-body__wrapper')
const loadMore = document.querySelector('.loadMore')

let amountReviews = 0
let step = 2
loadMore.addEventListener('click', async e => {
  e.preventDefault()
  const review = await http.get(`reviews/limit?limit=${(amountReviews += step)}`)
  review.forEach(rev => {
    const _review = renderReview(rev)
    insertReviewInEnd(wrapperForReviews, _review)
  })
})

reviews.addEventListener('click', async e => {

  if (e.target.id) {
    e.preventDefault()
    let body = new FormData(document.getElementById('add-reviews'))
    try {
      const review = await http.post('reviews/add', body)
      if (review.result === 'ok') {
        document.querySelector('.message').classList.add('hiden')
        const rev = renderReview(review)
        insertReview(wrapperForReviews, rev)
      } else {
        document.querySelector('.message').classList.remove('hiden')
      }
    } catch (e) {
      console.log(e)
    }
  }

  if (e.target.dataset.edit) {
    e.preventDefault()
    const el = e.target
    const id = e.target.dataset.edit
    const parenet = el.parentNode
    parenet.querySelector('.review_save').classList.toggle('hiden')
    parenet.querySelector('.review_edit').classList.toggle('hiden')
    reviews.querySelector(`textarea[data-text="${id}"]`).classList.toggle('hiden')
  }
  if (e.target.dataset.save) {
    e.preventDefault()
    const el = e.target
    const id = e.target.dataset.save
    const parenet = el.parentNode
    const text = reviews.querySelector(`textarea[data-text="${id}"]`)
    const rev = reviews.querySelector(`p[data-rev="${id}"]`)
    let body = new FormData()
    body.append('id', id)
    body.append('review', text.value)
    try {
      const result = await http.post('reviews/edit', body)
      rev.innerHTML = text.value
      el.classList.toggle('hiden')
      text.classList.toggle('hiden')
      parenet.querySelector('.review_edit').classList.toggle('hiden')
    } catch (e) {
      console.log(e)
    }
  }
  if (e.target.dataset.del) {
    e.preventDefault()
    const el = e.target
    const id = e.target.dataset.del
    let body = new FormData()
    body.append('id', id)
    try {
      const result = await http.post('reviews/delete', body)
      reviews.querySelector(`form[data-form="${id}"]`).classList.toggle('hiden')
      amountReviews--
    } catch (e) {
      console.log(e)
    }
  }
})

function insertReview(container, review) {
  container.insertAdjacentHTML('afterbegin', review)
}

function insertReviewInEnd(container, review) {
  container.insertAdjacentHTML('beforeEnd', review)
}

function renderReview({ img_small, link_network, user, review, id, date, accessForEdit, admin }) {
  console.log(review)
  const edit =
    accessForEdit || admin
      ? ` 
            <div class="edit" data-parent="${id}">
                <button class="review_edit" data-edit="${id}"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                <button class="hiden review_save" data-save="${id}"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                <button class="review_del" data-del="${id}"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </div>
          `
      : ''
  return `
          <form class="reviews-body__review" data-form="${id}">
                  <div class="user">
                    <div class="nick">
                      <img src="${img_small}" alt="user-image" />
                      <a href="${link_network}"> ${user} </a>
                    </div>
                    <p data-rev="${id}" class="review">${review}</p>
                    <textarea class="edit_review hiden" type="text" name="edit_review"data-text="${id}">${review}</textarea>
                    <div class="date">${date}</div>
                  </div>        
                  ${edit}
              </form>
          `
}

