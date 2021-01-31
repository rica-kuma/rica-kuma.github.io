<?php 
session_start();
require_once('menu.php');
require_once('data.php');


$titleSecond2Name=$_GET["title"];
$second2 = Menu::findBySecond2Title($seconds2, $titleSecond2Name);

?>

<body>

<? include("header.php");?>

<section class="photo" id="photo">
        <div class="container">
            <h2 class="photo-title">photo</h2>
            <div class="photo-wrapper">


<div class="photo2-item">
    <img src="<?php echo $second2->getImage()?>" class="photo2-item">
    <a href="/photo2.php?title=<?php echo $second2->getTitle()?>"><?php echo $second2->getTitle()?></a><br>
    <button type="button" onclick=history.back()>前へ戻る</button>
    
</div>

</section>
   <? include("footer.php"); ?>
   


</body>