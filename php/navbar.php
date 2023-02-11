<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academy Hub</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
</head>
<body>
    <nav class="menu">
        <section class="menu__container">
            <h1 class="menu__logo">Academy Hub</h1>

            <ul class="menu__links">
                <li class="menu__item">
                    <a href="index.php" class="menu__link">Home</a>
                </li>
    
                <li class="menu__item menu__item--show">
                    <a href="php/overview.php" class="menu__link">Overview <img src="assets/arrow.svg" class="menu__arrow"></a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">About 1</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">About 2</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">About 3</a>
                        </li>
                    </ul>
                </li>
    
                <li class="menu__item  menu__item--show">
                    <a href="php/demo.php" class="menu__link">Demo  <img src="assets/arrow.svg" class="menu__arrow"></a>
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Projects 1</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Projects 2</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Projects 3</a>
                        </li>
                    </ul>
                </li>
    
                <li class="menu__item">
                    <a href="php/download.php" class="menu__link">Download</a>
                </li>

                <li class="menu__item">
                    <a href="php/help.php" class="menu__link">Help</a>
                </li>

                <li class="menu__item">
                    <a href="php/news.php" class="menu__link">What's new</a>
                </li>

                <li class="menu__item">
                    <a href="php/donate.php" class="menu__link">Get involved</a>
                </li>

                <li class="menu__item">
                    <a href="php/bug.php" class="menu__link">Bugs</a>
                </li>
            </ul>

            <div class="menu__hamburguer">
                <img src="assets/menu.svg" class="menu__img">
            </div>
        </section>
    </nav>
    <script src="js/app.js"></script>
</body>
</html>