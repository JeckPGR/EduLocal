<!DOCTYPE html>
<html lang="en">
<?php
// session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>CRUD AREA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @if (session('msg'))
    <div class="px-4 alert alert-{{session('msg.type')}}" role="alert">
        <h5>{{session('msg.msg')}}</h5>
    </div>
    @endif
    @include('komponen.navbaradmin')

    <div class="container mt-5 py-4">
        <h4 class="mb-5">Welcome Admin {{$_SESSION['name']}}</h4>
        <div class="input-group">
            <form action="{{route('cari')}}" method="get" class="d-flex" style="gap: 10px;">
                <div class="form-outline" data-mdb-input-init>
                    <input type="search" id="form1" class="form-control" placeholder="Ganesha Operation" name="query" />
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                <!-- <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                    <i class="fas fa-search"></i>
                </button> -->
            </form>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-5">
            <h1 class="mb-0  d-flex align-items-center justify-content-between"> List Content</h1>
            <a href="/create" class="btn btn-primary d-flex align-items-center py-2"> Add Content</a>

        </div>
        <hr />

        <!-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end   ">

                @if ($content->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#">Previous</a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $content->previousPageUrl() }}">Previous</a>
                </li>
                @endif

                @foreach ($content->links() as $link)
                {{-- Use $link->url to get the URL for each page --}}
                <li class="page-item {{ $link->active ? 'active' : '' }}">
                    <a class="page-link" href="{{ $link->url }}?page={{ $link->page }}">{{ $link->page }}</a>
                </li>
                @endforeach

                @if ($content->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $content->nextPageUrl() }}">Next</a>
                </li>
                @else
                <li class="page-item disabled">
                    <a class="page-link" href="#">Next</a>
                </li>
                @endif
            </ul>
        </nav> -->

        @if(Session('action'))
        <div class="alert alert-{{session('action.type')}}" role="alert">
            {{Session('action.success')}}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Tipe</th>
                        <th>Nomor Telephone</th>
                        <th>Alamat</th>
                        <th>Lokasi</th>
                        <th>Foto</th>
                        <th>small_desc</th>
                        <th>long_desc</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($content -> count() > 0)
                    @php $counter = 1 @endphp
                    @foreach($content as $contents)
                    <tr>
                        <td>{{$counter++}}</td>
                        <td>{{$contents->Nama}}</td>
                        <td>{{$contents->Tipe}}</td>
                        <td>{{$contents->NomorTelpon}}</td>
                        <td>{{$contents->Alamat}}</td>
                        <td>{{$contents->Lokasi}}</td>
                        <td>
                            <img src="{{ asset('dbimg/'.$contents->foto) }}" alt="" width="100px">
                        </td>
                        <td>{{$contents->small_desc}}</td>
                        <td>{{$contents->long_desc}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example"></div>
                            <a href="/update/{{$contents->id}}" class="btn btn-warning">Edit</a>
                            <form action="/destroy/{{$contents->id}}" method="POST" class="btn btn-danger" onsubmit="return confirm('Are you sure?') ">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger m-0 p-0"> Delete</button>
                            </form>
                            <a href="/view/{{$contents->id}}" class="btn btn-info text-white">Details</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="text-center" colspan="9">Content Empty</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            {{ $content->withQueryString()->links('pagination::bootstrap-4') }}

        </div>
    </div>
</body>

</html>