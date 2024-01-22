<?php
session_start();

/**
 * variavel $base recebe a url base do site;
 */
//$base = '';
define("URL_BASE","http://localhost/MEUS-SISTEMAS/SI-ESCALA/");
define("EMAIL_ADM", "mlaferreira.marcello@3mcweb.com.br");
define("EMAIL_SUPORTE", "suporte@3mcweb.com.br");
define("AUTOR","Marcello Ferreira");
define("EMPRESA","3mcweb.com.br");
define("NAME_SITE", "SI-ESCALAS - O controle e seu!");

/**
 * Configuração de banco de dados
 *  
 */

define("DB_HOST","localhost");
//$host = 'localhost';
define("DB_NAME","devsbook");
//$dbname = 'devsbook';
define("DB_USER","root");
//$dbuser = 'root';
define("DB_PASS","");
//$dbpass = '';
//define("DB_PORT","");

$pdo = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST, DB_USER, DB_PASS);



