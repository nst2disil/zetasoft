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

document.addEventListener('DOMContentLoaded', () => {
  setupToolToggler();
  ininPopups();
});


