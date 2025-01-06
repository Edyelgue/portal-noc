# Guia para Rodar o Projeto Laravel

Este guia descreve os passos necessários para configurar e executar um projeto Laravel localmente. Certifique-se de ter as dependências necessárias instaladas antes de iniciar.

## Pré-requisitos

Antes de rodar o projeto, você precisará:

1. **PHP** (8.2+).  
2. **Composer** (gerenciador de dependências do PHP).  
3. **Node.js** e **npm** (para compilar e gerenciar ativos front-end).  
4. **Banco de dados** (de sua escolha).

## Passo a Passo

1. **Clone o Repositório**
   Se ainda não tiver o código localmente, faça o clone do repositório:
   ```bash
   git clone <url-do-repositorio>
   cd <nome-do-diretorio-do-projeto>
   ```

2. **Instale as Dependências PHP**
   Execute o comando abaixo para instalar as dependências do backend:
   ```bash
   composer install
   ```

3. **Instale as Dependências JavaScript**
   Use o npm para instalar as dependências do front-end:
   ```bash
   npm install
   ```

4. **Configuração do Ambiente**
   - Copie o arquivo `.env.example` para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Configure as variáveis do arquivo `.env` de acordo com sua necessidade (como banco de dados, chave de aplicativo, etc.).

5. **Gere a Chave do Aplicativo**
   Gere a chave do aplicativo Laravel com o comando:
   ```bash
   php artisan key:generate
   ```

6. **Execute as Migrações (Opcional)**
   Caso o projeto utilize banco de dados, execute as migrações para criar as tabelas:
   ```bash
   php artisan migrate
   ```

7. **Inicie o Servidor Backend**
   Rode o servidor embutido do Laravel:
   ```bash
   php artisan serve
   ```
   O servidor estará disponível em `http://127.0.0.1:8000` por padrão.

8. **Inicie o Build de Front-end**
   Execute o comando para compilar e observar os ativos front-end:
   ```bash
   npm run dev
   ```

## Acesso ao Projeto

- Backend: [http://127.0.0.1:8000](http://127.0.0.1:8000)
- Para mudanças de front-end, o `npm run dev` cuidará de compilar os arquivos automaticamente.

---

Siga esses passos sempre que precisar rodar o projeto localmente. Caso enfrente problemas, verifique os logs ou a documentação oficial do Laravel para mais detalhes.
