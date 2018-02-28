<div class="container-fluid">
    <div class="row">
        <form action="<?php echo base_url(); ?>Pasien/tambah_pasien" method="POST" >
            <div class="col-sm-12 white-box"> 
                <center>
                    <h5> <strong><text style="color: #999999">DATA PASIEN</text></strong></h5>
                    <hr align="right" width="95%" color="cccccc">
                </center>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-4 col-form-label">NIK</label>
                                <div class="col-8">
                                    <input class="form-control" name="NIK" required="" type="text"  value="" placeholder="16 Digit NIK" id="example-text-input">
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label for="example-search-input" class="col-4 col-form-label">MRN</label>&nbsp&nbsp
                                <div class="col-lg-3 col-10">
                                    <div class="example"> 
                                        <input class="form-control" name="Kode_RS" type="text" required=""  value="" placeholder="Kode RS " id="example-search-input">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <input type="text" id="example-search-input" name="MRN"  required="" placeholder="MRN" class="form-control" >
                                </div>
                                <div class="col-3 row">
                                    <input type="text" id="example-search-input" name="NO_PA_LAB"  required="" placeholder="NO PA/Lab" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-4 col-form-label">First Name </label>
                                <div class="col-8">
                                    <input class="form-control" name="First_Name" type="text" required="" value="" placeholder="Nama Awal" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Middle Name</label>
                                <div class="col-8">
                                    <input class="form-control" name="Middle_Name" type="text" required="" value="" placeholder="Nama Tengah" id="example-url-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-4 col-form-label">Family Name</label>
                                <div class="col-8">
                                    <input class="form-control" name="Family_Name" value="" placeholder="Nama Keluarga" id="example-tel-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-4 col-form-label">Place Of Birth</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" required="" name="Place_Of_Birth" placeholder="Tempat Lahir"  value="" id="example-password-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-4 col-form-label">Date Of Birth</label>
                                <div class="col-8">
                                    <input class="form-control" type="date" required="" name="Date_Of_Birth"  value="" id="example-password-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-4 col-form-label">Alamat Tetap</label>
                                <div class="col-8">
                                    <input class="form-control" name="Alamat_Tetap" required="" value="" placeholder="Alamat Tetap" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-4 col-form-label">Provinsi</label>
                                <div class="col-8">
                                    <select name="ID_Provinsi" required="" class="form-control" id="provinsi">
                                        <option>- Select Provinsi -</option>
                                        <?php
                                        foreach ($provinsi as $prov) {
                                            echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-number-input" class="col-4 col-form-label">Kabupaten</label>
                                <div class="col-8">
                                    <select name="id_kabupaten" required="" class="form-control" id="kabupaten">
                                        <option value=''>- Select Kabupaten -</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-4 col-form-label">Kecamatan</label>
                                <div class="col-8">
                                    <select name="id_kecamatan" required="" class="form-control" id="kecamatan">
                                        <option>- Select Kecamatan -</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-4 col-form-label">Kode Pos</label>
                                <div class="col-8">
                                    <input class="form-control" name="kode_pos" type="text"  value="" placeholder="Kode Pos" required="" id="example-text-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="white-box">
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Alamat Sementara</label>
                                <div class="col-7">
                                    <input class="form-control" name="Alamat_Sementara" placeholder="Alamat Sementara" required=""  value="" type="text" id="example-number-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Provinsi</label>
                                <div class="col-7">
                                    <select name="id_provinsi_1" required="" class="form-control" id="provinsi1">
                                        <option>- Select Provinsi -</option>
                                        <?php
                                        foreach ($provinsi as $prov) {
                                            echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Kabupaten</label>
                                <div class="col-7">
                                    <select name="id_kabupaten_1" required="" class="form-control" id="kabupaten1">
                                        <option value=''>- Select Kabupaten -</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Kecamatan</label>
                                <div class="col-7">
                                    <select name="id_kecamatan_1" required=""  class="form-control" id="kecamatan1">
                                        <option>- Select Kecamatan -</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-5 col-form-label">Kode Pos</label>
                                <div class="col-7">
                                    <input class="form-control" name="kode_pos1" type="text"  value="" placeholder="Kode Pos" required="" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">SEX</label>
                                <div class="col-7">
                                    <select class="custom-select col-12" required="" name="ID_Sex" id="inlineFormCustomSelect">
                                        <option value="">-- Pilih Jenis Kelamin -- </option>
                                        <?php
                                        $query = $this->db->get('sex');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->id_sex'>$row->id_sex &nbsp;$row->sex</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Race</label>
                                <div class="col-7"> 
                                    <select class="custom-select col-12" required="" name="ID_Race" id="inlineFormCustomSelect">
                                        <option value="">-- Pilih Suku -- </option>
                                        <?php
                                        $query = $this->db->get('race');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->id_race'>$row->id_race &nbsp;$row->race</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Religion</label>
                                <div class="col-7"> 
                                    <select class="custom-select col-12" required="" name="ID_Religion" id="inlineFormCustomSelect">
                                        <option value="">-- Pilih Agama -- </option>
                                        <?php
                                        $query = $this->db->get('religion');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->id_religion'>$row->id_religion &nbsp;$row->religion</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Status Pernikahan</label>
                                <div class="col-7"> 
                                    <select class="custom-select col-12" name="id_status_hubungan" id="inlineFormCustomSelect">
                                        <option value="">-- Status Pernikahan -- </option>
                                        <?php
                                        $query = $this->db->get('status_hubungan');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->id_hubungan'>$row->id_hubungan &nbsp;$row->status_hubungan</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Occupation</label>
                                <div class="col-7"> 
                                    <select class="custom-select col-12" name="ID_Occupation" id="inlineFormCustomSelect">
                                        <option value="">-- Occupation -- </option>
                                        <?php
                                        $query = $this->db->get('occupation');
                                        foreach ($query->result() as $row) {
                                            echo "<option value='$row->id_occupation'>$row->id_occupation &nbsp;$row->Occupation</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-5 col-form-label">No. Telp/Hp</label>
                                <div class="col-7">
                                    <input class="form-control" name="No_Telpon" type="text" value="" required="true"  placeholder="No Telpon" id="example-text-input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 white-box" >
                <center>
                    <strong><text style="color: #999999">DATA TUMOR</text></strong> 
                    <hr align="right" width="100%" color="cccccc">
                </center>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Topography :</h5>
                                        <input type="search" id="Topography" class="Topography form-control" required="true"  placeholder="Nama Topography">
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" id="ID_Topography" name="ID_Topography" readonly="" required="true"  class="autocomplete form-control nama" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Morphology :</h5>
                                        <input type="search"   class="Morphology form-control nama" required="true"  placeholder="Nama Morphology">
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" id="ID_Morphology" name="ID_Morphology" readonly="" required="true"   class="autocompleteb form-control " >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Most Valid Basic of Diagnosis Cancer :</h5>
                                        <select required="true"  name="Diagnosis" onchange="Kode()"  class="custom-select col-12" >
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('diagnosis_cancer');
                                            foreach ($query->result() as $row) {
                                                echo "<option value='$row->ID_Diagnosis'>$row->ID_Diagnosis &nbsp;$row->Diagnosis</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" class="form-control input-daterange-timepicker" required="true"  readonly="" name="ID_Diagnosis" value="" />
                                    </div>
                                </div>
                                <script language = "javascript">
                                    function Kode() {
                                        var ID_Diagnosis = document.forms[0].Diagnosis.value;
                                        document.forms[0].ID_Diagnosis.value = ID_Diagnosis;
                                    }
                                </script>

                            </div>

                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Clinical ext. of disease before treatment :</h5>
                                        <select  name="Disease" onchange="Kode2()" required="true"  class="custom-select col-12" >
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('disease');
                                            foreach ($query->result() as $row) {
                                                echo "<option value='$row->ID_Disease'>$row->ID_Disease &nbsp;$row->Disease</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" class="form-control input-daterange-timepicker" required="true" readonly="" name="ID_Disease" value="" />
                                    </div>
                                </div>
                                <script language = "javascript">
                                    function Kode2() {
                                        var ID_Disease = document.forms[0].Disease.value;
                                        document.forms[0].ID_Disease.value = ID_Disease;
                                    }
                                </script>
                            </div>

                            <div name="Treatment_Reporting" >
                                <table style="width:65%">
                                    <h5 class="box-title m-t-30">Treatment at reporting institution :</h5>
                                    <div class="col-lg-10">
                                        <div class="example">
                                            <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Treatment" id="result" value="" />     
                                        </div></div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <?php
                                            $query = $this->db->get('treatment_reporting');

                                            foreach ($query->result() as $row) {
                                                echo "  
                                                 <th>&nbsp;<input type='checkbox' onclick='treatment(this.form)' name='Treatment' class='form-check-input' value='$row->ID_Treatment' >  &nbsp; $row->ID_Treatment  &nbsp; $row->Treatment_Reporting</th></tr> ";
                                            }
                                            ?>
                                        </label>
                                    </div>

                                    <script language = "javascript">
                                        function treatment(data) {
                                            var checkboxteatment = "";
                                            for (i = 0; i < data.Treatment.length; i++) {
                                                if (data.Treatment[i].checked) {
                                                    checkboxteatment += data.Treatment[i].value + " ";
                                                }
                                                document.getElementById("result").value = checkboxteatment;
                                            }
                                        }
                                        function dismet(data) {
                                            var checkboxdismet = "";
                                            for (i = 0; i < data.Distant_Metastases.length; i++) {
                                                if (data.Distant_Metastases[i].checked) {
                                                    checkboxdismet += data.Distant_Metastases[i].value + " ";
                                                }
                                                document.getElementById("resultdismet").value = checkboxdismet;
                                            }
                                        }
                                    </script>
                                </table> 
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Diagnosis Klinis :</h5>
                                        <input type="text" name="Diagnosis_Klinis"  required="true"  class="form-control " placeholder="Diagnosis Klinis">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="example"> 
                                        <div class="col-md-6">
                                            <div class="example row">
                                                <h5 class="box-title m-t-30">Diagnosis Date :</h5>

                                                <input class="form-control" name="Diagnosis_Date" required="true"  type="date" value="" id="example-password-input">
                                            </div></div>
                                        <div class="col-md-6">
                                            <h5 class="box-title m-t-30">Date Of Therapy :</h5>

                                            <input class="form-control" name="Date_Therapy" required="true"  type="date" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="white-box">
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Behaviour :</h5>
                                        <select  name="Behaviour" onchange="Kode3()"  class="custom-select col-12" >
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('behaviour');
                                            foreach ($query->result() as $row) {
                                                echo "<option value='$row->ID_Behaviour'>$row->ID_Behaviour &nbsp;$row->Behaviour</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" class="form-control input-daterange-timepicker" readonly="" required="true"  name="ID_Behaviour" value="" />
                                    </div>
                                </div>
                                <script language = "javascript">
                                    function Kode3() {
                                        var ID_Behaviour = document.forms[0].Behaviour.value;
                                        document.forms[0].ID_Behaviour.value = ID_Behaviour;
                                    }
                                </script>

                            </div>


                            <div name="Distant_Metastases" >
                                <table style="width:55%">
                                    <h5 class="box-title m-t-30">Distant Metastases :</h5>
                                    <div class="col-lg-10">
                                        <div class="example">
                                            <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Distant_Metastases" id="resultdismet" value="" />                            
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <?php
                                            $query = $this->db->get('distant_metastases');
                                            //  $total = 0;
                                            foreach ($query->result() as $row1) {
                                                echo "  
                                                 <th>&nbsp;<input type='checkbox' onclick='dismet(this.form)' name='Distant_Metastases' class='form-check-input' value='$row1->ID_Distant_Metastases' >  &nbsp;  &nbsp; $row1->ID_Distant_Metastases. &nbsp; $row1->Distant_Metastases &nbsp;</th></tr> ";
                                            }
                                            ?>
                                        </label>
                                    </div>
                                </table> 
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-10">
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


                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Grade :</h5>
                                        <select  name="Grade" onchange="Kode4()" required=""  class="custom-select col-12" >
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('grade');
                                            foreach ($query->result() as $row) {
                                                echo "<option value='$row->ID_Grade'>$row->ID_Grade &nbsp;$row->Grade</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
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

                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Stage :</h5>
                                        <select  required="" name="Stage" onchange="Kode5()"  class="custom-select col-12" >
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('stage');
                                            foreach ($query->result() as $row) {
                                                echo "<option value='$row->ID_Stage'>$row->ID_Stage &nbsp;$row->Stage</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
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
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Laterality:</h5>
                                        <select  name="Laterality" onchange="Kode6()" required=""  class="custom-select col-12" >
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('laterality');
                                            foreach ($query->result() as $row) {
                                                echo "<option value='$row->ID_Laterality'>$row->ID_Laterality &nbsp;$row->Laterality</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
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
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">In Situ Hybridization(ISH) :</h5>
                                        <select name="Hybridization" onchange="Kode8()" required="" class="custom-select col-12">
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('hybridization');
                                            foreach ($query->result() as $row) {
                                                echo "<option value='$row->ID_Hybridization'>$row->ID_Hybridization &nbsp;$row->Hybridization</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Hybridization" value="" />
                                    </div>
                                </div>
                                <script language = "javascript">
                                    function Kode8() {
                                        var ID_Hybridization = document.forms[0].Hybridization.value;
                                        document.forms[0].ID_Hybridization.value = ID_Hybridization;
                                    }
                                </script>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Date ISH :</h5>
                                        <div class="col-md-12">
                                            <input name="Date_ISH" class="form-control" type="date" required="true"  value="" id="example-password-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="white-box">
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Jenis Biopsy / type of Biopsy :</h5>
                                        <select  name="Biopsy" onchange="Kode7()"  class="custom-select col-12" >
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('biopsy');
                                            foreach ($query->result() as $row) {
                                                echo "<option value='$row->ID_Biopsy'>$row->ID_Biopsy &nbsp;$row->Biopsy</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
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
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Tumor Size :</h5>
                                        <select name="TumorSize" onchange="Kode9()" required="" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('tumorsize');
                                            foreach ($query->result() as $row) {
                                                echo "<option value='$row->size'>$row->size</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_TumorSize" value="" />
                                    </div>
                                </div>
                                <script language = "javascript">
                                    function Kode9() {
                                        var ID_TumorSize = document.forms[0].TumorSize.value;
                                        document.forms[0].ID_TumorSize.value = ID_TumorSize;
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="example">
                            <h5 class="box-title m-t-30">Immunohistokimia / immunohistochemistry (IHC) :</h5>
                            <div class="col-md-3">
                                <select  id="pilihan1" name="Immunohistokimia1" onchange="function1()"  class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option value="">-- Pilih -- </option>
                                    <?php
                                    $query = $this->db->get('immunohistokimia');
                                    foreach ($query->result() as $row) {
                                        echo "<option value='$row->ID_Immunohistokimia'>$row->Immunohistokimia &nbsp;$row->ID_Immunohistokimia</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3" id="keterangan" style="display:none;">
                                <textarea name='keterangan' value="" placeholder='Input keterangan...' rows='4'></textarea><br>
                            </div>



                            <div class="col-md-2" id="perhitungan1" style="display:none;">
                                <select name='post1' id="pilihan2"  onchange="function2()" class="custom-select col-12">
                                    <option value="" selected="">Pilih
                                    <option value="YES">ER+ and/or PR+
                                    <option value="NO">ER- and/or PR-
                                </select>
                            </div>

                            <div class="col-md-1" id="perhitungan2" style="display:none;" >
                                <select id="pilihan3" name="post2" onchange="function3()" class="custom-select col-12">
                                    <option value="" selected="">Pilih
                                    <option value="YES">HER2 - 
                                    <option value="NO">HER2 +
                                </select>
                            </div>

                            <div class="col-md-1" id="noperhitungan2" style="display:none;">
                                <select style="color: #009999" name="post4" id="nopilihan3" onchange="nofunction3()" class="custom-select col-12">
                                    <option value="" selected="">Pilih
                                    <option value="YES">HER2 +
                                    <option value="NO">HER2 -
                                </select>
                            </div>
                            <div class="col-md-2" id="noperhitungan3" style="display:none;">
                                <select id="nopilihan4" name="post5" onchange="nofunction4()" class="custom-select col-12">
                                    <option value="" selected="">-- Pilih --
                                    <option value="YES">CK5- and EGFR-
                                    <option value="NO">CK5+ and/or EGFR+
                                </select>
                            </div>
                            <div class="col-md-2" id="perhitungan3" style="display:none;"> 
                                <select id="pilihan4" name="post3" onchange="function4()" class="custom-select col-12">
                                    <option value="" selected="">-- Pilih --
                                    <option value="YES"> Ki67 < 20 %
                                    <option value="NO"> Ki67 >= 20 %
                                </select>
                            </div>
                            <div class="col-md-3" id="perhitungan4" style="display:none;"> 
                                <select onchange="hasilpilih()" style="color: #3300cc" class="custom-select col-12">
                                    <option value="">LUMINAL A
                                </select>
                            </div>
                            <div class="col-md-3" id="perhitungan41" style="display:none;"> 
                                <select onchange="hasilpilih()" style="color: #3300cc" class="custom-select col-12">
                                    <option value=""><b>LUMINAL B (HER2 -)</b>
                                </select>
                            </div>
                            <div class="col-md-3" id="perhitungan31" style="display:none;">
                                <select onchange="hasilpilih()" style="color: #009999" class="custom-select col-12">
                                    <option  value="">LUMINAL B (HER2 +)
                                </select>
                            </div>
                            <div class="col-md-3" id="noperhitungan4" style="display:none;">
                                <select style="color: #3300cc" onchange="hasilpilih()" class="custom-select col-12">
                                    <option value="">FiVE NEGATIVE PHENOTYPE
                                </select>
                            </div>
                            <div class="col-md-3" id="noperhitungan41" style="display:none;">
                                <select style="color: #3300cc" onchange="hasilpilih()" class="custom-select col-12">
                                    <option value="">BASAL PHENOTYPE
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function function1() {
                        var x = document.getElementById("pilihan1").value;
                        if (x == "YES")
                        {
                            document.getElementById('perhitungan1').style.display = '';
                            document.getElementById('keterangan').style.display = 'none';
                        } else if (x == "NO") {
                            document.getElementById('keterangan').style.display = '';
                            document.getElementById('perhitungan1').style.display = 'none';
                            document.getElementById('noperhitungan2').style.display = 'none';
                            document.getElementById('perhitungan2').style.display = 'none';
                            document.getElementById('perhitungan31').style.display = 'none';
                            document.getElementById('perhitungan3').style.display = 'none';
                            document.getElementById('noperhitungan3').style.display = 'none';// 143
                            document.getElementById('perhitungan41').style.display = 'none';
                            document.getElementById('perhitungan4').style.display = 'none';
                            document.getElementById('noperhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan4').style.display = 'none';
                        }
                    }
                    function function2() {
                        var x = document.getElementById("pilihan2").value;
                        if (x == "YES")
                        {
                            document.getElementById('perhitungan2').style.display = '';
                            document.getElementById('noperhitungan2').style.display = 'none';
                            document.getElementById('perhitungan31').style.display = 'none';
                            document.getElementById('perhitungan3').style.display = 'none';
                            document.getElementById('noperhitungan3').style.display = 'none';// 143
                            document.getElementById('perhitungan41').style.display = 'none';
                            document.getElementById('perhitungan4').style.display = 'none';
                            document.getElementById('noperhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan4').style.display = 'none';
                        } else if (x == "NO") {
                            document.getElementById('noperhitungan2').style.display = '';
                            document.getElementById('perhitungan2').style.display = 'none';
                            document.getElementById('perhitungan2').style.display = 'none';
                            document.getElementById('perhitungan31').style.display = 'none';
                            document.getElementById('perhitungan3').style.display = 'none';
                            document.getElementById('noperhitungan3').style.display = 'none';// 143
                            document.getElementById('perhitungan41').style.display = 'none';
                            document.getElementById('perhitungan4').style.display = 'none';
                            document.getElementById('noperhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan4').style.display = 'none';
                        }
                    }

                    function function3() {
                        var x = document.getElementById("pilihan3").value;
                        if (x == "YES")
                        {
                            document.getElementById('perhitungan3').style.display = '';
                            document.getElementById('perhitungan31').style.display = 'none';
                            document.getElementById('noperhitungan3').style.display = 'none';
                            document.getElementById('perhitungan41').style.display = 'none';
                            document.getElementById('perhitungan4').style.display = 'none';
                            document.getElementById('noperhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan4').style.display = 'none';
                        } else if (x == "NO") {
                            document.getElementById('perhitungan31').style.display = '';
                            document.getElementById('perhitungan3').style.display = 'none';
                            document.getElementById('noperhitungan3').style.display = 'none';// 143
                            document.getElementById('perhitungan41').style.display = 'none';
                            document.getElementById('perhitungan4').style.display = 'none';
                            document.getElementById('noperhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan4').style.display = 'none';
                        }
                    }
                    function nofunction3() {
                        var x = document.getElementById("nopilihan3").value;
                        if (x == "YES")
                        {
                            document.getElementById('noperhitungan3').style.display = 'none';
                            document.getElementById('perhitungan41').style.display = 'none';
                            document.getElementById('perhitungan4').style.display = 'none';
                            document.getElementById('noperhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan4').style.display = 'none';
                        } else if (x == "NO") {
                            document.getElementById('noperhitungan3').style.display = '';
                            document.getElementById('perhitungan41').style.display = 'none';
                            document.getElementById('perhitungan4').style.display = 'none';
                            document.getElementById('noperhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan4').style.display = 'none';
                        }
                    }

                    function function4() {
                        var x = document.getElementById("pilihan4").value;
                        if (x == "YES")
                        {
                            document.getElementById('perhitungan4').style.display = '';
                            document.getElementById('perhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan4').style.display = 'none';
                        } else if (x == "NO") {
                            document.getElementById('perhitungan41').style.display = '';
                            document.getElementById('perhitungan4').style.display = 'none';
                            document.getElementById('noperhitungan41').style.display = 'none';
                            document.getElementById('noperhitungan4').style.display = 'none';

                        }
                    }
                    function nofunction4() {
                        var x = document.getElementById("nopilihan4").value;
                        if (x == "YES")
                        {
                            document.getElementById('noperhitungan4').style.display = '';
                            document.getElementById('noperhitungan41').style.display = 'none';

                        } else if (x == "NO") {
                            document.getElementById('noperhitungan41').style.display = '';
                            document.getElementById('noperhitungan4').style.display = 'none';
                        }
                    }

                </script>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="example">
                            <h5 class="box-title m-t-30">Date IHC :</h5>
                            <div class="col-md-6">
                                <input name="Date_IHC" required="" class="form-control" type="date" value="" id="example-password-input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11">
                        <div class="example">
                            <h5 class="box-title m-t-30">Pemeriksaan Molekular</h5>
                            <input type="text" name="jenis_molekul"  required="true"  class="form-control nama" placeholder="Pemeriksaan Molekular">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-11">
                        <div class="example">
                            <h5 class="box-title m-t-30">Source or Follow up :</h5>


                            <table id="datatabel" class="table editable-table table-bordered table-striped m-b-0 editableTable">
                                <thead>
                                    <tr>
                                        <th>Tgl. Periksa</th>
                                        <th>Kode Rumah Sakit</th>
                                        <th>Rumah Sakit</th>
                                        <th>Unit ID</th>
                                        <th>Unit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <div class="form-inline padding-bottom-15">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <button type="button" onclick="myCreateFunction()" class="btn btn-outline btn-primary btn-sm"><i class="icon wb-plus glyphicon glyphicon-plus-sign" aria-hidden="true"></i>&nbspTambahkan Tabel
                                                </button><br>
                                            </div>
                                        </div>
                                        <div class="form-inline padding-bottom-15 form-group">

                                        </div>
                                        <tbody>
                                            <tr>
                                                <td><input class='form-control' required='true'  name='Tgl_Periksa[]' type='date' size='7'/></td>
                                                <td><input type="text" id="Kode_Rumah_Sakit"  name="Kode_Rumah_Sakit[]" readonly="" size='9' required="true"  class="autocomplete form-control" ></td> 
                                                <td><input type="search" id="Kode_Rumah_Sakit" placeholder="Nama RS" name="nama_rumahsakit[]" class="rumahsakit form-control" size='9' ></td>
                                                <td><select name="unit_id" required="" class="form-control" id="unit_id">
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="Unit[]" required="" class="custom-select " id="unit">
                                                        <option value="">-- Pilih -- </option>
                                                        <?php
                                                        $query = $this->db->query('SELECT * from unit order by unit_id asc ');
                                                        foreach ($query->result() as $rowunit) {
                                                            echo "<option value='$rowunit->unit'>$rowunit->unit_id &nbsp;$rowunit->unit</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        <script>
                            function myCreateFunction() {
                                var table = document.getElementById("datatabel");
                                var row = table.insertRow(2);
                                var cell1 = row.insertCell(0);
                                var cell2 = row.insertCell(1);
                                var cell3 = row.insertCell(2);
                                var cell4 = row.insertCell(3);
                                var cell5 = row.insertCell(4);
                                var cell6 = row.insertCell(5);
                                cell1.innerHTML = "<input class='form-control' required='true'  name='Tgl_Periksa[]' type='date' size='7'/>";
                                cell2.innerHTML = "<input type='search' id='Kode_Rumah_Sakit' placeholder='Nama RS' name='nama_rumahsakit[]' class='rumahsakit form-control' size='9' >";
                                cell3.innerHTML = "";
                                cell4.innerHTML = "";
                                cell5.innerHTML = "";
                                cell6.innerHTML = "";
                            }</script>


                        <div class="row">
                            <div class="col-lg-11">
                                <div class="example">
                                    <h5 class="box-title m-t-30"> Kesimpulan :</h5>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="kesimpulan" required="" placeholder="Masukan kesimpulan . . ." rows="5"></textarea>
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
                                                <input class="form-control input-daterange-datepicker" type="date" required="" readonly="" name="Admission_Date" value="<?= Date("Y-m-d") ?>" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Registrar</h5>
                                                <input type="text" class="form-control input-daterange-timepicker" placeholder="Registrar" readonly="" required="" name="Registrar" value=" <?= $this->session->userdata('nama') ?> " />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Verifier</h5>
                                                <input class="form-control input-limit-datepicker" readonly="" type="text" placeholder="Belum Diverifikasi" name="Verifeir" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Date last contact</h5>
                                                <input class="form-control input-daterange-datepicker" required="" type="date" name="Date_Last_Contact" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Date of abstract</h5>
                                                <input type="date" required="" class="form-control input-daterange-timepicker" name="Date_Of_Abstract" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Date of Verification</h5>
                                                <input class="form-control input-limit-datepicker" readonly="" placeholder="Belum Diverifikasi" type="text" name="Date_Of_Verification" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Status</h5>
                                                <select  name="status" onchange="Kode1()" required="" class="custom-select col-12" >
                                                    <option value="">Pilih Status</option>
                                                    <?php
                                                    $query = $this->db->get('status');
                                                    foreach ($query->result() as $row) {
                                                        echo "<option value='$row->ID_Status'>$row->ID_Status &nbsp;$row->Status</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Kode</h5>
                                                <input type="text" readonly="" required="" class="form-control input-daterange-timepicker" name="ID_Status" value="" />
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
                                <div class="form-group">
                                    <a href="#popup">
                                        <br>
                                        <div class="col-md-5 pull-right">
                                            <button class="btn btn-skype btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Submit</button>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>

            </div>


