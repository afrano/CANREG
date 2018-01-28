<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <center> <h3 class="box-title m-b-0">Formulir Pasien</h3>
                <p class="text-muted m-b-30 font-13"> Kementrian Kesehatan Republik Indonesia</p></center>
            <div id="exampleValidator" class="wizard">
                <ul class="wizard-steps" role="tablist">
                    <li class="active" role="tab">
                        <h4><span><i class="ti-user"></i></span>Data Pasien</h4>
                    </li>
                    <li role="tab">
                        <h4><span><i class="ti-credit-card"></i></span>Data Tumor</h4>
                    </li>
                    <li role="tab">
                        <h4><span><i class="ti-check"></i></span>Sources or Follow up</h4>
                    </li>
                </ul>
                <form id="validation" action="<?//= site_url('Pasien/tambah_pasien') ?>" class="form-horizontal">
                    <div class="wizard-content">
                      
                                <div class="wizard-pane active" role="tabpanel">
                                    <center><h3 class="box-title m-b-0">Data Pasien</h3></center>
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
                                    </div>



                                </div>
                                <div class="wizard-pane" role="tabpanel">
                                    <div class="form-group">
                                        <h3 class="box-title m-b-0">Data Tumor</h3>
                                        <p class="text-muted m-b-30 font-13">  Kementrian Kesehatan Republik Indonesia </p>
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
                                                    <select name="ID_Diagnosis" class="custom-select col-12" id="inlineFormCustomSelect">
                                                        <option selected>0. Death Certificate Only</option>
                                                        <option value="1">1. Clinical Only</option>
                                                        <option value="2">2. Clin. Invest./Ult Soun</option>
                                                        <option value="3">3. Surgery/Autopsy</option>
                                                        <option value="4">4. Laboratory Test</option>
                                                        <option value="5">5. Cytology</option>
                                                        <option value="6">6. Histology of metastase</option>
                                                        <option value="7">7. Histology of primary</option>
                                                        <option value="8">8. Autopsy/Histology</option>
                                                        <option value="9">9. Unknown</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-1">
                                                <div class="example">
                                                    <h5 class="box-title m-t-30">Kode</h5>
                                                    <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Diagnosis" value="" />
                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-lg-11">
                                                <div class="example">
                                                    <h5 class="box-title m-t-30">Clinical ext. of disease before treatment :</h5>
                                                    <select name="ID_Disease" class="custom-select col-12" id="inlineFormCustomSelect">
                                                        <option selected>1. In situ</option>
                                                        <option value="1">2. Localized</option>
                                                        <option value="2">3. Direct Extension</option>
                                                        <option value="3">4. Regional LN Involvement</option>
                                                        <option value="4">5. Direct extension with regional LN Involvement</option>
                                                        <option value="5">6. Distant metastases</option>
                                                        <option value="6">8. Not applicable</option>
                                                        <option value="7">9. Unknown</option>
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

                                        <table style="width:35%">

                                            <label class="col-md-12"> Treatment at reporting institution :</label>

                                            <div class="col-md-12">
                                                <tr>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="ID_Treatment[]" class="form-check-input" id="checkboxSuccess" value="option1"> No Treatment
                                                            </label>
                                                        </div></th>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="ID_Treatment[]" class="form-check-input" id="checkboxWarning" value="option2"> Targeted Therapy
                                                            </label>
                                                        </div></th>
                                                </tr>
                                                <tr>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="ID_Treatment[]" class="form-check-input" id="checkboxDanger" value="option3"> Surgery
                                                            </label>
                                                        </div></th>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="ID_Treatment[]" class="form-check-input" id="checkboxDanger" value="option4"> Immuno Therapy
                                                            </label>
                                                        </div></th>
                                                </tr>
                                                <tr>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxSuccess" value="option1"> Radiotherapy
                                                            </label>
                                                        </div></th>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxWarning" value="option1"> Hormonal Therapy
                                                            </label>
                                                        </div></th></tr>
                                                <tr>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox"name="ID_Treatment[]"  class="form-check-input" id="checkboxDanger" value="option1"> Chemotherapy
                                                            </label>
                                                        </div></th>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxDanger" value="option1"> Other Therapy
                                                            </label>
                                                        </div></th></tr>
                                                <tr>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxSuccess" value="option1"> Chemoradiation
                                                            </label>
                                                        </div></th>
                                                    <th><div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" name="ID_Treatment[]"  class="form-check-input" id="checkboxWarning" value="option1"> Unknown
                                                            </label>
                                                        </div></th>
                                                </tr>
                                        </table>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="example">
                                                    <h5 class="box-title m-t-30">Diagnosis Klinis :</h5>
                                                    <input type="text" name="Diagnosis_Klinis"   class="Morphology form-control nama" placeholder="Diagnosis Klinis">
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="form-group ">
                                            <label class="col-md-12" >Diagnosis Date :</label>
                                            <div class="col-md-12">
                                                <input class="form-control" name="Diagnosis_Date" type="date" value="" id="example-password-input">
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
                                        </div><br>

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
                                                                <input type="checkbox" name="ID_Distant_Metastases[]" class="form-check-input" id="checkboxWarning" value="option1"> Unknown
                                                            </label>
                                                        </div></th></tr>
                                            </div>

                                    </div>
                                </div>
                                </table><br>

                                <div class="form-group">
                                    <label class="col-md-12">No.of metastates :</label>
                                    <div class="col-md-12">
                                        <select name="No_Of_Metastases" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected>1. In situ</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
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

                                <div class="form-group">
                                    <label class="col-md-12">Immunohistokimia / immunohistochemistry :</label>
                                    <div class="col-md-12">
                                        <select name="ID_Immunohistokimia" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected>1. In situ</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-md-12" >Date IHC :</label>
                                    <div class="col-md-12">
                                        <input name="Date_IHC" class="form-control" type="date" value="" id="example-password-input">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-12" >In Situ Hybridization :</label>
                                    <div class="col-md-12">
                                        <select name="ID_Hybridization" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected>1. In situ</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <label class="col-md-12">Date :</label>
                                    <div class="col-md-12">
                                        <input name="Date" class="form-control" type="date" value="" id="example-password-input">
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
                                    <div class="col-lg-12">
                                        <div class="white-box">
                                            <h3 class="box-title">Source or Follow up :</h3>
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
                                                        <td><input type="date"></input></td>
                                                        <td>Kode Rumah Sakit</td>
                                                        <td>e.g RSUP Dr. Sarjidto</td>
                                                        <td>Unit ID</td>
                                                        <td>Unit</td>
                                                        <td>No.PA/Lab</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="date"></input></td>
                                                        <td>Kode Rumah Sakit</td>
                                                        <td>e.g RSUP Dr. Sarjidto</td>
                                                        <td>Unit ID</td>
                                                        <td>Unit</td>
                                                        <td>No.PA/Lab</td>
                                                    </tr>

                                                    <tr>
                                                        <td><input type="date"></input></td>
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
                                <div class="form-group">
                                    <label class="col-md-12"> Kesimpulan :</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="wizard-pane" role="tabpanel">
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Admission date</h5>
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Registrar</h5>
                                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Verifier</h5>
                                            <input class="form-control input-limit-datepicker" type="text" name="daterange" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Date last contact</h5>
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Date of abstract</h5>
                                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Date of Verification</h5>
                                            <input class="form-control input-limit-datepicker" type="text" name="daterange" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Status</h5>
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected>1. Hidup</option>
                                                <option value="1">2. Meninggal</option>
                                                <option value="2">9. Unknown</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="example">
                                            <h5 class="box-title m-t-30">Kode</h5>
                                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
