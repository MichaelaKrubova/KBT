<!DOCTYPE html>
<html lang="cs">
    <?php
$title = "Kontaktujte nás | KBT Třebíč";
        $description = "";
        $ROOT = "../";
        include "../partials/head.php"
    ?>
    <body>
            
            <?php
            $heading = "Dejte nám vědět";
            $subheading = "Jsme tu pro vás. KBT Třebíč";
            $background = "contact";
            $anchor = "contact";
            include "../partials/nav.php";
            include "../partials/header.php";
            ?>
            
        <section class="flex center" id="contact">
            <?php
            
            $image = "container-img-contact";
            $headline = "Kontaktujte nás";
            $paragraph = "<ul class=\"list\">
                            <li>Zavolejte na číslo:<br><br> <a href=\"tel: +420 777 777 777\" class=\"no-underline contact-link\"><strong>+420 777 777 777</strong></a> </li>
                            <li>Nebo nám napište zprávu na email: <a href= \"mailto: radim.klumpar@kbttrebic.cz\" class = \"no-underline contact-link\"><br><br><strong>radim.klumpar@kbttrebic.cz</strong></a></li>
                        </ul>";
            $buttontext = "Více o KBT";
            $path = "pages/about.php";
            include "../partials/articleshort.php";
            ?>
        </section>

        <?php
        include "../partials/footer.php";
        ?>
    </body>
</html>