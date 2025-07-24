# PHP – Funções

## O que são Funções?

**Funções** são blocos de código que executam tarefas específicas. Elas ajudam a organizar, reutilizar e modularizar o código.

- Podem retornar um valor ou não retornar nada.

- São declaradas com a palavra-chave `function`.

#### Sintaxe:

```php
function nomeDaFuncao(parâmetro1, parâmetro2, ...) {
    // bloco de código
    return valor; // (opcional)
}
``` 

#### Exemplo:
```php
function soma($a, $b) {
  return $a + $b;
}

echo soma(5, 7); // 12
```

## Tipos de Funções

### Funções sem parâmetro

```php
function olaMundo() {
    echo "Olá, mundo";
}

olaMundo();
```

### Funções com parâmetro

```php
function saudacao($nome) {
  return "Olá, $nome!";
}

echo saudacao("Maria");
```

### Funções Anônimas (Closures)

```php
$multiplicacao = function($a, $b) {
  return $a * $b;
};

echo $multiplicacao(5, 7); // 35
```

### Funções Recursivas

```php
function fatorial($n) {
  if ($n == 0) {
    return 1;
  } else {
    return $n * fatorial($n - 1);
  }
}

echo fatorial(5); // 120
```

### Funções de Callback

```php
function executar_operacao($operacao, $a, $b) {
  return $operacao($a, $b);
}

function soma($x, $y) {
  return $x + $y;
}

echo executar_operacao('soma', 5, 7); // 12
```

### Funções do PHP

```php
strlen("texto");         // Retorna o tamanho da string
array_sum([1, 2, 3]);    // Soma os valores do array
strtoupper("php");       // Converte para maiúsculas
```

## Diferença entre Função e Método

| Termo   | Definição                                              |
|---------|--------------------------------------------------------|
| Função  | Declarada fora de classes/objetos                     |
| Método  | Função declarada dentro de uma classe/objeto (POO)    |

## Parâmetros vs Argumentos

| Termo       | Significado                                           |
|-------------|--------------------------------------------------------|
| Parâmetro   | Variável usada na definição da função                  |
| Argumento   | Valor real passado para a função na hora da chamada    |
