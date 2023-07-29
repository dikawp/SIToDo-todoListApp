<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    @extends('layouts.sidebar')

    @section('content')
    <div class="container-sm">
        <h3 class="mt-3">Create Task</h3>
        <h3 class="mt-3">{{ $task }}</h3>
        <form action="{{ route('persontasks.update', ['persontask' => $task->id]) }}" method="POST" enctype="multipart/form-data" id="updateForm{{$task->id}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="namaTask" class="form-label">Task Name</label>
              <input type="text" class="form-control" id="taskName" name="taskName" value="{{ $task->namaTask }}">
            </div>
            <div class="mb-3">
              <label for="startDate" class="form-label">Start Date</label>
              <input type="date" class="form-control" id="startDate" name="startDate" value="{{ $task->startDate }}">
            </div>
            <div class="mb-3">
              <label for="dueDate" class="form-label">Due Date</label>
              <input type="date" class="form-control" id="dueDate" name="dueDate" value="{{ $task->dueDate }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select">
                  <option value="pending">Pending</option>
                  <option value="onprogress">On-Progress</option>
                  <option value="done">Done</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="category" name="category" class="form-select">
                    @foreach ($category as $categories )
                     <option value="{{ $categories->id }}">{{ $categories->categoryName }}</option>
                    @endforeach
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="confirmUpdated('{{$task->id}}')">Update</button>
          </form>
    </div>
    @endsection
      <script>
        function confirmUpdated(taskId) {
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!'
        }).then((result) => {
            if (result.isConfirmed) {
          
            document.getElementById('updateForm'+ taskId).submit();
            }
        })
        }
    </script>

</body>
</html>
