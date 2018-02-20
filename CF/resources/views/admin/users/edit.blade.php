@extends('admin.template.main')


@section('content')
    <br>
    <h4>Editar usuario: {{$user->name}}</h4>
    <br><br>

    {!! Form::open(['url' => ['admin/users', $user], 'method' => 'PUT'])  !!}

            <div class="form-group">
                {!! Form::label('name','nombre') !!}
                {!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Nombre Completo', 'required']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('email','Correo electrónico') !!}
                {!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'example@gmail.com', 'required']) !!}
            </div>
 
            <div class="form-group">
                {!! Form::label('type','Tipo de usuario') !!}<br>
                {!! Form::select('type', ['member'=>'miembro', 'admin'=>'Administrador'],['class'=>'Form-control'] ) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}<br>
            </div> 

    {!! Form::close() !!}
   


@endsection
