# 💊 HealthCare - Sistema de Cadastro de Remédios

Sistema simples feito em PHP como projeto de faculdade, com o objetivo de cadastrar remédios, editar informações, excluir registros e verificar quais estão com a data de vencimento próxima.

<br><br>

## 🧪 Funcionalidades

- ✅ Cadastro de novos remédios
- ✅ Edição de dados (nome, vencimento e efeitos colaterais)
- ✅ Exclusão de registros
- ✅ Verificação de remédios com vencimento próximo
- ✅ Interface simples com Bootstrap

## 🛠️ Tecnologias Utilizadas

- PHP
- MySQL
- HTML + CSS
- Bootstrap

## 🧰 Como usar

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repo.git
   ```
2. Importe o banco de dados:
Vá até a pasta 'banco', baixe o arquivo e importe o .sql no seu phpMyAdmin.

3. Configure o banco em config.php:
   ```bash
    $pdo = new PDO("mysql:dbname=nome_do_banco;host=localhost", "usuario", "senha");
   ```
4. Rode em um servidor local (XAMPP, WAMP ou outro).

5. Acesse index.php pelo navegador para começar.

