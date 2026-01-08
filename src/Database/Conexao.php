<?php

declare(strict_types=1);

namespace App\Database;

use PDO;
use PDOException;

class Conexao
{
    private static ?PDO $instancia = null;

    public static function getPDO(): PDO
    {
        if (self::$instancia === null) {
            $config = parse_ini_file(__DIR__ . '/../../database.ini');
            $dsn = "mysql:host={$config['host']};dbname={$config['name']};charset=utf8mb4";

            try {
                self::$instancia = new PDO($dsn, $config['user'], $config['pass']);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instancia->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Erro de Conexão: " . $e->getMessage());
            }
        }
        return self::$instancia;
    }
}
