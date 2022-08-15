<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/image2.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/event.css">
    <link rel="stylesheet" href="css/detailed.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/payment.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
    <!--Navigation Bar-->
    <header>
        <div class="nav-container">
            <img src="images/homepage/Little & Little Logo (ngang) 1.png" class="logo">
            <ul class="nav-bar">
                <li><a href="/"> Trang chủ</a></li>
                <li><a href="/event"> Sự kiện</a></li>
                <li><a href="/contact"> Liên hệ</a></li>
            </ul>
            <div class="nav-contact">
                <div class="nav-img">
                    <img src="images/homepage/Vector (Stroke).png" class="nav-img-1">
                </div>
                <div class="telephone">0123456789</div>
            </div>
        </div>
      </header> 
    
    <!--Background-->
      
    @yield('contents')
  </body>
</html>