<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\InsertRequest;
use App\AddCate;
use Datetime;
use Illuminate\Routing\Redirector;

class InsertController extends Controller
{
    public function getInsert() {
    	return view('QuanlynhanvienVinsofts.insert');
    }
    //Thêm danh sách nhân viên
    public function postInsert(InsertRequest $request){
    	$AddCate = new AddCate;
    	$AddCate->hoten = $request->fullname;
    	$AddCate->ngaysinh = $request->birthdate;
    	$AddCate->email = $request->email;
    	$AddCate->diachi = $request->address;
    	$AddCate->phone = $request->phone;
    	$AddCate->gioitinh = $request->gender;
    	$AddCate->created_at = new Datetime();
    	$AddCate->save();
    	return redirect()->route('getqlnv') ->with(['flash_level' => 'result_msg','flash_message' => 'Thêm thành công']);
    }
     public function getqlnv() { //Hiển thị danh sách thành viên
     	$data = AddCate::select('id','hoten','ngaysinh','email','diachi','phone','gioitinh') ->get() -> toArray();

        return view('QuanlynhanvienVinsofts.qlnv',['data'=> $data]);
    }
    //End thêm danh sách nhân viên 
    
}

