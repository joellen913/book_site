
<?php
  $title = $_POST['title'];
  $pages = $_POST['pages'];
  $days = $_POST['days'];
  $hours = $_POST['hours'];

  $answ1 = $pages/$days;
  $answ2 = $pages/$days/$hours;
 
  $answ1_formatted = number_format($answ1,2)." pages";
  $answ2_formatted = number_format($answ2,2)." hours";
   
?>

<!DOCTYPE html>
<html>

<head>


  <style type="text/css">
 @import 'https://fonts.googleapis.com/css?family=Raleway';
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
     body{background-image:url("f1.png");background-size: cover; position:absolute;}
   body {
  font-family: 'Raleway';
  padding: 0;
  margin: 0;
}



h2 {
  font-size: 30px;
  margin: 0;
  font-weight: 300;
  color: white;
  padding: 8px;
}

.center {
  text-align: center;
}


/* NAVIGATION */
nav {
  display: inline-block;
  float:right;
  background: transparent;
}

nav ul {
  list-style: none;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  display: inline-block;
  padding: 13px;
  text-decoration: none;
  color: white;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;

}
nav ul li a:hover {
  color: white;
}


/* SHIFT */
nav.shift ul li a {
  position:relative;
  z-index: 1; float:right;
}
nav.shift ul li a:hover {
  color: white; float:right;
}
nav.shift ul li a:after {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  margin: right;
  width: 100%;
  height: 1px;
  content: '.';
  color: transparent;
  background: #A33524;
  visibility: none;
  opacity: 0;
  z-index: -1;
}

nav.shift ul li a:hover:after {
  opacity: 1;
  visibility: visible;
  height: 100%;
}

  .floating{animation-name:floating; animation-duration:3s; animation-iteration-count: infinite; animation-timing-function:ease-in-out; margin-left:30px; margin-top:5px;}

   @keyframes floating{ 0%{transform:translate(0, 0px);} 50%{transform:translate(0, 15px);}100%{transform:translate(0, -0px);}}

  .grow img{
transition: 1s ease;
}

.grow img:hover{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 1s ease;
}

.bord{border:1px solid white;}
 </style>

<div style="float:right; margin-left:-30%; margin-top:2%; margin-right:-70%">
<nav class="shift">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="find.html">Book Search</a></li>
      <li><a href="picks.html">Top Picks</a></li>
      <li><a href="calculator.html">Calculator</a></li>
      <li><a href="contact.html">Contact</a></li>

    </ul>
  </nav>
</div>
</head>

<body>
<div class="grow">
<a href="index.html"><img style="margin-left:3%; margin-top:4%" src="z2.png" width="80"></a>
</div>

<img style="margin:auto;margin-left:110%;position:absolute; float:left; margin-top:10%" src="v2.png" width="85">

</br>
<div style="text-shadow:2px 2px #eba681; margin-top:30%; position:absolute; margin-left:15%; color:white">
<label style="font-size:1em">Book:</label>
<span style="font-size:1em">"<?php echo $title; ?>"</span><br></br>
<label style="font-size:1em">Page Length:</label>
<span style="font-size:1em"><?php echo $pages; ?> pages</span><br></br>
<label style="font-size:1em">Finish Within:</label>
<span style="font-size:1em"><?php echo $days; ?> days</span><br></br>
<label style="font-size:1em">Hours per day:</label>
<span style="font-size:2 em"><?php echo $hours; ?> hours</span><br></br>
</div>

<h1 style="text-align:center;margin:auto; white-space:nowrap; float:left; text-shadow: 2px 2px #A33524;position:absolute; margin-top:25%; margin-left:90%; color:#eba681">To Finish "<?php echo $title; ?>" in <?php echo $days; ?> days </br> Read: <?php echo $answ1; ?> pages/hour </br>For: <?php echo $answ2; ?>hours/day</h1>

<img style="margin:auto; margin-left:83%; margin-top:43%" src="o2.png" width="500">
<div class="grow"><a href="calculator.html"><img style="margin:auto; margin-left:97%; margin-top:1%" src="v4.png" width="260"></a></div>
<footer>
<small style="color:white; margin:center"<em>&copy; 2022 Joellen Allah-Mensah</em></small>
</footer>
</body>
</html>
