document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("book-search");
    const bookCards = document.querySelectorAll(".book-card");
    const mainContent = document.querySelector("main");

    // Create a div to show search results
    const searchResults = document.createElement("div");
    searchResults.id = "search-results";
    mainContent.appendChild(searchResults);

    searchInput.addEventListener("input", function () {
        const query = searchInput.value.toLowerCase().trim();
        searchResults.innerHTML = ""; // Clear previous results

        if (query === "") {
            bookCards.forEach(card => card.style.display = "");
            return;
        }

        let found = false;

        bookCards.forEach(card => {
            const title = card.getAttribute("data-title").toLowerCase();
            const author = card.getAttribute("data-author").toLowerCase();
            const genre = card.getAttribute("data-genre").toLowerCase();
            
            if (title.includes(query) || author.includes(query) || genre.includes(query)) {
                searchResults.appendChild(card.cloneNode(true)); // Show matching books in search results
                found = true;
            }
        });

        // Hide all books
        bookCards.forEach(card => card.style.display = "none");

        if (!found) {
            searchResults.innerHTML = "<p>No books found</p>";
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const genreFilter = document.getElementById("genre-filter");
    const bookCards = document.querySelectorAll(".book-card");

    genreFilter.addEventListener("change", function () {
        const selectedGenre = genreFilter.value.toLowerCase();

        bookCards.forEach(card => {
            const bookGenre = card.dataset.genre.toLowerCase();

            if (selectedGenre === "all" || bookGenre === selectedGenre) {
                card.style.display = "block"; // Show matching books
            } else {
                card.style.display = "none";  // Hide non-matching books
            }
        });
    });
});



document.getElementById("bookSearch").addEventListener("keyup", function () {
  const query = this.value.toLowerCase();
  const books = document.querySelectorAll(".book-card");

  books.forEach(function (book) {
    const title = book.getAttribute("data-title").toLowerCase();
    const author = book.getAttribute("data-author").toLowerCase();
    const genre = book.getAttribute("data-genre").toLowerCase();

    if (title.includes(query) || author.includes(query) || genre.includes(query)) {
      book.style.display = "block";
    } else {
      book.style.display = "none";
    }
  });
});


