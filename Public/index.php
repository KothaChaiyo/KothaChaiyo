
<?php

include('header.php');

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotha Chaiyo-Ultimate Property Finder</title>
    <link rel="icon" href="./Images/kothaChaiyoLogo.png">

    <!-- for general styling of components  -->
    <link rel="stylesheet" href="./style/style.css">


    <!-- for animation of components -->
    <link rel="stylesheet" href="./style/animation.css">

    <script src="./script/index.js" defer></script>




</head>
<body>

    <!-- navbar section  -->

    <!-- <script src = "./script/header.js"></script> The code of Navbar section has been moved to Header.js and Imported -->
    <script src="./script/header.js"></script>
  
    <!-- home section -->
      
    <section class="hidden" id="home">

            <div id="welcomeMessageContainer">
                <p> <span id="welcomeTo"> Welcome to</span> <br><span id="RoomFinder">KothaChaiyo</span><br><span id="titleMessage">We make the process of finding flats/rooms Easier. <br> </span> <span id="getStartedNow">Get Started Now</span></p>
            </div>

            <div id="buttonContainer">
                <button class="joinButton" id="joinAsFinder" onclick="window.location.href='login.php'">Find Room</button>

                <button class="joinButton" id="joinAsRenter"  onclick="window.location.href='login.php'">Rent Room</button>
            </div>
    </section>



    <!-- Why us? section  -->
    <section class="hidden" id="whyUs">
        <div id="title">Why Us?</div>

        <div id="imgContainer">
            <img src="./Images/NO MIDDLEMAN (1).png" alt="">
            <img src="./Images/DIRECTCONTACT(1).png" alt="">
            <img src="./Images/HASSLEFREE.png" alt="">

        </div>
    </section>


    <!-- FAQs section  -->
    <section class="hidden" id="faq">
        <div id="title">FAQs</div>

        <div id="faqContainer">
            <div class="question">Do I have to pay any service charge to use the platform?<span>&#8964;</span></div>
            <div class="answer hidden">No,the platform is free! We don't charge any amount from our users.</div>
          
            <div class="question">Can I have a direct contact with the owner or are there any brokers involved?<span>&#8964;</span></div>
            <div class="answer hidden">Yes, property owners can directly list their properties on rent in the platform. </div>
          
            <div class="question">How can I know about the exact location of the property?<span>&#8964;</span></div>
            <div class="answer hidden">We have interactive maps on our platform for your ease. You can easily find out the exact location of the property listed if you want to have a visit before making your decision. </div>
            <!-- Add more question-answer pairs as needed -->

        </div>
    </section>


    <section id="footer">
        <div>&copy;2023 Kotha Chaiyo</div>
    </section>

</body>
</html>
