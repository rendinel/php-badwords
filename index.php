<?php

 echo "Mio programma in php";
?>


<span>panda trucidati dai <b>BUG</b> </span>
<br>
<br>

<?php

 $variableContent="Questo é il contenuto di una variabile in php";
 echo $variableContent;

?>

<br>

<?php
 $name = "Ted";
?>

<h1>
  Ciao mi chiamo <?php echo $name; ?>
</h1>

<br>

<?php

var_dump($_GET);


?>

<br>
<?php
echo$_GET["name"];
?>

<br>
<span>
  <b>ESERCIZIO:</b>
</span>

<?php
$str = ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
echo strlen($str);

$str = str_replace('dolor', 'fattela na risata lorem che sei triste sempre con sto dolor', $str);
echo $str;

?>
