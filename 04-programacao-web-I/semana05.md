# 1. Box Model: Espaçamento entre elementos

O modelo de caixa (box-model) é fundamental para entender o posicionamento e o espaço que os elementos ocupam na página.

**Componentes principais:**

- **Margin**: Espaço externo do elemento.

- **Padding**: Espaço interno entre o conteúdo e a borda do elemento.

- **Border**: Borda em volta do padding.

### **Formas de uso das margens (margin):**

```css
/* Sentido horário: topo, direita, base, esquerda */
margin: 10px 20px 5px 15px; 

/* Topo e base: 10px, esquerda e direita: 15px */
margin: 10px 15px;

/* Padding uniforme */
padding: 20px;
```

## **2. Tamanho dos Elementos**

- `width`: Largura.

- `height`: Altura.

**Valores possíveis:**

- `auto`: O navegador calcula automaticamente.

- `px`, `%`: Medidas em pixel ou porcentagem.

- `inherit`: Herda o valor do elemento pai.

**Limites de tamanho:**

- `max-width`, `min-width`: Largura máxima e mínima.

- `max-height`, `min-height`: Altura máxima e mínima.

#### Exemplo:
```css
div {
  width: 50%;
  height: auto;
  max-width: 800px;
  min-height: 200px;
}
```

## 3. **Propriedade `display`**

Controla o modo como os elementos são exibidos na página.

| Valor         | Descrição                                                                                   |
|---------------|---------------------------------------------------------------------------------------------|
| `inline`      | Não quebra linha. Ignora `width` e `height`.                                                |
| `block`       | Quebra linha. Ocupa 100% da largura do elemento pai.                                        |
| `inline-block`| Comporta-se como `inline`, mas permite controle de `width` e `height`.                      |
| `table`       | O elemento se comporta como uma tabela HTML.                                                |
| `grid`        | Cria um layout em grade (linhas e colunas).                                                 |
| `none`        | Oculta o elemento e ele não ocupa espaço no layout.                                         |


## 4. **Propriedade `visibility`**

Controla a visibilidade do elemento:

- `visible`: Padrão, o conteúdo é exibido.

- `hidden`: O conteúdo não aparece, mas ainda ocupa espaço.

## **5. Propriedade `position`**

Define como um elemento é posicionado na página, com base no fluxo do documento ou em relação a outros elementos.

| Valor       | Descrição                                                                                                                                               |
|-------------|---------------------------------------------------------------------------------------------------------------------------------------------------------|
| `static`    | Padrão. O elemento segue o fluxo normal do documento. Propriedades `top`, `right`, `bottom` e `left` não têm efeito.                                   |
| `relative`  | Posicionado em relação à sua posição original. Pode ser deslocado com `top`, `right`, `bottom` e `left`, sem alterar o layout ao redor.                |
| `absolute`  | Sai do fluxo normal. Posicionado em relação ao ancestral mais próximo com `position` definido ou ao `body` se nenhum ancestral for encontrado.         |
| `fixed`     | Fica fixo em relação à janela do navegador. Não se move com a rolagem da página.                                                                       |
| `sticky`    | Mistura de `relative` e `fixed`. O elemento rola normalmente até atingir uma posição, onde passa a se comportar como `fixed`.                          |

#### Exemplo:

```css
.box {
  position: absolute;
  top: 10px;
  left: 20px;
}
```

## 6. **Texto sobre Imagens**

Utiliza-se `position: absolute` dentro de um container com `position: relative`.

```html
<!-- HTML -->
<div class="container">
  <img src="imagem.jpg">
  <div class="topleft">Topo Esquerda</div>
  <div class="center">Centralizado</div>
</div>

<!-- CSS -->
<style>
.container { position: relative; }
.topleft { position: absolute; top: 8px; left: 16px; }
.center { position: absolute; top: 50%; left: 0; width: 100%; text-align: center; }
img { width: 100%; height: auto; opacity: 0.3; }
</style>
```

## 7. **Recorte de Imagens (clip-path)**

Permite mostrar apenas parte da imagem com formas geométricas.

**Tipos:**
- `inset(...)`: retângulo com recorte interno.

- `circle(...)`: recorte circular.

- `ellipse(...)`: recorte elíptico.

- `polygon(...)`: recorte em forma livre.

#### Exemplo:

```css
.clip-circle {
  clip-path: circle(60px at center);
}
```

```html
<img class="clip-circle" src="imagem.jpg" width="200" height="280">
```

## **Ferramentas úteis:**

- **clippy**: https://bennettfeely.com/clippy/

- **css-tricks**: https://css-tricks.com/clipping-masking-css/

