@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <div class="clearfix w-100 mb-3">
            <div class="float-right">
                <a href="{{ route('product.index') }}"><button class="btn btn-info">back</button></a>
            </div>
        </div>


        <div class="w-50 mx-auto">
            @if ($aRow)
                <form action="{{ route('product.update', $aRow->id) }}" method="post">
                    @method('patch')
                @else
                    <form action="{{ route('product.store') }}" method="post">
            @endif
            @csrf
            <fieldset>
                <legend class="text-center"> {{ $aRow ? 'Update' . $aRow->name : 'Create New' }} Product</legend>
                <div class="form-group">
                    <label for="exampleInputEmail1">Selete Category</label>
                    <select name="category" id="" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($category as $c_item)
                            <option {{ ($aRow && $c_item->id == $aRow->category) ? 'selected' : '' }} value="{{ $c_item->id }}">{{ $c_item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Enter Product Name</label>
                    <input type="text" name="name" value="{{old('name') ?? $aRow->name ?? '' }}" class="form-control" id="exampleInputPassword1"
                        placeholder="Product Name">
                </div>
                <div class="mt-3"><button class="btn btn-info">Submit</button></div>
                </form>
        </div>


    </div>
@endsection
