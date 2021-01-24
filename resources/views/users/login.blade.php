@extends('template')

@section('content')

<div class="container p-3 my-3 bg-dark text-white" style="background: linear-gradient(103deg, rgba(50,148,199,1) 0%, rgba(93,231,142,1) 49%, rgba(50,148,199,1) 100%)!important">
    <h2>Login</h2>
</div>
    {!! Form::open() !!}
    {!! Form::label('name', 'User Name') !!}    
    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => '']) !!}
    <br>
    {!! Form::label('password', 'Password') !!}    
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
    <br>
    {!! Form::submit('Login', ['class' => 'btn btn-primary', 'type' => 'button', 'style' => "background: rgb(16, 160, 148)"]) !!}
    {!! Form::close() !!}
    <hr>
    Nu ai cont? <a href="/register" style="color: rgb(16, 160, 148)">apasa aici pentru a face unu</a>
</div>
@endsection