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
            <img src="../images/Self Help/Deep Work.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Deep Work</h1>
                <p>BY Cal Newport</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Deep Work: Rules for Focused Success in a Distracted World</p>
                <p><strong>Author:</strong> Calvin C. Newport</p>   
                <p><strong>Published:</strong> January 5, 2016</p>
                <p><strong>Genre:</strong> Self Help</p>
                <p><strong>Pages:</strong> 296</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong> 9782744332678</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                One of the most valuable skills in our economy is becoming increasingly rare. If you master this skill, you'll achieve extraordinary results.

Deep work is the ability to focus without distraction on a cognitively demanding task. It's a skill that allows you to quickly master complicated information and produce better results in less time. Deep work will make you better at what you do and provide the sense of true fulfillment that comes from craftsmanship. In short, deep work is like a super power in our increasingly competitive twenty-first century economy. And yet, most people have lost the ability to go deep-spending their days instead in a frantic blur of e-mail and social media, not even realizing there's a better way.

In Deep Work, author and professor Cal Newport flips the narrative on impact in a connected age. Instead of arguing distraction is bad, he instead celebrates the power of its opposite. Dividing this book into two parts, he first makes the case that in almost any profession, cultivating a deep work ethic will produce massive benefits. He then presents a rigorous training regimen, presented as a series of four "rules," for transforming your mind and habits to support this skill.

A mix of cultural criticism and actionable advice, Deep Work takes the reader on a journey through memorable stories-from Carl Jung building a stone tower in the woods to focus his mind, to a social media pioneer buying a round-trip business class ticket to Tokyo to write a book free from distraction in the air-and no-nonsense advice, such as the claim that most serious professionals should quit social media and that you should practice being bored. Deep Work is an indispensable guide to anyone seeking focused success in a distracted world.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/deep-work-rules-focused-success-distracted-world/p/itmeenkqnzpycuze">
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
                <img src="../images/cal-newport.jpeg" alt="" srcset="">
                Calvin C. Newport, born on June 23, 1982, in Houston, Texas, is an American computer scientist, author, and professor renowned for his work on productivity and the impact of digital technology on society. He spent his early years in Houston before relocating to New Jersey at age seven, where he developed a passion for intellectual pursuits.

Newport earned his bachelor's degree from Dartmouth College in 2004 and completed his Ph.D. in computer science at the Massachusetts Institute of Technology (MIT) in 2009, under the mentorship of Nancy Lynch.His academic research focuses on distributed algorithms and communication systems in challenging networking scenarios.

In 2011, Newport joined Georgetown University, where he currently serves as a full professor in the Department of Computer Science. Beyond academia, he is a prolific author, having written several bestsellers, including *Deep Work*, *Digital Minimalism*, and *A World Without Email*.  His writings explore the intersection of technology and culture, advocating for focused work and intentional use of digital tools.

Newport also hosts the podcast "Deep Questions," where he discusses productivity, work habits, and technology's role in our lives.  He resides in Takoma Park, Maryland, with his wife, Julie, and their three sons. 
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