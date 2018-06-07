<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/7
 * @Time: 上午10:45
 * @File: IndexController.php
 */

namespace App\Http\Controllers;

class IndexController extends Controller
{

    public function index()
    {
        $bottom = Config('two.bottom');
        var_dump($bottom);
    }

}