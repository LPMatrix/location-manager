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
                        </tr>
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
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection

