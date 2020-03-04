<?php wp_footer(); ?>

<!-- Footer -->
<footer class="page-footer font-small fixed-bottom w-100 white">
    <div class="container box-center container-box">
        <!-- Copyright -->
        <div class=" text-left py-3">
            <p style="color:#8f734e ;" class="mb-0"><small> © 2020 | All rights reserved</small></p>
        </div>
        <!-- Copyright -->
    </div>
</footer>
<!-- Footer -->

<script>
    $(document).ready(function() {
        $('.mdb-select').materialSelect();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: '2018-11-16',
            navLinks: true,
            eventLimit: true,
            events: [{
                title: 'Front-End Conference',
                start: '2018-11-16',
                end: '2018-11-18'
            },
                {
                    title: 'Hair stylist with Mike',
                    start: '2018-11-20',
                    allDay: true
                },
                {
                    title: 'Car mechanic',
                    start: '2018-11-14T09:00:00',
                    end: '2018-11-14T11:00:00'
                },
                {
                    title: 'Dinner with Mike',
                    start: '2018-11-21T19:00:00',
                    end: '2018-11-21T22:00:00'
                },
                {
                    title: 'Chillout',
                    start: '2018-11-15',
                    allDay: true
                },
                {
                    title: 'Vacation',
                    start: '2018-11-23',
                    end: '2018-11-29'
                },
            ]
        });
    });
</script>

</body>