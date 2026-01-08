<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Database\Conexao;
use PDO;

class HomeController
{
    private function render(string $view, array $dados = []): void
    {
        extract($dados);
        require __DIR__ . "/../../views/parts/header.php";
        require __DIR__ . "/../../views/{$view}.php";
        require __DIR__ . "/../../views/parts/footer.php";
    }

    public function index(): void
    {
        $pdo = Conexao::getPDO();

        
        $stmtTotal = $pdo->query("SELECT COUNT(*) FROM pacientes");
        $totalPacientes = $stmtTotal->fetchColumn();

       
        $stmtRecentes = $pdo->query("SELECT * FROM pacientes ORDER BY id DESC LIMIT 5");
        $recentes = $stmtRecentes->fetchAll();

       
        $this->render('home/index', [
            'totalPacientes' => $totalPacientes,
            'recentes' => $recentes
        ]);
    }
}