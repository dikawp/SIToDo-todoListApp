<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
</head>
<body>

    @extends('layouts.sidebar')

    @section('content')
    <div class="container-sm">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="mt-3">Personal Task</h3>
        </div>
        <div class="table-responsive border p-3 rounded-3 mb-3">
            {{ $persontask }}
            <a href="{{ route('persontasks.create') }}" class="btn btn-outline-primary mb-3">Create new Task</a>
            <table class="table table-hover table-striped bg-white" id="personTable">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Start Date</th>
                        <th>Due Date</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ( $persontask as $tasks )
                    <tr>
                        <td>{{ $tasks->namaTask }}</td>
                        <td>{{ $tasks->startDate }}</td>
                        <td>{{ $tasks->dueDate }}</td>
                        <td>{{ $tasks->category->categoryName }}</td>
                        <td>{{ $tasks->status }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                <form action="{{ route('persontasks.destroy',['persontask' => $tasks->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
    @push('scripts')
        <script type="module">
            $(document).ready(function() {
                $('#personTable').DataTable();
            });
        </script>
    @endpush

</body>
</html>
