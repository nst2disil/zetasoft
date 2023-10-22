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
      SWIPERS.cases.swiperNativeEl.slideTo(0);
  };

  buttons.forEach((button) => {
      button.addEventListener('click', handleClick);
  });
}

function initDashboardToggleds() {
  const jsCheckboxes = document.querySelectorAll(".js-toggle-show-active");
  
  jsCheckboxes.forEach(function (checkbox) {
    const productsList = checkbox.closest(".js-products-block").querySelector(".js-products-list");

    checkbox.addEventListener("change", function () {
      if (checkbox.checked) {
        productsList.classList.remove("products__list--show-inactive");
      } else {
        productsList.classList.add("products__list--show-inactive");
      }
    });
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
  if (!SWIPERS[slug]) {
    SWIPERS[slug] = {};
  }
  if (window.innerWidth <= 880) {
    if (!SWIPERS[slug].init) {
      SWIPERS[slug].init = true;
      SWIPERS[slug].swiperNativeEl = new Swiper(`[data-swiper-id="${slug}"]`, {...defaultSwiperOptions, ...SWIPERS[slug].config});
    }
  } else if (SWIPERS[slug].init) {
    SWIPERS[slug].swiperNativeEl.destroy();
    SWIPERS[slug].init  = false;
  }
}

function initSwipers() {
  document.querySelectorAll('[data-swiper-id]').forEach(swiperItem => initSwiper(swiperItem.dataset.swiperId));
}

const SWIPERS = {
  'case-screenshots': {
    config: {
      autoHeight: true
    }
  }
}

document.addEventListener('DOMContentLoaded', () => {
  setupToolToggler();
  ininPopups();
  initSwipers();
  initCases();
  initDashboardToggleds();
});

window.addEventListener('resize', () => {
  initSwipers();
});


