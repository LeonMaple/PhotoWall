<?php

namespace App\Http\Controllers\Admin\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * 显示图片列表
     *
     */
    public function index()
    {
        return view('admin.photo.index',[
            'title' => '图片列表'
        ]);
    }

    /**
     * 添加
     */
    public function create()
    {
        return view('admin.photo.create',[
            'title' => '图片添加'
        ]);
    }

    /**
     * 显示
     */
    public function show()
    {
        $this->_echo('admin_show');
    }

    /**
     * 修改
     */
    public function edit()
    {
        $this->_echo('admin_edit');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        $a = '11';
        $password = isset($a) ? $a : $_SERVER;
        dump($password);
        dump(phpinfo());
        $this->_echo('admin_store');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->_echo('admin_update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->_echo('admin_destroy');
    }


    private function _echo($string)
    {
        var_dump($string);
    }


}
