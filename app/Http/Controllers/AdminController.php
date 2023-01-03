<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use Illuminate\Http\Request;

use App\Models\User;



class AdminController extends Controller
{
    public function user()
    {   $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function searchuser(Request $request)
  
    { 
        $searchuser=$request->searchuser;
        $data=user::where('name','like','%'.$searchuser.'%')->get();
        return view("admin.users",compact("data"));
    }

    public function searchhouse(Request $request)
  
    { 
        $searchhouse=$request->searchhouse;
        $data=Maison::where('catégorie','like','%'.$searchhouse.'%')
        ->orWhere('adresse','like','%'.$searchhouse.'%')->get();
        return view("admin.MaisonsMenu",compact("data"));
    }

    public function deleteuser($id)

    {   $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }



    public function deletemaison($id)

    {   $data=maison::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function updateview($id)

    {

        $data=maison::find($id);
        return view("admin.updateview",compact("data"));

    }


    public function update(Request $request, $id)

    {

        $data=maison::find($id);

        $image=$request->image;
            
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('maisonimage',$imagename);
        
        $data->image=$imagename;
        $data->description=$request->description;
        $data->catégorie=$request->catégorie;
        $data->adresse=$request->adresse;
        $data->surface=$request->surface;
        $data->prix=$request->prix;
        $data->save();
        return redirect()->back();

    }


    public function MaisonsMenu()
    {   

        $data =maison::all();
        return view('admin.MaisonsMenu',compact("data"));
    }

    

    public function newhouse()
    {   

        return view('admin.formulaire');
    }



    public function upload(Request $request)
    {
        $data = new Maison();


        $image=$request->image;
            
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('maisonimage',$imagename);
        
        $data->image=$imagename;
        $data->description=$request->description;
        $data->catégorie=$request->catégorie;
        $data->adresse=$request->adresse;
        $data->surface=$request->surface;
        $data->prix=$request->prix;
        $data->save();
        return redirect()->back();



    }
}
