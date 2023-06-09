<?php
error_reporting(0);
if (isset($_POST['tin_nhan']) && !empty($_POST['tin_nhan']) && isset($_POST['may']) && !empty($_POST['may'])) {
    $mes = $_POST['tin_nhan'];
    $may_chat = $_POST['may'];

    $f = fopen("chat.txt", "a");

    if ($may_chat == "cus") {
        fwrite($f, "cus-" . $mes . "\n");
    } else if ($may_chat == "ad") {
        fwrite($f, "ad-" . $mes . "\n");
    }

    fclose($f);
}
$f = fopen("chat.txt", "r") or die("Không mở đc file");

while (!feof($f)) {
    $nd = fgets($f);
    $mang = explode("-", $nd);
    if ($mang[0] == "cus") {
?>

        <div id="cus">
            <?php
            echo $mang[1];
            ?>
        </div>
    <?php
    } else if ($mang[0] == "ad") {
    ?>
        <div id="ad">
            <?php
            echo $mang[1]; ?>
        </div>
<?php
    }
}
?>