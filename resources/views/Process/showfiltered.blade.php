<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Show All Course</title>
    <!-- Vanila CSS -->
    <link rel="stylesheet" href="css/app.css" />
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
                <div class="modal-body">
                    <form action="{{ url('/processfilterbahasa_inggris') }}" method="get">
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
                    <form action="{{ url('/processfilterprogramming') }}" method="get">
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


    <div class="container mt-5 " style="height: 100svh;">
        <h1 class="text-center ">Show All Courses</h1>
        @foreach($filteredContents->take(1) as $contents)
        <div class="d-flex justify-content-center " style="gap: 20px;">
            <p class="fw-light text-uppercase text-secondary">{{$contents->Tipe}}</p>
            <p class="fw-light text-uppercase text-secondary">></p>
            <p class="fw-light text-uppercase text-secondary">{{$contents->Lokasi}}</p>

        </div>
        @endforeach
        @if($filteredContents -> count() > 0)
        <div class="row">
            @foreach($filteredContents as $contents)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('dbimg/'.$contents->foto) }}" class="card-img-top" alt="Courses" style="height:223px ; ">
                    <div class="card-body">
                        <h5 class="card-title">{{$contents->Nama}}</h5>
                        <p class="card-text">{{$contents->small_description}}</p>
                        <a href="/showdetail/{{ $contents->id }}" class="btn btn-primary">See Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="d-flex justify-content-center align-items-center " style="margin-top: 210px;">
            <h3 class="text-secondary justify-content-center "> Sorry, Courses not found</h3>
        </div>
        @endif
    </div>


</body>

</html>