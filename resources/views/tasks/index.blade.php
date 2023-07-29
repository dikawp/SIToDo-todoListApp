<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    @extends('layouts.sidebar')

    @section('content')

        @if(session()->has('deleteSuccess'))
        <script>
            Swal.fire(
            'Succes deleted',
            'Your file has been deleted.',
            'success')
        </script>
        @endif

        @if(session()->has('updateSuccess'))
        <script>
            Swal.fire(
            'updated',
            'Your file has been updated.',
            'success')
        </script>
        @endif

        @vite('resources/js/datatable.js')
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
                        @if ($tasks->category_id == null)
                            <td></td>
                        @else
                            <td>{{ $tasks->category->categoryName }}</td>
                        @endif
                        <td>{{ $tasks->status }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('persontasks.edit',['persontask' => $tasks->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                <form action="{{ route('persontasks.destroy',['persontask' => $tasks->id]) }}" method="POST" id="deleteForm{{$tasks->id}}">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-outline-dark btn-sm me-2 "
                                    onclick="confirmDelete('{{$tasks->id}}')">
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
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.2/js/dataTables.fixedHeader.min.js"></script>
        <script type="module">
            $(document).ready(function() {
                $("#personTable").DataTable({
                    responsive: true,
                });
            });

            function confirmDelete(tasksId) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        document.getElementById('deleteForm'+ tasksId).submit();
                    }
                })
            }
        </script>
    @endpush

    </body>
    </html>
