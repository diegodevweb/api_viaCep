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
4. Inicie os contêineres:
   `docker-compose up -d` ou `sail up -d`.
5. Instale as dependências do Composer e NPM

   Caso tenha algum erro nos arquivos do Vite ou Tailwind, siga este tutorial: https://jobstreinamentos.com.br/support/knowledgebase.php?article=3
6. Execute as migrações e seeds.
7. Acesse a aplicação no link exibido no terminal (provavelmente será algo como: http://localhost:8000).

## Contribuição

Contribuições para este projeto são bem-vindas. Sinta-se à vontade para abrir problemas ou enviar solicitações de pull com melhorias, correções ou novos recursos.

## Licença

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).
