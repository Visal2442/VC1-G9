$(document).ready(function () {
  displayMovie();

  // Date picker 
  $("#release_date").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "d M yy",
  });


  // Add Movie
  $("#create_movie_form").on("submit", function (e) {
    e.preventDefault();
    let form_data = new FormData(this);
    let form = $("#create_movie_form");
      $.ajax({
        url: "controllers/seller/movie/movie.create.controller.php",
        method: "post",
        data: form_data,
        contentType: false,
        processData: false,
        success: function (data) {
          if (data == "success") {
            $("#createMovie").modal("hide");
            form.trigger("reset");
            displayMovie();
          } else if (data == "Extension doesn't support") {
            alert("You cannot uplaod file of this type");
          } else if (data == "size_too_large") {
            alert("Image is too large.");
          } else if (data == "This movie is already exists") {
            alert(data);
          } else if (data == "Error pattern") {
            alert("Input does not match the pattern");
          } else {
            alert("Input cannot be empty!");
          }
        }

      });
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

});
 



