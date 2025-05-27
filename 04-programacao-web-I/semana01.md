# Conceitos Básicos

## Tipos de sites:

- **Site (ou Sítio):**
  - Estrutura principal e hierárquica de páginas organizadas sob um domínio. Pode conter diversas seções como “Sobre”, “Serviços”, “Contato” etc.

- **Portal:**
  - Site voltado para um público amplo ou específico, com grande volume de conteúdo e recursos como fóruns, enquetes, notícias e seções temáticas (conteúdo vertical). Ex: portais de notícia ou educação.

- **Hotsite:**
  - Página ou conjunto de páginas temporárias, criadas para divulgar campanhas, eventos, lançamentos de produtos ou promoções. 

- **Mini-site:**
  - Site menor, com conteúdo focado em um único tema, produto ou serviço. Mais duradouro que um hotsite, mas com escopo limitado.

- **Blog:**
  - Site ou seção voltada para postagens cronológicas (em ordem de publicação), frequentemente usado para conteúdos pessoais, informativos ou corporativos. Pode permitir comentários e interações.

## Frontend e Backend:

#### **Frontend (Cliente)**

O Frontend é a parte visível de um site ou aplicativo — tudo o que o usuário vê e com o que interage diretamente no navegador.

Tecnologias principais:

- **HTML (HyperText Markup Language):** estrutura o conteúdo da página (títulos, parágrafos, imagens, links etc.).

- **CSS (Cascading Style Sheets):** define a aparência visual, como cores, fontes, tamanhos, espaçamento e posicionamento dos elementos.

- **JavaScript (JS):** adiciona interatividade, como animações, validações de formulários, menus dinâmicos e atualizações em tempo real sem recarregar a página (ex: chats, notificações).

#### **Backend (Servidor)**

O Backend é a parte que o usuário não vê, responsável por processar dados, realizar operações no servidor, aplicar regras de negócio, acessar bancos de dados e enviar respostas ao frontend.

Linguagens comuns:

- PHP

- Python

- Java

- Node.js (JavaScript no lado do servidor)

- Ruby

- C#

Outros componentes do backend:

- **Banco de dados:** onde os dados são armazenados (ex: MySQL, PostgreSQL, MongoDB).

- **Servidor web:** software que recebe e responde às requisições (ex: Apache, Nginx).

- **APIs (Application Programming Interfaces):** interfaces que permitem a comunicação entre sistemas e serviços.

## W3C e HTML:

O **HTML (HyperText Markup Language)** foi criado por **Tim Berners-Lee** no início da década de 1990, sendo a linguagem base da web, usada para estruturar conteúdos como textos, imagens, vídeos e links em páginas acessadas por navegadores.

À medida que a web cresceu e novas tecnologias surgiram, tornou-se necessário estabelecer padrões universais para garantir que as páginas funcionem corretamente em todos os dispositivos e navegadores. Para isso, foi criado o W3C (World Wide Web Consortium), em 1994, também por Tim Berners-Lee.

O **W3C** é uma organização internacional sem fins lucrativos, composta por empresas, universidades, órgãos governamentais e especialistas da área. Ele é **responsável por definir as especificações e boas práticas para as tecnologias da web**, como HTML, CSS, XML, entre outras.

Algumas das principais funções do W3C:

- Criar e manter os padrões web (como o HTML5 e o CSS3).

- Promover a acessibilidade e a interoperabilidade entre dispositivos.

- Incentivar uma web aberta, segura, sem depender de tecnologias proprietárias.

Seguir as normas do W3C garante que os sites funcionem corretamente em diversos navegadores, promovendo a compatibilidade (cross-browser), a acessibilidade para pessoas com deficiência e a padronização do código.

Hoje, desenvolvedores podem consultar a documentação oficial e validar seus códigos no validador do W3C para garantir conformidade com os padrões atuais.

## Registro e Hospedagem de Sites:

Para que um site esteja disponível na internet, são necessários dois elementos principais: domínio e hospedagem.

- **Domínio:** é o endereço do site (*ex: www.exemplo.com.br*). No Brasil, domínios com terminações **.br** podem ser registrados através do registro.br, órgão oficial responsável por esse serviço.

- **Hospedagem:** é o serviço que armazena os arquivos, imagens, códigos e banco de dados do site. A hospedagem permite que o conteúdo seja acessado por qualquer pessoa conectada à internet.

## Ferramentas de Desenvolvimento:

Os desenvolvedores utilizam diferentes ferramentas para escrever, testar e depurar códigos. Essas ferramentas se dividem principalmente em editores de texto e IDEs (Ambientes de Desenvolvimento Integrado).

