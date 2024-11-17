<?php
// 確保是經由 POST 方法提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><table><tr>";
    for($i = 2; $i<6; $i++) {
        echo "<td>";
        for($j = 1; $j<10; $j++){
            echo $i."x".$j." = ".$i*$j."<br>";
        }
        echo "</td>";
    }
    echo "</tr>";
    for($i = 6; $i<10; $i++) {
        echo "<td>";
        for($j = 1; $j<10; $j++){
            echo $i."x".$j." = ".$i*$j."<br>";
        }
        echo "</td>";
    }
    echo "</tr></table><p>";

}
?>  