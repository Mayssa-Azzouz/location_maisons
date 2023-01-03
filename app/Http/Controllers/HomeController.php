<?php

namespace App\Http\Controllers;

use App\Models\interesse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Maison;


class HomeController extends Controller
{


    
    public function index()

    {
        $data=maison::all();
        return view("home",compact("data"));
    }

    public function redirects()
    {

        $data=maison::all();
       $usertype= Auth::user()->usertype;
       
       if($usertype=='1')
       {
        return view('admin.adminhome');
       }
       else
       {
                return view('home',compact('data'));
       }
    }

    public function voircategorie()
    {   
           $data=Maison::all();
        return view('profile.categories',compact('data'));
    }

    public function voirVilla()
    {   
        $data=Maison::all();

        return view('profile.catVilla',compact('data'));
    }

    public function createMaisonUser()
    {   
        
        return view('profile.userCreate');
    }

    public function ForInteresse($id)
    {   
        
        return view('profile.ForInteresse',compact("id"));
    }



    public function uploadmaison_interesse(Request $request)
    {
        $data = new interesse();

        $data->maison_id=$request->maison_id;

        $data->nom_user_interesse=$request->nom;
        $data->prenom_user_interesse=$request->prenom;
        $data->email=$request->email;
        $data->N_tele=$request->num_tele;
        $data->N_tele=$request->num_tele;


       $data->date_debut=$request->date_debut;
        $data->date_fin=$request->date_fin;


        $data->save();
        return redirect()->back();



    }






  
}


