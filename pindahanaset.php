
<body>

	<?php include ("header.php");?>

	<?php
	//thi squery inserts a record in the cms table
	//has form been submitted
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	$error = array();//initialize an error array

	//check for a name
	if(empty($_POST['idHarta'])) {
		$error [] = 'Sila masukkan ID Pembekal.';
	}
	else {
		$idH = mysqli_real_escape_string ($connect,trim ($_POST['idHarta']));
	}



//check for ic number
if (empty($_POST['namaHarta'])){
	$error [] = 'You forgot to enter your No PO.';
}
else{
	$nH = mysqli_real_escape_string($connect,trim ($_POST['namaHarta']));
}


//check for a Id number
if (empty($_POST['keteranganHarta'])){
	$error [] = 'You forgot to enter your tarikh po.';
}
else{ 
	$ketH= mysqli_real_escape_string($connect,trim ($_POST['keteranganHarta']));
}


//check for a address
if (empty($_POST['noSiri_Harta'])){
	$error [] = 'You forgot to enter your kategory.';
}
else{
	$noS = mysqli_real_escape_string($connect,trim ($_POST['noSiri_Harta']));
}

//check for a idHarta  number
if (empty($_POST['tarikhPO'])){
	$error [] = 'You forgot to enter your nama harta.';
}
else{
	$tPO = mysqli_real_escape_string($connect,trim ($_POST['tarikhPO']));
}


//check for a namaHarta
if (empty($_POST['namaStaf'])){
	$error [] = 'You forgot to enter your keterangan.';
}
else{
	$ns = mysqli_real_escape_string($connect,trim ($_POST['namaStaf']));
}


//check for a race
if (empty($_POST['Jabatan'])){
	$error [] = 'You forgot to enter your kuantiti.';
}
else{
	$J = mysqli_real_escape_string($connect,trim ($_POST['Jabatan']));
}


//check for a religion
if (empty($_POST['tarikhSerahan'])){
	$error [] = 'You forgot to enter your harga seunit.';
}
else{
	$tSer = mysqli_real_escape_string($connect,trim ($_POST['tarikhSerahan']));
}


//check for a birth place
if (empty($_POST['kategoriPergerakan'])){
	$error [] = 'You forgot to enter your place of jumlah kseluruhan.';
}
else{
	$katPer = mysqli_real_escape_string($connect,trim ($_POST['kategoriPergerakan']));
}


//check for a date of birth
if (empty($_POST['tujuanPinjaman'])){
	$error [] = 'You forgot to enter your gst.';
}
else{
	$tPin = mysqli_real_escape_string($connect,trim ($_POST['tujuanPinjaman']));
}


//check for a idHarta
if (empty($_POST['tarikh_mula_sewa'])){
	$error [] = 'You forgot to enter your jumlah&gst.';
}
else{
	$tms = mysqli_real_escape_string($connect,trim ($_POST['tarikh_mula_sewa']));
}


