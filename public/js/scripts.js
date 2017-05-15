$(document).ready(function() {
    $('.vehicles').on('click', function() {
        var vehicleName = $(this).attr('id');
        // var vehicleImg = $(this).children('img').attr('src');
        var vehicleImg = '/public/img/vehicles/' + vehicleName + '-min.jpg';
        getModalData(vehicleName, vehicleImg);
    });

    /**
     * Object with Descriptions of Cars
     */
    var fleet = {
        suburban: {
            desc: '<p id="modal-vehicle-info">Our Suburban is your go to when you don\'t want to make a scene, but arrive in sleek style. This is great for business trips, airport travel, and day to day transportation.</p>'
        },
        mkt: {
            desc: '<p id="modal-vehicle-info">Our MKT is not only a stylish car, but it gives a modern twist to the typical black car appeal. If you want to pick up more than just a black car the MKT is the car for you.</p>'
        },
        fordTransit: {
            desc: '<p id="modal-vehicle-info">Want to take a your colleagues to a location with out all the flashy appearance? Book our Ford Transit.</p>'
        },
        whiteHummer: {
            desc: '<p id="modal-vehicle-info">Our White Hummer is not only a piece of art, but it is a classic. Want to pull up in style? Give us a call. </p>'
        },
        chrysler: {
            desc: '<p id="modal-vehicle-info">Our Chrysler is popular for your wedding, event, or get together. We\'d love to show you around.</p>'
        },
        cadillac: {
            desc: '<p id="modal-vehicle-info">Our Cadillac bring the old school feel, but with a stretch twist. Ride classy in today in our White Cadillac Stretch Limousine.</p>'
        },
        pinkHummer: {
            desc: '<p id="modal-vehicle-info">Our Pink Hummer is not only flashy, but classy. It\'s great for a night out on the town when you want to get noticed. It\'s also popular for birthday parties, Quinceañera\'s, and events.</p>'
        }
    };

    /**
     * Returns the description for the vehicle
     */
    function getVehicleDescription(title) {
        switch (title) {
            case 'Suburban':
                return fleet.suburban.desc;
            case 'MKT':
                return fleet.mkt.desc;
            case 'Ford Transit':
                return fleet.fordTransit.desc;
            case 'White Hummer':
                return fleet.whiteHummer.desc;
            case 'Chrysler':
                return fleet.chrysler.desc;
            case 'Cadillac':
                return fleet.cadillac.desc;
            case 'Pink Hummer':
                return fleet.pinkHummer.desc;
        }
    }

    /**
     * Gets the data for the vehicle
     */
    function getModalData(vehicleName, vehicleImg) {
        var title = setModalTitle(vehicleName);
        setModalData(title, vehicleImg);
    }

    /**
     * Sets the Modal Title
     */
    function setModalTitle(vehicleID) {
        switch (vehicleID) {
            case 'suburban':
                return 'Suburban';
            case 'mkt':
                return 'MKT';
            case 'ford-transit':
                return 'Ford Transit';
            case 'white-hummer':
                return 'White Hummer';
            case 'chrysler':
                return 'Chrysler';
            case 'cadillac':
                return 'Cadillac';
            case 'pink-hummer':
                return 'Pink Hummer';
        }
    }

    /**
     * Sets Modal Data
     */
    function setModalData(title, img) {
        // Clear pre-existing children from 'vehicle-gallery'
        $('.vehicle-gallery').empty();
        $('#modal-vehicle-info').remove();
        // Sets Children Image
        $('#modal-vehicle-name').text(title);
        var $vehicleDesc = getVehicleDescription(title);
        $('.vehicle-info').append($vehicleDesc);
        var $mainImg = $('<img>', {
            class: 'img-responsive',
            id: 'modal-vehicle-img',
            src: img
        });
        $('.vehicle-gallery').append($mainImg);
    }

    /**
     * Creates a DIV with vehicle image as child
     */
    function createDivWithImg(img) {
        var $img = $('<img>', {
            class: 'img-responsive modal-vehicle-thumbnail',
            src: img
        });
        return $img;
    }

    /**
      * Scrolls to element on button click
      */
    function scrollToElement(button, element) {
        $(button).click(function() {
            $('html, body').animate({
                scrollTop: ($(element).offset().top)
            }, 750);
            return false;
        });
    }

    scrollToElement('#book-today', '.get-quote');
    scrollToElement('#learn-more', '.services');
});
