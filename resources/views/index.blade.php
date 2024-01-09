<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduLocal</title>
  <!-- Website Logo -->
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
  <!-- Vanila CSS -->
  <link rel="stylesheet" href="css/app.css" />
  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">

</head>

<body>
  @include('komponen.navbarmain')
  <!-- content -->

  <div class="container mt-5">

    <!-- Hero -->

    <div class="hero">
      <div class="row align-items-center mb-5">
        <div class="col-md-6 col-lg-6 " data-aos="zoom-out-down" data-aos-duration="1500">
          <img class="img-fluid " src="{{ URL('img/programmerc.png') }}" alt="">
        </div>
        <div class="col-md-6 col-lg-6   py-5">
          <h1 class="display-3"> Find Nearest Course...</h1>


        </div>
      </div>
    </div>

    <!-- Lesson Over -->
    <h1 class="text-center display-5 mt-5 justify-content-center" id="lesson">Lesson</h1>
    <p class="text-center fs-5">Course that we provide</p>
    <div class="row">
      <div class="col-md-6 col-lg-6 mb-4">
        <div class="card text-center" style="width: fit-content; background-color: #7bf89a1b;">
          <img src="../img/english.jpg" class="card-img-top" alt="English-course" />
          <div class="card-body">
            <h5 class="card-title"><b>English Course</b></h5>
            <p class="card-text">
              Unlock fluency. Find the perfect English course.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#englishcourse">
              Find Course
            </button>

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


      <div class="col-md-6 col-lg-6 mb-4">
        <div class="card text-center" style="width: fit-content; background-color: #b4e3f842;">
          <img src="../img/prorammer.jpg" class="card-img-top" alt="Programmer Class" />
          <div class="card-body">
            <h5 class="card-title"><b>Programming Course</b></h5>
            <p class="card-text">
              Code your future. Discover programming courses.
            </p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#programmingcourse">
              Find Course
            </button>

            <!-- Modal -->
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

      <!-- info kursus terdekat -->

      <h1 class="display-5 mt-5" style="margin-top: 0px">Tempat Kursus</h1>

      <div class="row" data-aos="fade-up" data-aos-duration="2000">
        @foreach($contents->take(4) as $content)
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="card h-100">
            <img src="{{ asset('dbimg/'.$content->foto) }}" class="card-img-top img-fluid" alt="foto" style="height:223px ; " />
            <div class="card-body">
              <h5 class="card-title">{{ $content->Nama }}</h5>
              <p class="card-text">
                {{ $content->small_description }}
              </p>
              <a href="/showdetail/{{ $content->id }}" class="btn btn-primary">See Detail</a>
            </div>
          </div>
        </div>


        @endforeach
      </div>

      <!-- Komentor -->

      <h1 class="display-5 text-center mt-5" style="margin-top: 0px">
        Comment about our website
      </h1>
      <div class="row mt-4">
        <div class="col-md-4 col-lg-4">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4 text-center">
                <img src="../img/johny.jpg" class="img-fluid rounded-start" alt="..." />

                <p class="mt-4">@johnnyjsuh</p>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><b>Johnny Suh</b></h5>
                  <p class="card-text">
                    Informasi yang disediakan sangat lengkap. Saya tidak perlu mencari informasi tambahan di tempat lain.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4 text-center">
                <img src="../img/johny2.jpg" class="img-fluid rounded-start" alt="..." />

                <p class="mt-4">@jeongjaehyun</p>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><b>Jaehyun</b></h5>
                  <p class="card-text">
                    Desainnya sangat menarik dan informatif. Saya suka cara mereka mengorganisir informasi tentang kursus-kursus yang tersedia.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4 text-center">
                <img src="../img/seorina.jpg" class="img-fluid rounded-start" alt="..." />

                <p class="mt-4">@seorina</p>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><b>Seorina</b></h5>
                  <p class="card-text">
                    Saya suka fitur pencarian berdasarkan lokasi. Sangat berguna bagi saya yang ingin mencari kursus di dekat tempat tinggal.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Add more similar card elements here with rounded-circle class -->
      </div>
    </div>
  </div>

  @include('komponen.footer')
  <!-- AOS initalization -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Vanilla JS -->

  <script src="script.js"></script>

  <!-- IonIcon -->

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>