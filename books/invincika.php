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
            <img src="../images/indian-author/invinsika.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Invincika</h1>
                <p>BY Varun Sayal</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Invincika :Superheroes of the Multiverse #1</p>
                <p><strong>Author:</strong> Varun Sayal</p>   
                <p><strong>Published:</strong> 30 April 2022</p>
                <p><strong>Genre:</strong> Science Fiction,Fantasy,Dystopia,Superhero fiction</p>
                <p><strong>Pages:</strong> 371</p>
                <p><strong>Language:</strong>English, Hindi</p>
                <p><strong>ISBN:</strong>  1637544073, ISBN-13 - 978-1637544075</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                She tries to save the world . but can she save herself?

Ulka trained besides the Sigma, but unlike them, her powers remained dormant.

Until a ballistic weapon finally awakened her hidden abilities and flipped her world upside down.

As Ulka struggled with her new found powers, a Magnetar raced toward earth, causing tides, volcanoes and tremors. The super-humans sent to counter the Magnetar never returned, and Ulka is the world’s last hope.

Even if she succeeds, there’s a much bigger threat lurking in the shadows, waiting to unleash a fate worse than death.

If you like superhero stories with riveting action sequences, you will love this book .
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/invincika/p/itmffa569e731416?pid=9781637544075">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Invincika-Varun-Sayal/dp/1637544073">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/varun-sayal.jpg" alt="" srcset="">
              
                Varun Sayal is an Indian author best known for his science fiction and fantasy novels that weave together mythology, time travel, and speculative technology. He was born in New Delhi, India, and developed a passion for storytelling at an early age, especially tales exploring parallel universes and metaphysical concepts. Though his exact date of birth is not publicly available, he graduated with a Bachelor of Technology from the Indian Institute of Technology (IIT) and later earned an MBA from the Indian School of Business (ISB).

Professionally, Sayal has worked as an engineer and data science manager—fields that enrich the technical depth of his stories. His debut work, Time Crawlers, is a collection of interconnected short stories set in alternate realities. Following its success, he released the Time Travelers series, which includes books like Demons of Time and Devourers from Suryaksh. These works have been praised for their imaginative scope and philosophical undertones.

Outside of writing, Varun Sayal has experience in theater, having written, directed, and acted in several plays. He has also explored independent filmmaking. Currently, he resides in Hyderabad, and continues to push the boundaries of Indian science fiction and fantasy literature.
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