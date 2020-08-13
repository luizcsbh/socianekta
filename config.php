<?php
/** O nome do banco de dados */
define('DB_NAME', 'socialnetworking');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MYSQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Caminho absoluto para a pasta do sistema */
if ( !define('ABSPATH', dirname(__FILE__) . '/'));

/**Caminho no server para o sistema */
if ( !define('BASEURL', '/socianekta-php/'));

/** Caminho do arquivo  de banco de dados */
if ( !define('DBAPI', ABSPATH . 'model/database.php'));

/** Caminho do arquivo  controller*/
if ( !define('CONTROLLER', ABSPATH . 'controller/functions.php'));

/** Caminhos dos template de header e footer */
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');