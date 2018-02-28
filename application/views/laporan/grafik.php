<?php
$topography = $this->db->query('select ID_Topography, count(ID_Topography) as jumTopography from data_tumor_pasien group by ID_Topography');
$morphology = $this->db->query('select ID_Morphology, count(ID_Morphology) as jumMorphology from data_tumor_pasien group by ID_Morphology');
//    <!-- MOST VALID BASIC OF DIAGNOSIS CANCER : -->
$basicdiagnosis = $this->db->query('select ID_Diagnosis, count(ID_Diagnosis) as jumdiagnosis from data_tumor_pasien group by ID_Diagnosis');
//   <!-- CLINICAL EXT. OF DISEASE BEFORE TREATMENT : -->
$disease = $this->db->query('select ID_Disease, count(ID_Disease) as jumdisease from data_tumor_pasien group by ID_Disease');
//   <!-- TREATMENT AT REPORTING INSTITUTION : -->
$treatment = $this->db->query('select ID_Treatment, count(ID_Treatment) as jumlah from treatment_pasien group by ID_Treatment');
$counttreat = $this->db->query('select count(NIK) as jumlah from treatment_pasien order by NIK');
//    <!-- IN SITU HYBRIDIZATION(ISH) :-->
$hybridization = $this->db->query('select ID_Hybridization, count(ID_Hybridization) as jumlah from data_tumor_pasien group by ID_Hybridization');
//    <!-- BEHAVIOUR :  -->
$behaviour = $this->db->query('select ID_Behaviour, count(ID_Behaviour) as jumlah from data_tumor_pasien group by ID_Behaviour');
//    //    <!-- DISTANT METASTASES : -->
$distant_metastases = $this->db->query('select ID_Distant_Metastases, count(ID_Distant_Metastases) as jumlah from distant_metastases_pasien group by ID_Distant_Metastases');
$countmetastases = $this->db->query('select count(NIK) as jumlah from distant_metastases_pasien order by NIK');
//    //    <!-- NO.OF METASTATES : -->
$nometastases = $this->db->query('select No_Of_Metastases, count(No_Of_Metastases) as jumlah from data_tumor_pasien group by No_Of_Metastases');
//    <!-- GRADE : -->
$grade = $this->db->query('select ID_Grade, count(ID_Grade) as jumlah from data_tumor_pasien group by ID_Grade');
//    //    <!-- STAGE : -->ID_Stage
$stage = $this->db->query('select ID_Stage, count(ID_Stage) as jumlah from data_tumor_pasien group by ID_Stage');
//    //    <!-- LATERALITY: -->
$laterality = $this->db->query('select ID_Laterality, count(ID_Laterality) as jumlah from data_tumor_pasien group by ID_Laterality');

//    //    <!-- JENIS BIOPSY / TYPE OF BIOPSY : -->
$biopsy = $this->db->query('select ID_Biopsy, count(ID_Biopsy) as jumlah from data_tumor_pasien group by ID_Biopsy');

//    <!-- TUMOR SIZE : -->
$tumorsize = $this->db->query('select TumorSize, count(TumorSize) as jumlah from data_tumor_pasien group by TumorSize');
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog btn-skype" role="document">
        <div class="modal-content">
            <div class="modal-header btn-skype">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail Pasien Tumor</h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>-->
<script type="text/javascript">
    $(document).ready(function () {
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'post',
                url: 'Tumor/detailtumor',
                data: 'rowid=' + rowid,
                        success: function (data) {
                            $('.fetched-data').html(data);
                        }
            });
        });
    });
