<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('front/head_view') .
               view('front/navbar_view') .
               view('front/principal_ultimo') .
               view('front/footer_view');
    }
    public function registrarse(): string
    {
        return view('front/head_view') .
               view('front/navbar_view') .
               view('front/register_view') .
               view('front/footer_view');
    }
    public function ingresar(): string
    {
        return view('front/head_view') .
               view('front/navbar_view') .
               view('front/ingresar_view') .
               view('front/footer_view');
    }
    public function pilotos(): string
    {
        return view('front/head_view') .
               view('front/navbar_view') .
               view('front/pilotos_view') .
               view('front/footer_view');
    }
    public function acerca_de(): string
    {
        return view('front/head_view') .
               view('front/navbar_view') .
               view('front/acerca_de_view') .
               view('front/footer_view');
    }
    public function contacta(): string
    {
        return view('front/head_view') .
               view('front/navbar_view') .
               view('front/contacta_view') .
               view('front/footer_view');
    }
 
}
