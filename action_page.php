<?php

$genre=$_POST['genre'];
$length=$_POST['length'];
$movie=$_POST['movie'];
$reply = $_POST['reply'];
$image = $_POST['image']; 
$link = $_POST['link'];
$author = $_POST['author'];

if ($genre=="fantasy" && $length=="300" && $movie=="yes"){
  $reply= "Alice's Adventures in Wonderland";
  $image = "p1.jpg";
  $author = "Lewis Carroll"; 
  $link = "https://www.goodreads.com/book/show/60671823-alice-s-adventures-in-wonderland";
}
if($genre=="fantasy" && $length=="400" && $movie=="yes"){
$reply= "Six of Crows";
  $image = "p2.jpg";
  $author = "Leigh Bardugo";
  $link = "https://www.goodreads.com/book/show/23437156-six-of-crows";
}
else if($genre=="fantasy" && $length=="400" && $movie=="no"){
$reply= "Red Rising";
  $image = "aq.jpg";
  $author = "Pierce Brown";
  $link = "https://www.goodreads.com/book/show/15839976-red-rising?from_search=true&from_srp=true&qid=BvdbO1Tihd&rank=1";

 }
else if($genre=="fantasy" && $length=="300" && $movie=="no"){
$reply= "The House in the Cerulean Sea";
  $image = "house.jpg";
  $author = "TJ Klune";
  $link = "https://www.goodreads.com/book/show/45047384-the-house-in-the-cerulean-sea?ac=1&from_search=true&qid=vvK4XjvSZw&rank=1";

}
else if($genre=="fiction" && $length=="400" && $movie=="yes"){
$reply= "The Hunger Games";
  $image = "sw.jpg";
  $author = "Suzanne Collins";
  $link = "https://www.goodreads.com/book/show/2767052-the-hunger-games?ac=1&from_search=true&qid=gBcPlnz0FO&rank=1";

}
else if($genre=="fiction" && $length=="400" && $movie=="no"){
$reply= "The Midnight Library";
  $image = "de.jpg";
  $author = "Matt Haig";
  $link = "https://www.goodreads.com/book/show/52578297-the-midnight-library?from_search=true&from_srp=true&qid=5HHS8P1owG&rank=1";

}
else if($genre=="fiction" && $length=="300" && $movie=="no"){
$reply= "It Ends With Us";
  $image = "end.jpg";
  $author = "Colleen Hoover";
  $link = "https://www.goodreads.com/book/show/27362503-it-ends-with-us?from_search=true&from_srp=true&qid=p9kiozIGb4&rank=1";

}
else if($genre=="fiction" && $length=="300" && $movie=="yes"){
$reply= "The Giver";
  $image = "v2.jpg";
  $author = "Lois Lowry";
  $link = "https://www.goodreads.com/book/show/3636.The_Giver?from_search=true&from_srp=true&qid=0gLt8g7gAm&rank=1";

}
else if($genre=="crime" && $length=="400" && $movie=="no"){
$reply= "Strangers We Know";
  $image = "str.jpg";
  $author = "Elle Marr";
  $link = "i\https://www.goodreads.com/book/show/57226625-strangers-we-know?from_search=true&from_srp=true&qid=N8nXgrWcSf&rank=2";

}
else if($genre=="crime" && $length=="300" && $movie=="yes"){
$reply= "The Girl on the Train";
  $image = "tr.jpg";
  $author = "Paula Hawkins";
  $link = "https://www.goodreads.com/book/show/22557272-the-girl-on-the-train?from_search=true&from_srp=true&qid=p00hDAHb5e&rank=1";

}
else if($genre=="crime" && $length=="400" && $movie=="yes"){
$reply= "Gone Girl";
  $image = "gg.jpg";
  $author = "Gillian Flynn";
  $link = "https://www.goodreads.com/book/show/19288043-gone-girl?from_search=true&from_srp=true&qid=1WbvrknvH0&rank=1";
}
else if($genre=="crime" && $length=="300" && $movie=="no"){
$reply= "A good Girl's Guide to Murder";
  $image = "agg.jpg";
  $author = "Holly Jackson";
  $link = "https://www.goodreads.com/book/show/40916679-a-good-girl-s-guide-to-murder?from_search=true&from_srp=true&qid=Y8syjCGCwQ&rank=1";

}
else if($genre=="romance" && $length=="300" && $movie=="no"){
$reply= "People We Meet on Vacation";
  $image = "ree.jpg";
  $author = "Emily Henry";
  $link = "https://www.goodreads.com/book/show/54985743-people-we-meet-on-vacation?from_search=true&from_srp=true&qid=PLNkW91FWw&rank=1";

}
else if($genre=="romance" && $length=="400" && $movie=="yes"){
$reply= "Pride and Prejudice";
  $image = "pandp.jpg";
  $author = "Jane Austen";
  $link = "https://www.goodreads.com/book/show/28137375-pride-and-predujice?ac=1&from_search=true&qid=fqbLa9swbS&rank=1";

}
else if($genre=="romance" && $length=="400" && $movie=="no"){
$reply= "The Kiss Quotient";
  $image = "22.jpg";
  $author = "Helen Hoang";
  $link = "https://www.goodreads.com/book/show/36199084-the-kiss-quotient?from_search=true&from_srp=true&qid=YlVXSVItb8&rank=1";

}
else if($genre=="romance" && $length=="300" && $movie=="yes"){
$reply= "Me Before You";
  $image = "gf.jpg";
  $author = "Jojo Moyes";
  $link = "https://www.goodreads.com/book/show/17347634-me-before-you?from_search=true&from_srp=true&qid=ToQgTsFCA7&rank=1";

}
?>


