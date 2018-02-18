<html>
    <body>

        <select id="pilihan1" onchange="function1()">
            <option value="">-- Pilih --
            <option value="YES">IHC For Breast Cancer YES
            <option value="NO">IHC For Breast Cancer NO
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
            <select id="pilihan5">
                <option value="LUMINAL A">LUMINAL B (HER2 +)
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
            <select >
                <option value="FiVE NEGATIVE PHENOTYPE">FiVE NEGATIVE PHENOTYPE
            </select>
        </div>

        <br>

        <div id="noperhitungan41" style="display:none;">
            <select >
                <option value="FiVE NEGATIVE PHENOTYPE">BASAL PHENOTYPE
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
            <select id="pilihan5">
                <option value="LUMINAL A">LUMINAL A
            </select>
        </div>
        <div id="perhitungan41" style="display:none;">
            <select id="pilihan5">
                <option value="LUMINAL A">LUMINAL B (HER2 -)
            </select>
        </div>



        <br>

        <p id="demo"></p>

        <script>
            function Breast() {
                var x = document.getElementById("pilihan1").value;
                if (x == "YES")
                {
                    document.getElementById('perhitungan1').style.display = '';
                } else if (x == "NO") {
                    document.getElementById('keterangan').style.display = '';
                }
            }
            
            function function1() {
                var x = document.getElementById("pilihan1").value;
                if (x == "YES")
                {
                    document.getElementById('perhitungan1').style.display = '';
                } else if (x == "NO") {
                    document.getElementById('keterangan').style.display = '';
                }
            }
            function function2() {
                var x = document.getElementById("pilihan2").value;
                if (x == "YES")
                {
                    document.getElementById('perhitungan2').style.display = '';
                } else if (x == "NO") {
                    document.getElementById('noperhitungan2').style.display = '';
                }
            }

            function function3() {
                var x = document.getElementById("pilihan3").value;
                if (x == "YES")
                {
                    document.getElementById('perhitungan3').style.display = '';
                } else if (x == "NO") {
                    document.getElementById('perhitungan31').style.display = '';

                }
            }
            function nofunction3() {
                var x = document.getElementById("nopilihan3").value;
                if (x == "YES")
                {

                } else if (x == "NO") {
                    document.getElementById('noperhitungan3').style.display = '';
                }
            }

            function function4() {
                var x = document.getElementById("pilihan4").value;
                if (x == "YES")
                {
                    document.getElementById('perhitungan4').style.display = '';
                } else if (x == "NO") {
                    document.getElementById('perhitungan41').style.display = '';

                }
            }
            function nofunction4() {
                var x = document.getElementById("nopilihan4").value;
                if (x == "YES")
                {
                    document.getElementById('noperhitungan4').style.display = '';
                } else if (x == "NO") {
                    document.getElementById('noperhitungan41').style.display = '';
                }
            }
        </script>
    </body>
</html>

