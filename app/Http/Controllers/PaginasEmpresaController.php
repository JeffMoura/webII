<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasEmpresaController extends Controller
{
    public function faleconosco()
    {
        $email= "contato@mourageotec.com.br";
        $telefone = "38 3741-1111";
        return view("faleconosco")->with('email', $email)->with('telefone', $telefone);
    }

    public function servicos()
    {
        $dados1= "- Consultoria em tecnologias geográficas";
        $dados2= "- Desenvolvimento de Soluções de Geoprocessamento";
        $dados3= "- Cursos Online";

        return view("servicos")->with('Serviços1', $dados1)->with('Serviços2', $dados2)->with('Serviços3', $dados3);
    }

    public function sobre()
    {
        $inf="A empresa atua no mercado de maneira inovadora";
        return view("sobre")->with('empresa', $inf);
    }
}
