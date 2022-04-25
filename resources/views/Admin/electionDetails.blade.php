@extends('layouts.main')

@section('content')

<!-- Main Content Here -->
<div class="main_content">
            <div class="document_heading container-fluid d-flex justify-content-between mt-4">
                <p class="document_paragraph">Election 2022</p>
                <button class="btn filter_btn mark_as_complete"><i class="fa fa-solid fa-check"></i>
                    Mark as Complete</button>
            </div>
            <div class="container-fluid">
                <div class="container-fluid butons_div">
                    <button class="btn active_btn tables_btn">Tables</button>
                    <button class="btn candidate_btn">Candidates</button>
                    <button class="btn political_party_btn">Political Parties</button>
                </div>
            </div>

            <!-- tables section -->
            <div class="table_section_div">
                <div class="document_heading container-fluid">
                    <!-- <form > -->
                    <div class="form-row mt-3">
                        <div class="form-group col-sm-12 col-md-4 col-lg-4 has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Search Tables">

                        </div>
                        <div class="btn_parent_div form-group col-sm-12  col-md-8 col-lg-8 d-flex ">
                            <div class="row">

                                <button data-toggle="modal" data-target="#uploadModal" class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-upload mr-1"
                                        aria-hidden="true"></i>Import
                                </button>
                                <a href="{{ route('export') }}" class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-download mr-1"
                                        aria-hidden="true"></i>Export
                                </a>
                                <button class="btn filter_btn Candidate_btns multi_btn"><img
                                        src="images/filter_icon.png" class="filter_icon">Filters
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- </form> -->

                </div>
                <div  class="table_div container-fluid">

                    <table id="table_datatable" class="table" >
                        <thead class="table_head">
                            <tr>
                                <th scope="col">Provincia</th>
                                <th scope="col">Canton</th>
                                <th scope="col">Parroquia</th>
                                <th scope="col">Circunscripcion</th>
                                <th scope="col">Zona</th>
                                <th scope="col">Junta No.</th>
                                <th scope="col">Voters</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($electionDetails))
                            @foreach($electionDetails as $elec)
                            <tr>
                                <th scope="row">{{ $elec->provincia}}</th>
                                <td>{{ $elec->canton}}</td>
                                <td>{{ $elec->parroquia}}</td>
                                <td>{{ $elec->circun}}</td>
                                <th >{{ $elec->zona}}</th>
                                <td>{{ $elec->junta_no}}</td>
                                <td>{{ $elec->voters}}</td>
                                <td class="d-flex">
                                    <a data-id = "{{ $elec->id}}" href="#" class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach
                            

                        </tbody>
                    </table>
                    <div class="d-felx justify-content-center">

                            {{ $electionDetails->links() }}

                        </div>
                @endif


                </div>
            </div>
            <!-- end here -->

            <!-- candidates section -->
            <div class="candidate_section_div d-none">
                <div class="document_heading container-fluid">
                    <!-- <form > -->
                    <div class="form-row mt-3">
                        <div class="form-group col-sm-12 col-md-4 col-lg-4 has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Search Candidate">

                        </div>
                        <div class="btn_parent_div form-group col-sm-12  col-md-8 col-lg-8 d-flex ">
                            <div class="row">

                                <button class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-upload mr-1"
                                        aria-hidden="true"></i>Import
                                </button>
                                <button class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-download mr-1"
                                        aria-hidden="true"></i>Export
                                </button>
                                <button class="btn filter_btn Candidate_btns multi_btn"><img
                                        src="images/filter_icon.png" class="filter_icon">Filters
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
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/tianiaPress.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Socieded Patriotica 21 De Enero</td>
                                <td>1234567</td>
                                <td>email@gmail.com</td>
                                <th scope="row">Position name</th>
                                <td>State name</td>
                                <td>CIty name</td>
                                <td>Name</td>
                                <td class="d-flex"><a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </div>
            <!-- end here -->


            <!-- Political party section -->
            <div class="political_party_div d-none">
                <div class="document_heading container-fluid">
                    <!-- <form > -->
                    <div class="form-row mt-3">
                        <div class="form-group col-sm-12 col-md-4 col-lg-4 has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Search Candidate">

                        </div>
                        <div class="btn_parent_div form-group col-sm-12  col-md-8 col-lg-8 d-flex ">
                            <div class="row">

                                <button class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-upload mr-1"
                                        aria-hidden="true"></i>Import
                                </button>
                                <button class="btn filter_btn Candidate_btns multi_btn"><i class="fa fa-download mr-1"
                                        aria-hidden="true"></i>Export
                                </button>
                                <button class="btn filter_btn Candidate_btns multi_btn"><img
                                        src="images/filter_icon.png" class="filter_icon">Filters
                                </button>
                                <button class="btn filter_btn Candidate_btns comon_color_btn AddCandidate"  data-toggle="modal" data-target="#AddParty"><i class="fa-solid fa-plus mr-1"></i>Add
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
                                <th scope="col">Logo</th>
                                <th scope="col">Name of political party</th>
                                <th scope="col">Level</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><img src="images/party_logo.png" class="table_candidate_img">Tiana
                                    Press</th>
                                <td>Partido Sociedad Patriotica 21 De Enero</td>
                                <td>Parroquia level</td>
                                <td class="d-flex">
                                    <a href="#"
                                        class=" ml-1 text-dark edit_delete_btn" data-toggle="modal"
                                        data-target="#exampleModalCenter"><i class="fa far fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
            <!-- end here -->

        </div>
        <!-- add modal add here -->
        <!-- EDIT MODAL -->
            <div class="modal fade" id="AddParty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog modal-dialog-centered m-auto" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Candidate</h5>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="form_div w-100">
                        <form>
                            <div class="form-row mt-3 d-flex flex-row ">
                                <div class="form-group  candidate_photo">
                                    <img src="images/can_camera.png" class="can_cam_image">
                                    <p class="candidate_p_style">Candidate Photo</p>
                                    <input type="file" class="form-control d-none" id="Drag_drop_field" name="Drag_drop_file">
            
                                </div>
                            </div>
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
                                    <label for="level">Level</label>
                                    <input type="text" class="form-control" id="level" name="phone" placeholder="Enter">
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close_btn" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save_btn">Update</button>
                    </div>
                </div>
                </div>
            </div>
  
      <!-- end here  -->

        <!-- end here -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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



    <!-- FILE UPLOAD -->
    <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">Upload file</button> -->

