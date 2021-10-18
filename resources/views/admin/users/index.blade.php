@extends('admin.layouts.app')

@section('content')
<div class="container">

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($aData as $key => $item)
            <tr>
                <th>{{++$key}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>
                  <a href="{{route('user.admin.user_login',$item->id)}}"><button class="btn btn-info btn-xs">Login</button></a>
                  <form action="{{route('user.destroy',$item->id)}}" method="post">
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
