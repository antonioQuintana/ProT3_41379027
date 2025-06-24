<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }
    public function registrarse()
    {
        $data['titulo']='registrarse';
        echo view('front/head_view', $data) ;
        echo view('front/navbar_view') ;
        echo view('front/register_view') ;
        echo view('front/footer_view');
    }
    public function ingresar()
    {
        $data['titulo']='ingresar';
        echo view('front/head_view', $data) ;
        echo view('front/navbar_view') ;
        echo view('front/ingresar_view') ;
        echo view('front/footer_view');
    }
    public function pilotos()
    {
        $data['titulo']='pilotos';
        echo view('front/head_view', $data) ;
        echo view('front/navbar_view') ;
        echo view('front/pilotos_view') ;
        echo view('front/footer_view');
    }
    public function acerca_de()
    {
        $data['titulo']='acerca de';
        echo view('front/head_view', $data) ;
        echo view('front/navbar_view') ;
        echo view('front/acerca_de_view') ;
        echo view('front/footer_view');
    }
    public function contacta()
    {
        $data['titulo']='contacta con nosotros';
        echo view('front/head_view', $data) ;
        echo view('front/navbar_view') ;
        echo view('front/contacta_view') ;
        echo view('front/footer_view');
    }
 
}
