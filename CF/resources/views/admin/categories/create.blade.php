@extends('admin.template.main')


@section('content')
    <br>
    <h4>Agregar categoría</h4>
    <br>

    {!! Form::open(['url' => 'admin/categories/store', 'method' => 'POST'])  !!}

            <div class="form-group">
                {!! Form::label('name','nombre') !!}
                {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombre de la categoria', 'required']) !!}
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
