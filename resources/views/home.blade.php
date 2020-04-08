@extends('layouts.dash')

@section('content')
	<section class="content">
    <div class="page-heading">
        <h1>DASHBOARD</h1>
        <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li class="active">Home</li>
        </ol>
    </div>
     @if (session('success'))
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ session('success') }}
      </div>
     @elseif (session('error'))
     <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ session('error') }}
      </div>
    @endif
    <div class="page-body">
    	<div class="row">
        <div class="panel panel-default col-sm-6">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
            	<div class="panel panel-primary col-sm-6">
				  <div class="panel-body text-center">
				  	<h2>{{ $number }}</h2>
				    <p>Locations added</p>
				  </div>
				</div>
            </div>
        </div>

        <div class="panel panel-default col-sm-6">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
            	<form>
				  <div class="form-group">
				    <label for="formGroupExampleInput">Name</label>
				    <input type="text" class="form-control" id="formGroupExampleInput" value="{{ Auth::user()->name }}" disabled="">
				  </div>
				  <div class="form-group">
				    <label for="formGroupExampleInput2">Email</label>
				    <input type="email" class="form-control" id="formGroupExampleInput2" value="{{ Auth::user()->email }}" disabled="">
				  </div>
				  <div class="form-group">
				  	<button type="button" class="btn btn-primary btn-fw" data-toggle="modal" data-target="#editModal{{ Auth::user()->id }}">
                                <i class="mdi mdi-plus-outline"></i>Edit</button>
				  </div>
				</form>

				<h3>Change Password</h3>

				<form method="post" action="/password/{{ Auth::user()->id }}">
					{{ csrf_field() }}
                    {{ method_field('PATCH') }}
				  <div class="form-group">
				    <label for="formGroupExampleInput">Old Password</label>
				    <input type="password" class="form-control" id="formGroupExampleInput" name="password" >
				  </div>
				  <div class="form-group">
				    <label for="formGroupExampleInput2">New Password</label>
				    <input type="password" class="form-control" id="formGroupExampleInput2" name="new_password">
				  </div>
				  <div class="form-group">
				  	<button type="submit" class="btn btn-primary btn-fw">
                                <i class="mdi mdi-plus-outline"></i>Save Changes</button>
				  </div>
				</form>

            </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="editModal{{ Auth::user()->id }}">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Edit Profile</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="/profile/{{ Auth::user()->id }}" method="post">
		        	{{ csrf_field() }}
                    {{ method_field('PATCH') }}
				  <div class="form-group">
				    <label for="formGroupExampleInput">Name</label>
				    <input type="text" class="form-control" id="formGroupExampleInput" value="{{ Auth::user()->name }}" name="name">
				  </div>
				  <div class="form-group">
				    <label for="formGroupExampleInput2">Email</label>
				    <input type="email" class="form-control" id="formGroupExampleInput2" value="{{ Auth::user()->email }}" name="email">
				  </div>
				  <div class="form-group">
				  	<div class="modal-footer">
				        <button type="submit" class="btn btn-primary">Save changes</button>
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				     </div>
				  </div>
				</form>
		      </div>
		    </div>
		  </div>
		</div>

        </div>
    </div>
</section>
@endsection
