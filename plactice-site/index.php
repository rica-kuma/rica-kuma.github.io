
<? include("header.php"); ?>
<?require_once("data.php");?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<body>




   
    <!--lQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./script.js"></script>



    <section class="top" id="top-page">
        <div class="container">
            <div class="top-image">        
            <p class="top-title"></p>
        </div>
       </div>   
    </section>

    <section class="about" id="about">
        <div class="container">
            <h2 class="about-title">写真、売れたらいいな〜というサイトです</h2>
            <p>もし宜しければ<br>ゆっくり見て行ってください</p>
        </div>
    </section>

    

    <section class="series" id="series">
        <div class="container">
            <h2 class="series-title">series</h2>

            <div class="series-wrapper">
            
                <div class="series-items">
                <img src="./img/flower3.JPG" class="series-image">
                <a href="/series.php" class="series-title">flower</a>

                <img src="./img/cat.JPG" class="series-image">
                <a href="/series2.php" class="series-title">animal</a>

                <img src="./img/sea2.JPG" class="series-image">
                <a href="/series3.php" class="series-title">sea</a>
            
            </div>
                
                        
        </div>
    </section>

    
    <section class="profile" id="profile">
        <div class="container">
            <h2 class="profile-title">Profile</h2>
            <div class="profile-wrapper">
            <div class="profile-left">
                <img src="./img/tanuki.JPG" alt="">
            </div>
            <div class="profile-right">
                <br><a>E.S</a><p><br>全てXperiaで撮影しています<br>感想があればお気軽に<br>お問い合わせフォームへ</p>
            </div>
        </div>
        </div>
    </section>
    
    <? include("footer.php");?>
    <div id="page-top"><a href="#header">TOP</a></div>

</body>
</html>