<?php 
    session_start();
    $_SESSION["totalPayment"]="$totalPayment";
    $saveTotalPayment=$_SESSION["totalPayment"];
     echo $saveTotalPayment;
?>

<? include("header.php"); ?>
<?require_once("data.php")?>
<?require_once("menu.php")?>

<section class="cart">
  <div class=container>
    
    <h2>ご注文内容確認</h2>
    

        <?

        $orderCount=0;
        if($orderCount>1){

        echo "cart-photo";

        }
        
        ?> 
    <div class="cart-photo">
     <?php $totalPayment=0?>   
    <?php foreach($seconds1 as $second1):?>
        <?php $orderCount = $_POST[$second1->getTitle()];
        
        $second1->setOrderCount($orderCount);
        $totalPayment+=$second1->getTotalPrice();

        ?>

    <div class="cart-amount">
       <img src="<?php echo $second1->getImage() ?>" class="photo-item"><br>
        <?php echo $second1->getTitle() ?>
        x
        <?php echo $orderCount ?>
        個
    
      <p><?php echo $second1->getTotalPrice() ?>円</p>
      </div>
      <?php endforeach?>
      

    <?php foreach($seconds2 as $second2):?>
        <?php $orderCount = $_POST[$second2->getTitle()];
        
        $second2->setOrderCount($orderCount);
        $totalPayment+=$second2->getTotalPrice();
        ?>
     <div class="cart-amount">
       <img src="<?php echo $second2->getImage() ?>" class="photo-item"><br>
        <?php echo $second2->getTitle() ?>
        x
        <?php echo $orderCount ?>
        個
        <p><?php echo $second2->getTotalPrice() ?>円</p>
      </div>
      <?php endforeach?>
    

    <?php foreach($seconds3 as $second3):?>
        <?php $orderCount = $_POST[$second3->getTitle()];
        
        $second3->setOrderCount($orderCount);
        $totalPayment+=$second3->getTotalPrice();

        ?>

       <div class="cart-amount">
       <img src="<?php echo $second3->getImage() ?>" class="photo-item"><br>
        <?php echo $second3->getTitle() ?>
        x
        <?php echo $orderCount ?>
        個
      
      <p><?php echo $second3->getTotalPrice() ?>円</p>
      </div>
      <?php endforeach?>
    
    </div>
     
    <h3 class="total-payment">~合計金額: <?php echo $totalPayment ?>円~</h3>
    

    <div class="button-wrapper">
    <button type="button" onclick=history.back()>前へ戻る</button>
    <input type="button" onClick="location.href='./series.php'" value="flowerへ飛ぶ">
    <input type="button" onClick="location.href='./series2.php'" value="anumalへ飛ぶ">
    <input type="button" onClick="location.href='./series3.php'" value="seaへ飛ぶ">
    <a href="/"><button type="button">リンク型決済システム画面へ</button></a>
    
    </div>

    </div>
    </div>
</section>
