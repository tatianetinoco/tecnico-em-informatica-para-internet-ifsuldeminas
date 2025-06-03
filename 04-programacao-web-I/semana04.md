# Formulários 

Formulários são ferramentas fundamentais em páginas web para coletar dados dos usuários, como nome, e-mail, preferências, arquivos e outros.

Eles permitem:

- Comunicação entre usuário e empresa.

- Coleta de informações para estatísticas, cadastros, marketing etc.

- Envio de dados para processamento no servidor (uso de linguagens backend).

## **A tag `<form>`**

Usada para criar formulários HTML.

### Atributos principais:

- `action`: define o arquivo para onde os dados serão enviados (ex: `action = "arquivo.php"`).

- `method`: define o método de envio.

    - `get`: envia dados na URL (menos seguro).

    - `post`: envia dados no corpo da requisição (mais seguro).

- `enctype`: define o tipo de codificação.

    - `multipart/form-data`: envio de arquivos.

    - `application/x-www-form-urlencoded`: padrão para envio de texto simples.

    - `text/plain`: envia os dados como texto simples

#### Exemplo:
```html
<form action="processa_form.php" method="post" enctype="multipart/form-data">
  <!-- campos aqui -->
</form>
```
<br>

## Elemento `<input>` e seus tipos

Cada campo de entrada usa a tag `<input>` com o atributo `type` para definir o tipo de dado.

#### Tipos mais comuns:

| Tipo (`type`)         | Função                                               | Exemplo HTML                                |
|-----------------------|------------------------------------------------------|----------------------------------------------|
| `text`                | Entrada de texto comum                               | `<input type="text" name="nome">`            |
| `email`               | Verifica se o texto tem formato de e-mail válido     | `<input type="email" name="email">`          |
| `password`            | Oculta os caracteres digitados                       | `<input type="password" name="senha">`       |
| `checkbox`            | Permite múltiplas seleções                           | `<input type="checkbox" name="cor" value="Azul">` |
| `radio`               | Permite **uma única** seleção entre várias opções    | `<input type="radio" name="sexo" value="M">` |
| `number`              | Entrada de números com `min`, `max`, `step`          | `<input type="number" min="1" max="10">`     |
| `range`               | Barra deslizante de valor                            | `<input type="range" min="0" max="100">`     |
| `color`               | Seletor de cores                                     | `<input type="color" name="cor">`            |
| `date`, `time`, etc.  | Entrada de datas e horas                             | `<input type="date" name="data">`            |
| `file`                | Envio de arquivos                                    | `<input type="file" name="curriculo">`       |
| `url`                 | Verifica se é uma URL válida                         | `<input type="url" name="site">`             |
| `search`              | Campo de busca com botão de limpar                   | `<input type="search" name="buscar">`        |
| `submit`              | Envia o formulário                                   | `<input type="submit" value="Enviar">`       |
| `reset`               | Limpa os campos preenchidos                          | `<input type="reset" value="Limpar">`        |
| `button`              | Botão com ação JavaScript             | `<button onclick="funcao()">Clique</button>` |

#### Outros elementos importantes:

- `<textarea>`: campo de texto com várias linhas.
- `<select>` com `<option>`: lista suspensa.
- `<datalist>`: sugestões automáticas para campos.

#### Exemplos:

