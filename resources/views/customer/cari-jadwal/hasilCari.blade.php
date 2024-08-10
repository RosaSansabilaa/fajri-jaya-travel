@extends('layouts.app')

@section('content')
<div class="card hasilCariPage-card">
{{-- <div> --}}
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

@push('scripts')
<script>
    var firstSeatLabel = 1;
    var booked = !!localStorage.getItem('booked') ? $.parseJSON(localStorage.getItem('booked')) : [];
    $(document).ready(function() {
    var $cart = $('#selected-seats'),
        $counter = $('#counter'),
        $total = $('#total'),
        sc = $('#bus-seat-map').seatCharts({
            map: [
                'ff_ff',
                'ff_ff',
                'ee_ee',
                'ee_ee',
                'ee___',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'eeeee',
            ],
            seats: {
                f: {
                    price: 75,
                    classes: 'first-class', //your custom CSS class
                    category: 'First Class'
                },
                e: {
                    price: 50,
                    classes: 'economy-class', //your custom CSS class
                    category: 'Economy Class'
                }

            },
            naming: {
                top: false,
                getLabel: function(character, row, column) {
                    return firstSeatLabel++;
                },
            },
            legend: {
                node: $('#legend'),
                items: [
                    ['f', 'available', 'First Class'],
                    ['e', 'available', 'Economy Class'],
                    ['f', 'unavailable', 'Already Booked']
                ]
            },
            click: function() {
                if (this.status() == 'available') {
                    //let's create a new <li> which we'll add to the cart items
                    $('<li>' + this.data().category + ' Seat # ' + this.settings.label + ': <b>$' + this.data().price + '</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
                        .attr('id', 'cart-item-' + this.settings.id)
                        .data('seatId', this.settings.id)
                        .appendTo($cart);

                    /*
                     * Lets update the counter and total
                     *
                     * .find function will not find the current seat, because it will change its stauts only after return
                     * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                     */
                    $counter.text(sc.find('selected').length + 1);
                    $total.text(recalculateTotal(sc) + this.data().price);

                    return 'selected';

                } else if (this.status() == 'selected') {

                    //update the counter
                    $counter.text(sc.find('selected').length - 1);

                    //and total
                    $total.text(recalculateTotal(sc) - this.data().price);

                    //remove the item from our cart
                    $('#cart-item-' + this.settings.id).remove();

                    //seat has been vacated
                    return 'available';

                } else if (this.status() == 'unavailable') {
                    //seat has been already booked
                    return 'unavailable';
                } else {
                    return this.style();
                }
            }
        });

    //this will handle "[cancel]" link clicks
    $('#selected-seats').on('click', '.cancel-cart-item', function() {
        //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
        sc.get($(this).parents('li:first').data('seatId')).click();
    });

    //let's pretend some seats have already been booked
    // sc.get(['1_2', '4_1', '7_1', '7_2']).status('unavailable');
    sc.get(booked).status('unavailable');

});

function recalculateTotal(sc) {
    var total = 0;

    //basically find every selected seat and sum its price
    sc.find('selected').each(function() {

        total += this.data().price;

    });

    return total;
}

$(function() {
    $('#checkout-button').click(function() {
        var items = $('#selected-seats li')
        if (items.length <= 0) {
            alert("Please select atleast 1 seat first.")
            return false;
        }
        var selected = [];
        items.each(function(e) {
            var id = $(this).attr('id')
            id = id.replace("cart-item-", "")
            selected.push(id)
        })
        if (Object.keys(booked).length > 0) {
            Object.keys(booked).map(k => {
                selected.push(booked[k])
            })
        }
        localStorage.setItem('booked', JSON.stringify(selected))
        alert("Seats has been Reserved successfully.")
        location.reload()
    })
    $('#reset-btn').click(function() {
        if (confirm("are you sure to reset the reservation of the bus?") === true) {
            localStorage.removeItem('booked')
            alert("Seats has been Reset successfully.")
            location.reload()
        }
    })
})
</script>
    
@endpush