</script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">
                <?php foreach ($laporan as $datalaporan) { ?>
                    <h3 class="box-title">Total Data Pasien : <?php
                        echo $datalaporan->total;
                    }
                    ?> Orang</h3>
                <center><h3 class="box-title">Topography</h3></center>
                <?php
                foreach ($topography->result() as $rowtopography) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b><a href='#myModal' id='custId' data-toggle='modal' data-id="<?php echo $rowtopography->ID_Topography; ?>"> <?php echo $rowtopography->ID_Topography; ?></b></h5></a> <small>Jumlah : <?php echo $rowtopography->jumTopography . ' data'; ?></small>
                            <?php $persentase = round(($rowtopography->jumTopography / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><br><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">
                <center> <h3 class="box-title">Morphology</h3></center>
                <?php
                foreach ($morphology->result() as $rowmorphology) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b><?php echo $rowmorphology->ID_Morphology; ?></b></h5> <small>Jumlah : <?php echo $rowmorphology->jumMorphology; ?></small>
                            <?php $persentase = round(($rowmorphology->jumMorphology / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><br><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
    <!-- MOST VALID BASIC OF DIAGNOSIS CANCER : -->
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">MOST VALID BASIC OF DIAGNOSIS CANCER</h3></center>
                <?php
                foreach ($basicdiagnosis->result() as $basicdiagnosis) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b> <?php echo $basicdiagnosis->ID_Diagnosis; ?></b></h5> <small>Jumlah : <?php echo $basicdiagnosis->jumdiagnosis; ?></small>
                            <?php $persentase = round(($basicdiagnosis->jumdiagnosis / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><br><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
    <!-- CLINICAL EXT. OF DISEASE BEFORE TREATMENT : -->
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">CLINICAL EXT. OF DISEASE BEFORE TREATMENT</h3></center>
                <?php
                foreach ($disease->result() as $disease) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b> <?php echo $disease->ID_Disease; ?></b></h5> <small>Jumlah : <?php echo $disease->jumdisease; ?></small>
                            <?php $persentase = round(($disease->jumdisease / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
    <!-- TREATMENT AT REPORTING INSTITUTION : -->
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">
                <center> <h3 class="box-title">TREATMENT AT REPORTING INSTITUTION</h3></center>
                <?php
                foreach ($counttreat->result() as $counttreat) {

                    foreach ($treatment->result() as $treatment) {
                        ?>
                        <ul class="country-state">
                            <li>
                                <h5><b> <?php echo $treatment->ID_Treatment; ?></b></h5> <small>Jumlah : <?php echo $treatment->jumlah; ?></small>
                                <?php $persentase = round(($treatment->jumlah / $counttreat->jumlah) * 100, 2) ?>
                                <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                                </div>
                            </li>
                        </ul><br><?php } ?>
                    <center>  Total : <?php
                        echo $counttreat->jumlah;
                    }
                    ?></center>
            </div>
        </div>
    </div>
    <!-- IN SITU HYBRIDIZATION(ISH) :-->
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">IN SITU HYBRIDIZATION(ISH)</h3></center>
                <?php
                foreach ($hybridization->result() as $hybridization) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b> <?php echo $hybridization->ID_Hybridization; ?></b></h5> <small>Jumlah : <?php echo $hybridization->jumlah; ?></small>
                            <?php $persentase = round(($hybridization->jumlah / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
    <!-- BEHAVIOUR :  -->
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">BEHAVIOUR</h3></center>
                <?php
                foreach ($behaviour->result() as $behaviour) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b><?php echo $behaviour->ID_Behaviour; ?></b></h5> <small>Jumlah : <?php echo $behaviour->jumlah; ?></small>
                            <?php $persentase = round(($behaviour->jumlah / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
    <!-- DISTANT METASTASES : -->

    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">
                <center> <h3 class="box-title">DISTANT METASTASES</h3></center>
                <?php
                foreach ($countmetastases->result() as $countmetastases) {

                    foreach ($distant_metastases->result() as $distant_metastases) {
                        ?>
                        <ul class="country-state">
                            <li>
                                <h5><b> <?php echo $distant_metastases->ID_Distant_Metastases; ?></b></h5> <small>Jumlah : <?php echo $distant_metastases->jumlah; ?></small>
                                <?php $persentase = round(($distant_metastases->jumlah / $countmetastases->jumlah) * 100, 2) ?>
                                <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                                <div class="progress">
                                    <div class="progress-bar btn-youtube" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                                </div>
                            </li>
                        </ul><br><?php } ?>
                    <center>  Total : <?php
                        echo $countmetastases->jumlah;
                    }
                    ?></center>
            </div>
        </div>
    </div>

    <!-- NO.OF METASTATES : -->

    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">NO.OF METASTATES</h3></center>
                <?php
                foreach ($nometastases->result() as $nometastases) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b> <?php echo $nometastases->No_Of_Metastases; ?></b></h5> <small>Jumlah : <?php echo $nometastases->jumlah; ?></small>
                            <?php $persentase = round(($nometastases->jumlah / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><br><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>

    <!-- GRADE : -->

    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">GRADE</h3></center>
                <?php
                foreach ($grade->result() as $grade) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b><?php echo $grade->ID_Grade; ?></b></h5> <small>Jumlah : <?php echo $grade->jumlah; ?></small>
                            <?php $persentase = round(($grade->jumlah / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><br><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
    <!-- STAGE : -->
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">STAGE</h3></center>
                <?php
                foreach ($stage->result() as $stage) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b><?php echo $stage->ID_Stage; ?></b></h5> <small>Jumlah : <?php echo $stage->jumlah; ?></small>
                            <?php $persentase = round(($stage->jumlah / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar  btn-skype" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><br><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
    <!-- LATERALITY: -->
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">LATERALITY</h3></center>
                <?php
                foreach ($laterality->result() as $laterality) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b> <?php echo $laterality->ID_Laterality; ?></b></h5> <small>Jumlah : <?php echo $laterality->jumlah; ?></small>
                            <?php $persentase = round(($laterality->jumlah / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar btn-youtube" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><br><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
    <!-- JENIS BIOPSY / TYPE OF BIOPSY : -->
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">JENIS BIOPSY / TYPE OF BIOPSY</h3></center>
                <?php
                foreach ($biopsy->result() as $biopsy) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b><?php echo $biopsy->ID_Biopsy; ?></b></h5> <small>Jumlah : <?php echo $biopsy->jumlah; ?></small>
                            <?php $persentase = round(($biopsy->jumlah / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><br><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
    <!-- TUMOR SIZE : -->
    <div class="row">
        <div class="col-md-12 col-lg-12  col-xs-12">
            <div class="white-box">

                <center> <h3 class="box-title">TUMOR SIZE</h3></center>
                <?php
                foreach ($tumorsize->result() as $tumorsize) {
                    ?>
                    <ul class="country-state">
                        <li>
                            <h5><b>Size   : <?php echo $tumorsize->TumorSize; ?></b></h5> <small>Jumlah : <?php echo $tumorsize->jumlah; ?></small>
                            <?php $persentase = round(($tumorsize->jumlah / $datalaporan->total) * 100, 2) ?>
                            <div class="pull-right"><?php echo $persentase . '%'; ?> <i class="fa text-success"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $persentase; ?>%;"></div>
                            </div>
                        </li>
                    </ul><br><?php } ?><center>  Total : <?php echo $datalaporan->total; ?></center>
            </div>
        </div>
    </div>
</div>
