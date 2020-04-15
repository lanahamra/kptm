


<style>

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


table, td, tr {

  margin: auto;
  border:none;
  border-collapse: collapse;
  padding: 10px;
  width: 700px;

}

</style>
</body>


<?php

//carian penempatan aset
include 'header.php';

echo'<p>CARIAN PENEMPATAN ASET (PAGE8)</p>';


$counter = 1;
$set = $_POST['search_PPA_add'];
if($set) {
  $show = "SELECT * FROM ast_harta where ast_hrt_id = '$set'";
  $result = mysqli_query($connect,$show);
  if ($row = mysqli_fetch_array($result)) {
    echo '<table style = "border: 1px solid black;
  border-collapse: collapse;">
<tr style = "border: 1px solid black;
  border-collapse: collapse;">
<td><b>Bil</b></td>
<td><b>No ID Harta</b></td>
<td><b>Nama Harta</b></td>
<td><b>Nama Kumpulan Harta</b></td>
<td><b>Add</b></td>
</tr>';



echo '<br><tr style = "border: 1px solid black;
  border-collapse: collapse;">
<td>'.$counter.'</td>
<td>'.$row['ast_hrt_id'].'</td>
<td>'.$row['ast_hrt_nama'].'</td>
<td>'.$row['ast_kump_id'].'</td>
<td><a href = "PPA_add.php?id='.$row['ast_hrt_id'].'">Add</a></td>
</tr>';
$counter++;
//close the table
echo '</table>';
}


  else{

  echo "<h1 style = 'align : center'>nothing found</h2>";
          echo' <br><a href= "PPA_list_add.php" type = "button" style= "width: 4%; height: 3%; margin-left : 2%">Return</a>';


  }
  

}
?>
</div>
</div>
</body>