# OwnMVC

OwnMVC é um MVC simples, focado na produção, sem muitos recursos, talvez um framework seguro, baseado num framework sem autor.
Utiliza sessões, PDO e algumas funções básicas que serão descritas aqui nesse **README**.

## Imagens
!(Computador)[https://i.ibb.co/ck2FFtH/F-brica-de-Bicicletas-Google-Chrome-2.jpg]
!(Celular)[https://i.ibb.co/s2hGLGJ/F-brica-de-Bicicletas-Google-Chrome.jpg]

## Versão

O OwnMVC está em sua fase inicial, talvez alpha, talvez beta, de forma que aos poucos estou construindo, eliminando bugs, etc.
Sua versão final se dará assim que todo o sistema estiver funcionando de forma plena.

## Instalação

- Necessário ter o [XAMPP](https://www.apachefriends.org/pt_br/index.html) instalado (ou outro webserver da sua escolha)
- Editor de texto (bloco de notas, [notepad++](https://notepad-plus-plus.org/download/v7.6.1.html), [sublimetext](https://www.sublimetext.com/), [atom](https://atom.io/), etc)
- Configurar algum banco de dados no PhpMyAdmin (db_qualquercoisa)
- Configurar o arquivo **config.php**

## Uso

**Controller**

*Os métodos __construct e index são obrigatórios*

```php
<?php
class meucontrollerController extends controller
{
   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      $dados = array(
        'titulo_da_pagina' => 'Oá, seja muito bem vindo!',
        'mensagem_da_pagina' => 'Você está na home do site, navegue através do menu à cima.'
      );
      $this->loadView('nomedaview', $dados);
      //ou
      $this->loadTemplate('nomedaviewtemplate', $dados);
   }
}
```

**Model**

*Você pode usar o PDO para realizar consultas ao banco de dados*

```php
<?php
class Meumodel extends model
{
   public function getRegistros()
   {
      $retorno  = array();
      $consulta = "SELECT * FROM tabela_tb";
      $stmt = $this->db->query($consulta);

      $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $retorno;
   }
}
```

**View**

*Como em qualquer outro MVC de PHP, você faz o seu view em HTML com auxílio de javascript e css, talvez use bootstrap, etc. Aqui não é diferente, haja vista que no arquivo ***config.php*** você tem todas as configurações de pastas assets onde estarão alojados esses mesmos arquivos.*

```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $titulo_da_pagina; ?></title>
  </head>
  <body>
    <?php echo $mensagem_da_pagina; ?>
  </body>
</html>
```

# Você também pode colaborar!
Colabore com o projeto e ajude o mesmo a se tornar um framework simples porém eficaz!

### Licença
Licença [MIT](https://choosealicense.com/licenses/mit/)
