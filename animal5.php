<html>
    <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vocabulary</title>
      <style>
body{
  background-color: lightblue;
  background-image: url("img/bgms.png");
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

.img5{
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
    <div class="judul"><h1>Guess the Animals</h1></div>
    <img class="img5" src="img/platypus.png">

    <?php
    if(isset($_POST['cetak'])){
        $b=$_REQUEST['panjang5'];
      
        if($b==="Platypus") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($b==="platypus") {
            echo "<audio autoplay>
            <source src='sound/lucky-star-good-job.mp3' type='audio/mpeg'>
            </audio>
            <img src='img/correct.png'width='100' height='100'/>";
        }elseif($b==="PLATYPUS") {
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
     
    <form name="form5" action="animal5.php" method="POST">
    <input class="holder" type="text" name="panjang5" class="panjang5" placeholder="Write Here">
    <br>
    <a href="animal4.php" class="next">PREV</a>
    <input class="button" type="submit" name="cetak" value="ANSWER"> 
    <a href="finish1.php" class="next">FINISH</a>


</body>
</html>