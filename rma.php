<?php include_once 'app/content/header.php'; ?>
<!-- RMA SEARCH PAGE -->
<section class="rma">
    <div class="container">
        <div class="rma-heading">
            <h2>Patikrinti remonto būseną</h2>
            <p>Įveskite savo telefono numerį ir RMA numerį ir galėsite peržiūrėti įrenginio remonto būseną</p>
        </div>
        <div class="rma-content">
            <form class="rma-form" action="" method="POST">
                <div class="rma-input">
                    <input type="text" name="rma_tel" placeholder="Telefono numeris" required autocomplete="off">
                    <input type="text" name="rma_nr" placeholder="Remonto numeris" required autocomplete="off">
                </div>
                 <input type="submit" class="form-btn" name="tikrinti_rma" value="Tikrinti">
           </form>        
        </div>  
        <!-- RMA KLIENTO UŽKLAUSOS VYKDYMAS IR REZULTATŲ ATVAIZDAVIMAS -->
        <?php 
            if(isset($_POST['tikrinti_rma'])) {
                include_once 'app/includes/db.php';
                $rma_tel = trim($_POST['rma_tel']);
                $rma_nr = trim($_POST['rma_nr']);
                if(empty($rma_nr) || empty($rma_tel)) {
        ?>
                <div class="rma-alert">
                    <p>Dėja, bet nieko rasti nepavyko</p>
                </div>   
        <?php       
                } else {
                    //IEŠKOME DB PAGAL DUOTA UŽKLAUSĄ AR YRA REMONTŲ
                    $sql = "SELECT * FROM klientu_rma WHERE rma_nr='$rma_nr' AND rma_tel='$rma_tel'";
                    $result = mysqli_query($mysqli, $sql);
                    $result_check = mysqli_num_rows($result);
                    if($result_check < 1) {
        ?>
                        <div class="rma-alert">
                            <p>Dėja, bet nieko rasti nepavyko</p>
                        </div>                  
        <?php       } else {
                //IEŠKOME DB PAGAL DUOTA UŽKLAUSĄ AR YRA REMONTO BŪSENŲ
                $result_rma = mysqli_query($mysqli, $sql);
                $result_rma_busenos = mysqli_query($mysqli,"SELECT * FROM rma_busenos WHERE rma_nr='$rma_nr'");
        ?>
            <div class="rma-info-content flex-container">
                <div class="rma-info">                  
                    <?php
                    //ATVAIZDUOJAME KLIENTO INFO 
                    while($res = mysqli_fetch_array($result_rma)) 
                    {
                        echo "<label>Remontas</label><li>" . $res['rma_nr'] . "</li>";
                        echo "<label>Klientas</label><li>" . $res['rma_klientas'] . "</li>";
                        echo "<label>Tel. nr.</label><li>" . $res['rma_tel'] . "</li>";
                        echo "<label>Įrenginys</label><li>" . $res['rma_irenginys'] . "</li>";
                    }?>
                </div>
                <!-- ATVAIZDUOJAME ATRASTAS REMONTO BŪSENAS -->
                <table class="rma-table">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Pastaba</th>
                        <th>Būsena</th>
                    </tr>
                    </thead>
                    <?php
                    while($res_b = mysqli_fetch_array($result_rma_busenos)) 
                    {
                        echo "<tbody><tr>";
                        echo "<td>" . $res_b['rmab_data'] . "</td>";
                        echo "<td>" . $res_b['rmab_pastaba'] . "</td>";
                        echo "<td>" . $res_b['rmab_busena'] . "</td>";
                        echo "</tr></tbody>";
                    }?>
                </table>
            </div>     
        <?php } } }?>
    </div>
</section>

<?php include_once 'app/content/footer.php'; ?>