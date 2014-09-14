<?
function mh59($str, $length = 16){
    $out = '';
    $str = strtolower($str);
    $offset = (int)(strlen($str)/2);
    for($i=0; $i<$length; $i++){
        $hex = hexdec($str[$i]);
        $hex2 = hexdec($str[$offset+$i]);

        $n = $hex - $hex2 + ($i % 8);

        if($n > 0){
            $out .= chr(65 + $n);
        }else{
            $out .= chr(122 + $n);
        }
    }
    return $out;
}
