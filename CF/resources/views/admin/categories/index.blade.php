@extends('admin.template.main')


@section('content')

    <br>
    <a href="{{ url('admin/categories/create') }}" class="btn btn-info">Crear nueva categoria</a><hr>
    <table class="table table-striped ">
        <thead>
            <th>ID</th>
            <th>Nombre</th>  
            <th>Accion</th>  
        <thead>

        <tbody>
             @foreach($categories  as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    
                     
                    <td>
                        <a href="{{$url = action('categoriesController@edit', ['id' => $category->id])}}" class="btn btn-warning">
                            <i class="fas fa-cog"></i>                                                           
                        </a>

                        <a href="{{$url = action('categoriesController@destroy', ['id' => $category->id])}}" class="btn btn-danger">
                            <i class="far fa-times-circle"></i>                                
                        </a> 
                    </td>
                </tr>
             @endforeach
        </tbody>
    
    </table>

    {!! $categories ->render(); !!}
 
@endsection
