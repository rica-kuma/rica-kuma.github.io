<?php
require_once('menu.php');
require_once('data.php');

    $titleName=$_GET["title"];

    $top = Menu::findByTitle($tops, $titleName);
?>

<? include("header.php");?>

<section class="photo" id="photo">
        <div class="container">
            <h2 class="photo-title">animal</h2>
            <div class="photo-wrapper">

            
<?php
                
        require_once("data.php");
?>

     <?php foreach($seconds2 as $second2):?>
         <div class="photo-item">       
             <img src="<?php echo $second2->getImage()?>" class="photo1-item">
               <a href="/photo2.php?title=<?php echo $second2->getTitle()?>"><?php echo $second2->getTitle()?></a>
                

        <p class="price">¥<?php echo $second2->getTaxInPrice() ?> (税込)</p>
        <form method="post" action="cart.php" class="cart-form">
        <input type="text" value="0" name="<?php echo $second2->getTitle();?>"><span>枚</span><br>
        
        </div>

         <?php endforeach?>
         
        </div>


        <?

        $orderCount=0;
        if($orderCount>1){

        echo "./cart.php";

        }

        ?>

        
        <input type="submit" value="カートへ入れて合計を確認">
        </div>
    </section>

<? include("footer.php");?>


<!-もし 枚数（getTitle）に数字が入っていたらcart.phpへ選択したもののみ表示すると書く
IF文、GET or POST を組み合わせる

//cart.phpにseries.phpで選択したものみ表示されるようにしたい

GETとPOSTで洗濯した情報（$orderCount）を受け取れるようにする->