<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planets extends Model
{
    use HasFactory;

    public function index() {
        return view('planets', ['planets' => $planets]);

        $planets = Planet::all();

        if (isset($planet)) {
            $planet = ucfirst($planet);
            $collection = collect($planets);
            $planets = $collection->where('name', $planet);
        }

        foreach ($planets as $planet) {
            echo ($planet->name);
            echo ($planet->description);
        }
    }
}
