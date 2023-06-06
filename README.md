# Projeto de API de Busca de CEP e Cadastro de Endereços

Este projeto é uma API desenvolvida utilizando tecnologias como Docker, WireUi, Vite e Tailwind CSS. O objetivo principal é fornecer um serviço para buscar informações de CEP e realizar o cadastro de endereços em um banco de dados MySQL.

## Tecnologias Utilizadas

- Docker: O Docker é uma plataforma de virtualização que permite empacotar e executar aplicativos em contêineres. Ele foi utilizado neste projeto para facilitar a configuração e execução do ambiente de desenvolvimento.

- WireUi: WireUi é uma biblioteca que oferece uma interface de usuário moderna e elegante para projetos baseados em Laravel Livewire. Neste projeto, o WireUi foi utilizado para aprimorar a experiência de desenvolvimento e fornecer componentes interativos.

- Vite: Vite é um construtor de aplicações web ultrarrápido e leve. Ele substitui o webpack em projetos menores e fornece uma experiência de desenvolvimento ágil. O Vite foi utilizado neste projeto para melhorar a velocidade de compilação e o recarregamento durante o desenvolvimento.

- Tailwind CSS: Tailwind CSS é uma biblioteca de classes utilitárias de CSS altamente configurável. Ele permite a criação de estilos personalizados de forma rápida e flexível. O Tailwind CSS foi utilizado neste projeto para estilizar e criar a interface da API.

- MySQL: O MySQL é um sistema de gerenciamento de banco de dados relacional amplamente utilizado. Ele foi escolhido como o banco de dados para armazenar os endereços cadastrados nesta API.

## Funcionalidades

- Busca de CEP: A API fornece um endpoint para buscar informações detalhadas de um determinado CEP, como rua, bairro, cidade e estado.

- Cadastro de Endereços: A API permite cadastrar endereços no banco de dados MySQL. Os dados necessários incluem CEP, rua, bairro, cidade e estado.

## Configuração e Execução

1. Certifique-se de ter o Docker instalado em sua máquina.

2. Clone este repositório e acesse o diretório do projeto.

3. Execute o comando `docker-compose up` para construir e executar os contêineres Docker necessários.

4. Aguarde até que todos os contêineres sejam iniciados e o ambiente esteja pronto.

5. Acesse a API através da URL e porta especificadas pela documentação.

## Contribuição

Contribuições para este projeto são bem-vindas. Sinta-se à vontade para abrir problemas ou enviar solicitações de pull com melhorias, correções ou novos recursos.

## Licença

Este projeto está licenciado sob a [Licença MIT](https://opensource.org/licenses/MIT).