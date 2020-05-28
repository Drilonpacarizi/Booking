function user_not_login() {
    location.href = "http://localhost/booking/auth.php";
}

function success_booking() {
    alert('Booking has been added');
}

function error_booking() {
    alert('You already have this booking');
}