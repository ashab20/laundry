<div class="step_wrapper">
    <div class="card">
        <div class="parent">
            <div class="top-div">
                <!-- <img src="https://imgur.com/3U0Yawd.png"> -->
                <h5> Add Customer</h5>

                <button class="edit-customers d-none btn btn-info absolute right-0 m-2" type="button">Edit</button>
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
        <div class="step active ">
            <div class="card-body">

                <form method="GET" class="add_customer">
                    <div class="form-row">
                        <input type="text" name="id" hidden id="id">
                        <div class="form-group col-6">
                            <label for="">Phone:</label>
                            <input class="form-control" type="text" placeholder="Phone" name="contact" id="contact" onkeyup="checkContact(this)" />
                            <small class="form-text text-danger" id="text"><?= form_error('contact'); ?></small>
                            <!-- value="<?= set_value('contact') ?>" -->
                        </div>
                        <div class="form-group col-6">
                            <label for="">Name:</label>
                            <input class="form-control" type="text" placeholder="Name" name="name" id="name" />
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                            <!-- value="<?= set_value('name') ?>" -->
                        </div>

                    </div>
                    <div class="form-row">
                        <label for="">Address:</label>
                        <div class="form-group col-12">
                            <textarea name="address" id="address" class="form-control" rows="2">

                  </textarea>
                            <small id="address" class="form-text text-danger"><?= form_error('address'); ?></small>
                        </div>
                        <!-- valus="<?= set_value('address') ?>" -->
                    </div>
                    <div class="form-group button">
                        <button class="create-workspace btn btn-primary btn-block mt-3 m-2" type="button">Add</button>
                        <button class="next next-click d-none btn btn-primary btn-block mt-3 m-2" type="button">Next</button>
                        <button class="update d-none btn btn-primary btn-block mt-3 m-2" type="button">Update</button>
                    </div>

                </form>
            </div>
        </div>
        <?php
        // ! Step @2 
        ?>

        <form method="get" class="create_product">
            <div class="step">

                <div class="content">
                    <!-- <h4></h4> -->
                </div>
                <div class="row m-4 justify-content-end">
                    <select name="" id="serve" class="form-control col-3 float-end">
                        <option value="">Select...</option>
                        <option value="laundry">Laudry</option>
                        <option value="tailor">Tailor</option>
                    </select>
                </div>
                <input type="text" hidden id="customerId" name="customer_id">
                <div class="form-group d-none" id="service-content">
                    <div class="row bg-light p-2 rounded-top">
                        <div class="col-2"></div>
                        <div class="col-3">
                            <label for="" id="serveName">Laundry</label>
                        </div>
                        <div class="col-2"><label for="">Size</label></div>
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
                                <div class="col-2 mr-2">
                                    <div class="p-0 form-group">
                                        <select class="form-control" name="service_id" id="service_id" onchange="product_add(this)">
                                            <option value="">Select Item</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2 p-0 mx-2">
                                    <input type="text" class="form-control descirbe" name="size" placeholder="S/M/L or feet">
                                </div>
                                <div class="col-1 p-0 mx-2">
                                    <input type="text" class="form-control qty" name="qty" onkeyup="get_count(this)">
                                </div>
                                <div class="col-1 p-0 mx-2">
                                    <input type="text" onkeyup="get_pricecount(this)" class="form-control price" name="subtotal">
                                </div>
                                <!-- <input type="text" hidden  class="test_id" name="test_id"> -->

                                <div class="col-2 p-0 mx-2">
                                    <input readonly type="text" class="form-control sub bg-white" name="subtotal">
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
                <div class="d-none" id="textSize">
                    <label for="">Description:</label>
                    <textarea class="form-control" name="details" id="" cols="20" rows="5" placeholder="Color, Extral Fasion etc"></textarea>
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
                        <div class="col-12">
                            <div>
                                <label for="sub_amount" class="form-label text-muted">Sub Amount:</label>
                                <input type="number" class="form-control" id="sub_amount" placeholder="Enter Sub Amount" name="subtotal">
                            </div>
                            <div>
                                <label for="discount" class="form-label text-muted">Discount:</label>
                                <input type="number" class="form-control" id="discount" placeholder="Enter Discount" name="discount" onkeyup="total_amount_calc()" value="0">
                            </div>
                            <!-- <div>
                                <label for="tax" class="form-label text-success">Tax (%):</label>
                                <input type="number" class="form-control" id="tax" placeholder="Enter Tax" name="tax" onkeyup="total_amount_calc()" value="0">
                            </div> -->
                            <div>
                                <label for="total_amount" class="form-label text-muted">Total Amount:</label>
                                <input type="number" value="0" class="form-control" id="total_amount" placeholder="Enter Total Amount" name="total_price">
                            </div>
                            <div>
                                <label for="payment" class="form-label text-muted">Pay Amount:</label>
                                <input type="number" value="0" class="form-control" id="payment" placeholder="Enter Pay Amount" name="payment">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button button_gap1">
                    <button type="button" class="back-click">Back</button>
                    <button type="submit" class="create_porduct finish-click">Finish</button>
                </div>

            </div>
        </form>
        <?php
        // ! Step Final 
        ?>
        <div class="step">
            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
            </svg>
            <div class="content" style="justify-content: center;display: flex;
