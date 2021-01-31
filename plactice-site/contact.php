<? include("header.php"); ?>
<?require_once("data.php")?>
<?require_once("menu.php")?>

<section class="contact" id="contact">
        <div class="container">
            <h2 class="contact-title">お問い合わせ</h2>
            <p>ご質問があればお気軽にご入力ください</p>
            <div class="contact-form">

            <form action="sent.php" method="post">
                <label for="your name"><input type="text" name="your name" id="your name" placeholder=" お名前"></label><br>
                <label for="mail"><input type="email" name="mail" id="mail" placeholder=" メールアドレス"></label><br>
                <label for="question"><textarea name="question" id="question" cols="30" rows="10" placeholder="  ご質問・ご感想など"></textarea></label><br>
                <input type="submit" value="送信"> 
            </form>    
                  
            </div>
        </div>
    </section>
    

<? include("footer.php");?>