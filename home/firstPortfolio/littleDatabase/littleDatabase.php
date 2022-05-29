<?php
declare(strict_types = 1);                               // Use strict types
require 'database-connection.php';              // Create PDO object
require 'functions.php';                    // Include functions

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    $sql = "SELECT * 
        FROM sampledata";

    $statement = $pdo->query($sql);
    $sampledata = $statement->fetchAll();
    if (!$sampledata) {
        include 'page-not-found.php';
    }
} else {
    $sql = "SELECT * 
            FROM sampledata
            WHERE ID = :id;";
    
    $statement = $pdo->prepare($sql);
    $statement->execute([':id' => $id]);
    $sampledata = $statement->fetchAll();
    if (!$sampledata) {
        include 'page-not-found.php';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Little Database</title>
   <link href="../favicon.ico" rel="icon" type="image/">
</head>
<body>
    
<?php foreach($sampledata as $data) { ?>
    <p>
        <div> <?php $strong = html_escape($data['Rank']);
                    if ($strong >= 3) {
                        $strong = true;
                        echo '<strong>';
                    } else {
                        $strong = false;
                    } ?>
            <?= html_escape($data['ID']); ?>
        
         <?= 
            html_escape($data['Item'] ?? 'Information not available');
            if ($data['Item'] == '') {
                echo 'Information not available';
            } ?>
        </div> <?php echo ($message = $strong ? '</strong>' : ''); ?>
<?php } ?>
   <a href="../index.php">Home</a>
</body>
</html>