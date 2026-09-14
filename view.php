<?php

include 'connect.php';

$sql = "SELECT * FROM feedback ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Brew & Bite — Reviews</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>


<header>

    <div class="navbar">

        <a href="index.php" class="logo">
            ☕ Brew & Bite
        </a>

        <nav>

            <a href="index.php">Home</a>

            <a href="index.php#menu">Menu</a>

            <a href="index.php#review">
                Leave a Review
            </a>

        </nav>

    </div>

</header>


<section class="database-reviews">

    <p class="section-label">
        BREW & BITE / DATABASE REVIEWS
    </p>

    <h1>
        What our visitors said.
    </h1>


    <?php if (isset($_GET['success'])): ?>

        <div class="success-message">

            ✓ Your review was successfully
            saved to the database!

        </div>

    <?php endif; ?>


    <div class="database-grid">

        <?php if (mysqli_num_rows($result) > 0): ?>

            <?php $display_number = 1; ?>

            <?php while ($row = mysqli_fetch_assoc($result)): ?>

                <div class="database-card">

                    <div class="card-top">

                        <span class="review-id">

                            Review #<?= $display_number ?>

                        </span>

                        <span class="date">

                            <?= htmlspecialchars($row['created_at']) ?>

                        </span>

                    </div>


                    <h2>

                        <?= htmlspecialchars($row['student_name']) ?>

                    </h2>


                    <p class="item-name">

                        ☕
                        <?= htmlspecialchars($row['subject_name']) ?>

                    </p>


                    <p class="roll-number">

                        Student / Roll No:
                        <?= htmlspecialchars($row['roll_no']) ?>

                    </p>


                    <p class="database-feedback">

                        <?= htmlspecialchars($row['feedback_text']) ?>

                    </p>


                    <form
                        action="delete.php"
                        method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this review?');"
                    >

                        <input
                            type="hidden"
                            name="id"
                            value="<?= htmlspecialchars($row['id']) ?>"
                        >

                        <button
                            type="submit"
                            class="delete-button"
                        >
                            🗑 Delete Review
                        </button>

                    </form>

                </div>

                <?php $display_number++; ?>

            <?php endwhile; ?>

        <?php else: ?>

            <div class="empty-state">

                <h2>
                    No reviews yet.
                </h2>

                <p>
                    Be the first person to leave a review!
                </p>

                <a
                    href="index.php#review"
                    class="primary-button"
                >
                    Leave a Review →
                </a>

            </div>

        <?php endif; ?>

    </div>


    <a
        href="index.php"
        class="back-button"
    >
        ← Back to Brew & Bite
    </a>

</section>


</body>

</html>


<?php

mysqli_close($conn);

?>