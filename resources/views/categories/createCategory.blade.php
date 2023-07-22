<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
</head>
<body>
    @extends('layouts.sidebar')
    @section('content')
    <div class="container-sm">
        <h3 class="mt-3">Create Category</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="" class="form-control" id="user_id" name="user_id" value="" hidden>
            <div class="mb-3">
              <label for="workspaceName" class="form-label">Workspace's Name</label>
              <input type="" class="form-control" id="workspaceName" name="workspaceName">
            </div>
            <div class="mb-3">
              <label for="workspaceDesc" class="form-label">Description</label>
              <textarea class="form-control" placeholder="" id="workspaceDesc" style="height: 100px" name="workspaceDesc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
</body>
</html>
