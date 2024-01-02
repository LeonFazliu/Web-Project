<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movies24Online</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="script.js" defer></script>
  </head>
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
    <div class="Container">
      <div class="moviehover">
        <a href="Scream6.php"><img class="Movies" src="Scream6.jpg" alt=""></a>
        <a href="Scream6.php"><p class="Moviesdesc">Scream VI</p></a>
      </div>
      <div class="moviehover">
        <a href="TheNun.php"><img class="Movies" src="TheNun.jpg" alt=""></a>
        <a href="TheNun.php"><p class="Moviesdesc">The Nun</p></a>
      </div>
      <div class="moviehover">
        <a href="TexasChainsaw.php"><img src="TexasCh.jfif" class="Movies" alt=""></a>
        <a href="TexasChainsaw.php"><p class="Moviesdesc">Texas Chainsaw 3D</p></a>
      </div>

      <div class="moviehover">
          <a href="Anabelle.php"><img class="Movies" src="Anabelle.jpg" alt=""></a>
          <a href="Anabelle.php"><p class="Moviesdesc">Anabelle</p></a>
      </div>

        <div class="moviehover">
          <a href="FNAF.php"><img src="fnaf.jpg" class="Movies" alt=""></a>
        <a href="FNAF.php"><p class="Moviesdesc">Five Nights at Freddy's</p></a>
        </div>

        <div class="moviehover">
          <a href="Halloween.php"><img class="Movies" src="Halloween.jfif" alt=""></a>
          <a href="Halloween.php"><p class="Moviesdesc">Halloween</p></a>
        </div>
    </div>
     
  </body>
</html>