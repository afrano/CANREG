<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Cache-Control: max-age=0");
header("Expires: 0");
?>
<br>
<center><h2>Data Pasien</h2></center>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>MRN</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Family Name</th>
            <th>Place Of Birth</th>
            <th>Date Of Birth</th>
            <th>Alamat Tetap</th>
            <th>Provinsi/Kabupaten/Kota</th>
            <th>Alamat Sementara</th>
            <th>Provinsi/Kabupaten/Kota</th>
            <th>Kode Sex</th>
            <th>Kode Race</th>
            <th>Kode Religion</th>
            <th>Kode Status Hubungan</th>
            <th>Kode Occupation</th>
            <th>No Telpon</th>

            <th>Topography</th>
            <th>Morphology</th>
            <th>Most Valid Basic of diagnosis cancer</th>
            <th>Clinical ext. of disease before treatment</th>
            <th>Treatment at reporting institution</th>
            <th>Diagnosis Klinis</th>
            <th>Diagnosis Date</th>
            <th>Behaviour</th>
            <th>Distant metastases</th>
            <th>No.of metastases</th>
            <th>Grade</th>
            <th>Stage</th>
            <th>Laterality</th>
            <th>Immunohistokimia</th>
            <th>Date IHC</th>
            <th>In Situ Hybridization</th>
            <th>Date ISH</th>
            <th>Jenis Biopsy</th>
            <th>Sublocation of Breast tumor</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($user as $row) {
            ?>
            <tr><td><?= $i; ?></td>
                <td><?php echo $row->NIK ?></td>
                <td><?php echo $row->MRN ?></td>
                <td><?php echo $row->First_Name ?></td>
                <td><?php echo $row->Middle_Name ?></td>
                <td><?php echo $row->Family_Name ?></td>
                <td><?php echo $row->Place_Of_Birth ?></td>
                <td><?php echo $row->Date_Of_Birth ?></td>
                <td><?php echo $row->Alamat_Tetap ?></td>
                <?php
                $query = $this->db->get('wilayah_provinsi');
                foreach ($query->result() as $row2) {
                    if ($row2->id == $row->ID_Provinsi) {
                        echo '<td>' . $row2->nama . '/';
                    }
                }
                $query = $this->db->get('wilayah_kabupaten');
                foreach ($query->result() as $row2) {
                    if ($row2->id == $row->id_kabupaten) {
                        echo ' ' . $row2->nama . '/';
                    }
                }
                $query = $this->db->get('wilayah_kecamatan');
                foreach ($query->result() as $row2) {
                    if ($row2->id == $row->id_kecamatan) {
                        echo ' ' . $row2->nama . '</td> ';
                    }
                }
                ?>
                <td><?php echo $row->Alamat_Sementara ?></td>
                <?php
                $query = $this->db->get('wilayah_provinsi');
                foreach ($query->result() as $row2) {
                    if ($row2->id == $row->id_provinsi_1) {
                        echo '<td>' . $row2->nama . '/';
                    }
                }
                $query = $this->db->get('wilayah_kabupaten');
                foreach ($query->result() as $row2) {
                    if ($row2->id == $row->id_kabupaten_1) {
                        echo ' ' . $row2->nama . '/';
                    }
                }
                $query = $this->db->get('wilayah_kecamatan');
                foreach ($query->result() as $row2) {
                    if ($row2->id == $row->id_kecamatan_1) {
                        echo ' ' . $row2->nama . '</td> ';
                    }
                }
                ?>
                <td><?php echo $row->ID_Sex ?></td>
                <td><?php echo $row->ID_Race ?></td>
                <td><?php echo $row->ID_Religion ?></td>
                <td><?php echo $row->id_status_hubungan ?></td>
                <td><?php echo $row->ID_Occupation ?></td>
                <td><?php echo $row->No_Telpon ?></td>
                <?php
                $query = $this->db->get('data_tumor_pasien');
                foreach ($query->result() as $row2) {
                    if ($row2->NIK == $row->NIK) {
                        echo '<td>' . $row2->ID_Topography . '</td>'
                        . '<td>' . $row2->ID_Morphology . '</td>'
                        . '<td>' . $row2->ID_Diagnosis . '</td>'
                        . '<td>' . $row2->ID_Disease . '</td>';

                        $query1 = $this->db->get('treatment_pasien');

                        echo '<td>';
                        foreach ($query1->result() as $row3) {
                            if ($row3->NIK == $row->NIK) {
                                echo '' . $row3->ID_Treatment . ',';
                            }
                        }
                        echo '</td>';

                        echo '<td>' . $row2->Diagnosis_Klinis . '</td>'
                        . '<td>' . $row2->Diagnosis_Date . '</td>'
                        . '<td>' . $row2->ID_Behaviour . '</td>';
                        echo '<td>';
                        $query = $this->db->get('distant_metastases_pasien');
                        foreach ($query->result() as $row4) {
                            if ($row4->NIK == $row->NIK) {
                                echo '' . $row4->ID_Distant_Metastases . ',';
                            }
                        }
                         echo '</td>';
                        echo '<td>' . $row2->No_Of_Metastases . '</td>'
                        . '<td>' . $row2->ID_Grade . '</td>'
                        . '<td>' . $row2->ID_Stage . '</td>'
                        . '<td>' . $row2->ID_Laterality . '</td>'
                        . '<td>' . $row2->ID_Immunohistokimia . '</td>'
                        . '<td>' . $row2->Date_IHC . '</td>'
                        . '<td>' . $row2->ID_Hybridization . '</td>'
                        . '<td>' . $row2->Date . '</td>'
                        . '<td>' . $row2->ID_Biopsy . '</td>'
                        . '<td>' . $row2->ID_Sublocation . '</td>';
                    }
                }
                ?>
            </tr>
            <?php
            $i++;
        }
        ?>
    </tbody>
</table>