# Buscador de Ceps

<img src="/assets/media/ezgif.com-video-to-gif.gif">

Este projeto consome a API ViaCep e foi desenvolvido utilizando tecnologias como Docker, WireUi, Vite e Tailwind CSS. O objetivo principal é fornecer um serviço para buscar informações de CEP, realizar o cadastro de endereços em um banco de dados MySQL e exibir os dados em uma tabela sem a necessidade de reload da página inteira. Desse modo trabalhamos de forma reativa, recarregando apenas os dados necessários.

## Tecnologias Utilizadas

- Docker
- Laravel
- Livewire
- WireUi
- Vite
- Tailwind Css
- MySQL

## Funcionalidades

- Busca de CEP: O sistema fornece um endpoint para buscar informações detalhadas de um determinado CEP, como rua, bairro, cidade e estado.
- Cadastro de Endereços: O sistema permite cadastrar endereços no banco de dados MySQL. Os dados necessários incluem CEP, rua, bairro, cidade e estado.
- O sistema também fornece uma lista de endereços cadastrados, com uma paginação de 4 endereços por página.

## Configuração e Execução

1. Pré-requisitos:
   Certifique-se de ter instalados em sua máquina:

- Docker
- Docker Compose

2. Clonar o repositório do projeto em sua máquina local.
3. Crie o arquivo .env e configure suas variaveis de ambiente:<br>
   ` cp .env.example .env`

   ```
   APP_NAME=api-cep
   FORWARD_DB_PORT=3307
   DB_CONNECTION=mysql
   DB_HOST=mysql
   DB_PORT=3306
   DB_DATABASE=api_cep
   DB_USERNAME=sail
   DB_PASSWORD=password


*Note que utilizei a porta 3307*
1. Instale as dependências do Composer:

   ```
   docker run --rm \\

   -u "\$(id -u):\$(id -g)" \\

   -v "\$(pwd):/var/www/html" \\

   -w /var/www/html \\`

   laravelsail/php82-composer:latest \\

   composer install --ignore-platform-reqs
   ```

2. Inicie os contêineres: <br>`sail up -d`.
3. Até aqui não geramos a key do arquivo .env, vamos fazer isso:<br>
   `sail artisan key:generate`

4. Instale o NPM:<br>
   `sail npm i`

5. Execute as migrations:<br>
   `sail artisan migrate`

Caso tenha algum erro nos arquivos do Vite ou Tailwind, siga este tutorial: [https://jobstreinamentos.com.br/support/knowledgebase.php?article=3](https://jobstreinamentos.com.br/support/knowledgebase.php?article=3)

## Contribuições

Contribuições são bem-vindas!

Se você deseja adicionar novos recursos, corrigir bugs ou melhorar a documentação, sinta-se à vontade para enviar uma solicitação de pull.

Licença

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).


