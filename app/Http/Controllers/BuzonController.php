<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Buzon;
use App\Http\Requests\StoreBuzon;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class BuzonController extends Controller
{

    public function index(){

        $buzones = Http::get('http://localhost/api.bizsett/public/v1/buzons');
        $buzonsArray = $buzones->json();

        $users = Http::get('http://localhost/api.bizsett/public/v1/users');
        $usersArray = $users->json();

        return view('buzones.index', compact('buzonsArray', 'usersArray'));

        // $buzons =Buzon::all();
        // $buzons =Buzon::query()->when(request('search'), function($query) {
        //     return $query->where('mensaje', 'like', '%' . request('search') . '%');
        // })->paginate(5);

    //return view('buzones.index', compact('buzons'));
    
    }



    public function create(){

        //$users =User::all();

        $users = Http::get('http://localhost/api.bizsett/public/v1/users');
        $usersArray = $users->json();

        if (auth()->user()->tipopersona_id == '2'){
            return view('buzones.create', compact('usersArray'));
        }else{
            return view('buzones.create_buzon', compact('users'));
        }
    }




    public function store(StoreBuzon $request){

        if (auth()->user()->tipopersona_id == '2'){
            //$buzon = Buzon::create($request->all());

            Http::post('http://localhost/api.bizsett/public/v1/buzons', $request);

            return redirect()->route('buzons.index');
        }
        else{
            $buzon = new Buzon();
            $buzon->mensaje = $request->mensaje;
            $buzon->user_id = auth()->user()->id;
            $buzon->save();

            return redirect()->route('home');
        }

    }

    

    public function edit($buzon){

        $users = Http::get('http://localhost/api.bizsett/public/v1/users');
        $usersArray = $users->json();

        $buzon = Http::get('http://localhost/api.bizsett/public/v1/buzons/'.$buzon);
        $buzon = $buzon->json();

        return view('buzones.edit', compact('buzon', 'usersArray'));
    }



    public function update(Request $request, $buzon){

        Http::put('http://localhost/api.bizsett/public/v1/buzons/'.$buzon, $request);
        //$buzon->update($request->all());

        if (auth()->user()->tipopersona_id == '2'){
            return redirect(route('buzons.index'));
        }else{
            return redirect(route('home'));
        }
    }

    public function destroy($buzon){
        
        Http::delete('http://localhost/api.bizsett/public/v1/buzons/'.$buzon);
        //$buzon->delete();

        return redirect()->route('buzons.index');
    }


   
    
}
