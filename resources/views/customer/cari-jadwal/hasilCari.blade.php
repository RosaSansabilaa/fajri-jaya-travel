@extends('layouts.app')

@section('content')
{{-- <div class="card hasilCariPage-card"> --}}
<div>
    <h4> Jadwal Perjalanan </h4>

    <div class="destination-container">
        <p class="destination-text">Mataram <span class="arrow">→</span> Taliwang</p>
        <p class="date-text">Rabu, 01/01/2001</p>
    </div>

    <div class="listJadwal-container">
        <div class="listJadwal-header">
            <div class="listJadwal-item">Asal</div>
            <div class="listJadwal-item">Tujuan</div>
            <div class="listJadwal-item">Jam<br>Keberangkatan</div>
            <div class="listJadwal-item">Harga Tiket</div>
        </div>
    </div>

    <div class="result-section">
        <div class="jadwalItem-container">
            <div class="jadwal-content">
                <div class="listJadwal-item">Mataram</div>
                <div class="listJadwal-item">Taliwang</div>
                <div class="listJadwal-item">07.30 WITA</div>
                <div class="listJadwal-item">Rp. 120.000</div>
            </div>
            <button type="button" class="btn btn-primary showSeats-button">Lihat Kursi</button>
            <div class="showSeats-container">
                <div class="showSeats-content">
                    <p> Pilih kursi yang tersedia </p>
                </div>
            </div>
        </div>
    </div>

    <div class="seatMap-section">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="grid-50">
                        <div id="seat-map">
                            <div class="front-indicator">Bus Seat Reservation</div>
                            <h4 class="text-muted fw-bold text-center" style="padding-left:3em; margin:.5em">From Front Row</h4>
                            <div id="bus-seat-map"></div>
                            <h4 class="text-muted fw-bold text-center" style="padding-left:3em; margin:.5em">End of Seat Row</h4>
                        </div>
                    </div>
                    <div class="grid-50">
                        <div class="booking-details">
    
                            <form action="" method="post">
    
                                <h2>Booking Details</h2>
    
                                <h3> Selected Seats (<span id="counter">0</span>):</h3>
                                <ul id="selected-seats"></ul>
    
                                <h2>Total: <b>$<span id="total">0</span></b></h2>
    
                                <button type="button" id="checkout-button">Submit Book</button>
    
                            </form>
    
                            <div id="legend"></div>
                            <button id="reset-btn" type="button">Reset Bus Seat</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- seat map -->
        {{-- <form id="date_form">
            <fieldset class="animated fadeIn">
                <div id="seats">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-xl-6 col-sm-8 col-md-7">
                            <div id="seat-map" class="seatCharts-container" tabindex="0" aria-activedescendant="3_5">
                                <div class="front-indicator">
                                    <img src="{{ asset('assets/img/driver.png') }}" alt="Driver" height="">
                                </div>
                                <div class="seatCharts-row">
                                    <div class="seatCharts-cell seatCharts-space">1</div>
                                    <div id="1_1" role="checkbox" aria-checked="false" focusable="true" tabindex="-1" class="seatCharts-seat seatCharts-cell economy-class available">1</div>
                                    <div id="1-2" role="checkbox" aria-checked="false" focusable="true" tabindex="-1" class="seatCharts-seat seatCharts-cell economy-class available">2</div>
                                    <div class="seatCharts-cell seatCharts-space"></div>
                                    <div class="seatCharts-cell seatCharts-space"></div>
                                    <div class="seatCharts-cell seatCharts-space"></div>
                                    <div class="seatCharts-cell seatCharts-space"></div>
                                </div>
                                <div class="seatCharts-row">
                                    <div class="seatCharts-cell seatCharts-space">1</div>
                                    <div id="1_1" role="checkbox" aria-checked="false" focusable="false" tabindex="-1" class="seatCharts-seat seatCharts-cell economy-class available">1</div>
                                    <div id="1-2" role="checkbox" aria-checked="false" focusable="true" tabindex="-1" class="seatCharts-seat seatCharts-cell economy-class available">2</div>
                                    <div id="1_1" role="checkbox" aria-checked="false" focusable="true" tabindex="-1" class="seatCharts-seat seatCharts-cell economy-class available">1</div>
                                    <div id="1-2" role="checkbox" aria-checked="false" focusable="true" tabindex="-1" class="seatCharts-seat seatCharts-cell economy-class available">2</div>
                                    <div id="1_1" role="checkbox" aria-checked="false" focusable="true" tabindex="-1" class="seatCharts-seat seatCharts-cell economy-class available">1</div>
                                    <div id="1-2" role="checkbox" aria-checked="false" focusable="true" tabindex="-1" class="seatCharts-seat seatCharts-cell economy-class available">2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-6 col-sm-4 col-md-5">
                            <div class="booking-details">
                                <h2 class="header">Booking Details
                                    <span class="number_plate badge badge-primary fs-12"></span></h2>
                                <h3> Selected Seats <span id="counter">0</span>:</h3>
                                <ul id="selected-seats">
                                </ul>
                                <p>Total: <b><span id="total">0</span> Kes</b></p>
                                <br>
                            </div>
                            <!-- <div id="legend" class=""></div> -->
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center buttons ">
                    <button type="button " class="btn previous_button">Back</button>
                    <button type="button " class="btn next_button btn-booked">Continue</button>
                </div>
            </fieldset>
        </form> --}}
        <!-- END SEAT MAP -->
    </div>
        
</div>

@endsection