<section id="contact">
    <div class="section-container">
        <div class="contents">
            <div class="contact-form">
                <div class="section_heading">Contact Us</div>
                <div class="primary_heading"><span class="text-light">Let's connect and</span> Grow your business</div>
                <form method="POST" action="query_mail.php">
                    <div class="input-div">
                        <input type="text" name="name" required="" placeholder="Name">
                    </div>
                    <div class="input-div">
                        <input type="text" name="phone" required="" placeholder="Phone">
                    </div>
                    <div class="input-div">
                    </div>
                    <div class="input-div">
                        <input type="text" name="email" required="" placeholder="Email">
                    </div>
                    <div class="input-div">
                        <textarea required="" rows="6" name="message" placeholder="Message to us"></textarea>
                    </div>
                    <div class="btn-submit">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </form>
            </div>
            <div class="details-card">
                <iframe id="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29445.77322327994!2d88.36704964543608!3d22.70140352277032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89c0bf0119e61%3A0xf3dedf82eaf68307!2sSodepur%2C%20Kolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1713608659607!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- <div id="location"></div> -->
                <div class="address_box">
                    <div class="single-address">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="address">
                            Kolkata Office - Sodepur, Kolkata,
                            <br>
                            West-Bengal - 700110
                            <br>
                            Phone: <a class="text-inherit" href="tel:+91 98754 05470">+91 98754 05470</a>
                        </div>
                    </div>
                    <div class="single-address">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="address">
                            Abu Dhabi Office - Electra Street, colors express building,
                            <br>
                            near life line hospital, Abu Dhabi UAE
                            <br>
                            Phone: <a class="text-inherit" href="tel:+971566447642">+971566447642</a>
                        </div>
                    </div>
                    <!-- <div class="single-address">
                            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="address">
                            SODEPUR Post Office is located at NORTH 24 PARGANAS, WEST BENGAL, 700110. NA Post Office is a Sub Post Office,
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script>
        am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("location");
        
        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
        am5themes_Animated.new(root)
        ]);


        // Create the map chart
        // https://www.amcharts.com/docs/v5/charts/map-chart/
        var chart = root.container.children.push(am5map.MapChart.new(root, {
        panX: "translateX",
        panY: "translateY",
        projection: am5map.geoMercator()
        }));

        var cont = chart.children.push(am5.Container.new(root, {
        layout: root.horizontalLayout,
        x: 20,
        y: 40
        }));


        // Add labels and controls
        cont.children.push(am5.Label.new(root, {
        centerY: am5.p50,
        text: "Map"
        }));

        var switchButton = cont.children.push(am5.Button.new(root, {
        themeTags: ["switch"],
        centerY: am5.p50,
        icon: am5.Circle.new(root, {
            themeTags: ["icon"]
        })
        }));

        switchButton.on("active", function() {
        if (!switchButton.get("active")) {
            chart.set("projection", am5map.geoMercator());
            chart.set("panX", "translateX");
            chart.set("panY", "translateY");
        }
        else {
            chart.set("projection", am5map.geoOrthographic());
            chart.set("panX", "rotateX");
            chart.set("panY", "rotateY");
        }
        });

        cont.children.push(am5.Label.new(root, {
            centerY: am5.p50,
            text: "Globe"
        }));

        // Create main polygon series for countries
        // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
        var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
        geoJSON: am5geodata_worldLow
        }));

        var graticuleSeries = chart.series.push(am5map.GraticuleSeries.new(root, {}));
        graticuleSeries.mapLines.template.setAll({
        stroke: root.interfaceColors.get("alternativeBackground"),
        strokeOpacity: 0.08
        });

        // Create line series for trajectory lines
        // https://www.amcharts.com/docs/v5/charts/map-chart/map-line-series/

        // this will be invisible line (note strokeOpacity = 0) along which invisible points will animate
        var lineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
        lineSeries.mapLines.template.setAll({
        stroke: '#CEFF1A',
        strokeOpacity: 1
        });

        // this will be visible line. Lines will connectg animating points so they will look like animated
        var animatedLineSeries = chart.series.push(am5map.MapLineSeries.new(root, {}));
        animatedLineSeries.mapLines.template.setAll({
        stroke: root.interfaceColors.get("alternativeBackground"),
        strokeOpacity: 1
        });

        // destination series
        var citySeries = chart.series.push(
        am5map.MapPointSeries.new(root, {})
        );

        // visible city circles
        citySeries.bullets.push(function() {
        var circle = am5.Circle.new(root, {
            radius: 8,
            tooltipText: "{title}",
            tooltipY: 0,
            fill: am5.color('#CEFF1A'),
            stroke: root.interfaceColors.get("background"),
            strokeWidth: 2

        });


        return am5.Bullet.new(root, {
            sprite: circle
        });
        });

        // invisible series which will animate along invisible lines
        var animatedBulletSeries = chart.series.push(
        am5map.MapPointSeries.new(root, {})
        );

        animatedBulletSeries.bullets.push(function() {
        var circle = am5.Circle.new(root, {
            radius: 0
        });

        return am5.Bullet.new(root, {
            sprite: circle
        });
        });


        var cities = [
            {
                id: "india",
                title: "Sodepur, Kolkata,West-Bengal - 700110",
                geometry: { type: "Point", coordinates: [88.3832711359736,22.69448139483851] },
            },
            {
                id: "abuDhabi",
                title: "Electra Street, colors express building, near life line hospital, Abu Dhabi UAE",
                geometry: { type: "Point", coordinates: [  54.41380933167093,24.434231441027933] },
            },
        ];

        citySeries.data.setAll(cities);

        // Prepare line series data
        var destinations = ["abuDhabi"];

        // London coordinates
        var originLongitude = 88.3832711359736;
        var originLatitude =22.69448139483851;

        var londonDataItem = citySeries.getDataItemById("india");

        // this will do all the animations
        am5.array.each(destinations, function(did) {
        var destinationDataItem = citySeries.getDataItemById(did);
        var lineDataItem = lineSeries.pushDataItem({});
        lineDataItem.set("pointsToConnect", [londonDataItem, destinationDataItem])

        var startDataItem = animatedBulletSeries.pushDataItem({});
        startDataItem.setAll({
            lineDataItem: lineDataItem,
            positionOnLine: 0
        });

        var endDataItem = animatedBulletSeries.pushDataItem({});
        endDataItem.setAll({
            lineDataItem: lineDataItem,
            positionOnLine: 1
        });

        var animatedLineDataItem = animatedLineSeries.pushDataItem({});
        animatedLineDataItem.set("pointsToConnect", [startDataItem, endDataItem])

        var lon0 = londonDataItem.get("longitude");
        var lat0 = londonDataItem.get("latitude");

        var lon1 = destinationDataItem.get("longitude");
        var lat1 = destinationDataItem.get("latitude");


        var distance = Math.hypot(lon1 - lon0, lat1 - lat0);
        var duration = distance * 25;

        animateStart(startDataItem, endDataItem, duration);
        });

        function animateStart(startDataItem, endDataItem, duration) {

        var startAnimation = startDataItem.animate({
            key: "positionOnLine",
            from: 0,
            to: 1,
            duration: duration
        });

        startAnimation.events.on("stopped", function() {
            animateEnd(startDataItem, endDataItem, duration);
        });
        }

        function animateEnd(startDataItem, endDataItem, duration) {
        startDataItem.set("positionOnLine", 0)
        var endAnimation = endDataItem.animate({
            key: "positionOnLine",
            from: 0,
            to: 1,
            duration: duration
        })

        endAnimation.events.on("stopped", function() {
            animateStart(startDataItem, endDataItem, duration);
        });
        }

        polygonSeries.events.on("datavalidated", function() {
        chart.zoomToGeoPoint({
            longitude:18.526928676564438,
            latitude: 79.98634022875396,
        }, 1.2);
        });


        // Make stuff animate on load
        chart.appear(1000, 100);

        }); // end am5.ready()
    </script> -->