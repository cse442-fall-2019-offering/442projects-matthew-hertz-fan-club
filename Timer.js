// Get totalAmount from localStorage and if there is positive value call timeSet() immediately
var totalAmount = localStorage.getItem('countDown') || 0,
    timeloop;

if (totalAmount) {
    timeSet()
}

function timeSet () {
    totalAmount--;
    // Refresh value in localStorage
    localStorage.setItem('countDown', totalAmount);

     // If countdown is over, then remove value from storage and clear timeout
     if (totalAmount < 0 ) {
         localStorage.removeItem('countDown');
         totalAmount = 0;
         clearTimeout(timeloop);
         return;
     }

    var minutes = parseInt(totalAmount/60);
    var seconds = parseInt(totalAmount%60);

    if(seconds < 10)
        seconds = "0"+seconds;

    $('#tminus').val(minutes + ":" + seconds);

    timeloop = setTimeout(timeSet, 1000);
}

$('.enterTime').click(function () {
    var reqVal = $('#request').val();
    var parAmt = parseInt(reqVal);

    if (timeloop) {
        clearTimeout(timeloop)
    }

    totalAmount = parAmt * 60;

    $('#request').val(" ");

    timeSet();
})

// Clear timeout and remove localStorage value when resetting form
$('#countdown').on('reset', function () {
    totalAmount = 0;
    clearTimeout(timeloop);
    localStorage.removeItem('countDown');
})