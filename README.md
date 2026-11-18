# 🛒 Sistema de Gestão Comercial — Modelagem de Banco de Dados & PHP

Projeto completo de banco de dados relacional desenvolvido desde a modelagem conceitual e lógica até a implementação física em **MariaDB**, integrado a uma aplicação web em **PHP** para visualização dinâmica dos registros[cite: 1].

## ✿ Estrutura do Banco de Dados (`trabalho`)

O banco relacional conta com **8 tabelas** interligadas por chaves estrangeiras (`FOREIGN KEY`)[cite: 1]:
- **`Custumer`**: Cadastro de clientes e endereços[cite: 1].
- **`Categories`**: Categorias de produtos[cite: 1].
- **`Employees`**: Equipe de vendas e funcionários[cite: 1].
- **`Shippers`**: Transportadoras responsáveis pelas entregas[cite: 1].
- **`Supplier`**: Fornecedores nacionais e internacionais[cite: 1].
- **`Products`**: Catálogo de produtos vinculados a fornecedores e categorias[cite: 1].
- **`Orders`**: Registro de pedidos realizados[cite: 1].
- **`OrderDatails`**: Itens e quantidades detalhadas de cada pedido[cite: 1].

## ✿ Organização do Repositório

- **`index.php`**: Interface web em PHP e CSS que conecta ao MariaDB e exibe todas as tabelas do banco[cite: 1].
- **`/database`**:
  - `Fisico_W3School.sql`: Script DDL com criação das tabelas e restrições de integridade referencial[cite: 1].
  - `dados_iniciais.sql`: Script DML com carga inicial de registros para testes[cite: 1].
- **`/modelagem`**: Arquivos dos modelos Conceitual (DER) e Lógico do projeto[cite: 1].

## ✿  Como Executar o Projeto

1. Inicie os serviços **Apache** e **MariaDB / MySQL** no seu ambiente local (XAMPP, WAMP ou Laragon).
2. Copie os arquivos deste repositório para a pasta pública do servidor (ex.: `C:\xampp\htdocs\trabalho`).
3. No **phpMyAdmin** (ou HeidiSQL), crie um banco de dados chamado **`trabalho`**[cite: 1].
4. Execute primeiro o script **`database/Fisico_W3School.sql`** para criar as tabelas[cite: 1] e depois **`database/dados_iniciais.sql`** para popular os dados[cite: 1].
5. Confira no início do arquivo **`index.php`** se a porta do MariaDB está configurada conforme o seu ambiente (padrão no projeto: porta **`3307`**, usuário **`root`**, senha vazia)[cite: 1].
6. Acesse no navegador:
   ```text
   http://localhost/trabalho
   ```

## ✿  Desenvolvido por

- **Anelise Lemes**
