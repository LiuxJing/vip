<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use foreachPrintfArr;

class GoodsController extends Controller
{
    // 列表
    public function list(Request $request,$cid)
    {

        // 继承模板
       // $req = $res = $request->except('_token');
        
        $ids = IndexController::getCateTree(0);
        $pids = new foreachPrintfArr($ids);
       //获取
        


        $data = DB::table('goods')->
        leftJoin('cates','goods.cid','=','cates.cid')->
        where([
                    ['goods.cid',$cid],
                    ['goods.level','0'],
                    
        ])->
        orWhere([
                    ['cates.pid',$cid],
                    ['goods.level','0']
                    
                ])->
         get();

       
        // 获取价格
        // $prices = DB::table('goods')->
        // whereBetween('price',$info)->get();
        
        

        // 返回值
        return view('home.goods.list',[
            'pids'=>$pids,
            'ids'=>$ids,
            'data'=>$data,
            'cid'=>$cid,
            // 'price'=>$price
            
       
        ]);
    }

    // 促销
    public function cuxiao($id)
    {
        $ids = IndexController::getCateTree(0);
        $pids = new foreachPrintfArr($ids);

        $level = DB::table('goods')->
        where('level',$id)->
        get();
        // $pirces = DB::table('goods')->
        // where('price',$price)->get();

        return view('home.goods.cuxiao',[
            
            'id'=>$id,
            'level'=>$level,
            'pids'=>$pids,
            'ids'=>$ids
           
            ]); 
    }

    // 详情
    public function detail($gid)
    {

        $ids = IndexController::getCateTree(0);
        $pids = new foreachPrintfArr($ids);

        $res = DB::table('goods')->
        where('gid',$gid)->
        first();

        return view('home.goods.detail',[
        
                    'pids'=>$pids,
                    'ids'=>$ids,
                    'res'=>$res
            ]);
    }
    
    // 价格区间
    /*public function prices($price)
    {

        // 继承
        $ids = IndexController::getCateTree(0);
        $pids = new foreachPrintfArr($ids);

        $data = DB::table('goods')->
        leftJoin('cates','goods.cid','=','cates.cid')->
        where([
                    ['goods.cid',$cid],
                    ['goods.level','0']
        ])->
        orWhere([
                    ['cates.pid',$cid],
                    ['goods.level','0']
                    
                ])->
        get();

        // 获取价格
        $pirces = DB::table('goods')->
        where('price',$price)->get();


        // 返回
        return view('home.goods.list',[
        
                    'pids'=>$pids,
                    'ids'=>$ids,
                    'price'=>$price,
                    'data'=>$data
            ]);
    }*/
}
