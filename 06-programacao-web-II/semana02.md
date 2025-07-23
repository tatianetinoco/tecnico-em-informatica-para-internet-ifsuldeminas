# PHP – Estruturas de Controle

## Estruturas Condicionais

### `if`, `else` e `elseif`

Executam blocos de código com base em condições lógicas.

```php
$a = 10;
$b = 20;

if ($a > $b) {
    echo "a é maior que b";
} elseif ($a < $b) {
    echo "a é menor que b";
} else {
    echo "a é igual a b";
}
```

### `switch`

Avalia uma variável e executa o caso correspondente.

```php
$dia = "Monday";

switch ($dia) {
    case "Monday":
        echo "Segunda";
        break;
    case "Tuesday":
        echo "Terça";
        break;
    default:
        echo "Outro dia";
}
```

### `match` (PHP 8+)

Mais conciso que o `switch`, retorna diretamente um valor.

```php
$num = 3;

$letra = match($num) {
    1 => "A",
    2 => "B",
    3 => "C",
    default => "Letra não encontrada",
};

echo $letra; // C
```

### Operador Ternário

Forma curta do `if-else`.

```php
$idade = 20;
$maior = ($idade >= 18) ? true : false;
```

## Estruturas de Repetição

### `for`

Ideal quando se sabe o número de repetições.

```php
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
```

#### Exemplo com banco de dados:

```php
$pdo = new PDO("mysql:host=localhost;dbname=nome_banco", "usuario", "senha");
$stmt = $pdo->prepare("SELECT * FROM pessoas");
$stmt->execute();

for ($i = 0; $i < $stmt->rowCount(); $i++) {
    $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $pessoa['nome'] . "<br>";
}
```

### `while`

Executa enquanto a condição for verdadeira.

```php
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}
```
#### Exemplo com banco de dados:

```php
$conn = new PDO("mysql:host=localhost;dbname=nome_banco", "usuario", "senha");
$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->fetchAll();

$count = 0;
while ($count < count($result)) {
    echo $result[$count]['nome'] . "<br>";
    $count++;
}
```

### `do-while`

Garante pelo menos uma execução.

```php
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);
```

### `foreach`

Percorre arrays ou objetos.

```php
$numeros = [1, 2, 3];
foreach ($numeros as $n) {
    echo $n;
}
```

#### Exemplo com banco de dados:

```php
$pdo = new PDO("mysql:host=localhost;dbname=nome_banco", "usuario", "senha");
$stmt = $pdo->prepare("SELECT * FROM clientes");
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($clientes as $cliente) {
    echo "Nome: " . $cliente['nome'] . " - Email: " . $cliente['email'] . "<br>";
}
```

## Comandos e Recursos de Controle de Fluxo

### Saltos de Controle:
`break`: encerra o loop atual.

`continue`: pula para a próxima iteração do loop.

`return`: retorna um valor e encerra uma função.

`exit`: encerra a execução do script.

### Exceções:
`try`, `catch`, `throw`: utilizados para tratamento de erros.

### Inclusão de arquivos:
`include`, `require`, `include_once`, `require_once`: permitem reutilizar código externo.

### Outras declarações:
`function`, `class`, `interface`, `trait`, `declare`: estruturas da linguagem para modularização e organização de código.





