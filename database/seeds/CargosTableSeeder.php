<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('cargos')->delete();

       DB::table('cargos')->insert([
             'descripcion' => 'ADMIN',
             'estado'=> 0,      
             'creado_por'=> 'admin',
             'modificado_por'=>'admin',
       ]);
    }   
}

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'VENTAS',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([

       //      'descripcion' => 'REPUESTOS',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([

       //      'descripcion' => 'POLICIA',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([

       //      'descripcion' => 'RECPECION',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'LICITACIONES',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'GERENCIA REGIONAL',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'CONCORDIA',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'RRHH',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'IMPORTACIONES',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'MARKETING',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'SISTEMAS',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'FINANZAS',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'TRAMITES',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'REPUESTOS',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'CONTABILIDAD',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'ARQUITECTURA',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
       //  DB::table('cargos')->insert([

       //      'descripcion' => 'GERENCIA',       
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);

//****************************************************



       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ADJUNTO DE VICEPRECIDENCIA',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ADMINISTRADOR DE TALLER',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ADMINISTRADOR REGIONAL EL ALTO',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ADMINISTRADOR VENTAS VOLVO',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ALMACENERO DE REPUESTOS',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ANALISTA ADM. DE ACT. FIJOS',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ANALISTA COMERCIAL',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ANALISTA DE RECURSOS HUMANOS',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ANALISTA DE REPUESTOS',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ANALISTA FINANCIERO',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ANALISTA SENIOR DE PROCESOS',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ANFITRIONA',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ARCHIVISTA',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ARQUITECTO',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASESOR DE SERVICIOS',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASIST. DE GERENCIA COMERCIAL',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASIST. DE GERENCIA DE OPERAC.',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE  DE  LEGAL',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE  DE CARTERA ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE CONTABLE',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE DE ARQUITECTURA',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE DE GERENCIA REGIONAL',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE DE IMPORTACIONES',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE DE MARKETING ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE DE REPUESTOS        ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE DE TRAMITES         ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE DE VENTAS           ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE DE VICEPRESIDENCIA  ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE GERENCIA C. VOLVO   ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ASISTENTE VENTAS REPUESTOS    ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AUDITOR INTERNO               ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AUDITOR INTERNO REG. LP       ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AUXILIAR CONTABLE             ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AUXILIAR DE CARTERA           ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AUXILIAR DE GERENCIA REG LP   ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AUXILIAR DE OPERACIONES       ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AUXILIAR DE PROCESOS          ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AUXILIAR DE SOPORTE           ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AYUDANTE MECANICO             ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AYUDANTE MECANICO BRIDGESTONE ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'AYUDANTE MECANICO VOLVO       ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'BODEGUERO VOLVO               ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'CAJERA                        ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'CAJERA                        ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'CAJERA EL ALTO                ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'CHOFER DE PRESIDENCIA         ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'CHOFER ZONA FRANCA            ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'CONTADOR                      ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'CONTADOR NACIONAL             ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'CONTROL DE CALIDAD            ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'DESARROLLADOR                 ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'EJECUTIVO DE VENTAS           ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'EJECUTIVO JUNIOR              ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'EJECUTIVO SENIOR     ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ELECTRICISTA                  ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ENC DE LABORATORIO DE PINTURA ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ENC. DE OPERACIONES YAMAHA    ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ENCARGADA NAL. DE OPERACIONES ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ENCARGADO DE ALMACEN          ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ENCARGADO DE BODEGA           ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ENCARGADO DE REPUESTOS        ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ENCARGADO DE TALLER OR        ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'ENCARGADO NAL BRIDGESTONE     ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'GERENTE COMERCIAL DE EXPANSION',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'GERENTE COMERCIAL HINO        ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'GERENTE COMERCIAL OCCIDENTE   ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'GERENTE DE ALQUILER DE MAQ.   ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'GERENTE DE ORG. METODOS Y SIST',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'GERENTE NAL. CAMIONES         ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'INGENIERA DE OBRA             ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'INGENIERO DE VENTAS           ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'JEFE DE CAR CENTER            ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'JEFE DE SERVICIOS VOLVO       ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'JEFE DE TALLER                ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'JEFE DE VENTAS YAMAHA         ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'JEFE NACIONAL DE CARTERA      ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'JEFE NACIONAL DE SISTEMAS     ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'JEFE NACIONAL RRHH            ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'JEFE NAL YAMAHA               ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'JEFE REGIONAL LEGAL           ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'LAVADOR                       ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'LIQUIDADOR ADUANERO           ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'MECANICO                      ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'MENSAJERO                     ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'OPERADOR TRANSITORIO          ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'PERSONAL DE LIMPIEZA          ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'PORTERO               ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'PRE ENTREGAS                  ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RECEPCIONISTA',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'REPR. SERVICIO AL CLIENTE',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'REPUESTOS                     ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RES.NAL. DE PROD. Y MEDIOS AUD',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RESPONSABLE  NAL. DE FINANZAS ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RESPONSABLE DE CONTABILIDAD   ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RESPONSABLE DE DESARROLLO     ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RESPONSABLE DE DESARROLLO     ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RESPONSABLE DE MARKETING      ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RESPONSABLE DE SEGURIDAD INF. ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RESPONSABLE DE TALLER EL ALTO ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RESPONSABLE ELECTROTECNICO    ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'RESPONSABLE ERP               ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'SECRETARIA REGIONAL EL ALTO   ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'SUB GERENTE REGIONAL EL ALTO  ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'SUBGERENTE DE MARKETING       ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'SUPERINTENDENTE LEGAL         ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'SUPERVISOR DE OPERACIONES     ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'TEAM LEADER                   ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'TECNICO CAR CENTER            ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'TECNICO ELECTRICISTA          ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'TECNICO MECANICO              ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'TRAMITADOR                    ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'VENDEDOR DE REPUESTOS         ',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'VICEPRESIDENTE',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);

       //  DB::table('cargos')->insert([
       //       'descripcion' => 'POLICIA',       
       //       'creado_por'=> 'admin',
       //       'modificado_por'=>'admin',
       // ]);
 