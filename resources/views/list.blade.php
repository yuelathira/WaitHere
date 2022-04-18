<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/list.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Restaurant List</title>
  </head>
  <style>
      body {
          background-color : #FAF2DA;
          font-family:roboto;
      }
      pink .container .button {
          width : 272px;
          height : 69px;

      }
    </style>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <div class="navbar" style="background-color: #4A503D; height: 60px">
        <div class="container">
            <div class="row" style="text-align:left;">
                <div class="col-sm-3" >
                    <img src="img/home/logo.png" style="text-align:left; width:70px; height:70px;margin-top:-13px;margin-left:-50px;">
                </div>
                <div class="col-sm-3" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px; margin-top: 7px;margin-left: -40px;">
                    <a style="color: #FAF2DA; text-decoration: none" href="/">Home</a>
                </div>
                <div class="col-sm-3" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px; margin-top: 7px;margin-left: -10px;">
                    <a style="color: #FAF2DA; text-decoration: none" href="/list">Restaurants</a>
                </div>
                <div class="col-sm-3" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px; margin-top: 7px;margin-left: 45px;">
                    <a style="color: #FAF2DA; text-decoration: none" href="/reservasiku">Reservasiku</a>
                </div>
            </div>
            <div class="col-sm-3" class="form-outline">
                <input type="search" align="right" id="form1" class="form-control" placeholder="Search" style="margin-left:428px;margin-top: -15px;height:30px; border-radius:30px;font-size:15px; background-color: #FAF2DA" aria-label="Search" />
            </div>
            <div class="col-sm-5">
                <img src="img/user.png" align="right" style="width:40px; height:40px;margin-top:-13px;margin-right:60px;">
            </div>
            <div class="col-sm-8" align="right" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px;margin-top:-75px;margin-left:450px;">
                <a style="color: #FAF2DA; text-decoration: none" href="/login">Login</a>
                </div>
            </div>
          </div>
          <br><br>
          <div class="resto1" style="height: 290px;">
        <div class=container>
            <div class="row" style="text-align:left;">
            <div class="col-sm-3">
                <img src="images/bottega.png" style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left:225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
            </div>
            <div class="col-sm-6">
                <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                    BOTTEGA RISTORANTE
                </div> <br>
                <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Senin - Minggu</a>
                <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 10.00 - 21.00</a>

                <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                    <button type="button" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button>
                </div>
            </div>
                </div>
        </div>
        </div><br><br>

            <div class="resto2" style="height: 290px;">
                <div class=container>
                    <div class="row" style="text-align:left;">
                    <div class="col-sm-3">
                        <img src="images/skye.png" style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left:225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                    </div>
                    <div class="col-sm-6">
                        <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                            SKYE
                        </div> <br>
                        <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Senin - Minggu</a>
                        <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 10.00 - 21.00</a>

                        <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                            <button type="button" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button>
                        </div>
                    </div>
                        </div>
                </div>
                </div><br><br>

          <div class="resto3" style="height: 290px;">
        <div class=container>
            <div class="row" style="text-align:left;">
            <div class="col-sm-3">
                <img src="images/3wise.png" style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left:225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
            </div>
            <div class="col-sm-6">
                <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                    3 WISE MONKEY
                </div> <br>
                <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Senin - Minggu</a>
                <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 10.00 - 21.00</a>

                <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                    <button type="button" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button>
                </div>
            </div>
                </div>
        </div>
        </div><br><br>
        <div class="resto4" style="height: 290px;">
            <div class=container>
                <div class="row" style="text-align:left;">
                <div class="col-sm-3">
                    <img src="images/dearbutter.png" style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left:225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                </div>
                <div class="col-sm-6">
                    <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                        DEAR BUTTER
                    </div> <br>
                    <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Senin - Minggu</a>
                    <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 11.00 - 21.00</a>

                <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                    <button type="button" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button>
                </div>
                    </div>
            </div></div>
            </div><br><br>
            <div class="resto5" style="height: 290px;">
                <div class=container>
                    <div class="row" style="text-align:left;">
                    <div class="col-sm-3">
                        <img src="images/delicious.png" style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left:225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                    </div>
                    <div class="col-sm-6">
                        <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                            DELICIOUS CAKE & BAKERY
                        </div> <br>
                        <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Senin - Minggu</a>
                        <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 09.00 - 20.00</a>

                        <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                            <button type="button" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button>
                        </div>
                    </div>
                        </div>
                </div>
                </div><br><br>
                <div class="resto6" style="height: 290px;">
                    <div class=container>
                        <div class="row" style="text-align:left;">
                        <div class="col-sm-3">
                            <img src="images/ecaps.png " style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left: 225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                        </div>
                        <div class="col-sm-6">
                            <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                                ECAPS
                            </div> <br>
                            <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Senin - Minggu</a>
                            <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 09.00 - 20.00</a>

                            <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                                <button type="button" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button>
                            </div>
                        </div>
                            </div>
                    </div>
                    </div>
        <br><br>
                <div class="resto7" style="height: 290px;">
                    <div class=container>
                        <div class="row" style="text-align:left;">
                        <div class="col-sm-3">
                            <img src="images/union.png" style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left:225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                        </div>
                        <div class="col-sm-6">
                            <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                                UNION
                            </div> <br>
                            <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Monday - Thursday</a>
                            <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 10.00 - 21.00</a>

                            <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                                    <button type="button" onclick="window.location='http://127.0.0.1:8000/union'" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button>
                            </div>
                        </div>
                            </div>
                    </div>
                    </div><br><br>
                        <div class="resto8" style="height: 290px;">
                            <div class=container>
                                <div class="row" style="text-align:left;">
                                <div class="col-sm-3">
                                    <img src="images/awan.png" style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left:225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                                </div>
                                <div class="col-sm-6">
                                    <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                                        THE AWAN LOUNGE
                                    </div> <br>
                                    <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Tuesday - Sunday</a>
                                    <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 16.00 - 21.00</a>

                                    <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                                        <button type="button" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button>
                                    </div>
                                </div>
                                    </div>
                            </div>
                            </div><br><br>
                                    <div class="resto9" style="height: 290px;">
                                        <div class=container>
                                            <div class="row" style="text-align:left;">
                                            <div class="col-sm-3">
                                                <img src="images/namaaz.png" style="text-align:left; width:250px; height:250px;margin-top:30px;margin-left:225px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                                            </div>
                                            <div class="col-sm-6">
                                                <div style="width: 500px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 230px; margin-top: 30px;margin-bottom: 15px; box-shadow: 7px 8px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                                                    NAMAAZ DINING
                                                </div> <br>
                                                <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> Tuesday - Saturday</a>
                                                <a style="color:#4a503d; margin-left: 305px; font-size: 18px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;"> 19.00 - 23.00</a>

                                                <div class="col-sm-4" style="width: 130px; height: 40px; background-color: #8e9775; text-align: center; margin-left: 603px; margin-top: 55px; box-shadow: 6px 7px 4px #4a503d;border-radius:10px; font-size:20px; font-weight: bold; letter-spacing: 5px; word-spacing: 10px;">
                                                    <button type="button" class="btn" style="color: #FAF2DA; font-size: 18px;">More Details</button>
                                                </div>
                                            </div>
                                                </div>
                                        </div>
                                        </div>
                                    <br><br>

                                    <div class="footer" style="background-color:#4A503D; height:250px;color: #FAF2DA; margin-top:10px; padding-top: 5px;">
                                        <br>
                                        <div class="container">
                                            <div class="row" style="text-align:left;">
                                                <div class="col-sm-4" style="padding:10px;" >
                                                    <h2 style="font-size: 25px; text-shadow:4px 3px 2px #8E9775; margin-bottom: 15px;">CREDIT BY </h2>
                                                    <a style="font-size: 19px;">Nadine Annisa Heartman</a><br>
                                                    <a style="font-size: 19px;">Milyanda Vania</a><br>
                                                    <a style="font-size: 19px;">Diandha Carnatia Rizsyifaa</a><br>
                                                    <a style="font-size: 19px;">Ruth Rebecca Ovelin</a><br>
                                                    <a style="font-size: 19px;">Yuela Thahira</a><br>
                                                </div>
                                                <div class="col-sm-4" style="padding:10px;">
                                                    <h2 style="font-size: 25px; text-shadow:4px 3px 2px #8E9775; margin-bottom: 15px;">CUSTOMER CARE </h2>
                                                    <a style="font-size: 19px;">Email</a><br>
                                                    <i class="fas fa-envelope"></i><a> waithere@gmail.com</a><br><br>
                                                    <a style="font-size: 19px;">Phone Number</a><br>
                                                    <i class="fas fa-phone"></i> <a>    0857171162617</a><br>
                                                </div>
                                                <img src="img/logo.png" style=" width:270px;height:270px;margin-top:-230px;margin-left:1070px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer2" style="background-color:#8E9775; height:30px;"></div>
                                </div>
                              </body>
</html>
