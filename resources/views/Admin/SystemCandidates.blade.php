@extends('layouts.main')

@section('content')

<!-- Main Content Here -->
<div class="main_content mt-2">
            <div class="container-fluid">
                <h2 class="heading_candidate">Candidates</h2>
            </div>
                <div class="document_heading container-fluid">
                    <!-- <form > -->
                        <div class="form-row mt-3">
                            <div class="form-group col-sm-12 col-md-4 col-lg-4 has-search">
                              <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control" id="search" name="search" placeholder="Search Candidate">

                            </div>
                            <div class="btn_parent_div form-group col-sm-12  col-md-8 col-lg-8 d-flex ">
                                <div class="row">
                                    <button class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-camera mr-1" aria-hidden="true"></i>Upload Picture
                                    </button>
                                    <button data-toggle="modal" data-target="#uploadModal" class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-upload mr-1"
                                        aria-hidden="true"></i>Import
                                    </button>
                                    <a href="{{ route('exportCandidate') }}" class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-download mr-1"
                                            aria-hidden="true"></i>Export
                                    </a>
                                    <button class="btn filter_btn Candidate_btns multi_btn" data-toggle="modal"
                                    data-target="#FIlterModal"><i class="fa fa-filter mr-1" aria-hidden="true"></i>New Search
                                    </button>
                                    <button class="btn filter_btn Candidate_btns comon_color_btn AddCandidate"><i class="fa-solid fa-plus mr-1"></i>New Candidate
                                    </button>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->

                </div>
                <div class="table_div container-fluid">
        
                    <table class="table">
                        <thead class="table_head">
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Political Party</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email ID</th>
                            <th scope="col">Position</th>
                            <th scope="col">State</th>
                            <th scope="col">City</th>
                            <th scope="col">Parroquias</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($systemCandidates as $candi)
                          <tr>
                            <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">{{$candi->name}}</th>
                            <td>{{$candi->pol_party}}</td>
                            <td>{{$candi->phone}}</td>
                            <td>{{$candi->email}}</td>
                            <th scope="row">{{$candi->position}}</th>
                            <td>{{$candi->state}}</td>
                            <td>{{$candi->city}}</td>
                            <td>{{$candi->parroquia}}</td>
                            <td class="d-flex">
                            <a href="#" class="mr-1 text-dark edit_delete_btn " data-id="{{$candi->id}}" data-toggle="modal" data-target="#EditModal"><i class="fa fal fa-edit"></i></a>
                            <a href="#" class=" ml-1 text-dark edit_delete_btn" data-toggle="modal" data-id="{{$candi->id}}" data-target="#DeleteModal"><i class="fa far fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          @endforeach
                         
                        </tbody>
                      </table>
                      
                      
                </div>
        </div>
       
    </div>
    <!-- modals -->
    <!-- delete modal -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalTitle" aria-hidden="true">
        <div class="delete_modal modal-dialog modal-dialog-centered m-auto" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
            </div>
            <form id="deleteCandidate">
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
            <img src="images/delete_pic.png" class="delete_image">
            <p class="delete_text">Are you sure you want to delete?</p>
            <input type="hidden" name="delete_id" id="delete_id" value="">
            </div>
            <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-secondary no_btn" data-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary comon_color_btn yes_btn">Yes</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    <!-- end here -->

    <!-- add modal -->

<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog modal-dialog-centered m-auto" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Candidate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger" style="display:none"></div>
          <div class="form_div w-100">
          <form id="addCandidate" name="addCandidate">
              <div class="form-row mt-3 d-flex flex-row ">
                  <div id="candi_img" class="form-group  candidate_photo">
                      <img  src="images/can_camera.png" class="can_cam_image">
                      <img id="preview_candi_img" style="width: 100px;height: 100px;">

                      <p class="candidate_p_style">Candidate Photo</p>
                      <input type="file" class="form-control d-none" id="drag_drop_field" name="drag_drop_file" oninput="preview_candi_img.src=window.URL.createObjectURL(this.files[0])">

                  </div>
                  <div id="pol_img" class="form-group  political_party_logo">
                      <img src="images/can_camera.png" class="can_cam_image">
                      <img id="preview_pol_party" style="width: 100px;height: 100px;">
                      <p class="candidate_p_style">Political party logo</p>
                      <input type="file" class="form-control d-none" id="pol_party" name="pol_party" oninput="preview_pol_party.src=window.URL.createObjectURL(this.files[0])">

                  </div>
                  
              </div>
                <div class="form-row">
                    <div class="form-group col-6">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter">
                    </div>
                    <div class="form-group col-6">
                        <label for="Political_Party" class="">Political Party</label>
                        <select id="Political_Party" name="pol_party" class="form-control">
                            <option disabled selected>Choose...</option>
                            <option>...</option>
                            <option value="pol_party">Circun</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter">
                  </div>
                  <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="position" class="">Position</label>
                        <select id="position" name="position" class="form-control">
                            <option disabled selected>Choose...</option>
                            <option>...</option>
                            <option value="position">position</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="state" class="">State</label>
                        <select id="state" name="state" class="form-control">
                            <option disabled selected>Choose...</option>
                            <option>...</option>
                            <option value="state">State</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="city" class="">City</label>
                        <select id="city" name="city" class="form-control">
                            <option disabled selected>Choose...</option>
                            <option>...</option>
                            <option value="city">City</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="parroquia" class="">Parroquias</label>
                        <select id="parroquia" name="parroquia" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                            <option value="parroquia">Parroquias</option>
                        </select>
                    </div>
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
        <button id="submit" type="submit" class="btn btn-primary save_btn">Add</button>
      </div>
      </form>

    </div>
  </div>
