# Formulários

## Introdução

- Permite a interação do usuário com o sistema

- Viabiliza a coleta de dados e o envio de informações para o servidor.

#### Elemento `<form>`

É o elemento que define um formulário. Cria um contêiner que agrupa todos os elementos relacionados ao formulário.

Atributos importantes:

| Atributo  | Descrição                                                       |
| --------- | --------------------------------------------------------------- |
| `action`  | Define o destino dos dados.                                     |
| `method`  | Define o método de envio: `GET` ou `POST`.                      |
| `enctype` | Define a codificação dos dados (necessário ao enviar arquivos). |

**Exemplo:**

```html
<form action="/pagina-processa-dados-do-form" method="post">
  <!-- Campos do formulário -->
</form>
```


## Métodos de Envio

| Método | Descrição                                                                                  |
| ------ | ------------------------------------------------------------------------------------------ |
| `GET`  | Envia os dados pela URL. Não recomendado para informações sensíveis. Possui limite de caracteres. |
| `POST` | Envia os dados no corpo da requisição. Mais adequado para dados sensíveis.      |


## Codificação (`enctype`)

O atributo `enctype` é utilizado apenas com o método `POST`.

| Valor                               | Uso                                    |
| ----------------------------------- | -------------------------------------- |
| `application/x-www-form-urlencoded` | Padrão para formulários simples.       |
| `multipart/form-data`               | Necessário para envio de arquivos.     |
| `text/plain`                        | Envia dados como texto simples.        |


## Tipos de `<input>`

Cada tipo de `input` define um formato específico de entrada de dados:

| `type`                                                | Descrição                                   |
| ----------------------------------------------------- | ------------------------------------------- |
| `text`                                                | Campo de texto comum.                       |
| `email`                                               | Campo para email com validação básica.      |
| `password`                                            | Campo de senha (caracteres ocultos).        |
| `number`                                              | Entrada numérica com controle de intervalo. |
| `checkbox`                                            | Caixa de seleção múltipla.                  |
| `radio`                                               | Botão de seleção única.                     |
| `file`                                                | Envio de arquivos.                          |
| `color`                                               | Seletor de cor.                             |
| `range`                                               | Controle deslizante para número.            |
| `date` / `time` / `month` / `week` / `datetime-local` | Campos para seleção de data e/ou hora.      |
| `url`                                                 | Campo para endereços web.                   |
| `search`                                              | Campo de busca.                             |
| `submit`                                              | Botão para enviar o formulário.             |
| `reset`                                               | Botão para limpar todos os campos.          |
| `button`                                              | Botão personalizado (ex: com JavaScript).   |


## Campos Especiais e Atributos Úteis

| Elemento / Atributo  | Função                                             |
| -------------------- | -------------------------------------------------- |
| `<textarea>`         | Entrada de texto com várias linhas.                |
| `<datalist>`         | Sugestões automáticas para um campo.               |
| `<select>`           | Lista suspensa com opções pré-definidas.           |
| `placeholder`        | Texto de instrução dentro do campo.                |
| `required`           | Torna o preenchimento obrigatório.                 |
| `autofocus`          | Foca o campo automaticamente ao carregar a página. |
| `autocomplete="off"` | Desativa sugestões do navegador.                   |


### Exemplo com `<select>`:

```html
<label for="estado">Estado:</label>
<select id="estado" name="estado" required>
  <option value="">Selecione</option>
  <option value="SP">São Paulo</option>
  <option value="RJ">Rio de Janeiro</option>
  <option value="MG">Minas Gerais</option>
</select>
```

### Exemplo com `<datalist>`:

```html
<label for="cidade">Cidade:</label>
<input list="cidades" id="cidade" name="cidade" placeholder="Digite ou escolha">
<datalist id="cidades">
  <option value="São Paulo">
  <option value="Rio de Janeiro">
  <option value="Belo Horizonte">
</datalist>
```


## Acessibilidade com `<label>`

Usar atributo `for` no elemento `label` e o atributo `id` no elemento `input`.

- Associa o texto do rótulo ao campo de entrada de forma acessível, melhorando a navegação por leitores de tela. É recomendado usar em todos os campos.

**Exemplo:**

```html
<form action="processa.php" method="post">
  <label for="nome">Nome completo:</label>
  <input type="text" id="nome" name="nome">
</form>
```


## Agrupamento de Campos com `<fieldset>` e `<legend>`

O elemento `<fieldset>` permite agrupar campos relacionados em um formulário. Já o `<legend>` define um título para esse grupo, sendo útil para organização e acessibilidade.

**Exemplo:**

```html
<fieldset>
  <legend>Dados Pessoais</legend>
  
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome">

  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
</fieldset>
```


## Validação com pattern (Expressões Regulares)

| Finalidade    | Expressão                                 |        
| ------------- | ----------------------------------------- |
| Letras        | `^[A-Za-zÀ-ÿ\s]+$`                        |         
| Números       | `^\d+$`                                   |        
| Telefone      | `^\(\d{2}\) \d{5}-\d{4}$`                 |        
| Data          | `^\d{2}/\d{2}/\d{4}$`                     |      
| Email         | `^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$` |    
| Moeda (R\$)   | `^\d{1,3}(\.\d{3})*,\d{2}$`               |        

**Exemplo:**

```html
  <!-- Telefone -->
  <label for="telefone">Telefone (formato: (11) 91234-5678):</label>
  <input type="text" id="telefone" name="telefone" required 
         pattern="^\(\d{2}\) \d{5}-\d{4}$" 
         placeholder="Ex: (11) 91234-5678">
```


