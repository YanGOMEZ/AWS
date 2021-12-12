<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distancia;
use App\Models\Movimiento;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class IntegradoraController extends Controller
{
    public function InsertarDistancia()
    {
        $response = Http::withHeaders(['X-AIO-Key' => 'aio_LODG95aTNxkrkE3QWWo6rMznouCx'])
        ->get('https://io.adafruit.com/api/v2/ErenJeager/feeds/inte-distancia/data/last');
       $valor1=json_decode($response,true);
       $valor2=json_decode($response,true);
       $valor3=json_decode($response,true);

        Distancia::create([ 
            'created_at' =>$valor1['created_at'],
            'updated_at'=>$valor2['updated_at'],
            'distancia' =>$valor3['value'],
            'usuario_id' =>$id,
        ]);{
        return $response;
        }    
    } 
    public function InsertarMovimiento($id){
                    
        $response = Http::withHeaders(['X-AIO-Key' => 'aio_LODG95aTNxkrkE3QWWo6rMznouCx'])
        ->get('https://io.adafruit.com/api/v2/ErenJeager/feeds/inte-movimiento/data/last');
        $valor1=json_decode($response,true);
        $valor2=json_decode($response,true);;
        $valor3=json_decode($response,true);
 
         Movimiento::create([     
             'created_at' =>$valor1['created_at'],
             'updated_at'=>$valor2['updated_at'],
             'movimiento' =>$valor3['value'],
             'usuario_id' =>$id,
         ]);{
         return $response;
         }  
    }
    public function MostrarDistancia($id){

        $distancia=Distancia::where('usuario_id',$id);
        return $distancia;

    }





    public function mostrardis(){

        $dist=Distancia::all();
        return$dist;
    }
    public function mostrarmov(){

        $mov=Movimiento::all();
        return$mov;
    }


}
