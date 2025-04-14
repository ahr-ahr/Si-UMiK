<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Profil</title>
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
</head>

<body>
    <div class="background">
    <div class="profil">
        <h2>Profil</h2>
        <div class="img">
            <i class="fa-regular fa-user"></i>
        </div>
        <p>unggah poto</p>
    </div>

    <form action="#" method="POST">
        <div class="namad">
        <label class="depan" for="fname">nama depan :</label>
  <input type="text" id="fname" name="fname">
        </div>
        <div class="namab">
  <label class="belakang" for="lname">nama belakang:</label>
  <input type="text" id="lname" name="lname">
</div>
        <!--drop tanggal lahir-->
        <div class="lahir">
            <p>Tanggal lahir :</p>
            <input type="date">
        </div>
        <!--check jenis klamin-->
        <div class="klamin">
        <p>Jenis kelamin :</p>

        <div class="laki">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Laki-laki
                </label>
            </div>
            <div class="perempuan">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Perempuan
                </label>
            </div>
        </div>


        <button type="submit" class="btn btn-danger">Simpan</button>
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
