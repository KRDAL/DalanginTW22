<?php
for ($i = 0; $i <= 99; $i++) {
    printf("%02d, ", $i);
    if (($i + 1) % 20 == 0) {
        echo "<br>";
    }
}
?>