<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{

    public function index()
    {

        $users = User::all();

        return view('admin.users.index' , compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {

        $entrada = $request->all();


        $archivo = $request->file('foto_id');

        if($archivo){
            $nombreFoto = $archivo->getClientOriginalName();
            $archivo->move('images',$nombreFoto);
            $foto = Foto::create(['ruta_foto' =>$nombreFoto ]);

            $entrada['foto_id'] = $foto->id;
            $entrada['password'] = bcrypt($request->password);


            User::create($entrada);

        }else{
            User::create($entrada);
        }

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit' , compact('user') );
    }


    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $entrada = $request->all();

        $archivo = $request->file('foto_id');

        if($archivo){
            $nombreFoto = $archivo->getClientOriginalName();
            $archivo->move('images',$nombreFoto);
            $foto = Foto::create(['ruta_foto' =>$nombreFoto ]);

            $entrada['foto_id'] = $foto->id;


            $user->update($entrada);

        }else{
            $user->update($entrada);
        }

        return redirect('/admin/users');


    }


    public function destroy($id)
    {

        $user = User::findOrFail($id);

        $user->delete();

        return redirect("/admin/users");



    }
}
