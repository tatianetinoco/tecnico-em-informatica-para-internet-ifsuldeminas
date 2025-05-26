# Estruturas de Repetição e Funções

## Estruturas de Repetição

As estruturas de repetição são utilizadas para executar um bloco de comandos várias vezes, seja por um número definido ou indefinido de vezes, até que uma condição lógica seja satisfeita.

**Tipos de laços (ou comandos de repetição):**

### ENQUANTO (pré-testado)

- Avalia a condição antes de executar os comandos.

- Repete enquanto a condição for verdadeira.

- Usado quando não se sabe quantas vezes será necessário repetir.

**Sintaxe:**
```js
enquanto (condição) {
    // comandos
}
```

### FACA - ENQUANTO (pós-testado)

- Executa os comandos pelo menos uma vez, depois testa a condição.

- Ideal quando é necessário fazer uma entrada de dados antes da validação.

**Sintaxe:**
```js
faca {
    // comandos
} enquanto (condição)
```

## PARA (com variável de controle)

- Usado quando se sabe o número exato de repetições.

- Inclui automaticamente inicialização, condição e incremento.

**Sintaxe:**
```js
para (contador = 1; contador <= 10; contador++) {
    // comandos
}
```

## Funções em Portugol

Funções são blocos de código reutilizáveis que executam uma tarefa específica. Elas ajudam a organizar, simplificar e reaproveitar código.

### Funções predefinidas:

- `inicio()` → ponto de partida do programa.

- `escreva(...)` → mostra texto na tela.

- `leia(...)` → lê dados do teclado.

- `limpa()` → limpa o console.

#### Vantagens de usar funções:

- Evita repetição de código.

- Organiza melhor o programa.

- Torna o código mais modular e legível.

### Funções criadas pelo programador:

**Sintaxe:**
```js
funcao tipo nome(parametros) {
    // corpo da função
    retorne valor
}
```

#### **Componentes:**

- **funcao** → palavra-chave para declarar uma função

- **tipo** → tipo de retorno (ex: inteiro, real, logico, caractere ou vazio)

- **nome** → nome da função

- **parâmetros** → (opcional) variáveis de entrada, separadas por vírgulas

- **corpo** → bloco de comandos

- **retorne** → comando que devolve um valor


#### **Tipos de passagem de parâmetros:**

- **Por valor**: apenas uma cópia do valor é enviada.

- **Por referência**: a própria variável é alterada (usa & antes do nome).


## Resumo Final

- **PARA** → Quando sabe quantas vezes irá repetir
- **ENQUANTO** → repete enquanto a condição for verdadeira (teste antes)
- **FACA-ENQUANTO**	→ garante pelo menos uma execução (teste depois)
- **Funções** → Para dividir e organizar o código, reutilizar lógica
