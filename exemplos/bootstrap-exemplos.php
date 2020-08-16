<?php

// Altera as configura��es do PHP para mostrar todos os erros, j� que este � apenas um script de exemplo.
// No seu ambiente de produ��o, voc� n�o vai precisar alterar estas configura��es.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', 'E_ALL|E_STRICT');
error_reporting(E_ALL);

header('Content-Type: text/html; charset=utf-8');

$autoload = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
}
if (!class_exists('PhpSigepFPDF')) {
    throw new RuntimeException(
        'N�o encontrei a classe PhpSigepFPDF. Execute "php composer.phar install" ou baixe o projeto ' .
        'https://github.com/stavarengo/php-sigep-fpdf manualmente e adicione a classe no seu path.'
    );
}

// Configura o php-sigep

// Se voc� n�o usou o composer � necess�rio carregar o script Boostrap.php manualmente.
// Caso voc� tenha usado o composer o Bootstrap PHP ser� carregado autom�ticamente pelo autoload (quando necess�rio).
require_once __DIR__ . '/../src/PhpSigep/Bootstrap.php';

$accessDataParaAmbienteDeHomologacao = new \PhpSigep\Model\AccessDataHomologacao();

$config = new \PhpSigep\Config();
$config->setAccessData($accessDataParaAmbienteDeHomologacao);
$config->setEnv(\PhpSigep\Config::ENV_PRODUCTION);
$config->setCacheOptions(
    array(
        'storageOptions' => array(
            // Qualquer valor setado neste atributo ser� mesclado ao atributos das classes 
            // "\PhpSigep\Cache\Storage\Adapter\AdapterOptions" e "\PhpSigep\Cache\Storage\Adapter\FileSystemOptions".
            // Por tanto as chaves devem ser o nome de um dos atributos dessas classes.
            'enabled' => false,
            'ttl' => 10,// "time to live" de 10 segundos
            'cacheDir' => sys_get_temp_dir(), // Opcional. Quando n�o inforado � usado o valor retornado de "sys_get_temp_dir()"
        ),
    )
);

\PhpSigep\Bootstrap::start($config);