//check for a idHarta
if (empty($_POST['tarikh_hingga_sewa'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $ths = mysqli_real_escape_string($connect,trim ($_POST['tarikh_hingga_sewa']));
}

//register the user in the databse
//make the query:
       $q = "Insert INTO pindahanaset (idHarta, namaHarta, keteranganHarta, noSiri_Harta,tarikhPO, namaStaf, Jabatan, tarikhSerahan, kategoriPergerakan, tujuanPinjaman, tarikh_mula_sewa, tarikh_hingga_sewa)
       VALUES ('$idH','$nH', '$ketH','$noS', '$tPO', '$ns', '$J', '$tSer', '$katPer','$tPin', $tms', '$ths')";
       $result = @mysqli_query($connect, $q);//run thequery
       if($result){
       	echo '<h1>thank you</h1>';
       	exit();
       }else{  //iff itdid run
       //message
       echo'<h1>system error</h1>';

       //debugging message
       echo'<p>' .mysqli_error($connect). '<br><br>Query:'.$q.' </p>';
       }//end of it(result)
       mysqli_close($connect);//close the database connection
       exit();

      }//end the main submit conditional
      ?>
      <h2 align="center">PENDAFTARAN PINDAHAN PINJAMAN/SEWAAN ASET</h2>
      <form action = "pindahanaset.php" method = "post">


  <div class="documentcont" >

                     <p><label class = "label" for = "idHarta">ID Pembekal: *</label>
                            <br>
                            <select>
                                <option name="idHarta" <?php if (isset ($idH) && $idH == "OP1") echo "checked";?> value = "OP1" /> OP1
                                <option name="idHarta" <?php if (isset ($idH) && $idH == "OP2") echo "checked";?> value = "OP1" /> OP2
                                <option name="idHarta" <?php if (isset ($idH) && $idH == "OP3") echo "checked";?> value = "OP1" /> OP3

                                </select>


                 
               <p><label class = "label" for = "namaHarta">No PO / No Surat Lantikan*</label>
                  <br></b><input id = "namaHarta" type = "text" name="namaHarta" size="14" maxlength="30"
                  value="<?php if (isset($_POST['namaHarta'])) echo $_POST['namaHarta']; ?> " /></p>

      		
                    <p><label class = "label" for = "keteranganHarta">Tarikh PO / Tarikh Surat Lantikan*</label>
                        <br><input id = "keteranganHarta" type = "text" name="keteranganHarta" size="30" maxlength="30"
                  value="<?php if (isset($_POST['keteranganHarta'])) echo $_POST['keteranganHarta']; ?> " /></p>
      		

                     <p><label class = "label" for = "noSiri_Harta">Kategori Harta: *</label>
                        <br><input id = "noSiri_Harta" type = "text" name="noSiri_Harta" size="30" maxlength="30"
                  value="<?php if (isset($_POST['noSiri_Harta'])) echo $_POST['noSiri_Harta']; ?> " /></p>
                  

            <p><label class = "label" for = "tarikhPO">tarikhPO: *</label>
                  <br><input id = "tarikhPO" type = "text" name="tarikhPO" size="30" maxlength="30"
                  value="<?php if (isset($_POST['tarikhPO'])) echo $_POST['tarikhPO']; ?> " /></p>
      		

      		<p><label class = "label" for = "namaStaf">Keterangan Harta: *</label>
                              <br><input id = "namaStaf" type = "text" name="namaStaf" size="30" maxlength="30"
                  value="<?php if (isset($_POST['namaStaf'])) echo $_POST['namaStaf']; ?> " /></p>
      		

             <p><label class="label" for="Jabatan">Jabatan: *</label>
                     <br><input id = "Jabatan" type = "text" name="Jabatan" size="15" maxlength="15"
                  value="<?php if (isset($_POST['Jabatan'])) echo $_POST['Jabatan']; ?> " /></p>

                  
                  
             <p><label class="label" for="tarikhSerahan">tarikhSerahan : *</label>
                    <br><input id = "tarikhSerahan" type = "text" name="tarikhSerahan" size="30" maxlength="30"
                  value="<?php if (isset($_POST['tarikhSerahan'])) echo $_POST['tarikhSerahan']; ?> " /></p>
      

             <p><label class="label" for="kategoriPergerakan">Jumlah Keseluruhan : </label>
                 <br><input id = "kategoriPergerakan" type = "kategoriPergerakan" name="kategoriPergerakan" size="30" maxlength="30"
                  value="<?php if (isset($_POST['kategoriPergerakan'])) echo $_POST['kategoriPergerakan']; ?> " /></p>

                 

             <p><label class="label" for="tujuanPinjaman">tujuanPinjaman</label>
                  <br><input id = "tujuanPinjaman" type = "text" name="tujuanPinjaman" size="30" maxlength="30"
                  value="<?php if (isset($_POST['tujuanPinjaman'])) echo $_POST['tujuanPinjaman']; ?> " /></p>
                 

            <p><label class="label" for="tarikh_mula_sewa">Jumlah Keseluruhan & GST</label> 
                  <br><input id = "tarikh_mula_sewa" type = "text" name="tarikh_mula_sewa" size="20" maxlength="20"
                  value="<?php if (isset($_POST['tarikh_mula_sewa'])) echo $_POST['tarikh_mula_sewa']; ?> " /></p> 


                  <p><label class="label" for="tarikh_hingga_sewa">Jumlah Keseluruhan & GST</label> 
                  <br><input id = "tarikh_hingga_sewa" type = "text" name="tarikh_hingga_sewa" size="20" maxlength="20"
                  value="<?php if (isset($_POST['tarikh_hingga_sewa'])) echo $_POST['tarikh_hingga_sewa']; ?> " /></p> 

                  


            <p><input id = "submit" type = "submit" name="submit" value="Simpan"/></p>
            <p><input id = "reset" type = "reset" name="reset" value="Kosongkan"/></p>

      </p>
      <p>
  </div>

      <br />
      <br/>
      <br/>
      </body>