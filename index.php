<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fitkids</title>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-76613730-1', 'auto');
        ga('send', 'pageview');

    </script>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/animate.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
    <script src="script/script.js"></script>
    <script src="script/main.js"></script>
    <script src="script/sections/section2.js"></script>
    <script src="script/sections/section3.js"></script>
    <script src="script/sections/section4.js"></script>
    <script src="script/sections/section5.js"></script>
</head>
<body>

<!--fb-root. de js.src moet verranderd worden naar de juiste link met appID-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.6&appId=111111111";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<section class="one">
    <img src="img/section1.jpg" height="100%" width="100%" class="backgroundImage">
    <div class="pointer_container">
        <img src="img/S1_arrow.png" class="s1_pointer" align="center">
    </div>
</section>

<section class="two" ">
    <img class="s2mannetje" src="img/s2_pop_objecten.png">
    <img class="s2text" src="img/S2_text.png">
    <img class="s2bal" src="img/S2_bal.png">

</section>

<section class="three">
    <img src="img/S3_Vriendengroep.png" class="S3vrienden" width="40%">
    <img src="img/S3_Txt.png" class="S3text" width="50%">
</section>

<section class="four">
    <img class="s4mannetje" src="img/pop.png" width="20%">
    <img class="s4bal" src="img/s4_bal.png">
    <img class="s4text" src="img/s4tekst.png" width="30%">
</section>

<section class="five">
    <div class="S5_left">
        <img src="img/s5_hand.png" class="S5_hand">
        <img src="img/s5_varken.png" class="S5_varken">
    </div>
<!--a href link gaat nu naar de steun pagina van fitkids, leek me wel logisch maar kan ook naar de home gaan als dat beter is-->
    <div class="S5_right">
        <img src="img/s5_heading.png" class="S5_heading">
        <img src="img/s5_txt.png" class="S5_text">
        <a href="https://www.fitkids.nl/6/steun_fitkids.html"><img src="img/s5_button.png" class="S5_button"></a>
    </div>
</section>
<section class="footer">
<?php
include 'views/footer.php';
?>
</section>
</body>
</html>