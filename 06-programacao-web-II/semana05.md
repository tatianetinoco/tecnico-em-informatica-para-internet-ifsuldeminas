# PHP – Cookies, Sessões e Segurança

## Cookies

Cookies são pequenos arquivos de texto criados por servidores de sites e armazenados no navegador do usuário. Eles servem para manter informações sobre a navegação ou preferências do usuário — como itens no carrinho de compras — e são enviados automaticamente a cada requisição HTTP feita ao mesmo domínio.

Exemplos de uso:

- Lembrar as preferências do usuário, como idioma.
- Personalizar anúncios com base no histórico de navegação.
- Rastrear o comportamento do usuário para fins estatísticos. 

### Criando Cookies:

```php
// Sintaxe
setcookie(nome_do_cookie, valor, tempo_expiracao, caminho, dominio, seguro, httponly);

// Exemplo
setcookie("usuario", "maria123", time() + (86400 * 4), "/");
```

- `name`: nome do cookie (obrigatório)

- `value`: valor a ser armazenado

- `expire`: tempo de expiração (em segundos; time() + segundos)

- `path`: escopo de acesso ("/" = todo o site)

- Outros atributos: `domain`, `secure`, `httponly`

### Recuperando Cookies:

```php
if (isset($_COOKIE["usuario"])) {
    echo $_COOKIE["usuario"];
}
```

### Alterando ou Excluindo Cookies:

```php
// Alterar o valor:
setcookie("usuario", "novo_valor");

// Excluir (definindo uma data no passado):
setcookie("usuario", "", time() - 3600);
```

## Sessões

As sessões em PHP armazenam dados do usuário no servidor, permitindo que informações persistam entre páginas. São mais seguras que cookies porque os dados não são expostos ao navegador.

### Iniciando uma Sessão:

```php
session_start(); // Deve ser a primeira linha do script
```

### Criando e Lendo Variáveis de Sessão:

```php
$_SESSION['nome'] = "João"; // Atribui o valor "João" à variável de sessão 'nome'.
echo $_SESSION['nome'];     // Exibe o valor armazenado na variável de sessão 'nome'. 
```

### Encerrando Sessões:

```php
unset($_SESSION['nome']);  // Remove a variável de sessão 'nome', mas a sessão continua ativa.
session_destroy();         // Encerra toda a sessão, removendo todos os dados associados. 
```

### Segurança adicional:

```php
session_regenerate_id(); // Gera um novo ID de sessão
```

> Ajuda a evitar ataques de **session fixation** (sequestro de sessão).

## Segurança – Criptografia de Senhas

### Uso de `md5()` (**NÃO** recomendado):

```php
$senha = "minhasenha";
$hash = md5($senha); // inseguro
```

### Uso de `hash()` com `SHA-256`:

```php
$senha = "senha secreta";
$hash = hash("sha256", $senha);
```

> Mais seguro que `md5()`, mas ainda não ideal para senhas.

### Uso de `password_hash()` com BCRYPT (recomendado):

```php
$senha = "minhasenha123";
$hash = password_hash($senha, PASSWORD_BCRYPT);
```

- Gera um hash seguro com um salt (valor aleatório) embutido automaticamente.

- Ideal para armazenamento de senhas em banco de dados.

### Verificando senha com `password_verify()`:

```php
if (password_verify($senhaInformada, $hash)) {
    echo "Senha válida";
} else {
    echo "Senha inválida";
}
```

## Resumo Comparativo

| Recurso | Armazena onde? | Dura até...                          | Ideal para...              |
| ------- | -------------- | ------------------------------------ | -------------------------- |
| Cookie  | Navegador      | Expiração definida                   | Preferências, idioma, etc. |
| Sessão  | Servidor       | Enquanto o navegador estiver aberto  | Login, carrinho, perfil    |
| Hash    | Banco de dados | Permanente                           | Proteger senhas e dados    |


## Conclusão

- Cookies e sessões são essenciais para manter o estado da aplicação e personalizar a experiência do usuário.

- Cookies são úteis para dados simples e persistentes, mas menos seguros.

- Sessões oferecem mais segurança e são ideais para dados temporários e sensíveis.

- Nunca armazene senhas em texto puro. Utilize sempre `password_hash()` e `password_verify()`.

- Combine esses recursos com boas práticas de validação, criptografia e controle de acesso no backend para proteger sua aplicação contra ataques comuns como XSS, CSRF e SQL Injection.
