
<meta charset = "utf-8">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<h1 id = "nesto">poyy</h1>
<div class = "row-galerija">
	<!-- Izlistavanje slika BEGIN -->
	<?php 
	  $dirname = "img/images/";
	  $images = glob($dirname."*.jpg");
	  foreach($images as $image) 
	  {
	    echo '<img class = "myImage" id = "myImg" src="'.$image.'" width = "300" height = "200">';

	  }
	?>
	<!-- Izlistavanje slika END -->

	<div id="myModal" class="modal">
        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">
        <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>

    <script src="js/myscripts.js"></script>
</div>
	