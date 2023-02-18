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
