# 📘 PHP - Fundamentos

## História do PHP

- Criado em **1995** por **Rasmus Lerdorf**.

- Evoluiu para uma **linguagem completa** de programação voltada ao desenvolvimento de aplicações **web dinâmicas**.

- É uma **linguagem interpretada**: não requer compilação.

- Executada no **servidor**, enviando HTML como resposta ao navegador.

- Altamente compatível com bancos de dados como **MySQL**, **PostgreSQL**, **Oracle**, entre outros.

- Conta com uma **grande comunidade**, ampla documentação e diversos frameworks populares: **Laravel**, **Symfony**, **CodeIgniter**, etc.

## Comunicação Cliente x Servidor na Web

- **Cliente**: navegador do usuário (Chrome, Firefox...).

- **Servidor**: onde os arquivos do site estão hospedados.

- Comunicação ocorre por meio do protocolo **HTTP**.

### Tipos de páginas:
- **Estáticas**: conteúdo fixo (HTML, CSS).

- **Dinâmicas**: conteúdo gerado em tempo real (PHP, Python, etc).

### Importante:
A comunicação é **stateless**: o servidor não mantém estado entre requisições, a menos que se use cookies ou sessões.

##  Preparando o Ambiente PHP

### Servidor Embutido

- A partir do PHP 5.4, existe um servidor local embutido:

```bash
php -S localhost:8000
```

- Útil para testes e desenvolvimento. Não recomendado para produção.

### Instalação do PHP

- **Windows**: baixar em php.net, adicionar ao PATH.
- **Linux**: `sudo apt-get install php`
- **MacOS**: usar Homebrew (`brew install php`)
- É necessário configurar o PHP para funcionar com servidores como Apache ou Nginx.

### Ambientes Integrados

- Soluções completas:

    - **XAMPP**, **WAMP**, **LAMP**

    - Incluem Apache, MySQL, PHP e phpMyAdmin.

### Interpretes Online

Plataformas online para testar código sem instalação:

- Replit https://replit.com/

- PHP Sandbox https://onlinephp.io/

- PHP Tester https://phptester.net/

## Delimitadores, Comentários e Instruções

Delimitadores:
```php
<?php
// Código aqui
?>
```

Comentários:
```php
# Comentário de uma linha
// Comentário de uma linha
/* Comentário de múltiplas linhas */
```

Final de instrução:
- Usar ponto e vírgula `;` para encerrar comandos.

## Tipos de Dados

| Tipo     | Exemplo                                 | Descrição                                 |
|----------|-----------------------------------------|-------------------------------------------|
| Inteiro  | `$idade = 30;`                          | Números inteiros, positivos ou negativos  |
| Float    | `$preco = 99.90;`                       | Números decimais                          |
| String   | `$nome = "Maria";`                      | Sequência de caracteres                   |
| Boolean  | `$ativo = true;`                        | Verdadeiro (`true`) ou falso (`false`)    |
| Array    | `$frutas = ["maçã", "banana"];`         | Conjunto de valores indexados             |
| Objeto   | `$pessoa = new Pessoa();`               | Instância de uma classe                   |
| Recurso  | `$db = new PDO(...);`                   | Referência a recursos externos (ex: BD)   |
| Null     | `$var = null;`                          | Variável sem valor                        |

- **PHP** é tipado dinamicamente: o tipo se adapta ao valor da variável.

## Caracteres Especiais e Quebras de Linha

- `\n`: nova linha

- `\t`: tabulação

```php
echo "Linha 1\nLinha 2";
```

## Comandos de Saída

| Comando     | Exemplo                            | Descrição                                                        |
|-------------|------------------------------------|------------------------------------------------------------------|
| `echo`      | `echo "Olá Mundo!";`               | Imprime uma ou mais strings. Rápido e comum.                     |
| `print`     | `print "Olá!";`                    | Similar ao `echo`, mas retorna 1 (pode ser usado em expressões). |
| `printf`    | `printf("Valor: %d", 100);`        | Imprime string com formatação (placeholders).                    |
| `print_r`   | `print_r($array);`                 | Exibe arrays e objetos de forma legível.                         |
| `var_dump`  | `var_dump($variavel);`             | Mostra tipo e valor da variável com detalhes.                    |

```php
echo "Olá Mundo!";
print "Olá!";
printf("Total: %.2f", 120.5);
var_dump($array);
```

## Comandos de Entrada

- No terminal: 

```php
$name = fgets(STDIN);
```

