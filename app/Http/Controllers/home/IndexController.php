<?php

namespace App\Http\Controllers\home;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $links = DB::table('links')->where('status','1')->get();

        //促销商品
        $sales = DB::table('goods')->where([
            ['status','1'],
            ['level','2']
        ])->get();
        
        //促销结束时间
        $ctime = strtotime($sales[0]->ctime);

        //vip商品
        $vipg = DB::table('goods')->where([
            ['status','1'],
            ['level','1']
        ])->get();
        
        return view('home.index',[
            'links'=>$links,
            'sales'=>$sales,
            'ctime'=>$ctime,
            'vipg'=>$vipg
        ]);
    }


    

}
