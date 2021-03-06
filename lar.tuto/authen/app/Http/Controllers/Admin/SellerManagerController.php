<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class SellerManagerController extends Controller
{
    /**
     * AdminManagerController constructor.
     * hàm được khởi tạo của class được chạy ngay khi khởi tạo đối tượng
     * hàm này được chạy trước các hàm khác trong class
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //
    public function index(){
        $items = DB::table('sellers')->paginate(10);
        /**
         * đây là truyền controller xuống view
         */
        $data=array();
        $data['sellers']=$items;
        return view('admin.content.shop.seller.index',$data);

    }

    public function create(){
        $data=array();
        return view('admin.content.shop.seller.submit',$data);

    }
}
