<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>CRUD AREA</title>
</head>

<body>

    @include('komponen.navbaradmin')

    <div class="container mt-5 py-4">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0 mt-4"> Add Content</h2>

        </div>
        <hr>
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-4">
                <div class="col">
                    <input type="text" name="Nama" class="form-control" placeholder="Nama Tempat">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <input type="text" name="Tipe" class="form-control" placeholder="Tipe Kursus">
                </div>
                <div class="col">
                    <input type="text" name="NomorTelpon" class="form-control" placeholder="Nomor Telefon">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <input type="text" name="Lokasi" class="form-control" placeholder="Lokasi">
                </div>
                <div class="col">
                    <input type="text" name="Alamat" class="form-control" placeholder="Alamat">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <input type="text" name="small_description" class="form-control" placeholder="Jelaskan Kursus secara singkat">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <textarea class="form-control" name="long_description" id="exampleFormControlTextarea1" placeholder="Jelaskan Kursus secara detail"></textarea>
                </div>
            </div>
            <div class=" row mt-4">
                <div class="col">
                    <div class="col">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                    </div>
                    <div class="col">
                        <input class="form-control" name="foto" type="file" id="formFileMultiple" accept=".jpg,.png,.jpeg,.webp">
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
    </div>
    </form>
</body>

</html>