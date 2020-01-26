@extends('layouts.app')

@section('content')

<div class="container1">
    <div class="row justify-content-right">
        <div class="col-md-8">
            <div class="card2">
                <div class="card-header">{{ __('Listar') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                        
                        </form> 
                    </div>
                        <style>
                            .card2{
                                background-color:white;
                            }
                        </style>
                    </div>
        </div>        
    </div>
</div>    
@endsection