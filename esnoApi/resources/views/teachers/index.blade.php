<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teachers List</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-primary">Teachers</h2>
      <a href="/teachers/create" class="btn btn-success">
    Add Teacher
</a>

    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody id="teacherRows">
                    @foreach($teachers as $t)
                    <tr data-department-id="{{ $t->department_id }}">
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->name }}</td>
                        <td>{{ $t->email }}</td>
                        <td>{{ $t->phone }}</td>
                        <td class="dept-name">Loading...</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @if($teachers->isEmpty())
                <div class="alert alert-warning mt-3">
                    No teachers found.
                </div>
            @endif

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    fetch('http://127.0.0.1:8001/api/departments')
        .then(res => res.json())
        .then(deps => {
            const map = {};
            deps.forEach(d => map[d.id] = d.name);

            document.querySelectorAll('tr[data-department-id]').forEach(row => {
                const depId = row.getAttribute('data-department-id');
                const cell = row.querySelector('.dept-name');
                cell.textContent = map[depId] ?? 'Unknown';
            });
        });
</script>

</body>
</html>
