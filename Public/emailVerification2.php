<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP page</title>
    <link rel="stylesheet" href="./style/animation.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/emailVerification2.css">
    
    <script src="./script/index.js" defer></script>
          <!-- This includes all the Navbar and relevant heading section-->
          <script src="./script/header.js"></script>
</head>
<body>
    <div class="container hidden"><br>
        <h2 class="title-h2">Kotha Chaiyo</h2>
        <h3 class="title-h3">Ultimate Property Finder</h3><hr><br>
        <form action="" method="post">
            <label for="container-emailV"><h2 class="container-h2">Enter OTP sent to your email:</h2></label>
            <input type="email" name="" id="container-emailV" required><br><br>
        </form>
        <button class="container-button" onclick="window.location.href='passwordCreation.php'">Verify</button>
    </div>
</body>
</html>