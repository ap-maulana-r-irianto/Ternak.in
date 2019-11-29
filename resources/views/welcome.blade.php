<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TERNAK.IN</title>
        <link rel="icon" type="image/png" href="{{asset('dist/img/sheep.png')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style type="text/css">

        #space-sheep {
            font-size: 130px;
        }

        #space-mouton {
            color:whitesmoke;
            min-height: 70vh;
            width: 100%;
            position: relative;
            background-size: cover;
            background-position: center;
            background-image: url("assets/images/goat.jpg");
        }

        #tagline{
            padding-top: 200px;
        }


        .button-reboot-blue {
            font-size: 30px;
            padding: 22px 51px;
            margin-bottom: 20px;
            border: 1px solid #1aa7ff;
            box-shadow: 1px 1px 1px #1aa7ff;
            border-radius: 10px;
            cursor: pointer;
            color: white;
            background-color: #1aa7ff;
            box-shadow: 1px 1px 1px;
        }

        .button-reboot-blue:hover{
            background-color: white;
            transition: color 0.3s ease;
            border: 1px solid white;
            color: #1aa7ff;
            box-shadow: 1px 1px 1px white;
        }

        i {
            color: white;
        }

        .steps {
            border: 1px solid rgba(211, 211, 211, 0.49);
            padding: 30px;
            margin: 10px;
            background-color: rgb(26, 167, 255);
            border-radius: 20px;
            color: white;
            box-shadow: 3px 3px 3px #b2b2b3;
        }

        .steps:hover{
            background-color: rgb(27, 142, 214);
        }

        #send {
            font-size: 45px;
            padding: 40px;
        }

        .padded{
            padding-top: 20px;
            padding-bottom: 100px;
        }

        .jumbotron {
            background-color: #fbfbfb;
      padding-bottom: 0px;
      margin-bottom: 0px;
        }

        #apply {
            margin: 100px;
            background-color: rgba(241, 239, 239, 0.31);
            padding: 30px 10px;
            box-shadow: 1px 1px 1px lightgrey;
        }

        .why {
            height: 400px;
            border-radius: 100%;
            border: 5px solid rgb(26, 167, 255);
            margin: auto;
        }

    #footer {
      color: #8e8e8e;
      background-color: #c3e8ff;
      padding: 40px;
    }

    .vertical-center {
      height: 400px;
      display: flex;
      justify-content: center;
      flex-direction: column;
  }

    </style>
    </head>
<!-- Header -->
    <div id="space-mouton">
        <div class="container">
            <div class="text-center" id="tagline">
                <h1 id="space-sheep">TERNAK.IN</h1>
                <br>
                <a href="#apply"><button class="btn-default btn button-reboot-blue">LOGIN</button></a>
                <br>
                <p>Silahkan Login Terlebih Dahulu</p>
            </div>
        </div>
    </div>

    <!-- Send a sheep -->
    <div class="padded">
        <h1 class="text-center" id="send">Kemudahan Investasi Kambing Anda</h1>
        <br>
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-6 col-md-4">
                    <div class="steps">
                        <i class="fa fa-mouse-pointer fa-4x" aria-hidden="true"></i>
                        <h2>Pilih Ternak </h2>
                        <p>Kamu bisa memilih ternak dari katalog yang ada. Semua informasi terkait ternak bisa kamu lihat pada deskripsi ternak.</p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="steps">
                        <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                        <h2>Kelola Ternak</h2>
                        <p>Proses penitipan dan penggemukan bobot hewan ternak kepada. peternak. Peternak akan merawat dan melaporkan perkembangan ternak secara berkala.</p>
                    </div>
                </div>
                <div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-4">
                    <div class="steps">
                        <i class="fa fa-rocket fa-4x" aria-hidden="true"></i>
                        <h2>Jual Ternak</h2>
                        <p>Hewan ternak yang siap dan ingin dijual dapat dipasarkan di Ternak.in dengan pembagian keuntungan antara investor dan peternak sebesar 50:50.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Why send a sheep -->
    

            
      <br>
      <!-- Footer -->
      <div id="footer" class="text-center">
        <p>Copyright © 2019 MRafaelIr. All rights reserved.</p>
        Contact: <a href="mailto:spacesheep@mailinator.com">maulanarafael36@gmail.com</a>
      </div>
        </body>
        </html>
