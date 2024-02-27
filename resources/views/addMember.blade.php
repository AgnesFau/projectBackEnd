<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="/members">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="5-20 karakter" name="nama">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Umur Karyawan</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="lebih dari 20 tahun" name="usia">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Alamat Karyawan</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="10-40 karakter" name="alamat">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nomor Telepon Karyawan</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="9-12 karakter, dimulai dari 08" name="telepon">
        </div>
        
         <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>