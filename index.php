<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- <link rel="stylesheet" type="text/css" href="css/navbar.css">-->

    <title>Basic Banking System</title>
    <style type="text/css">
        button{
                position: relative;
                display: inline-block;
                padding: 12px 36px;
                margin: 10px 0;
                color: #fff;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 18px;
                letter-spacing: 2px;
                border-radius: 8px;
                background-image: linear-gradient(315deg, #00FFFF 10%, #0000FF 74%);
               
            }
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
          <div >
                <div >
                   <center> <h1  class="neonText">Welcome to Basic Banking System</h1></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>


       



        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
               
                <img src="img/user.png" class="img-fluid" style="margin-top:5px;height:50%">
                <br><br>
                <a href="user.php"><button>All Users</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/transfer.jfif" class="img-fluid" style="border-radius:10%;">
                <br><br>
                <a href="transfer.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act">
                <img src="img/tr_history.png" class="img-fluid" style="margin-top:50px;height:50%;border-radius:50%;">
                <br><br>
                <a href="history.php"><button >Transaction History</button></a>
            </div>
        </div>
    </div>
    
    
    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Farheen Bano</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
