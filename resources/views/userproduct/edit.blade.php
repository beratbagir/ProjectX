@extends('back.layouts.pages-layout')

@section('pageTitle', 'Create Licence')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>

                <div class="card-body">
                    <form action="{{ route('users.update', $usersProducts->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name">Name: <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="department_id">Department: <span class="text-danger">*</span></label>
                            <select name="department_id" class="form-control" id="department_id" required>
                                <option value="">Select Department</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 