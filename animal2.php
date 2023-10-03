<html>
    <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vocabulary</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul"><h1>Guess the Animals</h1></div>
    <img class="img2" src="img/monkey.png">
    <?php
    if(isset($_POST['cetak'])){
        $b=$_REQUEST['panjang2'];
      
        if($b==="Monkey") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($b==="monkey") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($b==="MONKEY") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($b) {
            echo "<audio autoplay>
            <source src='sound/Wrong-answer-sound-effect.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/wrong.png'width='100' height='100'/>";
        }
    }
     ?>
    <form name="form2" action="animal2.php" method="POST">
    <input class="holder" type="text" name="panjang2" class="panjang2" placeholder="Write Here">
    <br>
    <a href="animal1.php" class="next">PREV</a>
    <input class="button" type="submit" name="cetak" value="ANSWER"> 
    <a href="animal3.php" class="next">NEXT</a>



</body>
</html>