@extends('layouts.main')

@section('content')
<div class="main_content mt-5">
    <div class="document_heading container-fluid d-flex justify-content-between">
        <p class="document_paragraph">Documents</p>
        <a  href="{{route('uploadDocument')}}" class="btn filter_btn comon_color_btn upload_btn">
            <i class="fa-solid fa-plus"></i>
            Upload Documents</a>
    </div>
    <div class="table_div container-fluid">

        <table class="table">
            <thead class="table_head">
              <tr>
                <th scope="col">Document name</th>
                <th scope="col">Status</th>
                <th scope="col">Time</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><a href="" class="election_link">Election document no 123</a></th>
                <td><span class="badge badge-pill success_badge">Valid</span></td>
                <td>6:30 pm</td>
                <td>16-01-2022</td>
                <td class="d-flex"><a href="#" class="mr-2 text-dark"><i class="fa fal fa-edit"></i></a><a href="#" class="ml-2 text-dark" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
              </tr>
              <tr>
                <th scope="row"><a href="" class="election_link">Election document no 123</a></th>
                <td><span class="badge badge-pill danger_badge">Invalid</span></td>
                <td>6:30 pm</td>
                <td>16-01-2022</td>
                <td class="d-flex"><a href="#" class="mr-2 text-dark"><i class="fa fal fa-edit"></i></a><a href="#" class="ml-2 text-dark" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
              </tr>
              <tr>
                <th scope="row"><a href="" class="election_link">Election document no 123</a></th>
                <td><span class="badge badge-pill success_badge">Valid</span></td>
                <td>6:30 pm</td>
                <td>16-01-2022</td>
                <td class="d-flex"><a href="#" class="mr-2 text-dark"><i class="fa fal fa-edit"></i></a><a href="#" class="ml-2 text-dark" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
              </tr>
              <tr>
                <th scope="row"><a href="" class="election_link">Election document no 123</a></th>
                <td><span class="badge badge-pill danger_badge">Invalid</span></td>
                <td>6:30 pm</td>
                <td>16-01-2022</td>
                <td class="d-flex"><a href="#" class="mr-2 text-dark"><i class="fa fal fa-edit"></i></a><a href="#" class="ml-2 text-dark" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
              </tr>
              <tr>
                <th scope="row"><a href="" class="election_link">Election document no 123</a></th>
                <td><span class="badge badge-pill success_badge">Valid</span></td>
                <td>6:30 pm</td>
                <td>16-01-2022</td>
                <td class="d-flex"><a href="#" class="mr-2 text-dark"><i class="fa fal fa-edit"></i></a><a href="#" class="ml-2 text-dark" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
              </tr>
              <tr>
                <th scope="row"><a href="" class="election_link">Election document no 123</a></th>
                <td><span class="badge badge-pill danger_badge">Invalid</span></td>
                <td>6:30 pm</td>
                <td>16-01-2022</td>
                <td class="d-flex"><a href="#" class="mr-2 text-dark"><i class="fa fal fa-edit"></i></a><a href="#" class="ml-2 text-dark" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
              </tr>
            </tbody>
          </table>     
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="delete_modal modal-dialog modal-dialog-centered m-auto" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center align-items-center flex-column">
        <img src="images/delete_pic.png" class="delete_image">
        <p class="delete_text">Are you sure you want to delete?</p>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary no_btn" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary comon_color_btn yes_btn">Yes</button>
      </div>
    </div>
  </div>
</div>

       
  </div>


</div>

@endsection('content')