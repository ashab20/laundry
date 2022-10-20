<div class="step_wrapper">
    <div class="bg-white p-4 rounded-2" style="width: 100%;min-height: 50vh;margin: 2rem;justify-content: center;display: flex;
flex-direction: column;align-items: center;">
        <div class="card-body row">
            <form action="">
                <div class="form-row">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search order id" name="name" id="search" onkeyup="checkContact(this)" />
                    </div>
            </form>
            <br>
            <div class="row">
                <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=\"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"},"buttons":["copy","excel"]}' >
                    <thead class="bg-200 text-900">
                        <tr>
                           
                            <th class="sort pr-1 align-middle">Customer</th>
                            <th class="sort pr-1 align-middle">Email</th>
                            <th class="sort pr-1 align-middle">Address</th>
                            <th class="sort pr-1 align-middle text-center">In date</th>
                            <th class="sort pr-1 align-middle text-center">Delivary Date</th></th>
                            <th class="sort pr-1 align-middle text-center">Due</th>
                            <th class="sort pr-1 align-middle text-right">Total Amount</th>
                            <th class="no-sort pr-1 align-middle data-table-row-action">Action</th>
                        </tr>
                    </thead>
                    <tbody id="purchases">
                        <tr class="btn-reveal-trigger">
                            <td class="align-middle">
                                <div class="custom-control custom-checkbox">

                                    <label class="" id="name"></label>
                                </div>
                            </td>
                            <th class="align-middle">
                                <label class="" id="contact"></label>
                            </th>
                            <td class="align-middle">
                                <label class="" id="address"></label>
                            </td>
                            <td class="align-middle">
                                <label class="" id="in_date"></label>
                            </td>
                            <td class="align-middle text-center fs-0">
                                <label class="" id="out_date"></label>
                            </td>
                            <td class="align-middle text-right"><label class="" id="due"></label></td>
                            <td class="align-middle text-right"><label class="" id="total"></label></td>
                            <td class="align-middle d-none white-space-nowrap options">
                                <div class="dropdown text-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown0" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                    <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown0">
                                        <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- "RECEIVED","WORKING","READY","DELIVERED" -->
<script>
    function debounce(func, timeout = 1000) {
        let timer;
        return (...args) => {
            clearTimeout(timer);
            timer = setTimeout(() => {
                func.apply(this, args);
            }, timeout);
        };
    }

    function checking(e) {
        if (e.value != NaN) {
            $.ajax({
                url: `<?= base_url('search/item') ?>`,
                dataType: 'json',
                type: "GET",
                data: {
                    search: $("#search").val().trim()
                },
                contentType: 'application/json',
                success: function(res) {
                    console.log(res);
                    if (res) {
                        $(".options").removeClass("d-none");
                        $('#name').text(res.name)
                        $('#contact').text(res.contact)
                        $('#address').text(res.address)
                        $('#out_date').text(res.out_date)
                        $('#in_date').text(res.in_date)
                        $('#due').text(res.total_price - res.paid)
                        $('#total').text(res.total_price)

                    }
                },
                error: function(xhr, status, errorMessage) {
                    console.log(errorMessage);
                }
            });
        }
    }
    const checkContact = debounce((e) => checking(e));
</script>