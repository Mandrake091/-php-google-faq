<?php
include 'database.php';






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="./css/style.css">
    <title>php-google-faq</title>
</head>

<body>
    <header>
        <nav class="container-fluid">
            <div class="row">
                <img id="logo" src=" ./img/Google-logo.png" alt="">
            </div>
            <div class="row">
                <ul class="d-inline d-flex justify-content-between align-items-center m-0">
                    <?php
                        foreach ($db as $key => $value) {
                            foreach ($value as $k => $item) {
                                echo "<li class='d-inline'>$k</li>";
                            }
                        } ?>
                </ul>
            </div>







        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row w-75 m-auto">

                <?php
                foreach ($item as $j => $obj) {
                    echo $obj['title'];
                    echo $obj['response'];
                } ?>
            </div>
        </div>
    </main>
</body>

</html>

</html>