<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>peserta 1</h1>
    <form name="form1" action="" method="post">
        nama: <input type="text" name="peserta1" id="">
        <br>
        gender:  <input type="radio" id="Male" name="gender1" value="Male">
          <label for="Male">Male</label>
          <input type="radio" id="Female" name="gender1" value="Female">
          <label for="Female">Females</label><br>
        phone Number: <input type="text" name="notlep_peserta1" id="">
        <br>
        id line: <input type="text" name="line_peserta1" id="">
        <br>
        instagram: <input type="text" name="ig_peserta1" id="">
        <br>
        email: <input type="text" name="email_peserta1" id="">
        <br>
        photo: <input type="file" name="foto_peserta1" id="">
        <br>
        kartu pelajar: <input type="file" name="kartu_pelajar_peserta1" id="">
    </form>
    <h1>peserta 2</h1>
    <form name="form2" action="" method="post">
        nama: <input type="text" name="peserta2" id="">
        <br>
        gender:  <input type="radio" id="Male" name="gender2" value="Male">
          <label for="Male">Male</label>
          <input type="radio" id="Female" name="gender2" value="Female">
          <label for="Female">Females</label><br>
        phone Number: <input type="text" name="notlep_peserta2" id="">
        <br>
        id line: <input type="text" name="line_peserta2" id="">
        <br>
        instagram: <input type="text" name="ig_peserta2" id="">
        <br>
        email: <input type="text" name="email_peserta2" id="">
        <br>
        photo: <input type="file" name="foto_peserta2" id="">
        <br>
        kartu pelajar: <input type="file" name="kartu_pelajar_peserta2" id="">
    </form>
    <h1>peserta 3</h1>
    <form name="form3" action="" method="post">
        nama: <input type="text" name="peserta3" id="">
        <br>
        gender:  <input type="radio" id="Male" name="gender3" value="Male">
          <label for="Male">Male</label>
          <input type="radio" id="Female" name="gender3" value="Female">
          <label for="Female">Females</label><br>
        phone Number: <input type="text" name="notlep_peserta3" id="">
        <br>
        id line: <input type="text" name="line_peserta3" id="">
        <br>
        instagram: <input type="text" name="ig_peserta3" id="">
        <br>
        email: <input type="text" name="email_peserta3" id="">
        <br>
        photo: <input type="file" name="foto_peserta3" id="">
        <br>
        kartu pelajar: <input type="file" name="kartu_pelajar_peserta3" id="">
    </form>
    <h1>Pembayaran</h1>
    <form name="form4" action="" method="post">
        Nama pemilik akun bank:<input type="text" name="nama_akun_bank" id="">
        <br>
        nama bank:<input type="text" name="nama_bank" id="">
        <br>
        bukti pembayaran:<input type="file" name="bukti_bayar" id="">
    </form>
    <button onclick="submitAll()">Submit</button>
</body>
<script>
    function submitAll(){
        document.form1.submit();
        document.form2.submit();
        document.form3.submit();
        document.form4.submit();
    }
</script>
</html>