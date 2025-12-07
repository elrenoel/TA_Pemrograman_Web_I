<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="shortcut icon" href="/images/swavylogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/globals.css">
    <link rel="shortcut icon" href="../images/swavylogo.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="mobile-menu">
                <a href="home.php">Home</a>
                <a href="explore.php">Explore</a>
                <a href="news.php">News</a>
                <a href="profile.php">Profile</a>
            </div>
            <div class="logo-area">
                <a href="../index.html">
                  <img src="../images/swavylogo.png" class="logo-icon">
                </a>
                <span class="logo-text">Swavy</span>
            </div>
            <nav class="menu">
                <a class="menu-mation" href="home.php">Home</a>
                <a class="menu-mation" href="explore.php">Explore</a>
                <a class="menu-mation" href="news.php">News</a>
            </nav>
            <div class="profile">
                <a class="profile-nav" href="">
                   <img src="../images/9.jpeg" class="profile-img">
                </a>
                <span class="profile-name"><?= $_SESSION['name']; ?></span>
            </div>
        </header>          
    </div>
    <main>
        <div class="second-content">
            <div class="second-first">
                <div class="second-first-content">
                    <div class="content">
                        <img class="icon-size" src="../images/bi_file-post.png" alt="">
                        <h1 class="left-text">Post</h1>
                    </div>
                    <div class="content-option">
                        <img class="icon-size" src="../images/solar_chat-square-like-linear.png" alt="">
                        <h1 class="left-opa-text">Liked</h1>
                    </div>
                    <div class="content-option">
                        <img class="icon-size" src="../images/iconamoon_history-fill.png" alt="">
                        <h1 class="left-opa-text">History</h1>
                    </div>
                    <hr class="hr">
                    <div class="content-option">
                        <img class="icon-size" src="../images/iconamoon_history-fill.png" alt="">
                        <h1 class="left-opa-text">Rooms</h1>
                    </div>
                    <div class="content-option">
                        <img class="icon-size" src="../images/iconamoon_history-fill.png" alt="">
                        <h1 class="left-opa-text">Community</h1>
                    </div>
                    <div class="content-option">
                        <img class="icon-size" src="../images/iconamoon_history-fill.png" alt="">
                        <h1 class="left-opa-text">Setting</h1>
                    </div>
                </div>
            </div>
            <div class="second-two">
                <div class="second-two-box">
                        <div class="img-popup">
                            <img class="second-image" src="../images/9.jpeg" alt="">
                            <div class="popup-box popup-top">Change Image</div>
                        </div>
                        <div>
                            <h1 class="javier"><?= $_SESSION['name']; ?></h1>
                            <p class="hey-text">hey there 📍</p>
                            <div class="follower">
                                <h1><span class="bold-one">1</span> Follower</h1>
                                <h1><span class="bold-one">2</span> Following</h1>
                            </div>
                            <div class="button-profile">
                                <button class="button">Edit Profile</button>
                                <button class="button">Edit</button>
                            </div>
                        </div>
                </div>
                <div class="hr-box">
                    <hr class="hr-two">
                </div>
                <div class="padding-content">
                    <div class="content-review">
                        <div class="board">
                            <img class="content-img" src="../images/Frankoon  Ocean - Moon River.jpeg" alt="">
                            <h1 class="judul-content">Moon River</h1>
                            <p class="singer">Frank Ocean</p>
                        </div>
                        <div class="board-content">
                            <div class="star-flex">
                             <img class="star" src="../images/Rate-Star.png" alt="">
                             <h1 class="tanggal">19 Nov 2025</h1>
                            </div>
                            <h1 class="text-review">Real Man adalah lagu yang cukup berhasil dalam menyeimbangkan antara kejujuran personal dan gaya musik yang sedikit berbeda dari biasanya. Jika saya memberi nilai: 8/10</h1>
                            <div class="icon-save">
                                <img class="icon-kecil bookmark-icon" id="bookmarkBtn" src="../images/bookmark.png" alt="">
                                <p>20</p>
                                <img class="icon-kecil gap-icon" src="../images/share.png" alt="">
                                <p>20</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-review">
                        <div class="board">
                            <img class="content-img" src="../images/Frankoon  Ocean - Moon River.jpeg" alt="">
                            <h1 class="judul-content">Moon River</h1>
                            <p class="singer">Frank Ocean</p>
                        </div>
                        <div class="board-content">
                            <div class="star-flex">
                             <img class="star" src="../images/Rate-Star.png" alt="">
                             <h1 class="tanggal">19 Nov 2025</h1>
                            </div>
                            <h1 class="text-review">Real Man adalah lagu yang cukup berhasil dalam menyeimbangkan antara kejujuran personal dan gaya musik yang sedikit berbeda dari biasanya. Jika saya memberi nilai: 8/10</h1>
                            <div class="icon-save">
                                <img class="icon-kecil bookmark-icon" id="bookmarkBtn" src="../images/bookmark.png" alt="">
                                <p>20</p>
                                <img class="icon-kecil gap-icon" src="../images/share.png" alt="">
                                <p>20</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-review">
                        <div class="board">
                            <img class="content-img" src="../images/Frankoon  Ocean - Moon River.jpeg" alt="">
                            <h1 class="judul-content">Moon River</h1>
                            <p class="singer">Frank Ocean</p>
                        </div>
                        <div class="board-content">
                            <div class="star-flex">
                             <img class="star" src="../images/Rate-Star.png" alt="">
                             <h1 class="tanggal">19 Nov 2025</h1>
                            </div>
                            <h1 class="text-review">Real Man adalah lagu yang cukup berhasil dalam menyeimbangkan antara kejujuran personal dan gaya musik yang sedikit berbeda dari biasanya. Jika saya memberi nilai: 8/10</h1>
                            <div class="icon-save">
                                <img class="icon-kecil" src="../images/bookmark.png" alt="">
                                <p>20</p>
                                <img class="icon-kecil gap-icon" src="../images/share.png" alt="">
                                <p>20</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-review">
                        <div class="board">
                            <img class="content-img" src="../images/Frankoon  Ocean - Moon River.jpeg" alt="">
                            <h1 class="judul-content">Moon River</h1>
                            <p class="singer">Frank Ocean</p>
                        </div>
                        <div class="board-content">
                            <div class="star-flex">
                             <img class="star" src="../images/Rate-Star.png" alt="">
                             <h1 class="tanggal">19 Nov 2025</h1>
                            </div>
                            <h1 class="text-review">Real Man adalah lagu yang cukup berhasil dalam menyeimbangkan antara kejujuran personal dan gaya musik yang sedikit berbeda dari biasanya. Jika saya memberi nilai: 8/10</h1>
                            <div class="icon-save">
                                <img class="icon-kecil" src="../images/bookmark.png" alt="">
                                <p>20</p>
                                <img class="icon-kecil gap-icon" src="../images/share.png" alt="">
                                <p>20</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-review">
                        <div class="board">
                            <img class="content-img" src="../images/Frankoon  Ocean - Moon River.jpeg" alt="">
                            <h1 class="judul-content">Moon River</h1>
                            <p class="singer">Frank Ocean</p>
                        </div>
                        <div class="board-content">
                            <div class="star-flex">
                             <img class="star" src="../images/Rate-Star.png" alt="">
                             <h1 class="tanggal">19 Nov 2025</h1>
                            </div>
                            <h1 class="text-review">Real Man adalah lagu yang cukup berhasil dalam menyeimbangkan antara kejujuran personal dan gaya musik yang sedikit berbeda dari biasanya. Jika saya memberi nilai: 8/10</h1>
                            <div class="icon-save">
                                <img class="icon-kecil" src="../images/bookmark.png" alt="">
                                <p>20</p>
                                <img class="icon-kecil gap-icon" src="../images/share.png" alt="">
                                <p>20</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-third">
                <div class="second-third-box">
                    <h2 class="third-title">People Also Viewed</h2>
                    <div class="third-container">
                        <img class="third-image" src="../images/9.jpeg" alt="">
                        <h2 class="text-third">javierssvr_</h2>
                        <img class="icon-third" src="../images/basil_add-outline.png" alt="">
                    </div>
                    <div class="third-container">
                        <img class="third-image" src="../images/9.jpeg" alt="">
                        <h2 class="text-third">javierssvr_</h2>
                        <img class="icon-third" src="../images/basil_add-outline.png" alt="">
                    </div>
                    <div class="third-container">
                        <img class="third-image" src="../images/9.jpeg" alt="">
                        <h2 class="text-third">javierssvr_</h2>
                        <img class="icon-third" src="../images/basil_add-outline.png" alt="">
                    </div>
                    <div class="third-container">
                        <img class="third-image" src="../images/9.jpeg" alt="">
                        <h2 class="text-third">javierssvr_</h2>
                        <img class="icon-third" src="../images/basil_add-outline.png" alt="">
                    </div>
                    <div class="third-container">
                        <img class="third-image" src="../images/9.jpeg" alt="">
                        <h2 class="text-third">javierssvr_</h2>
                        <img class="icon-third" src="../images/basil_add-outline.png" alt="">
                    </div>
                    <div class="third-container">
                        <img class="third-image" src="../images/9.jpeg" alt="">
                        <h2 class="text-third">javierssvr_</h2>
                        <img class="icon-third" src="../images/basil_add-outline.png" alt="">
                    </div>
                    <div class="third-container">
                        <img class="third-image" src="../images/9.jpeg" alt="">
                        <h2 class="text-third">javierssvr_</h2>
                        <img class="icon-third" src="../images/basil_add-outline.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        const bookmarkBtn = document.getElementById("bookmarkBtn");

        let isSaved = false;

        bookmarkBtn.addEventListener("click", () => {
            isSaved = !isSaved;

            if (isSaved) {
                bookmarkBtn.src = "../images/bookmarkblue.png"; // icon bookmark biru
            } else {
                bookmarkBtn.src = "../images/bookmark.png"; // icon normal
            }
        });

        const profile = document.querySelector(".profile");
        const mobileMenu = document.querySelector(".mobile-menu");

        profile.addEventListener("click", (e) => {
        if (window.innerWidth <= 900) {
            e.preventDefault(); 
            mobileMenu.classList.toggle("show");
        }
        });

        document.addEventListener("click", (e) => {
        const klikProfile = profile.contains(e.target);
        const klikMenu = mobileMenu.contains(e.target);

        if (!klikProfile && !klikMenu) {
            mobileMenu.classList.remove("show");
        }
        });

        window.addEventListener("resize", () => {
        if (window.innerWidth > 900) {
            mobileMenu.classList.remove("show");
        }
        });

    </script>
</body>
</html>
