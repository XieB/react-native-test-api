<?php

namespace app\v1\controller;

use think\Controller;
use think\Db;

class Content extends Controller
{
    public function index(){
        echo 'index';
    }
//    public function add(){
//        set_time_limit(0);
//        for ($i=1125; $i<=2000; $i++) {
//            $url = 'http://www.xxhh.com/duanzi/page/' . $i . '/?l=1524295800';
//            $res = file_get_contents($url);
//            preg_match_all('/<pre>(.*?)<\/pre>/is', $res, $matchs);
//            $data = array_map(function($value){
//                return ['content'=>$value];
//            },$matchs[1]);
//            Db::name('list')->insertAll($data);
//        }
//    }
}