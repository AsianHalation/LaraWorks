<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    //QUERY VOOR DATABASE
    public function index() {
        return view('planets', ['planets' => $planets]);

        $planets = DB::select('select * from nieuwe-app where planets');

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

    public function show() {
        return view();
    }
    //arrays
}
