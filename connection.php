<?php
    $servername='localhost';
    $user='root';
    $pin='';
    $db='signup';
    $con=mysqli_connect($servername,$user,$pin,$db);
    
       
    
    if(!$con){
        ?>
        <script>
                alert("connection not success");
        </script>
     <?php
    }

?>
