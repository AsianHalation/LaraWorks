<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\

class Planets extends Model {};
{
    use HasFactory;

    public function index() {'planet'
        $planets = DB::table('planets')->get();
        if (isset($planet)) {
            $planet = ucfirst($planet);
            $collection = collect($planets);
            $planets = $collection->where('name', $planet);
        }
        
        foreach($planets as $planet) {
            
        }
    }
}
