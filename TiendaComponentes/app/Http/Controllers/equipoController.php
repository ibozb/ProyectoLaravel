<?php
 
namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class EquipoController extends Controller
{
    
    private $equiposJson = '[{
    "id": 1,
    "first_name": "Van",
    "last_name": "Greatbatch"
    }, 
    {
    "id": 2,
    "first_name": "Alberik",
    "last_name": "Fendley"
    }, 
    {
    "id": 3,
    "first_name": "Vail",
    "last_name": "McLachlan"
    }]';


    public function mostrarEquipos($equipoId){
        $equipos_temp=json_decode($this->equiposJson,true);
        return 'El equipo con el nombre: '.$equipos_temp[$equipoId]["first_name"].' Mostrado desde el controlador';
    }

    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}