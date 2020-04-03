<?php
    include_once 'dbh.inc.php';
?>

<?php

    $Verb = $_POST['String']; 
    $InputTense = $_POST['btnClickedValue']; 
    echo '<br>';
    echo '<br>';
    $TestString = 'Correr';
    $Test = substr($TestString, -2);
    $Root = str_replace($Test, "", $TestString);
    $reg = '/'. $Test .'/i';
    $sql = 'SELECT * FROM regverbs;';
    $results = mysqli_query($conn, $sql);
    foreach($results as $result) {
        $Term = $result['Term_Normal'];
        $Ending = $result['Ending'];
        $Tense = $result['Tense'];
        if (preg_match($reg,$Ending)==1 and $InputTense==$Tense){
            $Conjugate = str_ireplace("-", $Root, $Term);
            echo $Conjugate, ' ' ,$result['Tense'],' ',$result['Pronoun_Normal'], '<br>' ;
        }
    }
    $resultCheck = mysqli_num_rows($results);

?>


    