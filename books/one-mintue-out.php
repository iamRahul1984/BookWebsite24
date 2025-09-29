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
            <img src="../images/grayman/grayman book 9.jpg" alt="Book " class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>One Minute Out (Gray Man #9)</h1>
                <p>BY Mark Greaney</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong>One Minute Out</p>
                <p><strong>Author:</strong> Mark Greaney</p>   
                <p><strong>Published:</strong> February 18, 2020</p>
                <p><strong>Genre:</strong> Action,Thriller,Espionage</p>
                <p><strong>Pages:</strong> 529</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>9780451488978</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                
TIME IS RUNNING OUT FOR THE CITY OF ANGELS

While on a mission to Croatia, Court Gentry uncovers a human trafficking operation. The trail leads from the Balkans all the way back to Hollywood.
Court is determined to shut it down, but his CIA handlers have other plans. The criminal ringleader has actionable intelligence about a potentially devastating terrorist attack on the US. The CIA won't move until they have that intel. It's a moral balancing act with Court at the pivot point.

                </article>
            </div>


___________________________________________________________________________________________________________
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/one-minute-out/p/itmbf2bd431e7f25">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/gray-man-series/s?k=the+gray+man+series">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
____________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/mark-greaney.jpg" alt="" srcset="">
               ​Mark Greaney, born on October 25, 1967, in Memphis, Tennessee, is a renowned American novelist specializing in thriller and war fiction genres. He gained prominence through his collaboration with Tom Clancy, co-authoring several novels in the Jack Ryan universe and continuing the series after Clancy's passing in 2013. Greaney is also the creator of the Gray Man series, which has been adapted into a Netflix film starring Ryan Gosling and Chris Evans. Holding degrees in political science and international relations, Greaney's academic background enriches his writing with authentic geopolitical insights. His commitment to realism is evident in his extensive research, including traveling to over 35 countries and training in firearms, battlefield medicine, and close-quarters combat. Residing in Memphis with his wife Allison and three stepchildren, Greaney continues to contribute significantly to the thriller genre with his compelling narratives and well-researched plots.
            </article>
                
            </div>

_____________________________________________________________________________________________________________
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