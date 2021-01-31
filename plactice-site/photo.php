<?php 
session_start();
require_once('menu.php');
require_once('data.php');


$titleSecond1Name=$_GET["title"];
$second1 = Menu::findBySecondTitle($seconds1, $titleSecond1Name);

?>

<body>

<? include("header.php");?>

<section class="photo" id="photo">
        <div class="container">
            <h2 class="photo-title">photo</h2>
            <div class="photo-wrapper">


<div class="photo-item">     
    <img src="<?php echo $second1->getImage()?>" class="photo-item">
    <a href="/photo.php?title=<?php echo $second1->getTitle()?>"><?php echo $second1->getTitle()?></a><br>
    
    <button type="button" onclick=history.back()>前へ戻る</button>
</div>


</section>
   <? include("footer.php"); ?>
   


</body>