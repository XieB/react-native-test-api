<?php

namespace app\v1\controller;

use think\Controller;
use think\Db;

class Jokes extends Controller
{
    public function index(){
        echo 'index';
    }
    public function get(){

//        header('Access-Control-Allow-Origin:*');
//        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
//        header('Access-Control-Allow-Methods:PUT,DELETE,POST,GET');
//        if (strtolower($_SERVER["REQUEST_METHOD"]) == 'options') exit();
        $res = Db::query("select * from jk_list order by rand() limit 10");
//        $where['id'] = 843;
//        $res = Db::name('list')->where($where)->select();
//        $res = Db::name('list')->limit(833,10)->select();

//        echo count($res);
        return json($res);
    }
}