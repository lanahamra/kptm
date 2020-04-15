<body>

  <?php include ("header.php");?>

  <?php
  //thi squery inserts a record in the table
  //has form been submitted
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
  $error = array();//initialize an error array

 

   //check for a id
  if(empty($_POST['ast_hrt_id'])) {
    $error [] = 'Sila masukkan ID harta.';
  }
  else {
    $hrtid = mysqli_real_escape_string ($connect,trim ($_POST['ast_hrt_id']));
  }



  //check for a name
  if(empty($_POST['ast_kump_id'])) {
    $error [] = 'Sila masukkan ID Pembekal.';
  }
  else {
    $hrtkumnm = mysqli_real_escape_string ($connect,trim ($_POST['ast_kump_id']));
  }



//check for ic number
if (empty($_POST['ast_hrt_nama'])){
  $error [] = 'You forgot to enter your No PO.';
}
else{
  $hrtnm = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_nama']));
}


//check for a Id number
if (empty($_POST['ast_hrt_keterangan'])){
  $error [] = 'You forgot to enter your tarikh po.';
}
else{
  $hrtkt= mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_keterangan']));
}



//check for a idPembekal  number
if (empty($_POST['ast_hrt_nosiri'])){
  $error [] = 'You forgot to enter your nama harta.';
}
else{
  $hrtns = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_nosiri']));
}


//check for a namaHarta
if (empty($_POST['ast_kat_id'])){
  $error [] = 'You forgot to enter your keterangan.';
}
else{
  $katid = mysqli_real_escape_string($connect,trim ($_POST['ast_kat_id']));
}


//check for a race
if (empty($_POST['ast_pst_id'])){
  $error [] = 'You forgot to enter your kuantiti.';
}
else{
  $pstid = mysqli_real_escape_string($connect,trim ($_POST['ast_pst_id']));
}


//check for a religion
if (empty($_POST['ast_kla_id'])){
  $error [] = 'You forgot to enter your harga seunit.';
}
else{
  $klaid = mysqli_real_escape_string($connect,trim ($_POST['ast_kla_id']));
}


//check for a birth place
if (empty($_POST['ast_hrt_kuantiti'])){
  $error [] = 'You forgot to enter your place of jumlah kseluruhan.';
}
else{
  $hrtq = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_kuantiti']));
}


//check for a date of birth
if (empty($_POST['ast_hrt_tahun'])){
  $error [] = 'You forgot to enter your gst.';
}
else{
  $hrtthn = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_tahun']));
}

