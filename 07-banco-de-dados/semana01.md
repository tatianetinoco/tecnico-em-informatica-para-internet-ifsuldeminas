# Introdução a Banco de Dados (BD)

## Conceito de Banco de Dados

Um **Banco de Dados (BD)** é uma coleção organizada de dados relacionados que representam uma parte do mundo real, também chamada de minimundo. Ele permite que múltiplos usuários acessem e compartilhem informações de forma controlada, segura e eficiente.

---

## Problemas de Sistemas sem Banco de Dados (Sistema de Arquivos)

Sistemas baseados em arquivos costumam apresentar várias limitações, como:

- **Redundância de dados**: mesma informação armazenada em diferentes locais.

- **Inconsistência de dados**: divergência nos valores de uma mesma informação.

- **Dificuldade de acesso e recuperação**: consultas complexas e pouco flexíveis.

- **Falta de segurança e controle de acesso**: qualquer usuário pode alterar os dados sem restrições.

- **Baixa tolerância a falhas**: riscos elevados em caso de queda de energia, falhas de hardware, etc.

- **Gerenciamento ineficiente da concorrência**: conflitos ao acessar ou modificar dados simultaneamente.

---

## Vantagens do Uso de Banco de Dados

O uso de bancos de dados traz diversos benefícios:

- Maior rapidez e eficiência no acesso às informações.

- Redução da redundância e aumento da integridade dos dados.

- Controle de acesso baseado em perfis de usuário.

- Segurança aprimorada e tolerância a falhas.

- Possibilidade de integração entre dados distribuídos.

---

##  SGBD – Sistema Gerenciador de Banco de Dados

Um **SGBD** é um conjunto de programas responsáveis por criar, manter e gerenciar um banco de dados. Suas principais funções incluem:

- Criação e modificação de estruturas (como tabelas e esquemas).

- Controle de acesso e permissões de usuários.

- Otimização de consultas e melhoria de desempenho.

- Gerenciamento de backup e recuperação em caso de falhas.

O objetivo principal do SGBD é abstrair os detalhes físicos do armazenamento, oferecendo ao usuário uma visão lógica dos dados.

---

## Classificação de Bancos de Dados

Os bancos de dados podem ser classificados de acordo com o modelo de dados adotado:

- **Modelo Relacional**: organiza os dados em tabelas (relacionamentos) compostas por linhas e colunas. É o modelo mais amplamente utilizado.

- **Modelo Orientado a Objetos**: incorpora conceitos da programação orientada a objetos.

---

## Projeto de Banco de Dados

O desenvolvimento de um banco de dados passa por várias etapas:

- **Levantamento de Requisitos** – coleta de informações com os usuários e definição das necessidades do sistema.

- **Modelagem Conceitual** – criação de um modelo abstrato usando o Modelo Entidade-Relacionamento (ER).

- **Modelagem Lógica** – transformação do modelo conceitual em um modelo lógico, geralmente relacional.

- **Modelagem Física** – implementação no SGBD escolhido, com definição de tipos de dados, índices, particionamento, etc.

---

## Modelo Entidade-Relacionamento (ER)

O modelo ER é utilizado para representar o mundo real de forma estruturada:

- **Entidades**: objetos ou conceitos (ex: Aluno, Curso).

- **Atributos**: características das entidades (ex: nome, matrícula).

- **Relacionamentos**: associações entre entidades (ex: Aluno cursa Curso).

O modelo ER é essencial para criar diagramas que facilitam o desenvolvimento lógico e físico do banco de dados.

---

## Conclusão

O uso de um SGBD bem projetado é fundamental para o desenvolvimento de sistemas confiáveis, seguros e com dados consistentes.

A modelagem de dados é uma etapa crítica e deve ser feita antes da implementação de qualquer sistema que dependa de armazenamento e gerenciamento de informações.
