function initToolToggler() {
  const toolTogglers = document.querySelectorAll('.js-tool-toggler');

  toolTogglers.forEach(toggler => {
    toggler.addEventListener('click', (event) => {
      const toolItem = toggler.closest('.js-tool-item');
      const toolPanel = toolItem.querySelector('.js-tool-panel');
      const isOpen = toolPanel.classList.contains('tools__panel--active');

      // Закрываем панель, если она уже открыта, иначе открываем
      if (isOpen) {
        toolPanel.classList.remove('tools__panel--active');
      } else {
        // Закрываем все другие открытые панели перед открытием текущей
        const activeToolPanels = document.querySelectorAll('.tools__panel--active');
        activeToolPanels.forEach(panel => {
          panel.classList.remove('tools__panel--active');
        });
        toolPanel.classList.add('tools__panel--active');
      }

      event.stopPropagation();
    });
  });

  document.addEventListener('click', (event) => {
    const clickedElement = event.target;
    const clickedPanelClose = clickedElement.closest('.js-tool-panel-close');

    if (clickedPanelClose) {
      const toolPanel = clickedPanelClose.closest('.js-tool-panel');
      toolPanel.classList.remove('tools__panel--active');
      return;
    }

    if (!clickedElement.closest('.js-tool-item')) {
      const activeToolPanels = document.querySelectorAll('.tools__panel--active');
      activeToolPanels.forEach(panel => {
        panel.classList.remove('tools__panel--active');
      });
    }
  });
}

function removeOpenClassFromModals() {
  const modals = document.querySelectorAll('.modal.open');
  if (modals.length > 0) {
    modals.forEach(modal => {
      modal.classList.remove('open');
    });
  }
}

function ininPopups() {
  const modals = document.querySelectorAll('[data-modal]');

  modals.forEach(function (trigger) {
    trigger.addEventListener('click', function (event) {
      event.preventDefault();
      const modal = document.getElementById(trigger.dataset.modal);
      if (!modal) {
        throw new Error(`Модальное окно #${trigger.dataset.modal} не найдено`);
      }
      if (trigger.dataset.closeOpenedModals) {
        removeOpenClassFromModals();
      }
      if (modal.classList.contains('open')) {
        modal.classList.remove('open');
        trigger.classList.remove('active');
      } else {
        if (trigger.dataset.modalTitle) {
          modal.querySelector('.js-title').innerHTML = trigger.dataset.modalTitle;
        }
        modal.classList.add('open');
        trigger.classList.add('active');
      }
      const exits = modal.querySelectorAll('.js-modal-exit');
      exits.forEach(function (exit) {
        exit.addEventListener('click', function (event) {
          event.preventDefault();
          modal.classList.remove('open');
        });
      });
    });
  });
}

function filterCaseByCategory(categorySlug) {
  const cases = document.querySelector('.js-cases');
  if (!cases) return;
  const buttons = document.querySelectorAll('.js-case-category');
  const currentFilterButton = document.querySelector(`[data-case-category="${categorySlug}"]`);
  buttons.forEach((button) => {
    if (button !== currentFilterButton) {
      button.classList.remove('button--active');
    }
  });
  if (currentFilterButton.classList.contains('button--active') || !categorySlug) {
    cases.classList.remove('cases--filtered');
    currentFilterButton.classList.remove('button--active');
    cases.setAttribute('data-filtered-by', '');
    return;
  }
  if (!!categorySlug) {
    currentFilterButton.classList.add('button--active');
  }

  cases.setAttribute('data-filtered-by', categorySlug);
  cases.classList.add('cases--filtered');
  SWIPERS.cases.swiperNativeEl.slideTo(0);
}

function initCases() {
  const handleClick = (event) => {
    const category = event.target.getAttribute('data-case-category');
    filterCaseByCategory(category);
  };
  document.querySelectorAll('.js-case-category').forEach((button) => {
    button.addEventListener('click', handleClick);
  });
  const hash = window.location.hash;
  if (hash.includes('#filter-by-')) {
    const category = hash.replace('#filter-by-', '');
    filterCaseByCategory(category);
  }
}

function initDashboardToggleds() {
  const jsCheckboxes = document.querySelectorAll(".js-toggle-show-active");

  jsCheckboxes.forEach(function (checkbox) {
    const productsList = checkbox.closest(".js-products-block").querySelector(".js-products-list");

    checkbox.addEventListener("change", function () {
      if (!checkbox.checked) {
        productsList.classList.remove("products__list--show-inactive");
      } else {
        productsList.classList.add("products__list--show-inactive");
      }
    });
  });
}

function initCustomSelect(customSelect) {
  const selectBox = customSelect.querySelector('.js-custom-select__box');
  if (!selectBox) return;
  const selectedOption = customSelect.querySelector('.js-custom-select__selected-option');
  const optionsContainer = customSelect.querySelector('.js-custom-select__options-container');

  selectBox.addEventListener('click', function () {
    customSelect.classList.toggle('custom-select--is-open');
  });

  optionsContainer.addEventListener('click', function (e) {
    if (e.target.classList.contains('js-custom-select__option')) {
      selectedOption.textContent = e.target.textContent;
      customSelect.classList.remove('custom-select--is-open');
    }
  });

  document.addEventListener('click', function (e) {
    if (!customSelect.contains(e.target) && !optionsContainer.contains(e.target)) {
      customSelect.classList.remove('custom-select--is-open');
    }
  });
}

