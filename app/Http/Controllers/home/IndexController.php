<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use foreachPrintfArr;

class IndexController extends Controller
{
    public function index(){

        // 继承模板类别
        $res = DB::table('cates')->
        leftJoin('cates_img','cates.cid','=','cates_img.cid')->
        select(DB::raw('*,concat(path,cates.cid) as paths'))->
        where('cates.pid','0')->
        orderBy('paths')->get();
        
        
        $ids = IndexController::getCateTree(0);
        $pids = new foreachPrintfArr($ids);
       
       
        return view('home.index',[
            'pids'=>$pids,
            'ids'=>$ids,
            'res'=>$res
        ]);
    }

    public function show(){
        // 模板类别
        $res = DB::table('cates')->
        select(DB::raw('*,concat(path,cid) as paths'))->
        where('pid','0')->
        orderBy('paths')->get();
        
        $ids = IndexController::getCateTree(0);
        $pids = new foreachPrintfArr($ids);

       
        return view('layout.home',[
            'pids'=>$pids,
            'ids'=>$ids,
        ]);
    }


    public static function getCateTree($pid)
    {
        $cates = DB::table('cates')->where('pid',$pid)->get();
        $sub = [];
        foreach($cates as $k=>$v){
            $v->sub = self::getCateTree($v->cid);
            $sub[] = $v;
           
        }
        return $sub;

    }

    /*public function list(){
        // 继承模板类别
        $res = DB::table('cates')->
        select(DB::raw('*,concat(path,cid) as paths'))->
        where('pid','0')->
        orderBy('paths')->get();
        
        $ids = IndexController::getCateTree(0);
        $pids = new foreachPrintfArr($ids);
       
        return view('home.goods.list',[
            'pids'=>$pids,
            'ids'=>$ids,
        ]);
        
    }*/

    

    public function carts(){
        return view('home.carts');
    }
    
    
    public function order(){
        return view('home.order');
    }
    
    

}
