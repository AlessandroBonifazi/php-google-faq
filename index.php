<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>
</head>
<body>
    
</body>
</html>

<?php 
include 'data.php';
foreach ($faqs as $faq) {
    foreach ($faq as $key => $text) {

        if ($key == 'question') {
            echo('<h2>' . $text . '</h2>');
        } elseif ($key == 'answer') {
            echo('<p>' . $text . '</p>');
        }
    }
}

?>
