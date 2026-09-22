<?php declare(strict_types=1);
require dirname(__DIR__).'/app/Support/Env.php';
\App\Support\Env::load(dirname(__DIR__).'/.env');
function e(?string $v):string{return htmlspecialchars($v??'',ENT_QUOTES,'UTF-8');}
function app_name():string{return \App\Support\Env::get('APP_NAME','FreeFire Arena')??'FreeFire Arena';}
