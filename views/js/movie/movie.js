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
            alert("Inpu t does not match the pattern");
          } else {
            alert("Input cannot be empty!");
          }
        }
    });
  });

  // Update Movie
  $("#edit_movie_form").on("submit", function (e) {
    e.preventDefault();
    let form_data = new FormData(this);
      $.ajax({
        url: "controllers/seller/movie/movie.update.controller.php",
        method: "post",
        data: form_data,
        contentType: false,
        processData: false,
        success: function (data) {
          if (data == "success") {
            $("#editMovie").modal("hide");
            displayMovie();
          } else if (data == "Extension doesn't support") {
            alert("You cannot uplaod file of this type");
          } else if (data == "size_too_large") {
            alert("Image is too large.");
          } else if (data == "This movie is already exists") {
            alert(data);
          } else if (data == "Error pattern") {
            alert("Inpu t does not match the pattern");
          } else {
            alert("Input cannot be empty!");
          }
        }
    });
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

// Edit Movie
function editMovie(movie_id) {
  let edit_movie = $("#editMovie");
  let modal_body = $("#modal-edit-movie-body");
  $.ajax({
    url: "controllers/seller/movie/movie.edit.controller.php",
    method: "POST",
    data: {
      movie_id: movie_id,
    },
    success: function (data) {
      modal_body.html(data);
      edit_movie.modal("show");
    },
  });
}

// Delete Venue
function deleteMovie(movie_id, movie_modal) {
  $.ajax({
    url: "controllers/seller/movie/movie.delete.controller.php",
    method: "POST",
    data: {
      movie_id: movie_id,
    },
    success: function (data) {
      if(data == 'success') {
        $(movie_modal).modal("hide");
        displayMovie();
      }
      else{
        alert(data);
        $(movie_modal).modal("hide");
      }
    },
  });
}
