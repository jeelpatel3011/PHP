<?php

echo "<table border='2'>";
$i = 10;
for ($i = 0; $i < 10; $i++) {
    echo"<tr>";
    if ($i % 2 == 0) {
        echo "<td bgcolor='skyblue'>$i</td>";
    } else {
        echo "<td bgcolor='lightgreen'>$i</td>";
    }
    echo"</tr>";
}
?>
