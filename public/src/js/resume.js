class DropWindow {
    constructor(options) {
        this.$el = typeof options.contSel === 'string' ? $.el(options.contSel) : options.contSel
        this.$button = $.el(options.switchSel, this.$el)
        this.$indicator = $.el(options.indicator, this.$el)
        this.$content = $.el(options.contentSel, this.$el)
        this.height = 0
        this._handler()
        this._getHeight()
    }

    async _getHeight() {
        let { $content, $indicator } = this
        if (!$content.classList.contains('active')) {
            $content.classList.add('measuring')
            await _await(100)
            this.height = $content.offsetHeight
            await _await(100)
            $content.classList.remove('measuring')
            await _await(100)
        } else {
            await _await(300)
            this.height = $content.offsetHeight
            $content.style.height = `${this.height}px`
            $indicator && $indicator.classList.add('active')
        }
        $content.style.transition = 'margin 300ms,padding 300ms, height 300ms, opacity 300ms'
    }

    async _switchWindow(e) {
        let { $content, $indicator } = this
        if (!$content.classList.contains('active')) {
            $content.classList.add('active')
            $indicator && $indicator.classList.add('active')
            $content.style.height = `${this.height}px`
        } else {
            $indicator && $indicator.classList.remove('active')
            $content.classList.remove('active')
            $content.style.height = `${0}px`
        }
    }
    _handler() {
        this.$button.addEventListener('click', this._switchWindow.bind(this))
    }
}

const blokes = [...$.all('.resume__allInformation')]

blokes.forEach(async (b) => {
    const bloke = {
        contSel: b,
        switchSel: '.title',
        contentSel: '.content',
        indicator: 'i',
        animTime: 700,
    }
    new DropWindow(bloke)
})