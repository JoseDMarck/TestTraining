@extends('admin.template.main')


@section('content')
    <br>
    <h4>Editar usuario: {{$categories->name}}</h4>
    <br><br>

    {!! Form::open(['url' => ['admin/categories', $categories], 'method' => 'PUT'])  !!}

            <div class="form-group">
                {!! Form::label('name','nombre') !!}
                {!! Form::text('name', $categories->name, ['class'=>'form-control', 'placeholder'=>'Nombre Completo', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}<br>
            </div> 

    {!! Form::close() !!}
   


@endsection
