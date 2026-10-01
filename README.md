# Aulas de Programação e Aplicação Mobile com o professor João Siles

---

# Instalação do Laravel!

Antes de criar seu primeiro aplicativo Laravel, certifique-se de que sua máquina local tenha **PHP, Composer e o instalador do Laravel** instalados.

Além disso, você deve instalar o **Node.js e o NPM** para poder compilar os recursos de front-end do seu aplicativo.

## 1 - Instalação do PHP, Composer e Laravel

### Executar como administrador

Abra o **PowerShell como administrador** e execute:

```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

Se você já possui o **PHP e o Composer** instalados, pode instalar o instalador do Laravel através do Composer:

```bash
composer global require laravel/installer
```

---

## 2 - Criando o aplicativo Laravel

Após instalar o PHP, o Composer e o instalador do Laravel, você estará pronto para criar uma nova aplicação Laravel.

```bash
laravel new example-app
```

Depois que o aplicativo for criado, entre na pasta do projeto:

```bash
cd example-app
```

Instale as dependências do Node.js:

```bash
npm install
```

Compile os recursos de front-end:

```bash
npm run build
```

E inicie o servidor de desenvolvimento do Laravel:

```bash
composer run dev
```

---

## 3 - Configuração do arquivo `.env`

Dentro da pasta do projeto existe um arquivo chamado:

```text
.env.example
```

Faça uma cópia desse arquivo e renomeie a cópia para:

```text
.env
```

O arquivo `.env` contém as configurações específicas do ambiente, como informações de banco de dados e outras variáveis utilizadas pela aplicação.

---

## 4 - Criar a chave da aplicação

Para gerar a chave de criptografia do Laravel, execute:

```bash
php artisan key:generate
```

Esse comando irá gerar automaticamente uma chave no arquivo `.env`:

```text
APP_KEY=
```

---

## 5 - Criar as tabelas do banco de dados

Para executar as migrations e criar as tabelas do banco de dados configurado no arquivo `.env`, utilize:

```bash
php artisan migrate
```

---

## 6 - Iniciar o Laravel

Para iniciar o ambiente de desenvolvimento do Laravel:

```bash
composer run dev
```

Após iniciar, o Laravel ficará disponível no endereço informado pelo terminal, normalmente:

```text
http://localhost:8000
```

---

# 1 - Express.js

## Como criar e iniciar um projeto Express

### 1. Gerar o projeto

Todo projeto Express começa com o **Node.js** instalado.

Primeiro, crie uma pasta para o projeto e entre nela:

```bash
mkdir meu-projeto
cd meu-projeto
```

Depois, inicialize o gerenciador de pacotes:

```bash
npm init -y
```

O comando `npm init -y` cria o arquivo:

```text
package.json
```

Esse arquivo identifica o projeto como um projeto Node.js e lista as dependências utilizadas.

---

### 2. Instalar as dependências

Instale as bibliotecas que o projeto irá utilizar:

```bash
npm install express mysql2 dotenv
```

Cada biblioteca possui uma função específica:

- **express**: utilizado para criar as rotas e estruturar a API.
- **mysql2**: utilizado para realizar a conexão com um banco de dados MySQL.
- **dotenv**: utilizado para carregar variáveis de ambiente, como senhas e configurações, a partir do arquivo `.env`.

Também é possível instalar o **nodemon** como dependência de desenvolvimento:

```bash
npm install --save-dev nodemon
```

O `nodemon` reinicia automaticamente o servidor sempre que algum arquivo do projeto é alterado.

---

## 3. Abrir o projeto no editor

Abra a pasta do projeto no seu editor de código, por exemplo, o **VS Code**.

Diferente de projetos Java, não existe uma etapa de build obrigatória. As bibliotecas ficam disponíveis na pasta:

```text
node_modules
```

Essa pasta é criada automaticamente quando executamos:

```bash
npm install
```

Uma organização comum para um projeto Express é:

```text
meu-projeto/
│
├── node_modules/
├── src/
│   ├── config/
│   │   └── # conexão com o banco
│   │
│   ├── controllers/
│   │   └── # lógica de cada rota
│   │
│   ├── routes/
│   │   └── # definição das rotas
│   │
│   └── server.js
│
├── .env
├── package.json
└── package-lock.json
```

---

## 4. Iniciar a aplicação

O Express precisa de um ponto de partida. Normalmente, utilizamos o arquivo:

```text
server.js
```

Nesse arquivo, o código será responsável por:

- criar a aplicação utilizando `express()`;
- definir as rotas que a API irá responder;
- configurar os recursos utilizados pela aplicação;
- chamar `app.listen(PORT)`;
- iniciar o servidor e deixá-lo escutando requisições.

Por padrão, podemos utilizar:

```text
http://localhost:3000
```

---

## 5. Configurar o Nodemon

No arquivo `package.json`, adicione o script:

```json
"scripts": {
    "dev": "nodemon src/server.js"
}
```

Depois, execute no terminal:

```bash
npm run dev
```

Quando o terminal mostrar uma mensagem semelhante a:

```text
Servidor rodando na porta 3000
```

a aplicação estará no ar e pronta para receber requisições.

---

# Resumo dos principais comandos

## Laravel

Criar projeto:

```bash
laravel new example-app
```

Entrar na pasta:

```bash
cd example-app
```

Instalar dependências:

```bash
npm install
```

Compilar o front-end:

```bash
npm run build
```

Gerar chave da aplicação:

```bash
php artisan key:generate
```

Executar migrations:

```bash
php artisan migrate
```

Iniciar o servidor:

```bash
composer run dev
```

---

## Express.js

Criar pasta:

```bash
mkdir meu-projeto
cd meu-projeto
```

Inicializar projeto:

```bash
npm init -y
```

Instalar dependências:

```bash
npm install express mysql2 dotenv
```

Instalar Nodemon:

```bash
npm install --save-dev nodemon
```

Iniciar o projeto:

```bash
npm run dev
```
