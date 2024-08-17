<div class="event">
    <div class="row">
        <div class="col col_event">
            <h3 class="lebel_event">Event Summary</h3>
            <p class="deskrip_event">We give you a brief overview of the event to give you a glimpse of what we're doing
                in the Green Haven Project, download the detailed PDF to see how you can get involved</p>
        </div>
        <div class="col col_event">
            <div class="event_body">
                <h6 class="hari">26/04/2024</h6>
                <h5 class="waktu">08:00 - 11:00 WIB</h5>
                <p class="ket_event">Join the impactful journey of planting mangroves, <br>where you'll learn,
                    collaborate
                    with locals, earn recognition, <br>and share your story through media coverage</p>
                <hr>
                <a href="" class="btn_event">
                    <img src="{{ asset('assets/img/iconevent.png') }}" alt="image" class="iconEvent">
                    <p class="p_btn">View Event Details</p>
                </a>
            </div>
            <img src="{{ asset('assets/img/img5.png') }}" alt="image" class="imgEvent">
        </div>
        <div class="col col_event">
            @foreach ($events as $item)
                <div class="rule_event">
                    <h5 class="no">0{{ $item['no']}}</h5>
                    <p class="ket_rule">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, commodi!</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
