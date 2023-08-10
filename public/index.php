<?php
use LOMU\core\App;

  //path    

  define('ROOT',dirname(__DIR__));
  define('DS',DIRECTORY_SEPARATOR);

  define('APP',ROOT.DS.'app');
  define('VENDOR',ROOT.DS.'vendor');
  
  define('APICONTROLLERSPATH',APP.DS.'apicontrollers');
  define('MODELS',APP.DS.'models');
  define('CORE',APP.DS.'core');

  define('V1',APICONTROLLERSPATH.DS.'v1');

  //connection 
  
  define('HOST','localhost');
  define('PORT','3306');

  define('USERNAME','root');
  define('PASSWORD','');

  define('TYPE','mysql');
  define('DBNAME','simple_social_media');
  //constant

  define('APICONTROLLERSNAME','apicontrollers');
  
  require_once VENDOR.DS.'autoload.php';

  $appObj=new App();

?>