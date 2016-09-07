  <title>SWshareWorthy </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body>

  <div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  </div>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
  <div class="container">

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SWshareworthy</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a data-toggle="tab" href="Home">Home</a></li>
      <li><a data-toggle="tab" href="Quizzies">Quizzies</a></li>
      <li><a data-toggle="tab" href="Videos">Videos</a></li>
      <li><a data-toggle="tab" href="Polls">Polls</a></li>
    </ul>
  </div>
</nav>

<!--nav sidebar-->

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
<!-- Main Video-->

<div class="mainVideo">
  <div class="container">
      <iframe width="420" height="245" src="https://www.youtube.com/watch?v=Wb8KpHqU5tg">
      </iframe>
  </div>

<!-- ul with image -->

    <ul>
        <li class="service-list">
            <a href=""><img src="image.png" alt="icon" class="alignnone size-full wp-image-156" /></a>
            <h3></h3>
            <p>
            The Best Labor Day Deals
            </P>
        </li>
    </ul>
    <ul>
    <li class="service-list">
        <a href=""><img src="image.png" alt="icon" class="alignnone size-full wp-image-156" /></a>
        <h3></h3>
        <p>
        The Best Labor Day Deals
        </P>
    </li>
    </ul>
    <ul>
    <li class="service-list">
        <a href=""><img src="image.png" alt="icon" class="alignnone size-full wp-image-156" /></a>
        <h3></h3>
        <p>
        The Best Labor Day Deals
        </P>
    </li>
    </ul>
    <ul>
    <li class="service-list">
        <a href=""><img src="image.png" alt="icon" class="alignnone size-full wp-image-156" /></a>
        <h3></h3>
        <p>
        The Best Labor Day Deals
        </P>
    </li>
    </ul>
    <ul>
    <li class="service-list">
        <a href=""><img src="image.png" alt="icon" class="alignnone size-full wp-image-156" /></a>
        <h3></h3>
        <p>
        The Best Labor Day Deals
        </P>
    </li>
    </ul>
    <ul>
    <li class="service-list">
        <a href=""><img src="image.png" alt="icon" class="alignnone size-full wp-image-156" /></a>
        <h3></h3>
        <p>
        The Best Labor Day Deals
        </P>
    </li>
    </ul>
    <ul>
    <li class="service-list">
        <a href=""><img src="image.png" alt="icon" class="alignnone size-full wp-image-156" /></a>
        <h3></h3>
        <p>
        The Best Labor Day Deals
        </P>
    </li>
</ul>

</div>

<!-- footer -->
    <footer class="blog-footer">

      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
  </body>
</html>

    <h4></h4>
    <ol class="list-unstyled">
      <li><a href="#">GitHub</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->
