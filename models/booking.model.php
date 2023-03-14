<?php
//===== add booking =====
function addBooking(string $customer_email, int $show_id, string $booking_date, string $seat_number) :bool
{
    global $connection;
    $statement = $connection->prepare('insert into booking (email_address, show_id, booking_date, seat_number) values (:email_address, :show_id, :booking_date, :seat_number)');
    $statement->execute([
        ":email_address" => $customer_email,
        ":show_id" => $show_id,
        ":booking_date" => $booking_date,
        ":seat_number" => $seat_number,
    ]);
    return $statement->rowCount() > 0;
}
// ===== Get seat =====
function getSeatBooked($show_id): array
{
    global $connection;
    $statement = $connection->prepare('select booking.seat_number from booking 
                                        inner join shows on shows.show_id = booking.show_id
                                        where shows.show_id = :show_id');
    $statement->execute([
        ":show_id" => $show_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

// ===== Get booking by customer id =====
function getBookingByCusEmail(string $email): array 
{
    global $connection;
    $statement = $connection->prepare('select * from booking 
                                        inner join users on users.email_address = booking.email_address
                                        inner join shows on shows.show_id = booking.show_id
                                        inner join movies on movies.movie_id = shows.movie_id
                                        inner join venues on venues.venue_id = shows.venue_id
                                        where users.email_address = :email_address order by booking.booking_id desc');
    $statement ->execute([
        ":email_address" => $email
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
// ===== Get booking by show_id =====
function getBookingByShowId(int $show_id): array 
{
    global $connection;
    $statement = $connection -> prepare('select booking.*, shows.date from booking
                                        inner join shows on shows.show_id = booking.show_id 
                                        where shows.show_id = :show_id');
    $statement->execute([
        ":show_id" => $show_id
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
// ======= Get all bookings ====
function getAllBookings(): array
{
    global $connection;
    $statement = $connection -> prepare('select * from booking 
                                        inner join shows on shows.show_id = booking.show_id');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}