<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Black Anchor</title>
</head>
<body>

    <!-- Slideout Menu -->
    <div id="slideout-menu">
        <ul>
            <li><a href="#">Home</a>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">About</a></li>
            <li>
                <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>

    <!-- Navigation -->
    <nav>
        <div id="logo-image">
            <a href="#">
                <img src="img/logo.png" alt="black anchor logo">
            </a>
        </div>

        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li><a href="index.html" class="active">Home</a>
            </li>
            <li><a href="blogslist.html">Blog</a></li>
            <li><a href="blogslist.html">Projects</a></li>
            <li><a href="about.html">About</a></li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Search Box -->
    <div id="searchbox">
        <input type="text" placeholder="Search Here">
    </div>