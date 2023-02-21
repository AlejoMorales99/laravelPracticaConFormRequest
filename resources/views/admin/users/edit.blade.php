@extends("layouts.plantilla")

@section("cabezera")

@endsection

@section("contenido")

<div class="container-fluid ">

    <div class="row">
        <div class="col-md-12 mx-auto bg-light border border-1 w-25 rounded text-center p-3">
            <h5>ACTUALIZAR REGISTROS</h5>
            <!-- <form method="POST"  action="/productos"> -->
            {!! Form::model($user , ['route' => ['users.update' , $user->id] , 'method' => 'PUT' , 'files'=>true ]) !!}

                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name' , $user->name , ['class' => 'form-control' ] )  !!} <br>



                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email' , $user->email , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('email', 'VerificarEmail') !!}
                {!! Form::text('email_verified_at' , $user->email_verified_at , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('role_id', 'Role') !!}
                {!! Form::number('role_id' , $user->role_id , ['class' => 'form-control' ] )  !!} <br>

                @if(!empty($user->find($user->id)->foto->ruta_foto) )
                    <td> <img width="100" height="100" src="/images/{{$user->find($user->id)->foto->ruta_foto}}" alt="">  </td>
                @else
                    <td> No tiene foto  </td>
                @endif

                {!! Form::file('foto_id'  , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::submit('Actualizar Registro' , ['class' => 'btn btn-success' ] )  !!}

            {!! Form::close() !!}




        </div>
    </div>


</div>


@endsection

@section("pie")

@endsection
