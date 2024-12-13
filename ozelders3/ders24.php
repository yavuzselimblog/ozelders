<?php 
//str replace => istediğin yeri istediğin veri ile değişmek
$metin = "istanbula yaz geldi";
$degistir = str_replace('yaz','kış',$metin);
echo $metin.'<br>';
echo $degistir;
?>