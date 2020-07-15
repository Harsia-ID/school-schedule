<!-- THIS IS MAIN HEADER AND TITLE -->
<?php
$title = "HOME";
include "./config/header.php";
?>
<!-- DO NOT DISTRUB -->

<!-- THIS IS MAIN CONTENT -->



<!-- THIS IS SECTION JADWAL -->
<section id="jadwal">
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <font> <?= date("l"); ?> </font>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" align="center">
                            <?php
                            error_reporting(0);
                            $date = date("l");
                            if ($date = "Monday") {
                                //JADWAL
                                print "
    <tr>
    <td>Jam</td>
    <td>Pelajaran</td>
</tr>
<tr>
    <td>06.30-08.00</td>
    <td>Matematika</td>
</tr>
<tr>
    <td>08.00-09.30</td>
    <td>FIKIH</td>
</tr>
<tr>
    <td>09.30-11.00</td>
    <td>Bahasa Indonesia</td>
</tr>
    ";
                            } else if ($date = "Tuesday") {
                                //JADWAL
                                echo "
    <tr>
    <td>Jam</td>
    <td>Pelajaran</td>
</tr>
<tr>
    <td>06.30-08.00</td>
    <td>SKI</td>
</tr>
<tr>
    <td>08.00-09.30</td>
    <td>AKIDAH AKHLAQ</td>
</tr>
<tr>
    <td>09.30-11.00</td>
    <td>BTQ</td>
</tr>";
                            } else if ($date = "Wednesday") {
                                //JADWAL
                                echo "
    <tr>
    <td>Jam</td>
    <td>Pelajaran</td>
</tr>
<tr>
    <td>06.30-08.00</td>
    <td>IPA</td>
</tr>
<tr>
    <td>08.00-09.30</td>
    <td>INFORMATIKA</td>
</tr>
<tr>
    <td>09.30-11.00</td>
    <td>Bahasa Arab</td>
</tr>";
                            } else if ($date = "Thursday") {
                                //JADWAL
                                echo "
    <tr>
    <td>Jam</td>
    <td>Pelajaran</td>
</tr>
<tr>
    <td>06.30-08.00</td>
    <td>Bahasa Inggris</td>
</tr>
<tr>
    <td>08.00-09.30</td>
    <td>PENJASKES</td>
</tr>
<tr>
    <td>09.30-11.00</td>
    <td>IPS</td>
</tr>";
                            } else if ($date = "Friday") {
                                echo "
    <tr>
    <td>Jam</td>
    <td>Pelajaran</td>
</tr>
<tr>
    <td>06.30-08.00</td>
    <td>ALQURAN HADITS</td>
</tr>
<tr>
    <td>08.00-09.30</td>
    <td>SENI BUDAYA</td>
</tr>
<tr>
    <td>09.30-11.00</td>
    <td>PKN</td>
</tr>";
                            } else if ($date = "Saturday") {
                                echo "Belum Ada Jadwal !";
                            } else {
                                echo "Hari Ini Libur Gayzz";
                            }

                            ?>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <font>
                        Note : Jadwal Ini Berlaku Selama Covid-19
                    </font>
                </div>

            </div>
            <font style="text-align:left !important;color:white;">
                <i class="fa fa-eye"></i>
                <?php
                include("counter.php");
                echo $kunjungan[0];
                ?>
            </font>
            <center class="st">
                <font color="white"> Code By Hadi Prasetia</font>
            </center>
        </div>
    </div>
</section>

<!-- THIS IS SECTION ABOUT -->
<!-- <section id="about">
    <div class="content"></div>
</section> -->

<!-- THIS IS MAIN FOOTER -->
<?php
include "./config/footer.php";
?>