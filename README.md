2025 - Erick Agostinho

# Portfólio Pessoal - Erick Agostinho

![Banner](https://raw.githubusercontent.com/r4mpo/erickagostinho/main/public/images/banner/banner4.jpg)

> Este é o repositório do meu portfólio pessoal desenvolvido com **Slim Framework** em PHP.
> Um site leve, moderno e organizado para apresentar meus projetos, experiência, formação acadêmica e contato.

---

## Índice

- [Sobre o Projeto](#sobre-o-projeto)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Como Rodar Localmente](#como-rodar-localmente)
- [Rotas Disponíveis](#rotas-disponíveis)
- [Personalização do Conteúdo](#personaliza%C3%A7%C3%A3o-do-conte%C3%BAdo)
- [Contribuição](#contribui%C3%A7%C3%A3o)
- [Licença](#licen%C3%A7a)

---

## Sobre o Projeto

Este portfólio foi criado para apresentar minha trajetória profissional e acadêmica, assim como meus principais projetos e formas de contato, tudo isso utilizando o microframework Slim, que facilita a construção de aplicações PHP minimalistas e eficientes.

---

## Tecnologias Utilizadas

- [PHP 8.x](https://www.php.net/)
- [Slim Framework 4](https://www.slimframework.com/)
- [Composer](https://getcomposer.org/) para gerenciamento de dependências
- [Twig / PHP Renderer](https://twig.symfony.com/) para views (dependendo da configuração)
- Bootstrap 5 para layout responsivo e moderno
- HTML5, CSS3 e JavaScript para frontend

---

## Estrutura do Projeto

```
portfolio/
│
├── composer.json           # Arquivo de configuração do Composer
├── composer.lock           # Arquivo de bloqueio de dependências
├── README.md               # Readme do projeto (você já tem um gerado)
│
├── public/                 # Diretório público acessado pelo navegador
│   └── index.php           # Front controller da aplicação
│
├── app/                    # Definição centralizada das rotas
│   └── routes.php
│
├── src/                    # Código-fonte principal
│   │
│   ├── Langs/              # Arquivos de idioma, um para cada view
│   ├──── Langs/
│   │   ├──── ClientsLangs.php
│   │   ├──── ContactLangs.php
│   │   ├──── EducationLangs.php
│   │   ├──── ExperienceLangs.php
│   │   ├──── HomeLangs.php
│   │
│   ├── Renders/            # Controllers que fazem o papel de renderização
│   │   ├── ClientsRender.php
│   │   ├── ContactRender.php
│   │   ├── EducationRender.php
│   │   ├── ExperienceRender.php
│   │   └── HomeRender.php
│   │
│   └── Render.php          # Classe base de renderização herdada por todos os renders
│
├── vendor/                 # Dependências instaladas via Composer (Slim, PHP-DI, etc)
│
└── views/                  # Arquivos de visualização (templates HTML)
    ├── clients.php
    ├── contact.php
    ├── education.php
    ├── experience.php
    └── home.php

```

---

## Como Rodar Localmente

### Pré-requisitos

- PHP >= 8.0
- Composer instalado
- Servidor web (Apache, Nginx) ou o servidor embutido do PHP

### Passos para executar

1. Clone o repositório:

```bash
git clone https://github.com/r4mpo/erickagostinho.git
cd erickagostinho
```

2. Instale as dependências com Composer:

```bash
composer install
```

3. Inicie o servidor embutido PHP para testes locais:

```bash
php -S localhost:8080 -t public
```

4. Acesse no navegador:

```
http://localhost:8080
```

---

## Rotas Disponíveis

| Rota            | Descrição               |
| --------------- | ------------------------- |
| `/`           | Página inicial (home)    |
| `/clients`    | Página de clientes       |
| `/contact`    | Formulário de contato    |
| `/education`  | Formação acadêmica     |
| `/experience` | Experiência profissional |

As rotas são definidas em `routes.php` e cada uma está associada a uma classe renderizadora que controla o conteúdo.

---

## Personalização do Conteúdo

O conteúdo textual do site está organizado em arquivos de idioma no diretório `languages/` com estrutura clara e comentários para facilitar a manutenção e tradução.

Exemplo de uso no controller:

```php
$lang = require __DIR__ . '/../../languages/pt-br/contact.php';
```

---

## Como usar rotas dinamicamente

O projeto usa o Slim `RouteParserInterface` para gerar URLs baseadas no nome da rota, evitando hardcoded e facilitando mudanças:

```php
$routeParser = $this->routeParser; // injetado no controller

$urlContact = $routeParser->urlFor('contact');
```

Nas views, você pode receber o `routeParser` e gerar links como:

```php
<a href="<?= $routeParser->urlFor('home') ?>">Home</a>
```

---

## Contribuição

Contribuições são bem-vindas! Se quiser sugerir melhorias, abrir issues ou pull requests, siga os passos:

1. Fork este repositório
2. Crie uma branch para sua feature (`git checkout -b feature/nome-da-feature`)
3. Faça commits claros e organizados
4. Envie o pull request para revisão

---
