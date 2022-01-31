<?php include_once 'app/content/header.php'; ?>
    <!-- baneriai -->
    <section class="main-banner banner-slides fade">
    <?php
         if(isset($_GET['aciu'])) { ?>
			<div class="contact-pranesimas">Ačiū Jūsų žinutę gavome! Netrukus susisieksime.</div>			
	<?php } ?>	
     <img src="app/images/banner3.jpg" alt="baneris">
        <div class="container flex-container">           
            <div class="centered-text flex-container">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a> 
                <div class="tekstas">
                    <h1>Pirminė diagnostika - nemokamai!</h1>
                    <p>Atliksime Jūsų įrenginio pirminę diagnostiką visiškai nemokamai, kad įvertinti įrenginio būklę.</p>
                </div>               
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>        
        </div>
    </section>
    <section class="main-banner banner-slides fade">
        <img src="app/images/banner2.jpg" alt="baneris">
           <div class="container flex-container">           
               <div class="centered-text flex-container">
                   <a class="prev" onclick="plusSlides(-1)">&#10094;</a> 
                   <div class="tekstas">
                       <h1>Duomenų atstatymas</h1>
                       <p>Mes galime atstatyti Jūsų duomenys iš sugedusiu HDD, SSD, USB raktų, SD atminties kortelių bei perkelti į naują atmintį!</p>
                   </div>               
                   <a class="next" onclick="plusSlides(1)">&#10095;</a>
               </div>             
           </div>
       </section>
       <!-- Services -->
       <section class="services">
           <div class="container">
                <div class="section-heading">
                    <h2>Kompiuterių remontas Vilniuje</h2>
                    <p>Taisome visų kompiuterių gamintojų – Apple, Dell, Lenovo, Samsung, Toshiba, Asus, Acer, HP, Clevo, Aorus, Multicom, Huawei, Xiaomi, Gigabyte, Medion, Fujitsu, Sony VAIO,  ir kt. nešiojamus ir stacionarius kompiuterius. Turime virš <strong>6 metų patirties</strong> kompiuterių remonte, todėl galite būti tikri, kad Jūsų įrenginys bus taisomas profesionalų rankomis. Galime pasidžiaugti, kad per ilgus darbo metus savo klientams esame suremontavę virš 12.000 įrenginių. </p>
                </div>
                <div class="services-content flex-container">
                    <div class="info">
                        <i class="far fa-money-bill-alt"></i>
                        <h3>Kompiuterių supirkimas</h3>
                        <p>Turite nenaudojamą nešiojamą kompiuterį? Mes iš Jūsų nupirksime seną, neveikiantį ar tiesiog pabodusį nešiojamą kompiuterį.</p>
                    </div>
                    <div class="info">
                        <i class="fas fa-tools active"></i>
                        <h3>Kompiuterių remonto kainos</h3>
                        <p>Mūsų kompetetingi meistrai visada pasiūlys geriausią kokybę už palankiausią kainą. Susisiekite su mumis ir mes nurodysime Jums tikslias kompiuterio remonto darbų kainas.</p>
                    </div>
                    <div class="info">
                        <i class="fas fa-fire"></i>
                        <h3>Kompiuteris labai kaista?</h3>
                        <p>Šią problemą galime sutvarkyti greitai ir nebrangiai. Susisiekite su mumis ir mes išvalysime Jūsų kompiuterio aušinimo sistemą.</p>
                    </div>
                </div>  
            </div>
       </section>
       <!-- PATARIMAI KLIETAMS -->
       <section class="patarimai">
           <div class="container ">
               <div class="patarimai-heading">
                    <h2>Mūsų patarimai Jums</h2>
               </div>
                <div class="patarimai-content flex-container">
                    <div class="galery-patarimai">
                        <img src="app/images/patarimas2.jpg" alt="Patarimo nuotrauka">
                        <h4>Kompiuterio baterija išsikrauna per greitai – ką daryti?</h4>
                        <p>Įsivaizduokite situaciją: atsinešate užkandžių, įsitaisote sofoje bei ketinate įsijungti mėgstamą serialą. Tačiau tuomet jūsų kompiuterio ...</p>
                    </div>
                    <div class="galery-patarimai">
                        <img src="app/images/patarimas3.jpg" alt="Patarimo nuotrauka">
                        <h4>Kaip blokuoti įkyrias reklamas interneto svetainėse – Adblock Plus įdiegimas</h4>
                        <p>Kas yra Adblock Plus? Adblock Plus yra vienas iš populiariausių naršyklių plėtinių, skirtų populiariausioms naršyklėms ...</p>
                    </div>
                    <div class="galery-patarimai">
                        <img src="app/images/patarimas4.jpg" alt="Patarimo nuotrauka">
                        <h4>Kodėl dabar geriausias laikas atnaujinti kietąjį diską į SSD</h4>
                        <p>Laikas pasikeisti kietąjį diską į SSD, jei vis dar naudojate mechaninį diską savo kompiuteryje. ...</p>
                    </div>
                    <div class="galery-patarimai">
                        <img src="app/images/patarimas5.jpg" alt="Patarimo nuotrauka">
                        <h4>Kaip neleisti Windows 10 siųstis atnaujinimų automatiškai</h4>
                        <p>Kompiuteriai su Windows 10 operacine sistema automatiškai tikrina, ar nėra atnaujinimų ir instaliuoja bet kuriuos ...</p>
                    </div>
                    <div class="galery-patarimai">
                        <img src="app/images/patarimas6.jpg" alt="Patarimo nuotrauka">
                        <h4>Nešiojamo kompiuterio su Windows operacine sistema baterijos veikimo prailginimas</h4>
                        <p>Dažnai linksniuojame savo išmaniųjų telefonų baterijos veikimo laiką, tačiau neprisimename, kad dauguma nešiojamų kompiuterių baterijų ...</p>
                    </div>
                    <div class="galery-patarimai">
                        <img src="app/images/patarimas.jpg" alt="Patarimo nuotrauka">
                        <h4>Ką daryti apliejus kompiuterį?</h4>
                        <p>Tikriausiai kiekvienas yra susidūręs su situacija, kuomet netyčia būna apipiltas savo ar kito žmogaus kompiuteris. ...</p>
                    </div>
                </div>
            </div>   
       </section>
       <!-- Partnerių logotipai Tiny Slider-->
       <section class="partneriai">
            <div class="container">  
                <div class="partneriai-slider flex-container">
                    <div>
                        <img src="app/images/microsoft_logo.png" alt="Microsoft logo">
                    </div>
                    <div> 
                        <img src="app/images/acer_logo.png" alt="Acer logo">
                    </div>
                    <div>
                        <img src="app/images/apple_logo.png" alt="Apple logo">
                    </div>
                    <div>
                        <img src="app/images/lenovo_logo.png" alt="Lenovo logo">
                    </div>
                    <div>
                        <img src="app/images/samsung_logo.png" alt="Samsung logo">
                    </div>      
                </div>
           </div>
       </section>
       <!-- Kontaktinė forma -->
        <section class="contact">
            <div class="container">
                <div class="section-heading">
                    <h2>Parašykite mums</h2>
                    <div class="section-content">
                    <form class="contact-form" action="app/includes/contact.inc.php" method="POST">
                        <div class="input-row">
                            <input type="text" name="vardas" placeholder="įveskite savo vardą">
                            <input type="email" name="elpastas" placeholder="įveskite savo el. paštą">
                        </div>
                        <textarea name="zinute" placeholder="įveskite savo žinutę"></textarea>
                        <input class="btn" type="submit" name="kliento_zinute" value="Siųsti">
                    </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once 'app/content/footer.php'; ?>