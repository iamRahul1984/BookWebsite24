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
            <img src="../images/Self Help/Atomic Habits.webp" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Atomic Habits</h1>
                <p>BY James Clear</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones.</p>
                <p><strong>Author:</strong> James Clear.</p>   
                <p><strong>Published:</strong> October 16, 2018</p>
                <p><strong>Genre:</strong> Self Help, Productivity, Non-Fiction ,Personal Development.</p>
                <p><strong>Pages:</strong> 319</p>
                <p><strong>Language:</strong> English.</p>
                <p><strong>ISBN:</strong> 9781847941831, 0735211299 </p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                No matter your goals, Atomic Habits offers a proven framework for improving—every day. James Clear, one of the world's leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.

If you're having trouble changing your habits, the problem isn't you. The problem is your system. Bad habits repeat themselves again and again not because you don't want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you'll get a proven system that can take you to new heights.

Clear is known for his ability to distill complex topics into simple behaviors that can be easily applied to daily life and work. Here, he draws on the most proven ideas from biology, psychology, and neuroscience to create an easy-to-understand guide for making good habits inevitable and bad habits impossible. Along the way, readers will be inspired and entertained with true stories from Olympic gold medalists, award-winning artists, business leaders, life-saving physicians, and star comedians who have used the science of small habits to master their craft and vault to the top of their field.

Learn how to:
- Make time for new habits (even when life gets crazy);
- Overcome a lack of motivation and willpower;
- Design your environment to make success easier;
- Get back on track when you fall off course;
...and much more.

Atomic Habits will reshape the way you think about progress and success, and give you the tools and strategies you need to transform your habits--whether you are a team looking to win a championship, an organization hoping to redefine an industry, or simply an individual who wishes to quit smoking, lose weight, reduce stress, or achieve any other goal.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/atomic-habits/p/itmfcyurt9pfakjh?pid=9781847941831&cmpid=product.share.pp&_refId=PP.30da3c62-10d5-41cb-9541-b6f77fad6555.9781847941831&_appId=WA">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.com/Atomic-Habits-Proven-Build-Break/dp/0735211299">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/james-clear.jpeg" alt="" srcset="">           
James Clear, born on January 22, 1986, in Hamilton, Ohio, is an American author, speaker, and expert on habit formation and personal development. He graduated from Denison University in 2008 with a bachelor's degree in biomechanics, where he also served as captain of the baseball team.

Clear began his career as a performance coach for athletes and executives, which led him to explore the science of habits and behavior change. In 2012, he started writing about self-improvement, focusing on habits, decision-making, and continuous improvement. His work gained widespread attention, culminating in the publication of his bestselling book, *Atomic Habits*, in 2018. The book has sold over 20 million copies worldwide, been translated into more than 60 languages, and spent over 200 weeks on the New York Times bestseller list.

In addition to his writing, Clear is a sought-after speaker, delivering talks for Fortune 500 companies and organizations such as Google, Microsoft, and Cisco. He also publishes the popular "3-2-1" newsletter, which shares weekly insights on habits and personal growth with over 3 million subscribers.

Clear's approach combines academic research with personal experimentation, offering practical strategies for building good habits and breaking bad ones. His work continues to inspire personal and professional transformation worldwide.
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