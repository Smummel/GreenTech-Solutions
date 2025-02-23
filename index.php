<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTech Solutions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <div id="logo"><img src="logo.png" alt="GreenTech Solutions Logotype"></div>
        <div id="name">GreenTech Solutions</div>
        <div id="menu">
            <div onclick="tjansterScroll()">Tjänster</div>
            <div onclick="bloggSroll()">Blogg</div>
            <div onclick="bokaScroll()">Boka Konsultation</div>
        </div>
    </div>
    <div id="hero">
        <div id="calltoaction" onclick="bokaScroll()">Boka konsultion nu!</div>
        <div id="description">
            <p>Vi hjälper privatpersoner och företag att sänka energiförbrukningen med smarta lösningar. Boka en konsultation gratis redan nu!</p> 
        </div>
        <img src="background.png" alt="">
        
    </div>
    <div id="omoss">
        <div id="text"><h1>Om oss</h1><p>GreenTech Solutions är ett innovativt företag som brinner för att skapa en hållbar framtid genom smarta energilösningar. Vi erbjuder produkter och tjänster som hjälper privatpersoner och företag att minska sin energiförbrukning, sänka sina kostnader och bidra till en grönare planet. Vår vision är att bli en ledande aktör inom hållbar energi och att inspirera fler att ta steget mot en klimatsmart livsstil. Med fokus på kvalitet, innovation och kundnöjdhet strävar vi efter att göra hållbarhet enkelt och tillgängligt för alla. Bland våra styrkor ingår:
        </p></div>
        <div id="styrkor">
            <div id="c1"><h1>♻️ Hållbara lösningar</h1></div>
            <div id="c2"><h1>⚡ Energieffektivitet</h1></div>
            <div id="c3"><h1>💡 Innovativ teknik</h1></div>
        </div>
    </div>
    <div id="tjanster">
        <h1>Våra tjänaster</h1>
        <div id="icons">
            <div id="1" class="icon"><p>Solpaneler</p><img src="solarpanel.png" alt=""></div>
            <div id="2" class="icon"><p>Energirådgivning</p><img src="rådgivning.png" alt=""></div>
            <div id="3" class="icon"><p>Smarta Energisystem</p><img src="energisystem.png" alt=""></div>
            <div id="4" class="icon"><p>Installation & Service</p><img src="installation.png" alt=""></div>
        </div>
    </div>
    <div id="blog">
        <h1>Bloggsida</h1>
        <form action="" method="POST">
            <input type="text" id="messagebar" name="comment" placeholder="Skriv en kommentar!">
            <input type="submit" name="btn">
        </form>
        <?php 
            if(isset($_POST['btn'])){
                echo 'kommentar: '.($_POST['comment']);
            }
        ?>
    </div>
    <div id="kontakt">
        <h1>Hör gjärna av dig till oss!</h1>
        <form id="theform" action="" method="POST">
            <input type="text" placeholder="Förnamn:" required>
            <input type="text" placeholder="Efternamn:" required>
            <input type="text" placeholder="E-post:" required>
            <input type="text" placeholder="Telefon:" required>
            <input type="text" placeholder="Meddelande:" id="message" required>
            <input type="submit" placeholder="Skicka" id="send">
            <h2>GreenTech Solutions AB</h2>
            <h3>Grönvägen 12</h3>
            <h3>114 47 Stockholm, Sverige</h3>
        </form>
    </div>
    <div id="footer">© GreenTech Solutions 2025</div>
</body>
<script src="script.js"></script>
</html>