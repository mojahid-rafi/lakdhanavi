    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: #f6fafa;
            color: #2D2D2D;
            font-size: 95%;
            font-family: "Roboto";
            position: relative;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }
        ul li {
            margin: 0;
            padding: 0;
        }

        .btn {
            font: inherit;
            font-weight: 600;
            text-align: center;
            background: none;
            color: #2D2D2D;
            border: none;
            outline: none;
            cursor: pointer;
            display: inline-block;
            padding: 0.5em 1em;
            position: relative;
        }
        .btn.icon {
            line-height: 0;
            padding: 0.5em;
        }
        .btn.icon-min {
            height: 24px;
            width: 24px;
            padding: 0.15em;
        }
        .btn.primary, .btn.primary-icon {
            background-color: #fc5a29;
            color: #f6fafa;
            display: block;
            min-height: 48px;
            min-width: 48px;
        }
        .btn.primary {
            line-height: normal;
        }
        .btn.primary-icon {
            line-height: 0;
        }

        .container {
            width: 100%;
            max-width: 1620px;
            margin: auto;
            padding: 0 3em;
        }

        .modal {
            background: #f6fafa;
            position: fixed;
            overflow-y: auto;
            overflow-x: hidden;
            height: 100%;
            width: 100%;
            right: 0;
            top: 0;
            transform: translateZ(0) translateY(-100%);
            transition: transform 0.3s ease;
        }
        .modal.show {
            transform: translateZ(0) translateY(0);
        }
        .modal .modal_container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .modal .modal_container.type-menu {
            position: relative;
            height: 80%;
            width: 60%;
        }
        .modal .modal_container.type-menu .menu {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            gap: 2em;
            flex-direction: column;
            font-size: 1.5rem;
            text-align: center;
            font-weight: 600;
        }
        .modal .modal_container.type-menu .menu .menu_item {
            text-transform: uppercase;
        }

        .field_set {
            background-color: #ebeff1;
            display: block;
            position: relative;
            min-height: 48px;
            width: 100%;
        }
        .field_set .field {
            font: inherit;
            font-weight: 500;
            vertical-align: middle;
            position: absolute;
            min-width: 200px;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            display: block;
            padding: 0 1em;
            background: none;
            border: none;
            outline: none;
        }
        .field_set .field::placeholder {
            font-weight: 600;
        }

        .card {
            position: relative;
            max-width: 400px;
            min-width: 200px;
            height: 100%;
            width: 100%;
            z-index: 1;
            overflow: hidden;
            transform-origin: center;
            transition: all 0.5s ease-out;
            margin: auto;
        }
        .card::before {
            content: "";
            display: block;
            padding-top: 75%;
            position: relative;
            transform-origin: top;
            transition: all 0.3s ease-out;
            width: 100%;
        }
        .card .item_background_image, .card .meta_content {
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
        }
        .card .item_background_image img {
            position: absolute;
            height: auto;
            width: 100%;
            left: 50%;
            transform: translateX(-50%);
            transition: all 0.3s ease;
        }
        .card .meta_content {
            color: #f6fafa;
            background: linear-gradient(0deg, #12121393 -20%, transparent 45%);
            opacity: 0;
            height: 100%;
            bottom: 0;
            top: unset;
            padding: 6em 2em 2em;
            transition: all 0.3s ease;
        }
        .card .meta_content .content_block {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            padding: 2em;
        }
        .card .meta_content .content_block .brand, .card .meta_content .content_block .title {
            display: block;
            margin-right: 2em;
        }
        .card .meta_content .content_block .brand {
            font-weight: 500;
            font-size: 2.25rem;
        }
        .card .meta_content .content_block .title {
            font-weight: 400;
            font-size: 1rem;
        }
        .card.active {
            box-shadow: -60px 60px 120px -15px #00000085;
            transform: scale(1.05, 1.05);
        }
        .card.active::before {
            padding-top: 100%;
        }
        .card.active .item_background_image img {
            height: auto;
            width: 100%;
        }
        .card.active .meta_content {
            opacity: 1;
        }

        .slider {
            display: block;
            position: relative;
        }
        .slider .items {
            display: block;
            position: relative;
            width: 100%;
        }
        .slider .items .item {
            cursor: pointer;
            display: block;
            position: absolute;
            min-width: 200px;
            top: 50%;
            z-index: 0;
            transform-origin: center;
            transform: translateY(-50%);
            transition: transform 0.5s cubic-bezier(0, 0.18, 0.5, 0.99), opacity 0.5s ease, visibility 0.25s ease;
        }
        .slider .items .item.active {
            z-index: 1;
        }
        .slider .items .btn-slider-prev, .slider .items .btn-slider-next {
            background-color: #f6fafa;
            border-radius: 50%;
            display: block;
            opacity: 1;
            padding: 0;
            position: absolute;
            height: 2.5em;
            width: 2.5em;
            top: 50%;
            z-index: 1;
            transform: translateZ(0) translateY(-50%);
            transition: opacity 0.3s ease;
        }
        .slider .items .btn-slider-prev::before, .slider .items .btn-slider-next::before {
            content: "";
            display: block;
            line-height: 0;
        }
        .slider .items .btn-slider-prev.enable, .slider .items .btn-slider-next.enable {
            opacity: 1;
        }
        .slider .items .btn-slider-prev.disable, .slider .items .btn-slider-next.disable {
            cursor: default;
            opacity: 0;
        }
        .slider .items .btn-slider-prev {
            box-shadow: 6px 9px 11px -3px #2d2d2d25, inset 4px 3px 14px #c2c2c216;
            left: -1.25em;
        }
        .slider .items .btn-slider-prev:before {
            content: "<";
        }
        .slider .items .btn-slider-next {
            box-shadow: -6px 9px 11px -3px #2d2d2d25, inset -4px 3px 14px #c2c2c216;
            right: -1.25em;
        }
        .slider .items .btn-slider-next:before {
            content: ">";
        }
        .slider .indicators {
            display: flex;
            flex-flow: row nowrap;
            justify-content: end;
            align-items: end;
            gap: 1.25em;
            position: absolute;
            min-width: 40%;
            bottom: 0;
            right: 0;
        }
        .slider .indicators .numbers {
            background: red;
            color: #00000050;
            position: relative;
            z-index: 1;
        }
        .slider .indicators .numbers .number {
            cursor: pointer;
            font-size: 1.25em;
            font-weight: 600;
            text-align: center;
            line-height: 1;
            position: absolute;
            max-width: 80px;
            width: 50px;
            bottom: 0;
            z-index: 1;
            transition: transform 0.3s cubic-bezier(0, 0.18, 0.5, 0.99), opacity 0.3s ease, visibility 0.15s ease, font-size 0.3s ease;
        }
        .slider .indicators .numbers .number.active {
            color: #000000;
            font-size: 3em;
            bottom: -3px;
            z-index: 0;
        }
        .slider .indicators .scrollbar {
            position: relative;
            height: 2px;
            margin-right: 1em;
            margin-bottom: 4px;
            flex: 1;
            background: #d5e8e8;
        }
        .slider .indicators .scrollbar .scrollHandle {
            background: #fc5a29;
            position: absolute;
            height: 100%;
            left: 0;
            transition: all 0.3s cubic-bezier(0, 0.18, 0.5, 0.99);
        }

        .main_display {
            display: flex;
            position: relative;
            min-height: 800px;
            max-height: 1080px;
            height: 100vh;
        }

        header, footer {
            position: absolute;
            width: 100%;
            padding: 2em 0;
        }

        header {
            z-index: 99;
        }
        header .nav_container .navbar {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-between;
        }
        header .nav_container .navbar .logo {
            flex: 1;
        }
        header .nav_container .navbar .logo .wrap {
            display: block;
            height: 60px;
            width: 60px;
        }
        header .nav_container .navbar .navbar_content {
            display: flex;
            flex-direction: row;
            gap: 2em;
        }
        header .nav_container .navbar .navbar_content .toggle-menu {
            transform: translateZ(0);
            z-index: 1;
        }
        header .nav_container .navbar .navbar_content .toggle-menu #stick_1, header .nav_container .navbar .navbar_content .toggle-menu #stick_2, header .nav_container .navbar .navbar_content .toggle-menu #stick_3 {
            transition: transform 0.3s cubic-bezier(0.71, 0.49, 0.71, 0.9);
        }
        header .nav_container .navbar .navbar_content .toggle-menu #stick_1 {
            transform: translateY(0px);
            transform-origin: center;
        }
        header .nav_container .navbar .navbar_content .toggle-menu #stick_2 {
            transform: translateY(8px);
            transform-origin: center;
        }
        header .nav_container .navbar .navbar_content .toggle-menu #stick_3 {
            width: 50%;
            transform: translateY(16px) translateX(50%);
            transform-origin: right;
        }
        header .nav_container .navbar .navbar_content .toggle-menu.toggled #stick_1 {
            transform: translateY(5.5px) translateX(-5.5px) rotate(45deg) scaleX(0.9);
        }
        header .nav_container .navbar .navbar_content .toggle-menu.toggled #stick_2 {
            transform: translateY(5.5px) translateX(5.5px) rotate(-45deg) scaleX(0.9);
        }
        header .nav_container .navbar .navbar_content .toggle-menu.toggled #stick_3 {
            transform: translateY(16px) translateX(50%) scaleX(0);
        }

        footer {
            bottom: 0;
            left: 0;
        }
        footer .footer_container .footer {
            display: flex;
            flex-flow: row;
            justify-content: space-between;
        }
        footer .footer_container .footer .footer_heading {
            flex: 1;
        }
        footer .footer_container .footer .footer_heading h5 {
            font-size: 1.25rem;
            font-weight: 800;
            text-transform: capitalize;
            display: inline-block;
            width: 10ch;
        }
        footer .footer_container .footer .subs_form {
            flex: 0 0 40%;
        }
        footer .footer_container .footer .subs_form .subs_heading {
            display: block;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 0.5em;
        }
        footer .footer_container .footer .subs_form .subs_field {
            display: flex;
            max-width: 360px;
        }
        footer .footer_container .footer_nav {
            padding: 3em 0 1em;
            display: flex;
            flex-flow: row;
            align-items: center;
            justify-content: space-between;
        }
        footer .footer_container .footer_nav .footer_links {
            display: flex;
            align-items: center;
            gap: 1.5em;
        }
    </style>


