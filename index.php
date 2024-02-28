<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Örneği</title>
</head>
<body>
<?php
if(!isset($_GET["gonder"])) // gonder isminde bir değer gelmediyse   
{

 ?>
 <form action="index.php" method="get">
 Numara: <input type="text" name="num" /> <br/>
 Ad:     <input type="text" name="ad"> <br/>
 Adres:   <input type="text" name="adr"><br/>
 <input type="submit" name="gonder" value="GÖNDER"/>
 </form>

 <?php

}

else  // gonder isminde bir değer geldiyse   
{
    $numara=$_GET["num"];
 
    $ad=$_GET["ad"];
  

    $adres=$_GET["adr"];
 

    echo "<h2>HOŞGELDİN ".$ad."</h2>";
    echo "GÖNDERDİĞİNİZ VERİLERİ ALDIK!<BR/>";
    echo "Adınız: ".$ad."<br/>";
    echo "Adresiniz: ".$adres."<br/>";
}
?>

</body>
</html>
