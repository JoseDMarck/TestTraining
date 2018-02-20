@extends('admin.template.main')


@section('content')

    <br>
    <a href="{{ url('admin/users/create') }}" class="btn btn-info">Registrar nuevo usuario</a><hr>
    <table class="table table-striped ">
        <thead>
            <th>ID</th>
            <th>Nombre</th>  
            <th>Correo</th>  
            <th>Tipo</th>
            <th>Acción</th>
        <thead>

        <tbody>
             @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->type == "admin")
                           <span class="label label-default"> {{ $user->type }} </span>
                        @else
                            <span class="label label-primary"> {{ $user->type }} </span>                 
                        @endif
                    </td>
                    <td>
                        <a href="{{$url = action('userController@edit', ['id' => $user->id])}}" class="btn btn-warning">
                            <i class="fas fa-cog"></i>                                                           
                        </a>

                        <a href="{{$url = action('userController@destroy', ['id' => $user->id])}}" class="btn btn-danger">
                            <i class="far fa-times-circle"></i>                                
                        </a> 
                    </td>
                </tr>
             @endforeach
        </tbody>
    
    </table>

    {!! $users->render(); !!}
 
@endsection
