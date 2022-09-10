@extends('layouts.dashboards')


@section('content')
    <div>
        <div>
            <h1>Create Brand</h1>
            <small></small>
            <hr>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="" method="POST">

            </form>
        </div>
    </div>
@endsection
