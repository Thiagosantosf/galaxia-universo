@extends('layouts.app')

@section('content')

<div class="container1">
    <div class="row justify-content-right">
        <div class="col-md-8">
            <div class="card2">
                <div class="card-header">{{ __('Cadastro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="id_planeta" class="col-md-4 col-form-label text-md-right">{{ __('ID do Planeta') }}</label>
                            <div class="col-md-6">
                                <input id="id_planeta" class="form-control" name="id_planeta">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nome_planeta" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Planeta') }}</label>
                            <div class="col-md-6">
                                <input id="nome_planeta" class="form-control" name="nome_planeta">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="tam_planeta" class="col-md-4 col-form-label text-md-right">{{ __('Tamanho do Planeta') }}</label>
                            <div class="col-md-6">
                                <input id="tam_planeta"class="form-control" name="tam_planeta">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="massa_planeta" class="col-md-4 col-form-label text-md-right">{{ __('Massa do Planeta') }}</label>
                            <div class="col-md-6">
                                <input id="massa_planeta"class="form-control" name="massa_planeta">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gravidade_planeta" class="col-md-4 col-form-label text-md-right">{{ __('Gravidade do Planeta') }}</label>
                            <div class="col-md-6">
                                <input id="gravidade_planeta"class="form-control" name="gravidade_planeta">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comp_planeta" class="col-md-4 col-form-label text-md-right">{{ __('Composição do Planeta') }}</label>
                            <div class="col-md-6">
                                <input id="comp_planeta"class="form-control" name="comp_planeta">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                    <style>
                        .card2{
                            float: right;
                            background-color:white;
                        }
        </style>
            </div>
        </div>        
@endsection