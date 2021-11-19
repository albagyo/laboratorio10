<?php

class Conexion
{

    public static function conectar()
    {
        $conexion = new mysqli("127.0.0.1", "root", "", "mi_db");
        return $conexion;
    }
}
