@extends('layouts.app')

@section('topscripts')
<script>
  addEventListener("load", function () {
  setTimeout(hideURLbar, 0);
  }, false);A
  function hideURLbar() {
    window.scrollTo(0, 1);
  }
</script>
@endsection

@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('onload')
onload="onLoaderFunc()"
@endsection

@section('content')
<div class="container">
        <div class="w3ls-reg">
            <!-- input fields -->
            <div class="inputForm">
                <h2>fill the required details below and select your seats</h2>
                <div class="mr_agilemain">
                    <div class="agileits-left">
                        <label> Movie Name
                            <span>*</span>
                        </label>
                        <input type="text" id="Username" value="{{$booking->title}}" disabled required>
                    </div>
                    <div class="agileits-left">
                        <label> Schedule 
                            <span>*</span>
                        </label>
                        <input type="text" id="Schedule" value="{{$booking->screening}}" disabled required>
                    </div>
                    <div class="agileits-right">
                        <label> Number of Seats
                            <span>*</span>
                        </label>
                        <input type="number" id="Numseats" required min="1">
                    </div>
                </div>
                <button onclick="takeData()">Start Selecting</button>
            </div>
            <!-- //input fields -->
            <!-- seat availabilty list -->
            <ul class="seat_w3ls">
                <li class="smallBox greenBox">Selected Seat</li>

                <li class="smallBox redBox">Reserved Seat</li>

                <li class="smallBox emptyBox">Empty Seat</li>
            </ul>
            <!-- seat availabilty list -->
            <!-- seat layout -->
            <div class="seatStructure txt-center" style="overflow-x:auto;">
                <table id="seatsBlock">
                    <p id="notification"></p>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td></td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>
                            @if(sizeof($A1) == 0)
                            <input type="checkbox" class="seats" value="A1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($A2) == 0)
                            <input type="checkbox" class="seats" value="A2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($A3) == 0)
                            <input type="checkbox" class="seats" value="A3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($A4) == 0)
                            <input type="checkbox" class="seats" value="A4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($A5) == 0)
                            <input type="checkbox" class="seats" value="A5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($A6) == 0)
                            <input type="checkbox" class="seats" value="A6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($A7) == 0)
                            <input type="checkbox" class="seats" value="A7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($A8) == 0)
                            <input type="checkbox" class="seats" value="A8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($A9) == 0)
                            <input type="checkbox" class="seats" value="A9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($A10) == 0)
                            <input type="checkbox" class="seats" value="A10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($A11) == 0)
                            <input type="checkbox" class="seats" value="A11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($A12) == 0)
                            <input type="checkbox" class="seats" value="A12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>B</td>
                        <td>
                            @if(sizeof($B1) == 0)
                            <input type="checkbox" class="seats" value="B1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($B2) == 0)
                            <input type="checkbox" class="seats" value="B2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($B3) == 0)
                            <input type="checkbox" class="seats" value="B3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($B4) == 0)
                            <input type="checkbox" class="seats" value="B4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($B5) == 0)
                            <input type="checkbox" class="seats" value="B5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($B6) == 0)
                            <input type="checkbox" class="seats" value="B6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($B7) == 0)
                            <input type="checkbox" class="seats" value="B7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($B8) == 0)
                            <input type="checkbox" class="seats" value="B8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($B9) == 0)
                            <input type="checkbox" class="seats" value="B9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($B10) == 0)
                            <input type="checkbox" class="seats" value="B10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($B11) == 0)
                            <input type="checkbox" class="seats" value="B11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($B12) == 0)
                            <input type="checkbox" class="seats" value="B12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>C</td>
                        <td>
                            @if(sizeof($C1) == 0)
                            <input type="checkbox" class="seats" value="C1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($C2) == 0)
                            <input type="checkbox" class="seats" value="C2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($C3) == 0)
                            <input type="checkbox" class="seats" value="C3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($C4) == 0)
                            <input type="checkbox" class="seats" value="C4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($C5) == 0)
                            <input type="checkbox" class="seats" value="C5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($C6) == 0)
                            <input type="checkbox" class="seats" value="C6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($C7) == 0)
                            <input type="checkbox" class="seats" value="C7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($C8) == 0)
                            <input type="checkbox" class="seats" value="C8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($C9) == 0)
                            <input type="checkbox" class="seats" value="C9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($C10) == 0)
                            <input type="checkbox" class="seats" value="C10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($C11) == 0)
                            <input type="checkbox" class="seats" value="C11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($C12) == 0)
                            <input type="checkbox" class="seats" value="C12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>D</td>
                        <td>
                            @if(sizeof($D1) == 0)
                            <input type="checkbox" class="seats" value="D1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($D2) == 0)
                            <input type="checkbox" class="seats" value="D2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($D3) == 0)
                            <input type="checkbox" class="seats" value="D3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($D4) == 0)
                            <input type="checkbox" class="seats" value="D4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($D5) == 0)
                            <input type="checkbox" class="seats" value="D5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($D6) == 0)
                            <input type="checkbox" class="seats" value="D6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($D7) == 0)
                            <input type="checkbox" class="seats" value="D7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($D8) == 0)
                            <input type="checkbox" class="seats" value="D8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($D9) == 0)
                            <input type="checkbox" class="seats" value="D9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($D10) == 0)
                            <input type="checkbox" class="seats" value="D10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($D11) == 0)
                            <input type="checkbox" class="seats" value="D11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($D12) == 0)
                            <input type="checkbox" class="seats" value="D12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>E</td>
                        <td>
                            @if(sizeof($E1) == 0)
                            <input type="checkbox" class="seats" value="E1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($E2) == 0)
                            <input type="checkbox" class="seats" value="E2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($E3) == 0)
                            <input type="checkbox" class="seats" value="E3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($E4) == 0)
                            <input type="checkbox" class="seats" value="E4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($E5) == 0)
                            <input type="checkbox" class="seats" value="E5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($E6) == 0)
                            <input type="checkbox" class="seats" value="E6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($E7) == 0)
                            <input type="checkbox" class="seats" value="E7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($E8) == 0)
                            <input type="checkbox" class="seats" value="E8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($E9) == 0)
                            <input type="checkbox" class="seats" value="E9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($E10) == 0)
                            <input type="checkbox" class="seats" value="E10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($E11) == 0)
                            <input type="checkbox" class="seats" value="E11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($E12) == 0)
                            <input type="checkbox" class="seats" value="E12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>

                    <tr class="seatVGap"></tr>

                    <tr>
                        <td>F</td>
                        <td>
                            @if(sizeof($F1) == 0)
                            <input type="checkbox" class="seats" value="F1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($F2) == 0)
                            <input type="checkbox" class="seats" value="F2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($F3) == 0)
                            <input type="checkbox" class="seats" value="F3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($F4) == 0)
                            <input type="checkbox" class="seats" value="F4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($F5) == 0)
                            <input type="checkbox" class="seats" value="F5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($F6) == 0)
                            <input type="checkbox" class="seats" value="F6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($F7) == 0)
                            <input type="checkbox" class="seats" value="F7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($F8) == 0)
                            <input type="checkbox" class="seats" value="F8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($F9) == 0)
                            <input type="checkbox" class="seats" value="F9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($F10) == 0)
                            <input type="checkbox" class="seats" value="F10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($F11) == 0)
                            <input type="checkbox" class="seats" value="F11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($F12) == 0)
                            <input type="checkbox" class="seats" value="F12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>G</td>
                        <td>
                            @if(sizeof($G1) == 0)
                            <input type="checkbox" class="seats" value="G1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($G2) == 0)
                            <input type="checkbox" class="seats" value="G2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($G3) == 0)
                            <input type="checkbox" class="seats" value="G3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($G4) == 0)
                            <input type="checkbox" class="seats" value="G4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($G5) == 0)
                            <input type="checkbox" class="seats" value="G5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($G6) == 0)
                            <input type="checkbox" class="seats" value="G6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($G7) == 0)
                            <input type="checkbox" class="seats" value="G7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($G8) == 0)
                            <input type="checkbox" class="seats" value="G8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($G9) == 0)
                            <input type="checkbox" class="seats" value="G9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($G10) == 0)
                            <input type="checkbox" class="seats" value="G10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($G11) == 0)
                            <input type="checkbox" class="seats" value="G11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($G12) == 0)
                            <input type="checkbox" class="seats" value="G12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>H</td>
                        <td>
                            @if(sizeof($H1) == 0)
                            <input type="checkbox" class="seats" value="H1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($H2) == 0)
                            <input type="checkbox" class="seats" value="H2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($H3) == 0)
                            <input type="checkbox" class="seats" value="H3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($H4) == 0)
                            <input type="checkbox" class="seats" value="H4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($H5) == 0)
                            <input type="checkbox" class="seats" value="H5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($H6) == 0)
                            <input type="checkbox" class="seats" value="H6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($H7) == 0)
                            <input type="checkbox" class="seats" value="H7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($H8) == 0)
                            <input type="checkbox" class="seats" value="H8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($H9) == 0)
                            <input type="checkbox" class="seats" value="H9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($H10) == 0)
                            <input type="checkbox" class="seats" value="H10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($H11) == 0)
                            <input type="checkbox" class="seats" value="H11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($H12) == 0)
                            <input type="checkbox" class="seats" value="H12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>I</td>
                        <td>
                            @if(sizeof($I1) == 0)
                            <input type="checkbox" class="seats" value="I1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($I2) == 0)
                            <input type="checkbox" class="seats" value="I2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($I3) == 0)
                            <input type="checkbox" class="seats" value="I3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($I4) == 0)
                            <input type="checkbox" class="seats" value="I4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($I5) == 0)
                            <input type="checkbox" class="seats" value="I5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($I6) == 0)
                            <input type="checkbox" class="seats" value="I6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($I7) == 0)
                            <input type="checkbox" class="seats" value="I7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($I8) == 0)
                            <input type="checkbox" class="seats" value="I8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($I9) == 0)
                            <input type="checkbox" class="seats" value="I9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($I10) == 0)
                            <input type="checkbox" class="seats" value="I10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($I11) == 0)
                            <input type="checkbox" class="seats" value="I11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($I12) == 0)
                            <input type="checkbox" class="seats" value="I12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>J</td>
                        <td>
                            @if(sizeof($J1) == 0)
                            <input type="checkbox" class="seats" value="J1">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($J2) == 0)
                            <input type="checkbox" class="seats" value="J2">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($J3) == 0)
                            <input type="checkbox" class="seats" value="J3">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($J4) == 0)
                            <input type="checkbox" class="seats" value="J4">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($J5) == 0)
                            <input type="checkbox" class="seats" value="J5">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td></td>
                        <td>
                            @if(sizeof($J6) == 0)
                            <input type="checkbox" class="seats" value="J6">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($J7) == 0)
                            <input type="checkbox" class="seats" value="J7">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($J8) == 0)
                            <input type="checkbox" class="seats" value="J8">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($J9) == 0)
                            <input type="checkbox" class="seats" value="J9">
                            @else
                            <li class="seats reserved">
                            @endif 
                        </td>
                        <td>
                            @if(sizeof($J10) == 0)
                            <input type="checkbox" class="seats" value="J10">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($J11) == 0)
                            <input type="checkbox" class="seats" value="J11">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                        <td>
                            @if(sizeof($J12) == 0)
                            <input type="checkbox" class="seats" value="J12">
                            @else
                            <li class="seats reserved">
                            @endif
                        </td>
                    </tr>
                </table>

                <div class="screen">
                    <h2 class="wthree">Screen this way</h2>
                </div>
                <button onclick="updateTextArea()">Confirm Selection</button>
            </div>
            <!-- //seat layout -->
            <!-- details after booking displayed here -->
            <div class="displayerBoxes txt-center" style="overflow-x:auto;">
                <table class="Displaytable w3ls-table" width="100%">
                    <tr>
                        <th>Title</th>
                        <th>Schedule</th>
                        <th>Seats</th>
                    </tr>
                    <tr>
                        <td>
                            <textarea class="nameDisplay"></textarea>
                        </td>
                        <td>
                            <textarea class="NumberDisplay"></textarea>
                        </td>
                        <td>
                            <textarea class="seatsDisplay"></textarea>
                        </td>
                    </tr>
                </table>
                <br>
            </div>
            <!-- //details after booking displayed here -->
            <form action="submit" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input class="form-control" type="hidden" name="id" id="id" value="{{$booking->id}}">
                    <input class="form-control" type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                    <input class="form-control seatsDisplay" type="hidden" name="seats" id="seats">
                    <input class="form-control" type="hidden" name="time" id="time" value="{{$booking->screening}}"> 
                    <input class="form-control nameDisplay" type="hidden" name="title" id="title">
                    <input class="form-control" type="hidden" name="studio" id="studio" value="{{$booking->studio}}">
                    <div class="form-group float-right">
                        <button class="btn-lg btn-primary" style="margin-top: 80%; margin-left:20%;" type="submit">Buy</button>
                    </div>
                </form>
        </div>
