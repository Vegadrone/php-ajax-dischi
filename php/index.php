<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- IMPORT BOOTSTRAP v5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- MY STYLE -->
    <link rel="stylesheet" href="../style.css">

    <title>Dischi</title>
</head>

<body>
    <?php include '../db.php' ?>
    <header>
        <img src="../assets/spotify-logo.png" alt="logo">
    </header>
    <main>
        <div class="card-wrapper d-flex flex-wrap py-3">
            <?php foreach ($disks as $disk) { ?>
                <div class="card m-2" style="width: 18rem;">
                    <img class="p-2" src="<?php echo $disk['poster']; ?>" class="card-img-top" alt="<?php echo $disk['title']; ?>">
                    <div class="card-body">
                        <h4 class="text-center text-light fw-bold"><?php echo $disk['title']; ?></h4>
                        <h6 class="text-center text-light fw-semibold"><?php echo $disk['author']; ?></h6>
                        <h6 class="text-center text-light"><?php echo $disk['year']; ?></h6>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>