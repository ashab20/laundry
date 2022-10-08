<div class="step_wrapper">
    <div class="card">
        <div class="parent">
            <div class="top-div">
                <!-- <img src="https://imgur.com/3U0Yawd.png"> -->
                <h5> Add Customer</h5>
            </div>
            <ul class="progress-bar">
                <li class="active"></li>
                <li></li>
                <li></li>
                <!--<li></li>-->
            </ul>
            <span>
                <?php if ($this->session->flashdata('msg')) {
                    echo $this->session->flashdata('msg');
                } ?>
            </span>
        </div>
        <?= form_open() ?>
        <?php
        // ! Step @1 
        ?>
        <div class="step active">
            <div class="card-body">

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="">Phone:</label>
                        <input class="form-control" type="text" placeholder="Phone" name="contact" value="<?= set_value('contact') ?>" id="contact" />
                        <small id="name" class="form-text text-danger"><?= form_error('contact'); ?></small>
                    </div>
                    <div class="form-group col-6">
                        <label for="">Name:</label>
                        <input class="form-control" type="text" placeholder="Name" name="name" value="<?= set_value('name') ?>" />
                        <small id="name" class="form-text text-danger"><?= form_error('name'); ?></small>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="">Address:</label>
                        <textarea name="address" id="address" class="form-control" rows="2" placeholder="Address:" valus="  <?= set_value('address') ?>">

                  </textarea>
                        <small id="name" class="form-text text-danger"><?= form_error('address'); ?></small>
                    </div>
                </div>
                <div class="form-group button">
                    <button class="create-workspace btn btn-primary btn-block mt-3" type="button">Add</button>
                </div>

            </div>

        </div>
        <?php
        // ! Step @2 
        ?>
        <div class="step">

            <div class="content">
                <h4>Let's set up a home for all your work</h4>
                <p>You can always create another workspace later.</p>
            </div>
            <div class="form-group">
                <div class="row bg-light p-2 rounded-top">
                    <div class="col-2"></div>
                    <div class="col-3">
                        <label for="">Test</label>
                    </div>
                    <div class="col-2"><label for="">Description</label></div>
                    <div class="col-2"><label for="">Price</label></div>
                    <div class="col-3"><label for="">Total</label></div>

                </div>
                <!-- outer repeater -->
                <div class="repeater">
                    <div data-repeater-list="outer-list">
                        <div data-repeater-item class="row mt-2">
                            <div class="col-1 mx-2">
                                <button class="btn bg-danger text-white btn-sm mt-1" data-repeater-delete type="button">-
                                    <i class="mdi mdi-minus-circle"></i>
                                </button>
                            </div>
                            <div class="col-3 mr-2">
                                <div class="p-0"> 
                                 <select name="tid" class="form-select" onchange="product_add(this)">
                                    <option value="">Select Item</option>
                                    <?php

                                    foreach ($service as $s) {
                                    ?>
                                        <option data-testid="<?= $s['id'] ?>" data-price="<?=$s['price'] ?>" value="<?= $s['id'] ?>" >
                                            <?= $s['name'] ?>
                                        </option>
                                    <?php }
                                    ?>
                                </select> 
                               </div>
                            </div>
                            <div class="col-2 p-0 mx-2">
                                <input type="text" class="form-control descirbe" name="describtion" onkeyup="get_count(this)">
                            </div>
                            <div class="col-2 p-0 mx-2">
                                <input type="text" onkeyup="get_pricecount(this)" class="form-control price" name="price">
                            </div>
                            <!-- <input type="text" hidden  class="test_id" name="test_id"> -->

                            <div class="col-2 p-0 mx-2">
                                <input readonly type="text" class="form-control sub bg-white" name="sub">
                            </div>

                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn bg-primary m-2 text-white btn-sm" data-repeater-create type="button">+
                            <i class="mdi mdi-plus-circle"></i>
                        </button>
                    </div>

                </div>
            </div>
            <div class="button button_gap">
                <button type="button" class="back-click">Back</button>
                <button type="button" class="next-click">Next</button>
            </div>

        </div>
        <?php
        // ! Step @3 
        ?>
        <div class="step">

            <div class="content">
                <h4>How are you planning to use Eden?</h4>
                <p>We'll stream line your setup accordingly.</p>
            </div>
            <div class="radio-text">
                <input type="radio" name="Select" id="radio-button-1">

                <input type="radio" name="Select" id="radio-button-2">
                <label for="radio-button-1" class="radio-button-1">
                    <i class="fa fa-user"></i>
                    <h5>For Myself</h5>
                    <p>Write better.Think more clearly.Stay organized.</p>

                </label>
                <label for="radio-button-2" class="radio-button-2">
                    <i class="fa fa-users"></i>
                    <h5>With my team</h5>
                    <p>Wikis,docs,tasks and projects all in one space.</p>
                </label>


            </div>
            <div class="button button_gap1">
                <button type="button" class="back-click">Back</button>
                <button type="button" class="finish-click">Finish</button>
            </div>

        </div>
        <?php
        // ! Step Final 
        ?>
        <div class="step">

            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
            </svg>
            <div class="content">
                <h2>Congratulations! <span id="shown_name"></span></h2>
                <p>You have completed onboarding,you can start using the Eden!</p>
            </div>
            <div class="button launch">
                <button>Launch Eden</button>
            </div>

        </div>
        </form>
    </div>

</div>

<!-- reapeater -->

<script src="<?= base_url('assets/js/jquery.repeater.min.js') ?>"></script>
<script>
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
</script>
<script>
    let total_rate = $("#total_rate").val();
    $('#sub_amount').val(total_rate);
    $('#total_amount').val(total_rate);

    let getId = [];

    function product_add(e) {
        var price = $(e).children('option:selected').data('price');
        // var discount=$(e).children('option:selected').data('discount');
        var description = $(e).children('option:selected').data('description');
        var testId = $(e).children('option:selected').data('testid');
        $(e).closest('.row').find('.price').val(price);
        // $(e).closest('.row').find('.test_id').val({...testId});
        $(e).closest('.row').find('.descirbe').val(description);


        // function get_count(e){
        //   // var qty=parseFloat($(e).val());
        //   var price=parseFloat($(e).closest('.row').find('.price').val());
        //   var sub=price; // qty*price
        //   $(e).closest('.row').find('.sub').val(sub);
        //   sub_amount();
        //   total_amount_calc();
        // }

        getId.push(testId);

        // ? change by me
        var price = parseFloat($(e).closest('.row').find('.price').val());
        var sub = price; // qty*price
        $(e).closest('.row').find('.sub').val(sub);
        sub_amount();
        total_amount_calc();




        function get_pricecount(e) {
            var price = parseFloat($(e).val());
            // var qty=parseFloat($(e).closest('.row').find('.qty').val());

            var sub = price; // qty*price
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

    }

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
</script>
<script>
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
</script>