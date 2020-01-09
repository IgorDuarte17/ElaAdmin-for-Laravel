@extends('layouts.app')

@section('title', $title)

@section('infos')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Charts</a></li>
                                <li class="active">Gmap</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Basic Map</h4>
                    </div>
                    <div class="gmap_unix card-body">
                        <div class="map" id="basic-map"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Fusion Tables layers</h4>
                    </div>
                    <div class="card-body">
                        <div id="map-2" class="map"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Geometry overlays</h4>
                    </div>
                    <div class="card-body">
                        <div class="map" id="map-3"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Elevation locations</h4>
                    </div>
                    <div class="card-body">
                        <div id="map-4" class="map"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Geolocation</h4>
                    </div>
                    <div class="card-body">
                        <div class="map" id="map-5"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>KML layers</h4>
                    </div>
                    <div class="card-body">
                        <div id="map-6" class="map"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Layers</h4>
                    </div>
                    <div class="card-body">
                        <div class="map" id="map-7"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Map events</h4>
                    </div>
                    <div class="card-body">
                        <div class="map" id="map-8"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->




    </div>
@stop
