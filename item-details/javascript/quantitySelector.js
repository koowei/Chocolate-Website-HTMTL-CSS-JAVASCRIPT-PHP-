$(document).ready(function ($) {
    // Get the quantity input field and plus/minus buttons
    var $quantityInput = $('.qty');
    var $plusButton = $('.qtyplus');
    var $minusButton = $('.qtyminus');

    // Set the initial quantity value to 1
    $quantityInput.val(1);

    // Add click event listener to plus button
    $plusButton.click(function () {
        // Get current quantity value and increment by 1, but not above 100
        var currentQuantity = parseInt($quantityInput.val());
        var newQuantity = currentQuantity + 1;
        if (newQuantity > 100) {
            newQuantity = 100;
        }

        // Set the new quantity value in the input field
        $quantityInput.val(newQuantity);
    });

    $quantityInput.on('input', function () {
        // Remove any non-numeric characters from the input value
        $(this).val($(this).val().replace(/\D/g, ''));

        // Ensure the quantity value is within the range of 1 to 100
        var currentQuantity = parseInt($(this).val());
        if (currentQuantity < 1) {
            $(this).val(1);
        } else if (currentQuantity > 100) {
            $(this).val(100);
        }
    });

    // Add click event listener to minus button
    $minusButton.click(function () {
        // Get current quantity value and decrement by 1, but not below 1
        var currentQuantity = parseInt($quantityInput.val());
        var newQuantity = currentQuantity - 1;
        if (newQuantity < 1) {
            newQuantity = 1;
        }
        // Set the new quantity value in the input field
        $quantityInput.val(newQuantity);
    });
});
