document.addEventListener('DOMContentLoaded', () => {

    if (document.querySelector('.cart__wrap')) {
        const container = document.querySelector('.cart__wrap');

        // Получаем список всех дочерних элементов контейнера
        const cartItems = container.querySelectorAll('.cart_item');

        // Определяем количество элементов в каждой группе
        const itemsPerGroup = 10;

        // Определяем текущую группу
        let currentGroup = 0;

        // Функция для отображения группы элементов
        function showGroup(groupIndex) {
            // Скрываем все элементы
            cartItems.forEach((item) => {
                item.style.display = 'none';
            });

            // Определяем индексы начального и конечного элементов для текущей группы
            const startIndex = groupIndex * itemsPerGroup;
            const endIndex = startIndex + itemsPerGroup;

            // Отображаем элементы текущей группы
            for (let i = startIndex; i < endIndex; i++) {
                if (cartItems[i]) {
                    cartItems[i].style.display = 'flex';
                }
            }
        }

        // Отображаем первую группу
        showGroup(currentGroup);

        // Создаем контейнер для цифр групп
        const groupNumbersContainer = document.querySelector('#cart__pag');

        // Создаем функцию для обработки нажатия на цифру группы
        function handleGroupNumberClick(event) {
            // Получаем номер группы из атрибута data-group
            const groupNumber = Number(event.target.dataset.group);

            // Устанавливаем текущую группу
            currentGroup = groupNumber;

            // Отображаем выбранную группу
            showGroup(currentGroup);

            // Удаляем класс "active" у всех цифр групп
            const groupNumbers = groupNumbersContainer.querySelectorAll('.group-number');
            groupNumbers.forEach((number) => {
                number.classList.remove('active');
            });

            // Добавляем класс "active" к текущей цифре группы
            event.target.classList.add('active');
        }

        // Создаем цифры групп и добавляем их в контейнер
        for (let i = 0; i < Math.ceil(cartItems.length / itemsPerGroup); i++) {
            const groupNumber = document.createElement('span');
            groupNumber.classList.add('group-number');
            groupNumber.textContent = i + 1;
            groupNumber.dataset.group = i;
            groupNumber.addEventListener('click', handleGroupNumberClick);

            // Добавляем класс "active" к текущей цифре группы (для первой страницы)
            if (i === currentGroup) {
                groupNumber.classList.add('active');
            }

            groupNumbersContainer.appendChild(groupNumber);
        }





        // Создаем кнопку переключения на следующую группу
        // if (cartItems.length > 9) {
        //     const nextButton = document.createElement('button');
        //     const prevButton = document.createElement('button');
        //     nextButton.textContent = 'Вперед';
        //     prevButton.textContent = 'Назад';
        //     // Добавляем кнопку на страницу

        //     const btnContainer = document.querySelector('#cart__pag');
        //     container.appendChild(prevButton);
        //     container.appendChild(nextButton);

        //     nextButton.addEventListener('click', (e) => {
        //         e.preventDefault();
        //         // Увеличиваем индекс текущей группы

        //         // Отображаем следующую группу
        //         showGroup(currentGroup);
        //         if (currentGroup * itemsPerGroup < cartItems.length) {
        //             // Отображаем следующую группу
        //         currentGroup++;
        //             showGroup(currentGroup);
        //         } else {
        //             // Если нет следующей группы, выполняем соответствующие действия
        //             console.log('Нет следующей группы элементов');
        //         }
        //     });
        //     prevButton.addEventListener('click', (e) => {
        //         e.preventDefault();
        //         // Увеличиваем индекс текущей группы

        //         // Отображаем следующую группу
        //         showGroup(currentGroup);
        //         if (currentGroup * itemsPerGroup < cartItems.length) {
        //         currentGroup--;

        //             // Отображаем следующую группу
        //             showGroup(currentGroup);
        //         } else {
        //             // Если нет следующей группы, выполняем соответствующие действия
        //             console.log('Нет следующей группы элементов');
        //         }
        //     });

        // }

    }



    const countSkladP = document.querySelectorAll('.go-list-sklad p');
    const regex = /- 0\sшт\./i;
    if (countSkladP.length != 0) {
        countSkladP.forEach(function (item) {
            let itemText = item.textContent;
            if (regex.test(itemText)) {
                item.style.color = '#ff0000';
                console.log('ok')
            } else {}
        })
    }

    const editBtn = document.querySelector('.edit-info__btn');
    if (editBtn) {
        editBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const item = document.querySelector('form.woocommerce-checkout');
            if (item.classList.contains('none-edit')) {
                item.classList.remove('none-edit')
                item.classList.add('vertical')
                editBtn.style.display = 'none';
            } else {
                item.classList.add('none-edit');
                item.classList.remove('vertical')

            }
        })
    }


    const headerLoginPopupBtn = document.querySelector('.open-popup-header');

    if (headerLoginPopupBtn) {
        headerLoginPopupBtn.addEventListener('click', () => {
            const headerPopup = document.querySelector('.header__popup');
            if (headerPopup.classList.contains('active')) {
                headerPopup.classList.remove('active');
                document.querySelector('.main').classList.remove('hide');
                document.body.style.overflow = "auto";

            } else {
                headerPopup.classList.add('active');
                document.querySelector('.main').classList.add('hide');
                document.body.style.overflow = "hidden";
            }
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.open-popup-header') && !e.target.closest('.header__popup')) {
                    document.querySelector('.main').classList.remove('hide');
                    headerPopup.classList.remove('active');
                    document.body.style.overflow = "auto";
                }
            })
        })
    }


    const checkoutToggles = document.querySelectorAll('.checkout-changes-btn');

    if (checkoutToggles.length != 0) {
        checkoutToggles.forEach(function (item) {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                let target = e.target;
                let forDelivery = document.querySelectorAll('.for-delivery');
                let notDelivery = document.querySelectorAll('.for-not-delivery');
                if (target.classList.contains('no-delivery')) {
                    checkoutToggles.forEach((item) => {
                        item.classList.remove('active');
                        // @todo
                        if (document.querySelector('.woocommerce-shipping-methods li:first-child input')) {
                            document.querySelector('.woocommerce-shipping-methods li:first-child input').click();
                        }
                    })
                    target.classList.add('active');
                    notDelivery.forEach(function (item) {
                        item.classList.add('active');
                    })
                    forDelivery.forEach(function (item) {
                        item.classList.remove('active');
                    })
                } else {
                    if ( document.querySelector('.woocommerce-shipping-methods li:nth-child(2) input')) {
                        document.querySelector('.woocommerce-shipping-methods li:nth-child(2) input').click();
                    }
                    checkoutToggles.forEach((item) => {
                        item.classList.remove('active');
                    })
                    target.classList.add('active');
                    notDelivery.forEach(function (item) {
                        item.classList.remove('active');
                    })
                    forDelivery.forEach(function (item) {
                        item.classList.add('active');
                    })
                }
            })
        })
    }

    const slidersInMain = document.querySelectorAll('.elementor-widget-container .woocommerce.columns-10');

    if (slidersInMain.length > 0) {
        slidersInMain.forEach(function (item) {
            item.classList.add('swiper');
            item.querySelector(".catalog__body.columns-10").classList.add('swiper-wrapper');
            item.querySelector(".catalog__body.columns-10").style.flexWrap = 'nowrap';
            new Swiper(item, {
                slideClass: 'rec__item',
                slidesPerView: 'auto',
                autoplay: {
                    delay: 5000,
                },
            })
        })
    }

    const loginLinks = document.querySelectorAll('.login-link');

    if (loginLinks.length != null) {
        loginLinks.forEach(function (item) {
            item.addEventListener('click', (e) => {
                if (!e.target.classList.contains('login-link')) {
                    e.preventDefault();
                    OpenLogin();
                }
            })
        })

        const registerBtn = document.querySelector('.register-btn');
        const loginItemOne = document.querySelector('.login-modal1');
        const loginItemTwo = document.querySelector('.login-modal2');
        const autorizeBtn = document.querySelector('.autorize-btn');
        const closeBtn = document.querySelectorAll('.close-login');

        closeBtn.forEach(function (item) {
            item.addEventListener('click', () => {
                CloseLogin();
            })
        })

        autorizeBtn.addEventListener('click', () => {
            OpenAutorize();
        })

        registerBtn.addEventListener('click', () => {
            OpenRegister();
        })

        function OpenAutorize() {
            loginItemOne.classList.add('active');
            loginItemTwo.classList.remove('active');
        };

        function OpenRegister() {
            loginItemOne.classList.remove('active');
            loginItemTwo.classList.add('active');
        }

        function OpenLogin() {
            
            const LoginPopup = document.querySelector('.login-modal');

            LoginPopup.classList.add('active');
            loginItemOne.classList.add('active');

            
        }

        function CloseLogin() {
            
            const LoginPopup = document.querySelector('.login-modal');

            LoginPopup.classList.remove('active');
            loginItemOne.classList.remove('active');
            loginItemTwo.classList.remove('active');
        }
    }

    // уведомления о добавлении товара в корзину на странице каталога

    const catalogNotices = document.querySelectorAll('.catalog__wrapper .woocommerce-notices-wrapper');

    if (catalogNotices.length != 0) {
        catalogNotices.forEach((item) => {
            item.classList.add('active');
            setTimeout(() => {
                item.classList.remove('active');
            }, 3000);
            item.addEventListener('click', (e) => {
                let target = e.target.closest('.woocommerce-notices-wrapper');
                target.classList.remove('active');
            })
        })
    }

    // изменение вида товаров в каталоге 

    let viewBtns = document.querySelectorAll('.catalog__view-btns button');

    if (viewBtns.length != 0) {

        // логика списков в сетке товаров

        const CACHE_KEY_LIST = 'itList';
        let itList = localStorage.getItem(CACHE_KEY_LIST);
        console.log(itList)
        if (itList === null) {
            itList = 0;
            localStorage.setItem(CACHE_KEY_LIST, itList);
        } else if (itList == 0 && document.querySelector('.catalog__body')) {
            document.querySelector('.view[data-view="1"]').classList.add('active');
            document.querySelector('.catalog__body').classList.add('it-card');
        } else if (itList == 1 && document.querySelector('.catalog__body')) {
            document.querySelector('.view[data-view="2"]').classList.add('active');
            document.querySelector('.catalog__body').classList.add('it-list');

        }

        function ItCards() {
            itList = 0;
            localStorage.setItem(CACHE_KEY_LIST, 0);
            console.log(itList);
        }

        function ItList() {
            itList = 1;
            localStorage.setItem(CACHE_KEY_LIST, 1)
            console.log(itList);
        }

        viewBtns.forEach(function (item) {
            item.addEventListener('click', (e) => {
                let view = e.target.getAttribute('data-view');
                viewBtns.forEach(function (item) {
                    item.classList.remove('active');
                })
                e.target.classList.add('active');
                if (view == "1") {
                    catalogView(view);
                } else if (view == "2") {
                    catalogView(view);
                }
            })
        })
        let catalogBody = document.querySelector('.catalog__body');

        function catalogView(view) {
            if (view == "1") {
                catalogBody.classList.remove('it-list');
                catalogBody.classList.add('it-card');
                ItCards();
            } else if (view == "2") {
                catalogBody.classList.add('it-list');
                catalogBody.classList.remove('it-card');
                ItList();
            }
        }
    }

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i
        .test(navigator.userAgent) && document.querySelector('.catalog__body')) {
        if (document.querySelector('.catalog__body').classList.contains('it-list')) {
            document.querySelector('.catalog__body').classList.remove('it-list');
        }
    }

    // удаление товара из корзины 
    let deleteBtn = document.querySelectorAll('.delete-item');

    if (deleteBtn.length != 0) {
        deleteBtn.forEach(function (item) {
            item.addEventListener('click', function (e) {
                DeleteItemFromCart(item);
            })
        })
    }

    function DeleteItemFromCart(item) {
        let parentItem = item.closest('.cart__item');
        parentItem.remove();
    }

    // ставим отметку на корзину 

    let itemCheckBox = document.querySelectorAll('.item-check');

    let listDeleted = document.querySelector('.list-deleted');

    function refreshCount() {
        let cartCount = document.querySelector('.inline-count');
        cartCount.innerHTML = document.querySelectorAll('.item-check.active').length;
    }


    if (itemCheckBox.length > 0) {
        itemCheckBox.forEach(function (item) {
            item.addEventListener('click', (e) => {
                if (item.classList.contains('active')) {
                    item.classList.remove('active');
                    refreshCount();
                } else {
                    item.classList.add('active');
                    refreshCount();
                }
            })
        })


    }


    // Кнопка выбрать все - 

    let checkAllBtn = document.querySelector('.btn-current-all');

    if (checkAllBtn) {
        checkAllBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (checkAllBtn.classList.contains('active')) {
                checkAllBtn.classList.remove('active')
                itemCheckBox.forEach(function (item) {
                    item.classList.remove('active');
                })
                refreshCount();
            } else {
                checkAllBtn.classList.add('active')
                itemCheckBox.forEach(function (item) {
                    item.classList.add('active');
                })
                refreshCount();
            }
        })
    }


    // удалить выбранные 

    // let deleteCurrents = document.querySelector('.delete-currents');

    // if (deleteCurrents) {
    //     deleteCurrents.addEventListener('click', () => {
    //         itemCheckBox.forEach(function (item) {
    //             if (item.classList.contains('active')) {
    //                 let deleteElement = item.closest('.cart__item')
    //                 deleteElement.remove();
    //                 refreshCount();
    //             } else {
    //                 refreshCount();
    //             }
    //         })
    //     })
    // }


    // отменить выбранное

    let cancelCheckbtn = document.querySelector('.cancel-count');
    if (cancelCheckbtn) {
        cancelCheckbtn.addEventListener('click', (e) => {
            e.preventDefault();
            itemCheckBox.forEach(function (item) {
                item.classList.remove('active')
                checkAllBtn.classList.remove('active');
                refreshCount();
            })
        })
    }


    // пагинация для элементов корзины 
    // var count = 10; //всего записей
    // var cnt = 5; //сколько отображаем сначала
    // var cnt_page = Math.ceil(count / cnt); //кол-во страниц

    //выводим список страниц
    // var paginator = document.querySelector(".paginator");
    // var page = "";
    // for (var i = 0; i < cnt_page; i++) {
    // page += "<span data-page=" + i * cnt + "  id=\"page" + (i + 1) + "\">" + (i + 1) + "</span>";
    // }
    // paginator.innerHTML = page;

    //выводим первые записи {cnt}
    // var div_num = document.querySelectorAll(".num");
    // for (var i = 0; i < div_num.length; i++) {
    // if (i < cnt) {
    //     div_num[i].style.display = "block";
    // }
    // }

    // var main_page = document.getElementById("page1");
    // main_page.classList.add("paginator_active");

    // //листаем
    // function pagination(event) {
    // var e = event || window.event;
    // var target = e.target;
    // var id = target.id;

    // if (target.tagName.toLowerCase() != "span") return;

    // var num_ = id.substr(4);
    // var data_page = +target.dataset.page;
    // main_page.classList.remove("paginator_active");
    // main_page = document.getElementById(id);
    // main_page.classList.add("paginator_active");

    // var j = 0;
    // for (var i = 0; i < div_num.length; i++) {
    //     var data_num = div_num[i].dataset.num;
    //     if (data_num <= data_page || data_num >= data_page)
    //     div_num[i].style.display = "none";

    // }
    // for (var i = data_page; i < div_num.length; i++) {
    //     if (j >= cnt) break;
    //     div_num[i].style.display = "block";
    //     j++;
    // }
    // }

    let catalogBtn = document.querySelector('.catalog-btn');
    let menuCatalog = document.querySelector('.menu-calog');
    if (catalogBtn) {
        catalogBtn.addEventListener('click', (e) => {
            if (e.target.classList.contains('active')) {
                CloseCatalog(e.target);
            } else {
                OpenCatalog(e.target);
            }
        })

        function OpenCatalog() {
            document.querySelector('.main').style.opacity = '.4';
            document.body.style.overflow = 'hidden';
            catalogBtn.classList.add('active');
            menuCatalog.classList.add('active');
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.menu-calog') && !e.target.closest('.catalog-btn')) {
                    CloseCatalog();
                }
            })
        }

        function CloseCatalog() {
            document.querySelector('.main').style.opacity = '1';
            document.body.style.overflow = 'auto';
            menuCatalog.classList.remove('active');
            catalogBtn.classList.remove('active');
        }
    }

    var productSliderPreview = new Swiper(".product__slider-preview", {
        slidesPerView: 3,
        direction: 'vertical',
        spaceBetween: 10,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            320: {
                direction: 'horizontal',
                slidesPerView: 3.1,
            },
            1023: {
                direction: 'vertical',
            }
        }
    });

    var productSlider = new Swiper(".product__slider", {
        spaceBetween: 10,
        thumbs: {
            swiper: productSliderPreview,
        },
    });

    Fancybox.bind("[data-fancybox]", {
        // Your options go here
    });

    const recSlider = new Swiper('.rec__slider', {
        breakpoints: {
            320: {
                slidesPerView: 1.5,
                spaceBetween: 30,
            },
            560: {
                slidesPerView: 2.5,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 3.5,
                spaceBetween: 30,
            },
            1023: {
                slidesPerView: 4.5,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        }
    })

    let filterBtn = document.querySelector('.filter-btn')
    if (filterBtn) {
        filterBtn.addEventListener("click", (e) => {
            let filterList = document.querySelector(".catalog__filter");

            if (!filterBtn.classList.contains('active')) {
                filterBtn.classList.add('active');
                filterList.style.maxHeight = filterList.scrollHeight + 'px';
                filterList.classList.add('active');
            } else {
                filterBtn.classList.remove('active');
                filterList.style.maxHeight = 0;
                filterList.classList.remove('active');
            }
        })
    }


    const menuLinks = document.querySelectorAll('.link[data-goto]')
    if (menuLinks.length > 0) {
        menuLinks.forEach(menuLinks => {
            menuLinks.addEventListener('click', onMenuLinkClick);
        });

        function onMenuLinkClick(e) {
            const menuLink = e.target;
            if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
                const gotoBlock = document.querySelector(menuLink.dataset.goto);
                const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset;

                window.scrollTo({
                    top: gotoBlockValue,
                    behavior: 'smooth'
                });
                e.preventDefault();
            }
        }
    }


    let slider = document.querySelector('.range-slider');

    if (slider) {
        noUiSlider.create(slider, {
            start: [199, 1200],
            connect: true,
            range: {
                'min': 199,
                'max': 1200
            }
        });
    }


    let filterTabsBtns = document.querySelectorAll('.filter__tab button');

    if (filterTabsBtns.length != 0) {
        filterTabsBtns.forEach(function (item) {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                let target = e.target;

                let parent = target.closest('.filter__tab'),
                    list = target.nextElementSibling;

                if (!target.classList.contains('active')) {
                    parent.classList.add('active');
                    target.classList.add('active');
                    list.classList.add('active');
                    target.nextElementSibling.style.maxHeight = target.nextElementSibling.scrollHeight + 'px';
                } else {
                    parent.classList.remove('active');
                    list.classList.remove('active');
                    target.classList.remove('active');
                    target.nextElementSibling.style.maxHeight = '0';
                }
            })
        })
    }

    function DynamicAdapt(type) {
        this.type = type;
    }

    DynamicAdapt.prototype.init = function () {
        const _this = this;
        // массив объектов
        this.оbjects = [];
        this.daClassname = "_dynamic_adapt_";
        // массив DOM-элементов
        this.nodes = document.querySelectorAll("[data-da]");

        // наполнение оbjects объктами
        for (let i = 0; i < this.nodes.length; i++) {
            const node = this.nodes[i];
            const data = node.dataset.da.trim();
            const dataArray = data.split(",");
            const оbject = {};
            оbject.element = node;
            оbject.parent = node.parentNode;
            оbject.destination = document.querySelector(dataArray[0].trim());
            оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : "767";
            оbject.place = dataArray[2] ? dataArray[2].trim() : "last";
            оbject.index = this.indexInParent(оbject.parent, оbject.element);
            this.оbjects.push(оbject);
        }

        this.arraySort(this.оbjects);

        // массив уникальных медиа-запросов
        this.mediaQueries = Array.prototype.map.call(this.оbjects, function (item) {
            return '(' + this.type + "-width: " + item.breakpoint + "px)," + item.breakpoint;
        }, this);
        this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, function (item, index, self) {
            return Array.prototype.indexOf.call(self, item) === index;
        });

        // навешивание слушателя на медиа-запрос
        // и вызов обработчика при первом запуске
        for (let i = 0; i < this.mediaQueries.length; i++) {
            const media = this.mediaQueries[i];
            const mediaSplit = String.prototype.split.call(media, ',');
            const matchMedia = window.matchMedia(mediaSplit[0]);
            const mediaBreakpoint = mediaSplit[1];

            // массив объектов с подходящим брейкпоинтом
            const оbjectsFilter = Array.prototype.filter.call(this.оbjects, function (item) {
                return item.breakpoint === mediaBreakpoint;
            });
            matchMedia.addListener(function () {
                _this.mediaHandler(matchMedia, оbjectsFilter);
            });
            this.mediaHandler(matchMedia, оbjectsFilter);
        }
    };

    DynamicAdapt.prototype.mediaHandler = function (matchMedia, оbjects) {
        if (matchMedia.matches) {
            for (let i = 0; i < оbjects.length; i++) {
                const оbject = оbjects[i];
                оbject.index = this.indexInParent(оbject.parent, оbject.element);
                this.moveTo(оbject.place, оbject.element, оbject.destination);
            }
        } else {
            for (let i = 0; i < оbjects.length; i++) {
                const оbject = оbjects[i];
                if (оbject.element.classList.contains(this.daClassname)) {
                    this.moveBack(оbject.parent, оbject.element, оbject.index);
                }
            }
        }
    };

    // Функция перемещения
    DynamicAdapt.prototype.moveTo = function (place, element, destination) {
        element.classList.add(this.daClassname);
        if (place === 'last' || place >= destination.children.length) {
            destination.insertAdjacentElement('beforeend', element);
            return;
        }
        if (place === 'first') {
            destination.insertAdjacentElement('afterbegin', element);
            return;
        }
        destination.children[place].insertAdjacentElement('beforebegin', element);
    }

    // Функция возврата
    DynamicAdapt.prototype.moveBack = function (parent, element, index) {
        element.classList.remove(this.daClassname);
        if (parent.children[index] !== undefined) {
            parent.children[index].insertAdjacentElement('beforebegin', element);
        } else {
            parent.insertAdjacentElement('beforeend', element);
        }
    }

    // Функция получения индекса внутри родителя
    DynamicAdapt.prototype.indexInParent = function (parent, element) {
        const array = Array.prototype.slice.call(parent.children);
        return Array.prototype.indexOf.call(array, element);
    };

    // Функция сортировки массива по breakpoint и place 
    // по возрастанию для this.type = min
    // по убыванию для this.type = max
    DynamicAdapt.prototype.arraySort = function (arr) {
        if (this.type === "min") {
            Array.prototype.sort.call(arr, function (a, b) {
                if (a.breakpoint === b.breakpoint) {
                    if (a.place === b.place) {
                        return 0;
                    }

                    if (a.place === "first" || b.place === "last") {
                        return -1;
                    }

                    if (a.place === "last" || b.place === "first") {
                        return 1;
                    }

                    return a.place - b.place;
                }

                return a.breakpoint - b.breakpoint;
            });
        } else {
            Array.prototype.sort.call(arr, function (a, b) {
                if (a.breakpoint === b.breakpoint) {
                    if (a.place === b.place) {
                        return 0;
                    }

                    if (a.place === "first" || b.place === "last") {
                        return 1;
                    }

                    if (a.place === "last" || b.place === "first") {
                        return -1;
                    }

                    return b.place - a.place;
                }

                return b.breakpoint - a.breakpoint;
            });
            return;
        }
    };

    const da = new DynamicAdapt("max");
    da.init();




    let bigReclame = new Swiper('.reclame-one', {
        spaceBetween: 20,
        slidesPerView: 1,
        autoplay: {
            delay: 5000,
        },
        navigation: {
            prevEl: '.reclame-one .swiper-button-prev',
            nextEl: '.reclame-one .swiper-button-next'
        }
    });

    let mcategory = new Swiper('.mcategory__slider', {
        spaceBetween: 20,
        breakpoints: {
            0: {
                slidesPerView: 1.5,
            },
            560: {
                slidesPerView: 2.5,
            },
            768: {
                slidesPerView: 3.5,
            },
            1024: {
                slidesPerView: 4.5,
            },
            1200: {
                slidesPerView: 6,
            },
        }
    });
    let mcategoryMiddle = new Swiper('.mcategory__slider-middle', {
        spaceBetween: 20,
        breakpoints: {
            560: {
                slidesPerView: 1.5,
            },
            768: {
                slidesPerView: 2.5,
            },
            1024: {
                slidesPerView: 3.5,
            },
            1200: {
                slidesPerView: 4,
            },
        }
    });
    let mcategoryBig = new Swiper('.mcategory__slider-big ', {
        spaceBetween: 20,
        breakpoints: {
            560: {
                slidesPerView: 1.2,
            },
            768: {
                slidesPerView: 1.5,
            },
            1200: {
                slidesPerView: 2,
            },
        }
    });


    // открытие попапа    
    let callPopupBtns = document.querySelectorAll('.call-popup');

    if (callPopupBtns.length != 0) {
        let buttoninPopup = document.querySelector('.auss_choose_warehouse')
        let popupWindow = document.querySelector('.popup');
        let popupItems = document.querySelectorAll('.popup__item');
        let closePopupBtn = document.querySelector('.close-popup');

        if (buttoninPopup) {
            buttoninPopup.addEventListener('click', () => {
                closePopup();
            })
        }
        if (closePopupBtn) {
            closePopupBtn.addEventListener('click', closePopup);
        }

        if (popupWindow && popupItems) {
            callPopupBtns.forEach(function (item) {
                item.addEventListener('click', () => {
                    let targetPopup = document.querySelector(item.getAttribute('data-popup'));
                    console.log(targetPopup)
                    openPopup(targetPopup);
                })
            })
        }


        function openPopup(i) {
            popupWindow.classList.add('active');
            i.classList.add('active');
            document.body.style.overflow = 'hidden';
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.popup__item') && !e.target.closest('.call-popup')) {
                    closePopup();
                }

            })
            // document.body.style.overflow = 'hidden';
        }

        function closePopup() {
            popupWindow.classList.remove('active');
            document.body.style = 'auto';
            popupItems.forEach(function (item) {
                item.classList.remove('active');
            })
            // document.body.style.overflow = 'auto';
        }
    }


    // Добавляем нужное количество в корзину
    let itemCounters = document.querySelectorAll('.counter-for-item');

    if (itemCounters.length != 0) {
        itemCounters.forEach(function (item) {
            item.addEventListener('change', (e) => {
                let parent = item.closest('.woo-product-action');
                let count = item.value;
                let itemQantity = parent.querySelector('.add-to-cart-link').getAttribute('data-quantity');
                let itemDataLink = parent.querySelector(".add-to-cart-link").getAttribute('data-linkprice');
                let itemLlink = parent.querySelector('.add-to-cart-link');

                let newLink = itemDataLink + '&quantity=' + count;

                itemLlink.setAttribute('data-quantity', count);
                itemLlink.setAttribute('href', newLink);
            })
        })
    }


    const miniSliderProduct = new Swiper('.single-product__mini-slider', {
        spaceBetween: 10,
        watchSlidesProgress: true,
        breakpoints: {
            1: {
                direction: 'horizontal',
                slidesPerView: 3,
            },
            1201: {
                direction: 'vertical',
                slidesPerView: 3,
            }
        }
    })

    const mainSliderProduct = new Swiper('.single-product__slider', {
        slidesPerView: 1,
        spaceBetween: 15,
        loop: false,
        thumbs: {
            swiper: miniSliderProduct,
        }
    })


    // переключение табов на странице form-link

    const signUpButton = document.querySelector('.form-link');

    if (signUpButton) {
        signUpButton.addEventListener('click', (e) => {
            e.preventDefault();

            const formLogin = document.querySelector('.singup_form');
            const formWrap = document.querySelector('.woocommerce-form__wrap');

            if (formLogin.classList.contains('active')) {
                formWrap.classList.remove('hidden');
                CloseSignup();
                e.target.innerHTML = 'Зарегистрироваться';
            } else {
                formWrap.classList.add('hidden');
                OpenSignup();
                e.target.innerHTML = 'Вернуться назад';
            }

            function CloseSignup() {
                formLogin.classList.remove('active');
            }

            function OpenSignup() {
                formLogin.classList.add('active');
            }
        })


    }

})

