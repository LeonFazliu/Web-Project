<?php
session_start();

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "filmatDB";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Lidhja me bazën e të dhënave ka dështuar: " . $conn->connect_error);
}

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}

$getMoviesQuery = "SELECT * FROM filmat";
$result = $conn->query($getMoviesQuery);
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movies24Online</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="pagination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
    
    <script src="script.js" defer></script>
  </head>
  
  <div class="background">
    <body>
    <nav class="nav">
      <i class="uil uil-bars navOpenBtn"></i>
      <a href="index.php" class="logo">Movies24Online</a>

      <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="Action.php">Action</a></li>
        <li><a href="Horror.php">Horror</a></li>
        <li><a href="Comedy.php">Comedy</a></li>
        <li><a href="Drama.php">Drama</a></li>
        <li><a href="Fantasy.php">Fantasy</a></li>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div><a href="logout.php">Log out</a></div>
      </ul>
      
    </nav>
    

    
    <div class="product"> 
      <button class="pre-btn"><img src="arrow.png" alt=""></button>
      <button class="nxt-btn"><img src="arrow.png" alt=""></button>
      <div class="product-container">
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">8.5</span>
                  <img src="Halloween.jfif" class="product-thumb" alt="">
                  <a href="Halloween.php"><button class="card-btn">Watch now</button></a>
              </div>             
          </div>
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">8.0</span>
                  <img src="Dumbanddumber.jfif" class="product-thumb" alt="">
                  <a href="DumbandDumber.php"><button class="card-btn">Watch now</button></a>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">9.0</span>
                  <img src="Avengers.jpg" class="product-thumb" alt="">
                  <a href="AvengersEndGame.php"><button class="card-btn">Watch now</button></a>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">7.0</span>
                  <img src="Barbie.jpg" class="product-thumb" alt="">
                  <a href="Barbie.php"><button class="card-btn">Watch now</button></a>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">8.3</span>
                  <img src="Spider-Man-_Across_the_Spider-Verse_poster.jpg" class="product-thumb" alt="">
                  <a href="Spiderman.php"><button class="card-btn">Watch now</button></a>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">10</span>
                  <img src="Scream6.jpg" class="product-thumb" alt="">
                  <a href="Scream6.php"><button class="card-btn">Watch now</button></a>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">8.7</span>
                  <img src="JW3.jpg" class="product-thumb" alt="">
                  <a href="Johnwick3.php"><button class="card-btn">Watch now</button></a>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">5.2</span>
                  <img src="leo.jpg" class="product-thumb" alt="">
                  <a href="leo.php"><button class="card-btn">Watch now</button></a>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">8.4</span>
                  <img src="Titanic.jpg" class="product-thumb" alt="">
                  <a href="Titanic.php"><button class="card-btn">Watch now</button></a>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <span class="discount-tag">7.5</span>
                  <img src="TheBabyboss2.jpg" class="product-thumb" alt="">
                  <a href="TheBabyBoss2.php"><button class="card-btn">Watch now</button></a>
              </div>
          </div>
      </div>
</div>
    

           

    
<div class="Container-mainpage1">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
              
              echo '<div class="moviehovering">
                      <a href="'.$row["filename"].'"><img class="Movies" src="' . $row["cover_image"] . '" alt=""></a>
                      <a href="'.$row["filename"].'"><p class="Moviesdesc">'.$row["title"].'</p></a>
                    </div>';
              
            }
        } else {
            echo "Nuk ka filme në disponim.";
        }
      
        ?>
    </div>
    <footer>

      <ul class="pagination">
        <li class="icon"><a href="#">
           <span class="fas fa-angle-left"></span>
           Previous</a>
        </li>
        <li><a href="index.php">1</a></li>
        <li><a href="Main2.php">2</a></li>
        <li class="icon"><a href="Main2.php">
           Next<span class="fas fa-angle-right"></span>
           </a>
        </li>
     </ul>

      
    </footer>

    
  </body>
  
  </div>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");




    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  background: #f0faff;
}

.nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 15px 200px;
  background: #4a98f7;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  z-index: 999;
}
.nav,
.nav .nav-links {
  display: flex;
  align-items: center;
}
.nav {
  justify-content: space-between;
}
a {
  color: #fff;
  text-decoration: none;
}
.nav .logo {
  font-size: 22px;
  font-weight: 500;
}
.nav .nav-links {
  column-gap: 20px;
  list-style: none;
}
.nav .nav-links a {
  transition: all 0.2s linear;
}
.nav.openSearch .nav-links a {
  opacity: 0;
  pointer-events: none;
}
.nav .search-icon {
  color: #fff;
  font-size: 20px;
  cursor: pointer;
}
.nav .search-box {
  position: absolute;
  right: 250px;
  height: 45px;
  max-width: 555px;
  width: 100%;
  opacity: 0;
  pointer-events: none;
  transition: all 0.2s linear;
}
.nav.openSearch .search-box {
  opacity: 1;
  pointer-events: auto;
}
.search-box .search-icon {
  position: absolute;
  left: 15px;
  top: 50%;
  left: 15px;
  color: #4a98f7;
  transform: translateY(-50%);
}
.search-box input {
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  border-radius: 6px;
  background-color: #fff;
  padding: 0 15px 0 45px;
}
.nav .navOpenBtn,
.nav .navCloseBtn {
  display: none;
}
.moviehovering:hover {
    transform: scale(1.1);
    transition: transform 0.9s ease-in-out, box-shadow 0.9s ease-in-out;
    
}

