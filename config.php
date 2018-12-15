<?php
# Configurações padrão do sistema / site
define("NOME_SITE",   		"Fábrica de Bicicletas");
define("ENVIRONMENT", 		"development"); //development OU production
define("BASE",        		"http://localhost/");

# Configurações de Banco de dados
define("DBNAME", "db_sejadigital");
define("HOST",   "localhost");
define("DBUSER", "root");
define("DBPASS", "");

# Altere somente se souber o que estiver fazendo
define("BASE_PATH",   		__DIR__ . "/");
define("APP_PATH",    		BASE_PATH . "app/");
define("ASSETS_PATH", 		BASE . "assets/");
define("PUBLIC_PATH", 		BASE . "public/");
define("SLIDER_PATH", 		PUBLIC_PATH . "slider/");
define("TIMEZONE",	  		"America/Sao_Paulo");
define("SALTKEY", 	  		"07734a51bb638e31541614062e8e6417"); //SISTEMA_SEGURO_
define("TEMPLATEBASE",		"views/templates/template.phtml");

# ==============================================================================
# Não altere daqui para baixo caso não conheça o sistema =======================
# ==============================================================================
global $config;
$config = array();
$config['dbname'] = DBNAME;
$config['host']   = HOST;
$config['dbuser'] = DBUSER;
$config['dbpass'] = DBPASS;

if(ENVIRONMENT == 'development')
{
	error_reporting(E_ALL | E_STRICT);
}
else
{
	error_reporting(E_ALL & ~E_DEPRECATED);
}
?>
