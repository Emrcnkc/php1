<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>DİZİ ÖRNEĞİ</title>
</head>
<body>
    <h2>NOT LİSTESİ</h2>
<?php
$numara=array(1,2,3,4,5);
$arasinav=array(60,90,60,40,90,20);
$final=array(70,30,70,70,100,30);
$tablo="<table border='1'><tr><th>NUMARA</th>  <th>ARASINAV</th>";
$tablo.="<th>FİNAL</th> <th>ORTALAMA</th></tr>";  
 for($i=0;$i<count($numara);$i++)
 {
$tablo.="<tr><td>".$numara[$i]."</td>";
$tablo.="<td>$arasinav[$i]</td>";
$tablo.="<td>$final[$i]</td>";
 $tablo.="<td>".($arasinav[$i]*0.3+$final[$i]*0.7)."</td>";
 $tablo.="</tr>";
 }
 $tablo.="</table>";
 echo $tablo;
 date_default_timezone_set('Europe/Istanbul');
 $t=getdate();
 /*echo "Saat:" . $t["hours"] . ":" . $t["minutes"] . ":" . $t["seconds"];
 echo "<br/>Tarih:".$t["mday"]."/".$t["mon"]."/".$t["year"];*/
 echo "Tarih: ".date("j/m/Y");
 echo "<br/> ZAMAN:".date("H:i:s");

?>
    
</body>
</html>