<?php
    include_once 'header.php';
?>  

<h2>Products</h2>
<label for="product_sort">Sort By:</label>
<select name="product_sort">
    <option value="sort-name-alpha">Name: A-Z</option>
    <option value="price-low">Price: Lowest - Highest</option>
    <option value="price-high">Price: Highest - Lowest</option>
    <option value="category">Categories</option>
    <option value="popularity">Popularity</option>
</select>

<?php
    include_once 'footer.php';
?>