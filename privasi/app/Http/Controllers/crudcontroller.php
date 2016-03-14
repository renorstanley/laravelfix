<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Redirect;
use Illuminate\Support\Facades\Input;
use View;
class crudcontroller extends Controller
{
 	public function tambahdata() {
 		$data= array(
 			'nama'  => Input::get('nama'),
 			'alamat' => Input::get('alamat'),
 			'kelas' => Input::get('kelas'),
 			);

 		DB::table('siswa')->insert($data);
 	
		return Redirect::to('/read')->with('message','berhasil menambah data');
 	}
	
 	public function lihatdata(){
 		//Coding lama
 		//$data = DB::table('siswa')->get();
 		//return View::make('read')->with('siswa',$data);
 		
 		//Cara 1, lebih dianjurkan karena compact memudahkan hidup programmer, ga usah bingung mikir array [key => value]
 		//Compact berfungsi untuk membuat array dengan ketentuan:
 		//Key diisi sama dengan nama variable yang dipassing
 		//Value diisi dengan isi dari variable yang dipassing
 		//Untuk cara dibawah, compact('siswa') juga berarti ['siswa' => $siswa ]
 		$siswa = DB::table('siswa')->get();
 		return View::make('read', compact('siswa'));
 		
 		//Cara 2, dengan array normal
 		$data = DB::table('siswa')->get();
 		return View::make('read', ['siswa' => $data ]);
 		
 		
 		//Jadi ceritanya gini, setelah form tambahdata di-post, masuk ke function tambahdata() di atas.
 		//Fungsi tambahdata() melakukan redirect ke url /read bersama ('with') pesan 'message'.
 		//Sesuai ketentuan route, url /read memanggil fungsi lihatdata().
 		//Di coding yg lama, fungsi lihatdata me-return view dari read bersama ('with') data siswa.
 		//Dari cerita di atas, keliatan kalau 'with' dipanggil 2x. Kalau 'with' dipanggil lebih dari 1x 
 		//maka data lama yg disimpan 'with' akan dihapus dan diganti dengan data baru, makanya data 'message' selalu hilang
 	} 
	
	public function hapusdata($id){
		DB::table('siswa')->where('id','=',$id)->delete();
		return Redirect::to('/read')->with('message','berhasil menghapus data');
	}
}
?>
