<?php

include 'connect.php';

$menu_items = [
    [
        "name" => "Velvet Flat White",
        "price" => "₹180",
        "description" => "Double espresso, silky milk and a little quiet confidence."
    ],
    [
        "name" => "Orange Blossom Cold Brew",
        "price" => "₹210",
        "description" => "Slow-steeped coffee with a bright citrus finish."
    ],
    [
        "name" => "Cardamom Chai",
        "price" => "₹150",
        "description" => "Fragrant chai brewed strong and served warm."
    ],
    [
        "name" => "The Campus Melt",
        "price" => "₹260",
        "description" => "Sourdough, three cheeses and caramelised onion."
    ],
    [
        "name" => "Smoky Corn Toastie",
        "price" => "₹230",
        "description" => "Charred corn, smoked cheddar, herbs and green chilli."
    ],
    [
        "name" => "Lemon Olive Oil Cake",
        "price" => "₹170",
        "description" => "Soft lemon cake with a spoon of fresh cream."
    ],
    [
        "name" => "Salted Jaggery Brownie",
        "price" => "₹160",
        "description" => "Deep cocoa, dark jaggery and a hint of sea salt."
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Brew & Bite — Café Review</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<!-- ================= NAVBAR ================= -->

<header>

    <div class="navbar">

        <a href="#home" class="logo">
            ☕ Brew & Bite
        </a>

        <nav>

            <a href="#home">Home</a>

            <a href="#story">Our Story</a>

            <a href="#menu">Menu</a>

            <a href="view.php">Reviews</a>

            <a href="#review" class="nav-button">
                Leave a Review
            </a>

        </nav>

    </div>

</header>


<!-- ================= HERO ================= -->

<section class="hero" id="home">

    <div class="hero-content">

        <p class="small-title">
            A CAMPUS CAFÉ WORTH TALKING ABOUT
        </p>

        <h1>
            Good Coffee.<br>
            <span>Great Food.</span><br>
            Your Honest Review.
        </h1>

        <p class="hero-text">

            Brew & Bite is your cozy corner for coffee,
            comfort food and honest opinions.

            Come curious. Leave with an opinion.

        </p>

        <div class="hero-buttons">

            <a href="#menu" class="primary-button">
                Explore Menu →
            </a>

            <a href="#review" class="secondary-button">
                Leave a Review
            </a>

        </div>

        <p class="open-status">
            ● Open today · 8:00 AM — 9:00 PM
        </p>

    </div>


    <div class="coffee-art">

        <div class="coffee-circle">

            <div class="cup">

                <div class="coffee"></div>

            </div>

        </div>

        <div class="coffee-label">
            MADE<br>
            SLOWLY
        </div>

    </div>

</section>


<!-- ================= TICKER ================= -->

<div class="ticker">

    <span>Slow Coffee</span>
    <b>×</b>

    <span>Good Company</span>
    <b>×</b>

    <span>All Day Bites</span>
    <b>×</b>

    <span>Honest Reviews</span>
    <b>×</b>

    <span>Slow Coffee</span>

</div>


<!-- ================= STORY ================= -->

<section class="story" id="story">

    <div class="story-box">

        <div class="story-number">
            01
        </div>

        <h2>
            A little more time,
            in every cup.
        </h2>

        <p>

            We started Brew & Bite for the
            in-between moments — the first sip
            before class, the table that turns
            into an afternoon and the snack
            you didn't plan to order.

        </p>

        <blockquote>

            "A café should give you
            somewhere to land."

        </blockquote>

    </div>

</section>


<!-- ================= MENU ================= -->

<section class="menu-section" id="menu">

    <p class="section-label">
        02 / EAT & DRINK WELL
    </p>

    <div class="menu-heading">

        <h2>
            The Menu
        </h2>

        <p>
            Made fresh. Served warm.
        </p>

    </div>


    <div class="menu-grid">

        <?php foreach ($menu_items as $item): ?>

            <div class="menu-card">

                <div class="menu-card-top">

                    <h3>
                        <?= htmlspecialchars($item['name']) ?>
                    </h3>

                    <span class="price">
                        <?= htmlspecialchars($item['price']) ?>
                    </span>

                </div>

                <p>
                    <?= htmlspecialchars($item['description']) ?>
                </p>

                <span class="menu-tag">
                    Brew & Bite Favourite
                </span>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- ================= REVIEW PREVIEW ================= -->

<section class="reviews-preview">

    <div class="review-heading">

        <div>

            <p class="section-label">
                03 / WHAT PEOPLE SAY
            </p>

            <h2>
                The good, the great,
                and the extra shot.
            </h2>

        </div>

        <div class="rating-big">

            <strong>4.8</strong>

            <div>
                ★★★★★
            </div>

            <small>
                Café Rating
            </small>

        </div>

    </div>


    <div class="review-cards">

        <div class="review-card">

            <span>
                SAMPLE REVIEW
            </span>

            <h3>
                "The coffee is actually amazing."
            </h3>

            <p>
                The Velvet Flat White is exactly
                what I needed before class.
            </p>

            <strong>
                — Riya M.
            </strong>

        </div>


        <div class="review-card">

            <span>
                SAMPLE REVIEW
            </span>

            <h3>
                "Perfect place to hang out."
            </h3>

            <p>
                Great coffee, good music and
                the staff is super friendly.
            </p>

            <strong>
                — Arjun K.
            </strong>

        </div>


        <div class="review-card">

            <span>
                SAMPLE REVIEW
            </span>

            <h3>
                "The Campus Melt is elite."
            </h3>

            <p>
                Came for the sandwich.
                Stayed for another coffee.
            </p>

            <strong>
                — Meera S.
            </strong>

        </div>

    </div>


    <a href="view.php" class="view-reviews">
        View All Database Reviews →
    </a>

</section>


<!-- ================= REVIEW FORM ================= -->

<section class="review-section" id="review">

    <div class="review-info">

        <p class="section-label">
            04 / YOUR TURN
        </p>

        <h2>
            Tell us what
            you really think.
        </h2>

        <p>

            Reviews help us keep the good
            things good and notice the things
            that need a little more work.

        </p>

        <strong>
            Every opinion gets read
            over coffee.
        </strong>

    </div>


    <form
        action="save.php"
        method="POST"
        class="review-form"
    >

        <div class="form-row">

            <div class="form-group">

                <label for="roll_no">
                    Student / Roll No.
                </label>

                <input
                    type="text"
                    id="roll_no"
                    name="roll_no"
                    placeholder="e.g. 12345"
                    required
                >

            </div>


            <div class="form-group">

                <label for="student_name">
                    Your Name
                </label>

                <input
                    type="text"
                    id="student_name"
                    name="student_name"
                    placeholder="e.g. Anushka"
                    required
                >

            </div>

        </div>


        <div class="form-group">

            <label for="subject_name">
                What did you try?
            </label>

            <select
                id="subject_name"
                name="subject_name"
                required
            >

                <option value="">
                    Choose an item
                </option>

                <?php foreach ($menu_items as $item): ?>

                    <option value="<?= htmlspecialchars($item['name']) ?>">

                        <?= htmlspecialchars($item['name']) ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </div>


        <div class="form-group">

            <label>
                Your Rating
            </label>

            <div class="stars">

                <input
                    type="radio"
                    id="star5"
                    name="rating"
                    value="5"
                    required
                >

                <label for="star5">★</label>


                <input
                    type="radio"
                    id="star4"
                    name="rating"
                    value="4"
                >

                <label for="star4">★</label>


                <input
                    type="radio"
                    id="star3"
                    name="rating"
                    value="3"
                >

                <label for="star3">★</label>


                <input
                    type="radio"
                    id="star2"
                    name="rating"
                    value="2"
                >

                <label for="star2">★</label>


                <input
                    type="radio"
                    id="star1"
                    name="rating"
                    value="1"
                >

                <label for="star1">★</label>

            </div>

        </div>


        <div class="form-group">

            <label for="feedback_text">
                Your Honest Review
            </label>

            <textarea
                id="feedback_text"
                name="feedback_text"
                placeholder="What made your visit memorable?"
                required
            ></textarea>

        </div>


        <button
            type="submit"
            class="submit-button"
        >
            Submit Review →
        </button>


        <p class="form-note">
            Your review will be stored in our database.
        </p>

    </form>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <div class="footer-logo">
        ☕ Brew & Bite
    </div>

    <p>
        Where every sip has a story.
    </p>

    <div class="footer-links">

        <a href="#home">Home</a>

        <a href="#menu">Menu</a>

        <a href="view.php">Reviews</a>

        <a href="#review">Leave a Review</a>

    </div>

    <p class="copyright">
        © 2026 Brew & Bite
    </p>

</footer>


</body>

</html>