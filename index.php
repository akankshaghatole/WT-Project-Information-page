<!DOCTYPE html>
    <head>
        <title>Information</title>
        
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		
       
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
    </head>
  <body id="body">
  <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto">
          <li id="btn1" class="nav-item active"><a class="nav-link" href="#"><span class="brandname">Heatlhcheck</span> yourself over here </a></li>
          <li id="btn2" class="nav-item active"><a class="nav-link" href="#"><span class="brandname">Camps</span> Blood Donation & testing  </a></li>
          <li id="btn2" class="nav-item active"><a class="nav-link" href="#"><span class="brandname">Home</span> Go back to home page </a></li>
          
        </ul>
      </div>
    </nav>
    <div class="head">
      <h1>General Awareness </h1>
    </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" id="image" src="image/slide1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="image" src="image/sideimage.jpg" alt="Second slide" >
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" id="image" src="image/sideimage.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="head">
      <h1>General Awareness</h1>
    </div>
    <div class="container">
      <select name="item restaurant-dropdown restaurant" class="custom-select custom-select-lg mb-3" id="disease">
        <option value="">Disease List</option>
      </select>
      <br>    
      <table id="table" class="table table-striped">
      <tr>
        <th>Name</th>
        <td id="name"></td>
      </tr>
      <tr>
        <th>Scientific Name</th>
        <td id="sname"></td>
      </tr>
      <tr>
        <th>Symptoms Description</th>
        <td id="descp"></td>
      </tr>
      <tr>
        <th>Precautions</th>
        <td id="pre"></td>
      </tr>
      <tr>
        <th>Cause </th>
        <td id="cause"></td>
      </tr>
      
    <!--footer-->
		<script src="jquery-3.5.1.min.js"></script> 
    <script src="script.js" defer></script>   
  </body>
</html>
