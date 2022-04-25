@extends('layouts.main')

@section('content')

<!-- Main Content Here -->
<div class="main_content">
        <div class="breadCrumbs">
        <p class="breadCrumbs_heading">Home</p>
        </div>
        <div class="form_div_home">
          <h3>Select Detailed</h3>

            <div class="form_div w-100">
              <form>
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="inputState" class="font-weight-bold">Position</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="inputState" class="font-weight-bold">State</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="inputState" class="font-weight-bold">City</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label for="inputState" class="font-weight-bold">Parroquias</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="inputState" class="font-weight-bold">Zone</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="inputState" class="font-weight-bold">Table</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn  float-right comon_color_btn">Next<i class="ml-2 fa fa-arrow-right" aria-hidden="true"></i></button>
              </form>
          </div>
        </div>


      </div>

    </div>

@endsection('content')

@section('javascript')

@endsection('javascript')
