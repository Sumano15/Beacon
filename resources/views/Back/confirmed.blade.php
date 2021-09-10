<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  {{-- <link rel="stylesheet" href="{{ asset('') }}"> --}}
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

html {
    position: relative;
    min-height: 100%;
}

body {
    padding-top: 4.5rem;
    margin-bottom: 4.5rem;
}

.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 3.5rem;
  line-height: 3.5rem;
  background-color: #ccc;
}

.nav-link:hover {
  transition: all 0.4s;
}

.nav-link-collapse:after {
  float: right;
  content: '\f067';
  font-family: 'FontAwesome';
}

.nav-link-show:after {
  float: right;
  content: '\f068';
  font-family: 'FontAwesome';
}

.nav-item ul.nav-second-level {
  padding-left: 0;
}

.nav-item ul.nav-second-level > .nav-item {
  padding-left: 20px;
}

@media (min-width: 992px) {
  .sidenav {
    position: absolute;
    top: 0;
    left: 0;
    width: 230px;
    height: calc(100vh - 3.5rem);
    margin-top: 3.5rem;
    background: #343a40;
    box-sizing: border-box;
    border-top: 1px solid rgba(0, 0, 0, 0.3);
  }

  .navbar-expand-lg .sidenav {
    flex-direction: column;
  }

  .content-wrapper {
    margin-left: 230px;
  }

  .footer {
    width: calc(100% - 230px);
    margin-left: 230px;
  }
}

.plusminus-container {
  max-width: 200px;
  min-width: 100px;
  /* margin: 20vh auto; */
}

.grid-container {
  display: grid;
  grid-template-columns: 40px auto 40px; 
  height: 40px;
  line-height: 35px;
  border: 1px solid rgba(0, 0, 0, .25);
  border-radius: 3px;
  box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
  font-size: 1.5rem;
  user-select: none;
}

.grid-item-left {
  background: #f3f3f3;
  color: #555;
  text-align: center;
  border-right: 1px solid rgba(0, 0, 0, .25);
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

.grid-item-left:hover {
  box-shadow: 0px 0px 2px rgba(0,0,0,0.8);
  border-right: 1px solid #c6c6c6;
  cursor: pointer;
  z-index: 1;
}

#grid-item-center input {
  box-sizing: border-box;
  color: black;
  width: 100%;
  height: ;
  padding: 6px 10px;
  margin: 0;
  font-size: 1.5rem;
  overflow: hidden;
  border: 0;
  text-align: center;
}

.grid-item-right {
  background: #f3f3f3;
  color: #555;
  text-align: center;
  border-left: 1px solid rgba(0, 0, 0, .25);
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}

.grid-item-right:hover {
  box-shadow: 0px 0px 2px rgba(0,0,0,0.8);
  cursor: pointer;
}
.sidenav1 {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 5vh;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav1 a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav1 a:hover {
  color: #f1f1f1;
}

.sidenav1 .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav1 {padding-top: 15px;}
  .sidenav1 a {font-size: 18px;}
}
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Sidebar Nav</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarCollapse"
      aria-controls="navbarCollapse"
      aria-expanded="false"
      aria-label="Toggle navigation"
      onclick="openNav()"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
        <li class="nav-item active">
          <a class="nav-link" href="/back">Team List<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/confirmed">Confirmed<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div id="mySidenav" class="sidenav1">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="nav-link" href="/back">Team List<span class="sr-only"></span></a>
    <a class="nav-link" href="/confirmed">Confirmed<span class="sr-only"></span></a>
  </div>

  <main class="content-wrapper">
    <div class="container-fluid">
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
            <td>
              <button type="button" id="edit-coin" class="btn btn-primary" data-id="{{ $value->id }}" data-coin="{{ $value->coin }}">
                Edit Coin
              </button>
            </td>       
          </tr>
            @endforeach
      </table>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('coin.update') }}" method="post">
          @csrf
          <input type="hidden" name="id" value="" id="row-id">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal Edit Poin</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <center>
                <div class="plusminus-container">
                  <div class="grid-container">
                    <div class="grid-item-right">–</div>
                    <div id="grid-item-center">
                      <input type="text" name="coin" id="counter" value="1" class="counter">
                    </div>
                      <div class="grid-item-left">+</div>
                    </div>
                </div>
              </center>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <Script>

    document.querySelector('.grid-item-left').addEventListener('click', function(){
      document.querySelector('.counter').value++;  
    })

    document.querySelector('.grid-item-right').addEventListener('click', function(){
      document.querySelector('.counter').value--;
    });

    var editModal = new bootstrap.Modal(document.getElementById("staticBackdrop"), {
      keyboard: false
    });

    var editButton = document.getElementById("edit-coin");
    editButton.addEventListener('click', function(){
      var id = this.dataset.id;
      var coin = this.dataset.coin;
      document.getElementById("row-id").value = id;
      document.getElementById("counter").value = coin;
      editModal.show();
    });

    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

  </Script>
</body>
</html>