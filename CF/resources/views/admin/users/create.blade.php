@extends('admin.template.main')


@section('content')
    <h1>Estoy en create usuario</h1>
    <br><br>


    @if(count($errors) > 0 )
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

    @endif

    {!! Form::open(['url' => 'admin/users/store', 'method' => 'POST'])  !!}

            <div class="form-group">
                {!! Form::label('name','nombre') !!}
                {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre Completo', 'required']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('email','Correo electrónico') !!}
                {!! Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com', 'required']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('password','Contraseña') !!}
                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'***********', 'required']) !!}
            </div> 

            <div class="form-group">
                {!! Form::label('type','Tipo de usuario') !!}<br>
                {!! Form::select('type', ['member'=>'miembro', 'admin'=>'Administrador'], ['class'=>'Form-control'] ) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}<br>
            </div> 

    {!! Form::close() !!}
   
   
    @if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
    @endif

    @if (session('status-ok'))
    <div class="alert alert-success">
        {{ session('status-ok') }}
    </div>
    @endif

@endsection