</div>
</div>
</div>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>

<!-- Wizard CSS -->
<link href="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
<!-- Form Wizard JavaScript -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
<!-- FormValidation -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css">
<!-- FormValidation plugin and the class supports validating Bootstrap form -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
<!-- Sweet-Alert  -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    (function () {
        $('#exampleValidator').wizard({
            onInit: function () {
                $('#validation').formValidation({
                    framework: 'bootstrap',
                    fields: {
                        username: {
                            validators: {
                                notEmpty: {
                                    message: 'The username is required'
                                },
                                stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: 'The username must be more than 6 and less than 30 characters long'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9_\.]+$/,
                                    message: 'The username can only consist of alphabetical, number, dot and underscore'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'The email address is required'
                                },
                                emailAddress: {
                                    message: 'The input is not a valid email address'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'The password is required'
                                },
                                different: {
                                    field: 'username',
                                    message: 'The password cannot be the same as username'
                                }
                            }
                        }
                    }
                });
            },
            validator: function () {
                var fv = $('#validation').data('formValidation');

                var $this = $(this);

                // Validate the container
                fv.validateContainer($this);

                var isValidStep = fv.isValidContainer($this);
                if (isValidStep === false || isValidStep === null) {
                    return false;
                }

                return true;
            },
            onFinish: function () {
                $('#validation').submit();
                swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        });

        $('#accordion').wizard({
            step: '[data-toggle="collapse"]',
            buttonsAppendTo: '.panel-collapse',
            templates: {
                buttons: function () {
                    var options = this.options;
                    return '<div class="panel-footer"><ul class="pager">' +
                            '<li class="previous">' +
                            '<a href="#' + this.id + '" data-wizard="back" role="button">' + options.buttonLabels.back + '</a>' +
                            '</li>' +
                            '<li class="next">' +
                            '<a href="#' + this.id + '" data-wizard="next" role="button">' + options.buttonLabels.next + '</a>' +
                            '<a href="#' + this.id + '" data-wizard="finish" role="button">' + options.buttonLabels.finish + '</a>' +
                            '</li>' +
                            '</ul></div>';
                }
            },
            onBeforeShow: function (step) {
                step.$pane.collapse('show');
            },
            onBeforeHide: function (step) {
                step.$pane.collapse('hide');
            },
            onFinish: function () {
                swal("Message Finish!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        });
    })();
</script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>