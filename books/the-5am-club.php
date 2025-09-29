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
            <img src="../images/Self Help/The 5AM Club.jpeg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>The 5 AM Club</h1>
                <p>BY Robin Sharma</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong>The 5 AM Club: Own Your Morning. Elevate Your Life</p>
                <p><strong>Author:</strong>Robin Sharma</p>   
                <p><strong>Published:</strong> December 04, 2018</p>
                <p><strong>Genre:</strong> Self Help, Personal Development , Productivity</p>
                <p><strong>Pages:</strong>  336</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>  9789387944893, 9387944893</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                Legendary leadership and elite performance expert Robin Sharma introduced The 5am Club concept over twenty years ago, based on a revolutionary morning routine that has helped his clients maximize their productivity, activate their best health and bulletproof their serenity in this age of overwhelming complexity.

      Now, in this life-changing book, handcrafted by the author over a rigorous four-year period, you will discover the early-rising habit that has helped so many accomplish epic results while upgrading their happiness, helpfulness and feelings of aliveness.

      Through an enchanting—and often amusing—story about two struggling strangers who meet an eccentric tycoon who becomes their secret mentor, The 5am Club will walk you through:


How great geniuses, business titans and the world’s wisest people start their mornings to produce astonishing achievements
A little-known formula you can use instantly to wake up early feeling inspired, focused and flooded with a fiery drive to get the most out of each day
A step-by-step method to protect the quietest hours of daybreak so you have time for exercise, self-renewal and personal growth
A neuroscience-based practice proven to help make it easy to rise while most people are sleeping, giving you precious time for yourself to think, express your creativity and begin the day peacefully instead of being rushed
“Insider-only” tactics to defend your gifts, talents and dreams against digital distraction and trivial diversions so you enjoy fortune, influence and a magnificent impact on the world
Part manifesto for mastery, part playbook for genius-grade productivity and part companion for a life lived beautifully, The 5am Club is a work that will transform your life. Forever.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/5-am-club/p/itmf9z65he3wkmwj?pid=9789387944893">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/AM-Club-Your-Morning-Elevate/dp/9387944891/ref=sr_1_1_sspa?adgrpid=73346413124&ext_vrnc=hi&hvadid=356392288215&hvdev=c&hvlocphy=9198122&hvnetw=g&hvqmt=e&hvrand=4755948248413757653&hvtargid=kwd-851356211411&hydadcr=12617_1949863&keywords=the+5am+club+amazon&qid=1745140666&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/robin-sharma.jpg" alt="" srcset="">
                Robin Sharma, born on June 16, 1964, in Uganda, is a Canadian writer, motivational speaker, and leadership expert best known for his self-help and personal development books. His family moved to Canada when he was a child, and he was raised in Nova Scotia. Sharma holds a law degree from Dalhousie University in Halifax, Nova Scotia, and initially worked as a litigation lawyer before leaving his legal career to pursue writing and motivational speaking.

He rose to international fame with his book *The Monk Who Sold His Ferrari*, a fable about achieving personal and professional fulfillment. The book, which blends Eastern philosophy with Western success principles, has sold millions of copies worldwide and been translated into more than 70 languages.

Robin Sharma has since authored several bestsellers, including *The 5 AM Club*, *Who Will Cry When You Die?*, and *The Leader Who Had No Title*. He is also the founder of Sharma Leadership International, a training firm that works with top companies and organizations to inspire leadership excellence.

Sharma is known for his deep insights into productivity, leadership, and personal mastery. Despite his global success, he maintains a low profile and prefers to live a private life focused on personal growth and service.
                
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