# 🛒 Sistema de Gestão Comercial — Modelagem de Banco de Dados & PHP

Projeto completo de banco de dados relacional desenvolvido desde a modelagem conceitual e lógica até a implementação física em **MariaDB**, integrado a uma aplicação web em **PHP** para consulta dinâmica das tabelas.

## ✿ Estrutura do Banco de Dados (`trabalho`)

O banco relacional possui **8 tabelas** conectadas por chaves estrangeiras (`FOREIGN KEY`):

- **`Custumer`**: Cadastro de clientes e endereços.
- **`Categories`**: Categorias dos produtos.
- **`Employees`**: Funcionários e equipe de vendas.
- **`Shippers`**: Transportadoras responsáveis pelas entregas.
- **`Supplier`**: Fornecedores nacionais e internacionais.
- **`Products`**: Catálogo de produtos vinculados a fornecedores e categorias.
- **`Orders`**: Registro dos pedidos realizados.
- **`OrderDatails`**: Itens e quantidades detalhadas de cada pedido.

## ✿ Arquivos do Projeto

- **`index.php`**: Página web em PHP e CSS que conecta ao MariaDB e exibe todas as tabelas do banco.
- **`/database`**: Script SQL (`trabalho.sql` / `Fisico_W3School.sql`) com a criação das tabelas, chaves estrangeiras e carga inicial de registros.
- **`/modelagem`**: Arquivos dos modelos Conceitual (`aaaConceitual_W3School.brM3`) e Lógico (`Lógico_W3School.brM3`) feitos no brModelo.

## ✿ Tecnologias Utilizadas

- **Banco de Dados:** MariaDB / MySQL
- **Modelagem:** brModelo
- **Back-end:** PHP (`mysqli`)
- **Front-end:** HTML5, CSS3
- **Servidor Local:** XAMPP (Apache + MariaDB)

## ✿ Como Executar o Projeto

1. Inicie os módulos **Apache** e **MySQL/MariaDB** no painel do **XAMPP**.
2. Copie os arquivos deste repositório para a pasta `C:\xampp\htdocs\trabalhow3school`.
3. Acesse o **phpMyAdmin** (`http://localhost/phpmyadmin`), crie um banco de dados chamado **`trabalho`** e importe o arquivo `.sql` da pasta `/database`.
4. Confira no início do arquivo **`index.php`** se a configuração de acesso bate com o seu XAMPP (configurado por padrão na porta **`3307`**, usuário **`root`** e senha em branco).
5. Abra no navegador:
   ```text
   http://localhost/trabalhow3school
   ```

## ✿ Desenvolvido por

- **Anelise Lemes**
