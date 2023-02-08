$(document).ready(function () {
    displayMovie();
  });
  
  // Display Movies
  function displayMovie() {
    $.ajax({
      url: "controllers/seller/movie/movie.controller.php",
      method: "GET",
      success: function (data) {
        $("#t-movie").html(data);
      },
    });
  }