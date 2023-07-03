<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/home.css">
        <link rel="stylesheet" href="styles/navigation.css">
        <link rel="stylesheet" href="styles/slideshow.css">
        <link rel="stylesheet" href="styles/policy.css">
        <link rel="stylesheet" href="styles/ourproduct.css">
        <link rel="stylesheet" href="styles/trending.css">
        <link rel="stylesheet" href="styles/includes.css">
    </head>
    <body>
        <div class="home-background">
            <?php include("includes/navigation.php") ?>
            
            <?php include("slideshow/slideshow.php") ?>
            <script src="slideshow/slideshow.js"></script>
            <br><br>

            <?php include("policy.php") ?>
            <br><br>

            <h2>Our Products</h2>
            <?php include("ourproduct.php") ?>

            <h2>Trending Products</h2>
            <?php include("trending/trending.php") ?>
            <br><br>

            <h2>Our Client's Say</h2>
            <div class="client">
                <img src="images/client.jpeg">
                <h1>"</h1>
                <p>I recently purchased a guitar from this music shop and I couldn't be happier with my purchase. 
                    The guitar itself is of high quality and sounds amazing.</p>
            </div>
            <div class="client-info">
            <p style="font-weight:bold;">JOHNATHAN BIEBER</p>
            <p>Singer<p>
</div>
<br><br><br><br>
    <?php include("includes/info.php") ?>
    <?php include("includes/footer.php") ?>
        </div>
    </body>
</html>