<!DOCTYPE html>
<html lang="en">
<head>
  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<header id="header">

<?php
  //extract($POST);

  //connect to server
  $connect = mysqli_connect("localhost", "root", "", "ams");

  if(!$connect){
    die('ERROR:'.mysqli_connect_error());

  }

  ?>


<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 560px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;

}
.documentcont
{
  
  width: 900px;
  border: 5px solid grey;
  padding: 30px;
  margin: auto;
}

.cont

{
 
 border: none;
  width: 900px;
  display: table;
  margin: auto;
}


</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">ASET
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="PPDA.php">Penerimaan Dokumen Aset</a>
      <a href="PPA_list_add.php">Penempatan Aset</a>
      <a href="#">Borang Daftar Rekod Harta</a>
      <a href="pindahanaset.php">Daftar Pergerakan Pinjama/Sewaan Aset</a>
  </div> 
</body>
</header>


</html>