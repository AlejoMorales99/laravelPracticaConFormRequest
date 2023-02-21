@extends("layouts.plantilla")

@section("cabezera")

@endsection

@section("contenido")

<div class="container-fluid ">

    <div class="row">
        <div class="col-md-12 mx-auto bg-light border border-1 w-25 rounded text-center p-3">
            <h5>INSERTAR REGISTROS</h5>
            <!-- <form method="POST"  action="/productos"> -->
            {!! Form::open(['url' => '/admin/users' , 'method' => 'post' , 'files'=>true]) !!}

                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name' , '' , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password'  , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email' , '' , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('email', 'VerificarEmail') !!}
                {!! Form::text('email_verified_at' , '' , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::label('role_id', 'Role') !!}
                {!! Form::number('role_id' , '' , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::file('foto_id' , ['class' => 'form-control' ] )  !!} <br>

                {!! Form::submit('Insertar Registro' , ['class' => 'btn btn-success' ] )  !!}

            {!! Form::close() !!}




        </div>
    </div>


</div>


@endsection

@section("pie")

@endsection
