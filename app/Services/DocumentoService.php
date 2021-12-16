<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documento;
use App\Repositories\DocumentoRepository;

class DocumentoService
{

    public static function status()
    {
        //insere alguma regra de negocio...
        return DocumentoRepository::status();
    }

    public static function lista($tipo)
    {

        //insere alguma regra de negocio...
        $documentos = DocumentoRepository::lista($tipo);

        return $documentos;
    }

    public static function consulta($cpfCnpj)
    {
        //insere alguma regra de negocio...
        $documento = DocumentoRepository::consulta($cpfCnpj);

        return $documento;
    }
}
