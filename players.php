<!DOCTYPE html>
<html lang="en">

<head>
  <title>BHIMAVARAM TENNIS </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <style>
    table {
        border-collapse: collapse;
        width: 100%;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
    }

    th,
    td {
        padding: 10px;
        text-align: center;
    }

    th {
    position: relative;
    background-color: #fff;
    color: black;
}

th::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50%;
    height: 1px;
    background-color: black; /* You can change the color as needed */
}

    tr {
        border-bottom: 1px solid #3498db; /* Add underline to entire row */
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
        background-color: #ffffff;
    }

    a {
        text-decoration: none;
        color: #3498db;
    }

    a:hover {
        color: #2980b9;
    }
</style>



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">
      <div class="container">
          <div class="d-flex align-items-center">
              <h3 style="margin-left: 20px;">
                  BHIMAVARAM TENNIS
              </h3>


      <!-- <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              <img src="images/logo.png" alt="Logo">
            </a>
          </div> -->
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="matches.html" class="nav-link">Matches</a></li>
                <li class="active"><a href="players.php" class="nav-link">Players</a></li>
            
                <li><a href="contact.html" class="nav-link">Contact</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Players</h1>
            <p>Know about players and their score here.</p>
          </div>
        </div>
      </div>
    </div>

    <table>
                            <thead>
                                <tr>
                                    <th>profile</th>
                                    <th>Player ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Club1</th>
                                    <th>Club2</th>
                                    <th>Club3</th>
                                    <th>matches</th>
                                    <th>scores</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'connect.php';

                                $sql = "SELECT 
                                           players_d.playerid, 
                                           players_d.firstname, 
                                           players_d.lastname, 
                                           players_d.club1, 
                                           players_d.club2, 
                                           players_d.club3, 
                                           player_score.mat, 
                                           player_score.score
                                           FROM players_d
                                           LEFT JOIN player_score ON players_d.playerid = player_score.playerid";

                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['playerid']}</td>";
                                    echo "<td>{$row['playerid']}</td>";
                                    echo "<td>{$row['firstname']}</td>";
                                    echo "<td>{$row['lastname']}</td>";
                                    echo "<td>{$row['club1']}</td>";
                                    echo "<td>{$row['club2']}</td>";
                                    echo "<td>{$row['club3']}</td>";
                                    echo "<td>{$row['mat']}</td>";
                                    echo "<td>{$row['score']}</td>";                                  
                                    
                                    echo "</tr>";
                                }

                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
    
    <!-- <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">Star Players / Videos</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div class="owl-4-slider owl-carousel">
          <div class="item">
            <div class="video-media">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#10 / Forward</span>
                  <h3 class="m-0">Phillip Hobbs</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#7 / Forward</span>
                  <h3 class="m-0">Garry Norris</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#4 / Forward</span>
                  <h3 class="m-0">Romolu Harper</h3>
                </div>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="video-media">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#4 / Forward</span>
                  <h3 class="m-0">Phillip Hobbs</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#1 / GoalKeeper</span>
                  <h3 class="m-0">Garry Norris</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta">#8 / Forward</span>
                  <h3 class="m-0">Romolu Harper</h3>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div> -->


<!--     
    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Our Blog</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <table>
                            <thead>
                                <tr>
                                    <th>profile</th>
                                    <th>Player ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Club1</th>
                                    <th>Club2</th>
                                    <th>Club3</th>
                                    <th>matches</th>
                                    <th>scores</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'connect.php';

                                $sql = "SELECT 
                                           players_d.playerid, 
                                           players_d.firstname, 
                                           players_d.lastname, 
                                           players_d.club1, 
                                           players_d.club2, 
                                           players_d.club3, 
                                           player_score.mat, 
                                           player_score.score
                                           FROM players_d
                                           INNER JOIN player_score ON players_d.playerid = player_score.playerid";

                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['playerid']}</td>";
                                    echo "<td>{$row['playerid']}</td>";
                                    echo "<td>{$row['firstname']}</td>";
                                    echo "<td>{$row['lastname']}</td>";
                                    echo "<td>{$row['club1']}</td>";
                                    echo "<td>{$row['club2']}</td>";
                                    echo "<td>{$row['club3']}</td>";
                                    echo "<td>{$row['mat']}</td>";
                                    echo "<td>{$row['score']}</td>";
                                    echo "</td>";
                                    echo "</tr>";
                                }

                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table> -->
                        <!-- <table>
                            <thead>
                                <tr>
                                    <th>profile</th>
                                    <th>Player ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Club1</th>
                                    <th>Club2</th>
                                    <th>Club3</th>
                                    <th>matches</th>
                                    <th>scores</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'connect.php';

                                $sql = "SELECT 
                                           players_d.playerid, 
                                           players_d.firstname, 
                                           players_d.lastname, 
                                           players_d.club1, 
                                           players_d.club2, 
                                           players_d.club3, 
                                           player_score.mat, 
                                           player_score.score
                                           FROM players_d
                                           LEFT JOIN player_score ON players_d.playerid = player_score.playerid";

                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['playerid']}</td>";
                                    echo "<td>{$row['playerid']}</td>";
                                    echo "<td>{$row['firstname']}</td>";
                                    echo "<td>{$row['lastname']}</td>";
                                    echo "<td>{$row['club1']}</td>";
                                    echo "<td>{$row['club2']}</td>";
                                    echo "<td>{$row['club3']}</td>";
                                    echo "<td>{$row['mat']}</td>";
                                    echo "<td>{$row['score']}</td>";                                  
                                    
                                    echo "</tr>";
                                }

                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table> -->

    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <!-- <h3>News</h3>
              <ul class="list-unstyled links">
                <li><a href="#">All</a></li>
                <li><a href="#">Club News</a></li>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">RSS</a></li>
              </ul> -->
            </div>
          </div>
          <!-- <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Online Ticket</a></li>
                <li><a href="#">Payment and Prices</a></li>
                <li><a href="#">Contact &amp; Booking</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Coupon</a></li>
              </ul>
            </div>
          </div> -->

          <!-- <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Standings</a></li>
                <li><a href="#">World Cup</a></li>
                <li><a href="#">La Lega</a></li>
                <li><a href="#">Hyper Cup</a></li>
                <li><a href="#">World League</a></li>
              </ul>
            </div>
          </div> -->

          <!-- <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div> -->

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved
                <!-- <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

</body>

</html>