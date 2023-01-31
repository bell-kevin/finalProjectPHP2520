$(document).ready(function() {
    $('#all').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var productNumber = button.data('product-number'); // Extract info from data-* attributes
        // Update the modal's input field with the product number
        $(this).find('input[name="prodno"]').val(productNumber);
    });
});