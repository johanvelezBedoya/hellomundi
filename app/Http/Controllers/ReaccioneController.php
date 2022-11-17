<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReaccione;
use App\Models\Publicacione;
use App\Models\Reaccione;
use App\Models\User;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReaccioneController extends Controller
{

    // Guarda o registra una reacción

    public function store($publicacione){

        // $reaccione = new Reaccione();

        // $reaccione->publicacione_id = $publicacione;
        // $reaccione->user_id = auth()->user()->id;

        //publicacione_id = $publicacione;
        //user_id = auth()->user()->id;

        $request=["publicacione_id"=>$publicacione, "user_id"=>auth()->user()->id];

        // $reaccione->save();

        Http::post('http://localhost/api.bizsett/public/v1/reacciones', $request);


        $tipo = '2';

        return redirect()->route('notificaciones', compact('publicacione', 'tipo'));
        // return redirect()->route('home');
    }


    


    //Eliminar una reacción

    public function destroy($reaccione){
        
        //$reaccione->delete();

        Http::delete('http://localhost/api.bizsett/public/v1/reacciones/'.$reaccione);
        
        return redirect()->route('home');
        
    }
    


}
