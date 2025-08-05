# SQL – Comando SELECT

O comando `SELECT` é utilizado para consultar e extrair dados de uma ou mais tabelas no banco de dados.

#### Sintaxe Básica

```sql
SELECT coluna1, coluna2, ...
FROM tabela
[WHERE condição];
```
- `SELECT`: Define as colunas que serão exibidas.
- `FROM`: Especifica a tabela onde os dados estão armazenados.
- `WHERE` (*opcional*): Aplica filtros para restringir os resultados.

---

## Seleção de Colunas

### Selecionar todas as colunas:

```sql
SELECT * FROM Alunos;
```

### Selecionar colunas específicas:

```sql
SELECT id_aluno, nome FROM Alunos;
```

### Alterar a ordem de exibição:

```sql
SELECT nome, id_aluno FROM Alunos;
```

A ordem no `SELECT` define a exibição das colunas.

---

## Cabeçalhos e Aliases (`AS`)

Permite renomear colunas ou expressões para cabeçalhos mais amigáveis. O comportamento do cabeçalho (maiúsculas, alinhamento) varia por SGBD. Exemplo:

```sql
SELECT nome AS "Nome do Aluno" FROM Alunos;
```

---

## Concatenação de Colunas (`CONCAT`)

A função `CONCAT` permite unir textos de diferentes colunas:

```sql
SELECT CONCAT(nome, ' - ', email) AS "Informações de Contato"
FROM Alunos;
```

*Resultado*: Ex.: "Maria - maria@email.com".

---

## Cláusula `WHERE`

A cláusula `WHERE` é usada para filtrar registros com base em condições. Alguns operadores comuns:

- **Comparação**: `=`, `>`, `<`, `>=`, `<=`, `<>` (diferente).

- **Intervalo**: `BETWEEN valor1 AND valor2`.

- **Padrão**: `LIKE '%texto%'`.

- **Lista**: `IN (valor1, valor2, ...)`.

Exemplo – Filtro por ID:

```sql
SELECT nome, email
FROM Alunos
WHERE id_aluno = 1;
```

Exemplo – Filtro com LIKE:

```sql
SELECT Nome
FROM Alunos
WHERE Nome LIKE 'M%';
```
Retorna nomes começando com "M" (ex.: Maria, Marcos).

---

## ORDER BY

A cláusula `ORDER BY` permite ordenar os resultados de forma crescente (`ASC`) ou decrescente (`DESC`):

```sql
SELECT Nome
FROM Alunos
ORDER BY Nome ASC;
```

---

## Boas Práticas

- **Evite `SELECT *`**: Use apenas as colunas necessárias, especialmente em tabelas grandes.

- **Use aliases descritivos**: Torna os resultados mais fáceis de entender.

---

## Conclusão

O comando `SELECT` é o fundamento das consultas SQL, permitindo:

- Selecionar colunas específicas ou todas.

- Filtrar registros com `WHERE`.

- Ordenar resultados com `ORDER BY`.

- Personalizar saídas com `AS` e `CONCAT`.

---
