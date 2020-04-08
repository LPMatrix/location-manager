@extends('layouts.dash')

@section('content')

<section class="content">
    <div class="page-heading">
        <h1>Add Location</h1>
        <ol class="breadcrumb">
            <li><a href="../../index.html">Home</a></li>
            <li><a href="javascript:void(0);">Add Location</a></li>
            <li class="active">Add Location</li>
        </ol>
    </div>
    @if (session('success'))
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ session('success') }}
      </div>
    @endif
    <div class="page-body clearfix">

        <div class="panel panel-default">
            <div class="panel-heading">
                INPUT
                <small>Different size and width</small>
            </div>
            <div class="panel-body">
                <h3 class="panel-inside-title">Enter Details</h3>
                <form class="form-horizontal" method="post" action="location/create">
                    {{ csrf_field() }}
                    <input type="hidden" name="user" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Atm Id</label>
                            <input type="text" class="form-control" placeholder="10326" name="atm_id" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Longitude</label>
                            <input type="text" class="form-control" placeholder="-86.130570" name="longitude" required/>
                        </div>
                        <div class="col-sm-6">
                            <label>Latitude</label>
                            <input type="text" class="form-control" placeholder="39.847330" name="latitude" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="52nd & Keystone - Citgo" name="title" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Atm Type</label>
                            <input type="text" class="form-control" placeholder="Atm Type" name="atm_type" required/>
                        </div>
                        <div class="col-sm-6">
                            <label>Kiosk Id</label>
                            <input type="text" class="form-control" placeholder="Kiosk Id" name="kiosk_id" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Citgo Gas Station" name="name" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Country</label>
                            <input type="text" class="form-control" placeholder="USA" name="country" required/>
                        </div>
                        <div class="col-sm-6">
                            <label>Region</label>
                            <input type="text" class="form-control" placeholder="Indiana" name="region" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>State</label>
                            <input type="text" class="form-control" placeholder="Indiana" name="state" required/>
                        </div>
                        <div class="col-sm-6">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="indianapolis" name="city" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Street</label>
                            <input type="text" class="form-control" placeholder="1731 E 52nd St" name="street" required/>
                        </div>
                        <div class="col-sm-6">
                            <label>Zip Code</label>
                            <input type="text" class="form-control" placeholder="46205" name="zip" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Location Image</label>
                            <input type="text" class="form-control" placeholder="https://i.imgur.com/dhDPq7V.jpg" name="location_image" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Slider Image 1</label>
                            <input type="text" class="form-control" placeholder="https://i.imgur.com/dhDPq7V.jpg" name="slider_image_1" />
                        </div>
                        <div class="col-sm-6">
                            <label>Slider Image 2</label>
                            <input type="text" class="form-control" placeholder="" name="slider_image_2" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Slider Image 3</label>
                            <input type="text" class="form-control" placeholder="" name="slider_image_3" />
                        </div>
                        <div class="col-sm-6">
                            <label>Slider Image 4</label>
                            <input type="text" class="form-control" placeholder="" name="slider_image_4" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>Slider Image 5</label>
                            <input type="text" class="form-control" placeholder="" name="slider_image_5" />
                        </div>
                        <div class="col-sm-6">
                            <label>Slider Image 6</label>
                            <input type="text" class="form-control" placeholder="" name="slider_image_6" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Zoom Level</label>
                            <input type="text" class="form-control" placeholder="12" name="zoom_level" required/>
                        </div>
                    </div>
                    <div class="form-group container">
                        <div class="col-sm-4">
                            <label>Opening Times</label>
                        </div>
                        <div class="col-sm-4">
                            <label>Closing Time</label>
                        </div>
                    </div>
                    <div class="form-group container">
                        <label>Monday</label>
                    <div class="form-group">     
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="monday_opening" required="">
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="monday_closing" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                    <div class="form-group container">
                        <label>Tuesday</label>
                    <div class="form-group">     
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="tuesday_opening" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="tuesday_closing" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                    <div class="form-group container">
                        <label>Wednesday</label>
                    <div class="form-group">     
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="wednesday_opening" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="wednesday_closing" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                    <div class="form-group container">
                        <label>Thursday</label>
                    <div class="form-group">     
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="thursday_opening" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="thursday_closing" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                    <div class="form-group container">
                        <label>Friday</label>
                    <div class="form-group">     
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="friday_opening" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="friday_closing" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                    <div class="form-group container">
                        <label>Saturday</label>
                    <div class="form-group">     
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="saturday_opening" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="saturday_closing" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                    <div class="form-group container">
                        <label>Sunday</label>
                    <div class="form-group">     
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="sunday_opening" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                        <div class="col-sm-4">
                            <select class="form-control selectpicker show-tick" data-live-search="true" name="sunday_closing" required>
                                <option value="--:--" selected="" disabled="" hidden="">Closed</option>
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
                        <button type="submit" name="submit" class="btn btn-sm btn-success ">Submit</button>
                    </div>
                </form>
                <br />
            </div>
        </div>
        </div>
        </section>

@endsection

