<?php
$star = "*";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        if ($i % 3 == 0) {
            echo "hope<br>";
            $star = "**";
        } else {
            echo "hope<br>";
            $star = "*";
        }
    } else {
        echo $star."<br>";
        $star = "*";
    }
}
?>
