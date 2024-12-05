<?php
    namespace Zac\Web\Controller;

    use Zac\Web\Config\DB;

    class Post {
        static function index(){
            return 'Post Index';
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,body,created_at)VALUES(?,?,?)';
            // $stmt = Zac\Web\Config\DB::db()->prepare($sql);
            $stmt = DB::db()->prepare($sql);
            $stmt->execute([$title,$body,DB::now()]);
        }
    }