//check for a idPembekal
if (empty($_POST['ast_pbkl_id'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $pbklid = mysqli_real_escape_string($connect,trim ($_POST['ast_pbkl_id']));
}


//check for a nama pembekal
if (empty($_POST['ast_pbkl_nama'])){
  $error [] = 'You forgot to enter your nama pembekal.';
}
else{
  $pbklnm = mysqli_real_escape_string($connect,trim ($_POST['ast_pbkl_nama']));
}

//check for a alamat pembekal
if (empty($_POST['ast_pbkl_alamat'])){
  $error [] = 'You forgot to enter your alamat pembekal.';
}
else{
  $pbklalm = mysqli_real_escape_string($connect,trim ($_POST['ast_pbkl_alamat']));
}


//check for a poskod pembekal
if (empty($_POST['ast_pbkl_poskod'])){
  $error [] = 'You forgot to enter your poskod pembekalt.';
}
else{
  $pbklpskd = mysqli_real_escape_string($connect,trim ($_POST['ast_pbkl_poskod']));
}


//check for a tel pembekal
if (empty($_POST['ast_pbkl_tel'])){
  $error [] = 'You forgot to enter your tel pembekal.';
}
else{
  $pbkltel = mysqli_real_escape_string($connect,trim ($_POST['ast_pbkl_tel']));
}


//check for a negeri pembekal
if (empty($_POST['ast_neg_id'])){
  $error [] = 'You forgot to enter your negeri pembekal.';
}
else{
  $negid = mysqli_real_escape_string($connect,trim ($_POST['ast_neg_id']));
}


//check for no po
if (empty($_POST['ast_hrt_po'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $hrtpon = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_po']));
}


//check for a tarikh po
if (empty($_POST['ast_hrt_po_dt'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $hrtpot = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_po_dt']));
}



if (empty($_POST['ast_hrt_do'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $hrtdon = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_do']));
}



if (empty($_POST['ast_hrt_do_dt'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $hrtdot = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_do_dt']));
}



if (empty($_POST['ast_hrt_inbois'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $hrtinb = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_inbois']));
}



if (empty($_POST['ast_hrt_inbois_dt'])){
  $error [] = 'You forgot to enter your inbois.';
}
else{
  $hrtinbt = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_inbois_dt']));
}



if (empty($_POST['ast_hrt_baucer'])){
  $error [] = 'You forgot to enter your baucer number.';
}
else{
  $hrtbc = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_baucer']));
}


if (empty($_POST['ast_hrt_baucer_dt'])){
  $error [] = 'You forgot to enter your baucer date.';
}
else{
  $hrtbct = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_baucer_dt']));
}


if (empty($_POST['ast_hrt_harga'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $hrthrg = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_harga']));
}


if (empty($_POST['ast_hrt_harga_total'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $hrtjh = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_harga_total']));
}


if (empty($_POST['ast_hrt_hargagst'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $hrtgst = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_hargagst']));
}


if (empty($_POST['ast_hrt_jumhargagst'])){
  $error [] = 'You forgot to enter your jumlah&gst.';
}
else{
  $hrtjgst = mysqli_real_escape_string($connect,trim ($_POST['ast_hrt_jumhargagst']));
}

?>





     <?php

 if(isset($_POST['submit'])){
  if(isset($_POST['ast_kump_id']) &&  isset($_POST['ast_kat_id']) &&  isset($_POST['ast_pst_id'])  &&  isset($_POST['ast_kla_id'])){
    $hrtkumnm=$_POST['ast_kump_id'];
    $katid=$_POST['ast_kat_id'];
    $pstid=$_POST['ast_pst_id'];
    $klaid=$_POST['ast_kla_id'];
    $sql = "INSERT INTO ast_harta (ast_hrt_id, ast_kump_id,ast_hrt_nama, ast_hrt_keterangan, ast_hrt_nosiri, ast_kat_id, ast_pst_id, ast_kla_id, ast_hrt_kuantiti,ast_hrt_tahun, ast_pbkl_id, ast_hrt_po, ast_hrt_po_dt, ast_hrt_do, ast_hrt_do_dt, ast_hrt_inbois, ast_hrt_inbois_dt, ast_hrt_baucer, ast_hrt_baucer_dt, ast_hrt_harga, ast_hrt_harga_total, ast_hrt_hargagst, ast_hrt_jumhargagst) VALUES ('','$hrtkumnm', '$hrtnm', '$hrtkt', '$hrtns', '$katid', '$pstid', '$klaid', '$hrtq', '$hrtthn','$pbklid', '$hrtpon', '$hrtpot', '$hrtdon', '$hrtdot', '$hrtinb', '$hrtinbt', '$hrtbc', '$hrtbct', '$hrthrg', '$hrtjh', '$hrtgst', '$hrtjgst');";
      

      $sql  .= "INSERT INTO ast_pembekal(ast_pbkl_id, ast_pbkl_nama, ast_pbkl_alamat, ast_pbkl_poskod, ast_neg_id, ast_pbkl_tel ) VALUES ('$pbklid','$pbklnm', '$pbklalm', '$pbklpskd', '$negid', '$pbkltel')";



      if(mysqli_multi_query($connect,$sql))
      {
        echo 'success';
      }
      else
      {

        echo'<h1>system error</h1>';

       //debugging message
       echo'<p>' .mysqli_error($connect). '<br><br>Query:'.$sql.' </p>';
       }//end of it(result)
       mysqli_close($connect);//close the database connection
       exit();
      }






     }}

     ?>





      <h2 align="center">PENDAFTARAN ASET</h2>
      <form action = "PPDA.php" method = "post">

  <div class="documentcont" >
    <table>

                     <tr>
                      <td><p><label for="ast_kump_id"> Nama Kumpulan Harta : </td>
                            <td><select name="ast_kump_id">
                                <option value="ACD">ACD - ACCESS DOOR</option>
                                <option value="AMS">AMS - ALATAN MAKMAL SAINS</option>
                                <option value="BDG">BDG - BINDING</option>
                                <option value="BEG">BEG - BEG</option>
                                <option value="BST">BST - BROCHURE STAND</option>
                                <option value="CCT">CCT - CCTV</option>
                                <option value="CPC">CPC - CAPTION COKMAR</option>
                                <option value="DPS">DPS - DISPENSER</option>
                                <option value="FAX">FAX - FAX</option>
                                <option value="FLC">FLC - FLITE CASE</option>
                                <option value="HPO">HPO - ALATAN PEJABAT</option>
                                <option value="HRD">HRD - HARD DISK</option>
                                <option value="KAR">KAR - KARPET</option>
                                <option value="KDR">KDR - KENDERAAN</option>
                                <option value="KER">KER - KERETA</option>
                                <option value="KNT">KNT - KAUNTER</option>
                                <option value="KOM">KOM - KOMPUTER</option>
                                <option value="PER">PER - PERABOT</option>
                                <option value="PGN">PGN - PIGEON HOLE</option>
                                <option value="PGS">PGS - PENGUBAHSUAIAN</option>
                                <option value="PNU">PNU - PENYAMAN UDARA</option>
                                <option value="PRT">PRT - PRINTER</option>
                                <option value="PSN">PSN - PERISIAN</option>
                                <option value="PUD">PUD - POP UP DISPLAY</option>
                                <option value="RAC">RAC - RACK</option>
                                </select>
                             
                              </label></td></tr> 
<tr>
<td><p><label class = "label" for = "ast_hrt_nama">Nama Harta :</label></p></td>
                  <td><input id = "ast_hrt_nama" type = "text" name="ast_hrt_nama" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_nama'])) echo $_POST['ast_hrt_nama']; ?> " /></p></td></tr>




                                     <tr><td> <p><label class = "label" for = "ast_hrt_keterangan">Keterangan Harta :</label></p></td>
                       <td> <input id = "ast_hrt_keterangan" type = "text" name="ast_hrt_keterangan" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_keterangan'])) echo $_POST['ast_hrt_keterangan']; ?> " /></p></td></tr>


                                       <tr><td><p><label class = "label" for = "ast_hrt_nosiri">No Siri Harta: </label></p></td>
                       <td> <input id = "ast_hrt_nosiri" type = "text" name="ast_hrt_nosiri" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_nosiri'])) echo $_POST['ast_hrt_nosiri']; ?> " /></p></td></tr>


                               <tr><td><p><label for="ast_kat_id"> Kategori Harta : </label></p></td>
                           <td> <select name="ast_kat_id">
                                <option value="AIM">AIM - HARTA TETAP AIM</option>
                                <option value="FTF">FTF - HARTA TETAP KPTM</option>
                                <option value="HTA">HTA - HARTA TETAP ATAP</option>
                                <option value="HTC">HTC - HARTA TETAP FOC</option>
                                <option value="HTL">HTL - HARTA TETAP LEASING</option>
                                <option value="HTM">HTM - HARTA TETAP AM</option>
                                <option value="IVA">IVA - INVENTORI AM</option>
                                <option value="IVC">IVC - INVENTORI FOC</option>
                                <option value="IVL">IVL - INVENTORI LEASING</option>
                                <option value="IVM">IVM - INVENTORI AM</option>
                                <option value="YPM">YPM - HARTA TETAP YPM</option>
                                </select>
                             
                              </label></td></tr>


                              <tr><td><p><label for="ast_pst_id"> Pusat Mengawal Harta : </label></p></td>
                           <td> <select name="ast_pst_id">
                                <option value="AS">AS - KPTM Alor Setar</option>
                                <option value="BG">BG - KPTM BANGI</option>
                                <option value="BP">BP - KPTM BATU PAHAT</option>
                                <option value="HQ">HQ - KPTM IBU PEJABAT</option>
                                <option value="IP">IP - KPTM IPOH</option>
                                <option value="KB">KB - KPTM KOTA BHARU</option>
                                <option value="KL">KL - KPTM KUALA LUMPUR</option>
                                <option value="KN">KN - KPTM KUANTAN</option>
                                <option value="KS">KS - KPTM KESEDAR</option>
                                <option value="SS">SS - KPTM SEMPORNA</option>
                                </select>
                             
                              </label></td></tr>


                           <tr><td><p><label for="ast_kla_id"> Klasifikasi Harta : </label></p></td>
                            <td><select name="ast_kla_id">
                                <option value="AP">AP - PERALATAN PEJABAT</option>
                                <option value="BN">BN - BANGUNAN PEGANGAN PAJAKAN</option>
                                <option value="KD">KD - KENDERAAN BERMOTOR</option>
                                <option value="KP">KP - PERALATAN KOMPUTER</option>
                                <option value="MS">MS - ALATAN MAKMAL SAINS</option>
                                <option value="PP">PP - PERKAKASAN PERABOT</option>
                                <option value="PS">PS - PERISIAN</option>
                                <option value="TB">TB - TANAH PEGANGAN BEBAS</option>
                                <option value="TP">TP - TANAH PEGANGAN PAJAKAN</option>
                                <option value="US">US - PENGUBAHSUAIAN</option>
                                </select>
                             
                              </label></td></tr>

                                           <tr><td><p><label class = "label" for = "ast_hrt_kuantiti">Kuantiti Harta: *</label></p></td>
                  <td><input id = "ast_hrt_kuantiti" type = "text" name="ast_hrt_kuantiti" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_kuantiti'])) echo $_POST['ast_hrt_kuantiti']; ?> " /></p></td></tr>


                            <tr><td><p><label class = "label" for = "ast_hrt_tahun">Tahun Pembelian: *</label></p></td>
                 <td> <input id = "ast_hrt_tahun" type = "text" name="ast_hrt_tahun" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_tahun'])) echo $_POST['ast_hrt_tahun']; ?> " /></p></td></tr>



                  <tr><td><p><label class = "label" for = "ast_pbkl_id">No ID Pembekal: *</label></p></td>
                  <td><input id = "ast_pbkl_id" type = "text" name="ast_pbkl_id" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_pbkl_id'])) echo $_POST['ast_pbkl_id']; ?> " /></p></td></tr>



                                    <tr><td><p><label class = "label" for = "ast_pbkl_nama">Nama Pembekal: *</label></p></td>
                  <td><input id = "ast_pbkl_nama" type = "text" name="ast_pbkl_nama" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_pbkl_nama'])) echo $_POST['ast_pbkl_nama']; ?> " /></p></td></tr>



                                    <tr><td><p><label class = "label" for = "ast_pbkl_alamat">Alamat Pembekal: *</label></p></td>
                  <td><input id = "ast_pbkl_alamat" type = "text" name="ast_pbkl_alamat" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_pbkl_alamat'])) echo $_POST['ast_pbkl_alamat']; ?> " /></p></td></tr>


                                    <tr><td><p><label class = "label" for = "ast_pbkl_poskod">Poskod Pembekal: *</label></p></td>
                  <td><input id = "ast_pbkl_poskod" type = "text" name="ast_pbkl_poskod" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_pbkl_poskod'])) echo $_POST['ast_pbkl_poskod']; ?> " /></p></td></tr>


                                    <tr><td><p><label class = "label" for = "ast_pbkl_tel">No tel Pembekal: *</label></p></td>
                  <td><input id = "ast_pbkl_tel" type = "text" name="ast_pbkl_tel" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_pbkl_tel'])) echo $_POST['ast_pbkl_tel']; ?> " /></p></td></tr>


                                    <tr><td><p><label class = "label" for = "ast_neg_id">Negeri Pembekal: *</label></p></td>
                  <td><input id = "ast_neg_id" type = "text" name="ast_neg_id" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_neg_id'])) echo $_POST['ast_neg_id']; ?> " /></p></td></tr>


                            <tr><td><p><label class = "label" for = "ast_hrt_po">No PO / No Surat Lantikan</label></p></td>
                              <td><input id = "ast_hrt_po" type = "text" name="ast_hrt_po" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_po'])) echo $_POST['ast_hrt_po']; ?> " /></p></td></tr>


                            <tr><td><p><label class = "label" for = "ast_hrt_po_dt">Tarikh PO / Tarikh Surat Lantikan</label></p></td>
                              <td><input id = "ast_hrt_po_dt" type = "date" name="ast_hrt_po_dt" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_po_dt'])) echo $_POST['ast_hrt_po_dt']; ?> " /></p></td></tr>


                            <tr><td><p><label class = "label" for = "ast_hrt_do">No DO : </label></p></td>
                              <td><input id = "ast_hrt_do" type = "text" name="ast_hrt_do" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_do'])) echo $_POST['ast_hrt_do']; ?> " /></p></td></tr>


                            <tr><td><p><label class = "label" for = "ast_hrt_do_dt">Tarikh DO :n</label></p></td>
                              <td><input id = "ast_hrt_do_dt" type = "date" name="ast_hrt_do_dt" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_do_dt'])) echo $_POST['ast_hrt_do_dt']; ?> " /></p></td></tr>


                               <tr><td><p><label class="label" for="ast_hrt_inbois">No Inbois : *</label></p></td>
                     <td><input id = "ast_hrt_inbois" type = "text" name="ast_hrt_inbois" size="15" maxlength="15"
                  value="<?php if (isset($_POST['ast_hrt_inbois'])) echo $_POST['ast_hrt_inbois']; ?> " /></p></td></tr>


                              <tr><td> <p><label class="label" for="ast_hrt_inbois_dt">Tarikh Inbois : *</label></p></td>
                    <td><input id = "ast_hrt_inbois_dt" type = "date" name="ast_hrt_inbois_dt" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_inbois_dt'])) echo $_POST['ast_hrt_inbois_dt']; ?> " /></p></td></tr>


                               <tr><td><p><label class="label" for="ast_hrt_baucer">No Baucer : </label></p></td>
                 <td> <input id = "ast_hrt_baucer" type = "ast_hrt_baucer" name="ast_hrt_baucer" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_baucer'])) echo $_POST['ast_hrt_baucer']; ?> " /></p></td></tr>


                                <tr><td><p><label class="label" for="ast_hrt_baucer_dt">Tarikh Baucer : </label></p></td>
                 <td><input id = "ast_hrt_baucer_dt" type = "date" name="ast_hrt_baucer_dt" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_baucer_dt'])) echo $_POST['ast_hrt_baucer_dt']; ?> " /></p></td></tr>


                               <tr><td><p><label class="label" for="ast_hrt_harga">Harga Seunit</label></p></td>
                  <td><input id = "ast_hrt_harga" type = "text" name="ast_hrt_harga" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_harga'])) echo $_POST['ast_hrt_harga']; ?> " /></p></td></tr>


                               <tr><td><p><label class="label" for="ast_hrt_harga_total">Jumlah Harta</label></p></td>
                  <td><input id = "gst" type = "text" name="ast_hrt_harga_total" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_harga_total'])) echo $_POST['ast_hrt_harga_total']; ?> " /></p></td></tr>


                                <tr><td><p><label class="label" for="ast_hrt_hargagst">Jumlah Harga GST</label></p></td>
                 <td> <input id = "ast_hrt_hargagst" type = "text" name="ast_hrt_hargagst" size="30" maxlength="30"
                  value="<?php if (isset($_POST['ast_hrt_hargagst'])) echo $_POST['ast_hrt_hargagst']; ?> " /></p></td></tr>


                              <tr><td><p><label class="label" for="ast_hrt_jumhargagst">Jumlah Keseluruhan & GST</label> </p></td>
                  <td><input id = "ast_hrt_jumhargagst" type = "text" name="ast_hrt_jumhargagst" size="20" maxlength="20"
                  value="<?php if (isset($_POST['ast_hrt_jumhargagst'])) echo $_POST['ast_hrt_jumhargagst']; ?> " /></p> </td></tr>




                            
                          </p>
                        </td>
                      </tr>
                    </table>
                  </div>





           <p> <input id = "reset" type = "reset" name="reset" value="Kosongkan" style="margin-left: 80%; margin-top: 0.5%"/></p>
            <p><input id = "submit"  href= ""type = "submit" name="submit" value="Simpan" style="margin-left: 80%;" /></p>
                            </form>
                          </label>
                        </p>
                      </td>
                    </tr>
                  </table>
                </div>
              </form>
            </body>


                  