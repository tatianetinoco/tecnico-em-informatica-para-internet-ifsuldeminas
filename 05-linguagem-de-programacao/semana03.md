# Estruturas de Decisão

As **estruturas de decisão** controlam o fluxo do programa com base em condições. Elas permitem que diferentes blocos de código sejam executados conforme determinados valores, ações ou estados.

#### Exemplo de lógica cotidiana:

```txt
Se eu tirei 10 na prova → Sou aprovado
Senão → Reprovado
```

#### Em JavaScript:

- `if` representa o "**se**".

- `else` representa o "**senão**".

- `else if` representa "**senão, se**".

- `switch` representa "**escolha entre várias opções**".

## Estrutura `if`, `else` e `else if`

#### Sintaxe:
```js
if (condicao) {
  // Bloco executado se a condição for verdadeira
} else {
  // Bloco executado se a condição for falsa
}
```

- `if `:

A estrutura `if` permite executar um bloco de código se uma condição for verdadeira. Se a condição for falsa, o bloco de código dentro do `if` é ignorado.

```js
let preco = 101;
if (preco > 100) {
  console.log("Desconto liberado");
}
```

- `if` com `else`:

A estrutura `if` com `else` permite executar um de dois blocos de código, dependendo do resultado da condição. Se a condição for **verdadeira**, o bloco do `if` é executado.
Se for **falsa**, o bloco do `else` será executado.

```js
let preco = 50;
if (preco > 100) {
  console.log("Desconto liberado");
} else {
  console.log("Nenhum desconto foi liberado"); // Saída: Nenhum desconto foi liberado
}
```

- `if` com `else if`:

Permite testar várias condições em sequência. O primeiro bloco com condição **verdadeira** será executado; os demais serão ignorados.

```js
let preco = 75;
if (preco > 100) {
  console.log("Desconto de 10%");
} else if (preco > 50) {
  console.log("Desconto de 5%"); // Saída: Desconto de 5%
} else {
  console.log("Nenhum desconto foi liberado");
}
```

## Operador Ternário (`? :`)

É uma forma compacta de escrever um `if`/`else` em uma única linha.
Muito útil para atribuições rápidas ou saídas simples.

#### Sintaxe:
```js
condição ? valorSeVerdadeiro : valorSeFalso
```

```js
let preco = 90;
let resultado = preco > 100 ? "Desconto de 10%" : "Sem desconto";
console.log(resultado);
```

## Operador `&&` como `if` reduzido

Executa o código à direita apenas se a condição for verdadeira.

```js
let preco = 120;

preco > 100 && console.log("Desconto liberado"); // Saída: Desconto liberado
```

## Estrutura `switch` `case`
A estrutura `switch` avalia uma expressão e compara com diferentes valores (`case`). Se houver correspondência, executa o bloco correspondente. Útil quando temos várias opções fixas para comparar, como menus, dias da semana, status, etc.

```js
let dia = "segunda";

switch (dia) {
  case "segunda":
    console.log("Início da semana"); // Saída: Início da semana
    break;
  case "sexta":
    console.log("Fim da semana");
    break;
  default:
    console.log("Dia comum");
    break;
}
```
#### Funcionamento:

- A expressão dentro de `switch` é comparada com os valores de `case`.

- Se houver correspondência, o código daquele `case` é executado.

- O `break` interrompe a execução após encontrar o caso correspondente.

- O `default` é usado quando nenhum dos `case` é compatível (opcional, mas recomendado).

## Operadores de Comparação

| **Operador** | **Exemplo**     | **Significado**                          |
|--------------|------------------|------------------------------------------|
| `==`         | `5 == '5'`       | Igual (compara apenas o valor)           |
| `!=`         | `5 != 3`         | Diferente (compara apenas o valor)       |
| `===`        | `5 === '5'`      | Igual (valor e tipo)                     |
| `!==`        | `5 !== '5'`      | Diferente (valor ou tipo)                |
| `>`          | `10 > 5`         | Maior que                                |
| `<`          | `3 < 8`          | Menor que                                |
| `>=`         | `7 >= 7`         | Maior ou igual                           |
| `<=`         | `4 <= 5`         | Menor ou igual                           |


## Operadores Lógicos

| **Operador** | **Nome Lógico**  | **Significado**                                                   | **Exemplo**         |
|--------------|------------------|-------------------------------------------------------------------|----------------------|
| `&&`         | AND              | Retorna `true` se **todas** as condições forem verdadeiras        | `cond1 && cond2`     |
| `\|\|`       | OR               | Retorna `true` se **pelo menos uma** das condições for verdadeira | `cond1 `\|\|` cond2`     |
| `!`          | NOT              | Inverte o valor lógico da condição (`true` ↔ `false`)             | `!condicao`          |


#### Exemplos:

```js
// && (E lógico – AND)
let idade = 20;
let possuiCarteira = true;

if (idade >= 18 && possuiCarteira) {
  console.log("Pode dirigir");
} else {
  console.log("Não pode dirigir");
}
```

```js
// || (OU lógico – OR)
let dia = "domingo";

if (dia === "sábado" || dia === "domingo") {
  console.log("É fim de semana!");
} else {
  console.log("É dia útil");
}
```

```js
// ! (Negação – NOT)
let estaChovendo = false;

if (!estaChovendo) {
  console.log("Vou sair para caminhar");
} else {
  console.log("Vou ficar em casa");
}
```

```js
// Exemplo com &&, || e !
let temIngresso = true;
let idade = 16;
let acompanhado = true;

if (temIngresso && (idade >= 18 || acompanhado)) {
  console.log("Entrada permitida");
} else {
  console.log("Entrada negada");
}
```
