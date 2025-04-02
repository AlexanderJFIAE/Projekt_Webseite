<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBS Impressum</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ausgabe_style.css">
    <link rel="stylesheet" href="css/impressum_style.css">
    <link rel="stylesheet" href="css/navbar_style.css">
    <link rel="stylesheet" href="css/addBtn_style.css">
</head>
<body>
<div class="topnav" id="mytopnav">
    <a href="index.html" id="home">HOME</a>
    <a href="ausgabe.php" id="Sammelung">SAMMLUNG</a>
    <a href="formular.php" id="add">HINZUFÜGEN</a>
    <form action="formular.php">
        <input type="text" id="myinput" name="search" method="POST"> 
        <input type="submit" hidden>
    </form>
    <img src="svg/logoSneakers.svg" id="sneakersammelung">
</div>

<h1 class=impressum>IMPRESSUM</h1>
<div class="content">
    <div class="content-child">
        <p>
            Impressum<br>
            Information gemäß § 5 TMG
        </p>
        <p>
            Website Name:<br>
            My Beloved Sneakers
        </p>
        <p>
            Type of Business or Activity:<br>
            Providing a platform to save and<br>
            manage a personal list of purchased sneakers.
        </p>
        <p>
            Owner/Company Name:<br>
            PentagonGroup
        </p>
        <p>
            Legal Form:<br>
            Company
        </p>
        <p>
            Address:<br>
            Kastanienallee 25<br>
            16567 Mühlenbeck
        </p>            
        <p>
            Contact Information:<br>
            Email: pentagon@email.com
        </p>
    </div>
    <div class="content-child">
        <p>
            VAT-ID:<br>
            DE123456789
        </p>
        <p>
            Trade Register Entry:<br>
            Registered in the Commercial Register of the District Court of Berlin<br>
            Registration Number: HRB 987654
        </p>
        <p>
            Responsible for Content:<br>
            John Doe<br>
            Kastanienallee 25<br>
            16567 Mühlenbeck
        </p>
        <p>
            Privacy Policy:<br>
            For information on how we handle your data, please see our Privacy Policy.
        </p>
        <p>
            Terms and Conditions:<br>
            Please review our Terms and Conditions for more information on using our services.
        </p>
    </div>
</div>
<footer>
    <h3><a href="impressum.php">IMPRESSUM</a><h3>
    <div class="addBtnContainer">            
        <a href="formular.php">
            <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31 3.5C31 1.56702 29.433 0 27.5 0C25.567 0 24 1.56702 24 3.5V24H3.5C1.56702 24 0 25.567 0 27.5C0 29.433 1.56702 31 3.5 31H24V51.5C24 53.433 25.567 55 27.5 55C29.433 55 31 53.433 31 51.5V31H51.5C53.433 31 55 29.433 55 27.5C55 25.567 53.433 24 51.5 24H31V3.5Z" fill="#555555"/>
            </svg>
        </a>
    </div>
</footer>
</body>
</html>