.product {
  position: relative;
  overflow: hidden;
  padding: 20px;
  z-index: 1;
  margin-top: 4rem;
}

.product-container {
  padding: 0 10vw;
  display: flex;
  overflow-x: auto;
  scroll-behavior: smooth;
  
}

.product-container::-webkit-scrollbar {
  display: none;
}

.product-card {
  flex: 0 0 auto;
  width: 250px;
  height: 350px;
  margin-right: 40px;
}

.product-image {
  position: relative;
  width: 100%;
  height: 350px;
  overflow: hidden;
  
}



.card-btn {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  padding: 10px;
  width: 90%;
  text-transform: capitalize;
  border: none;
  outline: none;
  background: #fff;
  border-radius: 5px;
  transition: 0.5s;
  cursor: pointer;
  opacity: 0;
}

.product-card:hover .card-btn {
  opacity: 1;
}

.card-btn:hover {
  background: #4a98f7;
  color: #fff;
}



.product-brand {
  text-transform: uppercase;
}



.pre-btn,
.nxt-btn {
  border: none;
  width: 10vw;
  height: 100%;
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 150%);
  cursor: pointer;
  z-index: 1;
}

.pre-btn {
  left:0;
  transform: rotate(180deg);
}

.nxt-btn {
  right: 0;
}

.pre-btn img,
.nxt-btn img {
  opacity: 0.2;
}

.pre-btn:hover img,
.nxt-btn:hover img {
  opacity: 1;
}


.Container-mainpage1{
 
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-around;
	align-items: flex-start;
	align-content: space-between;
}
.Container{
    margin-top: 2rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: flex-start;
    align-content: space-evenly;
}
.Container2{
  margin-top: 2rem;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-evenly;
  align-items: flex-start;
  align-content: space-evenly;
  
}
.Container3{
  margin-top: 2rem;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-evenly;
  align-items: flex-start;
  align-content: space-evenly;
  margin-bottom: 3rem;
}


.Movies{
  z-index: 1;
  overflow: hidden;
  position: relative;
  height: 300px;
  width: 200px;
  margin-top: 2rem;
  
  
}
.Moviesdesc{
  display: flex;
  justify-content: space-between;
  color: black;
}
.videos-movies{
	display: flex;
	flex-direction: row;
	justify-content: center;
  margin-bottom:5rem;
  
}
.moviesmp4{
	height: 500px;
  width: 100%;
}
hr{
color: #0077b6;
}
.SuggestedMoviesC{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: start;
  align-items: flex-start;
  align-content: flex-start;
  margin-bottom: 2rem; 
}
.SuggMovies{
  margin-top: 1rem;
  height: 200px;
  width: 200px;
  object-fit: contain;
  
}
.SuggestedParagraph{
  display: flex;
  margin-left: 2rem;
  color: #0077b6;
  font-weight: bold;
  
}
.footermain{
  display: flex;
justify-content: space-between;
border-style: solid;
border-color: #0077b6;
border-radius: 10px;
}
.footerleft{
  margin-left: 2rem;
  
}
.footercenter{
  font-weight: bold;
  color: #0077b6;
}
.footerright{
height: 100%;
width: 45%;  
justify-content: center;
align-items: center;
}
.videosdesc1{
  height: 19rem;
  margin-top: 0.3rem;
}





@media screen and (max-width: 1160px) {
  .nav {
    padding: 15px 100px;
  }
  .nav .search-box {
    right: 150px;
  }
}
@media screen and (max-width: 950px) {
  .nav {
    padding: 15px 50px;
  }
  .nav .search-box {
    right: 100px;
    max-width: 400px;
  }
}
@media screen and (max-width: 768px) {
  .nav .navOpenBtn,
  .nav .navCloseBtn {
    display: block;
  }
  .nav {
    padding: 15px 20px;
  }
  .nav .nav-links {
    position: fixed;
    top: 0;
    left: -100%;
    height: 100%;
    max-width: 280px;
    width: 100%;
    padding-top: 100px;
    row-gap: 30px;
    flex-direction: column;
    background-color: #11101d;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
    z-index: 100;
  }
  .nav.openNav .nav-links {
    left: 0;
  }
  .nav .navOpenBtn {
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .navCloseBtn {
    position: absolute;
    top: 20px;
    right: 20px;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .search-box {
    top: calc(100% + 10px);
    max-width: calc(100% - 20px);
    right: 50%;
    transform: translateX(50%);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }
  
  
  .Container-mainpage1 {
        flex-direction: column;
        align-items: center;
        text-align: center;
        justify-content: center;
        display: flex;
    }

    
    .Movies {
      height: auto;
      max-width: 100%;
      margin-top: 1rem;
      margin-bottom: 1rem;
      z-index: 100;
      display: flex;
      justify-content: space-between;
      align-items: center;
  }
      
  
  
  .SuggMovies {
      height: auto;
      max-width: 100%;
  }
  .footermain {
    flex-direction: column;
    align-items: center;
}


  </style>
  <script>

    const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})


const nav = document.querySelector(".nav"),
  searchIcon = document.querySelector("#searchIcon"),
  navOpenBtn = document.querySelector(".navOpenBtn"),
  navCloseBtn = document.querySelector(".navCloseBtn");



navOpenBtn.addEventListener("click", () => {
  nav.classList.add("openNav");
  nav.classList.remove("openSearch");
  searchIcon.classList.replace("uil-times", "uil-search");
});
navCloseBtn.addEventListener("click", () => {
  nav.classList.remove("openNav");
});
  </script>
</html>
