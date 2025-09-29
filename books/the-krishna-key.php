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
            <img src="../images/indian-author/The-krishna-key.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>The Krishna Key</h1>
                <p>BY Ashwin Sanghi</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> The Krishna Key</p>
                <p><strong>Author:</strong> Ashwin Sanghi</p>   
                <p><strong>Published:</strong> 25 July 2022</p>
                <p><strong>Genre:</strong> Thriller,Fiction,Indian Literature,Fantasy</p>
                <p><strong>Pages:</strong> 496</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>  9356292396,ISBN-13- 978-9356292390</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                Five thousand years ago, there came to earth a magical being called Krishna, who performed countless divine miracles for the good of mankind ... Humanity was assured that he would return in a new avatar when the world needed him in the eventual Dark Age-Kaliyug. In modern times, a poor little boy grows up believing that he is that final avatar. Except, the boy is a serial killer.

In this heart-stopping tale, the arrival of a murderer who executes his gruesome and brilliantly thought-out schemes in the name of God is the first clue to a sinister conspiracy to expose an ancient secret-Krishna's priceless legacy to mankind.

From the submerged remains of Dwarka and the mysterious lingam of Somnath to the icy heights of Mount Kailash, from the sand-washed ruins of Kalibangan to a Vrindavan temple destroyed by Aurangzeb, historian Ravi Mohan Saini must embark on a perilous quest to prevent a gross miscarriage of justice and discover the cryptic location of Krishna's most prized possession.

Seamlessly blending fact and fiction, master storyteller Ashwin Sanghi's The Krishna Key is a fitting addition to the Bharat Collection, reviving the ancient lore of the Blue God and embedding it into an unnerving narrative of conspiracy and crime set in modern India.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/krishna-key-9381626685/p/itmdayz59gtzmq22?pid=9789381626689&ref=8fcd28a4-d3cf-495e-8f19-d7ccc7f7e749&srno=m_1_1&otracker=from-searchaffid=drvishaalb">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Krishna-Key-Bharat-3/dp/9356292396">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/ashwin-sanghvi.jpg" alt="" srcset="">
                Ashwin Sanghi—entrepreneur by day, novelist by night—has all the usual qualifications of an Indian businessman. Schooling at the Cathedral & John Connon School, a B.A. (Economics) from St. Xavier’s College, and an M.B.A. (Finance) from the Yale School of Management. Besides being a businessman, Ashwin manages a parallel career as writer of fiction. Ashwin’s first novel, ‘The Rozabal Line’ was originally self-published in 2007 under his anagram-pseudonym—Shawn Haigins. The book was subsequently published by Westland in 2008 and 2010 in India under his own name and went on to become a national bestseller. ‘Chanakya’s Chant’ is his second novel in the historical-fiction genre. The book has remained on AC Nielsen’s India Bookscan Top-10 for all of 2011. It won the ‘2010 Crossword-Vodafone Popular Choice Award’ in September 2011. UTV has purchased the movie rights to the book and a film based upon the story is expected soon. Dr. Shashi Tharoor released the novel in Mumbai calling it an “enthralling, delightfully-interesting and gripping read with historical research that is impressive.” The Hindustan Times has called it “a cracker of a page-turner.” Ashwin is currently working on his third novel, as yet untitled, that explores business strategies in ancient India. Ashwin is also working towards a Ph.D. in Creative Writing from Bangor University in Wales. Ashwin lives in Mumbai with his wife, Anushika, and his eight-year old son, Raghuvir.
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