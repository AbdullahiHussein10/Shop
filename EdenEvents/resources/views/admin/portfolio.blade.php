@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container-fluid">
    <h3 class="text-dark mb-1">Home Page</h3>
</div>
<div class="container-fluid">
    <div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-1">Header</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-2">Team</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Gallery</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade" role="tabpanel" id="tab-1">
                <h4>Video</h4>
                <form>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>Background Picture</label><input type="file" class="w-100"></div>
                        </div>
                        <div class="col align-self-center">
                            <div class="form-group"><button class="btn btn-primary" type="button">Save</button></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade show active" role="tabpanel" id="tab-2">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold w-50">Team Members</p><button class="btn btn-primary float-none" type="button" data-toggle="modal" data-target="#create-user">Add team member</button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                            <option value="10" selected="">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>&nbsp;</label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Phone Number</th>
                                    <th>Age</th>
                                    <th>Emails</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>03943902</td>
                                    <td>33</td>
                                    <td>Wesley@gmail.com</td>
                                    <td><button class="btn btn-primary btn-sm" type="button">Edit</button><button class="btn btn-danger btn-sm mx-1" type="button">Delete</button></td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar2.jpeg">Angelica Ramos</td>
                                    <td>Chief Executive Officer(CEO)</td>
                                    <td>92030228</td>
                                    <td>47</td>
                                    <td>2009/10/09<br></td>
                                    <td><button class="btn btn-primary btn-sm" type="button">Edit</button><button class="btn btn-danger btn-sm mx-1" type="button">Delete</button></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td><strong>Name</strong></td>
                                    <td><strong>Position</strong></td>
                                    <td><strong>Phone Number</strong></td>
                                    <td><strong>Age</strong></td>
                                    <td><strong>Start date</strong></td>
                                    <td><strong>Salary</strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" role="dialog" tabindex="-1" id="create-user">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Create User</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group"><input class="form-control" type="text" placeholder="User names"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><input class="form-control" type="text" placeholder="Title"></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="pr-2">Profile picture:&nbsp;</label><input type="file"></div>
                                </form>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="tab-3">
                <form>
                    <div class="form-row mt-3">
                        <div class="col-md-9">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Heading"></div>
                            <div class="form-group"><textarea class="form-control" rows="15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed porta sapien. In id erat at turpis dapibus euismod. Nulla leo odio, laoreet ut augue mattis, congue vehicula augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eleifend nunc et nisl scelerisque feugiat. Sed id arcu quis mi egestas ullamcorper. Sed sodales enim at elementum sollicitudin. Vestibulum id maximus dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum sit amet urna in lorem facilisis posuere. Morbi ac auctor dolor. Proin condimentum justo sed ex molestie venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent eu finibus eros.Integer sed fringilla augue. Integer massa mi, vestibulum non quam egestas, fringilla varius ligula. Proin efficitur finibus pretium. Sed sit amet eros dolor. Phasellus purus mauris, fringilla ac congue et, lobortis at tortor. Maecenas blandit lectus sit amet est tristique, eu blandit tortor feugiat. Sed nec augue enim. Mauris lobortis nibh in tortor volutpat, nec porta eros viverra. In at pellentesque leo. Aliquam in risus ut sapien pharetra tempor ac sit amet orci. Maecenas tincidunt diam sit amet justo luctus, eget ullamcorper lacus pharetra. Fusce imperdiet elit et tellus feugiat euismod. Vestibulum eget hendrerit nulla. Donec eget vulputate ipsum.Pellentesque ut purus justo. Donec ultricies sodales enim, in tempus nibh elementum id. Donec dapibus arcu at fermentum efficitur. Curabitur vel erat in purus mattis porttitor eu sit amet velit. Proin scelerisque lectus et malesuada suscipit. Praesent ornare volutpat ante, sed hendrerit est dignissim fermentum. Vivamus purus tellus, vulputate eu massa id, mattis congue eros. Pellentesque sit amet nunc auctor, cursus metus nec, venenatis ex.</textarea></div>
                        </div>
                        <div class="col-md-3 align-self-end"><button class="btn btn-primary" type="button">SAVE</button></div>
                    </div>
                    <div class="form-group"><label class="pr-2">Section picture:&nbsp;</label><input type="file"></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@include('admin.layouts.footer')
