<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosens;

class DosenController extends Controller
{
    public function insert(){

        //RAW
        $sql = DB::insert("INSERT INTO
        dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at)
        VALUES ('0122333441', 'Kamal Prihandani M.Kom','laki-laki','Jl.Flamboyan No.1','Karawang','1990-02-12',
        'kamal.png',now(),now())");
        dump($sql);

        //SB
        $sql1 = DB::table('dosens')->insert(
            [
                'nidn' => '0122333443',
                'nama' => 'Aji Primajaya',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Tomlins No.4',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1986-05-20',
                'photo' => 'aji.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::create(
            [
                'nidn' => '0122333444',
                'nama' => 'Intan Purnamasari',
                'jenis_kelamin' => 'perempuan',
                'alamat' => 'Jl.Yeppoci No.22',
                'tempat_lahir' => 'Semarang',
                'tanggal_lahir' => '1989-01-01',
                'photo' => 'intan.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM dosens");
        dd($sql);

        //SB
        $sql2 = DB::table('dosens')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Dosen::all();
        dd($sql3);
    }

    public function update(){

        // RAW
        $sql = DB::update("UPDATE dosens SET alamat='JL.Palsikum No.17',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('dosens')
        ->where('id','3')
        ->update(
            [
                'alamat' => 'JL.Palsikum No.17',
                'updated_at' => now(),
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Dosen::where('id','1')->first()->update([
            'alamat' => 'JL.Palsikum No.17',
            'updated_at' => now(),
        ]);
        dd($sql2);


    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM dosens WHERE nidn=?",['0122333441']);
        dd($sql);

        //SB
        $sql1 = DB::table('dosens')
        ->where('nidn','0122333441')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('nidn','0122333441')->delete();
        dd($sql2);
    }
}
