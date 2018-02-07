<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 white-box" >
            <center> <h3><strong>KEMENTRIAN KESEHATAN REPUBLIK INDONESIA</strong>
                </h3><p class="text-muted m-b-30 font-13"> Detail Data Pasien : <?= $row->First_Name ?>  <?= $row->Middle_Name ?> / NIK <?= $row->NIK ?> </p></center>
            <form class="row" action="" method="POST" >
                <div class="col-sm-6">

                    <div class="white-box">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">NIK</label>
                            <div class="col-8">
                                <input class="form-control" name="NIK" type="text" readonly=""  value="<?= $row->NIK ?>" placeholder="16 Digit NIK" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-4 col-form-label">MRN</label>
                            <div class="col-8">
                                <input class="form-control" name="MRN" type="search" readonly=""  value="<?= $row->MRN ?>" placeholder="Tujuh digit kode RS | NO MR" id="example-search-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">First Name </label>
                            <div class="col-8">
                                <input class="form-control" readonly="" name="First_Name" type="text" value="<?= $row->First_Name ?>" placeholder="Nama Awal" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Middle Name</label>
                            <div class="col-8">
                                <input class="form-control" name="Middle_Name" type="text"  readonly="" value="<?= $row->Middle_Name ?>" placeholder="Nama Tengah" id="example-url-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-4 col-form-label">Family Name</label>
                            <div class="col-8">
                                <input class="form-control" name="Family_Name" readonly="" value="<?= $row->Family_Name ?>" placeholder="Nama Keluarga" id="example-tel-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-4 col-form-label">Place Of Birth</label>
                            <div class="col-8">
                                <input class="form-control" type="text" name="Place_Of_Birth" readonly="" value="<?= $row->Place_Of_Birth ?>" id="example-password-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-4 col-form-label">Date Of Birth</label>
                            <div class="col-8">
                                <input class="form-control" type="date" name="Date_Of_Birth" readonly="" value="<?= $row->Date_Of_Birth ?>" id="example-password-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-4 col-form-label">Alamat Tetap</label>
                            <div class="col-8">
                                <input class="form-control" name="ID_Alamat_Tetap" readonly="" value="<?= $row->Alamat_Tetap ?>" type="text" id="example-number-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-4 col-form-label">Provinsi</label>
                            <div class="col-8">
                                <?php
                                $query = $this->db->get('wilayah_provinsi');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id == $row->ID_Provinsi) {
                                        echo "<input class='form-control' name='ID_Alamat_Tetap' readonly='' value='$row1->nama' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>   
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-number-input" class="col-4 col-form-label">Kabupaten</label>
                            <div class="col-8">
                                <?php
                                $query = $this->db->get('wilayah_kabupaten');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id == $row->id_kabupaten) {
                                        echo "<input class='form-control' name='ID_Alamat_Tetap' readonly='' value='$row1->nama' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>   
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-number-input" class="col-4 col-form-label">Kecamatan</label>
                            <div class="col-8">
                                <?php
                                $query = $this->db->get('wilayah_kecamatan');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id == $row->id_kecamatan) {
                                        echo "<input class='form-control' name='ID_Alamat_Tetap' readonly='' value='$row1->nama' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-4 col-form-label">Kode Pos</label>
                            <div class="col-8">
                                <input class="form-control" name="NIK" type="text" readonly=""  value="<?= $row->kode_pos ?>" placeholder="16 Digit NIK" id="example-text-input">
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="white-box">



                        <div class="form-group row">
                            <label for="example-number-input" class="col-5 col-form-label">Alamat Sementara</label>
                            <div class="col-7">
                                <input class="form-control" name="ID_Alamat_Tetap" readonly="" value="<?= $row->Alamat_Sementara ?>" type="text" id="example-number-input">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="example-number-input" class="col-5 col-form-label">Provinsi</label>
                            <div class="col-7">
                                <?php
                                $query = $this->db->get('wilayah_provinsi');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id == $row->id_provinsi_1) {
                                        echo "<input class='form-control' name='ID_Alamat_Tetap' readonly='' value='$row1->nama' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>   
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-number-input" class="col-5 col-form-label">Kabupaten</label>
                            <div class="col-7">
                                <?php
                                $query = $this->db->get('wilayah_kabupaten');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id == $row->id_kabupaten_1) {
                                        echo "<input class='form-control' name='ID_Alamat_Tetap' readonly='' value='$row1->nama' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>   
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-number-input" class="col-5 col-form-label">Kecamatan</label>
                            <div class="col-7">
                                <?php
                                $query = $this->db->get('wilayah_kecamatan');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id == $row->id_kecamatan_1) {
                                        echo "<input class='form-control' name='ID_Alamat_Tetap' readonly='' value='$row1->nama' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>   
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="example-text-input" class="col-5 col-form-label">Kode Pos</label>
                            <div class="col-7">
                                <input class="form-control" name="NIK" type="text" readonly=""  value="<?= $row->kode_pos1 ?>" placeholder="16 Digit NIK" id="example-text-input">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="example-number-input" class="col-5 col-form-label">SEX</label>
                            <div class="col-7">
                                <?php
                                $query = $this->db->get('sex');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id_sex == $row->ID_Sex) {
                                        echo "<input class='form-control'  readonly='' value='$row1->sex' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-5 col-form-label">Race</label>
                            <div class="col-7"> 
                                <?php
                                $query = $this->db->get('race');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id_race == $row->ID_Race) {

                                        echo "<input class='form-control'  readonly='' value='$row1->race' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-5 col-form-label">Religion</label>
                            <div class="col-7"> 
                                <?php
                                $query = $this->db->get('religion');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id_religion == $row->ID_Religion) {

                                        echo "<input class='form-control'  readonly='' value='$row1->religion' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-5 col-form-label">Status Pernikahan</label>
                            <div class="col-7"> 
                                <?php
                                $query = $this->db->get('status_hubungan');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id_hubungan == $row->id_status_hubungan) {
                                        echo "<input class='form-control'  readonly='' value='$row1->status_hubungan' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-number-input" class="col-5 col-form-label">Occupation</label>
                            <div class="col-7"> 
                                <?php
                                $query = $this->db->get('occupation');
                                foreach ($query->result() as $row1) {
                                    if ($row1->id_occupation == $row->ID_Occupation) {
                                        echo "<input class='form-control'  readonly='' value='$row1->Occupation' type='text' id='example-number-input'>          ";
                                    } else {
                                        echo "";
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-5 col-form-label">No. Telp/Hp</label>
                            <div class="col-7">
                                <input class="form-control" name="NIK" type="text" readonly=""  value="<?= $row->No_Telpon ?>" placeholder="16 Digit NIK" id="example-text-input">
                            </div>
                        </div>



                    </div>
                </div>
        </div>
    </div></div>

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12 white-box" >
            <div class="white-box">
                <center> <h3><strong>KEMENTRIAN KESEHATAN REPUBLIK INDONESIA</strong>
                    </h3><p class="text-muted m-b-30 font-13"> DATA TUMOR : <?= $row->First_Name ?>  <?= $row->Middle_Name ?> / NIK : <?= $row->NIK ?> </p></center>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Topography :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Topography . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Morphology :</h5>

                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Morphology . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Most Valid Basic of Diagnosis Cancer :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Diagnosis . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Clinical ext. of disease before treatment :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Diagnosis . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <table style="width:35%">

                                <label class="col-md-12"> Treatment at reporting institution :</label>


                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">

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
                                            </label>
                                        </div>
                                    </th>
                                </tr>


                            </table>
                            <div class="row">
                                <div class="col-lg-11">
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
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Diagnosis Date :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->Diagnosis_Date . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Behaviour :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Behaviour . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <br>


                            <table style="width:35%">

                                <label class="col-md-12">Distant Metastases :</label>


                                <tr>
                                    <th><div class="form-check">
                                            <label class="form-check-label">

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
                                            </label>
                                        </div>
                                    </th>
                                </tr>
                            </table>


                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">No.of metastates :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->No_Of_Metastases . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "null";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Grade :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Grade . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "null";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Stage :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Stage . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "null";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Laterality :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Laterality . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "null";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Immunohistokimia / immunohistochemistry :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Immunohistokimia . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "null";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Date IHC :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->Date_IHC . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "null";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">In Situ Hybridization :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Hybridization . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "null";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Date :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->Date . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "null";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Jenis Biopsy / type of Biopsy :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Biopsy . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "null";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Sublocation of Breast Tumor  :</h5>
                                        <?php
                                        $query = $this->db->get('data_tumor_pasien');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo ' <input type="search" value=' . $row1->ID_Sublocation . ' readonly=""   class="Morphology form-control nama" placeholder="Nama Morphology">';
                                            } else {
                                                echo "";
                                            }
                                        }
                                        ?>
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
                                                    <th>Tanggal Periksa</th>  
                                                    <th>Kode Rumah Sakit</th>
                                                    <th>Nama Rumah Sakit</th>
                                                    <th>Unit ID</th>
                                                    <th>Unit</th>
                                                    <th>No.PA/LAB</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = $this->db->get('sources_follow_up');
                                                foreach ($query->result() as $row1) {
                                                    if ($row1->NIK == $row->NIK) {
                                                        echo "<tr><th>$row1->Tgl_Periksa</th>";
                                                        echo "<th>$row1->Kode_Rumah_Sakit</th>";
                                                        echo "<th>$row1->nama_rumahsakit</th>";
                                                        echo "<th>$row1->Unit_ID</th>";
                                                        echo "<th>$row1->Unit</th>";
                                                        echo "<th>$row1->Unit</th></tr>";
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
                                            <textarea readonly="" class="form-control" rows="5"><?php
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
                        </div></div></div>


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
                                                echo '<input readonly="" class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Admission_Date . '" />
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
                                                echo '<input readonly="" class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Registrar . '" />
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
                                                echo '<input readonly="" class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Verifeir . '" />
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
                                                echo '<input readonly="" class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Date_Last_Contact . '" />
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
                                                echo '<input readonly="" class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Date_Of_Abstract . '" />
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
                                                echo '<input readonly="" class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->Verifeir . '" />
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
                                        <?php
                                        $query = $this->db->get('registrar');
                                        foreach ($query->result() as $row1) {
                                            if ($row1->NIK == $row->NIK) {
                                                echo '<input readonly="" class="form-control input-daterange-datepicker" type="text" name="daterange" value="' . $row1->id_status . '" />
';
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

                <div class="form-group">
                    <a href="#popup">
                        <div class="col-md-3 pull-right">
                            <?php echo "<a class='btn btn-facebook glyphicon glyphicon-print btn-lg btn-block text-uppercase waves-effect waves-light' 
					href='" . base_url("Laporan/cetak/$row->NIK") . " ' >	
                    Print</a>"; ?>
                        </div>

                    </a>
                    <a>
                        <div class="col-md-3 pull-right">
                            <?php echo "<a class='btn btn-success glyphicon  glyphicon-edit btn-lg btn-block text-uppercase waves-effect waves-light' 
					href='" . site_url("Pasien/ubah/$row->NIK") . " ' >	
                    Edit</a>"; ?>
                        </div>
                    </a>
                </div>

                <br>
            </div>
        </div>
    </div>  
</div>
