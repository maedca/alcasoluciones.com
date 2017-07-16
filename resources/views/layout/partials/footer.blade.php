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
                    <a href="#"><i class="icon-marcador"></i></a>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col l4 m4 s12">
                <br><br><br>
                <h6>Desarrollado por</h6>
            </div>
        </div>

    </div>
</footer>

<script type="text/javascript">
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $('.slider').slider();
        $('.parallax').parallax();
    })
</script>
<script type="text/javascript">

    function initMap() {
        var myLatLng = {lat: 7.3951475, lng:  -73.4945765};
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 7.3951475, lng: -73.4945765},
            zoom: 18,
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

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKdAE_6Hg7zPktnlR9QhJius2i7lBqFWU&callback=initMap">
</script>