<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reservasi.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <title>Reserve A Table</title>
    </head>
    <style>
        body {
            background-color: #FAF2DA;
            font-family:roboto;
        }
    </style>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        <div class="navbar" style="background-color: #4A503D; height: 60px">
            <div class="container">
                <div class="row" style="text-align:left;">
                    <div class="col-sm-3" >
                        <img src="img/logo.png" style="text-align:left; width:70px; height:70px;margin-top:-13px;margin-left:-50px;">
                    </div>
                    <div class="col-sm-3" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px; margin-top: 7px;margin-left: -40px;">
                        <a>Home</a>
                    </div>
                    <div class="col-sm-3" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px; margin-top: 7px;margin-left: -10px;">
                        <a>Restaurants</a>
                    </div>
                    <div class="col-sm-3" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px; margin-top: 7px;margin-left: 45px;">
                        <a>Reservasiku</a>
                    </div>
                </div>
                <div class="col-sm-3" class="form-outline">
                    <input type="search" align="right" id="form1" class="form-control" placeholder="Search" style="margin-left:428px;margin-top: -15px;height:30px; border-radius:30px;font-size:15px; background-color: #FAF2DA" aria-label="Search" />
                </div>
                <div class="col-sm-5">
                    <img src="img/user.png" align="right" style="width:40px; height:40px;margin-top:-13px;margin-right:60px;">
                </div>
                <div class="col-sm-8" align="right" style="color: #FAF2DA;font-family: roboto;font-weight: bold; font-size:20px;margin-top:-75px;margin-left:450px;">
                    <a>Login</a>
                    </div>
                </div>
              </div>
        <div class="image" style="background-color: #E28F83; height: 880px;">
            <img src="img/waithere!.png" style="width: 1440px; height:1100px;">
          </div>
          <div class="pink" style="background-color:#E28F83; height: 110px;box-shadow: 5px 4px 3px #8E9775; margin-top: 220px;"></div>
        </div>
        <center>
            <img src="img/logo.png" style="width:1200px; height:1200px;margin-top:-250px;margin-left:-550px;position:absolute;opacity:0.3;">
            <h1><u>RESERVATION</u></h1>
        <div class="box" align="center"style="position:relative;">
            <div class="content" align="left" style="padding-left:50px;">
                <form><br><br><br>
                    <div class="dropdown">
                    <label for="nama" style="font-size:20px; font-weight:bold;">Restaurant Name: </label><br>
                    <select name="restaurant" >
                        <optgroup label="Brunch">
                          <option>Union</option>
                          <option>Pippo</option>
                          <option>SEL Gunawarman</option>
                        <optgroup label="Bar & Lounge">
                          <option>The Awan Lounge</option>
                          <option>Tipsy Monkey Bar & Lounge</option>
                          <option>Kilo Lounge Jakarta</option>
                        <optgroup label="Fine Dining">
                          <option>Amuz at SCBD</option>
                          <option>Namaaz Dining </option>
                          <option>Henshin at The Westin</option>
                        <optgroup label="Casual Dining">
                          <option>Bottega Ristorante</option>
                          <option>Le Quartier </option>
                          <option>Hause Rooftop</option>
                        <optgroup label="All You Can Eat">
                          <option>Kintan Buffet</option>
                          <option>Gyukaku Japanese BBQ</option>
                          <option>Shabu Hachi</option>
                          <option>3 Wise Monkeys</option>
                        <optgroup label="Live Music">
                          <option>SKYE</option>
                          <option>Piston Brake Bikers</option>
                     </select>
                    </div>
                     <div class="col-sm-3" >
                        <br><a style="font-size:20px; font-weight:bold;"> Date</a>
                        <input type="date" id="date" name="date" style="width: 340%;"><br><br>
                    </div>

                    <div class="dropdown">
                    <label for="time" style="font-size:20px; font-weight:bold;">Reservation Time : </label><br>
                    <select name="time" >
                        <option>10.00 - 12.00</option>
                        <option>13.00 - 15.00</option>
                        <option>16.00 - 18.00</option>
                        <option>19.00 - 21.00</option>
                     </select> <br>
                    </div>
                     <br><div class="col-sm-6" >
                        <a style="font-size:20px; font-weight:bold;">Guest</a><br>
                        <input  style="width: 170%;" placeholder="e.g. '1'"></input>
                    </div><br>
                    <div class="col-sm-6" >
                        <a style="font-size:20px; font-weight:bold;">Special Request</a><br>
                        <input  style="width: 170%;" placeholder="e.g., non - smoking area, outdoor, etc."></input>
                    </div><br>
                    <center>
                    <input style="border: none; margin-left:-50px;
                    color: rgba(250.00000029802322, 242.00000077486038, 218.00000220537186, 1);
                    font-size: 15px;
                    font-family: Roboto;
                    font-size:22px;
                    width: 50%;
                    border-radius: 10px;
                    margin-top: 30px;
                    background-color: #E28F83;" type="submit" id="reserve" name="reserve" value="RESERVE">
                </center>
                </form>
            </div>
        </div>
    </center>


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
