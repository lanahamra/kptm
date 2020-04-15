
<body>

	<?php include ("header.php");?>

	<?php
	//thi squery inserts a record in the cms table
	//has form been submitted
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	$error = array();//initialize an error array

	//check for a name
	if(empty($_POST['idPembekal'])) {
		$error [] = 'Sila masukkan ID Pembekal.';
	}
	else {
		$idP = mysqli_real_escape_string ($connect,trim ($_POST['idPembekal']));
	}



//check for ic number
if (empty($_POST['noPO'])){
	$error [] = 'You forgot to enter your No PO.';
}
else{
	$nPO = mysqli_real_escape_string($connect,trim ($_POST['noPO']));
}


//check for a Id number
if (empty($_POST['tarikhPO'])){
	$error [] = 'You forgot to enter your tarikh po.';
}
else{
	$tPO= mysqli_real_escape_string($connect,trim ($_POST['tarikhPO']));
}


//check for a address
if (empty($_POST['katHarta'])){
	$error [] = 'You forgot to enter your kategory.';
}
else{
	$katH = mysqli_real_escape_string($connect,trim ($_POST['katHarta']));
}

//check for a idPembekal  number
if (empty($_POST['namaHarta'])){
	$error [] = 'You forgot to enter your nama harta.';
}
else{
	$nH = mysqli_real_escape_string($connect,trim ($_POST['namaHarta']));
}


//check for a namaHarta
if (empty($_POST['keteranganHarta'])){
	$error [] = 'You forgot to enter your keterangan.';
}
else{
	$ketH = mysqli_real_escape_string($connect,trim ($_POST['keteranganHarta']));
}


//check for a race
if (empty($_POST['kuantitiHarta'])){
	$error [] = 'You forgot to enter your kuantiti.';
}
else{
	$qH = mysqli_real_escape_string($connect,trim ($_POST['kuantitiHarta']));
}


//check for a religion
if (empty($_POST['hargaSeunit'])){
	$error [] = 'You forgot to enter your harga seunit.';
}
else{
	$hs = mysqli_real_escape_string($connect,trim ($_POST['hargaSeunit']));
}


//check for a birth place
if (empty($_POST['jumlahKeseluruhan'])){
	$error [] = 'You forgot to enter your place of jumlah kseluruhan.';
}
else{
	$jumK = mysqli_real_escape_string($connect,trim ($_POST['jumlahKeseluruhan']));
}


//check for a date of birth
if (empty($_POST['gst'])){
	$error [] = 'You forgot to enter your gst.';
}
else{
	$gst = mysqli_real_escape_string($connect,trim ($_POST['gst']));
}


//check for a idPembekal
if (empty($_POST['jumlah_dan_gst'])){
	$error [] = 'You forgot to enter your jumlah&gst.';
}
else{
	$jdg = mysqli_real_escape_string($connect,trim ($_POST['jumlah_dan_gst']));
}

//register the user in the databse
//make the query:
       $q = "Insert INTO dokumenasset (idPembekal, noPO, tarikhPO, katHarta, namaHarta, keteranganHarta, kuantitiHarta, hargaSeunit, jumlahKeseluruhan, gst, jumlah_dan_gst)
       VALUES ('$idP','$nPO', '$tPO', '$katH','$nH', '$ketH', '$qH', '$hs', '$jumK', '$gst', '$jdg')";
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
      <h2 align="center">LAPORAN KEHILANGAN ASET MENGIKUT TAHUN</h2>
      <form action = "PPDokumenAset.php" method = "post">


  <div class="documentcont" >

                     <p><label class = "label" for = "idPembekal">ID Pembekal: *</label>
                            <br>
                            <select>
                                <option name="idPembekal" <?php if (isset ($idP) && $idP == "OP1") echo "checked";?> value = "OP1" /> OP1
                                <option name="idPembekal" <?php if (isset ($idP) && $idP == "OP2") echo "checked";?> value = "OP1" /> OP2
                                <option name="idPembekal" <?php if (isset ($idP) && $idP == "OP3") echo "checked";?> value = "OP1" /> OP3

                                </select>


                 
               <p><label class = "label" for = "noPO">No PO / No Surat Lantikan*</label>
                  <br></b><input id = "noPO" type = "text" name="noPO" size="14" maxlength="30"
                  value="<?php if (isset($_POST['noPO'])) echo $_POST['noPO']; ?> " /></p>

      		
                    <p><label class = "label" for = "tarikhPO">Tarikh PO / Tarikh Surat Lantikan*</label>
                        <br><input id = "tarikhPO" type = "text" name="tarikhPO" size="30" maxlength="30"
                  value="<?php if (isset($_POST['tarikhPO'])) echo $_POST['tarikhPO']; ?> " /></p>
      		

                     <p><label class = "label" for = "katHarta">Kategori Harta: *</label>
                        <br><input id = "katHarta" type = "text" name="katHarta" size="30" maxlength="30"
                  value="<?php if (isset($_POST['katHarta'])) echo $_POST['katHarta']; ?> " /></p>
                  

            <p><label class = "label" for = "namaHarta">Nama Harta: *</label>
                  <br><input id = "namaHarta" type = "text" name="namaHarta" size="30" maxlength="30"
                  value="<?php if (isset($_POST['namaHarta'])) echo $_POST['namaHarta']; ?> " /></p>
      		

      		<p><label class = "label" for = "keteranganHarta">Keterangan Harta: *</label>
                              <br><input id = "keteranganHarta" type = "text" name="keteranganHarta" size="30" maxlength="30"
                  value="<?php if (isset($_POST['keteranganHarta'])) echo $_POST['keteranganHarta']; ?> " /></p>
      		

             <p><label class="label" for="kuantitiHarta">Kuantiti Harta : *</label>
                     <br><input id = "kuantitiHarta" type = "text" name="kuantitiHarta" size="15" maxlength="15"
                  value="<?php if (isset($_POST['kuantitiHarta'])) echo $_POST['kuantitiHarta']; ?> " /></p>

                  
                  
             <p><label class="label" for="hargaSeunit">Harga Seunit : *</label>
                    <br><input id = "hargaSeunit" type = "text" name="hargaSeunit" size="30" maxlength="30"
                  value="<?php if (isset($_POST['hargaSeunit'])) echo $_POST['hargaSeunit']; ?> " /></p>
      

             <p><label class="label" for="jumlahKeseluruhan">Jumlah Keseluruhan : </label>
                 <br><input id = "jumlahKeseluruhan" type = "jumlahKeseluruhan" name="jumlahKeseluruhan" size="30" maxlength="30"
                  value="<?php if (isset($_POST['jumlahKeseluruhan'])) echo $_POST['jumlahKeseluruhan']; ?> " /></p>

                 

             <p><label class="label" for="gst">GST</label>
                  <br><input id = "gst" type = "text" name="gst" size="30" maxlength="30"
                  value="<?php if (isset($_POST['gst'])) echo $_POST['gst']; ?> " /></p>
                 

            <p><label class="label" for="jumlah_dan_gst">Jumlah Keseluruhan & GST</label> 
                  <br><input id = "jumlah_dan_gst" type = "text" name="jumlah_dan_gst" size="20" maxlength="20"
                  value="<?php if (isset($_POST['jumlah_dan_gst'])) echo $_POST['jumlah_dan_gst']; ?> " /></p> 

                  


            <p><input id = "submit" type = "submit" name="submit" value="Simpan"/></p>
            <p><input id = "reset" type = "reset" name="reset" value="Kosongkan"/></p>

      </p>
      <p>
  </div>

      <br />
      <br/>
      <br/>
      </body>