class AttributeFiller {
  constructor() {
    this.fillAttributes();
  }

  fillAttributes() {
    const elementsWithDataFill = document.querySelectorAll('[data-fill]');

    elementsWithDataFill.forEach((element) => {
      const dataFillAttribute = element.getAttribute('data-fill');

      if (dataFillAttribute) {
        const [attributeName, functionName, ...functionArgs] = dataFillAttribute.split(';').map(item => item.trim());
        if (attributeName && functionName) {
          this.fillAttribute(element, attributeName, functionName, functionArgs);
        }
      }
    });
  }

  fillAttribute(element, attributeName, functionName, functionArgs) {
    const value = this.executeFunction(functionName, functionArgs);
    
    if (attributeName.toLowerCase() === 'class') {
      element.classList.add(value);
    } else if (attributeName.toLowerCase() === 'innertext') {
      element.innerText = value;
    } else {
      element.setAttribute(attributeName, value);
      applyCategoryClasses();
    }

  }

  executeFunction(functionName, functionArgs) {
    if (window[functionName] && typeof window[functionName] === 'function') {
      return window[functionName](...functionArgs);
    }
    return ''; // Если функция не найдена, возвращаем пустую строку
  }
}


function generateLoremIpsumString(dataFillValue) {
  let wordCount;

  try {
    const arrayValue = JSON.parse(dataFillValue);

    if (Array.isArray(arrayValue) && arrayValue.length === 2) {
      const minWordCount = parseInt(arrayValue[0], 10);
      const maxWordCount = parseInt(arrayValue[1], 10);
      wordCount = getRandomInt(minWordCount, maxWordCount + 1);
    } else if (!isNaN(dataFillValue)) {
      wordCount = parseInt(dataFillValue, 10);
    } else {
      throw new Error('Invalid data-fill value');
    }
  } catch (error) {
    console.error('Error parsing data-fill value:', error.message);
    return ''; // Возвращаем пустую строку в случае ошибки
  }

  function generateLoremIpsum(wordCount) {
    const loremIpsum = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum omnis unde optio eius fugit. Dolore ex quas placeat voluptatem. Aut atque quisquam odit numquam porro, earum harum aspernatur aliquid fugit.';
    const words = loremIpsum.split(' ');
  
    const startPosition = getRandomInt(0, words.length - wordCount + 1);
    const selectedWords = words.slice(startPosition, startPosition + wordCount);
  
    return selectedWords.join(' ');
  }

  return generateLoremIpsum(wordCount);
}

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

function getRandomColor() {
  const colors = ['blue', 'blue-dark', 'red', 'green', 'yellow'];
  const randomIndex = Math.floor(Math.random() * colors.length);
  return colors[randomIndex];
}

function getRandomTag() {
  const items = ['Автобизнес','Вендинг','Продажа времени','Универсальные','1С','Частное мнение','ЗетаВеб','Аналитика','Devops','Искусственный интеллект','Гит']
  const randomIndex = Math.floor(Math.random() * items.length);
  return items[randomIndex];
}

function getPanelLogo() {
  const items = ['./dist/img/panel-1c.svg', './dist/img/panel-zeta.svg'];
  const randomIndex = Math.floor(Math.random() * items.length);
  return items[randomIndex];
}


function applyCategoryClasses() {
  const elementsWithCategory = document.querySelectorAll('[data-case-category]');

  elementsWithCategory.forEach((element) => {
    const categoryValue = element.getAttribute('data-case-category');

    if (categoryValue) {
      element.classList.add(`panel--decoration-${categoryValue}`);
    }
  });
}

function repeatHtmlElements() {
  const elementsToRepeat = document.querySelectorAll('[data-html-repeat]');

  elementsToRepeat.forEach((element) => {
    const repeatValue = element.getAttribute('data-html-repeat');

    if (repeatValue && !isNaN(repeatValue)) {
      const repeatCount = parseInt(repeatValue, 10);

      for (let i = 1; i < repeatCount; i++) {
        const clone = element.cloneNode(true);
        element.parentNode.insertBefore(clone, element.nextSibling);
      }
    }
  });
}

// Вызываем функцию после загрузки страницы
document.addEventListener('DOMContentLoaded', () => {
  repeatHtmlElements();
  new AttributeFiller();
});