flex-direction: column;align-items: center;">
                <h2>Order Completed!<span id="shown_name"></span></h2>
                <p>Order Detais</p>
                <div id="details">

                </div>
            </div>
            <div class="button launch">
                <button type="button" id="printer">Print</button>
            </div>
        </div>
    </div>

</div>



<!-- reapeater -->

<script src="<?= base_url('assets/js/jquery.repeater.min.js') ?>"></script>
<script src="<?= base_url('assets/js/invoice.js') ?>"></script>
<script>
    let customerId = $('#customerId')
    let contact = $('#contact');
    let name = $('#name');
    let address = $('#address');
    let editCustomers = $('.edit-customers');
    let serve = $('#serve');
    let serviceContent = $('#service-content');
    let textSize = $("#textSize");
    // search contact with debounce
    function debounce(func, timeout = 1000) {
        let timer;
        return (...args) => {
            clearTimeout(timer);
            timer = setTimeout(() => {
                func.apply(this, args);
            }, timeout);
        };
    }

    // *** Change Service ***
    serve.change(() => {
        serviceContent.removeClass('d-none');
        $('#textSize').removeClass('d-none');
        $('#serveName').text(serve.val());
        if (serve.val() === "laundry") {
            $.ajax({
                url: "<?= base_url('service') ?>",
                type: 'GET',
                dataType: 'json',
                data: {
                    service: serve.val()
                },
                contentType: 'application/json',
                success: function(res) {
                    if (res.length > 0) {
                        let content = `<option value=''>Select</option>`
                        content += res.map((r) => {
                            return `<option value='${r.id}'  data-testid='${r.id}' data-price='${r.price}'>${r.name}</option>`
                        })

                        $("#service_id").html(content)
                    }
                },
                error: function(xhr, status, errorMessage) {}
            });
        } else if (serve.val() === "tailor") {

            $.ajax({
                url: "<?= base_url('service') ?>",
                type: 'GET',
                dataType: 'json',
                data: {
                    service: serve.val()
                },
                contentType: 'application/json',
                success: function(res) {
                    if (res.length > 0) {
                        let content = `<option value=''>Select</option>`
                        content += res.map((r) => {
                            return `<option value='${r.id}' data-testid='${r.id}' data-price='${r.price}'>${r.name}</option>`
                        })

                        $("#service_id").html(content)
                    }
                },
                error: function(xhr, status, errorMessage) {}
            });
        }
    })

    function checking(e) {
        if (e.value != NaN) {
            $.ajax({
                url: `<?= base_url('quick/findcustomer') ?>`,
                dataType: 'json',
                type: "GET",
                data: {
                    phone: e.value.trim()
                },
                contentType: 'application/json',
                success: function(res) {
                    if (res.length > 0) {
                        name.val(res[0].name).attr({
                            readonly: true
                        });
                        $('#id').val(res[0].id);
                        contact.val(res[0].contact).attr({
                            readonly: true
                        })
                        address.val(res[0].address).attr({
                            readonly: true
                        })
                        $("#customerId").val(res[0].id)
                        $('.create-workspace').addClass('d-none');
                        $('.next').removeClass('d-none');
                        create_customer = null;
                        editCustomers.removeClass('d-none');

                    }
                },
                error: function(xhr, status, errorMessage) {
                    name.val("")
                    address.val("")
                    $("#customerId").val(null)
                }
            });
        }
    }
    const checkContact = debounce((e) => checking(e));

    var create_customer = $(".create-workspace");

    create_customer.click((e) => {
        e.preventDefault();
        let data = {
            name: name.val(),
            contact: contact.val(),
            address: address.val(),
            created_at: `${new Date().toISOString().slice(0, 19).replace('T', ' ')}`,
            status: 1
        }
        $.ajax({
            url: "<?= base_url('quick/addcustomer') ?>",
            type: 'GET',
            dataType: 'json',
            data,
            contentType: 'application/json',
            success: function(res) {
                if (res) {
                    $("#customerId").val(res);
                    formnumber++;
                    updateform();
                    progress_forward();
                }
            },
            error: function(xhr, status, errorMessage) {}
        });
    });

    editCustomers.click(() => {

        $('.next').addClass('d-none')
        $('.update').removeClass('d-none');
        textSize.removeClass("d-none");
        name.attr({
            readonly: false
        });
        contact.attr({
            readonly: false
        })
        address.attr({
            readonly: false
        })
    })
    // update customers
    $('.update').click((e) => {
        e.preventDefault();
        let customersId = $('#id');
        let data = {
            id: customersId.val(),
            name: name.val(),
            contact: contact.val(),
            address: address.val(),
            created_at: `${new Date().toISOString().slice(0, 19).replace('T', ' ')}`,
            status: 1
        }

        $.ajax({
            url: `<?= base_url('quick/update') ?>`,
            type: 'GET',
            dataType: 'json',
            data,
            contentType: 'application/json',
            success: function(res) {
                console.log(res);
                if (res) {
                    formnumber++;
                    updateform();
                    progress_forward();
                    editCustomers.addClass('d-none');
                }
            },
            error: function(xhr, status, errorMessage) {}
        });
    });
    // * products_add
    var create_porduct = $(".create_porduct");

    let data = []
    create_porduct.click((e) => {
        e.preventDefault();
        let data = $('form.create_product').serialize();

        $.ajax({
            url: "<?= base_url('quick/addproduct') ?>",
            type: 'GET',
            dataType: 'json',
            data,
            contentType: 'application/json',
            success: function(res) {
                if (res) {
                    console.log(res);
                    let content = `
                        <table style="min-width:300px;text-align:center;">
                            <tr>
                                <th>Order Id</th>
                                <td>${res.order_id}</td>
                            </tr>
                            <tr>
                                <th>Product</th>
                                <td>${JSON.parse(res.product_id) }</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>${res.name}</td>
                            </tr>
                            <tr>
                                <th>Contact</th>
                                <td>${res.contact}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>${res.address}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>${res.total_price}</tr>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>${res.paid}</td>
                            </tr>
                            <tr>
                                <th>Due</th>
                                <td>${res.total_price - res.paid }</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>${res.created_at}</td>
                            </tr>
                        </table>
                    `;
                    $("#details").html(content)
                }
            },
            error: function(xhr, status, errorMessage) {}
        });

    });


    $("#printer").click(() => {
        let printContents = $("#details").html();
        let originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;

    });
</script>