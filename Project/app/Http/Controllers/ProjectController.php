<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projectmodel;
use Session;
use Symfony\Component\Console\Input\Input;
use App\Models\User;
use Crypt;
use Auth;

use Illuminate\Validation\Rule; 
 
class ProjectController extends Controller
{
  function index(){
      return view('home');
  }
  function list(){
    $data= projectmodel::all();
    return view('list',['data'=> $data]);
  }
  function ADD(Request $req){
    $resto = new projectmodel;
    $resto->name=$req->input('name');
    $resto->email=$req->input('email');
    $resto->address=$req->input('address');
    $resto->save();
    $req->session()->flash('add',"Restaurant submitted successfully");
    return redirect('list');

   }
   function delete($id){
      $req= projectmodel::find($id)->delete();
      Session::flash('delete',"Restaurant submitted successfully");
    return redirect('list');
      
   }
   function edit($id){
    $data=projectmodel::find($id);

    return view('edit',['data'=>$data]);

   }
   function update(Request $update){
    $updatedata = projectmodel::find($update->id);
    $updatedata->name=$update->name;
    $updatedata->email=$update->email;
    $updatedata->address=$update->address;
    $updatedata->save();
    $update->session()->flash('add',"Restaurant Updated Successfully");
    return redirect('list');
 
   }
   function register(Request $register){
    
     $register->validate([
      'email' => ['required', 'string', 'email', 'max:100',  Rule::unique('users')],
      'contact'=> ['required', 'max:10', 'min:10'],

    ]);
     $user = new User;
     $user->name=$register->name;
     $user->email=$register->email;
     $user->password=Crypt::encrypt($register->password);
     $user->contact=$register->contact;
     $user->save();
      return redirect('login');
     


   }
   function login(Request $login){
     $user =User::where('email',$login->email)->get();
     if (Crypt::decrypt($user[0]->password)==$login->password){
      $login->session()->put('user',$user[0]->name);
      $login->session()->flash('login','You are logged in Successfully' );
      return redirect('home');
     }
     else{
      $login->session()->flash('wrong','Check your password and try again' );
     
      return redirect('login');
     }
     

   }
   function reset(Request $reset){
   
     if(User::where('email',$reset->email)->count() > 0){
       return redirect('updatepassword');

    }
    else{
      Session::flash('reset','Your email id not found' );

             return redirect('reset');

    }

  

}

function update_pass(Request $update ){

}
}