#### **Editores de Texto:**
Leves, rápidos e focados na edição de código, com recursos como realce de sintaxe e extensões.

- Sublime Text

- Notepad++

- Visual Studio Code

#### **IDEs (Integrated Development Environments):**

Ambientes completos que oferecem recursos avançados como depuração, compilação, controle de versão e integração com banco de dados.

- NetBeans

- Eclipse

- Visual Studio (Microsoft) — especialmente para desenvolvimento com C# e .NET

## Ferramentas do Desenvolvedor (DevTools):

As Ferramentas do Desenvolvedor são recursos integrados aos navegadores modernos (como Chrome, Firefox, Edge e Safari) que auxiliam na análise e depuração de páginas web.

- **Acesso rápido:** geralmente por meio da tecla F12 ou clicando com o botão direito na página e escolhendo "Inspecionar".

- **Principais funcionalidades:**

  - Inspecionar elementos HTML e CSS: visualizar e editar o código da página em tempo real.

  - Console JavaScript: testar comandos JS e visualizar erros do script.

  - Rede (Network): monitorar requisições HTTP, tempo de carregamento e tamanho dos recursos.

  - Performance: analisar o desempenho da página.

  - Armazenamento: visualizar cookies, localStorage e sessionStorage.

  - Depuração: colocar breakpoints e acompanhar a execução do JavaScript passo a passo.

Essas ferramentas são essenciais para o desenvolvimento frontend e ajudam na identificação de problemas e otimização do site.

## Código-fonte e Cross-browser:

- **Código-fonte:**
  - É o conjunto de instruções escritas em linguagens como HTML, CSS e JavaScript que formam a estrutura e o comportamento de uma página web.

  - Pode ser visualizado em qualquer site clicando com o botão direito > "Ver código-fonte da página" (ou similar, dependendo do navegador).

  - Também é possível inspecionar elementos específicos usando as Ferramentas do Desenvolvedor (F12 ou botão direito > "Inspecionar").

- **Cross-browser:**
  - Refere-se à prática de desenvolver sites que funcionem corretamente em diferentes navegadores (como Chrome, Firefox, Edge, Safari).

  - Garante que o layout, as funcionalidades e o desempenho sejam consistentes para todos os usuários, independentemente do navegador utilizado.

  - É importante testar o site em vários navegadores e dispositivos para evitar erros de compatibilidade.


## Estrutura Básica do HTML

```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Página Exibido na Aba do Navegador</title>
    <!-- Área para incluir estilos (CSS), fontes externas, ícones, scripts e outras configurações da página -->
</head>
<body>

    <!-- Conteúdo visível da página -->
    
</body>
</html>
```

#### Elementos:

- `<!DOCTYPE html>`	- Informa ao navegador que o documento segue o padrão HTML5
- `<html lang="pt-br">`	- Elemento raiz do documento. O atributo lang define o idioma
- `<head>` - Contém metadados (título, codificação, links externos, etc.)
- `<meta charset="UTF-8">` - Define o conjunto de caracteres (UTF-8 suporta acentos e símbolos)
- `<meta name="viewport">` - Configura o layout para dispositivos móveis
- `<title>` - Define o nome da página exibido na aba do navegador
- `</head>` - Fechamento da tag `<head>`
- `<body>` - Onde vai o conteúdo visível da página (textos, imagens, etc.)


## Metatags 
As metatags são elementos HTML usados dentro da `<head>` da página para fornecer informações (metadados) ao navegador e aos mecanismos de busca. Elas não afetam o conteúdo visível da página, mas são importantes para SEO, acessibilidade, desempenho e controle do comportamento do navegador.

#### Principais funções das metatags:
- Definir o conjunto de caracteres da página.

- Indicar descrição e palavras-chave para SEO.

- Controlar o comportamento de indexação por buscadores.

- Especificar configurações de responsividade para dispositivos móveis.

- Informar o autor da página, idioma, entre outros.

#### Exemplos de Metatags:

```html
<!-- Define o conjunto de caracteres usado -->
<meta charset="UTF-8">

<!-- Define a descrição da página (usada por mecanismos de busca) -->
<meta name="description" content="Aprenda HTML com tutoriais simples e práticos.">

<!-- Palavras-chave relacionadas ao conteúdo (SEO) -->
<meta name="keywords" content="HTML, CSS, programação, desenvolvimento web">

<!-- Nome do autor -->
<meta name="author" content="Maria">

<!-- Configura a visualização em dispositivos móveis -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Impede que buscadores indexem a página -->
<meta name="robots" content="noindex, nofollow">

<!-- Atualiza a página a cada 10 segundos -->
<meta http-equiv="refresh" content="10">

<!-- Redireciona para outro site após 5 segundos -->
<meta http-equiv="refresh" content="5; url=https://exemplo.com">

```

