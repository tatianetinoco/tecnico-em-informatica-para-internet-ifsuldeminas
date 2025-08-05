# SQL – Comandos DDL e DML

## Comandos DDL

### CREATE TABLE

```sql
CREATE TABLE Cliente (
    Cod_Cli INT PRIMARY KEY,
    Nome VARCHAR(50) NOT NULL,
    Email VARCHAR(100),
    Telefone VARCHAR(15)
);
```
---

### ALTER TABLE (DDL)

#### Adicionar coluna

```sql
ALTER TABLE Cliente ADD Endereco VARCHAR(100);
```

#### Modificar tipo de coluna

```sql
ALTER TABLE Cliente MODIFY Email VARCHAR(150);
```

#### Remover coluna

```sql
ALTER TABLE Cliente DROP COLUMN Telefone;
```

#### Adicionar chave/constraint

```sql
ALTER TABLE Cliente ADD CONSTRAINT PK_Cliente PRIMARY KEY (Cod_Cli);
```

---

## Comandos DML

### INSERT – Inserir dados

```sql
INSERT INTO Cliente (Cod_Cli, Nome, Email, Telefone)
VALUES (1, 'Maria Silva', 'maria@email.com', '(31)99999-9999');
```

### UPDATE – Alterar dados existentes

```sql
UPDATE Cliente
SET Email = 'maria.silva@email.com'
WHERE Cod_Cli = 1;
```

### DELETE – Excluir dados

```sql
DELETE FROM Cliente
WHERE Cod_Cli = 1;
```

--- 
