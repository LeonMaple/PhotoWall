<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/11
 * @Time: 下午2:46
 * @File: BlogController.php
 */

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public $blog = '博客';

    /**
     * 列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list()
    {
        return view('admin.blog.list');
    }

    /**
     * 详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail()
    {
        return view('admin.blog.detail');
    }


    public function add()
    {

        $view['title'] = '添加博客';
        $view['one'] = $this->blog;

        return view('admin.blog.add',$view);
    }

}
