<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vocabulary</title>
      <style>
 body{
  background-color: lightblue;
  background-image: url("img/bgs.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  text-align: center;
    
}


.judul{
  text-align: center;
  color: black;
}

.img1{
  height: 400px;
  width: 500px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}


.holder{
  text-align: center;
	margin: 10px;
	font-size: 13pt;
	padding: 10px;	
	background: transparent;
	color: #fff;
	font-family: roboto;
	border: none;
}
 
.holder:focus{
	outline: none;
}
 
.holder::-webkit-input-placeholder{
	color: white;
}
 

.holder:-moz-input-placeholder{
	color: white;
}
 

.holder:-ms-input-placeholder{
	color: white;
}

.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}

.next {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
          </style>
</head>
<body>
    <div class="judul"><h1>Guess the Sport</h1></div>
    <img class="img1" src="img/football.png">
    <?php
    if(isset($_POST['cetak'])){
        $a=$_REQUEST['panjang6'];
      
        if($a==="Football") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($a==="football") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($a==="FOOTBALL") {
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
    <form name="form6" action="sport1.php" method="POST">
    <input class="holder" type="text" name="panjang6" class="panjang6" placeholder="Write Here">
    <br>
    <a href="index.php" class="next">HOME</a>
    <input class="button" type="submit" name="cetak" value="ANSWER"> 
    <a href="sport2.php" class="next">NEXT</a>

</body>
</html>