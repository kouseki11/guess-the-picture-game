<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vocabulary</title>
      <style>
 body{
  background-color: lightblue;
  background-image: url("img/bgfs.png");
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
    <div class="judul"><h1>Guess the Foods</h1></div>
    <img class="img1" src="img/spaghetti.png">
    <?php
    if(isset($_POST['cetak'])){
        $a=$_REQUEST['panjang15'];
      
        if($a==="Spaghetti") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($a==="spaghetti") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($a==="SPAGHETTI") {
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
    <form name="form15" action="food5.php" method="POST">
    <input class="holder" type="text" name="panjang15" class="panjang15" placeholder="Write Here">
    <br>
    <a href="food4.php" class="next">PREV</a>
    <input class="button" type="submit" name="cetak" value="ANSWER"> 
    <a href="finish3.php" class="next">FINISH</a>

</body>
</html>