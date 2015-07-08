@extends('app')

@section('content')
    <div style="width: 500px;margin: 150px auto;">
        
    
    {!! Form::open(['name' => 'registerForm', 'method' => 'POST']) !!}
    <div>       
        {!! Form::label('name', 'login', ['id' => 'name']) !!}
        {!! Form::input('text', 'name') !!}
    </div>
    <br />
    <hr />
    <br />
    <div>
        
    {!! Form::label('email', 'email', ['id' => 'email']) !!}
    {!! Form::input('text', 'email') !!}

    </div>

    <br />
    <hr />
    <br />


    <div>       
        {!! Form::label('password', 'password', ['id' => 'password']) !!}
        {!! Form::input('password', 'password') !!}
    </div>
    <br />
    <hr />
    <br />

    <div>       
        {!! Form::label('password_confirmation', 'confirm password', ['id' => 'password_confirmation']) !!}
        {!! Form::input('password', 'password_confirmation') !!}
    </div>
    <br />
    <hr />
    <br />
    
    {!! Form::submit('register new user') !!}

    
    {!! Form::close() !!}

       @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    </div>

@stop