var loginBtn = document.querySelector(".login-btn");

if (loginBtn) {
    const loginItem = document.querySelectorAll('.login-item');

    function loaderAnim () {
        loginItem.forEach(function(item){
            item.classList.add('loaded');
        })
        const spinner = document.querySelector('.spinner');
        if (spinner.classList.add('active')) {
            spinner.classList.remove('active')
        } else {
            spinner.classList.add('active');
        }
    }

    loginBtn.addEventListener("click", function (event) {

       // event.preventDefault(); // отменяем действие по умолчанию
        loaderAnim();
        // получаем ссылку на форму и ее атрибуты
       /* var form = document.getElementById("loginform");
        var url = form.action;
        var data = new FormData(form);
    
        // создаем новый объект XMLHttpRequest для отправки запроса на сервер
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
    
        // добавляем обработчик ответа от сервера
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // обрабатываем успешный ответ от сервера
                    if (xhr.responseText.indexOf('class="login-error"') !== -1) {
                        var loginNotice = document.getElementById("login-notice");
                        loginNotice.innerHTML = "Ошибка авторизации. Пожалуйста, проверьте правильность введенных данных.";
                    } else {
                        window.location.reload();
                    }
                } else {
                    // обрабатываем ошибку соединения с сервером
                    console.error("Ошибка соединения с сервером.");
                }
            }*/
        //};
    
        // отправляем данные формы на сервер
        //xhr.send(data);
    
    
    
    });

    // const inputsInCart = document.querySelectorAll('.input-text.qty');

    // if (inputsInCart.length != 0) {
        
    // }

    
}
