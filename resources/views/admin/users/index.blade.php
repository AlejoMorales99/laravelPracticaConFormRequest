@extends("layouts.plantilla")

@section("cabezera")

@endsection


@section("contenido")

<br><br><div class="container-fluid ">

    <div class="row">
        <div class="text-center" >
            <h5>REGISTROS</h5>
        </div>

        <div class="col-md-12 mx-auto bg-light border border-1 w-75 rounded text-center p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Role ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Actualizado</th>
                        <th scope="col">foto</th>
                    </tr>
                </thead>
                <tbody>

                    @if(count($users)>0)
                        @foreach($users as $user)

                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->role_id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>

                                @if(!empty($user->find($user->id)->foto->ruta_foto) )
                                    <td> <img width="100" height="100" src="/images/{{$user->find($user->id)->foto->ruta_foto}}" alt="">  </td>

                                @else
                                    <td> No tiene foto  </td>
                                @endif



                                <td> <a href="{{route('users.edit' , $user->id )}}" class="btn btn-primary">Actualizar</a> </td>

                                <td>
                                     {!! Form::model($user , ['route' => ['users.destroy' , $user->id] , 'method' => 'DELETE'])!!}
                                        <input class="btn btn-danger" type="submit" value="Eliminar">
                                    {!! Form::close() !!}
                                </td>


                            </tr>

                        @endforeach

                        @else

                            <td>no hay registros que mostrar</td>


                    @endif

                </tbody>
            </table>
        </div>
    </div>


</div>


@endsection

@section("pie")

@endsection
