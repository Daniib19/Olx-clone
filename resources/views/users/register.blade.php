@extends('template')

@section('content')

<div class="container p-3 my-3 bg-dark text-white" style="background: linear-gradient(103deg, rgba(50,148,199,1) 0%, rgba(93,231,142,1) 49%, rgba(50,148,199,1) 100%)!important">
    <h2>Register</h2>
</div>
    {!! Form::open() !!}
    {!! Form::label('name', 'User Name') !!}    
    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => '']) !!}
    <br>
    {!! Form::label('email', 'Email') !!}    
    {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => '']) !!}
    <br>
    {!! Form::label('password', 'Password') !!}    
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
    <br>
    {!! Form::label('password_2', 'Repeat Password') !!}    
    {!! Form::password('password_2', ['class' => 'form-control', 'placeholder' => '']) !!}
    <br>
    {!! Form::submit('Register', ['class' => 'btn btn-primary', 'type' => 'button', 'style' => "background-color: rgb(16, 160, 148)"]) !!}
    {!! Form::close() !!}
    <hr>
    Ai deja cont? <a href="/login" style="color: rgb(16, 160, 148)">apasa aici pentru a te loga</a>
</div>
@endsection