<div class="main_display">
    <div class="container">
        <div
            class="slider"
            data-display="4"
            data-indicator="true"
            data-scroll-map="true"
            data-overflow-opaque="true"
        >
            <div class="items">
                <div class="item">
                    <div class="card">
                        <div class="item_background_image">
                            <img
                                src="https://images.unsplash.com/photo-1629908492359-238fb728ce17?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzMTgxNDYwOQ&ixlib=rb-1.2.1&q=85"
                                alt=""
                            />
                        </div>
                        <div class="meta_content">
                            <span class="item_logo"></span>
                            <div class="content_block">
                                <h2 class="brand">Salomon</h2>
                                <h3 class="title">Time to play</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="item_background_image">
                            <img
                                src="https://images.unsplash.com/photo-1629658742161-74f6fa2a9576?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzMTgxNDY2OQ&ixlib=rb-1.2.1&q=85"
                                alt=""
                            />
                        </div>
                        <div class="meta_content">
                            <span class="item_logo"></span>
                            <div class="content_block">
                                <h2 class="brand">Salomon</h2>
                                <h3 class="title">Time to play</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="item_background_image">
                            <img
                                src="https://images.unsplash.com/photo-1629389787112-bcac19fff3d5?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzMTgxNTA5NQ&ixlib=rb-1.2.1&q=85"
                                alt=""
                            />
                        </div>
                        <div class="meta_content">
                            <span class="item_logo"></span>
                            <div class="content_block">
                                <h2 class="brand">Salomon</h2>
                                <h3 class="title">Time to play</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="item_background_image">
                            <img
                                src="https://images.unsplash.com/photo-1631211904311-c4d91785871b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzMTgxNTA5NQ&ixlib=rb-1.2.1&q=85"
                                alt=""
                            />
                        </div>
                        <div class="meta_content">
                            <span class="item_logo"></span>
                            <div class="content_block">
                                <h2 class="brand">Salomon</h2>
                                <h3 class="title">Time to play</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="item_background_image">
                            <img
                                src="https://images.unsplash.com/photo-1629387280946-94c24eb0f6ed?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzMTgxNDc2NQ&ixlib=rb-1.2.1&q=85"
                                alt=""
                            />
                        </div>
                        <div class="meta_content">
                            <span class="item_logo"></span>
                            <div class="content_block">
                                <h2 class="brand">Salomon</h2>
                                <h3 class="title">Time to play</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="indicators">
                <div class="scrollbar bar"></div>
                <div class="numbers indicator"></div>
            </div>
        </div>
    </div>
