<h3 align="center" style="text-weight: bolder;"> (Projeto em andamento) </h3>

---

<h1 align="center"> HDC Events</h1>

Este é o repositório do projeto **HDC Events**, uma aplicação feita com o intuito de aprendizagem e aplicação de técnicas para desenvolvimento, uma aplicação Laravel que permite a criação, exibição e gerenciamento de eventos (Crud) a partir de uma conta cadastrada associada.

## Funcionalidades

- Criar e editar eventos.
- Visualizar detalhes de eventos individuais.
- Dashboard para gerenciar eventos do usuário autenticado.
- Contato com o suporte.
- Exclusão de eventos.
- Autenticação de usuários para acesso às funcionalidades restritas.

## Estrutura de Rotas

As rotas principais da aplicação estão definidas da seguinte forma:

| Método | Caminho                  | Controlador e Ação                | Middleware      | Descrição                                                                 |
|--------|--------------------------|-----------------------------------|-----------------|---------------------------------------------------------------------------|
| GET    | `/`                      | `EventController@index`           | -               | Exibe a página inicial com os eventos.                                    |
| GET    | `/events/create`          | `EventController@create`          | `auth`          | Exibe o formulário de criação de novos eventos.                           |
| GET    | `/events/{id}`            | `EventController@show`            | -               | Exibe os detalhes de um evento específico.                                |
| POST   | `/events`                 | `EventController@store`           | -               | Salva um novo evento no banco de dados.                                   |
| GET    | `/contato`                | `ContactController@index`         | `auth`          | Página de contato com o suporte.                                          |
| GET    | `/MeusEventos`            | `EventController@dashboard`       | `auth`          | Exibe o dashboard com os eventos do usuário autenticado.                  |
| DELETE | `/events/{id}`            | `EventController@destroy`         | `auth`          | Exclui um evento do banco de dados.                                       |
| GET    | `/events/edit/{id}`       | `EventController@edit`            | `auth`          | Exibe o formulário de edição de um evento.                                |
| PUT    | `/events/update/{id}`     | `EventController@update`          | `auth`          | Atualiza os dados de um evento no banco de dados.                         |
| GET    | `/phpinfo`                | Função anônima                    | -               | Exibe as informações do PHP instalado.                                    |
| GET    | `/dashboard`              | View anônima                      | `auth`, `verified` | Exibe o dashboard padrão do Laravel (Livewire) - **Em adaptação**                                     |

## Tecnologias Utilizadas

- **Laravel 10**: Framework PHP utilizado no backend.
- **Bootstrap 5**: Para estilização e responsividade.
- **Livewire**: Componente para facilitar a interação em tempo real entre o frontend e o backend.
- **MySQL**: Banco de dados utilizado para persistência dos eventos e usuários.
- **IONIC Icons**: Ícones utilizados para melhorar a interface.

## Requisitos

- PHP 8.1 ou superior
- Composer
- MySQL
- Node.js (para compilar os assets do frontend)

## Instalação
Algumas instruções para que o projeto seja executado com sucesso em quaisquer ambientes desde que tenham os requisitos previamente mencionados.

1. Clone este repositório em sua máquina local:
   ```bash
   git clone https://github.com/seu-usuario/hdc-events.git
   ```

2. Acesse o diretório do projeto:
   ```bash
   cd hdc-events
   ```

3. Instale as dependências do PHP com o Composer:
   ```bash
   composer install
   ```

4. Instale as dependências do frontend com o NPM:
   ```bash
   npm install
   ```

5. Copie o arquivo `.env.example` para `.env` e configure o banco de dados:
   ```bash
   cp .env.example .env
   ```

6. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

7. Crie o banco de dados e rode as migrações:
   ```bash
   php artisan migrate
   ```

8. Rode as seeds para popular o banco com dados de teste (opcional):
   ```bash
   php artisan db:seed
   ```

## Compilação dos Assets

Para compilar os assets do frontend (CSS, JS), utilize o Vite:

```bash
npm run dev
```

Para compilar para produção:

```bash
npm run build
```

## Execução do Servidor

Inicie o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

Agora você pode acessar a aplicação em `http://localhost:8000`.

## Contato

Para mais informações, entre em contato através da página de suporte, ou envie um e-mail para duraesleandro12@gmail.com

---
