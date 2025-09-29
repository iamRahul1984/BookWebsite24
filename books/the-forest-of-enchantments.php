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
            <img src="../images/indian-author/the forest of enchantments.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>The Forest Of Enchantments</h1>
                <p>BY Chitra Banerjee Divakaruni</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> The Forest Of Enchantments</p>
                <p><strong>Author:</strong> Chitra Banerjee Divakaruni</p>   
                <p><strong>Published:</strong> 7 January 2019</p>
                <p><strong>Genre:</strong> Fiction,Mythology,Historical,Fantasy </p>
                <p><strong>Pages:</strong> 372</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong> 9353025982,ISBN-13-978-9353025984</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
              
                The Ramayana, one of the world’s greatest epics, is also a tragic love story. In this brilliant retelling, Chitra Banerjee Divakaruni places Sita at the centre of the novel: this is Sita’s version. The forest of enchantments is also a very human story of some of the other women in the epic, often misunderstood and relegated to the margins: ka I key I, surpanakha, Mandodari. A powerful comment on duty, betrayal, infidelity and honour, it is also about women’s struggle to retain autonomy in a world that privileges men, as Chitra transforms an ancient story into a gripping, contemporary battle of Wills. While the Ramayana resonates even today, she makes it more relevant than ever, in the underlying questions in the novel: how should women be treated by their loved ones? What are their rights in a relationship? When does a woman need to stand up and say, ‘enough!’.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/the-forest-of-enchantments/p/itmfbbp6hzwku5ep">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Forest-Enchantments-Chitra-Banerjee-Divakaruni/dp/9353025982">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/chitra-banerjee.jpg" alt="" srcset="">
              
                Chitra Banerjee Divakaruni is an award-winning author and poet. Her themes include the Indian experience, contemporary America, women, immigration, history, myth, and the joys and challenges of living in a multicultural world. Her work is widely known, as she has been published in over 50 magazines, including the Atlantic Monthly and The New Yorker, and her writing has been included in over 50 anthologies. Her works have been translated into 29 languages, including Dutch, Hebrew, Hindi and Japanese. Divakaruni also writes for children and young adults.Her novels One Amazing Thing, Oleander Girl, Sister of My Heart and Palace of Illusions are currently in the process of being made into movies. http://www.chitradivakaruni.com/books.... Her newest novel is Before We Visit the Goddess (about 3 generations of women-- grandmother, mother and daughter-- who each examine the question "what does it mean to be a successful woman.") Simon & Schuster.

She was born in India and lived there until 1976, at which point she left Calcutta and came to the United States. She continued her education in the field of English by receiving a Master’s degree from Wright State University in Dayton, Ohio, and a Ph.D. from the University of California, Berkeley.

To earn money for her education, she held many odd jobs, including babysitting, selling merchandise in an Indian boutique, slicing bread in a bakery, and washing instruments in a science lab. At Berkeley, she lived in the International House and worked in the dining hall. She briefly lived in Illinois and Ohio, but has spent much of her life in Northern California, which she often writes about. She now lives in Texas, which has found its way into her upcoming book, Before We Visit the Goddess.

Chitra currently teaches in the nationally ranked Creative Writing program at the Univ. of Houston. She serves on the Advisory board of Maitri in the San Francisco Bay Area and Daya in Houston. Both these are organizations that help South Asian or South Asian American women who find themselves in abusive or domestic violence situations. She is also closely involved with Pratham, an organization that helps educate children (especially those living in urban slums) in India.

She has judged several prestigious awards, such as the National Book Award and the PEN Faulkner Award.

Two of her books, The Mistress of Spices and Sister of My Heart, have been made into movies by filmmakers Gurinder Chadha and Paul Berges (an English film) and Suhasini Mani Ratnam (a Tamil TV serial) respectively. Her novels One Amazing Thing and Palace of Illusions have currently been optioned for movies. Her book Arranged Marriage has been made into a play and performed in the U.S. and (upcoming, May) in Canada. River of Light, an opera about an Indian woman in a bi-cultural marriage, for which she wrote the libretto, has been performed in Texas and California.

She lives in Houston with her husband Murthy. She has two sons, Anand and Abhay (whose names she has used in her children’s novels).
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