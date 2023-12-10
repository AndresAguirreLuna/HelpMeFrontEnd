<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use GuzzleHttp\Client;

class DelitoController extends Controller
{
    public function casosIndex()
    {
       
       $client = new Client();

       // URL del servicio que ya funciona en Postman
       $url = 'http://localhost:8080/api/caso/todos';


       // Enviar la solicitud POST usando Guzzle
       try {
           $response = $client->get($url);

           // Acceder al contenido de la respuesta
           $contenidoRespuesta = $response->getBody()->getContents();
           $contenidoRespuesta = json_decode($contenidoRespuesta, true);

       return view ('indexDelito',[
           "post" =>$contenidoRespuesta
       ]);

       // return $contenidoRespuesta;
       } catch (\Exception $e) {
           // Manejar errores si la solicitud falla
           return 'Error: ' . $e->getMessage();
       }

    }

    public function crearCaso(Request $request)
    {
        $fecha=$request->input('fecha');
        $longitud=$request->input('longitud');
        $latitud=$request->input('latitud');
        $urlmap=$request->input('urlmap');
        $detalle=$request->input('detalle');
        $delito=$request->input('opciones');
        
        $client = new Client();

        // URL del servicio que ya funciona en Postman
        $url = 'http://localhost:8080/api/caso/insertar';

            // Datos a enviar al servicio (pueden ser parámetros, headers, etc.)
        $datos = [
            'json' => [
                'fecha' => $fecha,
                'longitud' => $longitud,
                'latitud' => $latitud,
                'detalle' => $detalle,
                'estado' => 'True',
                'urlmap' => $urlmap,
                'idusuario' => 2,
            ],
        ];

        // Enviar la solicitud POST usando Guzzle
        try {
            $response = $client->post($url, $datos);

            // Acceder al contenido de la respuesta
            $contenidoRespuesta = $response->getBody()->getContents();


            foreach ($delito as $opcionesSeleccionadas) {
        // URL del servicio que ya funciona en Postman
        $urlDel = 'http://localhost:8080/api/casoDelito/insertar';

            // Datos a enviar al servicio (pueden ser parámetros, headers, etc.)
        $datosDel = [
            'json' => [
                'idcaso' => $contenidoRespuesta,
                'iddelito' => $opcionesSeleccionadas,
            ],
        ];

            $responsedDel = $client->post($urlDel, $datosDel);
            $contenidoRespuestaDel = $response->getBody()->getContents();
    }


            if (empty($contenidoRespuesta)) {
                return view ('login');
            } else {
                
                $client = new Client();

                // URL del servicio que ya funciona en Postman
                $url = 'http://localhost:8080/api/caso/todos';
        
        
                // Enviar la solicitud POST usando Guzzle
                try {
                    $response = $client->get($url);
        
                    // Acceder al contenido de la respuesta
                    $contenidoRespuesta = $response->getBody()->getContents();
                    $contenidoRespuesta = json_decode($contenidoRespuesta, true);
        
                return view ('indexDelito',[
                    "post" =>$contenidoRespuesta
                ]);
        
                // return $contenidoRespuesta;
                } catch (\Exception $e) {
                    // Manejar errores si la solicitud falla
                    return 'Error: ' . $e->getMessage();
                }
        
            }
        } catch (\Exception $e) {
            // Manejar errores si la solicitud falla
            return 'Error: ' . $e->getMessage();
        }

     }
    
}