## Estrutura Semântica do HTML

```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Título exibido na aba do navegador</title>
</head>
<body>

  <!-- Cabeçalho do site -->
  <header>
    <h1>Título da Página</h1>

    <!-- Menu de Navegação -->
    <nav>
      <ul>
        <li><a href="#">Início</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </nav>
  </header>

  <!-- Conteúdo principal -->
  <main>
    <section>
      <h2>Sobre o Projeto</h2>
      <p>Este é um exemplo de como organizar um site utilizando as tags semânticas do HTML5.</p>
    </section>

    <section>
      <h2>Serviços</h2>
      <article>
        <h3>Desenvolvimento Web</h3>
        <p>Criação de sites modernos e responsivos.</p>
      </article>
      <article>
        <h3>Design Gráfico</h3>
        <p>Criação de logotipos e identidade visual.</p>
      </article>
    </section>
  </main>

  <!-- Barra lateral -->
  <aside>
    <h2>Dicas</h2>
    <p>Use sempre tags semânticas para melhorar a acessibilidade e o SEO do seu site.</p>
  </aside>

  <!-- Rodapé do site -->
  <footer>
    <p>&copy; 2025 - Todos os direitos reservados.</p>
  </footer>

</body>
</html>
```

#### Elementos:
- `<header>`: Cabeçalho da página (ou seção), geralmente contém o logo, título e navegação
- `<nav>`: Área de navegação, com links para as seções da página
- `<main>`: Define o conteúdo principal da página (único por página)
- `<section>`: Agrupa conteúdos relacionados (pode conter artigos, cabeçalhos, etc.)
- `<article>`: Conteúdo independente e reutilizável (como posts ou notícias)
- `<aside>`: Conteúdo complementar ou secundário (ex: dicas, anúncios, widgets)
- `<footer>`: Rodapé da página (contém direitos autorais, links, contatos, etc.)


## Textos

- ### Títulos:
    - `<h1>` até `<h6>` definem títulos com diferentes níveis de importância.


- ### Parágrafos e quebras

    - `<p>` define parágrafos.
    - `<br /> ` quebra de linha simples.
    - `<hr>` Linha horizontal para separar conteúdos


- ### Formatação de texto:  Ênfase e destaque

    - `<strong>` - Texto importante (semântico, negrito por padrão)
    - `<em>` - Ênfase (semântico, itálico por padrão)
    - `<b>`	- Negrito (visual, sem valor semântico)
    - `<i>`	- Itálico (visual, sem valor semântico)
    - `<mark>` - Texto destacado (destaque com cor)
    - `<small>`	- Texto menor, útil para observações
    - `<sub>` - Texto Subscrito (ex: fórmulas químicas como `H<sub>2</sub>O`)
    - `<sup>` - Texto Sobrescrito (ex: potências como `x<sup>2</sup>`)


- ### Citações e referências:

    - `<blockquote>` - Citação em bloco (usada para textos longos)
    - `<q>`	- Citação curta embutida
    - `<cite>` - Referência a obra (ex: livros, sites, filmes)
    - `<abbr>` - Abreviação com explicação (exibe como tooltip)
    - `<code>` - Abreviação com explicação (exibe como tooltip)
    - `<pre>` - Texto pré-formatado (mantém espaços e quebras)
   

## Atributos

Os atributos em HTML são usados para fornecer informações adicionais sobre os elementos. Eles são sempre escritos dentro da tag de abertura e seguem a estrutura:

```html
<nome-do-elemento atributo="valor">Conteúdo</nome-do-elemento>
```

### Atributos mais comuns

- `href` : Define o endereço de um link.	`<a href="pagina.html">Ir</a>`

- `src` : Define o caminho da imagem ou mídia.	`<img src="foto.jpg">`

- `alt`	: Texto alternativo para imagens.	`<img src="logo.png" alt="Logo da empresa">`

- `title`	: Exibe um texto de dica ao passar o mouse.	`<p title="Mais informações">Texto</p>`

- `id` : Identifica um elemento de forma única na página.	`<div id="cabecalho">`

- `class`	: Agrupa elementos com estilos semelhantes.	`<p class="destaque">Texto</p>`

- `style`	: Aplica estilos CSS diretamente.	`<h1 style="color: blue;">Título</h1>`

- `target` : Define como um link será aberto.	`<a href="site.html" target="_blank">Abrir</a>`

