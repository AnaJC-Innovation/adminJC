<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Administrador;
use App\Models\ClienteSesion;
use App\Models\DescripcionesCheck;

use Illuminate\Http\Request;

class AdministradoresController extends Controller
{

    public function data()
    {
        $administradores = DB::table('administradors')
            ->join('cliente_sesion', 'administradors.id', '=',  'cliente_sesion.cliente_id')
            ->join('descripciones_checks', 'descripciones_checks.id', '=',  'cliente_sesion.descripcion_id')
            ->select(
                'administradors.*',
                'descripciones_checks.*'
            )
            ->get();

        return response()->json($administradores);
    }
    public function Guardar(Request $request)
    {
        DB::beginTransaction();

        try {

            $logoName = null;

            if ($request->hasFile('fileLogo')) {
                $logo = $request->file('fileLogo');
                $logoName = time() . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path('logos'), $logoName);
            }

            $administrador = Administrador::create([
                'logo' => $logoName,
                'cliente' => $request->cliente,
                'url' => $request->url,
                'user' => $request->email,
                'password' => $request->password,
                'activo' => $request->has('clienteActivo') ? 1 : 0,
            ]);

            $descripcionCheck = DescripcionesCheck::create([
                'descripcionelearning' => $request->detallesElearning ?? '',
                'checklistelearning'   => $request->checklistElearning ?? '',
                'descripcionApp'       => $request->detallesApp ?? '',
                'checklistApp'         => $request->checklistApp ?? '',
                'descripcionWeb'       => $request->detallesPlataforma ?? '',
                'checklistWeb'         => $request->checklistPlataforma ?? '',
            ]);

            $clienteSesion = ClienteSesion::create([
                'cliente_id' => $administrador->id,
                'descripcion_id' => $descripcionCheck->id,
            ]);

            // Confirma todos los inserts
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Administrador guardado correctamente',
                'id' => $administrador->id,
                'data' => [
                    'administrador' => $administrador,
                    'descripcion' => $descripcionCheck,
                    'sesion' => $clienteSesion
                ]
            ]);
        } catch (\Exception $e) {

            // Revierte cualquier guardado anterior
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Error al guardar el administrador',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
