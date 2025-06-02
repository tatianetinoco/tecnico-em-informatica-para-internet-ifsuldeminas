# Links, Âncoras e Listas no HTML

## **Links (Hiperligações)**

- **Definição**: Elementos que permitem a navegação entre páginas de um mesmo site (links internos) ou entre sites diferentes (links externos).

- **Tag utilizada**: `<a>` (anchor)

- **Atributos principais**:

    - `href`: Caminho do destino (relativo ou absoluto)

    - `title`: Texto alternativo exibido ao passar o mouse; importante para acessibilidade

    - `target`: Define como o link será aberto

        - `_blank`: Nova aba ou janela

        - `_self`: Mesma aba (padrão)

#### Exemplo:

```html
<!-- Link interno -->
<a href="contato.html" title="Entre em Contato">Clique aqui</a>

<!-- Link externo -->
<a href="https://www.ifsuldeminas.edu.br" target="_blank" title="Site do IF">Acesse o site</a>
```

## **Âncoras**

- Permitem a navegação dentro da mesma página, muito útil em páginas longas.
- Usa-se o atributo `id` para marcar seções e o `href="#id"` para navegar até elas.

#### Exemplo:

```html
<body id="topo">
  <nav>
    <a href="#home">Home</a>
    <a href="#contato">Contato</a>
  </nav>

  <section id="home">
    <h2>Home</h2>
  </section>

  <section id="contato">
    <h2>Contato</h2>
  </section>

  <a href="#topo">Voltar ao Topo</a>
</body>
```

## **Listas**

### Lista de Descrição

- `<dl>`: define a lista.

- `<dt>`: termo (item).

- `<dd>`: descrição.

#### Exemplo:
```html
<dl>
  <dt>Steve Jobs</dt>
  <dd>Fundador da Apple</dd>
</dl>
```

### Lista Ordenada 

- Usadas para representar elementos numerados.

- `<ol>` (Ordered List (lista ordenada)) - Define o início da lista ordenada.

- `<li>` (List Item (item da lista)) - Cada item da lista é envolvido por essa tag.

- Atributos:

    - `reversed`: lista em ordem decrescente.

    - `start="n"`: define o número inicial.

    - `value="n"`: define valor específico do item.

    - `type`: define o estilo de numeração (1, A, a, I, i).

#### Exemplo:

```html
<ol start="10">
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
</ol>

<ol reversed>
    <li>A</li>
    <li>B</li>
    <li>C</li>
</ol>

<ol type="i">
    <li>Primeiro</li>
    <li>Segundo</li>
    <li>Terceiro</li>
</ol>
```

- É possível ainda especificar um valor fixo para um determinado elemento da lista.
- Steve e Mark tem a mesma pontuação por isso ajustamos a numeração.

```html
<ol>
    <li> Bill Gates - Microsoft - 150 votos</li>
    <li> Steve Jobs - Apple - 145 votos</li>
    <li value="2"> Mark Zuckerberg - Facebook - 145 votos</li>
    <li> Larry Page, Sergey Brin - Google - 134 votos</li>
</ol>
```

### Lista Não Ordenada

- Usadas para itens sem ordem específica.

- Marcadores podem ser personalizados:

    - disc (padrão)

    - circle

    - square

    - none (sem marcador)

#### Exemplo:

```html
<ul style="list-style-type: square;">
  <li>Item A</li>
  <li>Item B</li>
</ul>
```

## Menus com Listas + CSS

Lista não ordenada estilizada para funcionar como menu horizontal.

```css
/* Arquivo CSS */
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #333;
    overflow: hidden;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    padding: 16px;
    text-decoration: none;
    text-align: center;
}

li a:hover {
    background-color: #111;
}
```  

```html
<!-- Arquivo HTML -->
 <ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="sobre.html">Sobre</a></li>
  <li><a href="contato.html">Contato</a></li>
</ul>
```
