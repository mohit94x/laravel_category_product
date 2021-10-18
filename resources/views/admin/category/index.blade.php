@extends('admin.layouts.app')

@section('content')
<div class="container">

    <div class="clearfix w-100 mb-3">
        <div class="float-right">
            <a href="{{route('category.create')}}"><button class="btn btn-primary">Create</button></a>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Parent Category</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($aData as $key => $item)
            <tr>
                <th>{{++$key}}</th>
                <td>{{$item->parent->name ?? ""}}</td>
                <td>{{$item->name}}</td>
                <td>
                  <a href="{{route('category.add-product',$item->id)}}"><button class="btn btn-primary btn-xs">Add Product</button></a>
                  <a href="{{route('category.edit',$item->id)}}"><button class="btn btn-info btn-xs">Edit</button></a>
                  <form action="{{route('category.destroy',$item->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
