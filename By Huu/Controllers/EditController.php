<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use Illuminate\Routing\Redirector;
use App\AddCate;

class EditController extends Controller
{
    /**
     * [getEdit hiển thị trang thông tin sửa đổi bài viết]
     * @param  [type] $id [truyền id vào hàm getEdit]
     * @return [type]     [
     *         compact('edit_user') : hiện tại em chưa hiểu 
     *         nó nhưng mà nó tương đương với 'edit_user' = 
     *         $edit_user
     *         ]
     */
    public function getEdit($id) {
    		$edit_user = AddCate::find($id);
    	return view('QuanlynhanvienVinsofts.edit',compact('edit_user'));
    }

    /**
     * [postEdit - Lưu thông tin bài viết]
     * @param  EditRequest $request [description]
     * @param  [type]      $id      [description]
     * @return [type]               [description]
     */
    public function postEdit(EditRequest $request, $id){
    	$edit_user = AddCate::find($id);
    	$edit_user ->hoten = $request ->refullname;
    	$edit_user ->ngaysinh = $request ->rebirthdate;
    	$edit_user ->email = $request ->reemail;
    	$edit_user ->diachi = $request ->readdress;
    	$edit_user ->phone = $request ->rephone;
    	$edit_user ->gioitinh = $request ->regender;
        $edit_user ->save();
        return redirect()->route('getqlnv') ->with(['flash_level' => 'result_msg','flash_message' => 'Sửa thành công']);
    }
}
