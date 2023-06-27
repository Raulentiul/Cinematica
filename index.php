<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Bar Example</title>
  <link rel="stylesheet" type="text/css" href="css_bar1.css">
  <link rel="stylesheet" type="text/css" href="css_page1.css">
 
</head>
<body>
  <div class="bar1">
    <img src="cinematica.png" alt="Cinema Logo">
    <?php if(!isset($_SESSION['email'])): ?>
    <button class="button_login" onclick="redirectToPage()">LogIn</button>
    <script>
      function redirectToPage() { 
        window.location.href = "login.php"; 
      }
      </script>
    <?php else: ?>
      <button class="button_login" onclick="redirectToPage()">Logout</button>
    <script>
      function redirectToPage() { 
        window.location.href = "logout.php"; 
      }
      </script>
    <?php endif; ?>
  </div>
  <div class="bar2">
    <ul>
      <li><a href="https://github.com/Raulentiul">My Github</a></li>
      <li><a href="https://goo.gl/maps/sd9s8PaiPLPfYAJR7">Cinema Location</a></li>
    </ul>
  </div>
  <p>An iframe with no borders:</p>
  <!-- <iframe src="page1.html" width="100%" height="1000" style="border: none;" frameborder="0"></iframe> -->
  <div id="parent-container">
  <div class="navigation-buttons">
  <div class="previous nav-btn"><</div>
  <div class="next nav-btn">></div>
  </div>

 <div class="slider-carousel">
      <div class="images main">
        <img src="shrek.jpg" />
        <div class="image-text">Image 1</div>
      </div>
      <div class="images">
        <img src="avatar.jpg" alt="flower 2" />
        <div class="image-text">Image 2</div>
      </div>
      <div class="images">
        <img src="pirates.jpg" alt="flower 3" />
        <div class="image-text">Image 3</div>
      </div>      
    </div>
  </div>

  <div class="table-container">
    <table>   
      <tr>
        <td><a href = "https://www.imdb.com/title/tt1877830/"><img src="https://m.media-amazon.com/images/M/MV5BMDdmMTBiNTYtMDIzNi00NGVlLWIzMDYtZTk3MTQ3NGQxZGEwXkEyXkFqcGdeQXVyMzMwOTU5MDk@._V1_FMjpg_UX1000_.jpg" width="280"></a></td>
        <td><a href = "https://www.imdb.com/title/tt2316204/"><img src="https://m.media-amazon.com/images/M/MV5BYzVkMjRhNzctOGQxMC00OGE2LWJhN2EtNmYyODRiMDNlM2ZmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX1000_.jpg" width="280"></a></td>
        <td><a href = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fm.imdb.com%2Ftitle%2Ftt0816692%2Fmediaviewer%2Frm2181050368%2F&psig=AOvVaw0hTyjcdwDN_-f0Y07uzOgh&ust=1686284632874000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMDR6Ifqsv8CFQAAAAAdAAAAABAH"><img src="https://m.media-amazon.com/images/M/MV5BNDBiZTNiNjItYWFjNC00Yzc2LWFjMWUtNDAyZmFlZGM0ZWI0XkEyXkFqcGdeQXVyNDQ5MDYzMTk@._V1_.jpg" width="280"></a></td>
        <td><a href = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt2015381%2F&psig=AOvVaw3UavzkIiGlKKbT4Jlw6X24&ust=1686280729011000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCOD_7LHbsv8CFQAAAAAdAAAAABBf"><img src="https://m.media-amazon.com/images/M/MV5BNDIzMTk4NDYtMjg5OS00ZGI0LWJhZDYtMzdmZGY1YWU5ZGNkXkEyXkFqcGdeQXVyMTI5NzUyMTIz._V1_FMjpg_UX1000_.jpg" width="280"></a></td>
        <td><a href = "https://www.imdb.com/title/tt1877830/"><img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_FMjpg_UX1000_.jpg" width="280"></a></td>
      </tr>
      
      <tr>
        <td><a href = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt0443453%2F&psig=AOvVaw0FAxQpqiV6eXTxBgxJ3RJn&ust=1686284837122000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCIjZu9jqsv8CFQAAAAAdAAAAABAD"><img src="https://m.media-amazon.com/images/M/MV5BMTk0MTQ3NDQ4Ml5BMl5BanBnXkFtZTcwOTQ3OTQzMw@@._V1_FMjpg_UX1000_.jpg" width="280"></a></td>
        <td><a href = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt0837562%2F&psig=AOvVaw3kNyQlNA09_1ngiKhJjlUM&ust=1686284921854000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCJiX8IDrsv8CFQAAAAAdAAAAABAD"><img src="https://m.media-amazon.com/images/M/MV5BMTM3NjQyODI3M15BMl5BanBnXkFtZTcwMDM4NjM0OA@@._V1_FMjpg_UX1000_.jpg" width="280"></a></td>
        <td><a href = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt2293640%2Fmediaviewer%2Frm3451909376&psig=AOvVaw2NpngMoHALKezFJSM-OuHT&ust=1686285022327000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCNii7rDrsv8CFQAAAAAdAAAAABAH"><img src="https://m.media-amazon.com/images/M/MV5BMTg2MTMyMzU0M15BMl5BanBnXkFtZTgwOTU3ODk4NTE@._V1_FMjpg_UX1000_.jpg" width="280"></a></td>
        <td><a href = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt0419706%2F&psig=AOvVaw0ikDEuSSKHDCJizO01KFjM&ust=1686285103389000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMjPzdfrsv8CFQAAAAAdAAAAABAX"><img src="https://m.media-amazon.com/images/M/MV5BOGQ1NzkxOWUtMjc0Ni00MWY0LTk4YjAtODUzN2I2M2QyYzIzXkEyXkFqcGdeQXVyMjQwMjk0NjI@._V1_FMjpg_UX1000_.jpg" width="280"></a></td>
        <td><a href = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt0481499%2F&psig=AOvVaw178yfLUns0_H6w2OihD4Iu&ust=1686285198768000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCOjq7oTssv8CFQAAAAAdAAAAABAD  "><img src="https://m.media-amazon.com/images/M/MV5BMTcyOTc2OTA1Ml5BMl5BanBnXkFtZTcwOTI1MjkzOQ@@._V1_FMjpg_UX1000_.jpg" width="280"></a></td>
      </tr>
      
    </table>
  </div>
<script src="script_page1.js"></script>
</body>
</html>
