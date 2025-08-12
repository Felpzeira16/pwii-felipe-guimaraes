# pwii-felipe-guimaraes
Aulas de programação web II com os profs João Siles e Ricardo Palhares
Meu nome é felipe e tenho tranças legais. =)

# **Guia Completo de Instalação, Configuração e Gerenciamento no Laravel**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#guia-completo-de-instala%C3%A7%C3%A3o-configura%C3%A7%C3%A3o-e-gerenciamento-no-laravel)

O  **Laravel**  é um framework PHP poderoso para construção de aplicações modernas, que pode ser usado tanto como  **full stack**  quanto como  **backend de API**.  
Este guia cobre desde a  **instalação**  até a  **configuração**  e  **manutenção**  da aplicação.

----------

## **1. Requisitos e Instalação**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#1-requisitos-e-instala%C3%A7%C3%A3o)

Para começar, você precisa ter instalados:

-   **PHP**  (versão compatível)
    
-   **Composer**  (gerenciador de pacotes PHP)
    
-   **Instalador do Laravel**
    
-   **Node.js**  e  **NPM**  (ou Bundle) para recursos de front-end.
    

**Instalação rápida (PHP, Composer, Laravel Installer):**

/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"

Após instalar, reinicie o terminal.

**Instalar apenas o Laravel Installer (se já tiver PHP e Composer):**

composer global require laravel/installer

----------

## **2. Criando uma Aplicação Laravel**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#2-criando-uma-aplica%C3%A7%C3%A3o-laravel)

Para criar um novo projeto:

laravel new nome-do-app
cd nome-do-app
npm install && npm run build
composer run dev

O servidor de desenvolvimento será acessível em:  
`http://localhost:8000`

----------

## **3. Configuração Inicial**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#3-configura%C3%A7%C3%A3o-inicial)

Todos os arquivos de configuração ficam no diretório  `config`, bem documentados.  
Ajustes comuns:

-   **Banco de dados**
    
-   **Servidor de e-mail**
    
-   **URL da aplicação**
    
-   **Chave de criptografia**
    

O arquivo  **`.env`**  define variáveis específicas do ambiente (dev, produção etc.) e  **não deve ir para o repositório**.  
Para exemplos, use o  `.env.example`  com valores genéricos.

**Mudando banco de dados para MySQL:**

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Depois:

php artisan migrate

----------

## **4. Ferramentas de Desenvolvimento — Laravel Herd**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#4-ferramentas-de-desenvolvimento--laravel-herd)

O  **Laravel Herd**  é um ambiente pré-configurado com PHP, Nginx, Node, Composer e Laravel CLI, disponível para  **macOS**  e  **Windows**.

-   **macOS**: diretório padrão  `~/Herd`  acessível via domínio  `.test`.
    
-   **Windows**: diretório  `%USERPROFILE%\Herd`.
    

Criando app com Herd:

cd Herd
laravel new my-app
herd open

----------

## **5. Gerenciando Configurações**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#5-gerenciando-configura%C3%A7%C3%B5es)

### 📌 Comandos úteis:

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#-comandos-%C3%BAteis)

-   **Ver status do ambiente:**

php artisan about
php artisan about --only=environment

-   **Ver config de um arquivo específico:**

php artisan config:show database

### 📌 Variáveis de Ambiente

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#-vari%C3%A1veis-de-ambiente)

-   Booleanos:  `true`,  `(true)`,  `false`,  `(false)`
    
-   String vazia:  `empty`,  `(empty)`
    
-   Null:  `null`,  `(null)`
    
-   Valores com espaços: usar aspas  `"Meu App"`
    

----------

## **6. Acessando e Alterando Configs no Código**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#6-acessando-e-alterando-configs-no-c%C3%B3digo)

-   Ler:

config('app.timezone');
Config::get('app.timezone');

-   Alterar:

config(['app.timezone' => 'America/Chicago']);
Config::set('app.timezone', 'America/Chicago');

-   Métodos tipados:

Config::string('config-key');
Config::integer('config-key');
Config::boolean('config-key');

----------

## **7. Cache de Configuração**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#7-cache-de-configura%C3%A7%C3%A3o)

Para produção:

php artisan config:cache

Para limpar:

php artisan config:clear

----------

## **8. Segurança — Criptografando  `.env`**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#8-seguran%C3%A7a--criptografando-env)

-   Criptografar:

php artisan env:encrypt

-   Descriptografar:

php artisan env:decrypt

-   É possível usar  `--key`  para definir chave própria.

----------

## **9. Modo de Depuração**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#9-modo-de-depura%C3%A7%C3%A3o)

-   Controlado por  `APP_DEBUG`  no  `.env`.
    
-   Quando ativado, mostra detalhes completos de erros.
    

----------

## **10. Modo de Manutenção**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#10-modo-de-manuten%C3%A7%C3%A3o)

Ativar:

php artisan down

Desativar:

php artisan up

Opções:

-   `--refresh=15`  → autoatualiza a cada 15s.
    
-   `--retry=60`  → define tempo de espera no header.
    
-   `--secret="token"`  → permite acesso com token especial.
    
-   `--render="errors::503"`  → view personalizada.
    
-   `--redirect=/`  → redireciona usuários para rota específica.
    

----------

## **11. IDEs Recomendadas**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#11-ides-recomendadas)

-   **VS Code**  + extensão oficial Laravel
    
-   **PhpStorm**  + plugin Laravel Idea
    
-   **Laravel no Navegador**: Firebase Studio (sem instalação local)
    

----------

## **12. Próximos Passos**

[](https://github.com/AquilesJedi/pwii-aquiles-menezes/blob/main/README.md#12-pr%C3%B3ximos-passos)

-   Se usar Laravel como  **full stack**: estudar Blade, Inertia, Livewire, Vite, roteamento e Eloquent ORM.
    
-   Se usar como  **API backend**: aprender Laravel Sanctum, autenticação, filas, notificações e integração com apps front-end