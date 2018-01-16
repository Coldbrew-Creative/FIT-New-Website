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
            desc: ''
        },
        mkt: {
            desc: ''
        },
        partyBus: {
            desc: ''
        },
        whiteHummer: {
            desc: ''
        },
        chrysler: {
            desc: ''
        },
        cadillac: {
            desc: ''
        },
        pinkHummer: {
            desc: ''
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
            case 'Party Bus':
                return fleet.partyBus.desc;
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
            case 'party-bus':
                return 'Party Bus';
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

    scrollToElement('.scroll-to-quote', '.get-quote');
    scrollToElement('#learn-more', '.services');
});