function product_add(e) {
    let qty = 1
    var price = $(e).children('option:selected').data('price');
    // var discount=$(e).children('option:selected').data('discount');
    // var description = $(e).children('option:selected').data('description');
    var testId = $(e).children('option:selected').data('testid');
    $(e).closest('.row').find('.qty').val(qty);
    $(e).closest('.row').find('.price').val(price);
    // $(e).closest('.row').find('.test_id').val({...testId});
    // $(e).closest('.row').find('.descirbe').val(description);
    getId.push(testId);

    // ? change by me
    price = parseFloat($(e).closest('.row').find('.price').val());
    qty = $(e).closest('.row').find('.qty').val();
    var sub = price * qty; // qty*price
    $(e).closest('.row').find('.sub').val(sub);
    sub_amount();
    total_amount_calc();
}

function get_pricecount(e) {
    var price = parseFloat($(e).val());
    var qty = parseFloat($(e).closest('.row').find('.qty').val());

    var sub = price * qty; // qty*price
    $(e).closest('.row').find('.sub').val(sub);
    sub_amount();
    total_amount_calc();
}

function sub_amount() {
    var sub_amount = 0;
    $('.sub').each(function() {
        sub_amount += parseFloat($(this).val());
    });
    $('#sub_amount').val(sub_amount);
    $('#total_amount').val(sub_amount);
    total_amount_calc();
}

function get_count(e) {
    var qty = parseFloat($(e).val());
    var price = parseFloat($(e).closest('.row').find('.price').val());
    var sub = price * qty; // qty*price
    $(e).closest('.row').find('.sub').val(sub);
    sub_amount();
    total_amount_calc();
}

function total_amount_calc() {
    var sub_amount = parseFloat($('#sub_amount').val());
    var discount = parseFloat($('#discount').val());
    var tax = parseFloat($('#tax').val());
    if (!sub_amount) sub_amount = 0;
    if (!discount) discount = 0;

    if (tax > 0) {
        tax = (sub_amount * (tax / 100));
    } else {
        tax = 0
    }
    var total = ((sub_amount + tax) - discount);
    $('#total_amount').val(total);
}

let total_rate = $("#total_rate").val();
$('#sub_amount').val(total_rate);
$('#total_amount').val(total_rate);

let getId = [];

$('#payment').keyup(() => {
    let payment = $('#payment').val();
    let total_amount = $('#total_amount').val();
    if (total_amount <= payment) {
        $('#remark').val('PAID');
    } else if (total_amount > payment) {
        $('#remark').val('DUE');
    }
    $('#dueAmount').val(parseFloat(total_amount - payment))
});

// $('.test_id').val({...getId});

// console.log(getId);

$(document).ready(function() {
    $('.repeater').repeater({
        // (Required if there is a nested repeater)
        // Specify the configuration of the nested repeaters.
        // Nested configuration follows the same format as the base configuration,
        // supporting options "defaultValues", "show", "hide", etc.
        // Nested repeaters additionally require a "selector" field.
        repeaters: [{
            // (Required)
            // Specify the jQuery selector for this nested repeater
            selector: '.inner-repeater'
        }]
    });
});