- Em formulários:

```php
$_GET['nome']
$_POST['nome']
$_REQUEST['nome']
```

- Com validação:

```php
filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);
```

- Outra opção:

```php
$nome = readline("Digite seu nome: ");
```

`readline()` é uma função que lê uma linha de texto digitada pelo usuário no console e a retorna como uma `string`. 

## Concatenação de Strings:

```php
$greeting = "Hello";
$name = "Maria";
$greeting .= ", " . $name; // Resultado: "Hello, Maria"
```

## Integração HTML + CSS + JS + PHP

| Linguagem      | Função                                       |
|----------------|----------------------------------------------|
| **HTML**       | Define a estrutura e o conteúdo da página.   |
| **CSS**        | Controla o estilo e a aparência visual.      |
| **JavaScript** | Adiciona interatividade no lado do cliente.  |
| **PHP**        | Lógica e processamento no servidor.          |

#### Exemplo:

Um botão HTML aciona um script JavaScript que faz uma requisição PHP para exibir a data atual. O rodapé usa PHP para mostrar o ano atual com `echo date("Y")`.

## Resumo 

- PHP é uma linguagem gratuita, open-source e amplamente usada para criar aplicações web dinâmicas.

- Roda no lado do servidor, interagindo com HTML, bancos de dados e outras tecnologias.

- Fácil de instalar e configurar com ferramentas como XAMPP, WAMP, ou diretamente pelo terminal.

- Suporta múltiplos tipos de dados, é dinamicamente tipada e bem documentada.

- Com HTML/CSS/JS, oferece uma base robusta para o desenvolvimento de sites completos e interativos.

<br><br>

# 📘 PHP – Variáveis e Constantes

## Introdução às Variáveis

Variáveis em PHP são declaradas com o símbolo `$` seguido do nome da variável. O nome deve começar com uma letra ou sublinhado (`_`) e pode conter letras, números e underlines. **PHP** é uma linguagem de tipagem dinâmica, ou seja, o tipo da variável é definido automaticamente conforme o valor atribuído.

Exemplos:
```php
$nome = "Maria";
$idade = 25;
$eh_estudante = true;
$nota = 3.5;
$soma = $a + $b;
```

## Tipos de Variáveis

- String: `$nome = "Lucas"`;

- Integer: `$idade = 25`;

- Float: `$preco = 12.5`;

- Boolean: `$ativo = true`;

- Array: `$frutas = ["maçã", "banana"]`;

- Object: `$carro = new Car()`;

- Null: `$valor = NULL`;


## Variáveis String

Strings podem ser definidas com aspas simples (`' '`) ou aspas duplas (`" "`).

- **Aspas simples**: texto literal (não interpreta variáveis nem caracteres especiais).

- **Aspas duplas**: interpreta variáveis e caracteres como `\n`, `\t`, etc.

**Principais funções de manipulação de strings:**


| Função           | Exemplo                          | Descrição                                         |
|------------------|----------------------------------|---------------------------------------------------|
| `strlen()`       | `strlen($s);`                    | Retorna o comprimento da string                   |
| `substr()`       | `substr($s, 0, 5);`              | Retorna uma parte da string                       |
| `str_replace()`  | `str_replace("a", "b", $s);`     | Substitui ocorrências de um valor por outro       |
| `strpos()`       | `strpos($s, "m");`               | Retorna a posição da primeira ocorrência          |
| `strtoupper()`   | `strtoupper($s);`                | Converte a string para letras maiúsculas          |
| `strtolower()`   | `strtolower($s);`                | Converte a string para letras minúsculas          |
| `trim()`         | `trim($s);`                      | Remove espaços em branco do início e do fim       |
| `explode()`      | `explode(",", $s);`              | Divide a string em um array com base no separador |


## Variáveis Numéricas

Tipos principais:

- **Integer**: números inteiros (ex: 25)

- **Float**: números com ponto flutuante (ex: 12.5)

- **Double**: como float, mas com maior precisão.

**Algumas Funções:**

| Função        | Exemplo             | Descrição                                        |
|---------------|---------------------|--------------------------------------------------|
| `abs()`       | `abs(-5);`          | Retorna o valor absoluto                         |
| `ceil()`      | `ceil(4.6);`        | Arredonda para cima                              |
| `floor()`     | `floor(4.6);`       | Arredonda para baixo                             |
| `round()`     | `round(4.6);`       | Arredonda para o inteiro mais próximo            |
| `max()`       | `max([1,2,3]);`     | Retorna o maior valor de um array                |
| `min()`       | `min([1,2,3]);`     | Retorna o menor valor de um array                |
| `rand()`      | `rand(1, 10);`      | Gera um número aleatório entre 1 e 10            |
| `sqrt()`      | `sqrt(9);`          | Retorna a raiz quadrada                          |


