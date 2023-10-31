<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanetController extends Controller
{

    public function index() {
        return view('planets', ['planets' => $planets]);
    }
    public function show($name) {
        $planets = [
            [
                'Mars' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
            ],
            [
                'Venus' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
            ],
            [
                'Earth' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
            ],
            [
                'Jupiter' => 'Jupiter',
                'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
            ],
        ];

        return view('planets', ['planets' => $planets[$name] ?? 'planet' . $name . 'bestaat niet']);
    }
}
