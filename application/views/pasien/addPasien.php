
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <form class="row" action="<?= site_url('Pasien/tambah_pasien') ?>" method="POST" >
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Form 1 Data Pasien</h3>
                        <p class="text-muted m-b-30 font-13"> Kementrian Kesehatan Republik Indonesia </p>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">NIK</label>
                            <div class="col-10">
                                <input class="form-control" name="NIK" required="" type="text"  value="" placeholder="16 Digit NIK" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-2 col-form-label">MRN</label>
                            <div class="col-10">
                                <input class="form-control" name="MRN" required="" type="search" value="" placeholder="Tujuh digit kode RS | NO MR" id="example-search-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label">First Name</label>
                            <div class="col-10">
                                <input class="form-control" required="" name="First_Name" type="text" value="" placeholder="Nama Awal" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Middle Name</label>
                            <div class="col-10">
                                <input class="form-control" name="Middle_Name" type="text" value="" placeholder="Nama Tengah" id="example-url-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-2 col-form-label">Family Name</label>
                            <div class="col-10">
                                <input class="form-control" name="Family_Name" value="" placeholder="Nama Keluarga" id="example-tel-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-2 col-form-label">Place Of Birth</label>
                            <div class="col-10">
                                <input class="form-control" type="date" name="Place_Of_Birth" value="" id="example-password-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-2 col-form-label">Date Of Birth</label>
                            <div class="col-10">
                                <input class="form-control" type="date" name="Date_Of_Birth" value="" id="example-password-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Alamat Tetap</label>
                            <div class="col-10">
                                <input class="form-control" name="ID_Alamat_Tetap" type="text" value="" id="example-number-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">

                                <select name="prov" class="form-control" id="provinsi">
                                    <option>- Select Provinsi -</option>
                                    <?php
                                    foreach ($provinsi as $prov) {
                                        echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select name="kab" class="form-control" id="kabupaten">
                                    <option value=''>- Select Kabupaten -</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select name="kec" class="form-control" id="kecamatan">
                                    <option>- Select Kecamatan -</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-sm-12">
                                <input class="form-control" required="" name="kode_pos" type="text" value="" placeholder="Kode Pos" >                           
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Form 2 Data Pasien </h3>
                        <p class="text-muted m-b-30 font-13"> Kementrian Kesehatan Republik Indonesia </p>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-md-11 col-form-label">&nbsp&nbspAlamat Sementara</label>
                            <div class="col-12">
                                <input class="form-control" type="text" value="" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <select name="prov" class="form-control" id="provinsi1">
                                    <option>- Select Provinsi -</option>
                                    <?php
                                    foreach ($provinsi as $prov) {
                                        echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select name="kab" class="form-control" id="kabupaten1">
                                    <option value=''>- Select Kabupaten -</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select name="kec" class="form-control" id="kecamatan1">
                                    <option>- Select Kecamatan -</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">

                            <div class="col-sm-12">
                                <input class="form-control" required="" name="kode_pos" type="text" value="" placeholder="Kode Pos" >                           
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Sex" id="inlineFormCustomSelect">
                                    <option value="">-- Pilih Jenis Kelamin -- </option>
                                    <?php
                                    $query = $this->db->get('sex');
                                    foreach ($query->result() as $row) {
                                        echo "<option value='$row->id_sex'>$row->sex</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Race" id="inlineFormCustomSelect">
                                    <option value="">-- Pilih Suku -- </option>
                                    <?php
                                    $query = $this->db->get('race');
                                    foreach ($query->result() as $row) {
                                        echo "<option value='$row->id_race'>$row->race</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Religion" id="inlineFormCustomSelect">
                                    <option value="">-- Pilih Agama -- </option>
                                    <?php
                                    $query = $this->db->get('religion');
                                    foreach ($query->result() as $row) {
                                        echo "<option value='$row->id_religion'>$row->religion</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Status_Pernikahan" id="inlineFormCustomSelect">
                                    <option value="">-- Status Pernikahan -- </option>
                                    <?php
                                    $query = $this->db->get('status_hubungan');
                                    foreach ($query->result() as $row) {
                                        echo "<option value='$row->id_hubungan'>$row->status_hubungan</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Occupation" id="inlineFormCustomSelect">
                                   <option value="">-- Occupation -- </option>
                                    <?php
                                    $query = $this->db->get('occupation');
                                    foreach ($query->result() as $row) {
                                        echo "<option value='$row->id_occupation'>$row->Occupation</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" name="No_Telpon" type="number-input" value="" placeholder="Masukan Nomor Telpon" id="example-tel-input">
                            </div>
                        </div><br><br><br><br>

                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Data Tumor </h3>
                        <p class="text-muted m-b-30 font-13"> Kementrian Kesehatan Republik Indonesia </p>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Topography :</h5>
                                    <input type="search" class="Topography form-control nama" placeholder="Nama Topography">
                                </div>
                            </div>

                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" id="ID_Topography" name="ID_Topography" required="" readonly=""  class="autocomplete form-control nama" >
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Morphology :</h5>
                                    <input type="search"   class="Morphology form-control nama" placeholder="Nama Morphology">
                                </div>
                            </div>

                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" id="ID_Morphology" name="ID_Morphology" readonly=""  class="autocompleteb form-control " >
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Most Valid Basic of Diagnosis Cancer :</h5>
                                    <select  name="Diagnosis" onchange="Kode()"  class="custom-select col-12" >
                                        <option value="">-- Pilih -- </option>
                                        <?php
                                        $query = $this->db->get('diagnosis_cancer');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->ID_Diagnosis'>$row->Diagnosis</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Diagnosis" value="" />
                                </div>
                            </div>
                            <script language = "javascript">
                                function Kode() {
                                    var ID_Diagnosis = document.forms[0].Diagnosis.value;
                                    document.forms[0].ID_Diagnosis.value = ID_Diagnosis;
                                }
                            </script>

                        </div><br>

                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Clinical ext. of disease before treatment :</h5>


                                    <select  name="Disease" onchange="Kode2()"  class="custom-select col-12" >
                                        <option value="">-- Pilih -- </option>
                                        <?php
                                        $query = $this->db->get('disease');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->ID_Disease'>$row->Disease</option>";
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>

                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Disease" value="" />
                                </div>
                            </div>
                            <script language = "javascript">
                                function Kode2() {
                                    var ID_Disease = document.forms[0].Disease.value;
                                    document.forms[0].ID_Disease.value = ID_Disease;
                                }
                            </script>
                        </div>
                        <br>

                        <div name="Treatment_Reporting" onclick="checkbox()">
                            <table style="width:35%">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Treatment at reporting institution : &nbsp&nbsp
                                        <input type="text" size="30" readonly="" name="pilihan" value="" />                            
                                    </h5>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <?php
                                        $query = $this->db->get('treatment_reporting');
                                        //  $total = 0;
                                        foreach ($query->result() as $row) {
//                                            $total++;
//                                            if ($total <= 5) {
//                                                echo "<tr>
//                                                     <th>&nbsp; $total <input type='checkbox' class='form-check-input' value='$row->ID_Treatment' >  &nbsp;  &nbsp;  &nbsp; $row->Treatment_Reporting &nbsp;</th>
//                                                     ";
//                                            } else {
                                            echo "  
                                                 <th>&nbsp;<input type='checkbox' name='datacheckbox' class='form-check-input' value='$row->ID_Treatment' >  &nbsp;  &nbsp; $row->Treatment_Reporting &nbsp;</th></tr> ";
                                        }
                                        ?>
                                    </label>
                                </div>

                                <script language = "javascript">
                                    function checkbox() {
                                        var datacheckbox = document.forms[0];//Disease.value;
                                        var txt = "";
                                        var i;
                                        for (i = 0; i < datacheckbox.length; i++) {
                                            if (datacheckbox[i].checked) {
                                                txt = txt + datacheckbox[i].value + " ";
                                            }
                                        }
                                        document.forms[0].pilihan.value = txt;
                                    }
                                </script>
                            </table> 
                        </div>


                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Diagnosis Klinis :</h5>
                                    <input type="text" name="Diagnosis_Klinis"   class="Morphology form-control nama" placeholder="Diagnosis Klinis">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example"> <div class="col-md-4">
                                        <h5 class="box-title m-t-30">Diagnosis Date :</h5>

                                        <input class="form-control" name="Diagnosis_Date" type="date" value="" id="example-password-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Behaviour :</h5>
                                    <select  name="Behaviour" onchange="Kode3()"  class="custom-select col-12" >
                                        <option value="">-- Pilih -- </option>
                                        <?php
                                        $query = $this->db->get('Behaviour');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->ID_Behaviour'>$row->Behaviour</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Behaviour" value="" />
                                </div>
                            </div>
                            <script language = "javascript">
                                function Kode3() {
                                    var ID_Behaviour = document.forms[0].Behaviour.value;
                                    document.forms[0].ID_Behaviour.value = ID_Behaviour;
                                }
                            </script>

                        </div>
                        <br>


                        <div name="distant_metastases" onclick="checkbox1()">
                            <table style="width:35%">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Distant Metastases : &nbsp&nbsp
                                        <input type="text" size="30" readonly="" name="dipilih" value="" />                            
                                    </h5>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <?php
                                        $query = $this->db->get('distant_metastases');
                                        //  $total = 0;
                                        foreach ($query->result() as $row1) {
                                            echo "  
                                                 <th>&nbsp;<input type='checkbox' name='datacheckbox1' class='form-check-input' value='$row1->ID_Distant_Metastases' >  &nbsp;  &nbsp; $row1->Distant_Metastases &nbsp;</th></tr> ";
                                        }
                                        ?>
                                    </label>
                                </div>
                                <script language = "javascript">
                                    function checkbox1() {
                                        var datacheckbox1 = document.forms[0];//Disease.value;
                                        var txt = "";
                                        var i;
                                        for (i = 0; i < datacheckbox1.length; i++) {
                                            if (datacheckbox1[i].checked) {
                                                txt = txt + datacheckbox1[i].value + " ";
                                            }
                                        }
                                        document.forms[0].dipilih.value = txt;
                                    }
                                </script>
                            </table> 
                        </div>






                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">No.of metastates :</h5>
                                    <div class="col-md-12">
                                        <select name="No_Of_Metastases" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected>1. In situ</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Grade :</h5>
                                    <select  name="Grade" onchange="Kode4()"  class="custom-select col-12" >
                                        <option value="">-- Pilih -- </option>
                                        <?php
                                        $query = $this->db->get('Grade');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->ID_Grade'>$row->Grade</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Grade" value="" />
                                </div>
                            </div>
                            <script language = "javascript">
                                function Kode4() {
                                    var ID_Grade = document.forms[0].Grade.value;
                                    document.forms[0].ID_Grade.value = ID_Grade;
                                }
                            </script>

                        </div>

                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Stage :</h5>
                                    <select  name="Stage" onchange="Kode5()"  class="custom-select col-12" >
                                        <option value="">-- Pilih -- </option>
                                        <?php
                                        $query = $this->db->get('Stage');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->ID_Stage'>$row->Stage</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Stage" value="" />
                                </div>
                            </div>
                            <script language = "javascript">
                                function Kode5() {
                                    var ID_Stage = document.forms[0].Stage.value;
                                    document.forms[0].ID_Stage.value = ID_Stage;
                                }
                            </script>

                        </div>

                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Stage :</h5>
                                    <select  name="Laterality" onchange="Kode6()"  class="custom-select col-12" >
                                        <option value="">-- Pilih -- </option>
                                        <?php
                                        $query = $this->db->get('laterality');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->ID_Laterality'>$row->Laterality</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Laterality" value="" />
                                </div>
                            </div>
                            <script language = "javascript">
                                function Kode6() {
                                    var ID_Laterality = document.forms[0].Laterality.value;
                                    document.forms[0].ID_Laterality.value = ID_Laterality;
                                }
                            </script>
                        </div>


                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Immunohistokimia / immunohistochemistry :</h5>
                                    <div class="col-md-12">
                                        <select name="ID_Immunohistokimia" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected>1. In situ</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div></div></div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Date IHC :</h5>
                                    <div class="col-md-12">
                                        <input name="Date_IHC" class="form-control" type="date" value="" id="example-password-input">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">In Situ Hybridization :</h5>
                                    <div class="col-md-12">
                                        <select name="ID_Hybridization" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected>1. In situ</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Date :</h5>
                                    <div class="col-md-12">
                                        <input name="Date" class="form-control" type="date" value="" id="example-password-input">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Jenis Biopsy / type of Biopsy :</h5>
                                    <select  name="Biopsy" onchange="Kode7()"  class="custom-select col-12" >
                                        <option value="">-- Pilih -- </option>
                                        <?php
                                        $query = $this->db->get('Biopsy');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->ID_Biopsy'>$row->Biopsy</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Biopsy" value="" />
                                </div>
                            </div>
                            <script language = "javascript">
                                function Kode7() {
                                    var ID_Biopsy = document.forms[0].Biopsy.value;
                                    document.forms[0].ID_Biopsy.value = ID_Biopsy;
                                }
                            </script>
                        </div>




                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Sublocation of Breast Tumor :</h5>
                                    <select  name="Sublocation" onchange="Kode8()"  class="custom-select col-12" >
                                        <option value="">-- Pilih -- </option>
                                        <?php
                                        $query = $this->db->get('sublocation');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->ID_Sublocation'>$row->Sublocation</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Sublocation" value="" />
                                </div>
                            </div>
                            <script language = "javascript">
                                function Kode8() {
                                    var ID_Sublocation = document.forms[0].Sublocation.value;
                                    document.forms[0].ID_Sublocation.value = ID_Sublocation;
                                }
                            </script>
                        </div>




                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Source or Follow up :</h5>
                                    <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0 editableTable">
                                        <thead>
                                            <tr>
                                                <th>Tgl. Periksa</th>
                                                <th>Kode Rumah Sakit</th>
                                                <th>Nama Rumah Sakit</th>
                                                <th>Unit ID</th>
                                                <th>Unit</th>
                                                <th>No.PA/LAB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="date"></input></td>
                                                <td>Kode Rumah Sakit</td>
                                                <td>e.g RSUP Dr. Sarjidto</td>
                                                <td>Unit ID</td>
                                                <td>Unit</td>
                                                <td>No.PA/Lab</td>
                                            </tr>
                                            <tr>
                                                <td><input type="date"/></td>
                                                <td>Kode Rumah Sakit</td>
                                                <td>e.g RSUP Dr. Sarjidto</td>
                                                <td>Unit ID</td>
                                                <td>Unit</td>
                                                <td>No.PA/Lab</td>
                                            </tr>


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30"> Kesimpulan :</h5>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="white-box">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Admission date</h5>
                                                <input class="form-control input-daterange-datepicker" type="text" name="admission" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Registrar</h5>
                                                <input type="text" class="form-control input-daterange-timepicker" name="registrar" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Verifier</h5>
                                                <input class="form-control input-limit-datepicker" type="text" name="verifier" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Date last contact</h5>
                                                <input class="form-control input-daterange-datepicker" type="text" name="datelastcontact" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Date of abstract</h5>
                                                <input type="text" class="form-control input-daterange-timepicker" name="dateofabstract" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Date of Verification</h5>
                                                <input class="form-control input-limit-datepicker" type="text" name="dateofverification" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Status</h5>
                                                <select  name="status" onchange="Kode1()"  class="custom-select col-12" >
                                                    <option value="">Pilih Status</option>
                                                    <?php
                                                    $query = $this->db->get('status');
                                                    foreach ($query->result() as $row) {
                                                        echo "<option value='$row->ID_Status'>$row->Status</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-1">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Kode</h5>
                                                <input type="text" readonly="" class="form-control input-daterange-timepicker" name="ID_Status" value="" />
                                            </div>
                                        </div>
                                        <script language = "javascript">
                                            function Kode1() {
                                                var status = document.forms[0].status.value;
                                                document.forms[0].ID_Status.value = status;
                                            }
                                        </script>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <a href="#popup">
                                <div class="col-md-5 pull-right">
                                    <button class="btn btn-skype btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Submit</button>
                                </div></a>
                            <div id="popup">
                                <div class="window">
                                    <a href="#" class="close-button" title="Close">X</a>
                                    <h2><font color=white>SUKSES DISIMPAN!</font></h2>
                                </div>
                            </div>


                        </div><br>
                    </div>
                </div>  
            </form>
        </div>
    </div>
</div>