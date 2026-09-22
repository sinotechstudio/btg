<?php declare(strict_types=1);
namespace App\Support;
final class Env { private static array $v=[]; public static function load(string $p):void { if(!is_readable($p)) return; foreach(file($p,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) as $l){$l=trim($l);if($l===''||$l[0]==='#'||!str_contains($l,'='))continue;[$k,$v]=explode('=',$l,2);self::$v[trim($k)]=trim($v," \t\n\r\0\x0B\"");}} public static function get(string $k,?string $d=null):?string{return self::$v[$k]??$_ENV[$k]??$_SERVER[$k]??$d;} }
