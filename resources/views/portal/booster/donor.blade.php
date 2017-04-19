@extends('layouts.app')
@section('donor')
  <div class="page-content container-fluid">
          <div class="row">
              <div class="col-md-12">

                  <div class="panel panel-bordered">

                      <div class="panel-heading">
                          <h3 class="panel-title">Add New Donor</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->
                      <form role="form" class="form-edit-add" action="http://tpm.dev/admin/donors" method="POST" enctype="multipart/form-data">
                          <!-- PUT Method if we are editing -->

                          <!-- CSRF TOKEN -->
                          <input type="hidden" name="_token" value="muEj2aotHOwEaHyciyNa5ApTS4aSSrj7rHItSwUD">

                          <div class="panel-body">


                              <!-- If we are editing -->

                                                              <div class="form-group ">
                                      <label for="name">Name</label>
                                                                          <input type="text" class="form-control" name="name" placeholder="Name" value="">


                                                                      </div>
                                                              <div class="form-group ">
                                      <label for="name">Address</label>
                                                                          <input type="text" class="form-control" name="address" placeholder="Address" value="">


                                                                      </div>
                                                              <div class="form-group ">
                                      <label for="name">City</label>
                                                                          <input type="text" class="form-control" name="city" placeholder="City" value="">


                                                                      </div>
                                                              <div class="form-group ">
                                      <label for="name">State Id</label>
                                                                          <select class="form-control select2 select2-hidden-accessible" name="state_id" tabindex="-1" aria-hidden="true">
                      </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-state_id-5z-container"><span class="select2-selection__rendered" id="select2-state_id-5z-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>


                                                                      </div>
                                                              <div class="form-group ">
                                      <label for="name">Zip</label>
                                                                          <input type="text" class="form-control" name="zip" placeholder="Zip" value="">


                                                                      </div>
                                                              <div class="form-group ">
                                      <label for="name">Phone</label>
                                                                          <input type="text" class="form-control" name="phone" placeholder="Phone" value="">


                                                                      </div>
                                                              <div class="form-group ">
                                      <label for="name">Donor Type</label>
                                                                          <select class="form-control select2 select2-hidden-accessible" name="donor_type" tabindex="-1" aria-hidden="true">
                      </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-donor_type-xg-container"><span class="select2-selection__rendered" id="select2-donor_type-xg-container"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>


                                                                      </div>
                                                              <div class="form-group ">
                                      <label for="name">Is Active</label>
                                                                          <ul class="radio">
      </ul>

                                                                      </div>

                          </div><!-- panel-body -->

                          <div class="panel-footer">
                              <button type="submit" class="btn btn-primary save">Save</button>
                          </div>
                      </form>

                      <iframe id="form_target" name="form_target" style="display:none"></iframe>
                      <form id="my_form" action="http://tpm.dev/admin/upload" target="form_target" method="post" enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                          <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
                          <input type="hidden" name="type_slug" id="type_slug" value="donors">
                          <input type="hidden" name="_token" value="muEj2aotHOwEaHyciyNa5ApTS4aSSrj7rHItSwUD">
                      </form>

                  </div>
              </div>
          </div>
      </div>

@endsection
