<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DocumentoService;

class DocumentoController extends Controller
{
    public function status()
    {
        $status = DocumentoService::status();

        return $status;
    }

    public function lista($tipo)
    {
        $documentos = DocumentoService::lista($tipo);
       
        return $documentos;
    }

    public function consulta($cpfCnpj)
    {
        $documento = DocumentoService::consulta($cpfCnpj);

        return $documento;
    }

}