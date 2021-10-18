@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <div class="clearfix w-100 mb-3">
            <div class="float-right">
                <a href="{{ route('category.index') }}"><button class="btn btn-info">back</button></a>
            </div>
        </div>
        <div class="w-50 mx-auto">
            <form action="{{ route('product.store') }}" method="post">
            @csrf
            <fieldset>
                <legend class="text-center">Create New Product</legend>
                <div class="form-group text-center mt-3">
                    <label for="exampleInputEmail1">Create Product on Category <b> {{$category->name}} </b></label>
                    <input type="hidden" name="category" value="{{$category->id}}">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputPassword1">Enter Product Name</label>
                    <input type="text" name="name" value="{{old('name') ?? '' }}" class="form-control" id="exampleInputPassword1"
                        placeholder="Product Name">
                </div>
                <div class="mt-3"><button class="btn btn-info">Submit</button></div>
                </form>
        </div>


    </div>
@endsection
