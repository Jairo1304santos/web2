<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dever1Controller extends Controller
{
    public function ex1()
    {
        return view('dever1.ex1');
    }
    public function resultado1(Request $request)
    {
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $nota4 = $request->nota4;

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        $aluno = 'Jairo';

        return view('Dever1.resultado1', compact('media', 'aluno'));
    }


    public function ex2()
    {

        return view('dever1.ex2');
    }
    public function resultado2(Request $request)
    {

        $total = $request->total;
        $brancos = $request->brancos;
        $nulos = $request->nulos;
        $validos = $request->validos;

        $percentualBrancos = ($brancos / $total) * 100;
        $percentualNulos = ($nulos / $total) * 100;
        $percentualValidos = ($validos / $total) * 100;

        echo $percentualBrancos;
        echo $percentualNulos;
        echo $percentualValidos;

        return view('dever1.resultado2', compact(
            'percentualBrancos',
            'percentualNulos',
            'percentualValidos',
            'total'
        ));
    }


    public function ex3()
    {

        return view('dever1.ex3');
    }
    public function resultado3(Request $request)
    {

        $salariomensal = $request->salariomensal;
        $reajuste = $request->reajuste;

        $reajuste1 = ($salariomensal / 100) * $reajuste;

        $salarioatual = ($salariomensal + $reajuste1);


        return view('dever1.resultado3', compact(
            'salarioatual'
        ));
    }


    public function ex4()
    {

        return view('dever1.ex4');
    }
    public function resultado4(Request $request)
    {


        $distribuidor = 28 / 100;
        $imposto = 45 / 100;

        $custofabrica = $request->custofabrica;

        $valorfinalcarro = ($custofabrica + $distribuidor * $custofabrica +  $imposto * $custofabrica);

        return view('dever1.resultado4', compact(
            'valorfinalcarro'
        ));
    }


    public function ex5()
    {

        return view('dever1.ex5');
    }
    public function resultado5(Request $request)
    {

        $custofabrica = $request->custofabrica;
        $distribuidor = $request->distribuidor;
        $imposto = $request->imposto;

        $valorfinalcarro = ($custofabrica + $distribuidor / 100 * $custofabrica +  $imposto / 100 * $custofabrica);

        return view('dever1.resultado5', compact(
            'valorfinalcarro'
        ));
    }


    public function ex6()
    {

        return view('dever1.ex6');
    }
    public function resultado6(Request $request)
    {

        $comissaocarrosvendidos = 5 / 100;
        $comissaofixa = 200;
       
        $numcarrovendido = $request->numcarrovendido;
        $valortotalvendas = $request->valortotalvendas;
        $salariofixo = $request->salariofixo;
        
        $comissaofixa1 = ($comissaofixa * $numcarrovendido);
        $comissaocarrosvendidos1 = ($valortotalvendas *  $comissaocarrosvendidos);
        $salariofinal = ($salariofixo + $comissaofixa1 +   $comissaocarrosvendidos1);

        return view('dever1.resultado6', compact(
             'salariofinal'
        ));
    }


    public function ex7()
    {
        return view('dever1.ex7');
    }
    public function resultado7(Request $request)
    {

        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        
        $media = ( $nota1 * 0.4 + $nota2 * 0.6);
        
        $aluno = 'Jairo';

        return view('Dever1.resultado7', compact('media', 'aluno'));
    }


    public function ex8()
    {
        return view('dever1.ex8');
    }
    public function resultado8(Request $request)
    {
        $pi = 3.14;

        $raio = $request->raio;
        $altura = $request->altura;
        
        $volume = ( $pi * $raio**2 * $altura );

        return view('Dever1.resultado8', compact( 'volume' ));
    }


    public function ex9()
    {
        return view('dever1.ex9');
    }
    public function resultado9(Request $request)
    {

        $num1 = $request->num1;
        $num2 = $request->num2;
        
        $Total = ( $num1 + $num2 ) * $num1;

        return view('Dever1.resultado9', compact( 'Total' ));
    }


    public function ex10()
    {
        return view('dever1.ex10');
    }
    public function resultado10(Request $request)
    {

        $qtdminima = $request->qtdminima;
        $qtdmaxima = $request->qtdmaxima;
        
        $estoquemedio = ( $qtdminima + $qtdmaxima ) / 2;
        
    return view('Dever1.resultado10', compact('estoquemedio'));
    }


    public function ex11()
    {

        return view('dever1.ex11');
    }
    public function resultado11(Request $request)
    {

        $filho = 3 / 100;

        $nome = $request->nome;
        $numhrtra = $request->numhrtra;
        $valorhora = $request->valorhora;
        $numfilho = $request->numfilho;

        $salario = ( $numhrtra * $valorhora);
        $salariofinal = ( $salario  + $salario * $filho * $numfilho);
        
        return view('dever1.resultado11', compact(
            'salariofinal', 'nome'
        ));
    }


    public function ex12()
    {

        return view('dever1.ex12');
    }
    public function resultado12(Request $request)
    {

        $idade = $request->idade;
        $mes = $request->mes;
        $dia = $request->dia;
       
        $dia1 = ($idade * 365);
        $dia2 = ($mes * 30);

        $totaldias = ($dia1 + $dia2 + $dia);
        
        return view('dever1.resultado12', compact(
            'totaldias'
        ));
    }


    public function ex13()
    {

        return view('dever1.ex13');
    }
    public function resultado13(Request $request)
    {

       $dia = $request->dia;
       
        $ano1 = ((int)($dia / 365));
        $mes = ((int)($dia % 365 / 30));
        $dia = ($dia % 365) % 30;
       
    return view('dever1.resultado13', compact(
            'ano1',  'mes' , 'dia'
        ));

    }


    public function ex14()
    {
        return view('dever1.ex14');
    }
    public function resultado14(Request $request)
    {

        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        
        $media = ( $nota1 * 0.2 + $nota2 * 0.3 + $nota3 * 0.5);
        
        $aluno = 'Jairo';

        return view('Dever1.resultado14', compact('media', 'aluno'));
    }


    public function ex15()
    {

        return view('dever1.ex15');
    }
    public function resultado15(Request $request)
    {

       $temposegundos = $request->temposegundos;
       
        $horas = ((int)($temposegundos / 60));
        $minutos = ((int)($temposegundos % 60 / 60));
        $segundos = ($temposegundos % 60) % 60;
       
    return view('dever1.resultado15', compact(
            'horas',  'minutos' , 'segundos'
        ));

    }


    public function ex16()
    {

        return view('dever1.ex16');
    }
    public function resultado16(Request $request)
    {
        
        $nome = $request->nome;
        $salariofixo = $request->salariofixo;
        $valortotalvendas = $request->valortotalvendas;
        $percentvendas = $request->percentvendas;
        
        $percentual = ($valortotalvendas * $percentvendas / 100);
        
        $salariototal = ($salariofixo + $percentual);

        return view('dever1.resultado16', compact(
             'salariototal' , 'nome'
        ));
    }


    public function ex17()
    {

        return view('dever1.ex17');
    }
    public function resultado17(Request $request)
    {
        
        $nome = $request->nome;
        $distpercorrida = $request->distpercorrida;
        $tempopercurso = $request->tempopercurso;
        
        $velocidademedia = ($distpercorrida / $tempopercurso);
        
       return view('dever1.resultado17', compact(
             'velocidademedia' , 'nome'
        ));
    }
}