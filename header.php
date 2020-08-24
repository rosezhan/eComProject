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
            <a href="index.php"><img src="images/wool.png" alt="ball of yarn with knitting needles logo"></a>
            <a href="index.php"><h1>Soft and Nice</h1></a>
            <p>Grandmother Makes Soft Things</p>
            <nav>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <form method="get" action="search.php">
                    <input type="text" id="search_key" name="search_key">
                    <button type="submit">
                        <img src="images/search.png" alt="magnifying glass button to search">
                    </button>    
                </form>
            </nav>
        </header>
