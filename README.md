# Agill

🚀 Diferenciais e Decisões de Design

Além das funcionalidades básicas, foram implementadas melhorias pensando na usabilidade e na lógica de negócio de um sistema real:

Listagem Segmentada: Reconhecendo que um administrador precisa de diferentes visões dos dados, a listagem foi dividida em três seções:

Pessoas Ativas: A lista principal, mostrando apenas os registros com status "Ativo".

Pessoas Inativas: Uma lista separada para registros desativados, permitindo uma fácil auditoria ou reativação, para mudar o estado de pessoas ativa pra inativa e so clicar no botao "inativar".

Todos os Cadastros: Uma visão completa com todos os registros, independentemente do status.

Na Parte de Listar Usuario criei um mini menu no botao inativar que possui Vizualizar, Editar, Apagar (Acrescentei caso o Admin quisesse deletar algum usuario)


## 🛠️ Tecnologias Utilizadas

* PHP 8.2
* Laravel 10
* MySQL
* Usei o Xamp pra manusear de maneira mais prática o Mysql
* Vite
* Bootstrap 

## 🚀 Começando (Getting Started)

Estas são as instruções para configurar o projeto localmente.

### ✅ Pré-requisitos

Para rodar este projeto, você vai precisar ter as seguintes ferramentas instaladas em sua máquina:
* [Git](https://git-scm.com)
* [PHP 8.2](https://www.php.net/downloads.php)
* [Composer](https://getcomposer.org)
* [Node.js e NPM](https://nodejs.org/en/)


### ⚙️ Instalação Passo a Passo

Siga os passos abaixo para ter o projeto rodando em sua máquina:

1.  **Clone o repositório:**
    ```terminal bash
    git clone [https://github.com/joaozin887/Agill.git](https://github.com/joaozin887/Agill.git)
    ```

2.  **Entre na pasta do projeto:**
    ```terminal bash
    cd backend-agil
    ```

3.  **Instale as dependências do PHP:**
    ```terminal bash
    composer install
    ```

4.  **Instale as dependências do Node.js:**
    ``` terminal bash
    npm install
    ```

5.  **Gere a chave do aplicativo:**
    ```terminal bash
    php artisan key:generate
    ```
        

6.  **Execute as migrations e seeders (para criar as tabelas e popular o banco):**
    ```bash
    php artisan migrate --seed
    ```

7.  **iniciar o frontend em um terminal diferente**
    ```bash
    npm run dev
    ```

8. **Inicie o servidor:**
    ```bash
    php artisan serve
    ```
    O site estará disponível em `http://127.0.0.1:8000`

