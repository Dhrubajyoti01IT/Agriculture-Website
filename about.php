<?php 
include("config.php");
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p></p>
   <strong><p>Empowering Rural India Digitally.</p></strong>
   <p>This innovative agricultural portal helps rural communities drive efficiencies and sustainability. We help the farmers become more connected, integrated, & informed than ever before.
    The AgriHub is focused on maximizing food production while minimizing environmental impact and limiting the necessary operating costs. Modernizing agricultural practices is no short-term endeavor, but through the experience of veteran industry leaders, decades of IBM research, artificial intelligence, analytics, and predictive insights with unique, Internet of Things (IoT) data we hope to lead the evolution of modern agriculture.
   </p>

</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="index1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Ritu raj choudhury</h2>
        <p class="title">Student</p>
        <p>Department of Information Technology.</p>
        <p>riturajcoudhury@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image.jpeg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Aman kumar</h2>
        <p class="title">student</p>
        <p>Department of Information Technology.</p>
        <p>kumaraman190598@gmail.com </p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="index.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Druba jyoti choudhury</h2>
        <p class="title">Student</p>
        <p>Department of Information Technology.</p>
        <p>drubajyoti01@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
