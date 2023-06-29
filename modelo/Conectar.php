<?php
class Conectar
{
    public static function conexion()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "biblioteca";
        $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        return $link;

    }
}

?>