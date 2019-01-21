
<header class="header">
<div>
<img class="myslide" src="../Image/ime.jpg">
<img class="myslide" src="../Image/horror.jpg">
<button class="button-hover goleft button-background" onclick="plusDivs(-1)">&#10094;</button>
<button class="button-hover goright button-background" onclick="plusDivs(+1)">&#10095;</button>
</div>
<div class="topnav">
	<a class="active" href="../home.php">Home</a>
	<a href="#VHS">VHS</a>
	<a href="#DVD">DVD</a>
	<a href="#Blu-Ray">Blu-Ray</a>
	<a href="../contacts.php">Contact Us</a>
	<a href="#about">About</a>
	<a class="logout" href="../logout.php">Logout</a>
	<a class="profile" href="../profile.php">Profile</a>
	
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("myslide");
  if (n > x.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  x[slideIndex-1].style.display = "block"; 
}
</script>


</header>