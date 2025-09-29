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
            <img src="../images/Self Help/Can't Hurt Me.jpeg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Can't Hurt Me</h1>
                <p>BY David Goggins</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Can't Hurt Me: Master Your Mind and Defy the Odds</p>
                <p><strong>Author:</strong> David Goggins</p>   
                <p><strong>Published:</strong> November 15, 2018</p>
                <p><strong>Genre:</strong> Self Help</p>
                <p><strong>Pages:</strong> 366</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong> 9781702780322</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                For David Goggins, childhood was a nightmare -- poverty, prejudice, and physical 
                abuse colored his days and haunted his nights. But through self-discipline, mental toughness, 
                and hard work, Goggins transformed himself from a depressed, overweight young man with no future into a U.S. Armed Forces icon and one of the world's top endurance athletes. The only man in history to complete elite training as a Navy SEAL, Army Ranger, and Air Force Tactical Air Controller, he went on to set records in numerous endurance events, inspiring Outside magazine to name him "The Fittest (Real) Man in America."
                 In Can't Hurt Me, he shares his astonishing life story and reveals that most of us tap into only 40% of our capabilities. Goggins calls this The 40% Rule, and his story illuminates a path that anyone can follow to push past pain, demolish fear, and reach their full potential.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/can-t-hurt-me-david-goggins/p/itm449846dd36972">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Cant-Hurt-Me-Master-Your-ebook/dp/B07H453KGH">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/David_Goggins.webp" alt="" srcset="">
                David Goggins, born on February 17, 1975, in Buffalo, New York, is a retired U.S. Navy SEAL, ultramarathon runner, endurance athlete, motivational speaker, and bestselling author. He is renowned for his mental toughness, resilience, and the ability to push beyond perceived limits.

Goggins' early life was marked by hardship. He endured an abusive household and faced racism during his upbringing in Brazil, Indiana. Despite these challenges, he transformed himself from an overweight young man into a disciplined warrior.

His military career is distinguished; he is the only member of the U.S. Armed Forces to have completed SEAL training, U.S. Army Ranger School (graduating as Enlisted Honor Man), and Air Force Tactical Air Controller training. Goggins served in both Iraq and Afghanistan during his 20-year military tenure.

Beyond his military achievements, Goggins has completed over 70 ultra-distance races, often placing in the top five. He once held the Guinness World Record for completing 4,030 pull-ups in 17 hours. His endurance feats include notable performances in races like the Badwater 135, Moab 240, and Leadville 100.

Goggins authored two memoirs: Can't Hurt Me (2018) and Never Finished (2022), where he shares his philosophy on mastering the mind and overcoming adversity. His mantra, "Stay Hard," encapsulates his approach to life's challenges.

Today, Goggins is a sought-after public speaker, inspiring individuals worldwide to embrace discomfort, cultivate discipline, and unlock their full potential.
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