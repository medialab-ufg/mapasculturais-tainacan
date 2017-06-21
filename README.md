# mapasculturais-tainacan
Plugin para museus adicionarem seu respectivo repositório no Tainacan
Ao cadastrar o espaço, terá disponível o campo **Link para repositório Tainacan:**
na aba "Sobre".

## Ativação

Para ativar este plugin, clone este repositorio em  pasta chamada 'Tainacan' em 'src/protected/plugins'.
Feito isto, configure seu config.php:

```PHP

'plugins' => [
    //... other plugin you may have...
    'Tainacan' =>['namespace'=>'Tainacan'],
],

```
