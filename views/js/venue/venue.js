$(document).ready(function () {
    displayVenue();
  });
  
  // Display Venues
  function displayVenue() {
    $.ajax({
      url: "controllers/seller/venue/venue.display.php",
      method: "GET",
      success: function (data) {
        $("#tbody").html(data);
      },
    });
  }
  
  // Add Venue
  function addVenue() {
    let venue_name = $("#venue_name").val();
    let venue_address = $("#venue_address").val();
    let form = $("#create_venue_form");
  
    $.ajax({
      url: "controllers/seller/venue/venue.create.php",
      method: "POST",
      data: {
        venue_name: venue_name,
        venue_address: venue_address,
      },
      success: function (data) {
        if (data == "success") {
          $("#createVenue").modal("hide");
          form.trigger("reset");
          displayVenue();
          $("#error_msg").html("");
        }
        else{
          $("#error_msg").html(data);
        }
      },
    });
  }
  
  // Edit Venue
  function editVenue(venue_id) {
    let edit_venue = $("#editVenue");
    let modal_body = $("#modal-body");
  
    $.ajax({
      url: "controllers/seller/venue/venue.edit.php",
      method: "POST",
      data: {
        venue_id: venue_id,
      },
      success: function (data) {
        modal_body.html(data);
        edit_venue.modal("show");  
      },
    });
  }
  
  // Update venue
  function updateVenue(venue_id) {
    let venue_name = $("#venue-name").val();
    let venue_address = $("#venue-address").val();
  
    $.ajax({
      url: "controllers/seller/venue/venue.update.php",
      method: "POST",
      data: {
        venue_id: venue_id,
        venue_name: venue_name,
        venue_address: venue_address,
      },
      success: function (data) {
        if (data == "success") {
          $("#editVenue").modal("hide");
          displayVenue();
        }
      },
    });
  }
  
  // Delete Venue
  function deleteVenue(venue_id, venue_modal) {
    $.ajax({
      url: "controllers/seller/venue/venue.delete.php",
      method: "POST",
      data: {
        id: venue_id,
      },
      success: function (data) {
        $(venue_modal).modal("hide");
        displayVenue();
        console.log(data);
      },
    });
  }
  