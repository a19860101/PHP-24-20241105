<?php
    include('db.php');
    function index(){
        // global $pdo;
        $sql = 'SELECT * FROM photos ORDER BY id DESC';
        $imgs = pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $imgs;
    }
    function delete($request){
        extract($request);
        unlink('images/'.$path);
        $sql = 'DELETE FROM photos WHERE id = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
    }