## Booleanos

Os valores booleanos são `true` ou `false`, e são muito usados em estruturas de controle.

```php
if ($numero % 2 == 0) {
  echo "Par";
} else {
  echo "Ímpar";
}
```

### Verificação de tipos:

```php
is_bool(true);      // true
is_int(5);          // true
is_float(5.5);      // true
is_numeric("10");   // true
empty(0);           // true
isset($var);        // true, se $var estiver definida
is_array($arr);     // true, se for array
```

## Arrays

### Tipos de arrays:

- Indexado (com índices numéricos):

```php
$frutas = ["maçã", "banana"];
```

- Associativo (com chaves nomeadas):

```php
$pessoa = ["nome" => "Maria", "idade" => 22];
```

**Algumas Funções para arrays:**

```php
count($arr);             // Conta elementos
sort($arr);              // Ordena array
array_push($arr, "uva"); // Adiciona ao final
array_pop($arr);         // Remove último
array_shift($arr);       // Remove primeiro
in_array("uva", $arr);   // Verifica se existe no array
array_keys($arr);        // Retorna as chaves
array_values($arr);      // Retorna os valores
```

## NULL

`NULL` representa a ausência de valor.

```php
$var = NULL;
```

## Verificação de Tipos

A função `gettype()` retorna uma string que representa o tipo da variável passada como parâmetro.

```php
$mensagem = "Olá mundo";
echo gettype($mensagem); // string

$num = 5;
echo gettype($num); // integer
```

## Escopo das Variáveis

| Escopo   | Descrição                                          | 
|----------|----------------------------------------------------|
|Global    | Declarada fora de funções, acessível no script.    |
|Local     | Declarada dentro de funções, acessível apenas ali. | 
|Static	   | Mantém valor entre chamadas de função.             | 

Exemplo de variável estática:

```php
function contar() {
  static $contador = 0;
  $contador++;
  echo $contador;
}
```

## Variáveis de Variáveis

```php
$a = 'nome';
$nome = 'Maria';
echo $$a; // Imprime Maria
```

## Variáveis de Ambiente

| Variável        | Descrição                                                             |
|------------------|----------------------------------------------------------------------|
| `$_SERVER`       | Informações do servidor e ambiente de execução                       |
| `$_GET`          | Dados enviados via URL (método GET)                                  |
| `$_POST`         | Dados enviados via formulário (método POST)                          |
| `$_REQUEST`      | Combinação de `$_GET`, `$_POST` e `$_COOKIE`                         |
| `$_COOKIE`       | Dados armazenados no navegador do cliente                            |
| `$_SESSION`      | Dados da sessão atual do usuário                                     |
| `$_FILES`        | Informações sobre arquivos enviados via formulário                   |
| `$_ENV`          | Variáveis de ambiente do sistema operacional                         |


## Constantes

As constantes são valores imutáveis definidos com `define()` ou `const`.

```php
define("PI", 3.14);
const URL = "https://exemplo.com";
```

## Resumo
PHP permite grande flexibilidade no uso de variáveis, oferecendo:

- Tipagem dinâmica

- Estruturas compostas (arrays e objetos)

- Diversas funções nativas

- Escopos variados

- Suporte a variáveis globais, locais, estáticas e de ambiente

<br><br>

# 📘 PHP – Operadores

## Operadores Aritméticos

| Operador | Função            | Exemplo                  | Resultado |
|----------|-------------------|--------------------------|-----------|
| `+`      | Adição            | `$resultado = 5 + 3;`    | `8`       |
| `-`      | Subtração         | `$resultado = 5 - 3;`    | `2`       |
| `*`      | Multiplicação     | `$resultado = 5 * 3;`    | `15`      |
| `/`      | Divisão           | `$resultado = 10 / 2;`   | `5`       |
| `%`      | Módulo (resto)    | `$resultado = 10 % 3;`   | `1`       |
| `**`     | Exponenciação     | `$resultado = 2 ** 3;`   | `8`       |


## Operadores de Atribuição

Permitem definir e atualizar valores de variáveis:

