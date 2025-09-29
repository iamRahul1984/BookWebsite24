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
            <img src="../images/indian-author/Ghost stories of shimla hills.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Ghost Stories of Shimla Hills</h1>
                <p>BY Minakshi Chaudhry</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Ghost Stories of Shimla Hills</p>
                <p><strong>Author:</strong> Minakshi Chaudhry</p>   
                <p><strong>Published:</strong> October 1, 2005</p>
                <p><strong>Genre:</strong> Horror,Thriller,Mystery</p>
                <p><strong>Pages:</strong> 158</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong> 9798129107533</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                Ghost Stories of Shimla Hills by Minakshi Chaudhry is an anthology of supernatural and horror stories narrated by the local people of Shimla.

In Ghost Stories of Shimla Hills, author Minakshi Chaudhry presents the readers with a collection of local supernatural myths and legends of Shimla. The stories included in the book are authentic and have originated from encounters with the supernatural that the locals have actually experienced. The book has several spine-chilling stories which will prevent readers from putting the book down. Ghost Stories of Shimla Hills was published in 2005 and due its extraordinary success, a second set of supernatural tales, More Ghost Stories Of Shimla Hills, followed in 2012.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/ghost-stories-shimla-hills/p/itmdytpvf9beaex8">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Ghost-Stories-Shimla-Minakshi-Chaudhry/dp/B005R3ELQY">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/minakshi.jpeg" alt="" srcset="">
                Minakshi Chaudhry is a prolific Indian author and former journalist, best known for her literary works inspired by the Himalayan region. She resides in Himachal Pradesh with her husband and draws much of her creative inspiration from the culture, folklore, and beauty of the hills around her.

Minakshi has authored over 25 books spanning various genres, including ghost stories, love tales, travelogues, memoirs, and children’s fiction. Some of her most notable works include Ghost Stories of Shimla Hills, Love Stories of Shimla Hills, and Whispering Deodars: Writings from Shimla Hills. Her compelling memoir, Sunshine: My Encounter with Cancer, narrates her personal battle with cancer, offering readers a moving account of hope and resilience.

Her SHIMLA Investigators series, aimed at younger readers, blends mystery and adventure with local settings, adding a unique voice to Indian children's literature. Minakshi’s work reflects a strong connection to the Himalayan life, traditions, and storytelling styles, making her a respected figure in regional Indian writing.

Although her exact date of birth is not publicly known, her writing has left a lasting impression, especially among readers who appreciate stories rooted in the heart of nature and cultural authenticity.
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