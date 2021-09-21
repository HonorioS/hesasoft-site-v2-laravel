<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;
use Session;

class HomeController extends Controller
{
    // private $dados = [];

    /* public function index()
    {

        $this->dados['headTitulo'] = trans('metatags.siteTitulo') . trans('metatags.homeTitulo');
        $this->dados['headDescricao'] = trans('metatags.homeDescricao');
        $this->dados['headFoto'] = asset('');
        $this->dados['faceTipo'] = 'website';
        $this->dados['separador'] = "home";
        //$this->dados['lingua'] = Session::get('locale');
         return view('welcome', $this->dados);
        return view('welcome');
    }*/

    public function index()
    {

        return view('site/pages/home');
    }

    public function pageNotFound404()
    {
        return view('pages/404');
    }

    public function soma(int $valu1 , int $valu2  )
    {
        $soma = ($valu1 + $valu2) ;
       // echo " soma dos valores : " .$soma;
        return("soma dos valores : " .$soma);
    }
}
