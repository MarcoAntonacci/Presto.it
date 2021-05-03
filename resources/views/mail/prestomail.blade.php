<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body style="background-color:#ffd9a3;">
    <div class="container-fluid" style="background-color:#ffd9a3;">
        <div class="row ">
            <div class="col-12" style="display:flex; justify-content: center;">
                <img src="http://127.0.0.1:8000/img/presto-logo.png" alt="" class="img-fluid mx-auto" style="width: 100px;">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <h1 class="fs-1 my-5 fw-bold" style="color:#ff9500;  font-size: 24px; font-family:'Righteous', cursive">Benvenuto in Presto {{$contact['name']}}</h1>
              <p class="fs-5" style=" font-family: 'Ubuntu', sans-serif">Ti ringraziamo per averci contattato, valuteremo la tua candidatura quanto prima.</p>
            </div>
         </div>
            <div class="row">
                <div class="col-12">
                    <p class="fs-5" style=" font-family: 'Ubuntu', sans-serif"><b> Riepilogo del messaggio:</b> {{$contact['message']}} </p>
                </div>
            </div>
            <div style="height: 200px;"></div>
            <div style="display:flex; flex-wrap: wrap; justify-content: center; text-align: center;">
                <div style="color:#ff9500;">
                    <p class="fs-5" style=" font-family: 'Ubuntu', sans-serif">© PRESTO.it S.p.A.</p>
                    <p class="fs-5" style=" font-family: 'Ubuntu', sans-serif">Via a caso , 70010, Bari (BA) - Partita Iva 1234567890</p>
                    <p>- Copiright®</p>
                </div>
            </div>

    </div>
</body>
</html>
