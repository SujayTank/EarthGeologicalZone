<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgSliderController extends Controller
{
    public function list(){

        $titles="Earth Geological Zone";
        $slogs=[
            'Geology teacher only because freaking awesome is not an official job title.',
            'Hammer is the power of Geologist.',
            'Geologist don\'t die they respawn'
        ];
        $imgs=[
            '/data/img/bg-3.jpg',
            '/data/img/bg-2.jpg',
            '/data/img/bg-1.jpg'
        ];
        return view('layouts.imgSlider',[
            'titles' => $titles, 'slogs' => $slogs, 'img' => $imgs,
        ]);
    }
}
