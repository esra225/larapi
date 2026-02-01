<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Teacher</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add Teacher</h4>
        </div>

        <div class="card-body">
<form method="POST" action="/teachers">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Department</label>
                  <select name="department" id="departmentSelect" class="form-select" required>
    <option value="">Select Department</option>
</select>

                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="/index" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
 fetch('https://jsonplaceholder.typicode.com/users')
.then(res => res.json())
.then(data => {
    const select = document.getElementById('departmentSelect');
    data.forEach(user => {
        const opt = document.createElement('option');
        opt.value = user.name;  // الاسم
        opt.textContent = user.name;
        select.appendChild(opt);
    });
});



</script>

</body>
</html>
