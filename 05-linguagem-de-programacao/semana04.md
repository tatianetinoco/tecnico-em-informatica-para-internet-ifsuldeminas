# Estruturas de Repetição

Em JavaScript, **estruturas de repetição**, ou *loops*, permitem executar um bloco de código várias vezes, com base em uma condição. O código é executado enquanto uma condição for verdadeira. Os principais tipos são `for`, `while`, `do...while`, `for...in` e `for...of`. Variáveis contadoras e acumuladoras são usadas para controlar e manipular dados dentro dos loops. 

## Variáveis de Controle

### Variável Contadora

Utilizada para contar o número de iterações.

```js
let contador = 0;
contador++; // ou contador += 1
```

### Variável Acumuladora

Utilizada para somar ou multiplicar valores durante o loop.

```js
let total = 0;
total += 5; // total = total + 5
```

Outras formas de incremento/decremento:

- `variavel++` / `variavel--` (incremento/decremento de 1)

- `variavel += n` / `variavel -= n` (incremento/decremento de um valor específico n) 

## Estrutura `for`

Usado quando se sabe o número de repetições. Possui inicialização, condição e incremento/decremento. 

**Sintaxe:**

```js
for (inicialização; condição; incremento) {
  // código a ser repetido
}
```

**Exemplo: Contar de 1 a 10**

```js
for (let i = 1; i <= 10; i++) {
  document.write("<p>" + i + "</p>");
}
```

## Estrutura `while`

Executa o bloco de código enquanto a condição for verdadeira. A condição é testada antes da execução do bloco. 

**Sintaxe:**

```js
let i = 1;
while (i <= 10) {
  document.write("<p>" + i + "</p>");
  i++;
}
```

## Estrutura `do...while`

Executa o bloco de código pelo menos uma vez e depois verifica a condição. A condição é testada após a execução do bloco. 

**Sintaxe:**

```js
let i = 1;
do {
  document.write("<p>" + i + "</p>");
  i++;
} while (i <= 10);
```

## Estrutura `for...in` – **Para objetos**

Percorre as propriedades de um objeto. 

```js
let pessoa = { nome: "Maria", idade: 25, cidade: "BH" };
for (let chave in pessoa) {
  console.log(pessoa[chave]); // exibe os valores
}
```
Embora o `for...in` possa ser usado para iterar sobre arrays, é mais comum usar `for` ou `for...of`, pois eles fornecem um controle mais preciso sobre os índices e valores. 

## Estrutura `for...of` – **Para arrays, strings e outros iteráveis**

Percorre os valores de objetos iteráveis (como arrays).

```js
let numeros = [10, 20, 30, 40];
for (let valor of numeros) {
  console.log(valor);
}
```

### 📋 Resumo Final

| Estrutura   | Quando Usar                                    | Executa ao menos uma vez?  |
|-------------|------------------------------------------------|----------------------------|
| `for`       | Quando se sabe o número de repetições          | ❌                         |
| `while`     | Quando a condição deve ser testada antes       | ❌                         |
| `do...while`| Quando o bloco precisa ser executado ao menos uma vez | ✅                  |
| `for...in`  | Para percorrer propriedades de objetos         | ❌                         |
| `for...of`  | Para percorrer valores de arrays, strings, etc.| ❌                         |