## Validação Visual com CSS (`:valid` , `:invalid`) 

O HTML5 permite validação automática dos campos de formulário, e o CSS pode ser usado para destacar visualmente se os dados inseridos são válidos ou não.

| Seletor    | Descrição                                                                                     |
| ---------- | --------------------------------------------------------------------------------------------- |
| `:valid`   | Aplica-se a um campo quando ele está corretamente preenchido segundo as regras do HTML.       |
| `:invalid` | Aplica-se quando o campo não atende os critérios definidos (ex: está vazio ou mal formatado). |

Esses critérios vêm de atributos como:

- `required`, `pattern`, `type`, `min`, `max`, etc.

##### Uso de `:not()` para esconder erros iniciais 

Um problema comum é que os campos já aparecem com borda vermelha ao carregar a página, mesmo antes da interação. Para resolver isso, usamos seletores combinados como `:not(:placeholder-shown)` e `:not(:focus)` para aplicar estilos somente após o usuário interagir com o campo.

**Exemplo:**

```css
/* Estilo base para todos os campos */
input, select, textarea {
  padding: 8px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 5px;
}

/* Impede que o campo apareça com erro (vermelho) antes de o usuário digitar ou sair do campo */
input:required:invalid:not(:placeholder-shown):not(:focus),
textarea:required:invalid:not(:placeholder-shown):not(:focus),
select:required:invalid:not(:focus) {
  border: 2px solid red;
}

/* Campos válidos */
input:required:valid,
textarea:required:valid,
select:required:valid {
  border: 2px solid green;
}

/* Estilo ao focar no campo */
input:focus,
textarea:focus,
select:focus {
  outline: 2px solid #1e90ff;
  border-color: #1e90ff;
}
```
- Os campos com erro só exibem borda vermelha após o usuário interagir com eles e sair do campo sem preencher corretamente.

- Campos válidos recebem borda verde automaticamente.

- O destaque azul no foco do campo melhora a navegação e a acessibilidade para usuários com teclado ou leitores de tela.


## Exemplo de Formulário

```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário Completo</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      max-width: 600px;
      margin: auto;
    }

    input, select, textarea {
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 5px;
      width: 100%;
    }

    label {
      margin-top: 15px;
      display: block;
    }

    fieldset {
      margin-bottom: 20px;
      padding: 15px;
      border: 1px solid #aaa;
      border-radius: 6px;
    }

    legend {
      font-weight: bold;
      padding: 0 10px;
    }

    input:required:invalid:not(:placeholder-shown):not(:focus),
    textarea:required:invalid:not(:placeholder-shown):not(:focus),
    select:required:invalid:not(:focus) {
      border: 2px solid red;
    }

    input:required:valid,
    textarea:required:valid,
    select:required:valid {
      border: 2px solid green;
    }

    input:focus,
    textarea:focus,
    select:focus {
      outline: 2px solid #1e90ff;
      border-color: #1e90ff;
    }
  </style>
</head>
<body>

  <h2>Formulário de Cadastro</h2>

  <form action="processa.php" method="post" enctype="multipart/form-data" autocomplete="off">

    <fieldset>
      <legend>Dados Pessoais</legend>

      <label for="nome">Nome Completo:</label>
      <input type="text" id="nome" name="nome" required 
             pattern="^[A-Za-zÀ-ÿ\s]+$" 
             placeholder="Ex: Ana Maria da Silva">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required 
             pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
             placeholder="Ex: usuario@email.com">

      <label for="telefone">Telefone:</label>
      <input type="text" id="telefone" name="telefone" required 
             pattern="^\(\d{2}\) \d{5}-\d{4}$" 
             placeholder="Ex: (11) 91234-5678">

      <label for="data">Data de Nascimento:</label>
      <input type="text" id="data" name="data" required 
             pattern="^\d{2}/\d{2}/\d{4}$" 
             placeholder="Ex: 29/07/2000">
    </fieldset>

    <fieldset>
      <legend>Endereço</legend>

      <label for="estado">Estado:</label>
      <select id="estado" name="estado" required>
        <option value="">Selecione</option>
        <option value="SP">São Paulo</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="MG">Minas Gerais</option>
      </select>

      <label for="cidade">Cidade:</label>
      <input list="cidades" id="cidade" name="cidade" required placeholder="Digite ou escolha">
      <datalist id="cidades">
        <option value="São Paulo">
        <option value="Rio de Janeiro">
        <option value="Belo Horizonte">
      </datalist>
    </fieldset>

    <fieldset>
      <legend>Outras Informações</legend>

      <label for="salario">Pretensão Salarial (R$):</label>
      <input type="text" id="salario" name="salario" required 
             pattern="^\d{1,3}(\.\d{3})*,\d{2}$" 
             placeholder="Ex: 3.500,00">

      <label for="mensagem">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" required 
                placeholder="Fale um pouco sobre você"></textarea>

      <label for="arquivo">Envie seu currículo (PDF):</label>
      <input type="file" id="arquivo" name="arquivo" accept=".pdf" required>
    </fieldset>

    <input type="submit" value="Enviar">
  </form>

</body>
</html>
```

## Dicas 

- Evite usar `GET` para envio de dados sensíveis.
- Utilize validações no HTML, mas complemente com validação no backend.
- Teste os formulários em diferentes navegadores.
- Utilize agrupamentos semânticos para clareza (como `<fieldset>`).
