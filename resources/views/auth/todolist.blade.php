<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #290038;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-custom {
            background-color: #0078ff;
            padding: 20px;
            border-radius: 20px;
            width: 500px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .task-item {
            background-color: #ffffff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>

    <div class="container-custom">
        <div class="mb-3 input-group">
            <input type="text" id="taskInput" class="form-control" placeholder="Masukkan tugas di sini...">
            <button class="btn btn-light" onclick="addTask()">Tambah</button>
        </div>
        <ul id="taskList" class="list-group"></ul>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function addTask() {
            const taskInput = document.getElementById('taskInput');
            const taskValue = taskInput.value.trim();

            if (taskValue) {
                const taskList = document.getElementById('taskList');
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item task-item';

                const taskSpan = document.createElement('span');
                taskSpan.className = 'task';
                taskSpan.textContent = taskValue;

                const actionsDiv = document.createElement('div');
                actionsDiv.className = 'actions';

                const editBtn = document.createElement('button');
                editBtn.className = 'btn btn-sm btn-primary';
                editBtn.textContent = 'Edit';
                editBtn.onclick = () => editTask(taskSpan);

                const deleteBtn = document.createElement('button');
                deleteBtn.className = 'btn btn-sm btn-danger';
                deleteBtn.textContent = 'Hapus';
                deleteBtn.onclick = () => taskList.removeChild(listItem);

                actionsDiv.appendChild(editBtn);
                actionsDiv.appendChild(deleteBtn);

                listItem.appendChild(taskSpan);
                listItem.appendChild(actionsDiv);
                taskList.appendChild(listItem);

                taskInput.value = ''; // Kosongkan input setelah menambah tugas
            }
        }

        function editTask(taskSpan) {
            const newTask = prompt('Edit tugas', taskSpan.textContent);
            if (newTask) {
                taskSpan.textContent = newTask;
            }
        }
    </script>

</body>

</html>
