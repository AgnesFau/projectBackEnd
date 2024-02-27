<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>PT Chipi Chapa</h1>
    @foreach($semuaMember as $buku)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> {{$buku->namaKaryawan}} </h5>
            <p class="card-title"> {{$buku->umurKaryawan}} </p>
            <p class="card-title"> {{$buku->alamatKaryawan}} </p>
            <p class="card-title"> {{$buku->nomorTelepon}} </p>
            <a href="/update/{{$buku->id}}" class="btn btn-primary">Update</a>
            <form action="/deleteMember/{{$buku->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    <form action="/add/member">
        <button class="btn btn-primary">Add</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>