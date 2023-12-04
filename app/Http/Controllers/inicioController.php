<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class inicioController extends Controller
{
    public function todos(){
        $url = 'http://localhost:8080/api/comida/todos';

        $cliente = new Client();

        $response = $cliente->get($url);

        $comidas = json_decode($response -> getBody(), true);

             return view('inicio', ['comidas'=> $comidas]);
     
        
    }

    public function ver(){
        return view ('crearComida');
    }

    public function crear ( Request $request){

        $url = 'http://localhost:8080/api/comida/crear';

        //Datos obtenidos del formulario

        $datosCliente =[
                'nombre' => $request->input('nombreComida'),
                'precio' => $request->input('precio'),
                'url_imagen' => $request->input('imagenComida'),
                    ];
                    $cliente = new Client();

                    $response = $cliente->post($url,[
                        'json'=> $datosCliente,
                    ]);

                    if ($response -> getStatusCode() == 201){
                        return redirect('/inicio')->with('success','La comida ha sido registrada');
                    }else{
                        return redirect('/inicio')->with('error','La comida no ha sido registrada');
                    }

    }

    
    public function eliminarComida ($id){

        $url = 'http://localhost:8080/api/comida/eliminar?id_comida=' .$id;

        $client = new CLient();

        $response = $client->delete($url);

        if ($response -> getStatusCode() ==200){
            return redirect ('/inicio')-> with('success', 'Comida eliminada con exito');
            }else {
                return redirect ('/inicio')-> with('error', 'Comida no se pudo eliminar');
        }
    }


}
