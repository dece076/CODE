
  let tasks = [];

  function renderTasks() {
    const list = document.querySelector('.js-task-list');
    let html = '';

    tasks.forEach(task => {
      html += `
        <div class="task" data-id="${task.id}">
          <input type="checkbox" ${task.completed ? 'checked' : ''} />
          <span class="task-title">${task.title}</span>
          <input type="text" class="edit-input" value="${task.title}" />
          <button class="js-update">Update</button>
          <button class="js-delete">Delete</button>
        </div>
      `;
    });

    list.innerHTML = html;

    attachEvents();
  }

  function attachEvents() {

    document.querySelectorAll('.js-update').forEach(btn => {
      btn.addEventListener('click', () => {
        const taskEl = btn.closest('.task');
        const span = taskEl.querySelector('.task-title');
        const input = taskEl.querySelector('.edit-input');

        if (btn.innerText === 'Update') {
          span.style.display = 'none';
          input.style.display = 'block';
          btn.innerText = 'Save';
        } else {
          span.innerText = input.value;
          span.style.display = 'block';
          input.style.display = 'none';

          const id = taskEl.dataset.id;
          tasks = tasks.map(t =>
            t.id === id ? { ...t, title: input.value } : t
          );

          btn.innerText = 'Update';
        }
      });
    });

    document.querySelectorAll('.js-delete').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.closest('.task').dataset.id;
        tasks = tasks.filter(t => t.id !== id);
        renderTasks();
      });
    });

  }

  document.querySelector('.js-add-task').addEventListener('click', () => {
    const input = document.querySelector('.js-new-task');
    if (!input.value.trim()) return;

    tasks.push({
      id: Date.now().toString(),
      title: input.value,
      completed: false
    });

    input.value = '';
    renderTasks();
  });
