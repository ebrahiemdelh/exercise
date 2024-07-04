@extends('layouts.master')
@section('title')
    Add New Product
@endsection
@section('content')
    <div class="content-wrapper" style="min-height: 1345.6px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                    <div class="col-sm-12">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Product Description</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                            value="{{ old('description') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Product Price</label>
                                        <input type="number" step=".01" class="form-control" id="price"
                                            name="price" value="{{ old('price') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category_id" id="category"
                                            value="{{ old('category_id') }}">
                                            <option value="0" disabled selected>None</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Product Quantity</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity"
                                            value="{{ old('quantity') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status"
                                            value="{{ old('status') }}">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="color">
                                            @foreach ($colors as $color)
                                                <input type="checkbox" name="{{ $color->color }}"
                                                    value="{{ $color->color }}">{{ $color->color }}</input>
                                            @endforeach
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="size">
                                            @foreach ($sizes as $size)
                                                <input type="checkbox" name="size"
                                                    value="{{ $size->size }}">{{ $size->size }}</input>
                                            @endforeach
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
