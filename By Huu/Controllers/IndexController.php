<?php

namespace App\Http\Controllers;
use App\AddCate;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getqlnv(){
    	return view('QuanlynhanvienVinsofts.qlnv');
    }
     public function getqlnvdel($id){
        $user_delete = AddCate::find($id);
        $user_delete->delete();
      return redirect()->route('getqlnv')->with(['flash_level' => 'result_msg','flash_message' => 'Đã xóa']);
    }
}
