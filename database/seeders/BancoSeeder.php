<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banco;

class BancoSeeder extends Seeder
{
    public function run(): void
    {
        Banco::insert([
            ['id'=>'0156', 'nombre' =>'100%BANCO'],
            ['id'=>'0196', 'nombre' =>'ABN AMRO BANK'],
            ['id'=>'0172', 'nombre' =>'BANCAMIGA BANCO MICROFINANCIERO, C.A.'],
            ['id'=>'0171', 'nombre' =>'BANCO ACTIVO BANCO COMERCIAL, C.A.'],
            ['id'=>'0166', 'nombre' =>'BANCO AGRICOLA'],
            ['id'=>'0175', 'nombre' =>'BANCO BICENTENARIO'],
            ['id'=>'0128', 'nombre' =>'BANCO CARONI, C.A. BANCO UNIVERSAL'],
            ['id'=>'0164', 'nombre' =>'BANCO DE DESARROLLO DEL MICROEMPRESARIO'],
            ['id'=>'0102', 'nombre' =>'BANCO DE VENEZUELA S.A.I.C.A.'],
            ['id'=>'0114', 'nombre' =>'BANCO DEL CARIBE C.A.'],
            ['id'=>'0149', 'nombre' =>'BANCO DEL PUEBLO SOBERANO C.A.'],
            ['id'=>'0163', 'nombre' =>'BANCO DEL TESORO'],
            ['id'=>'0176', 'nombre' =>'BANCO ESPIRITO SANTO, S.A.'],
            ['id'=>'0115', 'nombre' =>'BANCO EXTERIOR C.A.'],
            ['id'=>'0003', 'nombre' =>'BANCO INDUSTRIAL DE VENEZUELA.'],
            ['id'=>'0173', 'nombre' =>'BANCO INTERNACIONAL DE DESARROLLO, C.A.'],
            ['id'=>'0105', 'nombre' =>'BANCO MERCANTIL C.A.'],
            ['id'=>'0191', 'nombre' =>'BANCO NACIONAL DE CREDITO'],
            ['id'=>'0116', 'nombre' =>'BANCO OCCIDENTAL DE DESCUENTO.'],
            ['id'=>'0138', 'nombre' =>'BANCO PLAZA'],
            ['id'=>'0108', 'nombre' =>'BANCO PROVINCIAL BBVA'],
            ['id'=>'0104', 'nombre' =>'BANCO VENEZOLANO DE CREDITO S.A.'],
            ['id'=>'0168', 'nombre' =>'BANCRECER S.A. BANCO DE DESARROLLO'],
            ['id'=>'0134', 'nombre' =>'BANESCO BANCO UNIVERSAL</'],
            ['id'=>'0177', 'nombre' =>'BANFANB'],
            ['id'=>'0146', 'nombre' =>'BANGENTE'],
            ['id'=>'0174', 'nombre' =>'BANPLUS BANCO COMERCIAL C.A'],
            ['id'=>'0190', 'nombre' =>'CITIBANK.'],
            ['id'=>'0121', 'nombre' =>'CORP BANCA.'],
            ['id'=>'0157', 'nombre' =>'DELSUR BANCO UNIVERSAL'],
            ['id'=>'0151', 'nombre' =>'FONDO COMUN'],
            ['id'=>'0601', 'nombre' =>'INSTITUTO MUNICIPAL DE CR&#201;DITO POPULAR'],
            ['id'=>'0169', 'nombre' =>'MIBANCO BANCO DE DESARROLLO, C.A.'],
            ['id'=>'0137', 'nombre' =>'SOFITASA'],
        ]);
    }
}
