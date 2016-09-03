<!doctype html>
<html>
    <?php include 'module/initial.php'?>
    <body>
        <!-- Header -->
        <?php include 'module/header.php'?>
        <!-- Carousel -->
        <?php include 'module/slider.php'?>

        <div class="col-md-12" style="height: 600px;">
        <div class="allcontain">
            <div class="contact">
                <div class="newslettercontent">
                    <div class="leftside">
                        <img id="image_border" src="image/border.png" height="400" alt="border">
                            <div class="contact-form">
                                <h1>Contact Us</h1>
                                    <div class="form-group group-coustume">
                                        <input type="text" class="form-control name-form" placeholder="Họ tên">
                                        <input type="text" class="form-control email-form" placeholder="E-mail">
                                        <input type="text" class="form-control subject-form" placeholder="Chủ đề">
                                        <textarea rows="4" cols="50" class="message-form"></textarea>
                                        <button type="submit" class="btn btn-default btn-submit">Gửi</button>
                                    </div>
                            </div>
                    </div>
                    <div class="google-maps">
                        <div id="map" style="width:500px;height:400px;"></div>
                        <script>
                            var map;
                            var pos = {lat: 10.773288, lng: 106.660894};
                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                center: pos,
                                zoom: 16
                            });
                            var marker = new google.maps.Marker({
                                position: pos,
                                map: map,
                                title: 'BK Media Office'
                              });
                          }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB14XIwNsoGn2wIwUPk9n9nk5e23mq0OVM&callback=initMap"
                        async defer></script>
                        <!--<div id="googleMap" ></div>
                        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB14XIwNsoGn2wIwUPk9n9nk5e23mq0OVM"></script>
                        <script>
                        function initialize() {
                          var mapProp = {
                            center:new google.maps.LatLng(10.773288, 106.660894),
                            zoom: 20,
                            mapTypeId:google.maps.MapTypeId.ROADMAP
                          };
                          var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                        </script>-->
                    </div>

                </div>
            </div>
        </div>
        </div>
        <?php include 'module/footer.php'?>
        <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
        <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
    </body>
</html>
