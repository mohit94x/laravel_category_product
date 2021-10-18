@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>
                <div class="card-body">
                    <ul>
                    @forelse ($products as $item)
                        <li>
                            {{$item->name}}
                        </li>
                        @empty
                        <li>
                            <span>No Product Registered</span>
                        </li>
                    @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
