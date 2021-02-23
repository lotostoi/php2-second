const REG_EXPS = {
    'name': ['^[а-яА-ЯёЁA-z ]{3,}$', 'i'],
    'phone': ['^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$'],
    'email': ['^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$'],
    'message': ['^[?!,.а-яА-ЯёЁA-z1-9 ]{3,}$', 'i']
}

class ValidForm {
    constructor(options) {
        this.form = document.getElementById(options.mainSelector) || null
        this.fieldsForValid = options.inputTypeForValid ?? ['name', 'email', 'message']
        this.button = typeof options.button === 'string' ? this.form.querySelector(options.button) : options.button
        this.regExps = options.regExps ? { ...REG_EXPS, ...options.regExps } : REG_EXPS
        this._init()
    }
    _init() {
        this._getFieldsForValid()
        this._validForm()
        this._setHandlers()
    }

    _getFieldsForValid() {
        let { form, fieldsForValid } = this
        this.fieldsForValid = fieldsForValid
            .map(fieldName => {
                const el = form.querySelector(`[name="${fieldName}"]`)
                const name = el.name
                const regExp = new RegExp(...this.regExps[name])
                const elError = form.querySelector(`[data-name="${fieldName}"]`)
                let result = false
                return { el, name, regExp, elError, result }
            })
            .filter(input => typeof input !== 'string')
        return fieldsForValid
    }

    set valid(value) {
        this._valid = value
        value ? this.buttonUnBlock() : this.buttonBlock()
        return true
    }
    get valid() {
        return this._valid
    }

    buttonBlock() {
        this.button.setAttribute("disabled", "disabled")
        this.button.classList.add('block')
    }
    buttonUnBlock() {
        this.button.removeAttribute("disabled")
        this.button.classList.remove('block')
    }
    buttonLoad() {
        this.buttonBlock()
        $.el('span', this.button).classList.add('block')
        $.el('div', this.button).classList.remove('block')
    }
    buttonOnLoad() {
        this.buttonBlock()
        $.el('span', this.button).classList.remove('block')
        $.el('div', this.button).classList.add('block')
    }
    clearForm() {
        this.form.reset()
    }
    showResult() {
        const el = $.el(`[data-result="saccess"]`, this.form)
        el.classList.remove('block')
        setTimeout(() => { el.classList.add('block') }, 4000)
    }
    showError() {
        const el = $.el(`[data-result="error"]`, this.form)
        el.classList.remove('block')
        setTimeout(() => { el.classList.add('block') }, 4000)
    }
    _validForm(name = null, value = null) {
        this.valid = false
        if (!name) return
        const field = this.fieldsForValid.find(el => el.name === name)
        if (field) {
            field.result = field.regExp.test(value) ? true : false
            if (!field.result) {
                field.el.classList.add('error')
                field.el.classList.remove('success')
                field.elError.classList.remove('block')

            } else {
                field.el.classList.remove('error')
                field.el.classList.add('success')
                field.elError.classList.add('block')
            }
        }
        this.valid = this.fieldsForValid.some(field => !field.result) ? false : true
    }

    _setHandlers() {
        this.form.addEventListener('input', (e) => {
            e.preventDefault()
            const el = e.target
            if (this.fieldsForValid.find(field => field.el === el)) {
                this._validForm(el.name, el.value.trim())
            }
        })
    }
}

const MyForm = new ValidForm({
    mainSelector: "footerForm",
    button: '.sendMessage'
})


const button = document.querySelector('.sendMessage')
const form = document.getElementById('footerForm')

button.addEventListener('click', async (e) => {
    e.preventDefault()
    try {
        MyForm.buttonLoad()
        const { result } = await http.post('feedback/send', new FormData(form))
        if (result) {
            MyForm.buttonOnLoad()
            MyForm.showResult()
            MyForm.buttonUnBlock()
            MyForm.clearForm()
        } else {
            MyForm.buttonOnLoad()
            MyForm.buttonUnBlock()
            MyForm.showError()
        }
    } catch (e) {
        MyForm.buttonOnLoad()
        MyForm.buttonUnBlock()
        MyForm.showError()
    }
})