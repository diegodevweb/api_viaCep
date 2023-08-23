# Buscador de Ceps - Consumindo API

Este projeto consome a API ViaCep e foi desenvolvido utilizando tecnologias como Docker, WireUi, Vite e Tailwind CSS. O objetivo principal é fornecer um serviço para buscar informações de CEP e realizar o cadastro de endereços em um banco de dados MySQL e exibir os dados em uma tabela sem a necessidade de reload da página inteira. Desse modo trabalhamos de forma reativa, recarregando apenas os dados necessários.

## Tecnologias Utilizadas


- Docker: O Docker é uma plataforma de virtualização que permite empacotar e executar aplicativos em contêineres. Ele foi utilizado neste projeto para facilitar a configuração e execução do ambiente de desenvolvimento.

- Livewire: O Livewire é uma biblioteca do Laravel que permite criar interfaces de usuário dinâmicas, interativas e baseadas em componentes sem a necessidade de escrever JavaScript. A principal ideia por trás do Livewire é permitir criar interações de frontend usando os recursos familiares do Laravel, como componentes, modelos, validações e eventos, tudo isso sem sair do contexto do PHP.

- WireUi: WireUi é uma biblioteca que oferece uma interface de usuário moderna e elegante para projetos baseados em Laravel Livewire. Neste projeto, o WireUi foi utilizado para aprimorar a experiência de desenvolvimento e fornecer componentes interativos.

- Vite: Vite é um construtor de aplicações web ultrarrápido e leve. Ele substitui o webpack em projetos menores e fornece uma experiência de desenvolvimento ágil. O Vite foi utilizado neste projeto para melhorar a velocidade de compilação e o recarregamento durante o desenvolvimento.

- Tailwind CSS: Tailwind CSS é uma biblioteca de classes utilitárias de CSS altamente configurável. Ele permite a criação de estilos personalizados de forma rápida e flexível. O Tailwind CSS foi utilizado neste projeto para estilizar e criar a interface da API.

- MySQL: O MySQL é um sistema de gerenciamento de banco de dados relacional amplamente utilizado. Ele foi escolhido como o banco de dados para armazenar os endereços cadastrados nesta API.

## Funcionalidades

- Busca de CEP: A API fornece um endpoint para buscar informações detalhadas de um determinado CEP, como rua, bairro, cidade e estado.

- Cadastro de Endereços: A API permite cadastrar endereços no banco de dados MySQL. Os dados necessários incluem CEP, rua, bairro, cidade e estado.

- A API também fornece uma lista de endereços cadastrados, com uma paginação de 4 endereços por página.

## Configuração e Execução

1. Pré-requisitos:
Certifique-se de ter instalados em sua máquina:

    Docker
    Docker Compose

2. Clonar o repositório do projeto em sua máquina local.

3. Configurar o arquivo .env (utilize o comando docker-inspect para poder acessar o ip address, copie e cole no host do arquivo .env para poder fazer conexão com um banco de dados externo).

4. Inicie os contêineres (docker-compose up -d ou sail up -d).

5. Instale as dependências do Composer e NPM

   Caso tenha algum erro nos arquivos do Vite ou Tailwind, siga este tutorial: https://jobstreinamentos.com.br/support/knowledgebase.php?article=3

6. Execute as migrações e seeds.

7. Acesse a aplicação no link exibido no terminal (provavelmente será algo como: http://localhost:8000).


## Contribuição

Contribuições para este projeto são bem-vindas. Sinta-se à vontade para abrir problemas ou enviar solicitações de pull com melhorias, correções ou novos recursos.

## Licença

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).