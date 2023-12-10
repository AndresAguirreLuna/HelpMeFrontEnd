<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use GuzzleHttp\Client;

class UsuarioController extends Controller
{
public function loginIndex()
    {
        return view ('login');
    }

public function loginIn(Request $request)
    {
        $username=$request->input('username');
        $pass=$request->input('password');
        $client = new Client();

        // URL del servicio que ya funciona en Postman
        $url = 'http://localhost:8080/api/usuarios/buscar';

        // Datos a enviar al servicio (pueden ser parámetros, headers, etc.)
        $datos = [
            'json' => [
                'userName' => $username,
                'passWord' => $pass,
            ],
        ];

        // Enviar la solicitud POST usando Guzzle
        try {
            $response = $client->post($url, $datos);

            // Acceder al contenido de la respuesta
            $contenidoRespuesta = $response->getBody()->getContents();

            if (empty($contenidoRespuesta)) {
                return view ('login');
            } else {
                
                return view ('index');
            }
        } catch (\Exception $e) {
            // Manejar errores si la solicitud falla
            return 'Error: ' . $e->getMessage();
        }

     }

     public function usuariosIndex()
     {
        
        $client = new Client();

        // URL del servicio que ya funciona en Postman
        $url = 'http://localhost:8080/api/usuarios/todos';


        // Enviar la solicitud POST usando Guzzle
        try {
            $response = $client->get($url);

            // Acceder al contenido de la respuesta
            $contenidoRespuesta = $response->getBody()->getContents();
            $contenidoRespuesta = json_decode($contenidoRespuesta, true);

        return view ('indexUsuario',[
            "post" =>$contenidoRespuesta
        ]);

        // return $contenidoRespuesta;
        } catch (\Exception $e) {
            // Manejar errores si la solicitud falla
            return 'Error: ' . $e->getMessage();
        }

     }

     public function crearUsuario(Request $request)
    {
        $username=$request->input('username');
        $pass=$request->input('password');
        $nombre=$request->input('nombre');
        $apellido=$request->input('apellido');
        $redSocial=$request->input('redSocial');
        
        $client = new Client();

        // URL del servicio que ya funciona en Postman
        $url = 'http://localhost:8080/api/usuarios/insertar';

            // Datos a enviar al servicio (pueden ser parámetros, headers, etc.)
        $datos = [
            'json' => [
                'userName' => $username,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'passWord' => $pass,
                'estado' => 'True',
                'redSocial' => $redSocial,
                'idRol' => 2,
            ],
        ];

        // Enviar la solicitud POST usando Guzzle
        try {
            $response = $client->post($url, $datos);

            // Acceder al contenido de la respuesta
            $contenidoRespuesta = $response->getBody()->getContents();

            if (empty($contenidoRespuesta)) {
                return view ('login');
            } else {
                
                $client = new Client();

                // URL del servicio que ya funciona en Postman
                $url = 'http://localhost:8080/api/usuarios/todos';
        
        
                // Enviar la solicitud POST usando Guzzle
                try {
                    $response = $client->get($url);
        
                    // Acceder al contenido de la respuesta
                    $contenidoRespuesta = $response->getBody()->getContents();
                    $contenidoRespuesta = json_decode($contenidoRespuesta, true);
        
                return view ('indexUsuario',[
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



