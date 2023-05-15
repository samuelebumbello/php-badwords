<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
        integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
        crossorigin='anonymous' />
    <title>PHP Badwords</title>
</head>

<body>
    <main>
        <form action="form.php" method="POST">
            <div class="mb-3">
                <label for="paragrafo" class="form-label">Paragrafo e Lunghezza</label>
                <input type="text" name="paragrafo" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="censure" class="form-label">Paragrafo Censurato</label>
                <input type="text" name="censure" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</body>

</html>