<header class="header">
<div>
<img class="myslide" src="../Image/ime.jpg">
<img class="myslide" src="../Image/horror.jpg">
<img class="myslide" src="../Image/comedy.jpg">
<img class="myslide" src="../Image/action.jpg">
<button class="button-hover goleft button-background" onclick="plusDivs(-1)">&#10094;</button>
<button class="button-hover goright button-background" onclick="plusDivs(+1)">&#10095;</button>
</div>
<div class="topnav">
	<a class="profile" href="../Register.php">Register</a>
	
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