</div>


<!-- EDIT MODAL -->
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog modal-dialog-centered m-auto" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Candidate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="alert alert-danger alert-danger-edit" style="display:none"></div>

          <div class="form_div w-100">
            <form id="updateCandidate" name="updateCandidate">
              <div class="form-row mt-3 d-flex flex-row ">
                  <div class="form-group  candidate_photo">
                      <img src="images/can_camera.png" class="can_cam_image">
                      <p class="candidate_p_style">Candidate Photo</p>
                      <input type="file" class="form-control d-none drag_drop_file" id="edit_drag_drop_field" name="drag_drop_file">

                  </div>
                  <div class="form-group  political_party_logo">
                      <img src="images/can_camera.png" class="can_cam_image">
                      <p class="candidate_p_style">Political party logo</p>
                      <input type="file" class="form-control d-none drag_drop_file" id="edit_pol_party" name="pol_party">

                  </div>
                  
              </div>
                <div class="form-row">
                    <div class="form-group col-6">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter">
                    </div>
                    <div class="form-group col-6">
                        <label for="political_party" class="">Political Party</label>
                        <select id="edit_political_party" name="pol_party" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                            <option value="pol_party">Circun</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="edit_phone" name="phone" placeholder="Enter">
                  </div>
                  <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="edit_email" name="email" placeholder="Enter">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="position" class="">Position</label>
                        <select id="edit_position" name="position" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                            <option value="position">position</option>

                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="state" class="">State</label>
                        <select id="edit_state" name="state" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                            <option value="state">position</option>

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="city" class="">City</label>
                        <select id="edit_city" name="city" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                            <option value="city">position</option>

                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="parroquia" class="">Parroquias</label>
                        <select id="edit_parroquia" name="parroquia" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                            <option value="parroquia">position</option>

                        </select>
                    </div>
                </div>
                <input type="hidden" id="update_id" name="update_id" value="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary save_btn" style="width: 76px;">Update</button>
    </form>

      </div>
    </div>
  </div>
  
</div>

    <!-- end here  -->
          <!-- side modal -->

          <div class="modal fade amk right from-right delay-200" id="FIlterModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalTitle" aria-hidden="true">
            <div class="modal-dialog  modal-dialog modal-dialog-centered m-auto" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Filters</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form_div w-100">
                      <form>
                            <div class="form-row">
                              <div class="form-group col-12">
                                  <label for="Political_Party" class="">Political Party</label>
                                  <select id="Political_Party" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>...</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-12">
                                  <label for="Position" class="">Position</label>
                                  <select id="Position" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>...</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-12">
                                  <label for="Provincia" class="">Provincia</label>
                                  <select id="Provincia" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>...</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-12">
                                  <label for="Canton" class="">Canton</label>
                                  <select id="Canton" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>...</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-12">
                                  <label for="Parroquia" class="">Parroquia</label>
                                  <select id="Parroquia" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>...</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-12">
                                  <label for="Circumscripcion" class="">Circumscripcion</label>
                                  <select id="Circumscripcion" class="form-control">
                                      <option selected>Choose...</option>
                                      <option>...</option>
                                  </select>
                              </div>
                            </div>
                      </form>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary update_filter_btn btn-block">Update Filter</button>
                </div>
              </div>
            </div>
          </div>

          <div id="uploadModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Candidate</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form method='post' action='{{ route('importCandidate') }}' enctype="multipart/form-data">
          Select file : <input type='file' name='file' id='file' class='form-control' ><br>
          <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
        </form>
      </div>
 
    </div>

  </div>
</div>
    
    


@endsection('content')

