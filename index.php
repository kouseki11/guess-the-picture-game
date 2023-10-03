<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
body{
  background-color: lightblue;
  background-image: url("img/sky.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  text-align: center;
  overflow: hidden;
    
}

h1{
    text-align: center;
}

h2{
    text-align: center;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-template-rows: repeat(8, 5vw);
    grid-gap: 15px;
}

.gallery__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.gallery__item--1 {
    grid-column-start: 1;
    grid-column-end: 6;
    grid-row-start: 1;
    grid-row-end: 4;
    display: block;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}

.gallery__item--2 {
    grid-column-start: 5;
    grid-column-end: 8;
    grid-row-start: 1;
    grid-row-end: 4;
    display: block;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}

.gallery__item--4 {
    grid-column-start: 2;
    grid-column-end: 8;
    grid-row-start: 4;
    grid-row-end: 7;
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
    </style>
</head>
<body>
    <h1>Learn Vocabulary<h1>
    <h2>Select Category</h2>
<div class="gallery">
  <figure class="gallery__item gallery__item--1">
  <a href="animal1.php">
    <img src="img/iguana.png" class="gallery__img" alt="Image 1">
  </a>
  Animal
  </figure>
  <figure class="gallery__item gallery__item--2">
  <a href="sport1.php">
    <img src="img/volleyball.png" class="gallery__img" alt="Image 2">
  </a>
    Sport
  </figure>
  <figure class="gallery__item gallery__item--4">
  <a href="food1.php">
    <img src="img/pancake.png" class="gallery__img" alt="Image 4">
  </a>
    Food
  </figure>
</div>
</body>
</html>