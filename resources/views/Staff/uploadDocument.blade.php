@extends('layouts.main')

@section('content')

<div class="main_content">
            
            <div class="container-fluid creat_election_div" style="margin-top: 40px;">


                <div class="heading_create_new_election my-4">
                    <h2>Upload Documents</h2>
                </div>
                <div class="form_div_home">
                    <h3>Position details</h3>

                    <div class="form_div w-100">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="inputState" class="">Position</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="inputState" class="">Provinicia</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="inputState" class="">Canton</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="inputState" class="">Parroquia</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="inputState" class="">Circunscripcion</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="inputState" class="">Zona</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="inputState" class="">Junta No.</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form_div_home mt-5">
                    <div class="d-flex justify-content-between w-100 align-items-center">
                        <h3>Votes</h3>
                        <p class="total_votes_count">Total Votes: 00</p>
                    </div>


                    <div class="form_div w-100">
                        <form>
                            <div class="form-row mt-3">
                                <div class="form-group col-4">
                                    <label for="valid">Valid</label>
                                    <input type="text" class="form-control" id="valid" name="valid">

                                </div>
                                <div class="form-group col-4">
                                    <label for="null">Null</label>
                                    <input type="text" class="form-control" id="null" name="null">

                                </div>
                                <div class="form-group col-4">
                                    <label for="black">Blank</label>
                                    <input type="text" class="form-control" id="black" name="black">

                                </div>
                            </div>
                            <label class="Candidate_votes mt-5">Candidates Votes</label>


                            <table class="table table-bordered">
                                <thead class="table_head">
                                    <tr>
                                        <th scope="col" class="col-1">Sr.</th>
                                        <th scope="col" class="col-10">Candidate name</th>
                                        <th scope="col" class="col-1">Votes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="row_first">1</th>
                                        <td>
                                            <select id="inputState" class="form-control border-0">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                                <option>...</option>
                                                <option>...</option>
                                                <option>...</option>
                                            </select>
                                        </td>
                                        <td>128</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="row_first">2</th>
                                        <td>
                                            <select id="inputState" class="form-control border-0">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                                <option>...</option>
                                                <option>...</option>
                                                <option>...</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn text-light add_btn">
                                <i class="fa-solid fa-plus"></i>
                                Add
                            </button>
                        </form>
                    </div>
                </div>
                <div class="form_div_home last_div_document mt-5">
                    <div class="d-flex justify-content-between w-100 align-items-center">
                        <h3>Documents</h3>
                        <!-- <p class="total_votes_count">Total Votes: 00</p> -->
                    </div>


                    <div class="form_div w-100">
                        <form>
                            <div class="form-row mt-3">
                                <div class="form-group col-12">
                                    <label for="black">Document name</label>
                                    <input type="text" class="form-control" id="black" name="black" placeholder="Enter Document Name">
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="form-group col-6">
                                    <label for="beginningtime" >Beginning time</label>
                                    <input type="time" class="form-control" id="beginningtime" name="beginningtime">

                                </div>
                                <div class="form-group col-6">
                                    <label for="ending_time" >Ending Time</label>
                                    <input type="time" class="form-control" id="ending_time" name="ending_time">

                                </div>
                                <div class="form-group ml-4">
                                    <input type="checkbox" class="form-check-input" id="report_disturbance" name="report_disturbance">
                                    <label for="report_disturbance" >Report Disturbance</label>

                                </div>
                                <div class="form-group col-12">
                                    <label for="black">Comments on disturbance</label>
                                    <input type="text" class="form-control" id="black" name="black" placeholder="Enter Comment">

                                </div>
                            </div>
                            <div class="form-row mt-3 d-flex flex-row justify-content-between">
                                <div class="form-group  Drag_drop_file">
                                    <img src="images/DropImage.png">
                                    <p>Drag / Drop your document file here</p>
                                    <input type="file" class="form-control d-none" id="Drag_drop_field" name="Drag_drop_file">

                                </div>
                                <div class="form-group  Scan_file">
                                    <img src="images/Camera.png">
                                    <p>Scan through camera</p>
                                    <input type="file" class="form-control d-none" id="Scan_field" name="Scan_field">

                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
                 
            </div>


        </div>
    </div>
    <footer>
        <div class="footer d-flex justify-content-end">
                    <button class="btn footer_cancel_btn">Cancel</button>
                    <button class="btn footer_update_btn">Upload<i class="ml-2 fa fa-arrow-right" aria-hidden="true"></i></button>
        </div>
    </footer>
    <!-- <h1>DropzoneJS File Upload Demo</h1>
<section>
  <div id="dropzone">
    <form class="dropzone needsclick" id="demo-upload" action="/upload">
      <div class="dz-message needsclick">    
        Drop files here or click to upload.<br>
        <span class="note needsclick">(This is just a demo dropzone. Selected 
        files are <strong>not</strong> actually uploaded.)</span>
      </div>
    </form>
  </div>
</section> -->


@endsection('content')

@section('javascript')
<script src="js/dropzone.js"></script>
        <script >
            $(document).ready(()=>{
            $('.Drag_drop_file').click(()=>{
                // alert(2323);
                $('.Drag_drop_file > input#Drag_drop_field').click();
            });
            });
        </script>
@endsection('javascript')
