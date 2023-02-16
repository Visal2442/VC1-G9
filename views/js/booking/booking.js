$(document).ready(function () {
  // Date picker
  $("#booking_date").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "d M yy",
    minDate: "0",
  });

  let movie_id = $("#movie_id").val();
  $("#showing_date").on("change", function () {
    let showing_date = this.value;
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
  $("#venue").on("change", function () {
    let venue_id = $(this).val();
    $("#venue_name").val($(this).find("option:selected").text());
    $("#venue_id").val($(this).val());
    $.ajax({
      url: "controllers/booking/get_hall.controller.php",
      method: "POST",
      data: {
        movie_id: movie_id,
        venue_id: venue_id,
      },
      success: function (data) {
        $("#hall").html(data);
      },
    });
  });
  // ==== Select hall ====
  $("#hall").on("change", function () {
    let hall = this.value;
    $("#hall_n").val($(this).find("option:selected").text());
    $("#hall_name").val($(this).val());
    $.ajax({
      url: "controllers/booking/get_time.controller.php",
      method: "POST",
      data: {
        movie_id: movie_id,
        hall: hall,
      },
      success: function (data) {
        $("#time").html(data);
      },
    });
  });
  // ==== Select time =====
  $("#time").on("change", function () {
    let time = this.value;
    $("#time_s").val($(this).find("option:selected").text());
    $("#time_show").val($(this).val());
    $.ajax({
      url: "controllers/booking/get_seat.controller.php",
      method: "POST",
      data: {
        movie_id: movie_id,
        time: time,
      },
      success: function (data) {
        $("#seat_container").show();
        $("#seat_view").html(data);
        $("#seat").collapse(true);
        showTime();
      },
    });
  });

  // Booking ticket
  $("#payment_form").on("submit", function (e) {
    e.preventDefault();
    let datas = new FormData(this);
    $.ajax({
      url: "controllers/payment/payment.controller.php",
      method: "post",
      data: datas,
      contentType: false,
      processData: false,
      success: function (data) {
        console.log(data);
      },
    });
  });
});

// ====== Select seat =======
let seat_arr = [];
let total_price = 0;
let price = document.getElementById("price").value;
function selectSeat(seat) {
  let t_price = document.getElementById("t_price");
  let total_price = document.getElementById("total_price");
  let no_seat = document.getElementById("no_seat");
  let seat_number = document.getElementById("seat_number");
  if (seat.checked) {
    if (seat_arr.indexOf(seat.value) === -1) {
      seat_arr.push(seat.value);
      seat.previousElementSibling.firstChild.src = "../../../assets/imgs/selected.png";
    }
  } else {
    let seat_index = seat_arr.indexOf(seat.value);
    if (seat_index > -1) {
      seat_arr.splice(seat_index, 1);
      seat.previousElementSibling.firstChild.src =
        "../../../assets/logo/chair.png";
    }
  }
  // ==== Add value into input ===
  total_price = price * seat_arr.length;
  t_price.value = total_price + "$"; // Only display
  no_seat.value = seat_arr; // Only display
  seat_number.value = seat_arr;
}
