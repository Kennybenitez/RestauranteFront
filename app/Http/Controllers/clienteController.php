<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class clienteController extends Controller
{

   
public function ver (){
    return view('crearCliente');
}



    public function crear (Request $request){

        $url = 'http://localhost:8080/api/cliente/crear';

        //Datos obtenidos del formulario

        $datosCliente =[
                'nombre' => $request->input('nombreCliente'),
                'apellido' => $request->input('apellidoCliente'),
                    ];
                    $cliente = new Client();

                    $response = $cliente->post($url,[
                        'json'=> $datosCliente,
                    ]);

                    if ($response -> getStatusCode() == 201){
                        return redirect('/cliente/todos')->with('success','El cliente ha sido registrado');
                    }else{
                        return redirect('/cliente/todos')->with('error','El cliente no ha sido registrado');
                    }
                    }

        
                
    

    public function todos (){
       $url = 'http://localhost:8080/api/cliente/todos';
       $cliente = new Client();
       $response = $cliente->get($url);
       $clientes = json_decode($response -> getBody(), true);
            return view('verCliente', ['clientes'=> $clientes]);
    
    }

    public function eliminarCliente( $id){
        $url = 'http://localhost:8080/api/cliente/eliminar?id_cliente=' .$id;

        $client = new CLient();

        $response = $client->delete($url);

        if ($response -> getStatusCode() ==200){
            return redirect ('/cliente/todos')-> with('success', 'Cliente eliminado con exito');
            }else {
                return redirect ('/cliente/todos')-> with('error', 'Cliente no se pudo eliminar');
        }
    }
}






