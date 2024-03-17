<?php
class Database {
    public static function connect(){
        $host='mariadb';
        // $dbname=getenv('MARIADB_DATABASE');
        $dbname='Tienda';
        try{
            $dsn='mysql:host='.$host.';dbname='.$dbname.';charset=UTF8';
            $dbh=new PDO ($dsn, 'root','changepassword');

            return $dbh;
    }   catch (PDOException $e) {
        echo ''.$e->getMessage().'';
}
}
}
?>