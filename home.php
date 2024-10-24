<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laundry XYZ</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<header>
    <div class="navbar">
        <div class="brand">
            <h1>la-Laundry </h1>
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="price-check.php">Price Check</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Banner slider -->
<div class="banner-slider">
    <div class="slide active"><img src="img/banner1.jpg" alt="Banner 1"></div>
    <div class="slide"><img src="img/banner2.jpg" alt="Banner 2"></div>
    <div class="slide"><img src="img/banner3.jpg" alt="Banner 3"></div>
</div>

<!-- Content Section -->
<section class="content">
    <h2>Company Profile</h2>
    <p>“What I find remarkable is that this text has been the industry’s standard dummy text ever since some printer in the 1500s took a galley of type and scrambled it to make a type specimen book; it has survived not only four centuries of letter-by-letter resetting but even the leap into electronic typesetting, essentially unchanged except for an occasional ‘ing’ or ‘y’ thrown in. It's ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek; the phrase ‘it’s Greek to me’ and ‘greeking’ have common semantic roots!” The editors published his letter in a correction headlined “Lorem Oopsum”Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? [D]Quis autem vel eum i[r]ure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
[33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga.  </p>
</section>

<footer>
    <p>Website Footer</p>
</footer>

<script>
    $(document).ready(function() {
        let currentIndex = 0;
        let slides = $(".slide");
        let totalSlides = slides.length;
    
        function showSlide(index) {
            slides.removeClass("active").eq(index).addClass("active");
        }
    
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            showSlide(currentIndex);
        }
    
        setInterval(nextSlide, 3000); // Change slide every 3 seconds
    });
</script>

</body>
</html>
