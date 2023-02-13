$(document).ready(function () 
{
  displayShow();

  // Date picker
  $("#date").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "d M yy",
    minDate: 0,
  });

  // Add new show
  $("#create_show_form").on("submit", function (e) 
  {
    e.preventDefault();
    let form_data = new FormData(this);
    $.ajax({
      url: "controllers/seller/show/show.create.controller.php",
      method: "post",
      data: form_data,
      contentType: false,
      processData: false,
      success: function (data) {
        if (data == "success") {
          $("#createShow").modal("hide");
          $("#create_show_form").trigger("reset");
          displayShow();
        }
        else{
          alert(data);
        }
      },
    });
  });
});

// Display Movies
function displayShow() 
{
  $.ajax({
    url: "controllers/seller/show/show.controller.php",
    method: "GET",
    success: function (data) 
    {
      $("#t-show").html(data);
    },
  });
}

// Edit show
function editShow(show_id) 
{
  let edit_show = $("#editShow");
  let modal_body = $("#modal-show-body");
  $.ajax({
    url: "controllers/seller/show/show.edit.controller.php",
    method: "POST",
    data: { show_id: show_id },
    success: function (data) {
      modal_body.html(data);
      edit_show.modal("show");
    },
  });
}

// Update show
function updateShow(show_id) 
{
  let title = $("#edit_title").val();
  let venue = $("#edit_venue").val();
  let hall = $("#edit_hall").val();
  let date = $("#edit_date").val();
  let time = $("#edit_time").val();
  let price = $("#edit_price").val();

  $.ajax({
    url: "controllers/seller/show/show.update.controller.php",
    method: "POST",
    data: {
      show_id: show_id,
      title: title,
      venue: venue,
      hall: hall,
      date: date,
      time: time,
      price: price
    },
    success: function (data) {
      if (data == "success") {
      $("#editShow").modal("hide");
      displayShow();
      }
      else{
        alert("Inputs are empty!");
      }
    },
  });
}

// Delete Venue
function deleteShow(show_id, show_modal) 
{
  $.ajax({
    url: "controllers/seller/show/show.delete.controller.php",
    method: "POST",
    data: {
      show_id: show_id,
    },
    success: function () {
      $(show_modal).modal("hide");
      displayShow();
    },
  });
}
