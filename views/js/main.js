let button = document.getElementById('show_time');
button.addEventListener('click', showTime);
$("html, body").animate({ scrollTop: "0" })
function showTime() {
    $("html, body").animate({ scrollTop: "1200" })
}

