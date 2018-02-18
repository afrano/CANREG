<html>
    <body >
    <center>
        <br><br>
        <select id="pilihan1" onchange="function1()">
            <option value="">-- Pilih --
            <option value="YES">IHC For Breast Cancer YES
            <option value="NO">IHC For Breast Cancer NO
            <option value="clear">Batal
        </select>
        <br> <br>
        <div id="keterangan" style="display:none;">
            <textarea name='keteranagn' required='' placeholder='Input keterangan...' rows='5'></textarea><br>
        </div>
        <br>
        <br>
        <div id="perhitungan1" style="display:none;">
            <select id="pilihan2" onchange="function2()">
                <option value="">-- Pilih --
                <option value="YES">ER+ and/or PR+
                <option value="NO">ER- and/or PR-
            </select>
        </div>
        <br>
        <div id="perhitungan2" style="display:none;">
            <select id="pilihan3" onchange="function3()">
                <option value="">-- Pilih --
                <option value="YES">HER2 -
                <option value="NO">HER2 +
            </select>
        </div>
        <br>
        <div id="noperhitungan2" style="display:none;">
            <select id="nopilihan3" onchange="nofunction3()">
                <option value="">-- Pilih --
                <option value="YES">HER2 +
                <option value="NO">HER2 -
            </select>
        </div><br>
        <div id="perhitungan31" style="display:none;">
            <select id="pilihan5" style="color: #009999">
                <option  value="LUMINAL B (HER2 +)">LUMINAL B (HER2 +)
            </select>
        </div>
        <br>

        <div id="noperhitungan3" style="display:none;">
            <select id="nopilihan4" onchange="nofunction4()">
                <option value="">-- Pilih --
                <option value="YES"> CKS- and EGFR-
                <option value="NO"> CKS+ and/or EGFR+
            </select>
        </div><br>

        <div id="noperhitungan4" style="display:none;">
            <select style="color: #3300cc" >
                <option value="FiVE NEGATIVE PHENOTYPE">FiVE NEGATIVE PHENOTYPE
            </select>
        </div>

        <br>

        <div id="noperhitungan41" style="display:none;">
            <select style="color: #3300cc" >
                <option value="BASAL PHENOTYPE">BASAL PHENOTYPE
            </select>
        </div>


        <div id="perhitungan3" style="display:none;">
            <select id="pilihan4" onchange="function4()">
                <option value="">-- Pilih --
                <option value="YES"> Ki67 < 20 %
                <option value="NO"> Ki67 >= 20 %
            </select>
        </div>

        <br>
        <div id="perhitungan4" style="display:none;">
            <select style="color: #3300cc" id="pilihan5">
                <option value="LUMINAL A">LUMINAL A
            </select>
        </div>
        <div id="perhitungan41" style="display:none;">
            <select  style="color: #3300cc" id="pilihan5">
                <option value="LUMINAL B (HER2 -)"><b>LUMINAL B (HER2 -)</b>
            </select>
        </div>

        <br>

        <p id="demo"></p>

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
                } else if (x == "clear") {
                    document.getElementById('keterangan').style.display = 'none';
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
    </body>
</html>

