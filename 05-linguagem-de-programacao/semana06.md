# Funções e Eventos

**Eventos** são ações ou ocorrências que podem ser detectadas para executar uma resposta. Um manipulador de eventos (event handler) é uma função que é executada quando um evento ocorre. Em JavaScript, é comum controlar eventos diretamente pelo código, sem auxílio de ferramentas gráficas. 

Eventos podem ser acionados em diversos elementos HTML, como botões, inputs, divs, imagens, etc.

### Eventos Comuns:

| Evento        | Descrição                                        |
|---------------|--------------------------------------------------|
| `onClick`     | Ao clicar em um elemento                         |
| `onChange`    | Quando o valor de um input é alterado            |
| `onFocus`     | Quando um campo recebe o foco                    |
| `onBlur`      | Quando um campo perde o foco                     |
| `onKeyPress`  | Quando uma tecla é pressionada                   |
| `onMouseOver` | Quando o mouse passa sobre um elemento           |
| `onMouseOut`  | Quando o mouse sai de um elemento                |
| `onLoad`      | Quando a página ou elemento termina de carregar  |
| `onSubmit`    | Quando um formulário é enviado                   |

Lista: [Eventos HTML DOM – W3Schools](https://www.w3schools.com/js/js_events.asp)


## Como funcionam os eventos?

Eventos funcionam como **gatilhos** que podem ser "ouvidos" por um listener e tratados por um handler. Por exemplo, em um aeroporto, o sinal de pista livre é um evento, e a decolagem, o handler. 

### Tipos de ações que podem disparar eventos:
- Clique do mouse.
- Passar o mouse.
- Pressionar teclas.
- Enviar formulários.
- Finalizar carregamento da página.
- Redimensionar a janela.
- Reproduzir mídia.

#### Exemplo:

#### HTML

```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Funções e Eventos</title>
</head>
<body>
  <button>Mudar Cor</button>
  <script src="eventos.js"></script>
</body>
</html>
``` 

#### JavaScript (eventos.js)

```js
var botao = document.querySelector('button');

function aleatoria(limite) {
  return Math.floor(Math.random() * (limite + 1));
}

botao.onclick = function() {
  var corAleatoria = 'rgb(' 
    + aleatoria(255) + ',' 
    + aleatoria(255) + ',' 
    + aleatoria(255) + ')';
  
  document.body.style.backgroundColor = corAleatoria;
}
```
Neste exemplo, o evento de clique (`onclick`) dispara uma função que altera a cor de fundo da página para uma cor aleatória. 

### Sintaxe com `addEventListener()`

A forma recomendada para registrar eventos é usar o método `addEventListener()`: 

```js
elemento.addEventListener('evento', função, useCapture);
```

### Parâmetros de `addEventListener()`

| Parâmetro    | Descrição                                                                             |
|--------------|---------------------------------------------------------------------------------------|
| `elemento`   | Elemento DOM que receberá o evento.                                                   |
| `evento`     | Nome do evento sem o prefixo `on` (ex: `'click'`, `'mousemove'`).                     |
| `função`     | A função que será executada quando o evento ocorrer.                                  |
| `useCapture` | *(Opcional)* Se verdadeiro, executa na fase de captura do evento (default é `false`). |


#### Exemplo com `addEventListener()`

```html
<p id="msg1">Passe seu mouse aqui!</p>
<br>
<p id="msg2">Passe seu mouse aqui!</p>
<script src="eventos2.js"></script>
```

#### JavaScript (eventos2.js)

```js
var msgA = document.querySelector('#msg1');
var msgB = document.querySelector('#msg2');

msgA.addEventListener('mousemove', (e) => {
  msgA.innerHTML = "Ops!";
  msgB.innerHTML = "É aqui que você tem que passar o mouse!";
  console.log(e.target.id);
});

msgB.addEventListener('mousemove', (e) => {
  msgA.innerHTML = "É aqui que você tem que passar o mouse!";
  msgB.innerHTML = "Ops!";
  console.log(e.target.id);
});
```
Neste exemplo, o texto se alterna entre as mensagens *"Ops!"* e *"É aqui que você tem que passar o mouse!"* quando o usuário move o mouse entre os elementos com `id="msg1"` e `id="msg2"`. O `console.log` imprime o `ID` do elemento acionado. 

**Observação**: Quando usar `addEventListener`, não use o prefixo `on` (Exemplo: use `click`, não `onclick`).


## Resumo
Eventos em JavaScript permitem que páginas reajam dinamicamente à interação do usuário. São amplamente usados com funções (event handlers) que são executadas quando algo acontece. 
