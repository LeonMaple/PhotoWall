<?php

namespace App\Http\Controllers\Home\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Photo;
use App\Http\Model\photo_category;

class PhotoController extends Controller
{
    /**
     * 图片分类展示页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //TODO 由于mysql5.7分组查询报错问题，现在暂时这么写
        /**
         * TODO 代码会重写
         * 1、分组获取分类数据
         * 2、分页获取图片列表
         * 3、前段需要做瀑布流页面展示 20一页
         */

        //TODO 创建一个分类展示首页图列表

        //根据分类分组查询所有图片
        $photo = Photo::queryCategoryAll();

        //排序让下面更好获取第一个分类
        $result = $photo->toArray();
        sort($result);

        $data = [];
        $count = [];
        foreach ($result as $key => $val) {
            $count[$val->category][] = $val->category;
            if(!isset($data[$val->category])) {
                $data[$val->category] = $val;
            }
            //统计一下各个分类的总数
            $data[$val->category]->count = count($count[$val->category]);
        }
        sort($data);

        //查询分类
        $category = photo_category::queryAll();

        return view('home.photo.photo',[
            'title'  => '图片分类',
            'photo'  => $data,
            'category'  => $category,
        ]);
    }

    /**
     * 图片展示页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function single()
    {
        $input = Input::get();
        $photo = Photo::queryAll($input['category']);
        return view('home.photo.single',[
            'title'  => '图片列表',
            'photo'  => $photo
        ]);
    }

    /**
     * 相册模板 one
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function one()
    {
        return view('home.photo.one',[
            'title'  => '相册模板 one',
        ]);
    }


}
