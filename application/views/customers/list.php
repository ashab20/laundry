<!-- Customers List start -->
<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">
                    Customer List
                </h5>
            </div>
            <div class="col-6 col-sm-auto ml-auto text-right pl-0">
                <div class="d-none" id="purchases-actions">
                    <div class="input-group input-group-sm">
                        <select class="custom-select cus" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select>
                        <button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button>
                    </div>
                </div>
                <div id="dashboard-actions">
                    <a href="<?= base_url() ?>customer/create" class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">New</span></a>
                    <button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Filter</span></button>
                    <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Export</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body px-0 pt-0">
        <div class="dashboard-data-table">
            <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ ??? <a href=\"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"},"buttons":["copy","excel"]}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="no-sort pr-1 align-middle data-table-row-bulk-select">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#purchases" data-checkbox-actions="#purchases-actions" data-checkbox-replaced-element="#dashboard-actions" />
                                <label class="custom-control-label" for="checkbox-bulk-purchases-select"></label>
                            </div>
                        </th>
                        <th class="sort pr-1 align-middle">Customer</th>
                        <th class="sort pr-1 align-middle">Email</th>
                        <th class="sort pr-1 align-middle">Address</th>
                        <th class="sort pr-1 align-middle text-center">
                            Created
                        </th>
                        <th class="sort pr-1 align-middle text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="purchases">
                    <?php
                    if ($data > 0) {
                        foreach ($data as $d) { ?>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-0" />
                                        <label class="custom-control-label" for="checkbox-0"></label>
                                    </div>
                                </td>
                                <th class="align-middle"><a href="pages/customer-details.html"><?= $d->name ?></a></th>
                                <td class="align-middle"><?= $d->contact ?></td>
                                <td class="align-middle">
                                    <?= $d->address ?>
                                </td>
                                <td class="align-middle text-right">
                                    <?= $d->created_at ?>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <div class="dropdown text-sans-serif">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown0" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown0">
                                            <div class="bg-white py-2">
                                                <a class="dropdown-item" href="#!">View</a>
                                                <a class="dropdown-item" href="<?= base_url('customer/update') ?>/<?= $d->id ?>">Edit</a>
                                                <a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="<?= base_url("customer/delete/$d->id") ?>">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                    <?php  }
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Customers List End -->