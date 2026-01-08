#  MedBooking Pro - Sistema de Gestão Clínica

O **MedBooking** é um sistema web completo para gestão de clínicas e pacientes, desenvolvido com foco em performance, arquitetura limpa e experiência do usuário (UX). O projeto simula um produto SaaS pronto para o mercado.

##  Tecnologias Utilizadas

* **Back-end:** PHP 8+ (Moderno e Tipado).
* **Arquitetura:** MVC (Model-View-Controller) construído do zero, sem frameworks pesados.
* **Banco de Dados:** MariaDB /MySQL via PDO.
* **Front-end:** HTML, CSS e Tailwind CSS.
* **Design & UX:**
    * Interface Responsiva e "Clean".
    * Ícones SVG Nativos (Heroicons).
    * Animações CSS (`@keyframes`) para fluidez na navegação.
    * Feedback visual com Toasts Notifications.
    * Máscaras de Input com JavaScript Puro (Vanilla JS).

## ✨ Funcionalidades

* **Dashboard Interativa:**
    * KPIs em tempo real (Total de pacientes, consultas, receita).
    * Lista de atividades recentes com avatares gerados dinamicamente.
    * Animações de entrada (Fade In Up) e efeitos de Glassmorphism.
* **Gestão de Pacientes (CRUD):**
    * Cadastro completo com validação.
    * Edição e Exclusão segura.
    * Listagem otimizada.
* **Roteamento Personalizado:** Sistema de rotas próprias (`/paciente`, `/home`) sem dependência de bibliotecas externas.


## 🔧 Como Rodar o Projeto

### Pré-requisitos
* PHP 8.0 ou superior.
* Servidor MySQL ou MariaDB rodando (XAMPP, WAMP ou Docker).

### Passo 1: Configurar o Banco de Dados
1. Abra seu gerenciador de banco (PHPMyAdmin, DBeaver, Workbench).
2. Crie um banco de dados chamado `medbooking`.
3. Rode o script SQL abaixo (ou importe o arquivo `database.sql`):

```sql
CREATE DATABASE medbooking;
USE medbooking;

CREATE TABLE pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    telefone VARCHAR(20)
);

``` 

5.  Clone o repositório:
    ```bash
    git clone https://github.com/Bobpunk/medbooking.git
    ```
5.  Entre na pasta:
    ```bash
    cd medbooking
    ```
6.  Inicie o servidor embutido do PHP:
    ```bash
    php -S localhost:8000
    ```
7.  Acesse no navegador: `http://localhost:8000`

---
Desenvolvido por **José Cecílio (https://www.linkedin.com/in/jcfonsecajunior/)** 