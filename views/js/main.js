$("html, body").animate({ scrollTop: "0" });
function showSeat() {
  $("html, body").animate({ scrollTop: "1200" });
}

// Print ticket 
function printTicket(ticket) {
  let ticket_image = ticket.parentElement.nextElementSibling;
  domtoimage.toBlob(ticket_image).then(function (blob) {
    window.saveAs(blob, "ticket.png");
  });
}

 // Edit Profile
 $("#edit-file").on("change", function (e) {
  e.preventDefault();
  // let form_data = new FormData(this);
    $.ajax({
      url: "controllers/profile/profile.controller.php",
      method: "post",
      data: $(this).val(),
      // data: form_data,
      contentType: false,
      processData: false,
      success: function (data) {
       console.log(data);
      }
  });
});
