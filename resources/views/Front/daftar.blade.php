<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tim</h1>
    <form action="{{ url('tim') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        nama tim: <input type="text" name="nama_tim">
        <br>
        asal sekolah: <input type="text" name="asal_sekolah">
        <br>
        Asal Kota: <input type="text" name="asal_kota">
        <br>
        pasword: <input type="text" name="password">
        <br>
        <button type="submit">next</button>
    </form>
</body>
</html>