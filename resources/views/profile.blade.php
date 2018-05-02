@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        UserName : {{ Auth::user()->name }}
                        <hr>
                        Email : {{ Auth::user()->email }} 
                        <hr>
                        Your ID : {{ Auth::user()->id }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