<!DOCTYPE html>
<html>
 <head>
<head>

  <style type="text/css">
 @import 'https://fonts.googleapis.com/css?family=Raleway';
@import url('https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;500&family=Montserrat:wght@500&family=Poppins:wght@500&family=Roboto+Condensed:wght@300&display=swap');
     body{background-image:url("n2.png");background-size: cover; position:absolute;}
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

.wrapper {
  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */

  max-width: 960px; /* 2 */

  padding-right: 10px; /* 3 */
  padding-left:  10px; /* 3 */
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

.val{box-shadow: 2px 2px 3px black; border-radius: 20px; border: 2px groove white; border-width:thick; padding: 20px; width:315px; height: 37px;  background-color: rgba(0,0,0,0);}
 </style>

<div style="float:right; margin-left:-30%; margin-top:2%; margin-right:-60%">
<nav class="shift">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="find.html">Book Search</a></li>
      <li><a href="picks">Top Picks</a></li>
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

<img style="margin-top:4%; margin-left:1%" src="n1.png" width="620">
</br>
<img style="margin-top:5%; margin-left:25%;" src="<?php echo $image;?>" width="180">

<table style="width:100%; margin-top:-30%; margin-left:54%; color:white; text-shadow: 2px 2px #a33524">
  <tr>
    <th><img src="title.png" width="200"></th>
    <td><h2>"<?php echo $reply; ?>"</h2></td>
  </tr>
</br>
<tr>
    <th></br></th>
    <td></br></td>
  </tr>

  <tr>
    <th><img src="author.png" width="200"></th>
    <td><h2><?php echo $author; ?></h2></td>
  </tr>
<th></br></th>
    <td></br></td>
  </tr>
</table>

<h1><a style="text-shadow:none; margin-top:-1%;white-space:nowrap; margin-left:88%; position:absolute" href="<?php $link; ?>">View On GoodReads</a></h1>


<div class="grow">
  <a href="find.html"><img style="position:absolute; margin-left:88%; margin-top:10%" src="j1.png" width="300"></a>
</div>

</br></br></br></br></br></br></br>
<footer>
<small style="color:white; margin:center"<em>&copy; 2022 Joellen Allah-Mensah</em></small>
</footer>
</body>
</html>
