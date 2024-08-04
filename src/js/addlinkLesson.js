function addLinkLesson(...args) {
  let divLesson = document.getElementById('lessonContent');
  let containerCounter = 1;

  for (let i = 0; i < args.length; i += 2) {
    let buttonContainer = document.createElement('div');
    buttonContainer.className = 'button-container';
    buttonContainer.id = `container${containerCounter}`;

    let button = document.createElement('button');
    button.className = 'btn btn-primary';
    button.type = 'button';
    button.setAttribute('data-bs-toggle', 'collapse');
    button.setAttribute('data-bs-target', `#collapseExample${i}`);
    button.setAttribute('aria-expanded', 'false');
    button.setAttribute('aria-controls', `collapseExample${i}`);
    button.textContent = args[i];

    let collapseDiv = document.createElement('div');
    collapseDiv.className = 'collapse';
    collapseDiv.id = `collapseExample${i}`;
    
    let collapseBodyDiv = document.createElement('div');
    collapseBodyDiv.className = 'card card-body';
    collapseBodyDiv.id = `collapseBody${i}`;

    for (let j = 0; j < args[i + 1].length; j += 2) {
      let link = document.createElement('a');
      link.textContent = args[i + 1][j];
      link.href = args[i + 1][j + 1]; // Пустая ссылка, чтобы не перезагружать страницу
      collapseBodyDiv.appendChild(link);
    }

    collapseDiv.appendChild(collapseBodyDiv);
    buttonContainer.appendChild(button);
    buttonContainer.appendChild(collapseDiv);
    divLesson.appendChild(buttonContainer);

    containerCounter++;
  }
}


addLinkLesson('С ПК на ВЫ', ['ссылка1', 'lesson1.php', 'ссылка2', 'lesson2.html'], '2урок', ['ссылка3', 'lesson3', 'ссылка4', 'html4']);

