<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .container {
            width : 35%;
            height: 35%;
            align-items: center;
            margin-top: 5em;
            background-color: white;
        }
        .box {
            padding-bottom: 13%;
            padding-left: 13%;
            padding-right: 13%;
            padding-top: 5%;
        }
    </style>
</head>
<body>
        <div class="container shadow p-3 mb-5 rounded">
            <div class="box">
                <form action="proses.php" method="post">
                    <div class="mb-3">
                        <img src="https://www.pngkit.com/png/full/522-5228640_asus-rog-merupakan-produk-yang-dikeluarkan-oleh-asus.png" alt="" width="30%" class="mx-auto d-block">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-warning">Login</button>
                </form>
            </div>
        </div>
</body>
</html>