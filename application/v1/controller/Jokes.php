<?php

namespace app\v1\controller;

use think\Controller;
use think\Db;

class Jokes extends Controller
{
    public function index(){
        echo 'index';
    }
    public function lists(){
        $res = Db::query("select * from jk_list order by rand() limit 10");
        return json($res);
    }
}