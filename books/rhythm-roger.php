<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submit Review</title>
  <link rel="stylesheet" href="..//books//style.css">
</head>
<body>
<?php include '../include/navbar.php'; ?>

    <div class="container">
        <div class="left-section">
            <img src="../images/indian-author/rythm rogers.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Rhythm Roger</h1>
                <p>BY Himanshu Rai</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Rhythm Roger: The Secrets Of Electon</p>
                <p><strong>Author:</strong> Himanshu Rai</p>   
                <p><strong>Published:</strong> April 1, 2020</p>
                <p><strong>Genre:</strong> Science-Fiction, Mystery</p>
                <p><strong>Pages:</strong> 216</p>
                <p><strong>Language:</strong>English, Hindi</p>
                <p><strong>ISBN:</strong>  9390542642, ISBN-13 - 978-9390542642</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
              
                Heinrich Rudolf Hertz invented a unit of frequency and discovered electromagnetic waves, but virtually, he created a world of electromagnetic waves. The virtual world, which is always around humans, but cannot be seen or felt is the world of unknown powers, known as Electon. "World is not only what we see." Rhythm has entered Electon, now its your turn to take your path to know about the secrets of the Electon world.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/rhythm-roger-secrets-electon/p/itm15a5d0fb4d86d">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Rhythm-Roger-Secrets-Electon-Himanshu/dp/B08VN53LNF">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/himanshu-rai.jpg" alt="" srcset="">
              
                Himanshu is a Bestselling Author with a passion for storytelling. His previous novels, My Mute Girlfriend & I am always here with you, were highly appreciated and were among Amazon Bestseller charts. My Mute Girlfriend was among 25 best romance titles of 2018, and I am always here with you released in Jan-19, is among Amazon Best read.He loves writing and tries to bring real locations and themes into his stories, enabling the readers to visualize what he writes.His Last Novel, My Mute Girlfriend, Published by Srishti Publishers, was based on his real-life story and already declared as one of the best romance titles of the year 2018.
            </article>
                
            </div>

____________________________________________________________________________________________________
<br>
<br>            
  <div class="review-container">
    <h2>Leave a Review</h2>
    <form id="reviewForm" method="POST" action="submit_review.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="rating">Rating:</label>
      <div class="stars" id="stars">
        <span data-value="1">&#9733;</span>
        <span data-value="2">&#9733;</span>
        <span data-value="3">&#9733;</span>
        <span data-value="4">&#9733;</span>
        <span data-value="5">&#9733;</span>
      </div>
      <input type="hidden" name="rating" id="rating" required>

      <label for="review">Review:</label>
      <textarea id="review" name="review" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>

  <p id="message" style="color: green;"></p>
  <script src="../books/validation.js"></script>

________________________________________________________________________________________________________
<br>
<br>

  
<!-- Reviews Container -->
<div id="reviews-container">
    <h2>Reviews</h2>
    <!-- PHP script will inject reviews here -->
    <?php include '../books/fetch-reviews.php'; ?>
</div>


</body>
</html>