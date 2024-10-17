const taskInput = document.getElementById("taskInput");
const addTaskButton = document.getElementById("addTask");
const taskList = document.getElementById("taskList");

let tasks = [];

function renderTasks() {
  taskList.innerHTML = "";
  tasks.forEach((task, index) => {
    const li = document.createElement("li");
    li.innerHTML = `
      <span class="task-text">${task}</span>
      <button class="action-btn edit-btn" onclick="editTask(${index})">✏️</button>
      <button class="action-btn delete-btn" onclick="deleteTask(${index})">🗑️</button>
    `;
    taskList.appendChild(li);
  });
}

function addTask() {
  const taskText = taskInput.value.trim();
  if (taskText) {
    tasks.push(taskText);
    taskInput.value = "";
    renderTasks();
  }
}

function editTask(index) {
  const li = taskList.children[index];
  const currentText = tasks[index];

  li.innerHTML = `
    <input type="text" class="edit-input" value="${currentText}">
    <button class="action-btn save-btn" onclick="saveTask(${index})">💾</button>
    <button class="action-btn cancel-btn" onclick="cancelEdit(${index}, '${currentText}')">❌</button>
  `;
}

function saveTask(index) {
  const li = taskList.children[index];
  const newText = li.querySelector(".edit-input").value.trim();
  if (newText) {
    tasks[index] = newText;
    renderTasks();
  }
}

function cancelEdit(index, originalText) {
  tasks[index] = originalText;
  renderTasks();
}

function deleteTask(index) {
  tasks.splice(index, 1);
  renderTasks();
}

addTaskButton.addEventListener("click", addTask);

taskInput.addEventListener("keypress", function (e) {
  if (e.key === "Enter") addTask();
});

renderTasks();
