@extends('layouts.master')
@section('title', 'Teams')
@section('content')
<link href="{{ URL::to('assets/css/custom_style.css') }}" rel="stylesheet">
{{-- message --}}
{!! Toastr::message() !!}

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('get_teams_details') }}">Muso Teams</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Teams Section</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Section Name</th>
                                        <th>Content</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Childrens Panel</td>
                                        <td>{!! $childrens_panel[0]->content !!}</td>
                                        <td><img src="{{url('/uploads')}}/{{$event_assets[0]->img_name}}" width="100px"></td>
                                        <td>   
                                            <div class="d-flex">
                                                <a href="{{ route('edit_teamsFirstSection') }}" class="btn btn-primary shadow btn-xs sharp me-1"> <i class="fas fa-pencil-alt"></i></a>
                                               <!-- <a class="btn btn-danger shadow btn-xs sharp delete_user" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash"></i></a> -->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                         <td>Executive Team</td>
                                        <td></td>
                                        <td><img src="{{url('/uploads')}}/{{$event_assets[1]->img_name}}" width="100px"></td>
                                        <td>   
                                            <div class="d-flex">
                                                <a href="{{ route('edit_teamsExecutive') }}" class="btn btn-primary shadow btn-xs sharp me-1"> <i class="fas fa-pencil-alt"></i></a>
                                               <!-- <a class="btn btn-danger shadow btn-xs sharp delete_user" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash"></i></a> -->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                         <td>Join Us</td>
                                        <td>{!! $join_us[0]->join_us !!}</td>
                                        <td></td>
                                        <td>   
                                            <div class="d-flex">
                                                <a href="{{ route('edit_teamsJoinUs') }}" class="btn btn-primary shadow btn-xs sharp me-1"> <i class="fas fa-pencil-alt"></i></a>
                                              <!--  <a class="btn btn-danger shadow btn-xs sharp delete_user" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash"></i></a> -->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                         <td>Advisory Board</td>
                                        <td></td>
                                        <td></td>
                                        <td>   
                                            <div class="d-flex">
                                                <a href="{{ route('edit_teamsAdvisory') }}" class="btn btn-primary shadow btn-xs sharp me-1"> <i class="fas fa-pencil-alt"></i></a>
                                              <!--  <a class="btn btn-danger shadow btn-xs sharp delete_user" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash"></i></a> -->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                         <td>Patrons & Supporters</td>
                                        <td>{!! $patrons_supporters[0]->content !!}</td>
                                        <td></td>
                                        <td>   
                                            <div class="d-flex">
                                                <a href="{{ route('edit_teamsPatrons') }}" class="btn btn-primary shadow btn-xs sharp me-1"> <i class="fas fa-pencil-alt"></i></a>
                                              <!--  <a class="btn btn-danger shadow btn-xs sharp delete_user" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash"></i></a> -->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                         <td>Consultants</td>
                                        <td></td>
                                        <td></td>
                                        <td>   
                                            <div class="d-flex">
                                                <a href="{{ route('edit_consultants') }}" class="btn btn-primary shadow btn-xs sharp me-1"> <i class="fas fa-pencil-alt"></i></a>
                                                <!--<a class="btn btn-danger shadow btn-xs sharp delete_user" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash"></i></a> -->
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Expense Modal -->
<div id="edit_user" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="/update_section" method="post" enctype="multipart/form-data">
                               @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                         <div id="dynamic-content"></div>
                                    </div>
                                </div>
                                <div id="dynamic-content"></div>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Expense Modal -->

<!-- Delete User Modal -->
<div class="modal custom-modal fade" id="delete_user" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete User</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form action="{{ route('delete_Record') }}" method="POST">
                        @csrf
                        <input type="hidden" id="e_id" name="id">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary-cus continue-btn submit-btn">Delete</button>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary-cus cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete User Modal -->
@section('script')
    <!-- Bootstrap Core JS -->
    <script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
       
  $(document).on('click', '#getUser', function(e){

        e.preventDefault();

        var url = $(this).data('url');

        $('#dynamic-content').html(''); // leave it blank before ajax call
       // $('#modal-loader').show();      // load ajax loader

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html'
        })
        .done(function(data){
            console.log(data);  
            $('#dynamic-content').html('');    
            $('#dynamic-content').html(data); // load response 
           // $('#modal-loader').hide();        // hide ajax loader   
        })
        .fail(function(){
            $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            $('#modal-loader').hide();
        });

    });

    </script>
    {{-- show data on model or edit --}}
    <script>
        // $(document).on('click','.edit_user',function()
        // {
        //     var _this = $(this).parents('tr');
        //     $('#section_id').val(_this.find('.section_id').text());
        //     $('#content').val(_this.find('.name').text());
        //    // $('#content').val(_this.find('.user_id').text());
        //     // $('#e_name').val(_this.find('.name').text());
        //     // $('#e_email').val(_this.find('.email').text());
        //     // $('#e_phone_number').val(_this.find('.phone_number').text());
        //     // $('#e_status').val(_this.find('.status').text());
        //     // $('#e_role_name').val(_this.find('.role_name').text());
        //     // $('#e_join_date').val(_this.find('.join_date').text());
        // });
    </script>

    {{-- delete user --}}
    <script>
        $(document).on('click','.delete_user',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.section_id').text());
        });
    </script>

<!-- <script type="text/javascript">
$(function() {
$('#profile-image').on('click', function() {
    alert('test');

});

});
</script> -->

@endsection
@endsection
