<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class ManagementUserController extends Controller 
{
    public function index(){
        //return "Halo ini adalah method index, dalam controllers ManagementUser";
        //return "Method ini nantinya akan digunkan untuk mengambil semua data user";
        $nama = "Dillah Amalia Fiqyani";

        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus","Pemrograman Web"];

        return view('home', compact('nama','pelajaran'));
    }

    /*public function create(){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }

    public function store(Request $request){
        return "Method ini nantinya akan digunakan untuk  menciptakan data user yang baru";
    }

    public function show($id){
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=". $id;
    }

    public function edit($id){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=". $id;
    }

    public function update(Request $reqest, $id){
        return "Method ini nantinya akan digunakan untuk mengubah dta user dengan id=". $id;
    }

    public function destroy($id){
        return "Method ini nantinya digunakan untuk menghapus data user dengan id=". $id;
    }*/
    
}