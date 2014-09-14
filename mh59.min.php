<?
function mh59($str, $length = 16){
    $a='';$b=strtolower($b);for($c=0;$c<$d;$c++){$e=hexdec($b[$c]);$f=hexdec($b[(int)(strlen($b)/2)+$c]);$g=$e-$f+($c%8);if($g>0){$a.=chr(65+$g);}else{$a.=chr(122+$g);}}return $a;
}