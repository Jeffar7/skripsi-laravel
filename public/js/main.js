function markNotificationAsRead(notificationCount){
    if(notificationCount !== '0'){
        $.get('/markAsRead');
    }
}

$(document).ready(function(){
    $(window).load(function() {
        $(".loader").fadeOut("fast");
    });

    $('.filter-header').click(function() {
        $(this).find('i').toggleClass('fas fa-chevron-down fas fa-chevron-up');
    });

    var itemCount = $('.filter_products').find(".pro").length;
    $('.countMen').html(itemCount);

    //get checkbox name
    function getIds(checkboxName) {
        let checkBoxes = document.getElementsByName(checkboxName);
        let ids = Array.prototype.slice.call(checkBoxes)
                        .filter(ch => ch.checked==true)
                        .map(ch => ch.value);
        return ids;
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // sort in ajax
    $("#sort").on('change', function(){
        var category = getIds("category[]");
        var color = getIds("color[]");
        var material = getIds("material[]");
        var brand = getIds("brand[]");
        var size_alphabet = getIds("size_alphabet[]");
        var size_number = getIds("size_number[]");
        var min = $("#amount_min").val();
        var max = $("#amount_max").val();
        var sort = $(this).val();
        var url = $(location).attr('href');
        
        $.ajax({
            url: url,
            method: 'POST',
            data: {sort:sort, category:category, brand:brand, size_alphabet:size_alphabet, size_number:size_number, min:min, max:max, color:color, material:material, url:url},
            success: function(data){
                $('.filter_products').html(data);
            }
        })
    });

    //filter category
    $(".category, .brand, .size_alphabet, .size_number, .color, .material").on('change', function(){
        var category = getIds("category[]");
        var brand = getIds("brand[]");
        var color = getIds("color[]");
        var material = getIds("material[]");
        var size_alphabet = getIds("size_alphabet[]");
        var size_number = getIds("size_number[]");
        var min = $("#amount_min").val();
        var max = $("#amount_max").val();
        var sort = $("#sort").val();
        var url = $(location).attr('href');
        $.ajax({
            url:url,
            method: 'post',
            data: {sort:sort, category:category, brand:brand, size_alphabet:size_alphabet, size_number:size_number, min:min, max:max, color:color, material:material, url:url},
            success: function(data){
                $('.filter_products').html(data);
                var itemCount = $('.filter_products').html(data).length;
                $('.countMen').html(itemCount);
                console.log(itemCount)
            }
        })
    });

    // filter price
    var min = parseInt($(this).find('.min_price').val());
    var max = parseInt($(this).find('.max_price').val());
    var minPrice = parseInt($(this).find('.minprice').val()) ? parseInt($(this).find('.minprice').val()) : 	min;
    var maxPrice = parseInt($(this).find('.maxprice').val()) ? parseInt($(this).find('.maxprice').val()) : max;

    $("#slider-range").slider({  
        range: true,
        min: min,
        max: max,
        values: [minPrice, maxPrice],
        slide: function(event, ui) {
            $("#amount_min").val(ui.values[0]);
            $("#amount_max").val(ui.values[1]);
        }, 
        change: function(event, ui) {
            var category = getIds("category[]");
            var brand = getIds("brand[]");
            var color = getIds("color[]");
            var material = getIds("material[]");
            var size_alphabet = getIds("size_alphabet[]");
            var size_number = getIds("size_number[]");
            var min = $("#amount_min").val();
            var max = $("#amount_max").val();
            var sort = $("#sort").val();
            var url = $(location).attr('href');
        
            $.ajax({
                url: url,
                method: 'POST',
                data: {sort:sort, category:category, brand:brand, size_alphabet:size_alphabet, size_number:size_number, min:min, max:max, color:color, material:material, url:url},
                success: function(data){
                    $('.filter_products').html(data);
                    var itemCount = $('.filter_products').html(data).find(".pro").length;
                    $('.countMen').html(itemCount);
                    console.log(min,max)
                },
                error: function (e) {
                    alert('error');
                }
            })

        }
    });

    $("#amount_min").val($("#slider-range").slider("values", 0));
    $("#amount_max").val($("#slider-range").slider("values", 1));
    
    $('#btnUncheckAll').click(function () {
        $('input[type=checkbox]').each(
            function (index, checkbox) {
            if (index == 0 || index != 0) {
                checkbox.checked = false;
            }
        });

        var category = getIds("category[]");
        var brand = getIds("brand[]");
        var color = getIds("color[]");
        var material = getIds("material[]");
        var size_alphabet = getIds("size_alphabet[]");
        var size_number = getIds("size_number[]");
        var min = $("#amount_min").val();
        var max = $("#amount_max").val();
        var sort = $("#sort").val();
        var url = $(location).attr('href');

        $.ajax({
            url: url,
            method: 'POST',
            data: {sort:sort, category:category, brand:brand, size_alphabet:size_alphabet, size_number:size_number, min:min, max:max, color:color, material:material, url:url},
            success: function(data){
                $('.filter_products').html(data);
                var itemCount = $('.filter_products').html(data).find(".pro").length;
                $('.countMen').html(itemCount);
                console.log(category)
            }
        })
    });

    $("#size_alphabet").hide();
    $("#size_number").hide();

    $(".category").on('click', function() {
        let catIds = getIds("category[]");

        $.each(catIds, function( value){
            if (value == '1' || value == '2') {
                $("#size_alphabet").show();
            } else if (value == '3') {
                $("#size_number").show();
            } else if (value == '' || value == '4') {
                $("#size_alphabet").hide();
                $("#size_number").hide();
            }
        });
    });

    //pagination
    $(document).on('click', '.pagination a', function(e) { 
        e.preventDefault(); 
        var url = $(this).attr('href');  
        getProducts(url);
        window.history.pushState("", "", url); 
    });

    function getProducts(url) {
        var category = getIds("category[]");
        var brand = getIds("brand[]");
        var color = getIds("color[]");
        var material = getIds("material[]");
        var size_alphabet = getIds("size_alphabet[]");
        var size_number = getIds("size_number[]");
        var min = $("#amount_min").val();
        var max = $("#amount_max").val();
        var sort = $("#sort").val();
        $.ajax({
            url : url, 
            data: {sort:sort, category:category, brand:brand, size_alphabet:size_alphabet, size_number:size_number, min:min, max:max, color:color, material:material, url:url},
        }).done(function (data) {
            $('.filter_products').html(data);  
        }).fail(function () {
            alert('Data could not be loaded.');
        });
    }
    
});