$(function() {
    function getSport(){
        $.ajax({
            url: 'includes/dashboard.inc.php',
            method: 'post',
            data: {action: 'fetchsp'},
            success: function(data) {
                console.log(data);
                $('#productlist').html(data);
            }
        });
    }
    function getPCs(){
        $.ajax({
            url: 'includes/dashboard.inc.php',
            method: 'post',
            data: {action: 'fetchpc'},
            success: function(data) {
                console.log(data);
                $('#productlist').html(data);
            }
        });
    }
    function getKitchen(){
        $.ajax({
            url: 'includes/dashboard.inc.php',
            method: 'post',
            data: {action: 'fetchkit'},
            success: function(data) {
                console.log(data);
                $('#productlist').html(data);
            }
        });
    }
    function getClothes(){
        $.ajax({
            url: 'includes/dashboard.inc.php',
            method: 'post',
            data: {action: 'fetchcl'},
            success: function(data) {
                console.log(data);
                $('#productlist').html(data);
            }
        });
    }
    $(document).ready(function() {
        getSport();
    });
    $('#sport').on('click', function(e) {
        e.preventDefault();
        getSport();
    })
    $('#pcs').on('click', function(e) {
        e.preventDefault();
        getPCs();
    })
    $('#kitchen').on('click', function(e) {
        e.preventDefault();
        getKitchen();
    })
    $('#clothes').on('click', function(e) {
        e.preventDefault();
        getClothes();
    })
})
