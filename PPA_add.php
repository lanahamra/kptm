//PPA_Add

<p>List penempatan add</p>


<?php include("header.php");?>
<h2>add PPA</h2>
<?php
//look for a valid user id, either through GET or POST
if((isset($_GET['ast_hrt_id'])) && (is_numeric($_GET['ast_hrt_id'])))
{
$id = $_GET['ast_hrt_id'];
}
elseif((isset($_POST['ast_hrt_id'])) && (is_numeric($_POST['ast_hrt_id'])))
{
$id = $_POST['ast_hrt_id'];
}
else
{
echo '<p class = "error">This page has been accessed in ERROR.</p>';
exit();
}



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$error = array();

//check for a name
if(empty($_POST['ast_hrt_nama']))
{
$error[] = 'You forgot to enter your name.';
}
else
{
$hrtnm = mysqli_real_escape_string($connect, trim($_POST['ast_hrt_nama']));
}

//check fr ic number
if(empty($_POST['ast_kump_id']))
{
$error[] = 'You forgot to enter your IC No.';
}
else
{
$hrtkumnm = mysqli_real_escape_string($connect, trim($_POST['ast_kump_id']));
}

//check for email
if(empty($_POST['ast_staf_id']))
{
$error[] = 'You forgot to enter your email.';
}
else
{
$stfid = mysqli_real_escape_string($connect, trim ($_POST['ast_staf_id']));
}

//check for city
if(empty($_POST['ast_pmptn_dt_serahan']))
{
$error[] = 'You forgot to enter your email.';
}
else
{
$apdt = mysqli_real_escape_string($connect, trim ($_POST['ast_pmptn_dt_serahan']));
}

}



$q = "SELECT ast_hrt_id, ast_hrt_nama, ast_kump_id FROM ast_harta WHERE ast_hrt_id = $id";
$q  .= "INSERT INTO ast_penempatan (ast_hrt_id, ast_staf_id, ast_pmptn_dt_serahan) VALUES ('$id', '$stfid', '$apdt')";

$result = @mysqli_query($connect, $q);

if (mysqli_num_rows($result) == 1)
{
//get student information
$row = mysqli_fetch_array($result, MYSQLI_NUM);

//create the form
echo '<form action = "PPA_add.php" method = "post" style = "margin-top: 5%">

<p><label class = "label" for="ast_hrt_id" style = "color : black">harta ID:</label>
       <input id = "ast_hrt_id" type="text" name="ast_hrt_id" size="30" maxlength="30" value="'.$row[0].'"></p>

       <p><label class = "label" for="ast_hrt_nama" style = "color : black">nama aset</label>
       <input id = "ast_hrt_nama" type="text" name="ast_hrt_nama" size="30" maxlength="30" value=""></p>

       <p><label class = "label" for="ast_kump_id" style = "color : black"> kumpulan Id No:</label>
       <input id = "ast_kump_id" type="text" name="ast_kump_id" size="30" maxlength="30" value=""></p>


       <p><label class = "label" for ="ast_staf_id" style = "color : black">staf id:</label>
       <input id = "ast_staf_id" type="text" name="ast_staf_id" size="30" maxlength="30" value="'.$row[1].'"></p>

       <p><label class = "label" for ="ast_pmptn_dt_serahan" style = "color : black">ast_pmptn_dt_serahan:</label>
       <input id = "ast_pmptn_dt_serahan" type="text" name="ast_pmptn_dt_serahan" size="30" maxlength="30" value="'.$row[2].'"></p>


       <br><p><input id ="submit" type ="submit" name ="submit" value ="Edit" style= "width: 4%; height: 3%"></p>
         <a href= "PPA_list_add.php" type = "button" style= "width: 4%; height: 3%">Return</a>


       <br><p><input type="hidden"  name = "ast_hrt_id" value="'.$id.'"/>

       </form>';
}
else 
{
echo '<p class="error">This page has accessed in error.</p>';
}
mysqli_close($connect)
?>
</body>