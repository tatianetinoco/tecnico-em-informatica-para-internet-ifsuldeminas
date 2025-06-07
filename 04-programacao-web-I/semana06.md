# Acessibilidade na Web

A acessibilidade na Web garante que todas as pessoas, inclusive com deficiência, consigam perceber, compreender, navegar e interagir com páginas e serviços digitais.

- Garante inclusão social.

- Está prevista em leis e normas.

- Favorece a usabilidade para todos, inclusive idosos, analfabetos digitais e usuários de dispositivos móveis.

## **Acesso de Pessoas com Deficiência**

### Deficiência visual (cegueira):
- Uso de leitores de tela (ex: NVDA, JAWS).

- Barreiras: imagens sem descrição, links mal nomeados, formulários confusos.

### Baixa visão:

- Uso de ampliadores de tela, alto contraste, fontes maiores.

- Barreiras: textos decorativos, contraste fraco, imagens complexas.

### Deficiência intelectual / TDAH / dislexia:

- Barreiras: linguagem difícil, parágrafos longos, falta de clareza e consistência.

### Daltonismo:

- Barreiras: uso de cor como único meio de destaque, contraste inadequado.

### Deficiência auditiva:

- Barreiras: vídeos sem legenda ou Libras, áudios sem transcrição.

###  Deficiência física / mobilidade reduzida:

- Barreiras: ações que exigem mouse, limite de tempo, ausência de navegação por teclado.

## Tecnologia Assistiva

- **Leitores de tela**: JAWS, NVDA, Orca.

- **Linha Braille**: converte o conteúdo em sinais táteis.

- **Ampliadores de tela**: ZoomText, lupa eletrônica.

- **Teclados/mouses adaptados**: controles com a cabeça, voz, entre outros.

## Recomendações de Acessibilidade

### Base normativa:

- **WCAG 2.0** (internacional).

- **eMAG 3.1** (governo brasileiro).

#### **WCAG – 4 princípios**:

- **Perceptível**: conteúdo pode ser percebido (ex: texto alternativo).

- **Operável**: navegável por teclado.

- **Compreensível**: texto e interações simples e claros.

- **Robusto**: compatível com tecnologias assistivas.

#### **eMAG 3.1 – Estrutura**:

- Recomendações divididas em:

    - Marcação (HTML semântico)

    - Conteúdo/Informação

    - Design

    - Multimídia

    - Links, imagens, formulários

- Indicado para **sítios governamentais**, mas útil para qualquer projeto web.

## Boas Práticas

### HTML semântico:

```html
<h1>Notícias</h1>
<h2>Educação</h2>
<p>Texto da notícia...</p>
```

### Links com significado:

```html
<!-- ERRADO -->
<a href="arquivo.pdf">Clique aqui</a>

<!-- CERTO -->
<a href="arquivo.pdf">Baixar Cartilha de Acessibilidade (PDF, 500KB)</a>
```

### Imagens com descrição:

```html
<img src="logo.png" alt="Logotipo da instituição">
```

### Contraste e acessibilidade visual:

```css
body {
  background-color: #000;
  color: #FFF; /* Relação de contraste mínima recomendada: 4.5:1 */
}
```

## Testes e Validação

- **WAVE** : https://wave.webaim.org/

- **Color Contrast Checker**: https://webaim.org/resources/contrastchecker/

- **Axe**: https://www.deque.com/axe/

## Navegação por Teclado e Atalhos

Exemplo com accesskey:

```html
<a href="#conteudo" accesskey="1">Ir para o conteúdo [1]</a>
```

## Design Responsivo e Redimensionamento

- Páginas devem funcionar até 200% de zoom.

- Layouts devem ser adaptáveis (media queries) a diferentes tamanhos de tela.

```css
@media (max-width: 600px) {
  nav { display: none; }
}
```

## Multimídia acessível

Requisitos:

- Legendas para vídeos.

- Audiodescrição se necessário.

- Transcrição textual para vídeos e áudios.
