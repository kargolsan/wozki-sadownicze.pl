var waypoint = new Waypoint.Inview({
    element: $('#counter')[0],
    enter: function(direction) {
        $('#quantity_clients').countTo();
        $('#quantity_products').countTo();
        $('#quantity_years').countTo();
    }
})