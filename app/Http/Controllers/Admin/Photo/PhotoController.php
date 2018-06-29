<?php

namespace App\Http\Controllers\Admin\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PhotoController extends Controller
{
    /**
     * 显示图片列表
     *
     */
    public function index()
    {

        $photo = DB::table('photo')->get();

        return view('admin.photo.index',[
            'title' => '图片列表',
            'photo'  =>$photo
        ]);
    }

    /**
     * 添加
     */
    public function create()
    {
//
//        for ($i= 21;$i<110;$i++) {
//            $date = date('Y-m-d H:i:s',time());
//            $data = [
//                'name' => '图片测试标题'.$i,
//                'doc' => '图片测试内容'.$i,
//                'time' => $date,
//                'category' => 1,
//                'tag' => 1,
//                'url' => "http://h.pic.com/博客提供展示图片/".$i.".jpg",
//            ];
//            DB::table('photo')->insert($data);
////
//        }
        if($_GET) {
            $get = Input::get();

            $date = date('Y-m-d H:i:s',time());
            $data = [
                'name'  => $get['name'],
                'doc'  => $get['doc'],
                'time'  => $date,
                'category'  => $get['category'],
                'tag'  => $get['tag'],
            ];
            DB::table('photo')->insert($data);
            echo true;
            exit;
        }
        return view('admin.photo.create', [
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
        error_log('你要输出的信息', 3, '1.txt');
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


    public function test()
    {
        //原生sql
//        查询
//        DB::select('select * from users where id = 1');
//        DB::select('select * from users where id = ?',[1]);
//        $users = DB::select('select * from users where id = :id', ['id' => 1]);

//        添加
//        $date = date('Y-m-d H:i:s',time());
//        DB::insert('insert into users (id, `name`,add_time,last_time,portrait) values (?, ?, ?, ?, ?)', [2, 'Dayle',$date,$date,'1']);

//        更新
//        $affected = DB::update('update users set votes = 100 where name = ?', ['John']);

//        删除
//        $deleted = DB::delete('delete from users');

//        事务
//        自动事务
//        DB::transaction(function () {
//            DB::table('users')->update(['votes' => 1]);
//
//            DB::table('posts')->delete();
//        });

//        手动事务
//        DB::beginTransaction();
//        DB::rollBack();
//        DB::commit();


//        方式
//        查询单行
//        $user = DB::table('users')->where('name', 'admin')->first();
//        返回单个字段
//        $email = DB::table('users')->where('name', 'John')->value('email');

//        验证数据是否存在
//        return DB::table('orders')->where('finalized', 1)->exists();
//        return DB::table('orders')->where('finalized', 1)->doesntExist();

////        插入
//        $date = date('Y-m-d H:i:s',time());
//        $data = [
//            'name'  => 'xxx',
//            'add_time'  => $date,
//            'last_time'  => $date,
//            'portrait'  => 'sasd',
//        ];
//        DB::table('users')->insert($data);




    }


}
