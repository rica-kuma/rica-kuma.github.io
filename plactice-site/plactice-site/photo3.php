<?php 
session_start();
require_once('menu.php');
require_once('data.php');


$titleSecond3Name=$_GET["title"];
$second3 = Menu::findBySecond3Title($seconds3, $titleSecond3Name);

?>

<body>

<? include("header.php");?>

<section class="photo" id="photo">
        <div class="container">
            <h2 class="photo-title">photo</h2>
            <div class="photo-wrapper">


<div class="photo3-item">
    <img src="<?php echo $second3->getImage()?>" class="photo3-item">
    <a href="/photo3.php?title=<?php echo $second3->getTitle()?>"><?php echo $second3->getTitle()?></a><br>
    <button type="button" onclick=history.back()>前へ戻る</button>
    
</div>

</section>
   <? include("footer.php"); ?>
   


</body>