<!-- Modal -->
<div id="uploadModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload File</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form method='post' action='{{ route('importElectionDetails') }}' enctype="multipart/form-data">
          Select file : <input type='file' name='file' id='file' class='form-control' ><br>
          <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>
        </form>
      </div>
 
    </div>

  </div>
</div>

@endsection('content')

@section('javascript')
<script type="text/javascript">
        $(document).ready(function(){
            // Datatable
            // $('#table_datatable').DataTable();

            // File Upload start
            
            // File Upload ENds
            $('#btn_upload').click(function(){

            var fd = new FormData();
            var files = $('#file')[0].files[0];
            fd.append('file',files);

            // AJAX request
            $.ajax({
            url: '{{ route('importElectionDetails')}}',
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


            // 
            $('.candidate_btn').click(function(){
                $.LoadingOverlay("show");

                setTimeout(function () {
                    $('.table_section_div').addClass('d-none');
                    $('.political_party_div').addClass('d-none');
                    $('.candidate_section_div').removeClass('d-none');
                    $('.candidate_btn').addClass('active_btn');
                    $('.political_party_btn').removeClass('active_btn');
                    $('.tables_btn').removeClass('active_btn');
                    $.LoadingOverlay("hide");
                }, 1000);
                
            });
            $('.political_party_btn').click(function(){
                $.LoadingOverlay("show");

                setTimeout(function () {
                    $('.table_section_div').addClass('d-none');
                    $('.political_party_div').removeClass('d-none');
                    $('.candidate_section_div').addClass('d-none');
                    $('.candidate_btn').removeClass('active_btn');
                    $('.political_party_btn').addClass('active_btn');
                    $('.tables_btn').removeClass('active_btn');
                    $.LoadingOverlay("hide");
                }, 1000);

            });
            $('.tables_btn').click(function(){
                $.LoadingOverlay("show");

                setTimeout(function () {
                    $('.table_section_div').removeClass('d-none');
                    $('.political_party_div').addClass('d-none');
                    $('.candidate_section_div').addClass('d-none');
                    $('.political_party_btn').removeClass('active_btn');
                    $('.tables_btn').addClass('active_btn');
                    $('.candidate_btn').removeClass('active_btn');
                    $.LoadingOverlay("hide");
                }, 1000);

            });
        });







    </script>




@endsection('javascript')
