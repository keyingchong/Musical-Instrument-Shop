<div class="trending-container">
<button class="trending-btn1" onclick="changeCategory('Featured')">Featured Products</button>
<button class="trending-btn1" onclick="changeCategory('Best')">Best Sellers</button>
<button class="trending-btn1" onclick="changeCategory('New')">New Products</button>
</div>

<h2 id="trending-title"></h2>
<div id="trending-img">
    <?php include("trending/featured.php"); ?>
</div>

<script>
    function changeCategory(category) {
        var categoryTitle = document.getElementById("trending-title");
        var imageList = document.getElementById("trending-img");

        categoryTitle.innerHTML = category;
        categoryTitle.style.display = "none";

        if (category === "Featured") {
            imageList.innerHTML = `<br><?php include("trending/featured.php") ?> `;
        } else if (category === "Best") {
            imageList.innerHTML = `<br><?php include("trending/best.php") ?> `;
        } else if (category === "New") {
            imageList.innerHTML = `<br><?php include("trending/new.php") ?> `;
        }
    }
</script>
