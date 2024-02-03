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
3. Crie o arquivo .env <br>
   ` cp .env.example .env`
4. Configure suas variaveis de ambiente:<br>
   ```
   APP_NAME=api-cep
   FORWARD_DB_PORT=3307
   DB_CONNECTION=mysql
   DB_HOST=mysql
   DB_PORT=3306
   DB_DATABASE=api_cep
   DB_USERNAME=sail
   DB_PASSWORD=
   ``` 

*Note que utilizei a porta 3307*

1. Inicie os contêineres: <br>`docker-compose up -d`.
2. Verifique os contêineres em execução: <br>`docker ps`.
3. Pegue o id do conteiner do Laravel Sail, a imagem deste conteiner deve ser sail-8.2/app:<br>
4. Execute o comando para entrar no conteiner:<br>
   `docker exec -it <id_do_conteiner> bash`
5. Dentro do conteiner, execute o comando para instalar as dependências do Laravel:<br>
   `composer install`
6. Conecte o banco de dados com as informacoes do arquivo .env<br>
7. Acesse novamente o container do app Laravel e rode o comando:<br>
   `php artisan key:generate`
8. Execute as migrations:<br>
   `php artisan migrate`
9. Instale o NPM:<br>
   `npm install`
10. Rode o comando npm run dev para compilar os arquivos do Vite e Tailwind:<br>
   `npm run dev`
11. Abra o navegador e acesse o endereço: (http://laravel.test) ou (http://localhost)

Caso tenha algum erro nos arquivos do Vite ou Tailwind, siga este tutorial: [https://jobstreinamentos.com.br/support/knowledgebase.php?article=3](https://jobstreinamentos.com.br/support/knowledgebase.php?article=3)

## Autores:
Diego Rodrigues @diegodevwebb
## Contribuições

Contribuições são bem-vindas!

Se você deseja adicionar novos recursos, corrigir bugs ou melhorar a documentação, sinta-se à vontade para enviar uma solicitação de pull.

Licença

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).


