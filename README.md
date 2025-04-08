# Landing Page Connecta

Este repositório contém o código-fonte da **Landing Page da Connecta**, desenvolvida com o framework **Laravel**. A aplicação é responsiva, otimizada para SEO e projetada para representar a marca Connecta de forma profissional e moderna.

---

## Tabela de Conteúdos

- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Requisitos](#requisitos)
- [Instalação e Execução](#instalação-e-execução)
- [Variáveis de Ambiente](#variáveis-de-ambiente)
- [Estrutura de Pastas](#estrutura-de-pastas)
- [Deploy](#deploy)
- [Contribuições](#contribuições)
- [Licença](#licença)

---

## Tecnologias Utilizadas

- [PHP 8+](https://www.php.net/)
- [Laravel 10+](https://laravel.com/)
- [Composer](https://getcomposer.org/)
- [Blade](https://laravel.com/docs/blade)
- [MySQL ou PostgreSQL](https://www.mysql.com/)
- [Tailwind CSS](https://tailwindcss.com/) *(se aplicável)*

---

## Requisitos

- PHP 8.1 ou superior
- Composer
- MySQL ou outro banco de dados suportado
- Node.js e npm/yarn *(caso use Laravel Mix ou Vite)*

---

## Instalação e Execução

1. **Clone o repositório**

```bash
git clone https://github.com/Johnamancio/landingpage-connecta.git
cd landingpage-connecta
```

2. **Instale as dependências do PHP**

```bash
composer install
```

3. **Copie o arquivo `.env`**

```bash
cp .env.example .env
```

4. **Configure o `.env` com os dados do seu banco de dados**

```env
APP_NAME=Laravel
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=connecta
DB_USERNAME=root
DB_PASSWORD=
```

5. **Gere a chave da aplicação**

```bash
php artisan key:generate
```

6. **Rode as migrações (se necessário)**

```bash
php artisan migrate
```

7. **Inicie o servidor**

```bash
php artisan serve
```

Acesse: `http://localhost:8000`

---

## Variáveis de Ambiente

Veja o arquivo [`.env.example`](./.env.example) para configurar corretamente o ambiente da aplicação.

---

## Estrutura de Pastas

```
landingpage-connecta/
├── app/
├── bootstrap/
├── config/
├── database/
│   └── migrations/
├── public/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── .env.example
└── artisan
```

---

## Deploy

O projeto pode ser hospedado em qualquer ambiente com suporte a PHP/Laravel, como:

- Laravel Forge
- Heroku (com buildpack PHP)
- DigitalOcean, HostGator, etc.

---

## Contribuições

Contribuições são bem-vindas! Sinta-se livre para abrir issues ou enviar pull requests.

---

## Licença

Este projeto está licenciado sob a **MIT License**. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.