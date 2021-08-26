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
        nama Bank: <input type="text" name="nama_bank">
        <br>
        pemilik akun bank: <input type="text" name="pemilik_akun_bank" >
        <br>
        Bukti Bayar: <input type="file" name="bukti_bayar" id="">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>