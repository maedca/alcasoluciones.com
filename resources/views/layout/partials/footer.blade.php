
<footer class="page-footer">
    <div class="container">
        <div class="row" style="margin-bottom: 0;">
            <div class="col s12 m6 l6 offset-l3 offset-m3 center">
                <h5>Conoce más de nosotros en...</h5>
                <br>
            </div>
            <div class="col s12 m12 l12 offset-l1 offset-m1 center">
                <div class="col l2 m2 s2 ">
                    <a href="#"><i class="icon-whatsapp"></i></a>
                </div>
                <div class="col l2 m2 s2">
                    <a href="#"><i class="icon-facebook"></i></a>
                </div>
                <div class="col l2 m2 s2">
                    <a href="#"><i class="icon-instagram"></i></a>
                </div>
                <div class="col l2 m2 s2">
                    <a href="#"><i class="icon-correo"></i></a>
                </div>
                <div class="col l2 m2 s2">
                    <a href="#"><i style="color: white" class="icon-marcadorfooter"></i></a>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col l4 m4 s12">
                <br><br><br>
                <p>Desarrollado por <img style="width: 45%" src="{{asset('img/logo_footer.svg')}}" alt=""></p>
            </div>
        </div>

    </div>
</footer>

<script type="text/javascript">
    $( document ).ready(function(){

        $(".button-collapse").sideNav();
        $('.slider').slider();
        $('.parallax').parallax();
        $('#modal1').modal();
        $('#example').DataTable({
            columnDefs: [
                {
                    targets: [0, 1, 2],
                    className: 'mdl-data-table__cell--non-numeric'
                }
            ]
        });
        $('nav a').click(function (e) {
            e.preventDefault();		//evitar el eventos del enlace normal
            var strAncla = $(this).attr('href'); //id del ancla
            $('body,html').stop(true, true).animate({
                scrollTop: $(strAncla).offset().top
            }, 1000);

        });
    })
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlA_IaeDVWZ9IgXRVNDh9T23dzg_3znB8&callback=initMap">
</script>
<script type="text/javascript">

    function initMap() {
        var myLatLng = {lat: 7.3949613, lng: -73.4942439};
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 19,
            scrollwheel: false
        });
        var contentString = 'Alca Soluciones';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Alca Soluciones'
        });
        marker.addListener('click', function () {
            infowindow.open(map, marker);
        })
    }


</script>

{{--<script async defer--}}
{{--src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKdAE_6Hg7zPktnlR9QhJius2i7lBqFWU&callback=initMap">--}}
{{--</script>--}}