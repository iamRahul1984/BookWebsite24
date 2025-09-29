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
            <img src="../images/Self Help/The 48 Laws of Power.jpg" alt="The 48 Law of Power" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>The 48 Laws of Power</h1>
                <p>BY Robert Greene</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong>The 48 Laws of Power</p>
                <p><strong>Author:</strong> Robert Greene</p>   
                <p><strong>Published:</strong> February 18, 2014</p>
                <p><strong>Genre:</strong> Self Help, Non-Fiction , Personal Development</p>
                <p><strong>Pages:</strong> 452</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong> January 1, 1998 </p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                Amoral, cunning, ruthless, and instructive, this multi-million-copy New York Times bestseller is the definitive manual for anyone interested in gaining, observing, or defending against ultimate control – from the author of The Laws of Human Nature.

In the book that People magazine proclaimed “beguiling” and “fascinating,” Robert Greene and Joost Elffers have distilled three thousand years of the history of power into 48 essential laws by drawing from the philosophies of Machiavelli, Sun Tzu, and Carl Von Clausewitz and also from the lives of figures ranging from Henry Kissinger to P.T. Barnum.

Some laws teach the need for prudence (“Law 1: Never Outshine the Master”), others teach the value of confidence (“Law 28: Enter Action with Boldness”), and many recommend absolute self-preservation (“Law 15: Crush Your Enemy Totally”). Every law, though, has one thing in common: an interest in total domination. In a bold and arresting two-color package, The 48 Laws of Power is ideal whether your aim is conquest, self-defense, or simply to understand the rules of the game.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/48-laws-power/p/itmfcf5ns96tnh9f">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Laws-Power-Robert-Greene-Collection/dp/1861972784">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/robert-greene.webp" alt="" srcset="">
                Best-selling author and public speaker, Robert Greene was born in Los Angeles. He attended U.C. California at Berkeley and the University of Wisconsin at Madison, where he received a degree in classical studies. He has worked in New York as an editor and writer at several magazines, including Esquire; and in Hollywood as a story developer and writer.

Robert has lived in London, Paris, and Barcelona; he speaks several languages and has worked as a translator. In 1995 he was involved in the planning and creation of the art school Fabrica, outside Venice, Italy. There he met Joost Elffers, the New York book packager and discussed with him his idea for a book on power and manipulation, the ultimate modern version of Machiavelli's The Prince.

Robert and Joost became partners and in 1998, The 48 Laws of Power was born. The book has been a national and international bestseller, and has been translated into 17 languages. In 2001, Robert released his second book, The Art of Seduction, which is more than a sequel to The 48 Laws; it is both a handbook on how to wield the ultimate form of power, and a detailed look at the greatest seducers in history.

The third in this highly anticipated series of books, The 33 Strategies of War, hit bookstores January 2006 and offers a strategic look behind the movements of War in application to everyday life. In addition to having a strong following within the business world and a deep following in Washington, DC, these books are also being hailed by everyone from war historians to some of the heaviest hitters in the rap world (including Jay-Z and 50 Cent).

The popularity of these books along with their vast and fiercely loyal audience proves these are profound, timeless lessons from historical leaders that still ring true in today's culture. Robert currently lives in Los Angeles.
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