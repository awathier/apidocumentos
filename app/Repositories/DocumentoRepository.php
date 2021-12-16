<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documento;

class DocumentoRepository
{
    
    public static function status()
    {
        return ['status' => 'ok'];
    }

    public static function lista($tipo)
    {
        //recupera dados...
        $documentos = Documento::all();
        // $documentos = Documento::where('tipo', '=', $tipo)->firstOrFail();

        return $documentos;
    }

    public static function consulta($cpfCnpj)
    {
        //recupera dados...
        // $documento = Documento::where('cpfCnpj', '=', $cpfCnpj)->get();
        $documento = Documento::where('cpfCnpj', '=', $cpfCnpj)->firstOrFail();
        return $documento;
    }
}
