@extends('index')
@section('content')
    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('get.posts') }}">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center">Modal</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection