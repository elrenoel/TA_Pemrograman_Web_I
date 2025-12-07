<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/swavylogo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/globals.css">
    <link rel="stylesheet" href="../css/library.css">
    <link rel="shortcut icon" href="../images/swavylogo.png" type="image/x-icon">
    <title>SWAVY Library</title>
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
                <img src="../images/swavylogo.png" class="logo-icon">
                <span class="logo-text">Swavy</span>
            </div>

            <nav class="menu">
                <a class="menu-mation" href="home.php">Home</a>
                <a class="menu-mation" href="explore.php">Explore</a>
                <a class="menu-mation" href="news.php">News</a>
            </nav>

            <div class="profile">
                <a class="profile-nav" href="profile.html">
                  <img src="../images/9.jpeg" class="profile-img">
                </a>
                <span class="profile-name"><?= $_SESSION['name']; ?></span>
            </div>
        </header>

        <h2 class="section-title">Chart Beat</h2>

        <div class="content-layout">


            <div class="left-column">

                <div class="news-row">
                    <img src="https://i.pinimg.com/736x/89/5d/54/895d54a00f5d5f27e793a1a79175f821.jpg">

                    <div class="news-info">
                        <span class="news-category">Chart Beat</span>
                        <a href="https://www.billboard.com/music/chart-beat/taylor-swift-fate-of-ophelia-number-1-pop-airplay-1236113855/">
                            <h3 class="news-title">
                                Taylor Swift’s ‘The Fate of Ophelia’ Becomes Her Record-Extending 14th No.1 on Pop Airplay Chart
                            </h3>
                        </a>
                        <span class="news-author">Atlass</span>
                    </div>
                </div>

                <div class="news-row">
                    <img src="https://i.pinimg.com/736x/6b/66/06/6b6606a2c9b18c0de4ece9bb179d4e36.jpg">
                    <div class="news-info">
                        <span class="news-category">Chart Beat</span>
                        <a href="https://ca.billboard.com/music/pop/sabrina-carpenter-mans-best-friend-platinum-1236112512/">
                            <h3 class="news-title">
                                Sabrina Carpenter Celebrates ‘Man’s Best Friend’ Going Platinum: I’m Choosing Gratitude This Season
                            </h3>
                        </a>
                        <span class="news-author">Javier</span>
                    </div>
                </div>

                <div class="news-row">
                    <img src="https://i.pinimg.com/1200x/ce/9a/c4/ce9ac4f05e264f9bb8332a36f6853a54.jpg">

                    <div class="news-info">
                        <span class="news-category">Chart Beat</span>
                        <a href="https://www.billboard.com/pro/2026-grammy-nominations-by-label-interscope-island-lead/">
                            <h3 class="news-title">
                                2026 Grammy Nominations by Label: Interscope, Island Lead the Pack
                            </h3>
                        </a>
                        <span class="news-author">Viridian</span>
                    </div>
                </div>

                <div class="news-row">
                    <img src="https://i.pinimg.com/1200x/c9/74/0b/c9740b4af3c78da002791b067f2a6c43.jpg">  
                    <div class="news-info">
                        <span class="news-category">Chart Beat</span>
                        <a href="https://www.billboard.com/music/awards/kendrick-lamar-tops-2026-grammy-nominations-1236107372/"> 
                            <h3 class="news-title">
                                Kendrick Lamar Leads 2026 Grammy Nominations
                            </h3>
                        </a>
                        <span class="news-author">Javier</span>
                    </div>
                </div>


                <div class="news-row">
                    <img src="https://www.billboard.com/wp-content/uploads/2025/04/Parmalee-cr-Adam-Budd-02-press-2025-billboard-1548.jpg?w=942&h=628&crop=1">  
                    <div class="news-info">
                        <span class="news-category">Chart Beat</span>
                        <a href="https://www.billboard.com/music/chart-beat/parmalee-cowgirl-number-one-country-airplay-chart-1236129527/">
                            <h3 class="news-title">
                                Parmalee Rides to Fifth No. 1 on Country Airplay Chart With ‘Cowgirl’
                            </h3>
                        </a>

                        <span class="news-author">Javier</span>
                    </div>
                </div>
            </div>


            <div class="right-column">


                <div class="category-box">
                    <button class="button-motion">Pop</button>
                    <button class="button-motion">R&B</button>
                    <button class="button-motion">Hip-Hop</button>
                    <button class="button-motion">Country</button>
                    <button class="button-motion">Producers</button>
                </div>


                <div class="featured-news">
                    <img src="https://i.pinimg.com/736x/6b/66/06/6b6606a2c9b18c0de4ece9bb179d4e36.jpg">
                    <a href="https://ca.billboard.com/music/pop/sabrina-carpenter-mans-best-friend-platinum-1236112512/">
                        <h3 class="featured-title">
                            Sabrina Carpenter Celebrates ‘Man’s Best Friend’
                        </h3>
                    </a>
                    <p class="featured-desc">
                        Going Platinum: I’m Choosing Gratitude This Season
                    </p>
                </div>

            </div>

        </div>

    </div>
    <script>
   
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