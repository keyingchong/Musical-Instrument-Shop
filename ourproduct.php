<div class="oproduct-row">
    <div class="oproduct-column">
        <img class="oproduct-img" id="guitar" src="images/guitar.png" style="border-radius:50%;width:150px; height:150px;" data-link="/test/shop/guitar.php">
        <p>Acoustic Guitar</p>
    </div>
    <div class="oproduct-column">
        <img class="oproduct-img" id="drum" src="images/drum.png" style="border-radius:50%;width:150px; height:150px;" data-link="/test/shop/drum.php">
        <p>Drum</p>

    </div>
    <div class="oproduct-column">
        <img class="oproduct-img" id="keyboard" src="images/piano.png" style="border-radius:50%;width:150px; height:150px;" data-link="/test/shop/keyboard.php">
        <p>Keyboard</p>

    </div>
    <div class="oproduct-column">
        <img class="oproduct-img" id="saxophone" src="images/saxophone.png" style="border-radius:50%;width:150px; height:150px;" data-link="/test/shop/saxophone.php">
        <p>Saxophone</p>
    </div>
    <div class="oproduct-column">
        <img class="oproduct-img" id="trumpet" src="images/trumpet.png" style="border-radius:50%;width:150px; height:150px;" data-link="/test/shop/trumpet.php">
        <p>Trumpet</p>
    </div>
</div>

<script>
const instrumentImgs = document.getElementsByClassName("oproduct-img");

for (let i = 0; i < instrumentImgs.length; i++) {
    instrumentImgs[i].addEventListener("click", function() {
        this.classList.add("flip");
        const link = this.getAttribute("data-link");
        setTimeout(() => {
            this.classList.remove("flip");
            window.location.href = link;
        }, 1000);
    });
}
</script>