@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Category') }}</div>
                <div class="card-body">
                    <ul>
                    @foreach ($categories as $item)
                        <li>
                            <a href="{{route('get-product',$item->id)}}">{{$item->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
