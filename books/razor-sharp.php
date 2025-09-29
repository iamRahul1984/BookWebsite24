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
            <img src="../images/indian-author/razor-sharp.jpeg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Razor Sharp</h1>
                <p>BY Ashwin Sanghi</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Razor Sharp - A Kutta Kadam Thriller</p>
                <p><strong>Author:</strong> Ashwin Sanghi</p>   
                <p><strong>Published:</strong> January 22, 2024</p>
                <p><strong>Genre:</strong> Thriller,Fiction,Indian Literature</p>
                <p><strong>Pages:</strong> 316</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>  9356997217, ISBN-13 - 978-9356997219</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                A baffling crime. A rundown ex-cop. But he's their best bet.

A city on edge

A ruthless serial killer stalks the streets of Mumbai, leaving behind a gruesome trail of tortured victims. As the city reels in terror, the authorities grapple with a vital What links these seemingly random targets?

A dogged investigator

Enter Prakash Kadam, once a decorated cop but now an angry, bitter wreck of a man haunted by his past. Summoned to put an end to the madness, he finds himself neck-deep in an investigation mired in police sluggishness and antiquated forensics.

A deadly game

As old enmities resurface and perplexing twists in the case push him to the limit, can Kadam find the killer before it is too late? Or will he lose someone close to him---again?

With Razor Sharp, the first book in an exciting new series, Ashwin Sanghi demonstrates yet again his undisputed mastery at weaving complex, gripping thrillers that keep readers on the edge of their seats.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/razor-sharp/p/itm35f5edee4c985?pid=9789356997219&lid=LSTBOK97893569972199QU3N5&marketplace=FLIPKART&cmpid=content_book_8965229628_gmc">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Razor-Sharp-Kutta-Kadam-Thriller/dp/9356997217">
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