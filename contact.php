<?php include 'mail.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Montserrat:ital,wght@0,200;1,200&family=Playfair+Display&family=Poppins:ital,wght@1,300&display=swap"
      rel="stylesheet"> 
  </head>
  <body> 

          <nav class="navbar">
            <a class="logo"><span>SHITS</span>& TRICKS</a>
            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="navbar-links">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="apropos.html">ABOUT</a></li>
            </ul>
            </div>
          </nav>

<?php echo $alert ;?>

<div class="contact-section">

  <h1 class="sent-notification">Contactez Nous</h1>
     <div class="border">  </div> 
      <form  onclick="sendEmail(); reset();" class="contact-form"  method="post">
        <input type="text" name ="name"  class="nom"  placeholder="Votre nom" required>
        <input type="email"name ="email" class="mail" placeholder="Votre mail" required >
        <input type="text" name ="phone" class="tel" placeholder="Votre numero de télephone" required >
        <textarea name =message class="area" placeholder="Votre message"></textarea>
        <input type="submit"  class= "contact-form-btn" value ="Envoyez">
      </form>
</div>

     <script type="text/javascript">
           if(window.history.replaceState){
              window.history.replaceState(null, null, window.location.href);
           }
      </script>


<    <footer class="footer">
        <div class="contner">
            <div class="ro">
                <div class="footer-col">
                    <h4>SURVEY</h4>
                    <p></p>
                </div>
                <div class="footer-col">
                    <h4>FOLLOW US</h4>
                    <div class="social-links">
                        <a href=><i class="fab fa-whatsapp"></i></a>
                        <a href=><i class="fab fa-instagram"></i></a>
                        <a href=><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <p>© 2023 SHITS & TRICKS, Powered by Jow & Will</p>
                </div>
            </div>
        </div>
    </div>
   </footer>
      <script src="script.js"></script>
  </body>
</html>