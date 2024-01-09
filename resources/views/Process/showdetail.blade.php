<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Courses Details</title>
    <!-- Website Logo -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
</head>

<body>
    @include('komponen.navbar')

    <!-- Modal -->

    <div class="modal fade" id="englishcourse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="inggris">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Find by Location
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="{{ url('/processfilterbahasa_inggris') }}" method="get" class="d-flex flex-column " style="gap:10px">
                        <input type="hidden" name="Tipe" value="English">
                        <select name="Lokasi">
                            <option value="default">Select One</option>
                            <option value="Andir">Andir</option>
                            <option value="Antapani">Antapani</option>
                            <option value="Arcamanik">Arcamanik</option>
                            <option value="Astanaanyar">Astanaanyar</option>
                            <option value="BabakanCiparay">Babakan Ciparay</option>
                            <option value="BandungKidul">Bandung Kidul</option>
                            <option value="BandungKulon">Bandung Kulon</option>
                            <option value="BandungWetan">Bandung Wetan</option>
                            <option value="Batununggal">Batununggal</option>
                            <option value="BojongloaKaler">Bojongloa Kaler</option>
                            <option value="BojongloaKidul">Bojongloa Kidul</option>
                            <option value="Buahbatu">Buahbatu</option>
                            <option value="CibeunyingKaler">Cibeunying Kaler</option>
                            <option value="CibeunyingKidul">Cibeunying Kidul</option>
                            <option value="Cibiru">Cibiru</option>
                            <option value="Cicendo">Cicendo</option>
                            <option value="Cidadap">Cidadap</option>
                            <option value="Cinambo">Cinambo</option>
                            <option value="Coblong">Coblong</option>
                            <option value="Gedebage">Gedebage</option>
                            <option value="Kiaracondong">Kiaracondong</option>
                            <option value="Lengkong">Lengkong</option>
                            <option value="Mandalajati">Mandalajati</option>
                            <option value="Panyileukan">Panyileukan</option>
                            <option value="Rancasari">Rancasari</option>
                            <option value="Regol">Regol</option>
                            <option value="Sukajadi">Sukajadi</option>
                            <option value="Sukasari">Sukasari</option>
                            <option value="SumurBandung">Sumur Bandung</option>
                            <option value="Ujungberung">Ujungberung</option>
                        </select>
                        <input type="submit" value="Submit" class="btn btn-primary" data-bs-dismiss="modal" />
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="programmingcourse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="programming">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Find by Location
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/processfilterprogramming') }}" method="get" class="d-flex flex-column " style="gap:10px">
                        <input type="hidden" name="Tipe" value="Programming">
                        <select name="Lokasi">
                            <option value="default">Select One</option>
                            <option value="Andir">Andir</option>
                            <option value="Antapani">Antapani</option>
                            <option value="Arcamanik">Arcamanik</option>
                            <option value="Astanaanyar">Astanaanyar</option>
                            <option value="BabakanCiparay">Babakan Ciparay</option>
                            <option value="BandungKidul">Bandung Kidul</option>
                            <option value="BandungKulon">Bandung Kulon</option>
                            <option value="BandungWetan">Bandung Wetan</option>
                            <option value="Batununggal">Batununggal</option>
                            <option value="BojongloaKaler">Bojongloa Kaler</option>
                            <option value="BojongloaKidul">Bojongloa Kidul</option>
                            <option value="Buahbatu">Buahbatu</option>
                            <option value="CibeunyingKaler">Cibeunying Kaler</option>
                            <option value="CibeunyingKidul">Cibeunying Kidul</option>
                            <option value="Cibiru">Cibiru</option>
                            <option value="Cicendo">Cicendo</option>
                            <option value="Cidadap">Cidadap</option>
                            <option value="Cinambo">Cinambo</option>
                            <option value="Coblong">Coblong</option>
                            <option value="Gedebage">Gedebage</option>
                            <option value="Kiaracondong">Kiaracondong</option>
                            <option value="Lengkong">Lengkong</option>
                            <option value="Mandalajati">Mandalajati</option>
                            <option value="Panyileukan">Panyileukan</option>
                            <option value="Rancasari">Rancasari</option>
                            <option value="Regol">Regol</option>
                            <option value="Sukajadi">Sukajadi</option>
                            <option value="Sukasari">Sukasari</option>
                            <option value="SumurBandung">Sumur Bandung</option>
                            <option value="Ujungberung">Ujungberung</option>
                        </select>
                        <input type="submit" value="Submit" class="btn btn-primary" data-bs-dismiss="modal" />
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    <div class="container mt-4 p-3">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $content->Nama }}</h1>
                <img src="{{ asset('dbimg/'.$content->foto) }}" alt="foto" height="400px" width="90%" class="justify-content-center" />
                <p class="text-justify text-break mt-3" style="width:90%; text-align:justify; line-height:1.7">{{ $content->long_description }}</p>
            </div>
            <div class="col-md-4 p-1 mt-3">
                <table class="table table-striped  text-center border border-secondary">
                    <thead>
                        <tr>
                            <th class="fs-3 table-info text-dark"> Informasi Kursus</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th> Tipe Kursus</th>
                        </tr>
                        <tr>
                            <td> {{ $content->Tipe}}</td>
                        </tr>


                        <tr>
                            <th> No Telephone</th>
                        </tr>
                        <tr>
                            <td> {{ $content->NomorTelpon}}</td>
                        </tr>

                        <tr>
                            <th> Alamat</th>
                        </tr>
                        <tr>
                            <td> {{ $content->Alamat}}</td>
                        </tr>

                        <tr>
                            <th> Kecamatan</th>
                        </tr>
                        <tr>
                            <td> {{ $content->Lokasi}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>