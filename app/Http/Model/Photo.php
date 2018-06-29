<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Photo extends Model
{
    public function index()
    {

    }


    /**
     * 查询所有的分类（category）数据-每个分类的第一张图片
     * @return \Illuminate\Support\Collection
     */
    public static function queryCategoryAll()
    {
        //TODO 重点需要看一下怎么解决这个分组报错的问题
        $photo = DB::table('photo')->select(DB::raw('id,name,doc,time,author,category,tag,url'))
//            ->groupBy('category')
            ->orderBy('id','desc')
            ->get();

        return $photo;
    }

    public static function queryAll($category)
    {
//        $photo = DB::table('photo')->get();
        $photo = DB::table('photo')->select(DB::raw('id,name,doc,time,author,category,tag,url'))
            ->where('category',$category)
            ->orderBy('id','desc')
            ->get();

        return $photo;
    }

}
