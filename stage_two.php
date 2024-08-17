<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#2</title>
    <style>
    #result {
      border: 1px solid #ccc;
      padding: 10px;
      width: 100%;
      height: 500px;
      overflow: auto;
    }
  </style>
</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">

                <!---->
                <content>
               
<html>
<head>
  <title>Онлайн-редактор</title>
  <style>
    body {
      font-family: monospace;
    }
    #editor {
      width: 100%;
      height: 600px;
      border: 1px solid #ccc;
      padding: 10px;
      overflow: auto;
    }
    #folder-list {
      width: 200px;
      height: 600px;
      border: 1px solid #ccc;
      padding: 10px;
      overflow: auto;
    }
    #folder-list ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    #folder-list li {
      padding: 5px;
      border-bottom: 1px solid #ccc;
    }
    #folder-list li:hover {
      background-color: #f0f0f0;
    }
  </style>
</head>
<body>
  <h1>Онлайн-редактор</h1>
  <div id="folder-list">
    <ul id="folder-list-ul">
      <li>Папки:</li>
    </ul>
    <input id="create-folder-input" type="text" placeholder="Введите название папки">
    <button id="create-folder-button">Создать папку</button>
  </div>
  <div id="editor">
    <textarea id="code-editor" placeholder="Введите код"></textarea>
  </div>
  <button id="save-button">Сохранить</button>

  <?php
  include 'src/php/additionally.php';
  include 'src/php/canceling_the_button.php';
  ?>
  <script>
    const folderList = document.getElementById('folder-list-ul');
    const createFolderInput = document.getElementById('create-folder-input');
    const createFolderButton = document.getElementById('create-folder-button');
    const codeEditor = document.getElementById('code-editor');
    const saveButton = document.getElementById('save-button');

    let folders = {};
    let currentFolder = null;

    createFolderButton.addEventListener('click', () => {
      const folderName = createFolderInput.value;
      if (folderName) {
        folders[folderName] = {};
        const folderLi = document.createElement('li');
        folderLi.textContent = folderName;
        folderList.appendChild(folderLi);
        createFolderInput.value = '';
      }
    });

    folderList.addEventListener('click', (e) => {
      if (e.target.tagName === 'LI') {
        const folderName = e.target.textContent;
        currentFolder = folderName;
        codeEditor.value = folders[folderName].code || '';
      }
    });

    saveButton.addEventListener('click', () => {
      if (currentFolder) {
        folders[currentFolder].code = codeEditor.value;
      }
    });

    codeEditor.addEventListener('input', () => {
      if (currentFolder) {
        folders[currentFolder].code = codeEditor.value;
      }
    });
  </script>
</body>
</html>
                </content>
            </div>
        </div>
    </div>
</div>
</body>
</html>