<?php
    namespace Zac\Web\Controller;

    use Zac\Web\Config\DB;
    // use PDO;

    class Post {
        static function index(){
            $sql = 'SELECT * FROM posts ORDER BY id DESC';
            $result = DB::db()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,body,created_at)VALUES(?,?,?)';
            // $stmt = Zac\Web\Config\DB::db()->prepare($sql);
            $stmt = DB::db()->prepare($sql);
            $stmt->execute([$title,$body,DB::now()]);
        }
    }