@section('javascript')
<script >
   

    $(document).ready(()=>{



        $("#addCandidate").submit(function(event){
		submitForm();
		return false;
	});

    function submitForm(){

        var data = $('form#addCandidate').serialize();
        console.log(data);
	 $.ajax({
		type: "POST",
		url: "{{ route('saveCandidate')}}",
		cache:false,
		data: $('form#addCandidate').serialize(),
		success: function(result){
			// $("#contact").html(response)
            if(result.errors)
            {
                $('.alert-danger').html('');

                $.each(result.errors, function(key, value){
                    $('.alert-danger').show();
                    $('.alert-danger').append('<li>'+value+'</li>');
                });
            }
            else
            {
                $('.alert-danger').hide();
                $('#addCandidate').modal('hide');
                // Swal.fire(
                // 'Candidate Added!',
                // 'New Candidate is Added Successfully!',
                // 'success'
                
                // )
                Swal.fire({
                type: 'success',
                title: 'Candidate Added!',
                text: 'New Candidate is Added 🔥',
                showConfirmButton: false,
                timer: 2000
                })
                location.reload();
            }
			// $("#AddModal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
}
$("#close").click(function(){
$('#exampleModal').modal('hide')
});

$('#EditModal').on('show.bs.modal', function (event) {
			
alert("here");
  var button = $(event.relatedTarget) // Button that triggered the modal
//   var admin_id = button.data('admin')
  var id = button.data('id')
  $.ajax({
		type: "POST",
		url: "{{ route('getCandidate')}}",
		cache:false,
		data: {id:id},
		success: function(result){
			console.log(result)
			console.log(result.data.name)
            
            $('#edit_political_party').val(result.data.pol_party);
            $('#edit_email').val(result.data.email);
            $('#edit_city').val(result.data.city);
            $('#edit_phone').val(result.data.phone);
            $('#edit_position').val(result.data.position);
            $('#edit_state').val(result.data.state);
            $('#edit_parroquia').val(result.data.parroquia);
            $('#edit_name').val(result.data.name);
            $('#update_id').val(result.data.id);


		},
		error: function(){
			alert("Error");
		}
	});

//   var status = button.data('status')
//   var reason = button.data('reason')

//   $("#status").val(status)
//   $("#reason").val(reason)
//   $("#id").val(id)
//   $("#admin_id").val(admin_id)




  // alert(admin_id) 
  // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  // var modal = $(this)
  // console.log(modal);
  // modal.find('.modal-title').text('New message to ' + recipient)
  // modal.find('.modal-body input').val(recipient)
})

$("#updateCandidate").submit(function(event){
		updateForm();
		return false;
	});

    function updateForm(){

        var data = $('form#updateCandidate').serialize();
        console.log(data);
	 $.ajax({
		type: "POST",
		url: "{{ route('updateCandidate')}}",
		cache:false,
		data: $('form#updateCandidate').serialize(),
		success: function(result){
			// $("#contact").html(response)
            if(result.errors)
            {
                $('.alert-danger-edit').html('');

                $.each(result.errors, function(key, value){
                    $('.alert-danger-edit').show();
                    $('.alert-danger-edit').append('<li>'+value+'</li>');
                });
            }
            else
            {
                $('.alert-danger-edit').hide();
                // $('#EditModal').modal('hide');
                // Swal.fire(
                // 'Candidate Updated!',
                // 'Candidate is Updated Successfully!',
                // 'success'
                // )
                Swal.fire({
                type: 'success',
                title: 'Candidate Updated!',
                text: 'Candidate is Updated Successfully ✨',
                showConfirmButton: false,
                timer: 2000
                })
                location.reload();
            }
			// $("#AddModal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
}


$('#btn_upload').click(function(){

var fd = new FormData();
var files = $('#file')[0].files[0];
fd.append('file',files);

// AJAX request
$.ajax({
url: '{{ route('importCandidate')}}',
type: 'post',
data: fd,
contentType: false,
processData: false,
success: function(response){
    $('#uploadModal').modal('hide');
    Swal.fire(
    'File Uploaded!',
    'Your File is Imported Successfully!',
    'success'
    )
    location.reload();
    
}
});
});


$('#DeleteModal').on('show.bs.modal', function (event) {
			
            var button = $(event.relatedTarget)
            var id = button.data('id')
            $('#delete_id').val(id);
          })
 $("#deleteCandidate").submit(function(event){
		deleteForm();
		return false;
	});

    function deleteForm(){

var data = $('form#deleteCandidate').serialize();
console.log(data);
$.ajax({
type: "POST",
url: "{{ route('deleteCandidate')}}",
cache:false,
data: $('form#deleteCandidate').serialize(),
success: function(result){
    $('#DeleteModal').modal('hide')
        Swal.fire({
        type: 'success',
        title: 'Candidate Deleted!',
        text: 'Candidate is Deleted Successfully ✨',
        showConfirmButton: false,
        timer: 2000
        })
        location.reload();
  
},
error: function(){
    alert("Error");
}
});
}
$("#candi_img").click(function () {
    $("#drag_drop_field")[0].click();
});

$("#pol_img").click(function () {
    $("#pol_party")[0].click();
});

            // $('.drag_drop_file').click(()=>{
            //     $('.drag_drop_file > input#drag_drop_field').click();
            // });
            $('.AddCandidate').click(()=>{
                $('.alert-danger').hide();
                $('#AddModal').modal('show');
            
            });
            });
        </script>
@endsection('javascript')
