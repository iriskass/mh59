<?
function mh59($str, $length = 16){
    $a='';$b=strtolower($b);$c=(int)(strlen($b)/2);for($d=0;$d<$e;$d++){$f=hexdec($b[$d]);$g=hexdec($b[$c+$d]);$h=$f-$g+($d%8);if($h>0){$a.=chr(65+$h);}else{$a.=chr(122+$h);}}return $a;
}
