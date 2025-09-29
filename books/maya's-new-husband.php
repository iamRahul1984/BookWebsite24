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
            <img src="../images/indian-author/maya's new husband.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Maya's New Husband</h1>
                <p>BY Neil D'Silva</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Maya's New Husband</p>
                <p><strong>Author:</strong> Neil D'Silva</p>   
                <p><strong>Published:</strong> January 2, 2015</p>
                <p><strong>Genre:</strong> Horror,Thriller,Mystery</p>
                <p><strong>Pages:</strong> 238</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>   9789385699078, 9385699075</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
              
                Maya teaches Biology in a Mumbai school. She is a hit with her students for her unconventional teaching techniques such as bringing a dead man's heart to school to explain her lessons. But, though she seems ebullient on the outside, within her own heart she harbors the pain of a recently and mysteriously deceased husband.

In such a state, Maya's paths cross with the whimsical and weird art teacher of her school, Bhaskar Sadachari. An inexplicable chemistry begins working between the two and Maya feels strangely drawn to this person.

Meanwhile, a serial killer is loose in the city. People are going missing, leaving absolutely no trace behind as though snatched by some supernatural entity. And somewhere within all this, there's a diabolical plot being hatched for Maya.

Maya's New Husband is a psychological horror tale of the most vicious kind, which will leave you squirming in abject terror for days on end.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/maya-s-new-husband/p/itmehhu2gcrzxdvj">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Mayas-New-Husband-Neil-DSilva-ebook/dp/B00RPZ01LQ?ref_=ast_author_dp&dib=eyJ2IjoiMSJ9.GX3ht6HQuELL1-mBO9CjTk42XixRhKmuhxithyhHY_aHJ-wTBCNzEiaWTVLJvbZTwr7r9G_1in-OgjHMGY-AA6_Xm7HQBkkf0P54mV7JO4tbvZh20KeShiWSs-ItM6-h3hA4fq0GMOKc-2LOCgHf2cnKa_1n5ZMFnGp08aSOezpILc8X6q-SqxDeB1wFW7S4AbtXc6GPhGCt6u5C0ybeKpYwzPIPBHRlxUdhCh372aw.oK0TF4WcQ36UZQb9VlpwSp68iStGgiwRw6HuzjCCNlY&dib_tag=AUTHOR">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/neil-d'silva.jpg" alt="" srcset="">
              
                With 12 books to his credit, Neil D’Silva is a known name in the Indian literary world. His unique stories have struck a chord with a wide range of readers, eliciting praise from various quarters. He is published with leading publishers such as Penguin Random House, Rupa Publications, and Hachette among others, and has won screen adaptation deals on four of his books.

He has been named as one of the Top 7 Indian horror writers to be read by UK’s DESIblitz magazine. Considered as one of the forerunners of contemporary Indian horror literature, he has been covered by several leading publications and is invited to speak at prominent litfests around the country.

He was a winner at the Delhi Literature Festival Short Story Competition of 2015. His book Maya’s New Husband won the title of Entertainer of the Year at the Literary Awards 2015 that was co-hosted by Authors’ Ink Publications and Inside Stories.
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