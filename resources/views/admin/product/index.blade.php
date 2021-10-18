@extends('admin.layouts.app')

@section('content')
<div class="container">

    <div class="clearfix w-100 mb-3">
        <div class="float-right">
            <a href="{{route('product.create')}}"><button class="btn btn-primary">Create</button></a>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Category Name</th>
            <th scope="col">Product Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($aData as $key => $item)
            <tr>
                <th>{{++$key}}</th>
                <td>{{$item->getCategory->name ?? ""}}</td>
                <td>{{$item->name}}</td>
                <td>
                  <a href="{{route('product.edit',$item->id)}}"><button class="btn btn-info btn-xs">Edit</button></a>
                  <form action="{{route('product.destroy',$item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
