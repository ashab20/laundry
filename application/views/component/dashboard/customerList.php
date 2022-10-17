<!-- Customers List start -->
<div class="card mb-3">
  <div class="card-header">
    <?php 
    print_r($data);
    ?>
    <div class="row align-items-center justify-content-between">
      <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
        <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Recent Purchases</h5>
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
          <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">New</span></button>
          <button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Filter</span></button>
          <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Export</span></button>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body px-0 pt-0">
    <div class="dashboard-data-table">
      <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=\"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"},"buttons":["copy","excel"]}'>
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
            <th class="sort pr-1 align-middle">Product</th>
            <th class="sort pr-1 align-middle text-center">Payment</th>
            <th class="sort pr-1 align-middle text-right">Amount</th>
            <th class="no-sort pr-1 align-middle data-table-row-action"></th>
          </tr>
        </thead>
        <tbody id="purchases">
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-0" />
                <label class="custom-control-label" for="checkbox-0"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">Sylvia Plath</a></th>
            <td class="align-middle">john@gmail.com</td>
            <td class="align-middle">Slick - Drag &amp; Drop Bootstrap Generator</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$99</td>
            <td class="align-middle white-space-nowrap">
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
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-1" />
                <label class="custom-control-label" for="checkbox-1"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">Homer</a></th>
            <td class="align-middle">sylvia@mail.ru</td>
            <td class="align-middle">Bose SoundSport Wireless Headphones</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$634</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown1" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown1">
                  <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-2" />
                <label class="custom-control-label" for="checkbox-2"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">Edgar Allan Poe</a></th>
            <td class="align-middle">edgar@yahoo.com</td>
            <td class="align-middle">All-New Fire HD 8 Kids Edition Tablet</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-secondary">Blocked<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$199</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown2" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown2">
                  <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-3" />
                <label class="custom-control-label" for="checkbox-3"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">William Butler Yeats</a></th>
            <td class="align-middle">william@gmail.com</td>
            <td class="align-middle">Apple iPhone XR (64GB)</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$798</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown3" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown3">
                  <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-4" />
                <label class="custom-control-label" for="checkbox-4"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">Rabindranath Tagore</a></th>
            <td class="align-middle">tagore@twitter.com</td>
            <td class="align-middle">ASUS Chromebook C202SA-YS02 11.6&quot;</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-secondary">Blocked<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$318</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown4" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown4">
                  <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-5" />
                <label class="custom-control-label" for="checkbox-5"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">Emily Dickinson</a></th>
            <td class="align-middle">emily@gmail.com</td>
            <td class="align-middle">Mirari OK to Wake! Alarm Clock &amp; Night-Light</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-warning">Pending<span class="ml-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$11</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown5" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown5">
                  <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-6" />
                <label class="custom-control-label" for="checkbox-6"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">Giovanni Boccaccio</a></th>
            <td class="align-middle">giovanni@outlook.com</td>
            <td class="align-middle">Summer Infant Contoured Changing Pad</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$31</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown6" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown6">
                  <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-7" />
                <label class="custom-control-label" for="checkbox-7"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">Oscar Wilde</a></th>
            <td class="align-middle">oscar@hotmail.com</td>
            <td class="align-middle">Munchkin 6 Piece Fork and Spoon Set</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$43</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown7" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown7">
                  <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-8" />
                <label class="custom-control-label" for="checkbox-8"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">John Doe</a></th>
            <td class="align-middle">doe@gmail.com</td>
            <td class="align-middle">Falcon - Responsive Dashboard Template</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-success">Success<span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$57</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown8" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown8">
                  <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-9" />
                <label class="custom-control-label" for="checkbox-9"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">Emma Watson</a></th>
            <td class="align-middle">emma@gmail.com</td>
            <td class="align-middle">Apple iPhone XR (64GB)</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-secondary">Blocked<span class="ml-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$999</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown9" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown9">
                  <div class="bg-white py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="btn-reveal-trigger">
            <td class="align-middle">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input checkbox-bulk-select-target" type="checkbox" id="checkbox-10" />
                <label class="custom-control-label" for="checkbox-10"></label>
              </div>
            </td>
            <th class="align-middle"><a href="pages/customer-details.html">Sylvia Plath</a></th>
            <td class="align-middle">plath@yahoo.com</td>
            <td class="align-middle">All-New Fire HD 8 Kids Edition Tablet</td>
            <td class="align-middle text-center fs-0"><span class="badge badge rounded-capsule badge-soft-warning">Pending<span class="ml-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
            </td>
            <td class="align-middle text-right">$199</td>
            <td class="align-middle white-space-nowrap">
              <div class="dropdown text-sans-serif">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button" id="dropdown10" data-toggle="dropdown" data-boundary="html" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-right border py-0" aria-labelledby="dropdown10">
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
<!-- Customers List End -->