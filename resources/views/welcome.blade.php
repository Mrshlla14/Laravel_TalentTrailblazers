<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="assets/13.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js" defer></script>
    <title>Home</title>
</head>
<body>
    <center>
        <header>
            <nav>
                <div class="logo" id="logo">
                    <img src="assets/13.png" alt="" width="150" height="auto" />
                </div>
                <a href="index.php" id="homeLink">Home</a>
                <a href="#" id="categoryLink">Category</a>
                <a href="Login.php" id="loginLink">Login</a>
            </nav>
        </header>
        <main>
            <div class="jumbotron" id="jumbotron">
                <h1>Find Your Best Talent</h1>
                <p>Come join us, discover and develop that talent!!</p>
                <img src="assets/6.jpg" alt="" width="450" height="250" id="jumbotronImage" />
                <div class="arrow arrow-left" onclick="prevImage()">&lt;</div>
                <div class="arrow arrow-right" onclick="nextImage()">&gt;</div>
                <div class="center">
                    <button type="button" id="getStartedBtn" onclick="showPopup()">GET STARTED</button>
                </div>
            </div>
            <div class="cards-categories" id="carousel">
                <div class="card" id="card1">
                    <img src="assets/12.jpg" alt="" width="300" height="auto" />
                </div>
                <div class="card" id="card2">
                    <img src="assets/9.png" alt="" width="300" height="auto" />
                </div>
                <div class="card" id="card3">
                    <img src="assets/3.png" alt="" width="300" height="auto" />
                </div>
                <div class="card" id="card4">
                    <img src="assets/2.png" alt="" width="300" height="auto" />
                </div>
            </div>
        </main>
        <footer>
            <h5>&copy;TALENTTRAILBLAZERS</h5>
        </footer>
        <!-- PopUp Box -->
        <div id="popupBox" class="popup">
            <div class="popup-content">
                <span class="close" onclick="hidePopup()">&times;</span>
                <h2>Welcome to TalentTrailblazers</h2>
                <p>Thank you for showing interest. Please login or register to explore more.</p>
                <a href="Login.php">Login</a>
                <a href="Regis.php">Register</a>
            </div>
        </div>
    </center>
    <script>
        function showPopup() {
            document.getElementById("popupBox").style.display = "block";
        }

        function hidePopup() {
            document.getElementById("popupBox").style.display = "none";
        }

        document.addEventListener("DOMContentLoaded", function() {
            const jumbotronImage = document.getElementById("jumbotronImage");
            const images = [
                "assets/12.jpg",
                "assets/9.png",
                "assets/3.png",
                "assets/2.png"
            ];

            let currentIndex = 0;

            function showImage(index) {
                jumbotronImage.src = images[index];
            }

            function nextImage() {
                currentIndex = (currentIndex + 1) % images.length;
                showImage(currentIndex);
            }

            function prevImage() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                showImage(currentIndex);
            }

            // Tampilkan gambar pertama saat halaman dimuat
            showImage(currentIndex);

            // Tambahkan event listener untuk arrow keys
            document.addEventListener("keydown", function(event) {
                if (event.key === "ArrowRight") {
                    nextImage();
                } else if (event.key === "ArrowLeft") {
                    prevImage();
                }
            });
        });
    </script>
</body>

</html>
