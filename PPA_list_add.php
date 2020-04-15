<style>
	table, td, tr {

  margin: auto;
  border:none;
  border-collapse: collapse;
  padding: 10px;
  width: 700px;

}

</style>

<?php include ("header.php");?>

<body>

	<form action="search_PPA_add.php" method="post" style="margin-left:  40%; margin-top: 7%" >
  <input type="text" name="search_PPA_add"/>
<button>search</button>
</form>




<title>carian penempatan aset (page 8)</title>
<?php
//make the query
$sql = "SELECT ast_hrt_id, ast_hrt_nama, ast_kump_id FROM ast_harta" ;
//run the query
$result = @mysqli_query($connect, $sql);


echo '<h2 style = "margin-top : 6%; text-align: center"> Harta List</h2>';



//if it ran without a problem, display the records
if($result)
{
//table heading
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


//set counter variable
$counter = 1;

//fetch and print all the records
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
echo '<tr style = "border: 1px solid black;
  border-collapse: collapse;">
<td>'.$counter.'</td>
<td>'.$row['ast_hrt_id'].'</td>
<td>'.$row['ast_hrt_nama'].'</td>
<td>'.$row['ast_kump_id'].'</td>
<td><a href = "PPA_add.php?id='.$row['ast_hrt_id'].'">Add</a></td>
</tr>';
$counter++;
}
//close the table
echo '</table>';
//free up the resources
mysqli_free_result($result);

//if failed to run
}
else
{
//error message
echo '<p class = "error">The current asset could not be retrieved. We apologize for any convinience.</p>';
//debugging message
echo '<p>'.mysqli_error($connect).'<br><br/>Query: '.$sql.'</p>';
} //end of it ($result)
//close the database connection
mysqli_close($connect);

?>

</body>