```html
<form action="processa_form.php" method="post" enctype="multipart/form-data">

  <!-- Texto -->
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome"><br><br>

  <!-- Email -->
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <!-- Senha -->
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha"><br><br>

  <!-- Número -->
  <label for="idade">Idade:</label>
  <input type="number" id="idade" name="idade" min="1" max="120"><br><br>

  <!-- Range -->
  <label for="satisfacao">Nível de Satisfação:</label>
  <input type="range" id="satisfacao" name="satisfacao" min="0" max="10"><br><br>

  <!-- Cor -->
  <label for="cor">Cor favorita:</label>
  <input type="color" id="cor" name="cor"><br><br>

  <!-- Data -->
  <label for="nascimento">Data de Nascimento:</label>
  <input type="date" id="nascimento" name="nascimento"><br><br>

  <!-- Hora -->
  <label for="hora">Horário Preferido:</label>
  <input type="time" id="hora" name="hora"><br><br>

  <!-- Arquivo -->
  <label for="arquivo">Enviar Arquivo:</label>
  <input type="file" id="arquivo" name="arquivo"><br><br>

  <!-- URL -->
  <label for="site">Seu site:</label>
  <input type="url" id="site" name="site"><br><br>

  <!-- Busca -->
  <label for="busca">Buscar:</label>
  <input type="search" id="busca" name="busca"><br><br>

  <!-- Checkbox -->
  <span>Escolha suas cores preferidas:</span><br>
  <input type="checkbox" id="azul" name="cores[]" value="azul">
  <label for="azul">Azul</label><br>
  <input type="checkbox" id="verde" name="cores[]" value="verde">
  <label for="verde">Verde</label><br>
  <input type="checkbox" id="vermelho" name="cores[]" value="vermelho">
  <label for="vermelho">Vermelho</label><br><br>

  <!-- Radio -->
  <span>Sexo:</span><br>
  <input type="radio" id="masculino" name="sexo" value="masculino">
  <label for="masculino">Masculino</label><br>
  <input type="radio" id="feminino" name="sexo" value="feminino">
  <label for="feminino">Feminino</label><br><br>

  <!-- Textarea -->
  <label for="comentarios">Comentários:</label><br>
  <textarea id="comentarios" name="comentarios" rows="5" cols="40" placeholder="Digite aqui seus comentários..."></textarea><br><br>

  <!-- Select -->
  <label for="curso">Escolha um curso:</label>
  <select id="curso" name="curso">
    <option value="" disabled selected>Selecione</option>
    <option value="html">HTML</option>
    <option value="css">CSS</option>
    <option value="js">JavaScript</option>
  </select><br><br>

  <!-- Datalist -->
  <label for="cidade">Cidade:</label>
  <input list="cidades" id="cidade" name="cidade">
  <datalist id="cidades">
    <option value="São Paulo">
    <option value="Rio de Janeiro">
    <option value="Belo Horizonte">
    <option value="Curitiba">
  </datalist><br><br>

  <!-- Botão com JavaScript -->
  <button type="button" onclick="alert('Botão JavaScript clicado!')">Clique Aqui</button><br><br>

  <!-- Submit e Reset -->
  <input type="submit" value="Enviar">
  <input type="reset" value="Limpar Formulário">

</form>
```

### Validação de dados

Atributos importantes para validação:

- `required`: campo obrigatório.

- `maxlength` / `minlength`: define limite de caracteres.

- `pattern`: usa expressões regulares (regex) para validar o formato.

- `placeholder`: texto auxiliar dentro do campo.

- `autocomplete="off"`: desativa sugestões do navegador.

- `autofocus`: coloca o cursor automaticamente no campo ao carregar a página.

- `novalidate`: desativa validação do formulário.

#### Exemplos de validação com pattern:

```html
<!-- Somente letras (sem acentos) -->
<input type="text" name="nome" required pattern="[a-zA-Z\s]+">

<!-- Somente números -->
<input type="text" name="idade" required pattern="[0-9]+">

<!-- Telefone (formato: (99) 99999-9999 ou (99) 9999-9999) -->
<input type="tel" name="telefone" required pattern="\([0-9]{2}\)\s?[0-9]{4,5}-[0-9]{4}" inputmode="numeric">

```

## Estilizando com CSS
Usa seletores como `:required`, `:valid`, `:invalid`.

```css
input:required {
  border: 1px solid red;
}
input:valid {
  border: 1px solid green;
}
input:invalid {
  border: 1px solid red;
}
```
#### Exemplo de uso no Formulário

```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Validação Visual com CSS</title>
  
  <style>
  
   input {
      padding: 8px;
      margin-bottom: 10px;
      display: block;
    }
    
    input:required {
      border: 1px solid red;
    }

    input:valid {
      border: 1px solid green;
    }

    input:invalid {
      border: 1px solid red;
    }

  </style>
  
</head>
<body>

  <form>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required pattern="[a-zA-Z\s]+" placeholder="Digite seu nome">

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required placeholder="nome@email.com">

    <button type="submit">Enviar</button>
  </form>

</body>
</html>
```

## Boas práticas

- Sempre use `POST` ao enviar dados sensíveis.

- Inclua o atributo `required` em campos obrigatórios.

- Use o `<label>` em todos os campos para acessibilidade.

- Valide no cliente (HTML) e também no servidor (PHP).

- Teste em diferentes navegadores, pois nem todos implementam todos os recursos do HTML5 da mesma forma.

