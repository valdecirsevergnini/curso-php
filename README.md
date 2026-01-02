# Sistema Básico de Controle de Estoque em PHP

Este projeto foi desenvolvido com **finalidade educacional e de treino**, com foco no aprendizado de **PHP procedural**, integração com **MySQL**, controle de sessões e níveis de acesso.

⚠️ **Importante:**  
Este sistema **não utiliza arquitetura MVC**, pois o objetivo principal foi praticar lógica, CRUD, autenticação e controle de permissões em PHP puro.

---

## 📌 Funcionalidades

- Sistema básico de **controle de estoque**
- **Controle de acesso por níveis de usuário**
- Cadastro com **aprovação manual de usuários**
- CRUD completo para:
  - Produtos
  - Categorias
  - Fornecedores
  - Usuários

---

## 👥 Níveis de Acesso

O sistema possui três níveis de usuários:

- **Administrador**
  - Acesso total ao sistema
  - Aprovação de novos usuários
  - Cadastro, edição e exclusão de produtos, categorias, fornecedores e usuários

- **Funcionário**
  - Acesso às funcionalidades conforme permissões definidas
  - Visualização e gerenciamento básico

- **Conferente**
  - Acesso restrito para conferência de dados

---

## 🔐 Controle de Cadastro e Aprovação

- Usuários podem se **cadastrar livremente**
- O acesso ao sistema **somente é liberado após aprovação**
- A aprovação é feita exclusivamente por um **Administrador**
- Usuários não aprovados não conseguem acessar o sistema

---

## 🗄️ Banco de Dados

- O script SQL para criação do banco de dados está disponível no arquivo:

sql.txt

📌 Este arquivo encontra-se **no mesmo diretório dos códigos**, facilitando a configuração do ambiente.

## 🛠️ Tecnologias Utilizadas

- PHP (procedural)
- MySQL
- HTML
- CSS
- Bootstrap
- Sessions (controle de login)

---

## 🎯 Objetivo do Projeto

Este projeto foi criado com o objetivo de:

- Praticar lógica de programação em PHP
- Trabalhar com autenticação e sessões
- Implementar controle de permissões por nível de usuário
- Desenvolver operações CRUD completas
- Entender a comunicação entre PHP e banco de dados MySQL

---

## ⚠️ Observações Finais

- O projeto **não segue padrão MVC**
- Estrutura simples e direta, ideal para estudos
- Não indicado para uso em produção sem refatorações e melhorias de segurança

---

📌 **Autor:**  
Valdecir Severgnini  
GitHub: https://github.com/valdecirsevergnini