</div>
@endsection

@section('footer')
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; T-Rex Team 2020</p>
    </div>
    <!-- /.container -->
</footer>
@endsection

@section('scripts')
<script>
        function onLoaderFunc() {
            $(".seatStructure *").prop("disabled", true);
            $(".displayerBoxes *").prop("disabled", true);
        }

        function takeData() {
            if (($("#Username").val().length == 0) || ($("#Numseats").val().length == 0)) {
                alert("Please Enter your Name and Number of Seats");
            } else {
                $(".inputForm *").prop("disabled", true);
                $(".seatStructure *").prop("disabled", false);
                document.getElementById("notification").innerHTML =
                    "<b style='margin-bottom:0px;background:#ff9800;letter-spacing:1px;'>Please Select your Seats NOW!</b>";
            }
        }


        function updateTextArea() {

            if ($("input:checked").length == ($("#Numseats").val())) {
                $(".seatStructure *").prop("disabled", true);

                var allNameVals = [];
                var allNumberVals = [];
                var allSeatsVals = [];

                //Storing in Array
                allNameVals.push($("#Username").val());
                allNumberVals.push($("#Numseats").val());
                $('#seatsBlock :checked').each(function () {
                    allSeatsVals.push($(this).val());
                });

                //Displaying 
                $('.nameDisplay').val(allNameVals);
                $('.NumberDisplay').val(allNumberVals);
                $('.seatsDisplay').val(allSeatsVals);
            } else {
                alert("Please select " + ($("#Numseats").val()) + " seats")
            }
        }


        function myFunction() {
            alert($("input:checked").length);
        }

        /*
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        */


        $(":checkbox").click(function () {
            if ($("input:checked").length == ($("#Numseats").val())) {
                $(":checkbox").prop('disabled', true);
                $(':checked').prop('disabled', false);
            } else {
                $(":checkbox").prop('disabled', false);
            }
        });
</script>
@endsection