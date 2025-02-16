<?php
 
namespace App\Http\Controllers;
 
use App\Models\producto;
use App\Models\User;
use Illuminate\View\View;
 
class ProductController extends Controller
{
    
    public function index()
    {
        $mostrar = "";
        foreach (producto::all() as $pr) {
            $mostrar = $mostrar.$pr->nombre.": ".$pr->precio."<br>";
        }
        return $mostrar;
    }

    public function verProducto($id)
    {
        $producto = producto::find($id);
        echo "Id = ".$producto->id.", Nombre = ".$producto->nombre."<br>";
    }

    public function verNombreProducto($nombre)
    {
        $producto = producto::where('nombre', $nombre)->first();
        echo "Id = ".$producto->id.", Nombre = ".$producto->nombre."<br>";
    }
}