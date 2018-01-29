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
                                <select class="custom-select col-12" id="inlineFormCustomSelect" name="ID_Alamat_Sementara">
                                    <option selected>Pilih Provinsi</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option selected>Pilih Kabupaten</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option selected>Pilih Kecamatan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option selected>Kode Pos</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
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
                                <select class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option selected>Pilih Provinsi</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option selected>Pilih Kabupaten</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option selected>Pilih Kecamatan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option selected>Kode Pos</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Sex" id="inlineFormCustomSelect">
                                    <option selected>Sex</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Race" id="inlineFormCustomSelect">
                                    <option selected>Race</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Religion" id="inlineFormCustomSelect">
                                    <option selected>Religion</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Status_Pernikahan" id="inlineFormCustomSelect">
                                    <option selected>Pernikahan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12">
                                <select class="custom-select col-12" name="ID_Occupation" id="inlineFormCustomSelect">
                                    <option selected>Occupation</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
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
                                        <option value="">Pilih </option>
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
                                        <option value="">Pilih </option>
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
                        </div><br>

                        <table style="width:35%">

                            <label class="col-md-12"> Treatment at reporting institution :</label>

                            <div class="col-md-12">
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Treatment[]" class="form-check-input" id="checkboxDanger" value="jj"> Surgery
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Treatment[]" class="form-check-input" id="checkboxDanger" value="kk"> Immuno Therapy
                                            </label>
                                        </div></th>
                                </tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxSuccess" value="sd"> Radiotherapy
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxWarning" value="a"> Hormonal Therapy
                                            </label>
                                        </div></th></tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxDanger" value="Chemotherapy"> Chemotherapy
                                            </label>
                                        </div>
                                    </th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxDanger" value="Other"> Other Therapy
                                            </label>
                                        </div></th></tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxSuccess" value="Chemoradiation"> Chemoradiation
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxWarning" value="Unknown"> Unknown
                                            </label>
                                        </div></th>
                                </tr>
                        </table>
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
                                    <select name="ID_Behaviour" class="custom-select col-12" id="inlineFormCustomSelect">
                                        <option selected>0. Benign</option>
                                        <option value="1">1. Uncertain</option>
                                        <option value="2">2. Insitu</option>
                                        <option value="3">3. Malignant</option>
                                        <option value="4">9. Unknown</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="example">
                                    <h5 class="box-title m-t-30">Kode</h5>
                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="daterange" value="" />
                                </div>
                            </div>
                        </div>
                        <br>

                        <table style="width:35%">
                            <div class="form-group">
                                <label class="col-md-12" >Distant Metastases :</label>

                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxSuccess" value="option1"> None
                                            </label>
                                        </div>
                                    </th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxWarning" value="option1"> Stomach
                                            </label>
                                        </div></th>
                                </tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxDanger" value="option1"> Lymph Node
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxDanger" value="option1"> Bone Marrow
                                            </label>
                                        </div></th></tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxSuccess" value="option1"> Bone
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxWarning" value="option1"> Endocrine
                                            </label>
                                        </div></th></tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxDanger" value="option1"> Liver
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxDanger" value="option1"> Cavum Pleura
                                            </label>
                                        </div></th></tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxSuccess" value="option1"> Lung
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxWarning" value="option1"> Bladder
                                            </label>
                                        </div></th></tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxSuccess" value="option1"> Brain
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxWarning" value="option1"> Colon
                                            </label>
                                        </div></th></tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxDanger" value="option1"> Ovary
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxDanger" value="option1"> Others
                                            </label>
                                        </div></th></tr>
                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxSuccess" value="option1"> Skin
                                            </label>
                                        </div></th>
                                    <th><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxWarning" value="option2"> Unknowna
                                            </label>
                                        </div></th></tr>
                            </div>

                    </div>
                </div>
                </table><br>

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
                            <select name="ID_Grade" class="custom-select col-12" id="inlineFormCustomSelect">
                                <option selected>00. Unknown</option>
                                <option value="1">01. Well diff</option>
                                <option value="2">02. Mod diff</option>
                                <option value="3">03. Poor diff</option>
                                <option value="4">04. Undiff</option>
                                <option value="5">05. Post T-cell</option>
                                <option value="6">06. Post B-cell</option>
                                <option value="7">07. Null cell</option>
                                <option value="8">08. NK cell</option>
                                <option value="9">09. Not applicable</option>
                                <option value="10">10. Dediff</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="example">
                            <h5 class="box-title m-t-30">Kode</h5>
                            <input type="text" class="form-control input-daterange-timepicker" readonly="" name="daterange" value="" />
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-lg-11">
                        <div class="example">
                            <h5 class="box-title m-t-30">Stage :</h5>
                            <select name="ID_Stage" class="custom-select col-12" id="inlineFormCustomSelect">
                                <option selected>001. 1</option>
                                <option value="1">002. 1A</option>
                                <option value="2">003. 1B</option>
                                <option value="3">004. 1C</option>
                                <option value="4">005. 2</option>
                                <option value="5">006. 2A</option>
                                <option value="6">007. 2B</option>
                                <option value="7">008. 2C</option>
                                <option value="8">009. 3</option>
                                <option value="9">010. 3A</option>
                                <option value="10">011. 3B</option>
                                <option value="11">012. 3C</option>
                                <option value="12">013. 4</option>
                                <option value="13">015. 4A</option>
                                <option value="14">016. 4B</option>
                                <option value="15">017. 4C</option>
                                <option value="16">018. 7</option>
                                <option value="17">019. 8</option>
                                <option value="18">020. 9</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="example">
                            <h5 class="box-title m-t-30">Kode</h5>
                            <input type="text" class="form-control input-daterange-timepicker" readonly="" name="daterange" value="" />
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-lg-11">
                        <div class="example">
                            <h5 class="box-title m-t-30">Laterality :</h5>
                            <select name="ID_Laterality" class="custom-select col-12" id="inlineFormCustomSelect">
                                <option selected>1. Right</option>
                                <option value="1">2. Left</option>
                                <option value="2">3. Central</option>
                                <option value="3">4. Bilateral</option>
                                <option value="4">5. Multiple</option>
                                <option value="5">8. Not applicable</option>
                                <option value="6">9. Unknown</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="example">
                            <h5 class="box-title m-t-30">Kode</h5>
                            <input type="text" class="form-control input-daterange-timepicker" readonly="" name="daterange" value="" />
                        </div>
                    </div>
                </div><br>

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
                            <select name="ID_Biopsy" class="custom-select col-12" id="inlineFormCustomSelect">
                                <option selected>1. In situ</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="example">
                            <h5 class="box-title m-t-30">Kode</h5>
                            <input type="text" class="form-control input-daterange-timepicker" readonly="" name="daterange" value="" />
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-11">
                        <div class="example">
                            <h5 class="box-title m-t-30">Sublocation of Breast Tumor :</h5>
                            <select name="ID_Sublocation" class="custom-select col-12" id="inlineFormCustomSelect">
                                <option selected>1. In situ</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="example">
                            <h5 class="box-title m-t-30">Kode</h5>
                            <input type="text" class="form-control input-daterange-timepicker" readonly="" name="daterange" value="" />
                        </div>
                    </div>
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