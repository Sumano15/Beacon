<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  </style>
</head>
<body>
  <table>
    <tr>
      <th>nama Tim</th>
      <th>asal Sekolah</th>
      <th>asal Kota</th>
      <th>coin</th>
      <th>status</th>
      <th>action</th>
    </tr>
      @foreach ($datas as $item=>$value)
      <tr> 
        <td>{{ $value->nama_tim}}</td>   
        <td>{{ $value->asal_sekolah}}</td>   
        <td>{{ $value->asal_kota}}</td>    
        <td>{{ $value->coin}}</td>    
        <td>{{ $value->status==0?"Belum Di konfirmasi":"sudah Di konfirmasi"}}</td>   
        <td><a href="{{ url('tim/confirm/' . $value->id) }}"><button>kofirmasi</button></a></td>       
      </tr>
        @endforeach
  </table>
</body>
</html>