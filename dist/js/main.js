function setupToolToggler() {
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

function ininPopups() {
  const modals = document.querySelectorAll('[data-modal]');

  modals.forEach(function (trigger) {
    trigger.addEventListener('click', function (event) {
      event.preventDefault();
      const modal = document.getElementById(trigger.dataset.modal);
      if (modal.classList.contains('open')) {
        modal.classList.remove('open');
        trigger.classList.remove('active');
      } else {
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

function initCases() {
  const cases = document.querySelector('.js-cases');
  const buttons = document.querySelectorAll('.js-case-category');

  const handleClick = (event) => {
      const clickedButton = event.target;
      const category = clickedButton.getAttribute('data-case-category');
      buttons.forEach((button) => {
          if (button !== clickedButton) {
              button.classList.remove('button--active');
          }
      });
      if (clickedButton.classList.contains('button--active')) {
        cases.classList.remove('cases--filtered');
        clickedButton.classList.remove('button--active');
        cases.setAttribute('data-filtered-by', '');
        return;
      }
      clickedButton.classList.add('button--active');

      cases.setAttribute('data-filtered-by', category);
      cases.classList.add('cases--filtered');
  };

  buttons.forEach((button) => {
      button.addEventListener('click', handleClick);
  });
}

const defaultSwiperOptions = {
  direction: 'horizontal',
  slidesPerView: 'auto',
  centeredSlides: true,
  spaceBetween: 8,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
};

function initSwiper(slug) {
  if (!document.querySelector(`.js-${slug}-swiper`)) return;
  if (!APP_CONFIG.swipersConfig[slug]) {
    APP_CONFIG.swipersConfig[slug] = {};
  }
  if (window.innerWidth <= 880) {
    if (!APP_CONFIG.swipersConfig[slug].init) {
      APP_CONFIG.swipersConfig[slug].init = true;
      APP_CONFIG.swipersConfig[slug].swiperNativeEl = new Swiper(`.js-${slug}-swiper`, defaultSwiperOptions);
    }
  } else if (APP_CONFIG.swipersConfig[slug].init) {
    APP_CONFIG.swipersConfig[slug].swiperNativeEl.destroy();
    APP_CONFIG.swipersConfig[slug].init  = false;
  }
}


function initSwipers(slugList) {
  slugList.forEach(slug => initSwiper(slug));
}

const APP_CONFIG = {
  swipersList: ['cases', 'products', 'systems'], // чтобы добавить новый слайдер - добавляем его слаг, который используем в селекторе
  swipersConfig: {}
}

document.addEventListener('DOMContentLoaded', () => {
  setupToolToggler();
  ininPopups();
  initSwipers(APP_CONFIG.swipersList);
  initCases();
});

window.addEventListener('resize', () => {
  initSwipers(APP_CONFIG.swipersList);
});


