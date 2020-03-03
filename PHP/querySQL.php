<?php
    include_once 'dbh.inc.php';
?>

<?php

    $Array = $_POST['String']; 
    $Tense = $_POST['Tense']; 

        echo $Word;
        $sql = 'SELECT * FROM irregverbs WHERE Verb_Normal = $Word AND Tense = $Tense;';
        $results = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($results);
        echo $resultCheck;
        echo $results;
    
?>


    