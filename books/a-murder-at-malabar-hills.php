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
            <img src="../images/indian-author/a murder at malabar hills.jpg" alt="Book Cover" class="book-image">
        </div>
        <div class="right-section">
            <div class="book-name" ><h1>A Murder at Malabar Hill</h1>
                <p>BY Sujata Messay</p>
            </div>
            <div class="book-info">
                <h1>Book Information</h1>
                <p><strong>Full Name:</strong> A Murder at Malabar Hill : A Preveen Mistry Investigate</p>
                <p><strong>Author:</strong> Sujata Messay</p>   
                <p><strong>Published:</strong> January 9, 2018</p>
                <p><strong>Genre:</strong> Crime, Murder-Mystery</p>
                <p><strong>Pages:</strong> 440</p>
                <p><strong>Language:</strong>English</p>
                <p><strong>ISBN:</strong>  9780143428237, 0143428233</p>
                
            </div>
 
 
__________________________________________________________________________________________________________  
     <br>
     <br>       
      
      <div class="book-summary">
                <h1>Description</h1>
                <article>
                Bombay, 1921: Perveen Mistry, the daughter of a respected Zoroastrian family, has just joined her father's law firm, becoming one of the first female lawyers in India. Armed with a legal education from Oxford, Perveen also has a tragic personal history that makes her especially devoted to championing and protecting women's rights.

Mistry Law is handling the will of Mr. Omar Farid, a wealthy Muslim mill owner who has left three widows behind. But as Perveen goes through the papers, she notices something strange: all three have signed over their inheritance to a charity. What will they live on if they forefeet what their husband left them? Perveen is suspicious.

The Farid widows live in purdah: strict seclusion, never leaving the women's quarters or speaking to any men. Are they being taken advantage of by an unscrupulous guardian? Perveen tries to investigate and realizes her instincts about the will were correct when tensions escalate to murder. It's her responsibility to figure out what really happened on Malabar Hill, and to ensure that nobody is in further danger.
                </article>
            </div>


____________________________________________________________________________________________________   
<br>
<br>

            <div class="buy-link">
                <h1>Buy From Here </h1>
                <a href="https://www.flipkart.com/murder-malabar-hill/p/itmfyd97rvncshh8">
                    <img alt="flipkart" src="../images/flipkartlogo.jpg">
                    </a>

                <a href="https://www.amazon.in/Murder-Malabar-Hill-Sujata-Massey/dp/0143428233">
                    <img alt="Amazon" src="../images/amazon.jpg">
                </a>
    
            </div>
__________________________________________________________________________________________________________
<br>
<br>
            <div class="author-info">
            <h1>AUTHOR</h1>
            <article>
                <img src="../images/sujata-messay.jpg" alt="" srcset="">
                Sujata Massey is the author of historical and mystery fiction set in Asia. She is best known for the Perveen Mistry series published in the United States by Soho Press and in India by Penguin Random House India. In June, 2021, THE BOMBAY PRINCE, third book in the series, releases in the US/Canada and Australia/New Zealand; it will be published by Penguin India later the same month.

THE WIDOWS OF MALABAR HILL, the first Perveen novel, was named a Best Mystery/Thriller of 2018 and also an Amazon Best Mystery/Thriller of 2018. Additionally, the book won the Bruce Alexander Best Historical Mystery Award, the Agatha Award for Best Historical Mystery and the Mary Higgins Clark Award, all in 2019.

The second Perveen novel, THE SATAPUR MOONSTONE, won the Bruce Alexander Best Historical Mystery Award in 2020.

Sujata's other works include THE SLEEPING DICTIONARY (2013) and eleven Rei Shimura mysteries published from 1997-2014. For more about Sujata's books and a full events schedule, subscribe to her newsletter: http://sujatamassey.com/newsletter

Sujata lives in Baltimore, Maryland, with her family and two dogs. In addition to writing, she loves to travel, read, cook, garden and walk.
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