<!DOCTYPE html>
<html lang="cs">
    <!-- head -->
<?php 
        $title = "Kdo jsme? | KBT Třebíč";
        $description = "";
        $ROOT = "../";
        include "../partials/head.php" 
?>

    <body>
        <!-- navigation -->
    <?php include "../partials/nav.php" ?>

    <!-- page-hero -->
        <?php
        $anchor = "about";
        $background = "about";
        $heading = "KBT Třebíč";
        $subheading = "Kdo jsme?";
        include "../partials/header.php"; 

        ?>
        <section class="flex center " id="about">
        <?php
                    $headline = "KBT Třebíč, tradice a inovace v jednom";
                    $image = "container-img-about";
                    $paragraph = "Společnost KBT spol. s.r.o. byla založena v roce 1993 a od té doby se věnuje montování a výměně moderních vodoměrů, průtokoměrů a měřičů tepla na topení. 
                    <br><br>Naše dlouholeté zkušenosti a odbornost nám umožňují poskytovat kvalitní služby našim zákazníkům v Třebíči a okolí.

                    <br><br>Jsme hrdí na to, že jsme se stali jedni z předních odborníků v oboru vodoměrů a měřičů tepla v našem regionu.Naše práce je zaměřena na splnění požadavků našich zákazníků a na dosažení jejich spokojenosti.
                    
                    <br><br>Naším cílem je poskytovat kvalitní služby, které jsou spolehlivé, profesionální a cenově dostupné. Věříme, že naše vysoká úroveň odbornosti a péče o zákazníky nám umožní dlouhodobě rozvíjet naše podnikání a poskytovat kvalitní služby našim zákazníkům.
                    
                    <br><br>V případě jakýchkoliv dotazů nebo potřeby montování nebo výměny vodoměrů, průtokoměrů nebo měřičů tepla, neváhejte nás kontaktovat. Rádi vám pomůžeme.";
                    $path = "pages/contact.php";
                    $buttontext = "Kontaktujte nás";
                    
                    include "../partials/articleshort.php";

                    ?>
           
                    
        </section>

    

    <!-- footer -->
    <?php include "../partials/footer.php" ?>

    </body>
</html>
