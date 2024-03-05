<!--HEADER SECTION-->
<style type="text/css">
    .tourz-search-form div:nth-child(2){width: 82% !important}
</style>
<section>
    <div class="tourz-search">
        <div class="container">
            <div class="row">
                <div class="tourz-search-1">
                    <h1>Plan Your Travel Now!</h1>
                    <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events</p>
                    <form class="tourz-search-form" action="{{ url('country') }}">
                        <div class="input-field">
                        </div>
                        <div class="input-field">
                            <input name="country" type="text" id="select-search" class="autocomplete">
                            <label for="select-search" class="search-hotel-type">Search any Country</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                    </form>
                    <div class="tourz-hom-ser">
                        <ul>
                            <li>
                                <a href="{{ url('destination') }}" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="0.5s"><img src="{{ asset('frontend/images/icon/2.png') }}" alt=""> Visa</a>
                            </li>
                            <li>
                                <a href="{{ url('destination') }}" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1s"><img src="{{ asset('frontend/images/icon/31.png') }}" alt=""> Tour</a>
                            </li>
                            <li>
                                <a href=" https://travel.golbeno.ee/" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="1.5s"><img src="{{ asset('frontend/images/icon/31.png') }}" alt=""> Flight</a>
                            </li>
                            <li>
                                <a href="{{ url('destination') }}" class="waves-effect waves-light btn-large tourz-pop-ser-btn wow fadeInUp" data-wow-duration="2s"><img src="{{ asset('frontend/images/icon/1.png') }}" alt=""> Hotel</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HEADER SECTION-->


@section('js')
<script type="text/javascript">
   $(document).ready(function() {
    "use strict";   
    //MEGA MENU 
   
    $('#select-search,#select-search-1,#select-search-2.autocomplete').autocomplete({
        data: {
            @foreach ($countries as $country)
            "{{ $country->name }}": '',
             @endforeach
            
        },
        limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
        onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
        },
        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
    });
    

});

</script>
@endsection
