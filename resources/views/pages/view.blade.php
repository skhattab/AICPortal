@extends('layouts.app')

@section('content')
<meta charset="UTF-8">
	{{-- <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================--> --}}
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
            <div class="limiter">
                    <div class="container-table100">
                        <div class="wrap-table100">
                            <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                    <table>
                                        <thead>
                                            <tr class="row100 head">
                                               <th class="cell100 column1">Name</th></a>
                                                <th class="cell100 column2">Program</th>
                                                <th class="cell100 column3">Paid</th>
                                                <th class="cell100 column4">Left</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
            
                                <div class="table100-body js-pscroll">
                                    <table>
                                        <tbody>
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Child 1</td>
                                                <td class="cell100 column2">Sunday School</td>
                                                <td class="cell100 column3">$200</td>
                                                <td class="cell100 column4">$150</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                    <td class="cell100 column1">Child 2</td>
                                                    <td class="cell100 column2">Saturday School</td>
                                                    <td class="cell100 column3">$100</td>
                                                    <td class="cell100 column4">$100</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                    <td class="cell100 column1">Child 3</td>
                                                    <td class="cell100 column2">Young Muslims Brotherood</td>
                                                    <td class="cell100 column3">$0</td>
                                                    <td class="cell100 column4">$0</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                    <td class="cell100 column1">Child 4</td>
                                                    <td class="cell100 column2">Saturday School</td>
                                                    <td class="cell100 column3">$100</td>
                                                    <td class="cell100 column4">$0</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                    <td class="cell100 column1">Child 5</td>
                                                    <td class="cell100 column2">Saturday School</td>
                                                    <td class="cell100 column3">$50</td>
                                                    <td class="cell100 column4">$10</td>
                                            </tr>
            
                                            {{-- <tr class="row100 body">
                                                <td class="cell100 column1">Zumba Dance</td>
                                                <td class="cell100 column2">Dance</td>
                                                <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                                <td class="cell100 column4">Donna Wilson</td>
                                                <td class="cell100 column5">20</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Cardio Blast</td>
                                                <td class="cell100 column2">Gym</td>
                                                <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                                <td class="cell100 column4">Randy Porter</td>
                                                <td class="cell100 column5">10</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Pilates Reformer</td>
                                                <td class="cell100 column2">Gym</td>
                                                <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                                <td class="cell100 column4">Randy Porter</td>
                                                <td class="cell100 column5">10</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Supple Spine and Shoulders</td>
                                                <td class="cell100 column2">Yoga</td>
                                                <td class="cell100 column3">6:30 AM - 8:00 AM</td>
                                                <td class="cell100 column4">Randy Porter</td>
                                                <td class="cell100 column5">15</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Yoga for Divas</td>
                                                <td class="cell100 column2">Yoga</td>
                                                <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                                <td class="cell100 column4">Donna Wilson</td>
                                                <td class="cell100 column5">20</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Virtual Cycle</td>
                                                <td class="cell100 column2">Gym</td>
                                                <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                                <td class="cell100 column4">Randy Porter</td>
                                                <td class="cell100 column5">20</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Like a butterfly</td>
                                                <td class="cell100 column2">Boxing</td>
                                                <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                                <td class="cell100 column4">Aaron Chapman</td>
                                                <td class="cell100 column5">10</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Mind & Body</td>
                                                <td class="cell100 column2">Yoga</td>
                                                <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                                <td class="cell100 column4">Adam Stewart</td>
                                                <td class="cell100 column5">15</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Crit Cardio</td>
                                                <td class="cell100 column2">Gym</td>
                                                <td class="cell100 column3">9:00 AM - 10:00 AM</td>
                                                <td class="cell100 column4">Aaron Chapman</td>
                                                <td class="cell100 column5">10</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Wheel Pose Full Posture</td>
                                                <td class="cell100 column2">Yoga</td>
                                                <td class="cell100 column3">7:00 AM - 8:30 AM</td>
                                                <td class="cell100 column4">Donna Wilson</td>
                                                <td class="cell100 column5">15</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Playful Dancer's Flow</td>
                                                <td class="cell100 column2">Yoga</td>
                                                <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                                <td class="cell100 column4">Donna Wilson</td>
                                                <td class="cell100 column5">10</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Zumba Dance</td>
                                                <td class="cell100 column2">Dance</td>
                                                <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                                <td class="cell100 column4">Donna Wilson</td>
                                                <td class="cell100 column5">20</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Cardio Blast</td>
                                                <td class="cell100 column2">Gym</td>
                                                <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                                <td class="cell100 column4">Randy Porter</td>
                                                <td class="cell100 column5">10</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Pilates Reformer</td>
                                                <td class="cell100 column2">Gym</td>
                                                <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                                <td class="cell100 column4">Randy Porter</td>
                                                <td class="cell100 column5">10</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Supple Spine and Shoulders</td>
                                                <td class="cell100 column2">Yoga</td>
                                                <td class="cell100 column3">6:30 AM - 8:00 AM</td>
                                                <td class="cell100 column4">Randy Porter</td>
                                                <td class="cell100 column5">15</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Yoga for Divas</td>
                                                <td class="cell100 column2">Yoga</td>
                                                <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                                <td class="cell100 column4">Donna Wilson</td>
                                                <td class="cell100 column5">20</td>
                                            </tr>
            
                                            <tr class="row100 body">
                                                <td class="cell100 column1">Virtual Cycle</td>
                                                <td class="cell100 column2">Gym</td>
                                                <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                                <td class="cell100 column4">Randy Porter</td>
                                                <td class="cell100 column5">20</td>
                                            </tr> --}}
                                        {{-- </tbody> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
@endsection