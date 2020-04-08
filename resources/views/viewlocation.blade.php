@extends('layouts.dash')

@section('content')

<section class="content">
    <div class="page-heading">
        <h1>LOCATIONS</h1>
        <ol class="breadcrumb">
            <li><a href="../../index.html">Home</a></li>
            <li><a href="javascript:void(0);">Locations</a></li>
            <li class="active">View Location</li>
        </ol>
    </div>
     @if (session('success'))
      <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ session('success') }}
      </div>
    @endif
    <div class="page-body">

        <div class="panel panel-default">
            <div class="panel-heading">Locations</div>
            <div class="panel-body">
                <table class="table table-striped table-hover js-exportable dataTable">
                    <thead>
                        <tr>
                            <th>Atm id</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>State</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($locations as $location)
                        <tr>
                            <td>{{ $location->atm_id }}</td>
                            <td>{{ $location->longitude }}</td>
                            <td>{{ $location->latitude }}</td>
                            <td>{{ $location->title }}</td>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->state }}</td>
                            <td> <button type="button" class="btn btn-primary btn-fw" data-toggle="modal" data-target="#editModal{{ $location->id }}">
                                <i class="mdi mdi-plus-outline"></i>Edit</button>
                                <a  href="location/{{$location->id}}/delete" type="button" class="btn btn-danger btn-fw">
                                <i class="mdi mdi-delete-outline"></i>Delete</a> 
                            </td>
                        </tr>

                        <div class="modal fade" id="editModal{{ $location->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Location Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" method="post" action="location/{{$location->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="text" name="user" hidden="" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Atm Id</label>
                            <input type="text" class="form-control"  name="atm_id" value="{{ $location->atm_id }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Longitude</label>
                            <input type="text" class="form-control"  name="longitude" value="{{ $location->longitude }}"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Latitude</label>
                            <input type="text" class="form-control"  name="latitude"  value="{{ $location->latitude }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Title</label>
                            <input type="text" class="form-control"  name="title" value="{{ $location->title }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Atm Type</label>
                            <input type="text" class="form-control"  name="atm_type" value="{{ $location->atm_type }}"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Kiosk Id</label>
                            <input type="text" class="form-control"  name="kiosk_id"  value="{{ $location->kiosk_id }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Name</label>
                            <input type="text" class="form-control"  name="name" value="{{ $location->name }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Country</label>
                            <input type="text" class="form-control"  name="country" value="{{ $location->country }}"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Region</label>
                            <input type="text" class="form-control"  name="region"  value="{{ $location->region }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>State</label>
                            <input type="text" class="form-control"  name="state" value="{{ $location->state }}"/>
                        </div>
                        <div class="col-sm-6">
                            <label>City</label>
                            <input type="text" class="form-control"  name="city"  value="{{ $location->city }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Street</label>
                            <input type="text" class="form-control" placeholder="1731 E 52nd St" name="street" value="{{ $location->street }}"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Zip Code</label>
                            <input type="text" class="form-control" placeholder="46205" name="zip"  value="{{ $location->zip }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Location Image</label>
                            <input type="text" class="form-control"  name="location_image" value="{{ $location->location_image }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Slider Image 1</label>
                            <input type="text" class="form-control"  name="slider_image_1" value="{{ $location->slider_image_1 }}"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Slider Image 2</label>
                            <input type="text" class="form-control"  name="slider_image_2" value="{{ $location->slider_image_2 }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Slider Image 3</label>
                            <input type="text" class="form-control"  name="slider_image_3"  value="{{ $location->slider_image_3 }}"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Slider Image 4</label>
                            <input type="text" class="form-control"  name="slider_image_4"value="{{ $location->slider_image_4 }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Slider Image 5</label>
                            <input type="text" class="form-control"  name="slider_image_5"value="{{ $location->slider_image_5 }}" />
                        </div>
                        <div class="col-sm-6">
                            <label>Slider Image 6</label>
                            <input type="text" class="form-control"  name="slider_image_6" value="{{ $location->slider_image_6 }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Zoom Level</label>
                            <input type="text" class="form-control" placeholder="12" value="{{ $location->zoom_level }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Opening Times</label>
                        </div>
                        <div class="col-sm-6">
                            <label>Closing Time</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Monday</label>
                    <div class="form-group">     
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="monday_opening">
                                <option value="{{ $location->monday_opening }}" selected="" disabled="" hidden="">{{ $location->monday_opening }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="monday_closing">
                                <option value="{{ $location->monday_closing }}" selected="" disabled="" hidden="">{{ $location->monday_closing }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Tuesday</label>
                    <div class="form-group">     
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="tuesday_opening">
                                <option value="{{ $location->tuesday_opening }}" selected="" disabled="" hidden="">{{ $location->tuesday_opening }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="tuesday_closing">
                                <option value="{{ $location->tuesday_closing }}" selected="" disabled="" hidden="">{{ $location->tuesday_closing }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Wednesday</label>
                    <div class="form-group">     
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="wednesday_opening">
                                <option value="{{ $location->wednesday_opening }}" selected="" disabled="" hidden="">{{ $location->wednesday_opening }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="wednesday_closing">
                                <option value="{{ $location->wednesday_closing }}" selected="" disabled="" hidden="">{{ $location->wednesday_closing }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Thursday</label>
                    <div class="form-group">     
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="thursday_opening">
                                <option value="{{ $location->thursday_opening }}" selected="" disabled="" hidden="">{{ $location->thursday_opening }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="thursday_closing">
                                <option value="{{ $location->thursday_closing }}" selected="" disabled="" hidden="">{{ $location->thursday_closing }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Friday</label>
                    <div class="form-group">     
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="friday_opening">
                                <option value="{{ $location->friday_opening }}" selected="" disabled="" hidden="">{{ $location->friday_opening }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="friday_closing">
                                <option value="{{ $location->friday_closing }}" selected="" disabled="" hidden="">{{ $location->friday_closing }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Saturday</label>
                    <div class="form-group">     
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="saturday_opening">
                                <option value="{{ $location->saturday_opening }}" selected="" disabled="" hidden="">{{ $location->saturday_opening }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="saturday_closing">
                                <option value="{{ $location->saturday_closing }}" selected="" disabled="" hidden="">{{ $location->saturday_closing }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Sunday</label>
                    <div class="form-group">     
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="sunday_opening">
                                <option value="{{ $location->sunday_opening }}" selected="" disabled="" hidden="">{{ $location->sunday_opening }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="sunday_closing">
                                <option value="{{ $location->sunday_closing }}" selected="" disabled="" hidden="">{{ $location->sunday_closing }}</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="00:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                <option value="24:00">24:00</option>
                            </select>
                        </div>

                    </div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-sm btn-success ">Submit</button>
                    </div>
                </form>
                    </div>
                  </div>
                </div>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Atm id</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>State</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection

