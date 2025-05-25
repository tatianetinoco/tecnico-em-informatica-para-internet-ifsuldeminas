# Portugol Studio

## 1. O que é o Portugol?
Portugol é uma pseudo-linguagem de programação escrita em português, que simula uma linguagem real para fins de aprendizado.

Facilita o raciocínio lógico e a transição para outras linguagens, como C ou Java.

Substitui fluxogramas ou algoritmos em linguagem natural com uma estrutura mais próxima da programação real.

> Nome vem da junção de "Português" + "Algol" (uma linguagem dos anos 1950).

## 1.1 O que é o Portugol Studio?
Portugol Studio é o ambiente de desenvolvimento (IDE) gratuito onde escrevemos e executamos algoritmos em Portugol.

- Focado em iniciantes.

- Possui exemplos, ajuda interativa, suporte a jogos, bibliotecas gráficas, sons e mais.

> #### Pode ser usado:
>
> - 💻 [No PC (instalável)](https://lite.acad.univali.br/portugol-studio/) 
> - 🌐 [Online](https://portugol.dev/) 
> - 📱  [Mobile](https://play.google.com/store/apps/details?id=br.erickweil.portugolweb&hl=pt_BR&gl=US&pli=1) 
>

## 2. Portugol Studio como linguagem
Embora não seja uma linguagem de programação real, simula conceitos reais de programação:

- Sintaxe parecida com a linguagem C.

- Escrita em português, facilitando o aprendizado.

## 2.1 Sintaxe e Semântica
Usa palavras reservadas como `programa`, `funcao inicio()`, `escreva`, `leia`.

- Usa chaves `{}` para delimitar blocos de código (escopos).

- Suporta comentários com `//` (linha) e `/* ... */` (bloco).

- Possui compilador que verifica erros de sintaxe e lógica.

```js
programa {
    funcao inicio() {
        // código ...
    }
}
```

## 3. Tipos de Dados no Portugol
| **Tipo**  | **Descrição**                           | **Exemplo**             |
|-----------|-----------------------------------------|-------------------------|
| inteiro   | Números inteiros                        | `idade = 25`            |
| real      | Números com casas decimais              | `salario = 2500.75`     |
| caracter  | Um único símbolo ou letra               | `letra = 'A'`           |
| cadeia    | Texto ou sequência de caracteres        | `nome = "João"`         |
| logico    | Verdadeiro ou falso (verdadeiro, falso) | `aprovado = verdadeiro` |
|           |                                         |                         |   


## 4. Declaração de Variáveis e Constantes

- **Variáveis** armazenam **dados que podem mudar** durante a execução.

    - Sintaxe: `inteiro idade = 20` ou `real media = 7.5`

- **Constantes** são **valores fixos** definidos com const.

    - Sintaxe: `const real PI = 3.1416`

> Boas práticas: use nomes significativos e constantes em CAIXA ALTA.

## 5. Entrada e Saída de Dados
- `escreva(...)`: Mostra dados no console.

    - Ex: `escreva("Olá, mundo!");`

- `leia(...)`: Recebe dados do teclado.

    - Ex: `leia(idade);`

- `limpa()`: Limpa a tela do console.

> Quebra de linha: `\n` | Tabulação: `\t`


## 6 - Operadores Aritméticos
Aqui estão os operadores usados para fazer cálculos em algoritmos:

- **Soma**

    - Símbolo: `+`

    - Exemplo: `a + b`

- **Subtração**

    - Símbolo: `-`

    - Exemplo: `a - b`

- **Multiplicação**

    - Símbolo: `*`

    - Exemplo: `a * b`

- **Divisão**

    - Símbolo: `/`

    - Exemplo: `a / b`

- **Módulo (resto da divisão)**

    - Símbolo: `%`

    - Exemplo: `a % b`

> A prioridade dos operadores é respeitada como na Matemática. Parênteses podem mudar a ordem de execução.

## 7. Bibliotecas

Bibliotecas são conjuntos de funções prontas para resolver problemas comuns (como cálculos, manipulação de dados, etc).
Para usá-las, é necessário importá-las.

Exemplo: `inclua biblioteca Matematica`

## 8. Conclusão

Portugol Studio é uma ferramenta de aprendizado para iniciantes:

- Aproxima o aluno da lógica de programação.

- Permite experimentar e visualizar resultados rapidamente.

- Oferece uma base sólida para migrar para linguagens reais como C, Python, Java e outras.

