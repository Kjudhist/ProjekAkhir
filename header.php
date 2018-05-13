<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(window).on('scroll', function(){
            if ($(window).scrollTop()){
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>
    <title></title>
</head>
<body>
    <section class="sec1">
        <div style="height: 15%">
        <nav>
            <div class="logo">
                <img src="media/LogoColor.png">
            </div>
            <ul>
                <li>
                    <a href="#" class="active">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Service</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        </div>
    </section>
    <section class="sec3"></section>
    <section class="sec4"></section>
    <section class="sec5"></section>
</body>
</html>