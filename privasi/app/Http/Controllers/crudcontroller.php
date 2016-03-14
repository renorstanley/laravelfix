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
 	
	return Redirect::to('/read');//->with('message,'berhasil menambah data');
 	}
	
 	public function lihatdata(){
 		$data = DB::table('siswa')->get();
 		return View::make('read')->with('siswa',$data);
 	} 
	
	public function hapusdata($id){
		DB::table('siswa')->where('id','=',$id)->delete();
		return Redirect::to('/read')->with('message','berhasil menghapus data');
	}
}
?>