</div>

<script>
    class Slider {
        constructor(
            parentElement,
            hasIndicator = false,
            hasScrollMap = false,
            hideVisibility = false,
            eventOnClick = null,
        ) {
            this.parent = parentElement
            this.childrens = {}
            this.childrenKey = []
            this.buttons = {}
            this.hasIndicator = this.parent.dataset.indicator || hasIndicator
            this.hasScrollMap = this.parent.dataset.scrollMap || hasScrollMap
            this.hideVisibility = this.parent.dataset.overflowOpaque || hideVisibility
            this.indicators = []
            this.visibleCount = this.parent.dataset.display || 4
            this.visibleIndex = 0
            this.jumpCount = 0
            this.callback = eventOnClick
        }

        setup() {
            this.registerChildren('items', 'items')
            const items = this.childrens[this.childrenKey]

            if (this.hasIndicator) {
                this.registerChildren('indicators', 'indicators')
                this.spawnIndicator(items.length)
            }
            this.loop(null, (itemKey, item, key) => {
                if (itemKey === 'items') {
                    item.style.width = `${100 / this.visibleCount}%`
                    item.style.left = `${item.clientWidth * key}px`
                }
                if (itemKey === 'indicators') {
                    let IndicatorContainer = this.indicators.find((item) =>
                        item.classList.contains('numbers'),
                    )
                    item.style.left = `${item.clientWidth * key}px`
                    IndicatorContainer.style.width =
                        this.childrens[itemKey][this.childrens[itemKey].length - 1]
                            .clientWidth *
                        this.visibleCount +
                        'px'
                }
                item.addEventListener('click', (e) => this.handleItemOnClick(e, key))
            })

            let items_parent = Array.from(this.parent.children).find((item) =>
                item.classList.contains(this.childrenKey[0]),
            )
            items_parent.style.height =
                this.childrens[this.childrenKey[0]][0].clientHeight + 'px'
            if (this.hasIndicator || this.hasScrollMap)
                this.parent.style.height =
                    this.childrens[this.childrenKey[0]][0].clientHeight +
                    this.childrens[this.childrenKey[0]][0].clientHeight / 2.5 +
                    'px'

            this.clearActive()
            this.hideVisibility && this.hideExcess()
            if (this.childrens[this.childrenKey[0]].length > this.visibleCount) {
                this.createButtons()
                if (this.hasScrollMap) this.spawnScrollMap(items.length)
            }
        }

        createButtons() {
            const btnArr = ['prev', 'next']
            const div = document.createElement('div')
            div.className = 'slider_slide_buttons'
            btnArr.forEach((btn, key) => {
                const button = document.createElement('button')
                button.className = `btn btn-slider-${btn}`
                button.setAttribute('aria-label', btn)
                button.addEventListener('click', () =>
                    this.slide(btn === 'prev' && true, btn === 'next' && true),
                )

                // div.appendChild(button)
                this.buttons[btnArr[key]] = button
                let btn_parent = Array.from(this.parent.children).find((item) =>
                    item.classList.contains(this.childrenKey[0]),
                )
                btn_parent.appendChild(button)
            })
            // this.parent.appendChild(div)
            this.disableButton()
        }

        disableButton() {
            if (this.jumpCount <= 0) {
                this.buttons['prev'].setAttribute('disabled', true)
                this.buttons['next'].removeAttribute('disabled')
                this.buttons['prev'].classList.remove('enable')
                this.buttons['next'].classList.remove('disable')
                this.buttons['prev'].classList.add('disable')
                this.buttons['next'].classList.add('enable')
                return
            } else if (
                this.jumpCount >=
                this.childrens[this.childrenKey[0]].length - this.visibleCount
            ) {
                this.buttons['prev'].removeAttribute('disabled')
                this.buttons['next'].setAttribute('disabled', true)
                this.buttons['prev'].classList.remove('disable')
                this.buttons['next'].classList.remove('enable')
                this.buttons['prev'].classList.add('enable')
                this.buttons['next'].classList.add('disable')
            } else {
                this.buttons['prev'].removeAttribute('disabled')
                this.buttons['next'].removeAttribute('disabled')
                this.buttons['prev'].classList.remove('disable')
                this.buttons['next'].classList.remove('disable')
                this.buttons['prev'].classList.remove('enable')
                this.buttons['next'].classList.remove('enable')
                this.buttons['next'].classList.add('enable')
                this.buttons['next'].classList.add('enable')
            }
        }

        loop(itemkeys = null, items = null) {
            if (typeof itemkeys !== 'null' && typeof itemkeys === 'function')
                this.childrenKey.forEach((itemKey, key, arr) =>
                    itemkeys(itemKey, key, arr),
                )
            else if (typeof items !== 'null' && typeof items === 'function')
                this.childrenKey.forEach((itemKey) =>
                    this.childrens[itemKey].forEach((item, key, arr) =>
                        items(itemKey, item, key, arr),
                    ),
                )
        }

        handleItemOnClick(e, i) {
            this.clearActive()
            this.loop((itemKey) => {
                this.childrens[itemKey][i].classList.add('active')
                if (itemKey === this.childrenKey[0]) {
                    this.childrens[itemKey][i].children[0].classList.add('active')
                }
            })
            typeof this.callback === 'function' && this.callback(e)
        }

        clearActive() {
            this.loop(null, (itemKey, item) => {
                item.classList.contains('active') && item.classList.remove('active')
                itemKey === this.childrenKey[0] &&
                item.children[0].classList.remove('active')
            })
        }

        hideExcess() {
            let x =
                this.visibleIndex < this.visibleCount
                    ? this.visibleCount
                    : this.visibleIndex > this.childrens[this.childrenKey[0]].length
                    ? this.childrens[this.childrenKey[0]].length
                    : this.visibleIndex
            x -= 1

            this.loop(null, (itemKey, item, key) => {
                if (key > x || key <= x - this.visibleCount) {
                    item.style.opacity = 0
                    item.style.visibility = 'hidden'
                } else {
                    item.style.opacity = 1
                    item.style.visibility = 'visible'
                }
            })
        }

        spawnIndicator(len) {
            for (let i = 0; i < len; i++) {
                const span = document.createElement('span')
                span.innerText = i + 1
                span.setAttribute('role', 'button')
                span.className = 'number'
                const lop = this.indicators.find((item) =>
                    item.classList.contains('numbers'),
                )
                if (lop) {
                    lop.appendChild(span)
                    this.childrens = {
                        ...this.childrens,
                        indicators: Array.from(lop.children),
                    }
                }
            }
        }

        spawnScrollMap(len) {
            const span = document.createElement('span')
            span.className = 'scrollHandle'
            span.setAttribute('draggable', 'true')
            span.style.width = `${(this.visibleCount / len) * 100}%`
            const lop = this.indicators.find((item) =>
                item.classList.contains('scrollbar'),
            )
            lop?.appendChild(span)
            // lop?.addEventListener('click', (e) => this.slide(false, true))
        }

        slideHandle(prev, next) {
            if (typeof prev !== 'boolean' || typeof next !== 'boolean') return
            const lop = this.indicators.find((item) =>
                item.classList.contains('scrollbar'),
            )
            const handle = lop?.children[0]
            if (handle)
                handle.style.transform = `translateX(${
                (handle.clientWidth * this.jumpCount) / this.visibleCount
                    }px)`
        }

        slide(prev, next) {
            let position
            this.clearActive()
            this.setJumpCount(prev, next)
            this.disableButton()
            this.hasScrollMap && this.slideHandle(prev, next)
            this.loop(null, (itemKey, item) => {
                if (typeof prev === 'boolean' && typeof next === 'boolean') {
                    if (prev) position = item.clientWidth * -this.jumpCount
                    if (next) position = -item.clientWidth * this.jumpCount
                    if (itemKey === 'indicators')
                        item.style.transform = `translateX(${position}px)`
                    else item.style.transform = `translateX(${position}px) translateY(-50%)`
                }
            })
            this.hideVisibility && this.hideExcess()
        }

        registerChildren(container, type) {
            if (typeof container !== 'string' && typeof type !== 'string') return
            const arr = Array.from(this.parent.children)
            const res = arr.find((child) => child.classList.contains(container))
            if (res) {
                if (type === 'indicators') this.indicators = Array.from(res.children)
                else this.childrens[type] = Array.from(res.children)
                this.childrenKey = [...this.childrenKey, container]
            }
        }

        setJumpCount(decrease, increase) {
            if (typeof decrease === 'boolean' && typeof increase === 'boolean') {
                this.visibleIndex = this.jumpCount + this.visibleCount
                if (increase) {
                    this.jumpCount += this.visibleCount
                    this.visibleIndex += this.visibleCount
                    if (
                        this.jumpCount >
                        this.childrens[this.childrenKey[0]].length - this.visibleCount
                    )
                        this.jumpCount =
                            this.childrens[this.childrenKey[0]].length - this.visibleCount
                } else if (decrease) {
                    this.jumpCount -= this.visibleCount
                    this.visibleIndex -= this.visibleCount
                    if (this.jumpCount < 0) this.jumpCount = 0
                }
                return
            }
        }

        setVisibleCount(count) {
            if (typeof count !== 'number' || count <= 0) return
            this.visibleCount = count
        }
    }

    /**
     * add something that might be useful to Fields class
     */
    class Fields {
        constructor(fields) {
            this.fields = fields
        }

        setFocus() {
            this.fields.forEach((field) => {
                field.addEventListener('click', (e) => field.children[0].focus())
            })
        }
    }

    /**
     * add something that might be useful to Modal class
     */
    class Modal {
        constructor(container, toggler) {
            this.container = container
            this.show = false
            this.toggler = toggler
        }

        display(container_class, toggler_class) {
            this.show = !this.show

            this.container.classList[this.show ? 'add' : 'remove'](
                container_class || 'show',
            )
            this.toggler.classList[this.show ? 'add' : 'remove'](
                toggler_class || 'toggled',
            )
        }

        activateToggler(container_class, toggler_class) {
            this.toggler.addEventListener('click', (e) => {
                this.display(container_class, toggler_class)
            })
        }
    }

    const slider = document.querySelector('.slider')
    // new Slider(slider, true, true, true) hasIndicator, hasScrollMap, hideVisibility
    const slider1 = new Slider(slider, true, true, true)
    slider1.setVisibleCount(4) // change visible count depending to the device width
    slider1.setup()
    // slider1.slide(false, true) to move next, do the oposite to move to previous

    const fields = document.querySelectorAll('.field_set')
    const fields1 = new Fields(fields)
    fields1.setFocus()

    const toggler = document.querySelector('.toggle-menu')
    const menuContainer = document.querySelector('.menu_container')
    const modal1 = new Modal(menuContainer, toggler)
    modal1.activateToggler()

</script>
