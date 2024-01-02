$(document).ready(function() {
    // Get the current page URL
    var currentPage = window.location.href;

    // Loop through each nav item
    $('.nav-item').each(function() {
        // Get the link URL
        var link = $(this).find('.nav-link').attr('href');

        // Check if the link matches the current page
        if (currentPage.includes(link)) {
            // Add the 'active' class to the parent nav item
            $(this).addClass('active');
        }
    });
});

// document.addEventListener('DOMContentLoaded', function() {
//     // Your existing code here
//     // Get the current page URL
//     var currentPage = window.location.href;

//     // Loop through each nav item
//     $('.nav-item').each(function() {
//         // Get the link URL
//         var link = $(this).find('.nav-link').attr('href');

//         // Check if the link matches the current page
//         if (currentPage.includes(link)) {
//             // Add the 'active' class to the parent nav item
//             $(this).addClass('active');
//         }
//     });
// });

// jQuery to submit the form.
function submitForm() {
    $('#send-time-form').submit();
}