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
            <img src="../images/indian-author/ghosts of the silent hills.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Ghost of the Silent Hills</h1>
                <p>BY Anita Krishan</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Ghost Stories of Shimla Hills: Stories based on true hauntings</p>
                <p><strong>Author:</strong> Anita Krishan</p>   
                <p><strong>Published:</strong> 2019 December</p>
                <p><strong>Genre:</strong> Horror,Thriller,Mystery</p>
                <p><strong>Pages:</strong> 312</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>  9789389717136</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
              
THE DEAD DO NOT REST TILL THEY GET WHAT THEY WANT.You have arrived in the hills. In here, you are surrounded by dense, menacing forests, enveloped in a deadly silence . You never know what lurks here in the cold, dark night.Do not walk alone after sunset in the hills. A beautiful woman in white haunts the lonely pathways, looking to enchant and ensnare men . All the people who died in accidents here .  They say you hear their screams at night.And the deserted lodges sitting amidst lush greenery and calm streams . Spirits lie in wait here, ready to prey on the living. There are sceptics who did not heed these warnings. They tried to rationalize what they saw, what they felt. But when they came face to face with the beings that they believed didn't exist, they couldn't run away anymore .Ghosts of the Silent Hills is a collection that will make your nights a little scarier, encompassing the very best spine-chilling stories based on true hauntings.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/ghosts-silent-hills/p/itma394027f399b0">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Ghosts-Silent-Hills-Stories-hauntings/dp/9389717132">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/anita-krishan.jpg" alt="" srcset="">
              
Born in Shimla in 1955, Anita Krishan spent the initial twenty-two years of her life in this pristine Himalayan town, earning her master’s degree in English literature from Himachal University, and moving on to a career of introducing delights of the language to her young learners. In her long tenure as an educator, she has enriched the lives of countless students with the mystery of the narrative. A versatile writer, each of her literary works appertains to a different genre . . . from the joys and travails of life, to terrorism that has brought the world to its tenterhooks, to now the paranormal. She has travelled extensively around the globe absorbing the diverse human ethos and cultures—the delectable food for her thoughts. Presently, she lives in Gurgaon with her family.
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