$(document).ready(function () {
    displayShow();
  });
  
  // Display Movies
  function displayShow() 
  {
    $.ajax({
      url: "controllers/seller/show/show.controller.php",
      method: "GET",
      success: function (data) {
        $("#t-show").html(data);
      },
    });
  }