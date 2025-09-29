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
            <img src="../images/Self Help/Four Thousand Weeks.jpeg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Four Thousand Weeks</h1>
                <p>BY Oliver Burkeman</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Four Thousand Weeks: Time Management for Mortals</p>
                <p><strong>Author:</strong> Oliver Burkeman</p>   
                <p><strong>Published:</strong> 10 August 2021</p>
                <p><strong>Genre:</strong> Self Help book</p>
                <p><strong>Pages:</strong> 288</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong> 9781784704001</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                
"Provocative and appealing . . . well worth your extremely limited time." —Barbara Spindel, The Wall Street Journal

The average human lifespan is absurdly, insultingly brief. Assuming you live to be eighty, you have just over four thousand weeks.

Nobody needs telling there isn’t enough time. We’re obsessed with our lengthening to-do lists, our overfilled inboxes, work-life balance, and the ceaseless battle against distraction; and we’re deluged with advice on becoming more productive and efficient, and “life hacks” to optimize our days. But such techniques often end up making things worse. The sense of anxious hurry grows more intense, and still the most meaningful parts of life seem to lie just beyond the horizon. Still, we rarely make the connection between our daily struggles with time and the ultimate time management problem: the challenge of how best to use our four thousand weeks.

Drawing on the insights of both ancient and contemporary philosophers, psychologists, and spiritual teachers, Oliver Burkeman delivers an entertaining, humorous, practical, and ultimately profound guide to time and time management. Rejecting the futile modern fixation on “getting everything done,” Four Thousand Weeks introduces readers to tools for constructing a meaningful life by embracing finitude, showing how many of the unhelpful ways we’ve come to think about time aren’t inescapable, unchanging truths, but choices we’ve made as individuals and as a society—and that we could do things differently.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.amazon.in/Four-Thousand-Weeks-Management-Mortals/dp/0374159122">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.flipkart.com/four-thousand-weeks/p/itm206de4b33a011">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/oliver-burkeman.webp" alt="" srcset="">
                Oliver Burkeman, born in 1975, is a British author and journalist renowned for his insightful explorations of psychology, productivity, and the human condition. Educated at Huntington School in York, he pursued Social and Political Sciences at Christ's College, University of Cambridge, where he also served as editor of the student newspaper Varsity.

From 2006 to 2020, Burkeman penned the popular weekly column This Column Will Change Your Life for The Guardian, delving into topics of self-help, happiness, and time management. His journalistic endeavors have taken him to London, Washington, and New York, and his writings have appeared in esteemed publications like The New York Times and The Wall Street Journal.

Burkeman is the author of several acclaimed books, including HELP!: How to Become Slightly Happier and Get a Bit More Done (2011), The Antidote: Happiness for People Who Can't Stand Positive Thinking (2012), and the international bestseller Four Thousand Weeks: Time Management for Mortals (2021). In 2024, he released Meditations for Mortals, a collection of daily reflections aimed at embracing human limitations and focusing on what truly matters.

Beyond his books, Burkeman publishes The Imperfectionist, a bi-weekly email newsletter discussing productivity, mortality, and the pursuit of a meaningful life. His work encourages readers to accept life's inherent imperfections and to find fulfillment not through relentless efficiency but through mindful engagement with the present.
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