<!-- THIS IS MAIN HEADER AND TITLE -->
<?php
$title = "HOME";
include "./config/header.php";
include("counter.php");

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
    $browser = 'Netscape';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
    $browser = 'Firefox';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    $browser = 'Chrome';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
    $browser = 'Opera';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
    $browser = 'Internet Explorer';
} else {
    $browser = 'Other';
}

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
    $device = 'Netscape';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows')) {
    $device = 'Windows';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Linux')) {
    $device = 'Linux';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Android')) {
    $device = 'Android';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mac Os')) {
    $device = 'Mac Os';
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'IOS')) {
    $device = 'IOS';
} else {
    $device = 'Other';
}

$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
else if (getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if (getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
else if (getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
else if (getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
else if (getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
else {
    $ipaddress = 'IP tidak dikenali';
}

?>
<!-- THIS IS SECTION JADWAL -->
<section id="jadwal">
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <font> Information of site</font>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" align="center">
                            <tr>
                                <td>Browser</td>
                                <td>:</td>
                                <td><?= $browser; ?></td>
                            </tr>
                            <tr>
                                <td>Device</td>
                                <td>:</td>
                                <td><?= $device; ?></td>
                            </tr>
                            <tr>
                                <td>Ip</td>
                                <td>:</td>
                                <td><?= $ipaddress; ?></td>
                            </tr>
                            <tr>
                                <td>Views</td>
                                <td>:</td>
                                <td> <i class="fa fa-eye"></i><?= $kunjungan[0]; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <font>
                        Note : Cuman Orang Gabut Doank yang buat kek ginian hwhw :v
                    </font>
                </div>

            </div>
            <font style="text-align:left !important;color:white;">

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