@extends('index')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('get.posts') }}">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h3 class="text-center">Modal</h3>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('get.table-selectable') }}">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h3 class="text-center">Selectable Table</h3>
                    </div>
                </div>
            </a>
        </div>

    </div>
@endsection