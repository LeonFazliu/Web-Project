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
         <a href="PinkPanther.php"><img class="Movies" src="PP.jpg"></a>
         <a href="PinkPanther.php"><p class="Moviesdesc">Pink Panther</p></a>
        </div>

        <div class="moviehover">
          <a href="Titanic.php"><img class="Movies" src="Titanic.jpg" alt=""></a>
          <a href="Titanic.php"><p class="Moviesdesc">Titanic</p></a>
        </div>
        <div class="moviehover">
          <a href="Moonlight.php"><img class="Movies" src="Moonlights.jfif" alt=""></a>
          <a href="Moonlight.php"><p class="Moviesdesc">MoonLight</p></a>
        </div>
          <div class="moviehover">
            <a href="Bridesmaids.php"><img class="Movies" src="Bridemaids.jpg" alt=""></a>
            <a href="Bridesmaids.php"><p class="Moviesdesc">Bridesmaids</p></a>
          </div>
          <div class="moviehover">
            <a href="TheGodFather3.php"><img class="Movies" src="TheGodFather3.jpg" alt=""></a>
            <a href="TheGodFather3.php"><p class="Moviesdesc">The God Father III</p></a>
        </div>
        
    </div>
     
  </body>
</html>