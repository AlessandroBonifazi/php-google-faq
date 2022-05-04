<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Google FAQ</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row header ">
                <div class="col-2">
                    <img id="logo" src="assets/google-logo.jpg" alt="google logo">
                </div>

                <div class="col-2 offset-8 d-flex justify-content-end align-items-center">
                    <div class="account d-flex justify-content-center align-items-center">
                        <span>A</span>
                    </div>
                </div>
        </div>
    </div>

    <div class="container-lg">
        <div class="row">
            <div class="col-12 text-center text-primary">
                <h1>Domande Frequenti</h1>
            </div>
            <div class="col-12">
            <?php 
            include 'data/data.php';
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
            </div>
        </div>
    </div>
</body>
</html>


