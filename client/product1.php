<?php include("../config/constants.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="../assest/fonts/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/webfonts/fa-solid-900.ttf">
    <link rel="stylesheet" href="../assest/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assest/main.css">
    <link rel="stylesheet" href="../assest/base.css">
    <link rel="stylesheet" href="../assest/slide.css">
    <meta data-react-helmet="true" property="og:title" content="Design Bags for Women | NET-A-PORTER">
    <title>Design Bags for Women</title>
</head>
<body>
    <div class="app">
        <img src="../image/poster/Black Minimal Motivation Quote LinkedIn Banner.png" alt="" style="width: 1512px">
        <header class="header">
            <div class="grid wide">
                <div class="header__primary">
                    <div class="header__navbar-primary">
                        <ul class="header__navbar-list header__logo">
                            <a href="<?php echo SITEURLAD; ?>index.php" class="header__navbar-logo">
                                NET - A - PORTER
                            </a> 
                        </ul>
                        <div class="header__navbar-listUser ">
                            <ul class="header__navbar-list header__navbar-none ">
                                <li class="header__navbar-item header__navbar-user">
                                    <a href="" class="header__navbar-icon-link">
                                        <i class="header__navbar-icon fa-regular fa-user"></i>
                                    </a>
                                    <div class="header__account">
                                        <header class="header__account-header">
                                            <h2>MY ACCOUNT</h2>
                                        </header>
                                        <div class="header__account-inf">
                                            <p class="text">
                                                <label for="" class="header__account-label">Email Address</label>
                                            </p>
                                            <input type="text" class="header__account-email">
                                            <p class="text">
                                                <label for="" class="header__account-label">Password</label>
                                            </p>
                                            <input type="text" class="header__account-password">
                                            <button class="header__account-signin">Sign in</button>
                                            <div class="header__account-fgpwd">
                                                <a href="" class="account-fgpwd">Forgotten Your Password?</a>
                                            </div>
                                            <div class="header__account-ftr">
                                                <span class="account-ftr">Don't have an account?</span>
                                                <a href="./client/pages/register.html" class="account-ftr-link">Register now</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__navbar-item fl--header">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMTIiIGN5PSIxMiIgcj0iMTEiIGZpbGw9IiNGMEYwRjAiLz48cGF0aCBkPSJNMTEuNTIxIDEySDIzYzAtLjk5My0uMTMzLTEuOTU1LS4zOC0yLjg3SDExLjUyMlYxMnpNMTEuNTIxIDYuMjZoOS44NjRhMTEuMDU3IDExLjA1NyAwIDAwLTIuNTM4LTIuODY5aC03LjMyNnYyLjg3ek0xMiAyM2MyLjU4OCAwIDQuOTY4LS44OTUgNi44NDctMi4zOTFINS4xNTJBMTAuOTUzIDEwLjk1MyAwIDAwMTIgMjN6TTIuNjE0IDE3Ljc0aDE4Ljc3MWMuNTQxLS44ODMuOTYtMS44NDcgMS4yMzYtMi44N0gxLjM3OWExMC45MzQgMTAuOTM0IDAgMDAxLjIzNSAyLjg3eiIgZmlsbD0iI0Q4MDAyNyIvPjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNy4wOTggMi43MThINi4wOTVBMTAuOTQ4IDEwLjk0OCAwIDAxMTIgMXYxMUgxYzAtLjQ2NC4wMy0uOTIyLjA4NS0xLjM3MmwuNTU5LS40MDUuOTMyLjY3Ny0uMzU2LTEuMDk2LjkzMi0uNjc3SDJsLS4zMTMtLjk2MmExMC45IDEwLjkgMCAwMS4zNi0uODU0bC41MjkuMzg1LS4yODQtLjg3M2MuMDg1LS4xNTkuMTc0LS4zMTUuMjY3LS40N2wuNTkzLS40M2gtLjMyMWExMS4wNiAxMS4wNiAwIDAxMi4xMzMtMi4zNzlsLS4zMDcuOTQ3LjkzMi0uNjc3LjkzMy42NzctLjM1Ny0xLjA5Ni45MzMtLjY3N3ptLTEuNTA5IDcuNTA1bC45MzMuNjc3LS4zNTctMS4wOTYuOTMzLS42NzdINS45NDVMNS41OSA4LjAzbC0uMzU2IDEuMDk3SDQuMDgxbC45MzIuNjc3LS4zNTYgMS4wOTYuOTMyLS42Nzd6TTYuMTY1IDYuNmwuMzU3IDEuMDk2LS45MzMtLjY3OC0uOTMyLjY3OC4zNTYtMS4wOTYtLjkzMi0uNjc4aDEuMTUybC4zNTYtMS4wOTYuMzU2IDEuMDk2aDEuMTUzbC0uOTMzLjY3OHptMy4zNyAzLjYyM2wuOTMyLjY3Ny0uMzU2LTEuMDk2LjkzMi0uNjc3SDkuODkyTDkuNTM1IDguMDNsLS4zNTYgMS4wOTdIOC4wMjZsLjkzMy42NzctLjM1NyAxLjA5Ni45MzMtLjY3N3pNMTAuMTEgNi42bC4zNTYgMS4wOTYtLjkzMi0uNjc4LS45MzMuNjc4TDguOTYgNi42bC0uOTMzLS42NzhIOS4xOGwuMzU2LTEuMDk2LjM1NiAxLjA5NmgxLjE1MmwtLjkzMi42Nzh6bS4zNTYtMi4xMDlsLS4zNTYtMS4wOTYuOTMyLS42NzdIOS44OTJsLS4zNTYtMS4wOTYtLjM1NiAxLjA5Nkg4LjAyNmwuOTMzLjY3Ny0uMzU3IDEuMDk2LjkzMy0uNjc3LjkzMi42Nzd6IiBmaWxsPSIjMDA1MkI0Ii8+PC9zdmc+" alt="">
                                    <span class="header__navbar-language">
                                        English
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="header__navbar-category-scd1 header__navbar-category">
                            <div class="header-category-link-scd">
                                <a href="../index.html" class="header-category-link">
                                    New In
                                </a>
                            </div>
                            <div class="categorymenu2">
                                <div class="header-categorymenu2">
                                    <div class="header__categorymenu2">
                                        <ul class="categorymenu2-list header__categorymenu-brght">
                                            <h4 class="categorymenu2__heading">shop by</h4>
                                            <li class="categorymenu2-item">
                                                <a href="" class="categorymenu2__link">New This Week</a>
                                                <a href="" class="categorymenu2__link">New This Week</a>
                                                <a href="" class="categorymenu2__link">New This Week</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu2-col2">
                                        <div class="header__categorymenu2 header__categorymenu--l">
                                            <h4 class="categorymenu2__heading">editorial</h4>
                                            <div class="categorymenu2__parh">
                                                <a href="" class="categorymenu2-img">
                                                    <img src="../image/New in/new-in.png" alt="" class="categorymenu2__img">
                                                </a>
                                                <a href="" class="categorymenu2__paragraph">Your daily dose of style inspiration, Incredible Women and more</a>   
                                            </div>
                                            <a href="" class="categorymenu2__text">Discover PORTER</a>
                                        </div>
                                        <div class="header__categorymenu2 header__categorymenu--l">
                                            <h4 class="categorymenu2__heading">latest stories</h4>
                                            <div class="categorymenu2-lastStories">
                                                <div class="categorymenu2-fashion">
                                                    <img class="categorymenu2__fashion-img" src="../image/New in/fashion1.png" alt="">
                                                </div>
                                                <div class="categorymenu2__info">
                                                    <a href="" class="categorymenu2__info-link">
                                                        <h4 class="categorymenu2__header">fashion</h4>
                                                        <span class="categorymenu2__intro">Most Wanted</span>
                                                        <span class="categorymenu2__time">9 NOV '23</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="categorymenu2-lastStories">
                                                <div class="categorymenu2-fashion">
                                                    <img class="categorymenu2__fashion-img" src="../image/New in/lifestyle.png" alt="">
                                                </div>
                                                <div class="categorymenu2__info">
                                                    <a href="" class="categorymenu2__info-link">
                                                        <h4 class="categorymenu2__header">lifestyle</h4>
                                                        <span class="categorymenu2__intro">The 6 Interior-Design Trends Taking Over Tiktok</span>
                                                        <span class="categorymenu2__time">9 NOV '23</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="categorymenu2-lastStories">
                                                <div class="categorymenu2-fashion">
                                                    <img class="categorymenu2__fashion-img" src="../image/New in/fashion2.png" alt="">
                                                </div>
                                                <div class="categorymenu2__info">
                                                    <a href="" class="categorymenu2__info-link">
                                                        <h4 class="categorymenu2__header">Beauty</h4>
                                                        <span class="categorymenu2__intro">Everybody's Wearing Leather – Here's How To Style It For FW23</span>
                                                        <span class="categorymenu2__time">9 NOV '23</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header__navbar-overflow"></div>
                        </div>
                        <div class="header__navbar-category header__navbar-category-scd2">
                            <div class="header-category-link-scd1">
                                <a href="../index.html" class="header-category-link">
                                    Shop By
                                </a>
                            </div>
                            <div class="categorymenu3">
                                <div class="header-categorymenu">
                                    <div class="header__categorymenu3">
                                        <ul class="categorymenu-list">
                                            <h4 class="categorymenu3__heading">our picks</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Bestseller</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">exclusives</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">NET SUSTAIN</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Back in Stock</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Cult Finds</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Star Designers</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">New Names to Know</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">The Vanguard</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu3">
                                        <ul class="categorymenu-list header__categorymenu3-bl">
                                            <h4 class="categorymenu3__heading">everyday</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Wardrobe Staples</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Workwear</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Weekend</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">At-Home</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Sportswear</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Finishing Touches</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Winter</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Vacation</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Skiwear</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu3">
                                        <ul class="categorymenu-list header__categorymenu3-bl">
                                            <h4 class="categorymenu3__heading">events</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Date Night</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Party</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Evening</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Bridal</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Wedding Guest</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu3">
                                        <div class="categorymenu3-img">
                                            <a href="" class="categorymenu3__img-link">
                                                <img src="../image/Shop by/url2img_652f2ec751bbf.jpeg" alt="" class="categorymenu3__img">
                                            </a>
                                        </div>
                                        <a href="" class="categorymenu__text">Time to shine</a>
                                        <a href="" class="categorymenu__text2">Shop the party edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header__navbar-overflow"></div>
                        </div>
                        <div class="header__navbar-category header__navbar-category-scd3">
                            <div class="header-category-link-scd2">
                                <a href="../index.html" class="header-category-link">
                                    Designers
                                </a>
                            </div>
                            <div class="categorymenu4">
                                <div class="header-categorymenu">
                                    <div class="header__categorymenu">
                                        <ul class="categorymenu4-list">
                                            <h4 class="categorymenu4__heading">featured designers</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Designers A-Z List</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Alaïa</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Alexander McQueen</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Balmain</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Bottega Veneta</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Chloé</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Christian Louboutin</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Gucci</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Isabel Marant</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Jacquemus</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu">
                                        <ul class="categorymenu4-list categorymenu4-down">
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Jimmy Choo</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Khaite</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Loewe</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Loro Piana</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">MACH & MACH</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">SAINT LAURENT</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">The Row</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">TOTEME</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Valentino</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Zimmermann</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu">
                                        <ul class="categorymenu4list header__categorymenu-brght1">
                                            <h4 class="categorymenu4__heading">discover</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">NET SUSTAIN</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Star Designers</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">New Names to Know</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">The Vanguard</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu">
                                        <div class="categorymenu4-img">
                                            <a href="" class="categorymenu4__img-link">
                                                <img src="../image/Designer/url2img_652f2f9fc510a.jpeg" alt="" class="categorymenu__img">
                                            </a>
                                        </div>
                                        <a href="" class="categorymenu__text">Introducing vercase Icons</a>
                                        <a href="" class="categorymenu__text2">Shop the collection</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header__navbar-overflow"></div>
                        </div>
                        <div class="header__navbar-category header__navbar-category-scd2">
                            <div class="header-category-link-scd1">
                                <a href="<?php echo SITEURLAD?>index.php" class="header-category-link">
                                    Bags
                                </a>
                            </div>
                            <div class="categorymenu3">
                                <div class="header-categorymenu">
                                    <div class="header__categorymenu3">
                                        <ul class="categorymenu-list">
                                            <h4 class="categorymenu3__heading">All Bags</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Clutch Bags</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Cross-Body Bags</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Evening Bags</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Luggage and Travel</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Mini Bags</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Shoulder Bags</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Tote Bags</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu3">
                                        <ul class="categorymenu-list header__categorymenu3-bl">
                                            <h4 class="categorymenu3__heading">DESINGERS</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Balenciaga</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Bottega Veneta</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Cholé</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Gucci</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Loewe</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">SAINT LAURENT</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">The Row</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Valentino Garavani</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">All Designers</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu3">
                                        <ul class="categorymenu-list header__categorymenu3-bl">
                                            <h4 class="categorymenu3__heading">SHOP BY</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Icons</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Exclusives</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Vacation</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Essentials</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Trending Now</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Party</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu3-item">Resell your pre-loved bags</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu3">
                                        <div class="categorymenu3-img">
                                            <a href="" class="categorymenu3__img-link">
                                                <img src="../image/Bags/Screenshot 2023-11-22 071945.png" alt="" class="categorymenu3__img">
                                            </a>
                                        </div>
                                        <a href="" class="categorymenu__text">Hunting Season's enduring bags</a>
                                        <a href="" class="categorymenu__text2">Shop the collection</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header__navbar-overflow"></div>
                        </div>
                        <div class="header__navbar-category header__navbar-category-scd4">
                            <div class="header-category-link-scd3">
                                <a href="../index.html" class="header-category-link">
                                    People & Planet
                                </a>
                            </div>
                            <div class="categorymenu5">
                                <div class="header-categorymenu">
                                    <div class="header__categorymenu header__categorymenu-wdth">
                                        <ul class="categorymenu-list">
                                            <h4 class="categorymenu5__heading">discover</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">People & Planet</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">About NET-A-PORTER</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Championing people</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Respecting our planet</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">The Vanguard</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu header__categorymenu-wdth">
                                        <ul class="categorymenu-list header__categorymenu-bl header__categorymenuLine">
                                            <h4 class="categorymenu5__heading">shop our net sustain attributes</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">SHop NET SUSTAIN</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Animal Welfare</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Considered Materials </li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Vegan</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu  header__categorymenu-wdth">
                                        <ul class="categorymenu-list header__categorymenuLine">
                                            <h4 class="categorymenu5__heading">net sustain</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">REFLAUNT: Resale at NET-A-PORTER</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general line-height">8 Incredible Women driving forward sustainability in their fields</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general line-height">The V&A's DIVA exhibition, supported by NET-A-PORTER</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general line-height">#THENETWORK: discover our global community</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Shop NET SUSTAIN</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu header__categorymenu-wdth">
                                        <div class="categorymenu-img">
                                            <a href="" class="categorymenu__img-link">
                                                <img src="../image/PP/url2img_652f32b413a2f.jpeg" alt="" class="categorymenu__img">
                                            </a>
                                        </div>
                                        <a href="" class="categorymenu__text">Resell with a NET-A-PORTER</a>
                                        <a href="" class="categorymenu__text2">Discover more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header__navbar-overflow"></div>
                        </div>
                        <div class="header__navbar-category header__navbar-category-scd4">
                            <div class="header-category-link-scd3">
                                <a href="../index.html" class="header-category-link">
                                    Home & Gifts
                                </a>
                            </div>
                            <div class="categorymenu5">
                                <div class="header-categorymenu">
                                    <div class="header__categorymenu header__categorymenu-wdth" style="width: 20%;">
                                        <ul class="categorymenu-list">
                                            <h4 class="categorymenu5__heading">home & gifts</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">All Home</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Arts and Prints</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Books</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Candies and Room Fragrance</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Decorative Objects</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Tableware</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Throws and Cushions</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu header__categorymenu-wdth">
                                        <ul class="categorymenu-list header__categorymenu-bl header__categorymenuLine2">
                                            <h4 class="categorymenu5__heading">gifts</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">All Gifts</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Can't Go Wrong</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Small Gestures</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Big Gestures</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Beauty</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Accessories</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Jewelry & Watches</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Lingerie & Loungewear</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Home</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Gifts for Him</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu  header__categorymenu-wdth">
                                        <ul class="categorymenu-list header__categorymenuLine2">
                                            <h4 class="categorymenu5__heading">designers</h4>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Anissa Kermiche</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Assouline</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Cabana</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Ginori</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">L'Objet</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">La DoubleJ</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Loewe Home Scents</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Smythson</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">Trudon</li>
                                            </a>
                                            <a href="" class="categorymenu__link">
                                                <li class="categorymenu__item-general">All Designers</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <div class="header__categorymenu header__categorymenu-wdth">
                                        <div class="categorymenu-img">
                                            <a href="" class="categorymenu__img-link">
                                                <img src="../image/h&g/Screenshot 2023-10-23 183405.png" alt="" class="categorymenu__img">
                                            </a>
                                        </div>
                                        <a href="" class="categorymenu__text">New In: Dolce & Gabbana Casa</a>
                                        <a href="" class="categorymenu__text2">Shop the collection</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header__navbar-overflow"></div>
                        </div>
                        <div class="header__navbar-category-frst">
                            <div class="header-category-link-frst">
                                <a href="" class="header-category-link header-category-link-frst active">
                                    <span class="header-category-sale ">
                                        EXTRA 10% off</span>
                                    </span>
                                </a>    
                            </div>
                        </div>
                        <div class="header__navbar-wislSearch">
                            <ul class="header__navbar-list header__margin-none">
                                <li class="header__navbar-item">
                                    <div class="searchPanel__wrapper" id="searchIcon">
                                        <button class="searchPanel__icon"></button>
                                        <span class="header__navbar-search-text">Search</span>
                                    </div>
                                    <div class="searchOverlay" id="searchBar" onclick="searchBarOff()">
                                        <div class="searchOverlay-content">
                                            <div class="searchOverlay__control--wrapper">
                                                <div class="searchOverlay__control">
                                                    <div class="searchOverlay__icon--search"></div> 
                                                    <div class="searchOverlay__icon">
                                                        <form class="searchOverlay__form">
                                                            <input type="text" id="searchOverlay__input" placeholder="Search NET-A-PORTER" class="searchOverlay__input">
                                                        </form>
                                                    </div>
                                                    <div class="searchOverlay__icon--close">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="overlayOn" onclick="overlayOff()"></div>
                                </li>
                                <li class="header__navbar-item header__navbar-wlst">
                                    <a href="" class="header__navbar-icon-link">
                                        <i class="header__navbar-icon fa-regular fa-star"></i>
                                    </a>
                                    <div class="header__wlst">
                                        <header class="header__wlst-header">
                                            <h2>WITH LIST</h2>
                                        </header>
                                        <div class="header__wlst-inf">
                                            <p class="text">
                                                <label for="" class="header__wlst-label">Email Address</label>
                                            </p>
                                            <input type="text" class="header__wlst-email">
                                            <p class="text">
                                                <label for="" class="header__wlst-label">Password</label>
                                            </p>
                                            <input type="text" class="header__wlst-password">
                                            <button class="header__wlst-signin">Sign in</button>
                                            <div class="header__wlst-fgpwd">
                                                <a href="" class="account-fgpwd">Forgotten Your Password?</a>
                                            </div>
                                            <div class="header__wlst-ftr header__margin-none">
                                                <span class="wlst-ftr">Don't have an account?</span>
                                                <a href="" class="wlst-ftr-link">Register now</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__navbar-item header__navbar-shpping">
                                    <a href="<?php echo SITEURLCART?>cart.php" class="header__navbar-icon-link">
                                        <i class="header__navbar-icon-shopping fa-solid fa-bag-shopping"></i>
                                    </a>
                                    <div class="header__shpping">
                                        <div class="shpping-icon">
                                            <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg" class="header__shpping-icon">
                                                <g fill="none" fill-rule="evenodd">
                                                    <path d="M48 0v48H0V0z"/><path d="M33 12v-1c0-4.963-4.037-9-9-9s-9 4.037-9 9v1H2v33h44V12H33zm-16-1c0-3.86 3.14-7 7-7s7 3.14 7 7v1H17v-1zm27 32H4V14h40v29z" fill="#000" fill-rule="nonzero"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="header__shpping-text">Your Shopping Bag is empty</p>
                                        <a href="" class="header__shpping-link">Shop What's New</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="content">
                <div class="productDetails">
                    <div class="slide-show">
                        <div class="list-images">
                            <div class="img-detail">
                                <img class="imgdetails imgdetailss" src="../image/ProductDetail/alexander/1.png" alt="Product Image" >
                            </div>
                            <div class="img-detail">
                                <img class="imgdetails" src="../image/ProductDetail/alexander/2.png" alt="" >
                            </div>
                            <div class="img-detail">
                                <img class="imgdetails" src="../image/ProductDetail/alexander/3.png" alt="" >
                            </div>
                            <div class="img-detail">
                                <img class="imgdetails" src="../image/ProductDetail/alexander/4.png" alt="" >
                            </div>
                            <div class="img-detail">
                                <img class="imgdetails" src="../image/ProductDetail/alexander/5.png" alt="" >
                            </div>
                            <div class="img-detail">
                                <img class="imgdetails" src="../image/ProductDetail/alexander/6.png" alt="" >
                            </div>
                            <div class="img-detail">
                                <img class="imgdetails" src="../image/ProductDetail/alexander/6.png" alt="" >
                            </div>
                        </div>
                        <div class="btns">
                            <div class="btn-left btn">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="btn-right btn">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="shopMore">
                            <p class="shopMore__heading upperCase">view more</p>
                            <div class="shopMore__link">
                                <a href="#" class="shopMore1__link upperCase">the row</a>
                                <a href="#" class="shopMore1__link">Bags</a>
                                <a href="#" class="shopMore1__link">Tote Bags</a>
                            </div>
                        </div>
                    </div>
                    <div class="productDetail__selectInfo">
                        <div class="productDetail__basicInfo">
                            <div class="singlebadge upperCase">
                                low stock
                            </div>
                            <div class="productInfomation">
                                <a href="#">
                                    <h1 class="productInfomation--brand">ALEXANDER MCQUEEN</h1>
                                </a>
                                <p class="productInfomation__name">Mini Peak cut-out leather shoulder bag</p>
                            </div>
                            <div class="priceProduct">$2,390</div>
                        </div>
                        <div class="productDetail">
                            <div class="productDetail__colours">
                                <p class="productDetail__colours--heading">Color: 
                                    <span class="productDetail__colours--span">
                                        Black
                                    </span>
                                </p>
                            </div>
                            <div class="sizelabel">
                                <span class="onesize__label"> Size : 
                                    <span class="onesize__label--one">
                                        One size (Low stock)
                                    </span>
                                </span>
                            </div>
                            <div class="button__wrapper">
                                <div class="productDetail__addbButton--addb">
                                    <button class="button__addToBag" onclick="addToCart()">
                                        Add to Bag
                                    </button>
                                </div>
                                <div class="productDetail__addButton--wl">
                                    <button class="button__addTowl">
                                        <i class="fa-regular fa-star addButton__wlStar"></i>
                                        Add to Wish List
                                    </button>
                                </div>
                                <div class="productDetail__editor">
                                    <div class="according__section">
                                        <div class="editorAccording upperCase">
                                            <i class="fa-solid fa-chevron-up according__down"></i>
                                            editor's note 
                                        </div>
                                    </div>
                                    <div class="according__section according__sectionContent">
                                        <p>Alexander McQueen's 'The Bow' tote is named for its playful shape. Crafted from supple leather, this version is quilted - look closely and you'll spot the house initials amongst intricately stitched blooms. It has a sizable interior for stowing all your essentials, and is fitted with a sleek card holder.</p>
                                    </div>
                                    <div class="according__section according__sectionSize">
                                        <div class="editorAccording upperCase">
                                            <i class="fa-solid fa-chevron-down according__down"></i>
                                            size & fit
                                        </div>
                                    </div>
                                    <div class="according__section according__sectionDetail">
                                        <div class="editorAccording upperCase">
                                            <i class="fa-solid fa-chevron-down according__down"></i>
                                            details & care
                                        </div>
                                    </div>
                                    <div class="according__section according__SectionDelivery">
                                        <div class="editorAccording upperCase">
                                            <i class="fa-solid fa-chevron-down according__down"></i>
                                            delivery & returns
                                        </div>
                                    </div>
                                    <div class="partNumber">
                                        Product Code 
                                        <div class="part__number">
                                            <span>0393</span>
                                            <span>400</span>
                                            <span>682</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer__layout-area">
                <div class="grid wide">
                    <div class="row footerlayout">
                        <div class="col l-6 footerlayout__frst">
                            <div class="footer__layout">
                                <div class="account__untility">
                                    <h4 class="heading2 heading2--secondary">Enjoy 15% off your first order</h4>
                                    <div class="account__untility-details">
                                        <div class="account__untility-text">
                                            <p class="paragraph">Claim your exclusive discount code when you subscribe to our emails. Terms and conditions apply</p>
                                        </div>
                                        <!-- <label for="" class="account__untility-email-label">Email Address</label> -->
                                        <div class="registrationform">
                                            <div class="registrationform__email">
                                                <input class="registration__email-text" type="text" placeholder="your@address.com">
                                            </div>
                                            <div class="buttonsubmit">
                                                <button class="registration__button-submit" data-target="email-registration-submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="socials-container">
                                    <ul class="socialicon">
                                        <li class="socialicon__item">
                                            <i class="fa-brands fa-youtube"></i>
                                        </li>
                                        <li class="socialicon__item">
                                            <i class="fa-brands fa-facebook"></i>
                                        </li>
                                        <li class="socialicon__item">
                                            <i class="fa-brands fa-twitter"></i>
                                        </li>
                                        <li class="socialicon__item">
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6">
                            <div class="contactpane">
                                <h4 class="heading">CALL US</h4>
                                <div class="contact">
                                    <div class="contact__telephone">
                                        <a href="" class="contact__telephone-link">+84 393 400 682</a>
                                    </div>
                                    <div class="contact__email">
                                        <a href="" class="contact__email-link">sangv906@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="localswitch">
                                <h4 class="heading">LOCATION & LANGUAGE</h4>
                                <div class="localswitch--lg">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMTIiIGN5PSIxMiIgcj0iMTEiIGZpbGw9IiNGMEYwRjAiLz48cGF0aCBkPSJNMTEuNTIxIDEySDIzYzAtLjk5My0uMTMzLTEuOTU1LS4zOC0yLjg3SDExLjUyMlYxMnpNMTEuNTIxIDYuMjZoOS44NjRhMTEuMDU3IDExLjA1NyAwIDAwLTIuNTM4LTIuODY5aC03LjMyNnYyLjg3ek0xMiAyM2MyLjU4OCAwIDQuOTY4LS44OTUgNi44NDctMi4zOTFINS4xNTJBMTAuOTUzIDEwLjk1MyAwIDAwMTIgMjN6TTIuNjE0IDE3Ljc0aDE4Ljc3MWMuNTQxLS44ODMuOTYtMS44NDcgMS4yMzYtMi44N0gxLjM3OWExMC45MzQgMTAuOTM0IDAgMDAxLjIzNSAyLjg3eiIgZmlsbD0iI0Q4MDAyNyIvPjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNy4wOTggMi43MThINi4wOTVBMTAuOTQ4IDEwLjk0OCAwIDAxMTIgMXYxMUgxYzAtLjQ2NC4wMy0uOTIyLjA4NS0xLjM3MmwuNTU5LS40MDUuOTMyLjY3Ny0uMzU2LTEuMDk2LjkzMi0uNjc3SDJsLS4zMTMtLjk2MmExMC45IDEwLjkgMCAwMS4zNi0uODU0bC41MjkuMzg1LS4yODQtLjg3M2MuMDg1LS4xNTkuMTc0LS4zMTUuMjY3LS40N2wuNTkzLS40M2gtLjMyMWExMS4wNiAxMS4wNiAwIDAxMi4xMzMtMi4zNzlsLS4zMDcuOTQ3LjkzMi0uNjc3LjkzMy42NzctLjM1Ny0xLjA5Ni45MzMtLjY3N3ptLTEuNTA5IDcuNTA1bC45MzMuNjc3LS4zNTctMS4wOTYuOTMzLS42NzdINS45NDVMNS41OSA4LjAzbC0uMzU2IDEuMDk3SDQuMDgxbC45MzIuNjc3LS4zNTYgMS4wOTYuOTMyLS42Nzd6TTYuMTY1IDYuNmwuMzU3IDEuMDk2LS45MzMtLjY3OC0uOTMyLjY3OC4zNTYtMS4wOTYtLjkzMi0uNjc4aDEuMTUybC4zNTYtMS4wOTYuMzU2IDEuMDk2aDEuMTUzbC0uOTMzLjY3OHptMy4zNyAzLjYyM2wuOTMyLjY3Ny0uMzU2LTEuMDk2LjkzMi0uNjc3SDkuODkyTDkuNTM1IDguMDNsLS4zNTYgMS4wOTdIOC4wMjZsLjkzMy42NzctLjM1NyAxLjA5Ni45MzMtLjY3N3pNMTAuMTEgNi42bC4zNTYgMS4wOTYtLjkzMi0uNjc4LS45MzMuNjc4TDguOTYgNi42bC0uOTMzLS42NzhIOS4xOGwuMzU2LTEuMDk2LjM1NiAxLjA5NmgxLjE1MmwtLjkzMi42Nzh6bS4zNTYtMi4xMDlsLS4zNTYtMS4wOTYuOTMyLS42NzdIOS44OTJsLS4zNTYtMS4wOTYtLjM1NiAxLjA5Nkg4LjAyNmwuOTMzLjY3Ny0uMzU3IDEuMDk2LjkzMy0uNjc3LjkzMi42Nzd6IiBmaWxsPSIjMDA1MkI0Ii8+PC9zdmc+" alt="">
                                    <span class="localswitch__language">English</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerlink__ftr">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-6">
                            <div class="row no-gutters footerLink__list">
                                <div class="col l-3">
                                    <div class="footer__link">
                                        <h3 class="footer__heading">customer care</h3>
                                        <ul class="footer__link-list">
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Track on Order</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Create an Return</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">FAQs</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Contact Us</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Payment</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Primary Policy</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Cookie Policy</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Cookie Center</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Terms & Conditions</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col l-3 l-o-3">
                                    <div class="footer__link">
                                        <h3 class="footer__heading">about us</h3>
                                        <ul class="footer__link-list">
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">About NET-A-PORTER</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">People & Planet</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Our Loyalty Program</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Adversting</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Affiliates</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Careers</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">NET-A-PORTER Apps</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Student Discount</a>
                                            </li>
                                            <li class="footer__link-item">
                                                <a href="" class="footerlink__link">Modern Slavery Statement</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col l-6">
                                    <div class="siteswitch">
                                        <div class="siteswitch2">
                                            <h3 class="siteswitch__heading">mr porter</h3>
                                            <div class="siteswitch__text">
                                                <p class="siteswitch__texts">Shop from over 500 of the world's finest luxury designer brands & be dressed for any occasion</p>
                                                <div class="siteswitch__link">
                                                    <a href="#" class="siteswitchlink__link">Visit MRPORTER.COM</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="paymentcards">
                                            <h3 class="paymentcards__heading">net-a-porter accepts</h3>
                                            <div class="paymentcards__wallet">
                                                <i class="paymentcards__icon fa-brands fa-cc-paypal"></i>
                                                <i class="paymentcards__icon fa-brands fa-cc-visa"></i>
                                                <i class="paymentcards__icon fa-brands fa-cc-mastercard"></i>
                                                <i class="paymentcards__icon fa-brands fa-cc-amex"></i>
                                                <i class="paymentcards__icon fa-brands fa-cc-apple-pay"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="../JS/handleClick.js"></script>
    <script src="../JS/slide.show.js"></script>
    <script src="../JS/addToCart.js"></script>
</body>
</html>