function initCustomSelects() {
  document.querySelectorAll('.js-custom-select').forEach(initCustomSelect);
}

const defaultSwiperOptions = {
  direction: 'horizontal',
  slidesPerView: 1,
  //centeredSlides: true,
  spaceBetween: 16,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
};

function initSwiper(slug) {
  if (!SWIPERS[slug]) {
    SWIPERS[slug] = {};
  }
  if (window.innerWidth <= 880) {
    if (!SWIPERS[slug].init) {
      SWIPERS[slug].init = true;
      SWIPERS[slug].swiperNativeEl = new Swiper(`[data-swiper-id="${slug}"]`, { ...defaultSwiperOptions, ...SWIPERS[slug].config });
    }
  } else if (SWIPERS[slug].init) {
    SWIPERS[slug].swiperNativeEl.destroy();
    SWIPERS[slug].init = false;
  }
}

function initSwipers() {
  document.querySelectorAll('[data-swiper-id]').forEach(swiperItem => initSwiper(swiperItem.dataset.swiperId));
}


const SWIPERS = {
  /*'case-screenshots': {
    config: {
      //autoHeight: true
    }
  }*/
}

function initInputsMask() {
  document.querySelectorAll('[data-mask]').forEach(item => {
    try {
      const re = new RegExp(item.dataset.mask);
      IMask(item, re);
    } catch (e) {
      IMask(item, item.dataset.mask);
    }
  })
}

function checkFormFields(form) {
  const requiredFields = form.querySelectorAll('[required]');
  let isValid = true;

  requiredFields.forEach((field) => {
    if (!field.value.trim()) {
      isValid = false;
    }
  });

  // Если все поля заполнены, кнопка отправки доступна
  if (isValid) {
    form.querySelector('[type="submit"]').disabled = false;
  } else {
    form.querySelector('[type="submit"]').disabled = true;
  }
}

function initFormValidator() {
  // Добавляем обработчики событий для форм на странице
  const forms = document.querySelectorAll('[data-form="true"]');

  forms.forEach((form) => {
    form.addEventListener('input', () => {
      checkFormFields(form);
    });
    form.addEventListener('change', () => {
      checkFormFields(form);
    });
    checkFormFields(form);
  });
}

function initFancybox() {
  Fancybox.bind('[data-fancybox]', {
    Toolbar: {
      display: {
        left: ["infobar"],
        right: ["close"],
      },
    },
  });
}

function initTabs() {
  document.querySelectorAll('.js-tabs-wrapper').forEach(item => initTabsInWrapper(item));
}

function initTabsInWrapper(wrapper) {
  const togglerElements = wrapper.querySelectorAll('[data-tabs-toggler-id]');
  const itemElements = wrapper.querySelectorAll('[data-tabs-item-id]');
  const defaultTab = wrapper.querySelector('[data-tabs-item-id="default"]');

  if (togglerElements.length === 0 || itemElements.length === 0) {
    throw new Error(`Не созданы все необходимые элементы для табов в контейнере с классом .${wrapper.getAttribute('class').split(' ').join('.')}`);
    return;
  }

  itemElements.forEach(item => item.classList.add('hidden'));

  function showDefaultTab() {
    itemElements.forEach(item => item.classList.add('hidden'));
    if (!defaultTab) {
      togglerElements[0].classList.add('active');
      itemElements[0].classList.remove('hidden');
    } else {
      defaultTab.classList.remove('hidden');
    }
  }

  showDefaultTab();

  togglerElements.forEach(toggler => {
    toggler.addEventListener('click', () => {
      const tabId = toggler.getAttribute('data-tabs-toggler-id');
      const isActive = toggler.classList.contains('active');

      togglerElements.forEach(el => el.classList.remove('active'));

      if (isActive) {
        showDefaultTab();
        return;
      }

      toggler.classList.add('active');

      itemElements.forEach(item => {
        if (item.getAttribute('data-tabs-item-id') === tabId) {
          item.classList.remove('hidden');
        } else {
          item.classList.add('hidden');
        }
      });

      defaultTab && defaultTab.classList.add('hidden');
    });
  });
}

function initDemo() {
    const button = document.querySelector('.js-demo-active-button');

    if (button) {
      button.addEventListener('click', function () {
        button.classList.toggle('button--active');
      });
    }
}

document.addEventListener('DOMContentLoaded', () => {
  initToolToggler();
  ininPopups();
  initSwipers();
  initCases();
  initDashboardToggleds();
  initCustomSelects();
  initInputsMask();
  initFormValidator();
  initFancybox();
  initTabs();
  initDemo();
});

window.addEventListener('resize', () => {
  initSwipers();
});


