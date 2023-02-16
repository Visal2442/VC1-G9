<?php
session_start();
require '../../database/database.php';
$char = '<svg _ngcontent-serverApp-c6="" fill="none" height="51" viewBox="0 0 58 51" width="58" xmlns="http://www.w3.org/2000/svg" class="scaling-svg ng-star-inserted"><path _ngcontent-serverApp-c6="" clip-rule="evenodd" d="M49.0328 30.2428C49.0328 33.3614 46.4489 35.9134 43.2912 35.9134H13.5361C10.3784 35.9134 7.79517 33.3614 7.79517 30.2428V6.9015C7.79517 3.78341 10.3784 1.23083 13.5361 1.23083H43.2912C46.4489 1.23083 49.0328 3.78341 49.0328 6.9015V30.2428Z" fill-rule="evenodd" fill="#b02418"></path><path _ngcontent-serverApp-c6="" clip-rule="evenodd" d="M13.6983 2.46239C11.1301 2.46239 9.04031 4.52521 9.04031 7.06168V30.0826C9.04031 32.6191 11.1301 34.6819 13.6983 34.6819H43.1284C45.6978 34.6819 47.787 32.6191 47.787 30.0826V7.06168C47.787 4.52521 45.6978 2.46239 43.1284 2.46239H13.6983ZM43.1284 37.1445H13.6983C9.75664 37.1445 6.54944 33.9757 6.54944 30.0827V7.06179C6.54944 3.1688 9.75664 0 13.6983 0H43.1284C47.0719 0 50.2803 3.1688 50.2803 7.06179V30.0827C50.2803 33.9757 47.0719 37.1445 43.1284 37.1445Z" fill-rule="evenodd" fill="#D26159"></path><g _ngcontent-serverApp-c6="" mask="#mask0">    <path _ngcontent-serverApp-c6="" clip-rule="evenodd" d="M7.92615 49.1693H48.9076V35.9131H7.92615V49.1693Z" fill-rule="evenodd" fill="#b02418"></path>    <path _ngcontent-serverApp-c6="" clip-rule="evenodd" d="M9.17104 47.9381H47.6617V37.1438H9.17104V47.9381ZM6.67957 50.4007H50.1543V34.6814H6.67957V50.4007Z" fill-rule="evenodd" fill="#D26159"></path>    <path _ngcontent-serverApp-c6="" clip-rule="evenodd" d="M55.5802 47.2794C55.5802 48.3186 54.7189 49.1693 53.6661 49.1693H47.6504C46.5976 49.1693 45.7363 48.3186 45.7363 47.2794V24.5616C45.7363 23.5218 46.5976 22.6711 47.6504 22.6711H53.6661C54.7189 22.6711 55.5802 23.5218 55.5802 24.5616V47.2794Z" fill-rule="evenodd" fill="#b02418"></path>    <path _ngcontent-serverApp-c6="" clip-rule="evenodd" d="M47.7046 23.9026C47.3132 23.9026 46.9841 24.2277 46.9841 24.6136V47.2265C46.9841 47.6125 47.3132 47.9382 47.7046 47.9382H53.6117C54.0031 47.9382 54.3341 47.6125 54.3341 47.2265V24.6136C54.3341 24.2277 54.0031 23.9026 53.6117 23.9026H47.7046ZM53.6117 50.4008H47.7047C45.932 50.4008 44.4908 48.9769 44.4908 47.2266V24.6138C44.4908 22.8635 45.932 21.4402 47.7047 21.4402H53.6117C55.3845 21.4402 56.8274 22.8635 56.8274 24.6138V47.2266C56.8274 48.9769 55.3845 50.4008 53.6117 50.4008Z" fill-rule="evenodd" fill="#D26159"></path>    <path _ngcontent-serverApp-c6="" clip-rule="evenodd" d="M11.0892 47.2794C11.0892 48.3186 10.2279 49.1693 9.17579 49.1693H3.15942C2.10666 49.1693 1.24597 48.3186 1.24597 47.2794V24.5616C1.24597 23.5218 2.10666 22.6711 3.15942 22.6711H9.17579C10.2279 22.6711 11.0892 23.5218 11.0892 24.5616V47.2794Z" fill-rule="evenodd" fill="#b02418"></path>    <path _ngcontent-serverApp-c6="" clip-rule="evenodd" d="M3.2136 23.9026C2.82282 23.9026 2.49123 24.2277 2.49123 24.6136V47.2265C2.49123 47.6125 2.82282 47.9382 3.2136 47.9382H9.12065C9.51204 47.9382 9.84363 47.6125 9.84363 47.2265V24.6136C9.84363 24.2277 9.51204 23.9026 9.12065 23.9026H3.2136ZM9.12064 50.4008H3.2136C1.44088 50.4008 -0.000244141 48.9769 -0.000244141 47.2266V24.6138C-0.000244141 22.8635 1.44088 21.4402 3.2136 21.4402H9.12064C10.8934 21.4402 12.3345 22.8635 12.3345 24.6138V47.2266C12.3345 48.9769 10.8934 50.4008 9.12064 50.4008Z" fill-rule="evenodd" fill="#D26159"></path></g></svg>';
$showing_date = $_SESSION['showing_date'];
$venue_id = $_SESSION['venue_id'];
$hall = $_SESSION['hall'];
if (isset($_POST['time'])) {
    require '../../models/show.model.php';
    $show_booked = getShowId($_POST['movie_id'], $showing_date, $venue_id, $hall, $_POST['time']);
    $_SESSION['show_id'] = $show_booked['show_id'];
    $seat_booked = getSeatBooked($show_booked['show_id']);
    $seat_arr = [];
    foreach ($seat_booked as $seat) {
        array_push($seat_arr, $seat['seat_number']);
    }
    $amount_ticket = getAmountOfTicket($showing_date, $hall, $_POST['time']);
    for ($i = 1; $i <= $amount_ticket['amount_ticket']; $i++) :
?>
        <label for="seat<?= $i ?>"><img src=<?= in_array($i, $seat_arr) == 1 ? '../../assets/imgs/booked.png' : '../../assets/imgs/seat.png' ?> width="65" height="65" class="rounded-full"></label>
        <input type="checkbox" id="seat<?= $i ?>" name="seat<?= $i ?>" onclick="selectSeat(this)" <?= in_array($i, $seat_arr) == 1 ? "disabled" : "" ?> class="select-seat hidden bg-red-500 rounded-t-lg p-5 m-1" value="<?= $i ?>">
<?php
    endfor;
};
?>