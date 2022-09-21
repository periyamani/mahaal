@extends('layouts.adminview')
@section('pagestyles')
    



<link rel="stylesheet" href="{{URL::asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<style>
.dz-processing {
    display: inline-block;
    width: 11.25rem;
}

.dz-message {
    margin: 1rem 0;
    font-weight: 500;
    text-align: center;
}

.border_style {
    border: 2px solid;
    border-style: dashed;
    /* cursor: pointer; */
    padding: 20px 25px 0px 25px;
}

.image_align {
    width: 7em;
    height: 7em;
    /* margin-right: 15px; */
    margin-bottom: 15px;
}

#output {
    /* display:none; */
}

.file_name {
    text-overflow: ellipsis;
    width: 100%;
    overflow: hidden;
    font-size: 13px;
    white-space: nowrap;
    padding: 0px 8px;
}

.hr_margin {
    margin: 5px 0;
    color: #d8dcdf;
}

.file_remove {
    padding: 3px 0px;
    width: 100%;
    font-size: 13px;
}

.file_remove:hover {
    color: #677788;
    background: rgba(38, 60, 85, .1);
}

.view_text_over {
    overflow: hidden;
}

.img_size {
    width: 100% !important;
    height: 120px !important;
    margin-bottom: 15px;
}

.edit_file_remove {
    padding: 0 39px;
}

.edit_file_remove:hover {
    padding: 0 39px;
    background: #d3d3d3d4;
}

.spinner_in {
    position: relative;
    top: 0px;
    left: -5px;
}

.star {
    color: red;
}
.main-menu .main-menu-header {
    padding: 23px 0 !important;
}
</style>
<link rel="stylesheet" href="{{URL::asset('admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{URL::asset('admin/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/vendor/fonts/core.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/vendor/fonts/datatables.bootstrap5.css')}}" />
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{URL::asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/vendor/libs/quill/editor.css')}}" />
@stop

@section('content')
<div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Category</h5>
                                           
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="/home"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Category</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                    <div class="">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Bootstrap modals -->
        <div class="card radius-15">
            <div class="card-body">
                <h5 class="card-header"> <button type="button" class="btn btn-primary ms-3 add_model_op"><i
                            class="bx bx-plus me-sm-2"></i>Add New</button></h5>

                <!-- Complex Headers -->
                <div class="">
                    <!-- <h5 class="card-header">Complex Headers</h5> -->
                    <div class="card-datatable text-nowrap ">
                        <table class="dt-complex-header table table-bordered" style="border-color: #d4d8dd">
                            <thead>
                                <tr>
                                    <th>Reg.No</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                        </table>
                    </div>
                </div>

            </div>

        </div>


        <!-- / model -->
        <!-- Modal -->

        <div class="modal fade" id="addmodel" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Add Category</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">×</button>
                    </div>
                    <div class="modal-body">
                    <form id="festivelform">
                            <div class="row g-2 mb-3">

                                <div class="col-sm-12 mb-0">

                                    <label for="emailBasic" class="form-label">Name<span
                                            class="add_title star">*</span></label>
                                    <input type="text" id="emailBasic" required name="title" class="form-control">
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary add_submit_btn" onclick="move()">Save</button>
                    </form>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="editmodel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit Category</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">×</button>
                </div>
                <div class="modal-body">

                    <form id="Editform">
                        <div class="row g-2">

                            <div class="col-sm-12 mb-0">

                                <label for="emailBasic" class="form-label">Title<span
                                        class="edd_title star">*</span></label>
                                <input type="hidden" name="id">
                                <input type="text" id="edit_title" required name="title" class="form-control">
                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary edit_submit_btn">Save</button>

                    </form>
                </div>

            </div>

        </div>
    </div>


    <input class="delete_option_active" value="active" type="hidden">
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('pageScript')
<script src="{{URL::asset('admin/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{URL::asset('admin/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('admin/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js')}}"></script>
<script src="{{URL::asset('admin/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>

<script src="{{URL::asset('admin/back_js/category.js')}}"></script>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="{{URL::asset('admin/vendor/libs/quill/katex.js')}}"></script>
<script src="{{URL::asset('admin/vendor/libs/quill/quill.js')}}"></script>
<script src="{{URL::asset('admin/js/forms-editors.js')}}"></script>
<script>
function move() {
    var elem = document.getElementById("myBar");
    var width = 0;
    var id = setInterval(frame, 10);

    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
            elem.innerHTML = width * 1 + '%';
        }
    }
}
</script>
@stop