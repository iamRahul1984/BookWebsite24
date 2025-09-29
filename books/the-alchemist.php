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
            <img src="../images/Self Help/The Alchemist.jpg" alt="The Alchemist" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>The Alchemist</h1>
                <p>BY Paulo Coelho</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> The Alchemist</p>
                <p><strong>Author:</strong> Paulo Coelho</p>   
                <p><strong>Published:</strong> February 01, 1988</p>
                <p><strong>Genre:</strong> Self Help,Adventure Fiction , Fantasy Fiction</p>
                <p><strong>Pages:</strong> 187</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>9788172234980, 9788172234980 </p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                Combining magic, mysticism, wisdom, and wonder into an inspiring tale of self-discovery, The Alchemist has become a modern classic, selling millions of copies around the world and transforming the lives of countless readers across generations.

Paulo Coelho's masterpiece tells the mystical story of Santiago, an Andalusian shepherd boy who yearns to travel in search of a worldly treasure. His quest will lead him to riches far different—and far more satisfying—than he ever imagined. Santiago's journey teaches us about the essential wisdom of listening to our hearts, recognizing opportunity and learning to read the omens strewn along life's path, and, most importantly, following our dreams.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/alchemist/p/itmfc9jxsc7dckfm?pid=9788172234980">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Alchemist-Paulo-Coelho/dp/8172234988">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/paulo-coelho.webp" alt="" srcset="">
               The Brazilian author PAULO COELHO was born in 1947 in the city of Rio de Janeiro. Before dedicating his life completely to literature, he worked as theatre director and actor, lyricist and journalist. In 1986, PAULO COELHO did the pilgrimage to Saint James of Compostella, an experience later to be documented in his book The Pilgrimage. In the following year, COELHO published The Alchemist. Slow initial sales convinced his first publisher to drop the novel, but it went on to become one of the best selling Brazilian books of all time. Other titles include Brida (1990), The Valkyries (1992), By the river Piedra I sat Down and Wept (1994), the collection of his best columns published in the Brazilian newspaper Folha de São Paulo entitle Maktub (1994), the compilation of texts Phrases (1995), The Fifth Mountain (1996), Manual of a Warrior of Light (1997), Veronika decides to die (1998), The Devil and Miss Prym (2000), the compilation of traditional tales in Stories for parents, children and grandchildren (2001), Eleven Minutes (2003), The Zahir (2005), The Witch of Portobello (2006) and Winner Stands Alone (to be released in 2009). During the months of March, April, May and June 2006, Paulo Coelho traveled to celebrate the 20th anniversary of his pilgrimage to Saint James of Compostella in 1986. He also held surprise book signings - announced one day in advance - in some cities along the way, to have a chance to meet his readers. In ninety days of pilgrimage the author traveled around the globe and took the famous Transiberrian train that took him to Vladivostok. During this experience Paulo Coelho launched his blog Walking the Path - The Pilgrimage in order to share with his readers his impressions. Since this first blog Paulo Coelho has expanded his presence in the internet with his daily blogs in Wordpress, Myspace & Facebook. He is equally present in media sharing sites such as Youtube and Flickr, offering on a regular basis not only texts but also videos and pictures to his readers. From this intensive interest and use of the Internet sprang his bold new project: The Experimental Witch where he invites his readers to adapt to the screen his book The Witch of Portobello. Indeed Paulo Coelho is a firm believer of Internet as a new media and is the first Best-selling author to actively support online free distribution of his work.
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