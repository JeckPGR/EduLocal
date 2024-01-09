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
            <h2 class="mb-0 mt-4"> Content Info</h2>

        </div>
        <hr>


        <div class="row mt-4">
            <div class="col">
                <label for="" class="form-label">Nama Kursus</label>
                <input type="text" name="Nama" class="form-control" value="{{ $content->Nama }}" readonly>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <label for="" class="form-label">Tipe</label>
                <input type="text" name="Lokasi" class="form-control" value="{{ $content->Tipe }}" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Nomor Telephone</label>
                <input type="text" name="Alamat" class="form-control" value="{{ $content->NomorTelpon }}" readonly>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <label for="" class="form-label">Lokasi</label>
                <input type="text" name="Lokasi" class="form-control" value="{{ $content->Lokasi }}" readonly>
            </div>
            <div class="col">
                <label for="" class="form-label">Alamat</label>
                <input type="text" name="Alamat" class="form-control" value="{{ $content->Alamat }}" readonly>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <label for="" class="form-label">Small_Desc</label>
                <input type="text" name="small_description" class="form-control" value="{{ $content->small_description }}" readonly>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <label for="" class="form-label">Long_desc</label>
                <textarea class="form-control" name="long_description" id="exampleFormControlTextarea1" readonly value="{{ $content->long_description }}"></textarea>
            </div>
        </div>
        <div class=" row mt-4">
            <div class="col">
                <div class="col">
                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                </div>
                <div class="col">
                    <input class="form-control" name="foto" type="file" id="formFileMultiple" value="{{ $content->foto }}" multiple readonly>
                </div>

            </div>
        </div>

    </div>

</body>

</html>