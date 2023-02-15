$(document).ready(function(){
    let movie_id = $('#movie_id').val();
    $('#showing_date').on('change', function(){
        let showing_date = this.value;
        $.ajax({
            url:'controllers/booking/get_venue.controller.php',
            method: 'POST',
            data:{
                movie_id:movie_id,
                showing_date:showing_date
            },
            success: function(data){
                $('#venue').html(data);
            }
        })
    })
    // Select venue 
    $('#venue').on('change', function(){
        let venue_id = this.value;
        $.ajax({
            url:'controllers/booking/get_hall.controller.php',
            method: 'POST',
            data:{
                movie_id:movie_id,
                venue_id:venue_id,
            },
            success: function(data){
                $('#hall').html(data);
            }
        })
    })
    // Select hall 
    $('#hall').on('change', function(){
        let hall = this.value;
        $.ajax({
            url:'controllers/booking/get_time.controller.php',
            method: 'POST',
            data:{
                movie_id:movie_id,
                hall:hall,
            },
            success: function(data){
                $('#time').html(data);
            }
        })
    })

    // Booking ticket 
    $('#booking_form').on('submit',function(e){
        e.preventDefault();
        let datas = new FormData(this);
          $.ajax({
            url: "controllers/payment/payment.controller.php",
            method: "post",
            data: datas,
            contentType: false,
            processData: false,
            success: function (data) {
                // alert(data);
            }
        });
    });
});