```php
$num = 5;
$num += 10; // $num = 15
$num -= 2;  // $num = 13
$num *= 2;  // $num = 26
$num /= 2;  // $num = 13
$num %= 4;  // $num = 1
$num **= 3; // $num = 1
```

## Operadores de Comparação (Relacionais)

| Operador | Significado                      | Exemplo         | Retorno                                  |
|----------|----------------------------------|-----------------|------------------------------------------|
| `==`     | Igualdade de valor               | `$a == $b`      | `true` se valores forem iguais           |
| `===`    | Igualdade de valor e tipo        | `$a === $b`     | `true` se valores e tipos forem iguais   |
| `!=`     | Diferente                        | `$a != $b`      | `true` se valores forem diferentes       |
| `!==`    | Valor ou tipo diferente          | `$a !== $b`     | `true` se valor ou tipo forem diferentes |
| `>`      | Maior que                        | `$a > $b`       | `true` se `$a` for maior que `$b`        |
| `<`      | Menor que                        | `$a < $b`       | `true` se `$a` for menor que `$b`        |
| `>=`     | Maior ou igual                   | `$a >= $b`      | `true` se `$a` for maior ou igual a `$b` |
| `<=`     | Menor ou igual                   | `$a <= $b`      | `true` se `$a` for menor ou igual a `$b` |


## Operadores Lógicos

Combinam expressões booleanas.

| Operador | Nome          | Exemplo        | Resultado                                   |
|----------|---------------|----------------|---------------------------------------------|
| `&&`     | **E** lógico  | `$a && $b`     | `true` se ambos forem verdadeiros           |
| `\|\|`   | **OU** lógico | `$a \|\| $b`   | `true` se ao menos um for verdadeiro        |
| `!`      | **NÃO**       | `!$a`          | Inverte o valor booleano (`true` → `false`) |


## Operadores de Incremento e Decremento

- `++` (incremento): adiciona 1 ao valor de uma variável.
- `--` (decremento): subtrai 1 do valor de uma variável.

```php
$a = 5;
$a++;  // Pós-incremento
++$a;  // Pré-incremento

$b = 5;
$b--;  // Pós-decremento
--$b;  // Pré-decremento
```

## Operador de Concatenação de Strings (`.`)

```php
$string1 = "Olá";
$string2 = " Mundo!";
echo $string1 . $string2; // Resultado: "Olá Mundo!"
```

## Operadores com Arrays


| Operador   | Função                                  | Exemplo                   | Descrição                                                                       |
|------------|-----------------------------------------|---------------------------|---------------------------------------------------------------------------------|
| `+`        | União de arrays                         | `$arr3 = $arr1 + $arr2`   | Combina arrays, mantendo os valores do primeiro array em caso de chave repetida |
| `==`       | Igualdade de elementos e chaves         | `$arr1 == $arr2`          | `true` se os arrays tiverem os mesmos pares chave/valor, sem considerar a ordem |
| `===`      | Igualdade de elementos, chaves e tipos  | `$arr1 === $arr2`         | `true` se forem exatamente iguais em ordem, chaves, valores e tipos             |
| `!=`       | Diferença                               | `$arr1 != $arr2`          | `true` se forem diferentes em valores ou chaves                                 |
| `!==`      | Diferença total                         | `$arr1 !== $arr2`         | `true` se diferirem em valor, chave **ou tipo**                                 |


## Operador Ternário

Sintaxe: `(condição) ? valor_se_verdadeiro : valor_se_falso;`

```php
$idade = 20;
$status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
```

## Operadores de Escopo

### Operador de escopo de classes (`::`)

Usado para acessar variáveis estáticas e métodos estáticos de uma classe. Ele é usado para
acessar esses membros sem precisar instanciar a classe

```php
class Exemplo {
    public static $msg = "Olá!";
}
echo Exemplo::$msg;
```

### Operador de escopo de objetos (`->`) 

Usado para acessar variáveis de instância e métodos de instância de um objeto. 

```php
$obj = new Exemplo();
echo $obj->msg;
```

## Operadores de Erro e Exceção

### Suprimir erro com `@`:

```php
@unlink("arquivo.txt");
```

### Tratamento de exceções com `try/catch`:

```php
try {
    $file = fopen("arquivo.txt", "r");
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
```

## Conclusão

Os operadores em PHP são essenciais para:

- Realizar cálculos

- Comparar valores

- Controlar o fluxo de lógica

- Trabalhar com strings e arrays

- Lidar com objetos e escopos

- Tratar exceções e suprimir erros

