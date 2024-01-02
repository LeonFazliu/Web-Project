<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movies24Online</title>
    <link rel="stylesheet" href="style.css"/>
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
      <a href="Main.php" class="logo">Movies24Online</a>

      <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="Action.php">Action</a></li>
        <li><a href="Horror.php">Horror</a></li>
        <li><a href="Comedy.php">Comedy</a></li>
        <li><a href="Drama.php">Drama</a></li>
        <li><a href="Fantasy.php">Fantasy</a></li>
        
        
      </ul>

      <i class="uil uil-search search-icon" id="searchIcon"></i>
      <div class="search-box">
        <i class="uil uil-search search-icon"></i>
        <input type="text" placeholder="Search here..." />
      </div>
      
    </nav>
    
    <section class="product"> 
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
  </section>
    <div class="Container-mainpage1">

      <div class="moviehover">  
        <a href="Spiderman.php"><img class="Movies" src="Spider-Man-_Across_the_Spider-Verse_poster.jpg" alt=""></a>
        <a href="Spiderman.php"><p class="Moviesdesc">Spider-Man</p></a>
      </div>
      <div class="moviehover">
        <a href="Halloween.php"><img class="Movies" src="Halloween.jfif" alt=""></a>
        <a href="Halloween.php"><p class="Moviesdesc">Halloween</p></a>
      </div>
      <div class="moviehover">
        <a href="DumbandDumber.php"><img class="Movies" src="Dumbanddumber.jfif" alt=""></a>
        <a href="DumandDumber.php"><p class="Moviesdesc">Dumb and Dumber</p></a>
      </div>
      <div class="moviehover">
        <a href="Titanic.php"><img class="Movies" src="Titanic.jpg" alt=""></a>
        <a href="Titanic.php"><p class="Moviesdesc">Titanic</p></a>
      </div>
      <div class="moviehover">
        <a href="AvengersEndGame.php"><img class="Movies" src="Avengers.jpg" alt=""></a>
        <a href="AvengersEndGame.php"><p class="Moviesdesc">Avengers End Game</p></a>
      </div>
    
    </div>
    <div class="Container2">
      <div class="moviehover">
        <a href="JohnWick3.php"><img class="Movies" src="JW3.jpg" alt=""></a>
        <a href="Johnwick3.php"><p class="Moviesdesc">John Wick 3</p></a>
      </div>
      <div class="moviehover">
        <a href="JohnWick4.php"><img class="Movies" src="JW4.jpg" alt=""></a>
        <a href="JohnWick4.php"><p class="Moviesdesc">John Wick 4</p></a>
      </div>
      <div class="moviehover">
        <a href="Anabelle.php"><img class="Movies" src="Anabelle.jpg" alt=""></a>
        <a href="Anabelle.php"><p class="Moviesdesc">Anabelle</p></a>
      </div>
      <div class="moviehover">
        <a href="Moonlight.php"><img class="Movies" src="Moonlights.jfif" alt=""></a>
          <a href="Moonlight.php"><p class="Moviesdesc">MoonLight</p></a>
        </div>
      <div class="moviehover">
        <a href="PinkPanther.php"><img class="Movies" src="PP.jpg"></a>
        <a href="PinkPanther.php"><p class="Moviesdesc">Pink Panther</p></a>
      </div>
    </div>
    <div class="Container3">

      <div class="moviehover">
        <a href="XmenApocalypse.php"><img class="Movies" src="XmenApocalypse.jpg" alt=""></a>
        <a href="XmenApocalypse.php"><p class="Moviesdesc" >X-Men Apocalypse</p></a>
      </div>

      <div class="moviehover">
        <a href="TexasChainsaw.php"><img src="TexasCh.jfif" class="Movies" alt=""></a>
        <a href="TexasChainsaw.php"><p class="Moviesdesc">Texas Chainsaw 3D</p></a>
      </div>

      <div class="moviehover">
        <a href="Barbie.php"><img src="Barbie.jpg" class="Movies" alt=""></a>
        <a href="Barbie.php"><p class="Moviesdesc">Barbie</p></a>
      </div>

      <div class="moviehover">
        <a href="TheEqualizer3.php"><img src="The Equalizer.jpg" class="Movies" alt=""></a>
        <a href="TheEqualizer3.php"><p class="Moviesdesc">The Equalizer 3</p></a>
      </div>
      
      <div class="moviehover">
        <a href="FNAF.php"><img src="fnaf.jpg" class="Movies" alt=""></a>
        <a href="FNAF.php"><p class="Moviesdesc">Five Nights at Freddy's</p></a>
      </div>

    </div>
    <footer>

      <ul class="pagination">
        <li class="icon"><a href="#">
           <span class="fas fa-angle-left"></span>
           Previous</a>
        </li>
        <li><a href="Main.php">1</a></li>
        <li><a href="Main2.php">2</a></li>
        <li class="icon"><a href="Main2.php">
           Next<span class="fas fa-angle-right"></span>
           </a>
        </li>
     </ul>

      
    </footer>

    
  </body>
  </div>
</html>
