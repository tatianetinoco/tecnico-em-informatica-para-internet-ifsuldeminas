# PHP – Tratamento de Arquivos

O PHP permite ler, criar, modificar, excluir e verificar arquivos e diretórios.

## Operações Básicas com Arquivos

### Abrir e fechar arquivos

```php
$arquivo = fopen("arquivo.txt", "w");  
fclose($arquivo);
```

### Escrever em um arquivo

```php
$arquivo = fopen("arquivo.txt", "w");
fwrite($arquivo, "Texto a ser gravado");
fclose($arquivo);
```

### Ler um arquivo

```php
$arquivo = fopen("arquivo.txt", "r");
$conteudo = fread($arquivo, filesize("arquivo.txt"));
fclose($arquivo);
```

## Boas Práticas e Verificações

Antes de manipular arquivos, sempre verifique:

### Se o arquivo existe:

```php
if (file_exists("arquivo.txt")) { ... }
```

### Se é possível ler ou escrever:

```php
is_readable("arquivo.txt");
is_writable("arquivo.txt");
```

## Funções Úteis para Arquivos

| Função                | Descrição                                        |
| --------------------- | ------------------------------------------------ |
| `file_exists()`       | Verifica se o arquivo existe                     |
| `file_get_contents()` | Lê conteúdo do arquivo como string               |
| `file_put_contents()` | Escreve direto no arquivo (sobrescreve ou anexa) |
| `file()`              | Lê o arquivo em um array (linha por linha)       |
| `filesize()`          | Retorna o tamanho do arquivo                     |
| `filetype()`          | Tipo do arquivo                                  |
| `filemtime()`         | Data da última modificação                       |
| `filectime()`         | Data de criação                                  |
| `fileatime()`         | Último acesso                                    |
| `fileperms()`         | Permissões do arquivo                            |
| `fileowner()`         | Dono do arquivo                                  |
| `unlink()`            | Exclui o arquivo                                 |
| `copy()`              | Copia o arquivo                                  |
| `rename()`            | Renomeia o arquivo                               |
| `mime_content_type()` | Detecta o tipo MIME                              |
| `finfo_open()`        | Detecta o tipo MIME de forma mais segura         |


## Exemplo 

```php
if (file_exists("arquivo.txt")) {
    if (is_readable("arquivo.txt")) {
        $linhas = file("arquivo.txt");
        foreach ($linhas as $linha) {
            echo $linha . "<br>";
        }
    }

    if (is_writable("arquivo.txt")) {
        file_put_contents("arquivo.txt", "\nNova linha", FILE_APPEND);
    }
}
```

## Informações sobre Arquivos

```php
echo filesize("arquivo.txt");                 // Tamanho em bytes
echo filetype("arquivo.txt");                 // Tipo (ex: file, dir)
echo date("d/m/Y", filemtime("arquivo.txt")); // Última modificação
echo fileowner("arquivo.txt");                // ID do dono
echo decoct(fileperms("arquivo.txt"));        // Permissões em octal
```

## Trabalhando com Diretórios

```php
is_dir("meu_diretorio");          // Verifica se é um diretório
is_writable("meu_diretorio");     // Verifica permissão de escrita
```

## Detectar Tipo MIME de Arquivos

### Usando `mime_content_type()`:

```php
$tipo = mime_content_type("arquivo.txt");
if (strpos($tipo, 'text/') === 0) {
    echo "Arquivo de texto";
}
```

### Usando `finfo_open()` (método recomendado):

```php
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$tipo = finfo_file($finfo, "arquivo.txt");
finfo_close($finfo);
```

## Inclusão de Arquivos (Reutilização de Código)

Permite reaproveitar partes comuns do código, como cabeçalhos, rodapés, conexões com banco, etc.

| Função         | Comportamento                                             |
| -------------- | ----------------------------------------------------------|
| `include`      | Inclui o arquivo, mas não interrompe em caso de erro      |
| `include_once` | Mesmo que `include`, mas inclui apenas uma vez            |
| `require`      | Inclui o arquivo e interrompe a execução em caso de erro  |
| `require_once` | Igual ao `require`, mas inclui apenas uma vez             |

#### Exemplo:

```php
// arquivo1.php
$var = "Olá";

// arquivo2.php
include_once "arquivo1.php";
echo $var;
```

## Conclusão

- O PHP oferece diversas funções para ler, gravar, excluir, renomear e verificar arquivos.

- Boas práticas de segurança:

    - Verificar existência e permissões dos arquivos.

    - Controlar tipo de arquivos

    - Usar `include_once` ou `require_once` para evitar duplicações

- Mantenha diretórios organizados e proteja áreas sensíveis.
