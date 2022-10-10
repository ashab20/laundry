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

        <?php
        // ! Step @1 
        ?>
        <div class="step active">
            <div class="card-body">
                <?php

                ?>
                <form action="" method="get">
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="">Phone:</label>
                            <input class="form-control" type="text" placeholder="Phone" name="contact" value="<?= set_value('contact') ?>" id="contact" />
                            <small class="form-text text-danger"><?= form_error('contact'); ?></small>
                        </div>
                        <div class="form-group col-6">
                            <label for="">Name:</label>
                            <input class="form-control" type="text" placeholder="Name" name="name" value="<?= set_value('name') ?>" id="name" />
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>

                    </div>
                    <div class="form-row">
                        <label for="">Address:</label>
                        <div class="form-group col-12">
                            <textarea name="address" id="address" class="form-control" rows="2" valus="  <?= set_value('address') ?>">

                  </textarea>
                            <small id="address" class="form-text text-danger"><?= form_error('address'); ?></small>
                        </div>
                    </div>
                    <div class="form-group button">
                        <button class="create-workspace btn btn-primary btn-block mt-3" type="button">Add</button>
                    </div>
                </form>

            </div>

        </div>
        <?php
        // ! Step @2 
        ?>
        <?= form_open() ?>
        <div class="step">
            <!-- 
            <div class="content">
                <h4>Let's set up a home for all your work</h4>
                <p>You can always create another workspace later.</p>
            </div> -->
            <div class="form-group">
                <div class="row bg-light p-2 rounded-top">
                    <div class="col-2"></div>
                    <div class="col-3">
                        <label for="">Test</label>
                    </div>
                    <div class="col-2"><label for="">Description</label></div>
                    <div class="col-1"><label for="">Quantity</label></div>
                    <div class="col-1"><label for="">Price</label></div>
                    <div class="col-2"><label for="">Total</label></div>

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
                                <div class="p-0 form-group">
                                    <select class="form-control" name="tid" onchange="product_add(this)">
                                        <option value="">Select Item</option>
                                        <?php

                                        foreach ($service as $s) {
                                        ?>
                                            <option data-testid="<?= $s->id ?>" data-price="<?= $s->price ?>" value="<?= $s->id ?>">
                                                <?= ucfirst($s->name) ?>
                                            </option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2 p-0 mx-2">
                                <input type="text" class="form-control descirbe" name="details">
                            </div>
                            <div class="col-1 p-0 mx-2">
                                <input type="text" class="form-control qty" name="qty" onkeyup="get_count(this)">
                            </div>
                            <div class="col-1 p-0 mx-2">
                                <input type="text" onkeyup="get_pricecount(this)" class="form-control price" name="price">
                            </div>
                            <!-- <input type="text" hidden  class="test_id" name="test_id"> -->

                            <div class="col-2 p-0 mx-2">
                                <input readonly type="text" class="form-control sub bg-white" name="sub">
                            </div>

                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn bg-primary  text-white btn-sm" data-repeater-create type="button">+
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
                <h4>Payment</h4>
            </div>
            <!-- final counter -->
            <div class="form-group">

                <div class="row">
                    <div class="col-6">
                        <div>
                            <label for="note" class="form-label text-success">Note:</label>
                            <textarea class="form-control" id="note" placeholder="Enter Note" rows="12" name="note"></textarea>
                        </div>
                        <div class="d-flex">
                            <div class="  mt-2 col-3">
                                <label for="sub_amount" class="form-label text-success">Remark:</label>
                                <input type="text" class="form-control" id="remark" placeholder="Paid or Due" name="remark">
                            </div>
                            <div class="col-4 mt-4">
                                <input type="text" class="form-control mt-2 bg-white" id="dueAmount" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div>
                            <label for="sub_amount" class="form-label text-success">Sub Amount:</label>
                            <input type="number" class="form-control" id="sub_amount" placeholder="Enter Sub Amount" name="subtotal">
                        </div>
                        <div>
                            <label for="discount" class="form-label text-success">Discount:</label>
                            <input type="number" class="form-control" id="discount" placeholder="Enter Discount" name="discount" onkeyup="total_amount_calc()" value="0">
                        </div>
                        <div>
                            <label for="tax" class="form-label text-success">Tax (%):</label>
                            <input type="number" class="form-control" id="tax" placeholder="Enter Tax" name="tax" onkeyup="total_amount_calc()" value="0">
                        </div>
                        <div>
                            <label for="total_amount" class="form-label text-success">Total Amount:</label>
                            <input type="number" value="0" class="form-control" id="total_amount" placeholder="Enter Total Amount" name="total">
                        </div>
                        <div>
                            <label for="payment" class="form-label text-success">Pay Amount:</label>
                            <input type="number" value="0" class="form-control" id="payment" placeholder="Enter Pay Amount" name="payment">
                        </div>
                    </div>
                </div>
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
<script src="<?= base_url('assets/js/invoice.js') ?>"></script>
<script>
    var create_workspace = document.querySelector(".create-workspace");

    create_workspace.addEventListener('click', function(e) {
        e.preventDefault();
        // if(!validateform()){
        //     return false;
        // }

        let contact = $('#contact').val();
        let name = $('#name').val();
        let address = $('#address').val();

        let data = {
            name,
            contact,
            address
        }

//    next time check data by phone
// if customers not exist then create new customer for loundry
        $.ajax({
            url: "<?= base_url('customer/create') ?>",
            type: 'get',
            dataType: 'json',
            data,
            contentType: 'application/json',
            success: function(res) {
                console.log(res);
            },
            error: function(xhr, status, errorMessage) {}
        });
        formnumber++;
        updateform();
        progress_forward();


    });
</script>