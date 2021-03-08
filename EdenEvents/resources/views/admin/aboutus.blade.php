@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')


<div class="container-fluid">
    <h3 class="text-dark mb-1">Home Page</h3>
</div>
<div class="container-fluid">
    <div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Header</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Section1</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Section2</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4">Section 3</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" role="tabpanel" id="tab-1">
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
            <div class="tab-pane fade" role="tabpanel" id="tab-2">
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
            <div class="tab-pane fade" role="tabpanel" id="tab-4">
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
