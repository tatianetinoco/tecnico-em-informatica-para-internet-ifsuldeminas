# SQL – DDL (Data Definition Language)

A Linguagem de Definição de Dados (DDL) em SQL é usada para criar e gerenciar a estrutura de um banco de dados relacional. Ela define como os dados são organizados, incluindo a criação e modificação de tabelas, colunas, restrições e outros objetos do banco de dados. 

---

## O que é SQL?

SQL (Structured Query Language) é uma linguagem padronizada para manipular bancos de dados relacionais. Ela é baseada em álgebra e cálculo relacional e é amplamente utilizada em sistemas de gerenciamento de bancos de dados (SGBDs) como MySQL, PostgreSQL e Oracle. 

---

## Componentes da SQL

- **DDL (Data Definition Language)**: Define a estrutura do banco (tabelas, chaves, domínios).

- **DML (Data Manipulation Language)**: Manipula dados (ex.: INSERT, UPDATE, SELECT).

- **DCL (Data Control Language)**: Gerencia permissões (ex.: GRANT, REVOKE).

- **DTL (Data Transaction Language)**: Controla transações (ex.: COMMIT, ROLLBACK).

- **DQL (Data Query Language)**: Realiza consultas (ex.: SELECT).

---

## Comandos DDL

Alguns dos principais comandos DDL são: 

- **CREATE DATABASE**: Cria um banco de dados. Exemplo:

```sql
CREATE DATABASE Escola;
```

- **DROP DATABASE**: Remove um banco de dados existente. Exemplo:

```sql
DROP DATABASE Escola;
```

- **CREATE TABLE**: Define uma nova tabela com suas colunas e restrições. Exemplo:

```sql
CREATE TABLE Alunos (
    Num_Matricula INT PRIMARY KEY,
    Nome VARCHAR(40),
    Data_Nascimento DATE
);
```

- **DROP TABLE**: Remove uma tabela. Exemplo: 

```sql
DROP TABLE Alunos;
```

- **ALTER TABLE**: Modifica a estrutura de uma tabela (adiciona/remova colunas ou restrições). Exemplo:

```sql
ALTER TABLE Alunos ADD Email VARCHAR(50);
```

---

## Tipos de Dados

Os tipos de dados em SQL definem o formato e o tamanho dos valores que podem ser armazenados em uma coluna. Alguns tipos de dados comuns incluem: 

- `CHAR(n)`: String de tamanho fixo com até 'n' caracteres. 
- `VARCHAR(n)`: String de tamanho variável com até 'n' caracteres.
- `INT`: Número inteiro. 
- `SMALLINT`: Número inteiro menor.
- `NUMERIC(p,d)`: Número decimal com precisão total 'p' e 'd' casas decimais.
- `REAL` / `DOUBLE PRECISION`: Números de ponto flutuante.
- `DATE`: Data (ano, mês e dia).
- `TIME`: Hora (hora, minuto e segundo).

---

## Domínios 

Os domínios são definidos para criar tipos de dados personalizados, permitindo a reutilização e padronização de tipos de dados em diferentes tabelas. Exemplo:

```sql
CREATE DOMAIN Nome_Aluno VARCHAR(40) NOT NULL DEFAULT 'Desconhecido';
```
- Usado em colunas para consistência:

```sql
CREATE TABLE Alunos (
    Num_Matricula INT PRIMARY KEY,
    Nome Nome_Aluno
);
```
---

## Chaves e Restrições

- **Chave Primária** (`PRIMARY KEY`): 

Identifica exclusivamente cada linha de uma tabela. Não pode conter valores nulos e garante que cada registro seja único. Exemplo: `Num_Matricula` em uma tabela de alunos.

- **Chave Estrangeira** (`FOREIGN KEY`): 

Estabelece um relacionamento entre duas tabelas, fazendo referência à chave primária de outra tabela. Pode incluir ações como `CASCADE` (propaga a ação), `SET NULL` (define como nulo) ou `RESTRICT` (impede a ação) em caso de deleções ou atualizações. 

- `UNIQUE`: Garante que valores sejam únicos em uma coluna (além da chave primária).

- `CONSTRAINT`: Permite nomear e declarar restrições como:

```sql
CONSTRAINT PK_TABELA PRIMARY KEY (coluna)
CONSTRAINT FK_TABELA FOREIGN KEY (coluna) REFERENCES OutraTabela(coluna)
```

--- 

## ALTER TABLE

Usado para alterar estrutura da tabela existente. 

Adicionar colunas:

```sql
ALTER TABLE TABELA ADD nova_coluna DATE;
```

Adicionar/Remover chaves:

```sql
ALTER TABLE TABELA ADD FOREIGN KEY (...);
ALTER TABLE TABELA DROP PRIMARY KEY;
```

---

## Boas Práticas

- **Ordem de Criação**: Domínios → Tabelas → Restrições → Índices → Visões.

- **Nomenclatura**: Utilize nomes curtos, descritivos e iniciados por letras.

- **NULL**: Representa ausência de valor, não "vazio" ou zero.

- **Testes**: Valide a estrutura com dados de teste antes de implementar

--- 

## Exemplo

```sql
-- Criar Banco
CREATE DATABASE Escola;
USE Escola;

-- Criar Domínio
CREATE DOMAIN Nome_Aluno VARCHAR(40) NOT NULL;

-- Criar Tabela Cursos
CREATE TABLE Cursos (
    Cod_Curso INT PRIMARY KEY,
    Nome VARCHAR(50) NOT NULL UNIQUE
);

-- Criar Tabela Alunos
CREATE TABLE Alunos (
    Num_Matricula INT PRIMARY KEY,
    Nome Nome_Aluno,
    Data_Nascimento DATE,
    Cod_Curso INT,
    CONSTRAINT FK_Aluno_Curso FOREIGN KEY (Cod_Curso)
        REFERENCES Cursos(Cod_Curso)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);

-- Alterar Tabela para adicionar coluna Email
ALTER TABLE Alunos ADD Email VARCHAR(50);
```

---

## Conclusão

A **DDL** é a base para estruturar bancos de dados relacionais, definindo tabelas, tipos de dados, chaves e restrições. Ela transforma o modelo lógico em uma implementação física no SGBD, garantindo integridade, organização e escalabilidade.
