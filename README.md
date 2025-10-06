💻 Sistema de Cadastro em PHP
Este é um sistema de cadastro básico desenvolvido em PHP puro (ou com auxílio de um framework/biblioteca, se for o caso) utilizando MySQL (via XAMPP) para persistência de dados.

O objetivo do projeto é demonstrar a conexão e operações CRUD (Criar, Ler, Atualizar, Deletar) em um ambiente local de desenvolvimento web.

🛠️ Tecnologias Utilizadas
Linguagem: PHP

Banco de Dados: MySQL (gerenciado via phpMyAdmin no XAMPP)

Servidor Local: XAMPP

Front-end: HTML, CSS e JavaScript

Framework CSS (Opcional, se aplicável): Bootstrap

⚙️ Instalação e Configuração Local
Siga os passos abaixo para colocar o sistema em funcionamento na sua máquina local:

1. Pré-requisitos
Certifique-se de que você tem o XAMPP instalado e configurado corretamente.

Inicie os serviços Apache e MySQL no painel de controle do XAMPP.

2. Clonar o Repositório
Abra seu terminal/Git Bash e clone este projeto para a pasta de projetos do seu XAMPP (htdocs):

Bash

cd C:/xampp/htdocs/
git clone git@github.com:LuckVidal07/Sistema-Cadastro-PHP.git
3. Configuração do Banco de Dados
Acesse o phpMyAdmin em seu navegador (geralmente http://localhost/phpmyadmin).

Crie um novo banco de dados com o nome: nome_do_seu_banco (Substitua pelo nome real que você usou na conexão).

Execute o script SQL para criar a tabela de cadastro.

(Se você tiver um arquivo .sql com a estrutura, inclua a instrução de importação aqui, ex: "Importe o arquivo banco.sql".)

Exemplo de instrução SQL (para você adaptar):

SQL

CREATE TABLE usuarios (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
4. Ajuste da Conexão PHP
Verifique o arquivo de conexão do banco de dados em (config/conexao.php) e garanta que as credenciais correspondem às configurações padrão do seu XAMPP:

PHP

<?php
$host = "localhost";
$usuario = "root";  // Padrão do XAMPP
$senha = "";        // Padrão do XAMPP
$banco = "nome_do_seu_banco";

// O restante do código de conexão...
?>
5. Executar o Projeto
Abra seu navegador e acesse:

http://localhost/Sistema-Cadastro-PHP/
🚀 Como Usar o Sistema
O sistema deve apresentar um formulário de cadastro na página inicial.

Página Inicial (index.php): Contém o formulário para inserção de novos registros.

Processamento (cadastro_script.php): Lida com a lógica de validação e inserção de dados no MySQL.

🤝 Contribuições
Sinta-se à vontade para sugerir melhorias, correções de bugs ou adicionar novos recursos. Para contribuir:

Faça um Fork do projeto.

Crie uma nova branch para sua feature: git checkout -b minha-nova-feature.

Faça suas alterações e commits.

Envie para o seu Fork: git push origin minha-nova-feature.

Abra um Pull Request para este repositório.
