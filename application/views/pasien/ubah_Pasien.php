<div class="container-fluid">
    <div class="row">
        <form action="<?php echo base_url(); ?>Pasien/ubah" method="POST" >
            <div class="col-sm-12 white-box" > 
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
                                    <input class="form-control" name="NIK" type="text" value="<?= $row->NIK ?>" placeholder="16 Digit NIK" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-4 col-form-label">MRN</label>
                                <div class="col-8">
                                    <input class="form-control" name="MRN" type="search" value="mrn" placeholder="Tujuh digit kode RS | NO MR" id="example-search-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">First Name </label>
                                <div class="col-8">
                                    <input class="form-control" name="First_Name" type="text" value="<?= $row->First_Name ?>" placeholder="Nama Awal" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Middle Name</label>
                                <div class="col-8">
                                    <input class="form-control" name="Middle_Name" type="text"  value="<?= $row->Middle_Name ?>" placeholder="Nama Tengah" id="example-url-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-4 col-form-label">Family Name</label>
                                <div class="col-8">
                                    <input class="form-control" name="Family_Name"  value="<?= $row->Family_Name ?>" placeholder="Nama Keluarga" id="example-tel-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-4 col-form-label">Place Of Birth</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="Place_Of_Birth" value="<?= $row->Place_Of_Birth ?>" id="example-password-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-4 col-form-label">Date Of Birth</label>
                                <div class="col-8">
                                    <input class="form-control" type="date" name="Date_Of_Birth" value="<?= $row->Date_Of_Birth ?>" id="example-password-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-4 col-form-label">Alamat Tetap</label>
                                <div class="col-8">
                                    <input class="form-control" name="Alamat_Tetap" value="<?= $row->Alamat_Tetap ?>" type="text" id="example-number-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-4 col-form-label">Provinsi</label>
                                <div class="col-8">
                                    <select name="ID_Provinsi" required="" class="form-control" id="provinsi1">
                                        <?php
                                        $query = $this->db->get('wilayah_provinsi');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->id == $row->ID_Provinsi) {
                                                echo '<option selected value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            } else {
                                                echo '<option value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            }
                                        }
                                        ?> 
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-4 col-form-label">Kabupaten</label>
                                <div class="col-8">
                                    <select name="id_kabupaten" required="" class="form-control" id="provinsi1">
                                        <?php
                                        $query = $this->db->get('wilayah_kabupaten');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->id == $row->id_kabupaten) {
                                                echo '<option selected value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            } else {
                                                echo '<option value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            }
                                        }
                                        ?> 
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-number-input" class="col-4 col-form-label">Kecamatan</label>
                                <div class="col-8">
                                    <select name="id_kecamatan" required="" class="form-control" id="provinsi1">
                                        <?php
                                        $query = $this->db->get('wilayah_kecamatan');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->id == $row->id_kecamatan) {
                                                echo '<option selected value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            } else {
                                                //        echo '<option value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            }
                                        }
                                        ?> 
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-4 col-form-label">Kode Pos</label>
                                <div class="col-8">
                                    <input class="form-control" name="kode_pos" type="text"  value="<?= $row->kode_pos ?>" placeholder="16 Digit NIK" id="example-text-input">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="white-box">



                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Alamat Sementara</label>
                                <div class="col-7">
                                    <input class="form-control" name="Alamat_Sementara"  value="<?= $row->Alamat_Sementara ?>" type="text" id="example-number-input">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Provinsi</label>
                                <div class="col-7">                             
                                    <select name="id_provinsi_1" required="" class="form-control" id="provinsi1">
                                        <?php
                                        $query = $this->db->get('wilayah_provinsi');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->id == $row->id_provinsi_1) {
                                                echo '<option selected value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            } else {
                                                echo '<option value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            }
                                        }
                                        ?> 
                                    </select>                             
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Kabupaten</label>
                                <div class="col-7">
                                    <select name="id_kabupaten_1" required="" class="form-control" id="provinsi1">
                                        <?php
                                        $query = $this->db->get('wilayah_kabupaten');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->id == $row->id_kabupaten_1) {
                                                echo '<option selected value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            } else {
                                                echo '<option value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            }
                                        }
                                        ?> 
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Kecamatan</label>
                                <div class="col-7">
                                    <select name="id_kecamatan_1" required="" class="form-control" id="provinsi1">
                                        <?php
                                        $query = $this->db->get('wilayah_kecamatan');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->id == $row->id_kecamatan_1) {
                                                echo '<option selected value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            } else {
                                                //        echo '<option value="' . $row1->id . '">' . $row1->nama . '</option>';
                                            }
                                        }
                                        ?> 
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="example-text-input" class="col-5 col-form-label">Kode Pos</label>
                                <div class="col-7">
                                    <input class="form-control" name="kode_pos1" type="text"  value="<?= $row->kode_pos1 ?>" placeholder="16 Digit NIK" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">SEX</label>
                                <div class="col-7">   
                                    <select class="custom-select col-12" required="" name="ID_Sex" id="inlineFormCustomSelect">
                                        <option value="">-- Pilih Jenis Kelamin -- </option>
                                        <?php
                                        $query = $this->db->get('sex');
                                        foreach ($query->result() as $row2) {
                                            if ($row2->id_sex == $row->ID_Sex) {
                                                echo "<option selected value='$row2->id_sex'>$row2->id_sex &nbsp;$row2->sex</option>";
                                            } else {
                                                echo "<option value='$row2->id_sex'>$row2->id_sex &nbsp;$row2->sex</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Race</label>
                                <div class="col-7"> 
                                    <select class="custom-select col-12" required="" name="ID_Race" id="inlineFormCustomSelect">
                                        <option value="">-- Pilih Race -- </option>
                                        <?php
                                        $query = $this->db->get('race');
                                        foreach ($query->result() as $row2) {
                                            if ($row2->id_race == $row->ID_Race) {
                                                echo "<option selected value='$row2->id_race'>$row2->id_race &nbsp;$row2->race</option>";
                                            } else {
                                                echo "<option value='$row2->id_race'>$row2->id_race &nbsp;$row2->race</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Religion</label>
                                <div class="col-7"> 

                                    <select class="custom-select col-12" required="" name="ID_Religion" id="inlineFormCustomSelect">
                                        <option value="">-- Pilih Religion -- </option>
                                        <?php
                                        $query = $this->db->get('religion');
                                        foreach ($query->result() as $row2) {
                                            if ($row2->id_religion == $row->ID_Religion) {
                                                echo "<option selected value='$row2->id_religion'>$row2->id_religion &nbsp;$row2->religion</option>";
                                            } else {
                                                echo "<option value='$row2->id_religion'>$row2->id_religion &nbsp;$row2->religion</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Status Pernikahan</label>
                                <div class="col-7"> 

                                    <select class="custom-select col-12" required="" name="id_status_hubungan" id="inlineFormCustomSelect">
                                        <option value="">-- Pilih Status Hubungan -- </option>
                                        <?php
                                        $query = $this->db->get('status_hubungan');
                                        foreach ($query->result() as $row2) {
                                            if ($row2->id_hubungan == $row->id_status_hubungan) {
                                                echo "<option selected value='$row2->id_hubungan'>$row2->id_hubungan &nbsp;$row2->status_hubungan</option>";
                                            } else {
                                                echo "<option value='$row2->id_hubungan'>$row2->id_hubungan &nbsp;$row2->status_hubungan</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-number-input" class="col-5 col-form-label">Occupation</label>
                                <div class="col-7"> 
                                    <select class="custom-select col-12" required="" name="ID_Occupation" id="inlineFormCustomSelect">
                                        <option value="">-- Pilih Occupation -- </option>
                                        <?php
                                        $query = $this->db->get('occupation');
                                        foreach ($query->result() as $row2) {
                                            if ($row2->id_occupation == $row->ID_Occupation) {
                                                echo "<option selected value='$row2->id_occupation'>$row2->id_occupation &nbsp;$row2->Occupation</option>";
                                            } else {
                                                echo "<option value='$row2->id_occupation'>$row2->id_occupation &nbsp;$row2->Occupation</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-5 col-form-label">No. Telp/Hp</label>
                                <div class="col-7">
                                    <input class="form-control" name="No_Telpon" type="text" value="<?= $row->No_Telpon ?>" placeholder="16 Digit NIK" id="example-text-input">
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
                                <div class="col-lg-9">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Topography :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" id="Topography"  placeholder="Nama Topography" class="Topography form-control" >';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" id="ID_Topography" name="ID_Topography" value="<?php echo $row1->ID_Topography ?>" readonly="" required="true"  class="autocomplete form-control nama" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-9">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Morphology :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search"  class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" id="ID_Morphology" name="ID_Morphology" readonly="" required="true" value="<?php echo $row1->ID_Morphology ?>"   class="autocompleteb form-control " >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-9">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Most Valid Basic of Diagnosis Cancer :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value="" class=" form-control nama" placeholder="Most Valid Basic of Diagnosis Cancer ">';
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Kode</h5>
                                                <input type="text" class="form-control input-daterange-timepicker" required="true"  readonly="" name="ID_Diagnosis" value="<?php
                                                echo $row1->ID_Diagnosis;
                                            }
                                        }
                                        ?>" />
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
                                <div class="col-lg-9">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Clinical ext. of disease before treatment :</h5>
                                        <select  name="Disease" onchange="Kode2()" required="true"  class="custom-select col-12" >
                                            <option value="">-- Pilih -- </option>
                                            <?php
                                            $query = $this->db->get('disease');
                                            foreach ($query->result() as $disease) {
                                                echo "<option value='$disease->ID_Disease'>$disease->ID_Disease &nbsp;$disease->Disease</option>";
                                            }
                                            ?>
                                        </select>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $Clinical) {
                                            if ($Clinical->NIK == $row->NIK) {
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Kode</h5>
                                                <input type="text" class="form-control input-daterange-timepicker" required="true" readonly="" name="ID_Disease" value="<?php echo $Clinical->ID_Diagnosis; ?>" /><?php
                                            }
                                        }
                                        ?>
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
                                            <?php
                                            $query = $this->db->get('treatment_pasien');
                                            foreach ($query->result() as $row1) {
                                                if ($row1->NIK == $row->NIK) {
                                                    echo ' <input type="checkbox" class="form-check-input" checked="checked" id="checkboxDanger" >&nbsp;&nbsp;&nbsp;&nbsp;' . $row1->ID_Treatment . '&nbsp;&nbsp;';
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?> 
                                        </div>
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
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->Diagnosis_Klinis . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="example"> 
                                        <div class="col-md-6">
                                            <div class="example row">
                                                <h5 class="box-title m-t-30">Diagnosis Date :</h5>
                                                <?php
                                                $query = $this->db->get('data_tumor_pasien');
                                                foreach ($query->result() as $row1) {
                                                    if ($row1->NIK == $row->NIK) {
                                                        echo ' <input type="date" value=' . $row1->Diagnosis_Date . ' class="form-control nama" >';
                                                    } else {
                                                        echo "";
                                                    }
                                                }
                                                ?>
                                            </div></div>
                                        <div class="col-md-6">
                                            <h5 class="box-title m-t-30">Date Of Therapy :</h5>

                                            <?php
                                            $query = $this->db->get('data_tumor_pasien');
                                            foreach ($query->result() as $row1) {
                                                if ($row1->NIK == $row->NIK) {
                                                    echo ' <input type="search" value=' . $row1->Date_Therapy . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>
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
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value="" class="Morphology form-control nama" placeholder="Behaviour">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" class="form-control input-daterange-timepicker" readonly="" required="true"  name="ID_Behaviour" value="<?php echo $row1->ID_Behaviour; ?>" />
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
                                            <?php
                                            $query = $this->db->get('distant_metastases_pasien');
                                            foreach ($query->result() as $row1) {
                                                if ($row1->NIK == $row->NIK) {
                                                    echo ' <input type="checkbox" class="form-check-input" checked="checked" id="checkboxDanger" >&nbsp;&nbsp;&nbsp;&nbsp;' . $row1->ID_Distant_Metastases . '&nbsp;&nbsp;';
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </table> 
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">No.of metastates :</h5>
                                        <div class="col-md-12">
                                            <?php
                                            $query = $this->db->get('data_tumor_pasien');
                                            foreach ($query->result() as $row1) {
                                                if ($row1->NIK == $row->NIK) {
                                                    echo ' <input type="search" value=' . $row1->No_Of_Metastases . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Grade :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value="" class=" form-control nama" placeholder="Grade">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Grade" value="<?php echo $row1->ID_Grade; ?>" />
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
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Stage . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
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
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Laterality . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
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
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Hybridization . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
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
                                            <?php
                                            $query = $this->db->get('data_tumor_pasien');
                                            foreach ($query->result() as $row1) {
                                                if ($row1->NIK == $row->NIK) {
                                                    echo ' <input name="Date_ISH" class="form-control" type="date" type="date" value=' . $row1->Date . '   class="form-control nama" >';
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>
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
                                            foreach ($query->result() as $rowbiopsy) {
                                                echo "<option value='$rowbiopsy->ID_Biopsy'>$rowbiopsy->ID_Biopsy &nbsp;$rowbiopsy->Biopsy</option>";
                                            }
                                            ?>
                                        </select>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Kode</h5>
                                                <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_Biopsy" value="<?php echo $row1->ID_Biopsy; ?> "/>" <?php
                                            }
                                        }
                                        ?>
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
                                            foreach ($query->result() as $size) {
                                                echo "<option value='$size->size'>$size->size</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Kode</h5>
                                        <input type="text" class="form-control input-daterange-timepicker" readonly="" name="ID_TumorSize" value="<?php echo $row1->TumorSize; ?>" />
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
                            <h5 class="box-title m-t-30 ">Immunohistokimia / immunohistochemistry (IHC) :</h5>
                            <div class="col-md-12">
                                <?php
                                $query = $this->db->get('data_tumor_pasien');
                                foreach ($query->result() as $row1) {
                                    if ($row1->NIK == $row->NIK) {
                                        echo ' <label class=" form-control nama" > ' . $row1->Immunohistokimia . ' </label>';
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-md-3">
                                <select  id="pilihan1" name="Immunohistokimia1" onchange="function1()"  class="custom-select col-12" id="inlineFormCustomSelect">
                                    <option value="">-- Pilih -- </option>
                                    <?php
                                    $query = $this->db->get('immunohistokimia');
                                    foreach ($query->result() as $rowimmuno) {
                                        echo "<option value='$rowimmuno->ID_Immunohistokimia'>$rowimmuno->Immunohistokimia &nbsp;$rowimmuno->ID_Immunohistokimia</option>";
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
                                <?php
                                $query = $this->db->get('data_tumor_pasien');
                                foreach ($query->result() as $row1) {
                                    if ($row1->NIK == $row->NIK) {
                                        echo ' <input name="Date_IHC"  type="date" value=' . $row1->Date_IHC . ' class=" form-control nama"  >';
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11">
                        <div class="example">
                            <h5 class="box-title m-t-30">Jenis Molekul</h5>
                            <?php
                            $query = $this->db->get('data_tumor_pasien');
                            foreach ($query->result() as $row1) {
                                if ($row1->NIK == $row->NIK) {
                                    echo ' <input type="text" name="jenis_molekul"  required="true"  class="form-control nama" placeholder="Jenis Molekul" value="' . $row1->jenis_molekul . '">';
                                } else {
                                    echo "";
                                }
                            }
                            ?>          </div>
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
                                        </div>
                                        <div class="form-inline padding-bottom-15 form-group">

                                        </div>
                                        <tbody>
                                            <?php
                                            $query = $this->db->get('sources_follow_up');
                                            foreach ($query->result() as $row1) {
                                                if ($row1->NIK == $row->NIK) {
                                                    echo "<tr><th><input class='form-control' size='9' type='date' value='" . $row1->Tgl_Periksa . "'></th>";
                                                    echo "<th><input class='form-control' size='9' type='text' value='" . $row1->Kode_Rumah_Sakit . "'></th>";
                                                    echo "<th><input class='form-control' size='9' type='text' value='" . $row1->nama_rumahsakit . "'></th>";
                                                    echo "<th><input class='form-control' size='9' type='text' value='" . $row1->Unit_ID . "'></th>";
                                                    echo "<th><input class='form-control' size='9' type='text' value='" . $row1->Unit . "'></th>";
                                                    echo "<th><input class='form-control' size='9' type='text' value='" . $row1->Unit . "'></th></tr>";
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>  
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
                                        <textarea  class="form-control" rows="5"><?php
                                            $query = $this->db->get('data_tumor_pasien');
                                            foreach ($query->result() as $row1) {
                                                if ($row1->NIK == $row->NIK) {
                                                    echo $row1->Kesimpulan;
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>
                                        </textarea>
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
                                                <?php
                                                $query = $this->db->get('registrar');
                                                foreach ($query->result() as $row1) {
                                                    if ($row1->NIK == $row->NIK) {
                                                        echo '<input class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Admission_Date . '" />
';
                                                    } else {
                                                        echo "";
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Registrar</h5>
                                                <?php
                                                $query = $this->db->get('registrar');
                                                foreach ($query->result() as $row1) {
                                                    if ($row1->NIK == $row->NIK) {
                                                        echo '<input class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Registrar . '" />
';
                                                    } else {
                                                        echo "";
                                                    }
                                                }
                                                ?>      
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Verifier</h5>
                                                <?php
                                                $query = $this->db->get('registrar');
                                                foreach ($query->result() as $row1) {
                                                    if ($row1->NIK == $row->NIK) {
                                                        echo '<input class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Verifeir . '" />
';
                                                    } else {
                                                        echo "";
                                                    }
                                                }
                                                ?>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Date last contact</h5>
                                                <?php
                                                $query = $this->db->get('registrar');
                                                foreach ($query->result() as $row1) {
                                                    if ($row1->NIK == $row->NIK) {
                                                        echo '<input class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Date_Last_Contact . '" />
';
                                                    } else {
                                                        echo "";
                                                    }
                                                }
                                                ?>    
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Date of abstract</h5>
                                                <?php
                                                $query = $this->db->get('registrar');
                                                foreach ($query->result() as $row1) {
                                                    if ($row1->NIK == $row->NIK) {
                                                        echo '<input  class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Date_Of_Abstract . '" />
';
                                                    } else {
                                                        echo "";
                                                    }
                                                }
                                                ?>    
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Date of Verification</h5>
                                                <?php
                                                $query = $this->db->get('registrar');
                                                foreach ($query->result() as $row1) {
                                                    if ($row1->NIK == $row->NIK) {
                                                        echo '<input  class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Verifeir . '" />
';
                                                    } else {
                                                        echo "";
                                                    }
                                                }
                                                ?>  
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
                                                    foreach ($query->result() as $status) {
                                                        echo "<option value='$status->ID_Status'>$status->ID_Status &nbsp;$status->Status</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="example">
                                                <h5 class="box-title m-t-30">Kode</h5>
                                                <input type="text"  required="" readonly="" class="form-control input-daterange-timepicker" name="ID_Status" value="<?php echo $row1->id_status; ?>" />
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
                                        <div class="col-md-3 pull-right">
                                            <button class="btn btn-facebook glyphicon  glyphicon-upload btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"> Update</button>
                                        </div></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    </form>
                </div>

            </div>


