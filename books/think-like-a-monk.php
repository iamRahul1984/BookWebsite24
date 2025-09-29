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
            <img src="../images/Self Help/Think Like a Monk.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>Think Like a Monk</h1>
                <p>BY Jay Shetty</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> Think Like a Monk: Train Your Mind for Peace and Purpose Every Day</p>
                <p><strong>Author:</strong>Jay Shetty</p>   
                <p><strong>Published:</strong> September 8, 2020</p>
                <p><strong>Genre:</strong> Self Help, Productivity, Personal Development</p>
                <p><strong>Pages:</strong> 328</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>  9780008386597, 0008386595</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                Jay Shetty, social media superstar and host of the #1 podcast On Purpose, distills the timeless wisdom he learned as a monk into practical steps anyone can take every day to live a less anxious, more meaningful life.

When you think like a monk, you’ll understand:
- How to overcome negativity
- How to stop overthinking
- Why comparison kills love
- How to use your fear
- Why you can’t find happiness by looking for it
- How to learn from everyone you meet
- Why you are not your thoughts
- How to find your purpose
- Why kindness is crucial to success
- And much more...

Shetty grew up in a family where you could become one of three things—a doctor, a lawyer, or a failure. His family was convinced he had chosen option three: instead of attending his college graduation ceremony, he headed to India to become a monk, to meditate every day for four to eight hours, and devote his life to helping others. After three years, one of his teachers told him that he would have more impact on the world if he left the monk’s path to share his experience and wisdom with others. Heavily in debt, and with no recognizable skills on his résumé, he moved back home in north London with his parents.

Shetty reconnected with old school friends—many working for some of the world’s largest corporations—who were experiencing tremendous stress, pressure, and unhappiness, and they invited Shetty to coach them on well-being, purpose, and mindfulness. Since then, Shetty has become one of the world’s most popular influencers. In 2017, he was named in the Forbes magazine 30-under-30 for being a game-changer in the world of media. In 2018, he had the #1 video on Facebook with over 360 million views. His social media following totals over 38 million, he has produced over 400 viral videos which have amassed more than 8 billion views, and his podcast, On Purpose, is consistently ranked the world’s #1 Health and Wellness podcast.

In this inspiring, empowering book, Shetty draws on his time as a monk to show us how we can clear the roadblocks to our potential and power. Combining ancient wisdom and his own rich experiences in the ashram, Think Like a Monk reveals how to overcome negative thoughts and habits, and access the calm and purpose that lie within all of us. He transforms abstract lessons into advice and exercises we can all apply to reduce stress, improve relationships, and give the gifts we find in ourselves to the world. Shetty proves that everyone can—and should—think like a monk.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/think-like-monk-train-your-mind-peace-purpose-every-day/p/itm253c3915e5716">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Think-Like-Monk-Jay-Shetty/dp/0008386595">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/jay-shetty.webp" alt="" srcset="">

Jay Shetty, born on September 6, 1987, in London, England, is a British author, podcaster, and former monk renowned for his insights on mindfulness and personal development. Raised in a Hindu family of Indian descent, he pursued a degree at City, University of London.

During his university years, Shetty encountered a monk whose teachings inspired him to spend three years living in an ashram in India, embracing a monastic lifestyle focused on self-discipline, meditation, and service. After returning to the UK, he aimed to share ancient wisdom in a modern context, leading to a career in digital strategy at Accenture and later as a content creator.

In 2016, Shetty began producing motivational videos that gained viral attention, propelling him into the public eye. He launched the podcast *On Purpose* in 2019, featuring interviews with notable figures and discussing topics related to mental health, purpose, and personal growth. The podcast quickly rose to prominence, becoming one of the most downloaded in its category.

Shetty is the author of two bestselling books: *Think Like a Monk* (2020), which offers guidance on overcoming negativity and finding purpose, and *8 Rules of Love* (2023), focusing on building meaningful relationships. He resides in Los Angeles with his wife, Radhi Devlukia-Shetty.
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