<?php

declare(strict_types=1);

namespace App\Controllers;

use Dompdf\Dompdf;
use App\Database\Conexao;
use PDO;

class PacienteController 
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
        $stmt = $pdo->query("SELECT * FROM pacientes");
        $pacientes = $stmt->fetchAll();

        $this->render('paciente/index', ['pacientes' => $pacientes]);
    }

    public function novo(): void
    {
        $this->render('paciente/form');
    }

    public function editar(?string $id = null): void
    {
        if (!$id) {
            die("ID faltando");
        }

        $pdo = Conexao::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM pacientes WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $paciente = $stmt->fetch();

        if (!$paciente) {
            die("Paciente não encontrado");
        }

        $this->render('paciente/form', ['paciente' => $paciente]);
    }

    public function salvar(): void
    {

        session_start();
        $_SESSION['msg'] = "Paciente cadastrado com sucesso! ✅";
        $_SESSION['tipo'] = "success"; // ou "error"
        header('Location: /paciente');

        $pdo = Conexao::getPDO();
        $sql = "INSERT INTO pacientes (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone']
        ]);

        header('Location: /paciente');
        exit;
    }

    public function atualizar(?string $id = null): void
    {

        $_SESSION['msg'] = "Dados atualizados com sucesso! 🔄";
        $_SESSION['tipo'] = "info";
        header('Location: /paciente');
        if (!$id) {
            die("ID faltando");
        }

        $pdo = Conexao::getPDO();
        $sql = "UPDATE pacientes SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
            'id' => $id
        ]);

        header('Location: /paciente');
        exit;
    }

    public function excluir(?string $id = null): void
    {

        $_SESSION['msg'] = "Paciente removido do sistema. 🗑️";
        $_SESSION['tipo'] = "danger";
        header('Location: /paciente');
        
        if (!$id) {
            header('Location: /paciente');
            exit;
        }

        $pdo = Conexao::getPDO();
        $stmt = $pdo->prepare("DELETE FROM pacientes WHERE id = :id");
        $stmt->execute(['id' => $id]);

        header('Location: /paciente');
        exit;
    }

    public function pdf(?string $id = null): void 
    {
        $pdo = Conexao::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM pacientes WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $paciente = $stmt->fetch();

        if (!$paciente) {
            die("Paciente não encontrado!");
        }

        $dompdf = new Dompdf();
        $html = "
            <h1>Ficha Médica</h1>
            <hr>
            <p><b>Nome:</b> {$paciente['nome']}</p>
            <p><b>Email:</b> {$paciente['email']}</p>
            <p><b>Telefone:</b> {$paciente['telefone']}</p>
            <hr>
            <p>Documento gerado via Sistema MedBooking</p>
        ";

        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("ficha_{$paciente['nome']}.pdf", ["Attachment" => false]);
    }
}