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
            <img src="../images/Self Help/A Monk Who Sold His Ferrari.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>A Monk Who Sold His Ferrari</h1>
                <p>BY Robin S. Sharma</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> The Monk Who Sold His Ferrari: A Fable About Fulfilling Your Dreams and Reaching Your Destiny</p>
                <p><strong>Author:</strong>Robin S. Sharma</p>   
                <p><strong>Published:</strong> January 01, 1996</p>
                <p><strong>Genre:</strong> Self Help, Productivity, Personal Development</p>
                <p><strong>Pages:</strong> 208</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>  9788179921623</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                Wisdom to Create a Life of Passion, Purpose, and Peace.

This inspiring tale provides a step-by-step approach to living with greater courage, balance, abundance, and joy. A wonderfully crafted fable, The Monk Who Sold His Ferrari tells the extraordinary story of Julian Mantle, a lawyer forced to confront the spiritual crisis of his out-of-balance life. On a life-changing odyssey to an ancient culture, he discovers powerful, wise, and practical lessons that teach us to:

Develop Joyful Thoughts, Follow Our Life's Mission and Calling, Cultivate Self-Discipline and Act Courageously, Value Time as Our Most Important Commodity, Nourish Our Relationships, and Live Fully, One Day at a Time.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/monk-sold-his-ferrari/p/itmb2f5efc84928b?pid=RBKGPQMMHRJPQXNW&lid=LSTRBKGPQMMHRJPQXNWDTGAL7&marketplace=FLIPKART&cmpid=content_regionalbooks_8965229628_gmc">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Monk-Who-Sold-His-Ferrari/dp/817992162X/ref=sr_1_1_sspa?adgrpid=57437997005&dib=eyJ2IjoiMSJ9.SYUffaWgD1D3a7xSAHYkKhQ_0bedx4tDltxj_6ckErgWZFmLEUdxs7-mo4LQSpa-BCCqS2JlsGeSnxZ5WU3iJvLuTP6FeA_OipLzdn7LqoQ0-PK3tU9b1QQaN4ap21C-R9lFSJe1RQLgO_V1Cc9f4JVEU0DWhjxaHQqDv0IrnTtijb8R2JOF50vATGDPzFFRflKMN9gUxw0j4VNJvJQscTdGVj1yQZgdDrvqQaV8hy8.lS5mrp_U3CHqqdxIf38E-c4UE9LUgMugv6NFp9lXWf8&dib_tag=se&ext_vrnc=hi&hvadid=499120298627&hvdev=c&hvlocphy=9198122&hvnetw=g&hvqmt=e&hvrand=11797935459486624383&hvtargid=kwd-345585015524&hydadcr=1075_2319494&keywords=a+monk+who+sold+his+ferrari&qid=1745143716&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&psc=1">
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