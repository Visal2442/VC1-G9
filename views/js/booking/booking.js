$(document).ready(function () {
  // Date picker
  $("#booking_date").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "d M yy",
    minDate: "0",
  });

  let movie_id = $("#movie_id").val();
  $("#showing_date").on("change", function () 
  {
    reset();
    // $("#form_booking")[0].reset();
    let showing_date = this.value;
    $("#show_d").text($(this).find("option:selected").text()); //For display
    $("#show_date").val($(this).val());
    $.ajax({
      url: "controllers/booking/get_venue.controller.php",
      method: "POST",
      data: {
        movie_id: movie_id,
        showing_date: showing_date,
      },
      success: function (data) {
        $("#venue").html(data);
      },
    });
  });
  // ==== Select venue =====
  $("#venue").on("change", function () 
  {
    reset();
    $("#form_booking")[0].reset();
    let venue_id = $(this).val();
    let venue_name = $(this).find("option:selected").text();
    $("#venue_n").text($(this).find("option:selected").text()); //For display
    $("#venue_id").val($(this).val());
    $.ajax({
      url: "controllers/booking/get_hall.controller.php",
      method: "POST",
      data: {
        movie_id: movie_id,
        venue_id: venue_id,
        venue_name: venue_name,
      },
      success: function (data) 
      {
        $("#hall").html(data);
      },
    });
  });
  // ==== Select hall ====
  $("#hall").on("change", function () 
  {
    reset();
    let hall = this.value;
    $("#hall_n").text($(this).find("option:selected").text()); //For display
    $("#hall_name").val($(this).val());
    $.ajax({
      url: "controllers/booking/get_time.controller.php",
      method: "POST",
      data: {
        movie_id: movie_id,
        hall: hall,
      },
      success: function (data) 
      {
        $("#time").html(data);
      },
    });
  });
  // ==== Select time =====
  $("#time").on("change", function () 
  {
    reset();
    let time = this.value;
    $("#time_s").text($(this).find("option:selected").text()); //For display
    $("#time_show").val($(this).val());
    $.ajax({
      url: "controllers/booking/get_seat.controller.php",
      method: "POST",
      data: {
        movie_id: movie_id,
        time: time,
      },
      success: function (data) 
      {
        $("#seat_container").show();
        $("#seat_view").html(data);
        $("#seat").collapse(true);
        showPrice();
        showSeat();
      },
    });
  });
  //confirm booking
  $("#form_booking").on("submit", function (e) 
  {
    e.preventDefault();
    let form_data = new FormData(this);
    $.ajax({
      url: "controllers/booking/booking.controller.php",
      method: "post",
      data: form_data,
      contentType: false,
      processData: false,
      success: function (data) {
        if (data == "error") {
          alert("Input cannot be empty");
        } else {
          $("#summary_booking").html(data);
          $("#purchaseModal").modal("show");
        }
      },
    });
  });

  // Booking ticket
  $("#payment_form").on("submit", function (e) 
  {
    e.preventDefault();
    let datas = new FormData(this);
    $.ajax({
      url: "controllers/payment/payment.controller.php",
      method: "POST",
      data: datas,
      contentType: false,
      processData: false,
      success: function (data) {
        if (data == "error") {
          alert("Input cannot be empty");
        }
        else if(data == "error card"){
          alert("Card is invalid");
        }
        else{
          alert(data);
          location.reload();
        }
      },
    });
  });
  
});

// ===== Display price ===== 
function showPrice()
{
  let price_per_ticket = document.getElementById("price_per_ticket").value;
  document.getElementById('ticket_price').textContent=price_per_ticket+" $";
}

// ====== Select seat =======
let seat_arr = [];
let t_price = 0;
function selectSeat(seat) 
{
  let price_ticket = document.getElementById("price_per_ticket").value;
  let total_price = document.getElementById("total_price");
  let display_ticket_price = document.getElementById("display_ticket_price");
  let display_seat_number = document.getElementById("display_seat_number");
  let seat_number = document.getElementById("seat_number");
  let total_seats = document.getElementById("total_seats");
  let number_of_seat = document.getElementById("number_of_seat");
  if (seat.checked) {
    if (seat_arr.indexOf(seat.value) === -1) {
      seat_arr.push(seat.value);
      seat.previousElementSibling.firstChild.src ="../../../assets/imgs/select.png";
    }
  } else {
    let seat_index = seat_arr.indexOf(seat.value);
    if (seat_index > -1) {
      seat_arr.splice(seat_index, 1);
      seat.previousElementSibling.firstChild.src ="../../../assets/imgs/seat.png";
    }
  }
  // Add Values into input
  // ==== Seat number ===
  total_seats.value = seat_arr.length;
  number_of_seat.value = seat_arr.length; // Only display
  display_seat_number.value = seat_arr; // Only display
  seat_number.value = seat_arr;
  // ==== Ticket price ===
  t_price = price_ticket * seat_arr.length;
  total_price.value = t_price;
  display_ticket_price.value = t_price + "$"; // Only display
}

// Reset seat array 
function reset()
{
  seat_arr=[];
  t_price=0;
}

