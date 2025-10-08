<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KhmerMart24 home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__top">
            <div class="header__container container">
                <div class="header__contact">
                    <span>011 1111 1111</span>
                    <span>our location</span>
                </div>
                <p class="header__alert-news">
                    super deal
                </p>

                <a href="register" class="header__top-action">
                    login / sign up
                </a>
            </div>
        </div>
        <nav class="nav container">
            <a href="index.blade.php" class="nav__logo">
                <img src="{{ asset('img/logo.png') }}" alt="" class="nav__logo-img">
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.blade.php" class="nav__link active-link">home</a>
                    </li>

                    <li class="nav__item">
                        <a href="shop.blade.php" class="nav__link">shop</a>
                    </li>

                    <li class="nav__item">
                        <a href="accounts.blade.php" class="nav__link">my account</a>
                    </li>

                    <li class="nav__item">
                        <a href="compare.blade.php" class="nav__link">compare</a>
                    </li> 

                    <li class="nav__item">
                        <a href="register" class="nav__link">login</a>
                    </li> 
                </ul>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home"></section>

        <section class="categories"></section>

        <section class="products"></section>

        <section class="deals"></section>
    </main>
</body>
</html>