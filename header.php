<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>eCom Project</title>
    </head>
    <body>
        <header>
            <?php 
                include_once 'alt_nav.php';
            ?>
            <img src="images/wool.png" alt="ball of yarn with knitting needles logo">
            <h1>Soft and Nice</h1>
            <p>Grandmother Makes Soft Things</p>
            <nav>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
                <form method="get" action="">
                    <input type="text" id="search_key" name="search_key">
                    <button type="submit">
                        <img src="images/search.png" alt="magnifying glass button to search">
                    </button>    
                </form>
            </nav>
        </header>
