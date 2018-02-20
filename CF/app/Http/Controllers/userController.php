<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class userController extends Controller
{
    
    public function index(){
        
         $users = User::orderBy('id', 'ASC')->paginate(10);
         return view('admin.users.index')->with('users',$users);   
    }

    public function create(){
        return view('admin.users.create');
    }

    public function show(){
        return 'Estoy funcionando: show';
        //return view('admin.users.create');
    }

    public function store(UserRequest $request){
        $user = new User($request->all());
        //dd($request->all());        

        $user->email = $request->email;
        $correo_user = $user->email;  

        $check_if_email_exist = User::where('email', $correo_user)->exists();

        if($check_if_email_exist){
            flash('Ya tenemos un usuario registrado con ese correo')->error()->important();
            return redirect('admin/users/create');
        } 

        else{
            $user->password = bcrypt($request->password);         
            $user->type = $request->type;
            $user->save();     
            flash('Usuario creado correctamente')->success()->important();
            return redirect('admin/users/create');  
        }
         
    }


    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        flash('El usuario <b>'. $user->name . '</b> ha sido eliminado de forma satisfactoria')->success()->important();
        return redirect('admin/users/'); 
    }

    public function edit($id){
            $user = User::find($id); 
            return view('admin.users.edit')->with('user',$user);           
    }

    public function update(Request $request, $id){

    
        $user = User::find($id);
        $user -> email = $request->email;
        
        
        $correo_user = $request->email;

        $check_if_email_exist = User::where('email','=',  $correo_user  )
                         ->where('id', '!=', $user->id)
                         ->exists();

          
      

        if($check_if_email_exist){
           // echo $correo_user; echo $check_if_email_exist;

            flash('El correo ya existe en la base de datos')->error()->important();
            return redirect('admin/users');
        } 
        
        else {
        
            $user -> name = $request -> name; 
            $user -> email = $request -> email; 
            $user -> type = $request -> type;
            $user -> save(); 
    
            flash('El usuario <b>'. $user->name . '</b> ha sido editado de forma satisfactoria')->success()->important();
            return redirect('admin/users/'); 
        }

       
    }

}


 