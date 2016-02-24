$(document).ready(function() {
  var d = new Date();
  var n = d.getHours();
  if (n > 20 || n < 6) {
  // If time is after 7PM or before 6AM, apply night theme to ‘body’
    document.body.className = "night";
  } else if (n > 16 && n < 20) {
  // If time is between 4PM – 7PM sunset theme to ‘body’
    document.body.className = "sunset";
  } else if (n > 6 || n < 10) {
    // Else use ‘day’ theme
    document.body.className = "morning";
  } else 
    // use the 'road trip background'
    document.body.className = "roadtrip";
});