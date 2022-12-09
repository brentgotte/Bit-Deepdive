<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="nav">
        <a href="index.html" class="logout">
            <button id="logout">Log Out</button>
        </a>
        <div class="location">
            <form action="">
                <select name="locations" id="locations">
                    <option value="h20">H20, Purmerend</option>
                    <option value="horizon">Horizon, Alkmaar</option>
                    <option value="bit">bit, Amsterdam</option>
                </select>
                <input type="submit" value="✓" id="l-submit">
            </form>
        </div>
    </div>
<br> <br> <br>
        <div class="cards">
        <!-- Card one -->
            <div class="card">
                <div class="row g-0">
                    <div class="col-5 col-sm-4">
                    <a href="quizkoffie.html"> <img src="images/koffie-apparaat.jpg" class="img-fluid w-60" alt="card-horizontal-image"></a>
    </div>
    <div class="col-7 col-sm-8">
      <div class="card-body">
        <h5 class="card-title">Koffiezet apparaat</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat, vitae commodi dignissimos nihil aut vel omnis,
             iure unde totam hic corrupti cum placeat alias sequi sed? Neque, sunt assumenda!</p>
        <p class="card-text"><small class="text-muted">lorem ipsum</small></p>
      </div>
    </div>
  </div>
</div>
<!-- Card Two -->
<div class="card">
                <div class="row g-0">
                    <div class="col-5 col-sm-4">
                    <a href=""> <img src="images/toilet.jpg" class="img-fluid w-60" alt="card-horizontal-image"></a>
    </div>
    <div class="col-7 col-sm-8">
      <div class="card-body">
        <h5 class="card-title">Toilet</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat, vitae commodi dignissimos nihil aut vel omnis,
             iure unde totam hic corrupti cum placeat alias sequi sed? Neque, sunt assumenda!</p>
        <p class="card-text"><small class="text-muted">lorem ipsum</small></p>
      </div>
    </div>
  </div>
</div>

            <!-- Card three -->

            <div class="card">
                <div class="row g-0">
                    <div class="col-5 col-sm-4">
                    <a href=""> <img src="images/vaatwasser.jpeg" class="img-fluid w-60" alt="card-horizontal-image"></a>
    </div>
    <div class="col-7 col-sm-8">
      <div class="card-body">
        <h5 class="card-title">Vaatwasser</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat, vitae commodi dignissimos nihil aut vel omnis,
             iure unde totam hic corrupti cum placeat alias sequi sed? Neque, sunt assumenda!</p>
        <p class="card-text"><small class="text-muted">lorem ipsum</small></p>
      </div>
    </div>
  </div>
</div>
</div>


<footer>
        <button onclick="topFunction()" id="top" title="top">Back to top</button>
         <a href="makequiz.php"> <button id="top" style="/*! margin: ; */margin-top: 7px;margin-right: 2.3rem;">Add quiz</button></a>
               

    </footer>



</body>
</html>