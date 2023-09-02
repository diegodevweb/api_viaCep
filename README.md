# Buscador de Ceps

Este projeto consome a API ViaCep e foi desenvolvido utilizando tecnologias como Docker, WireUi, Vite e Tailwind CSS. O objetivo principal é fornecer um serviço para buscar informações de CEP e realizar o cadastro de endereços em um banco de dados MySQL e exibir os dados em uma tabela sem a necessidade de reload da página inteira. Desse modo trabalhamos de forma reativa, recarregando apenas os dados necessários.

## Tecnologias Utilizadas

- Docker
- Livewire
- WireUi
- Vite
- Tailwind
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
3. Configurar o arquivo .env:
   Utilize o comando `docker-inspect` para poder acessar o ip address, copie e cole no host do arquivo .env para poder fazer conexão com um banco de dados externo).
4. Instale as dependências do Composer e NPM:

         docker run --rm \\

         -u "\$(id -u):\$(id -g)" \\

         -v "\$(pwd):/var/www/html" \\

         -w /var/www/html \\`

         laravelsail/php82-composer:latest \\

         composer install --ignore-platform-reqs

   
5. Inicie os contêineres: `sail up -d`.
6. Caso tenha algum erro nos arquivos do Vite ou Tailwind, siga este tutorial: [https://jobstreinamentos.com.br/support/knowledgebase.php?article=3](https://jobstreinamentos.com.br/support/knowledgebase.php?article=3)
7. Execute as migrações e seeds.
8. Acesse a aplicação no link exibido no terminal ([http://localhost:8000](http://localhost:8000/)).
   
## Contribuições
Contribuições são bem-vindas! 

Se você deseja adicionar novos recursos, corrigir bugs ou melhorar a documentação, sinta-se à vontade para enviar uma solicitação de pull.


Licença

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).

