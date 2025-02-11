@extends('back.layouts.pages-layout')

@section('pageTitle', 'Create Product')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Product</div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="product_name">Name: <span class="text-danger">*</span></label>
                            <input type="text" name="product_name" class="form-control" id="product_name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Manufacturer</label>
                            <select class="form-control" id="name" name="name">
                                <option value="">Select Manufacturer</option>
                                @foreach($manufacturers as $manufacturer)
                                    <option value="{{ $manufacturer->name }}">{{ $manufacturer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="category_id">Category: <span class="text-danger">*</span></label>
                            <select name="category_id" class="form-control" id="category_id" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Supplier</label>
                            <select class="form-control" id="name" name="name">
                                <option value="">Select Supplier</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->name }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        
                        <div class="form-group mb-3">
                            <label for="support_expire_date">Support Expiry Date: <span class="text-danger">*</span></label>
                            <input type="date" name="support_expire_date" class="form-control" id="support_expire_date" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="purchase_date">Purchase Date: <span class="text-danger">*</span></label>
                            <input type="date" name="purchase_date" class="form-control" id="purchase_date" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="cost">Cost: <span class="text-danger">*</span></label>
                            <input type="number" name="cost" class="form-control" id="cost" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 