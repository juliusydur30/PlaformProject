<?php
    $link=mysqli_connect("localhost:3306", "root", "") or die (mysqli_error($link));
    mysqli_select_db($link,"golden_dawn") or die (mysqli_error($link));

    $conn = mysqli_connect('localhost:3306','root','','golden_dawn');
?>