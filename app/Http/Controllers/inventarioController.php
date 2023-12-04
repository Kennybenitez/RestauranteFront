<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class inventarioController extends Controller
{
    public function obtener(){
        $url = 'http://localhost:8080/api/ingrediente/todos';
        $cliente = new Client();
        $response = $cliente->get($url);
        $ingredientes = json_decode($response -> getBody(), true);
             return view('Inventario', ['ingredientes'=> $ingredientes]);
    }

    public function ingresar(){
        //$peliculas = Pelicula::all();
        return view('ingresarInventario');
    }

    public function eliminarIngrediente( $id){
        $url = 'http://localhost:8080/api/ingrediente/Eliminar?id_ingrediente=' .$id;

        $client = new CLient();

        $response = $client->delete($url);

        if ($response -> getStatusCode() ==200){
            return redirect ('/inventario')-> with('success', 'Ingrediente eliminado con exito');
            }else {
                return redirect ('/inventario')-> with('error', 'Ingrediente no se pudo eliminar');
        }
    }

    public function crear(Request $request){
        $url = 'http://localhost:8080/api/ingrediente/crear';

        //Datos obtenidos del formulario

        $datosCliente =[
                'nombre' => $request->input('nombreIngrediente'),
                'cantidadStock' => $request->input('cantidad'),
                'unidadMedida' => $request->input('unidadMedida'),
                'urlImagen' => $request->input('imagen'),
                    ];
                    $cliente = new Client();

                    $response = $cliente->post($url,[
                        'json'=> $datosCliente,
                    ]);

                    if ($response -> getStatusCode() == 201){
                        return redirect('/inventario')->with('success','El ingrediente ha sido registrado');
                    }else{
                        return redirect('/inventario')->with('error','El ingrediente no ha sido registrado');
                    }
    }
}
