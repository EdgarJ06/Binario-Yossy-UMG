<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraductorController extends Controller
{
    public function index()
    {
        return view('layout.app');
    }

    public function showTexto()
    {
        return view('textoBinario');
    }

    public function showBinario()
    {
        return view('binarioTexto');
    }

    // Se crea el método para convertir de entrada texto a salida Binario
    public function textoBinario(Request $request)
    {
        $texto = $request->input('text');
        $binario = '';

        foreach (str_split($texto) as $char) {
            $binario .= sprintf("%08b", ord($char)) . ' ';
        }

        $binario = trim($binario);

        return view('TextoBinario', ['resultado'=>$binario, 'tipo' => 'Binario']);
    }


    //Se crea el método para convertir de entrada binario a salida texto
    public function binarioTexto(Request $request)
    {
        $binario = $request->input('binario');
        $texto = '';

        foreach (explode(' ', $binario) as $bin) {
            $texto .= chr(bindec($bin));
        }
        return view('BinarioTexto', ['resultado' => $texto, 'tipo' => 'texto']);
    }
}
