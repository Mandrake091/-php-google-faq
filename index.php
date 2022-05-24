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
        <nav class="w-100">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <img id="logo" src=" ./img/Google-logo.png" alt="">
                    <i class="fa-solid fa-list-ul text-end w-25"></i>
                </div>
                <div class="row">
                    <ul class="d-inline">
                        <?php
                        foreach ($db as $key => $value) {
                            foreach ($value as $k => $item) {
                            echo "<li class='d-inline'>$k</li>";
                    }}?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">

                <?php
 foreach ($item as $j => $obj) {
    echo $obj['title'];
    echo $obj['response'];
}?>
            </div>
        </div>
    </main>
</body>

</html>

</html>