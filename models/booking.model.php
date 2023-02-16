<?php
function createBooking(int $customer_id, int $show_id, string $booking_date, int $seat_number)
{
    global $connection;
    $statement = $connection->prepare('insert into booking (customer_id, show_id, booking_date, seat_number) values (:customer_id, :show_id, :booking_date, :seat_number)');
    $statement->execute([
        ":customer_id" => $customer_id,
        ":show_id" => $show_id,
        ":booking_date" => $booking_date,
        ":seat_number" => $seat_number,
    ]);
    return $statement->rowCount() > 0;
}
