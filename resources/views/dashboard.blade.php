<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <link rel="stylesheet" href="{{ asset('smg.css') }}">


</head>

<body>

    <div class="container">
        <h1>Dashboard </h1>

        <!-- Add User Button -->
        <div class="card">
            <button class="btn" id="openModalBtn">Add New User</button>
        </div>

        <!-- Users Table -->
        <div class="card">
            <h2>All Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>gender</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">
                    <tr>
                        <td>1</td>
                        <td>test user</td>
                        <td>stuartsmg7@gmail.com</td>
                        <td>male</td>
                        <td>agent</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="userModal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>Add New User</h2>
            <form id="userForm">
                <div class="form-group">
                    <label for="userName">Name</label>
                    <input name="name" type="text" id="userName" required>
                </div>
                <div class="form-group">
                    <label for="userEmail">Email</label>
                    <input name="email" type="email" id="userEmail" required>
                </div>
                <div class="form-group">
                    <label for="userGender">gender</label>
                    <select name="gender" id="gender">
                        <option value="">gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="userRole">Role</label>
                    <inputn name="role" type="text" id="userRole" required>
                </div>
                <button type="submit" class="btn">Add User</button>
            </form>
        </div>
    </div>

    <script>
        const modal = document.getElementById('userModal');
        const openBtn = document.getElementById('openModalBtn');
        const closeBtn = document.getElementById('closeModalBtn');
        const form = document.getElementById('userForm');
        const tableBody = document.getElementById('userTableBody');

        openBtn.addEventListener('click', () => modal.style.display = 'flex');
        closeBtn.addEventListener('click', () => modal.style.display = 'none');
        window.addEventListener('click', (e) => { if (e.target === modal) modal.style.display = 'none'; });

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const name = document.getElementById('userName').value;
            const email = document.getElementById('userEmail').value;
            const gender = document.getElementById('usergender').value;
            const role = document.getElementById('userRole').value;

            const rowCount = tableBody.rows.length + 1;
            const newRow = `<tr>
            <td>${rowCount}</td>
            <td>${name}</td>
            <td>${email}</td>
              <td>${gender}</td>
            <td>${role}</td>
        </tr>`;
            tableBody.innerHTML += newRow;
            modal.style.display = 'none';
            form.reset();
        });
    </script>

    <div>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }



            .footer a {
                color: #ffcc00;
                text-decoration: none;
                margin: 0 10px;
            }
        </style>
        <div class="footer">
            <p>&copy; Stuart SMG | <a href="https://www.instagram.com/stuart_smg/">Instagram</a> | <a
                    href="{{ $contact['mobile'] }}">Contact</a> | <a href="{{ $contact['mobile'] }}">Email</a></p>
        </div>
    </div>

</body>

</html>