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
    public function blogList()
    {
        return view('admin.blogList');
    }
}
