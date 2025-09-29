const stars = document.querySelectorAll('#stars span');
const ratingInput = document.getElementById('rating');

stars.forEach((star, index) => {
  star.addEventListener('mouseover', () => {
    highlightStars(index);
  });

  star.addEventListener('mouseout', () => {
    removeHighlight();
  });

  star.addEventListener('click', () => {
    setRating(index + 1);
  });
});

function highlightStars(index) {
  stars.forEach((star, i) => {
    star.classList.toggle('hover', i <= index);
  });
}

function removeHighlight() {
  stars.forEach(star => star.classList.remove('hover'));
}

function setRating(value) {
  ratingInput.value = value;
  stars.forEach((star, i) => {
    star.classList.toggle('selected', i < value);
  });
}

// Simple validation
document.getElementById('reviewForm').addEventListener('submit', function(e) {
  if (ratingInput.value === "") {
    alert("Please select a rating.");
    e.preventDefault();
  }
});


document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("reviewForm");
  const stars = document.querySelectorAll(".stars"); // Star elements
  const messageDiv = document.getElementById("message");

  form.addEventListener("submit", function(event) {
      event.preventDefault();

      const formData = new FormData(form);

      fetch("submit_review.php", {
          method: "POST",
          body: formData
      })
      .then(response => response.text())
      .then(data => {
          messageDiv.innerText = data;
          messageDiv.style.color = data.includes("successfully") ? "green" : "red";

          // Reset form fields
          form.reset();

          // Clear stars (remove 'active' class and data-value if used)
          stars.forEach(s => {
              s.classList.remove("active");
              s.classList.remove("selected"); // If you're using another class like 'selected'
          });

          // Optional: Reset hidden rating input if you use one
          const ratingInput = document.querySelector('input[name="rating"]');
          if (ratingInput) {
              ratingInput.value = "";
          }
      })
      .catch(error => {
          messageDiv.innerText = "Something went wrong.";
          messageDiv.style.color = "red";
      });
  });
});

//fetch the review
function editReview(id) {
  // Redirect to an edit form (or implement modal editing)
  window.location.href = 'edit_review.php?id=' + id;
}

function deleteReview(id) {
  if (confirm("Are you sure you want to delete this review?")) {
      fetch('delete_review.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: 'id=' + id
      })
      .then(response => response.text())
      .then(data => {
          alert(data);
          location.reload(); // Refresh reviews
      });
  }
}

