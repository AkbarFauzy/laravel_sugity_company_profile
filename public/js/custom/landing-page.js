// tab vehicle
$('#tab-vehicle').on('click', function () {
    // add or remove active class
    $('#tab-parts').removeClass('active');
    $('#tab-mold').removeClass('active');
    $('#tab-vehicle').addClass('active');

    // change title product overview
    setInterval(
        $('#title-product-overview').fadeOut('fast', function () {
        // Update the text
        $('#title-product-overview').text('Vehicle Business');

        // Fade in the updated text
        $('#title-product-overview').fadeIn('fast');
    }), 1500);

    // show layer product
    // hide layer product
    setInterval(
        $('#layer-image-product').fadeIn('fast', function () {
        // Update the text
        $('#layer-image-product').show();
        // $('#layer-image-product').fadeIn('fast');
    }), 1500);
})

// tab parts
$('#tab-parts').on('click', function () {
    // add or remove active class
    $('#tab-vehicle').removeClass('active');
    $('#tab-mold').removeClass('active');
    $('#tab-parts').addClass('active');

    // change title product overview
    setInterval(
        $('#title-product-overview').fadeOut('fast', function () {
        // Update the text
        $('#title-product-overview').text('Part Business');

        // Fade in the updated text
        $('#title-product-overview').fadeIn('fast');
    }), 1500);

    // hide layer product
    setInterval(
        $('#layer-image-product').fadeOut('fast', function () {
        // Update the text
        $('#layer-image-product').hide();
    }), 1500);
    
})

// tab mold
$('#tab-mold').on('click', function () {
    // add or remove active class
    $('#tab-vehicle').removeClass('active');
    $('#tab-parts').removeClass('active');
    $('#tab-mold').addClass('active');

    // change title product overview
    setInterval(
        $('#title-product-overview').fadeOut('fast', function () {
        // Update the text
        $('#title-product-overview').text('Mold Business');

        // Fade in the updated text
        $('#title-product-overview').fadeIn('fast');
    }), 1500);

    // hide layer product
    setInterval(
        $('#layer-image-product').fadeOut('fast', function () {
        // Update the text
        $('#layer-image-product').hide();
    }), 1500);
})