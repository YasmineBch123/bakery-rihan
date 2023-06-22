<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
 <!-- start nav bar -->
    <nav>
        <ul>
                <li><a href="index.php">About me</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Cakes</a></li>
                <li><a href="">Make a cake</a></li>
                <li><a href="">Log in</a></li>
             

        </ul>
    </nav>

<div id="divcontact">
    <div id="title">
        contact 
    </div>
    <div id="yellowbox"></div>
</div>
<!-- eind nav bar  -->

<!--start contact form -->
<div class="container">
    <form action="contact.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>
<!-- end contact form -->

<!-- informatie box -->
<div id="info"></div>
<div id="behindinfo"></div>
<!-- end informatie box -->

<!-- contact info -->
<div>
     <div id="adresinfo"></div>
         <div id="contactinfo"> delivery locations </div>
             <h1 class="">Maastricht<br>Heerlen<br>Sittard</h1>
        
</div>
<!-- end contact info-->


</body>
</html>