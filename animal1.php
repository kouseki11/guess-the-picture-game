<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vocabulary</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul"><h1>Guess the Animals</h1></div>
    <img class="img1" src="img/crocodile.png">
    <?php
    if(isset($_POST['cetak'])){
        $a=$_REQUEST['panjang1'];
      
        if($a==="Crocodile") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($a==="crocodile") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($a==="CROCODILE") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($a) {
            echo "<audio autoplay>
            <source src='sound/Wrong-answer-sound-effect.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/wrong.png'width='100' height='100'/>";
        }
    }
     ?>
    
    <form name="form1" action="animal1.php" method="POST">
    <input class="holder" type="text" name="panjang1" class="panjang1" placeholder="Write Here">
    <br>
    <a href="index.php" class="next">HOME</a>
    <input class="button" type="submit" name="cetak" value="ANSWER"> 
    <a href="animal2.php" class="next">NEXT</a>

    
</body>
</html>