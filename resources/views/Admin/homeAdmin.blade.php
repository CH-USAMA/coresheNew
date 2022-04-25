@extends('layouts.main')

@section('content')

<!-- Main Content Here -->
<div class="main_content">
            <div class="breadCrumbs create_tab_div">
                <p class="breadCrumbs_heading">Elections</p>
            </div>
            <div class="container-fluid create_tab_div ">
                <div class="row" style="display: flex;flex-direction: row;justify-content: space-around;">
                    <a class="create_election">
                        <div class="create_Election d-flex align-items-center">
                            <img src="images/create_election.png" class="m-2" style="width: 68px;height: 68px;">
                            <p class="craete_text">Create New Election</p>
                        </div>
                    </a>

                    <div class="common_div_style d-flex">
                        <div class="d-flex     align-items-center">
                            <img class="vote_img" src="images/Vote.png"
                                style="width: 81px;height:81px;position:relative;left: 20px;margin: 10px 0;">
                            <div class="d-flex flex-column" style="margin-left: 3rem!important;">
                                <p class="first_text" style="margin-bottom:0;">Election 2022</p>
                                <p style="margin-bottom:0;"><i class="fa fad fa-calendar-alt"></i>12/04/2022</p>
                                <p style="margin-bottom:0;color: #ECB916;">In-process</p>
                            </div>
                        </div>
                    </div>

                    <div class="common_div_style d-flex election_third_div">
                        <div class="d-flex     align-items-center">
                            <img class="vote_img" src="images/Vote.png"
                                style="width: 81px;height:81px;position:relative;left: 20px;">
                            <div class="d-flex flex-column" style="margin-left: 3rem!important;">
                                <p class="first_text" style="margin-bottom:0;">Election 2022</p>
                                <p style="margin-bottom:0;"><i class="fa fad fa-calendar-alt"></i>12/04/2022</p>
                                <p style="margin-bottom:0;color: #19AA86;">Completed</p>
                            </div>
                        </div>
                    </div>

                    <div class="common_div_style d-flex election_fourth_div">
                        <div class="d-flex     align-items-center">
                            <img class="vote_img" src="images/Vote.png"
                                style="width: 81px;height:81px;position:relative;left: 20px;">
                            <div class="d-flex flex-column" style="margin-left: 3rem!important;">
                                <p class="first_text" style="margin-bottom:0;">Election 2022</p>
                                <p style="margin-bottom:0;"><i class="fa fad fa-calendar-alt"></i>12/04/2022</p>
                                <p style="margin-bottom:0;color: #19AA86;">Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid creat_election_div d-none" style="margin-top: 40px;">


                <div class="heading_create_new_election">
                    <h2>Create new Election</h2>
                </div>
                <div class="form_div_election">
                    <div class="form_div w-100">
                        <form>
                            <div class="form-group">
                                <label for="name_of_election">Name of election</label>
                                <input type="text" class="form-control" id="name_of_election" name="name_of_election" placeholder="Enter Election Name">
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-3">
                                    <label for="start_date" >Start Date</label>
                                    <input type="text" class="form-control" id="start_date" name="start_date">

                                </div>
                                <div class="form-group col-3">
                                    <label for="start_time" >Start Time</label>
                                    <input type="time" class="form-control" id="start_time" name="start_time">

                                </div>
                                <div class="form-group col-3">
                                    <label for="end_date" >End Date</label>
                                    <input type="text" class="form-control" id="end_date" name="end_date">

                                </div>
                                <div class="form-group col-3">
                                    <label for="end_time" >End Time</label>
                                    <input type="time" class="form-control" id="end_time" name="end_time">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="inputState">Positions</label>
                                    <select id="inputState" class="form-control">
                                        <option selected="">Select</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn  float-right comon_color_btn">Create Election<i
                                    class="ml-2 fa fa-arrow-right" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection('content')

@section('javascript')
<script>
     $(document).ready(function () {
            $('.create_election').click(() => {
                $.LoadingOverlay("show");
                $('.create_tab_div').addClass('d-none');
                setTimeout(function () {
                    $.LoadingOverlay("hide");
                    $('.creat_election_div').removeClass('d-none');
                }, 2000);
                // $('#end_time').timepicker({
                //     timeFormat: 'h:mm p',
                //     interval: 60,
                //     minTime: '01',
                //     maxTime: '11:00pm',
                //     defaultTime: '00',
                //     startTime: '01:00',
                //     dynamic: false,
                //     dropdown: true,
                //     scrollbar: true
                // });
                // $('#start_time').timepicker({
                //     timeFormat: 'h:mm p',
                //     interval: 60,
                //     minTime: '01',
                //     maxTime: '11:00pm',
                //     defaultTime: '00',
                //     startTime: '01:00',
                //     dynamic: false,
                //     dropdown: true,
                //     scrollbar: true
                // });
                    $( "#start_date" ).datepicker();
                    $( "#end_date" ).datepicker();
            });


            // Hide it after 3 seconds

        });
</script>
@endsection('javascript')
