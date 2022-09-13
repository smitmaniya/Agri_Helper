<?php
    require "instrument.php";
?>

<main>
    <?php
       
    ?>
</main>
  
<div>
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-wrap ftco-animate">
                            <div style="border: 2px solid black;">
                                <img class="card-img-top" src="pic/loan.png" alt="Car-1" height=240px>
                            </div>
                            <div class="price-wrap d-flex">
                                <span style="color: black;font-size: 18px;"><b>Loan Remover</b></span>
                            </div>
                            <div class="price-wrap d-flex">
                                <span class="rate" style="size: 30px;" id="plr"><b id="price1"> ₹18,000 </b> <sub
                                        style="color:black;font-size:15px">₹<strike>19,990</strike></sub> </span><span
                                    style="color:gray">&nbsp Save ₹1990(10%) </span>

                            </div>
                            <!--   onclick="window.location.href='Checkout%20Form.html'"  -->
                            <div class="price-wrap d-flex">
                                <pre>     </pre>
                                <button type="button" class="btn" style="background-color:rgb(45, 224, 21);"
                                    onclick="add(1)" id="btn1">Add</button>
                                <button onclick="document.getElementById('loan-remover').style.display='block'"
                                    class="btn btn-outline-success waves-effect" id="btn"
                                    style="margin-left:12px;background-color:rgb(45, 224, 21);color:black;">Details</button>
                                <!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-outline-success waves-effect" id="btn"><b>LOG IN</b></button>-->
                                <pre>      </pre>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <div class="car-wrap ftco-animate">
                            <div style=" border: 2px solid black;">
                                <img class="card-img-top" src="pic/motor.png" alt="Car-2" style="height: 195px;">
                            </div>
                            <div class="price-wrap d-flex">
                                <p style="color: black;font-size: 18px;"><b>Neptune water pump(2 stroke)</b></p>
                            </div>
                            <div class="price-wrap d-flex">

                                <span class="rate" style="size: 30px;"><b id="price2"> ₹ 4,990</b>&nbsp &nbsp<sub
                                        style="color:black;font-size:15px">₹<strike>5,240</strike></sub></span><span
                                    style="color:gray">&nbsp Save ₹2490(5%) </span> </span>

                            </div>

                            <div class="price-wrap d-flex">
                                <pre>     </pre>
                                <button type="button" class="btn" style="background-color:rgb(45, 224, 21);"
                                    onclick="add(2)" id="btn">Add</button>
                                <button class="btn btn-success waves effect"
                                    onclick="document.getElementById('water-pump').style.display='block'"
                                    style="margin-left:12px;color:black;background-color:rgb(45, 224, 21)">Details</button>
                                <!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-outline-success waves-effect" id="btn"><b>LOG IN</b></button>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <div class="car-wrap ftco-animate">
                            <div style=" border: 2px solid black;">
                                <img class="card-img-top" src="pic/pump1.png" alt="Car-3" style="height: 195px;">
                            </div>
                            <div class="price-wrap d-flex">

                                <span style="color: black;font-size: 18px;"><b>Neptune Knapsack Battery Operated Sprayer
                                        VN-13</b></span>
                            </div>
                            <div class="price-wrap d-flex">

                                <span class="rate" style="size: 30px;"><b id="price3"> ₹3,840</b>&nbsp &nbsp<sub
                                        style="color:black;font-size:15px">₹<strike>4,800</strike></sub></span><span
                                    style="color:gray">&nbsp Save ₹960(20%) </span> </span></span>

                            </div>

                            <div class="price-wrap d-flex">
                                <pre>     </pre>
                                <button type="button" class="btn" style="background-color:rgb(45, 224, 21);"
                                    onclick="add(3)" id="btn">Add</button>
                                <button class="btn btn-success waves effect"
                                    onclick="document.getElementById('hand-pump').style.display='block'"
                                    style="margin-left:12px;color:black;background-color:rgb(45, 224, 21)">Details</button>
                                <!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-outline-success waves-effect" id="btn"><b>LOG IN</b></button>-->
                            </div>
                        </div>
                    </div>
                </div>

        </section>
    </div>
    <div>
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-wrap ftco-animate">
                            <div style="border: 2px solid black;">
                                <img class="card-img-top" src="pic/tractor.png" alt="Car-1" height=220px>
                            </div>
                            <div class="price-wrap d-flex">
                                <span style="color: black;font-family:verdana;font-size: 18px;"><b> Mahindra Super
                                        42HP</b></span>
                            </div>

                            <div class="price-wrap d-flex">
                                <span class="rate" style="size: 30px;"><b id="price4"> ₹7,80,000</b>&nbsp &nbsp<sub
                                        style="color:black;font-size:15px">₹<strike>8,42,400</strike></sub></span><span
                                    style="color:gray">&nbsp Save ₹62,400(8%) </span> </span></span></span>
                            </div>

                            <div class="price-wrap d-flex">
                                <pre>    </pre>

                                <button type="button" class="btn" style="background-color:rgb(45, 224, 21);"
                                    onclick="add(4)" id="btn">Add</button>
                                <button class="btn btn-success waves effect"
                                    onclick="document.getElementById('tractor').style.display='block'"
                                    style="margin-left:12px;color:black;background-color:rgb(45, 224, 21)">Details</button>
                                <!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-outline-success waves-effect" id="btn"><b>LOG IN</b></button>-->
                                <pre>      </pre>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <div class="car-wrap ftco-animate">
                            <div style=" border: 2px solid black;">
                                <img class="card-img-top" src="pic/seeder.jpg" alt="Car-2" style="height: 220px;">
                            </div>
                            <div class="price-wrap d-flex">
                                <p style="color: black;font-family:verdana;font-size: 18px;"><b>Saalet seeder</b></p>
                            </div>
                            <div class="price-wrap d-flex">

                                <span class="rate" style="size: 30px;"><b id="price5"> ₹3,850</b>&nbsp &nbsp<sub
                                        style="color:black;font-size:15px">₹<strike>4081</strike></sub></span><span
                                    style="color:gray">&nbsp Save ₹231(6%) </span> </span></span></span></span>

                            </div>

                            <div class="price-wrap d-flex">
                                <pre>     </pre>
                                <button type="button" class="btn" style="background-color:rgb(45, 224, 21);"
                                    onclick="add(5)" id="btn">Add</button>
                                <button class="btn btn-success waves effect"
                                    onclick="document.getElementById('seeder').style.display='block'"
                                    style="margin-left:12px;color:black;background-color:rgb(45, 224, 21)">Details</button>
                                <!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-outline-success waves-effect" id="btn"><b>LOG IN</b></button>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <div class="car-wrap ftco-animate">
                            <div style=" border: 2px solid black;">
                                <img class="card-img-top" src="pic/cultivator.jpg" alt="Car-3" style="height: 195px;">
                            </div>
                            <div class="price-wrap d-flex">

                                <span style="color: black;font-family:verdana;font-size: 18px;"><b>Neptune
                                        <!-- 2 Stroke 62cc Heavy Duty--> Inter Crop Cultivator</b></span>
                            </div>
                            <div class="price-wrap d-flex">

                                <span class="rate" style="size: 30px;"><b id="price6"> ₹22,199</b>&nbsp &nbsp<sub
                                        style="color:black;font-size:15px">₹<strike>23090</strike></sub></span><span
                                    style="color:gray">&nbsp Save ₹890(4%) </span> </span></span></span></span></span>

                            </div>

                            <div class="price-wrap d-flex">
                                <pre>     </pre>
                                <button type="button" class="btn" style="background-color:rgb(45, 224, 21);"
                                    onclick="add(6)" id="btn">Add</button>
                                <button class="btn btn-success waves effect"
                                    onclick="document.getElementById('cultivator').style.display='block'"
                                    style="margin-left:12px;color:black;background-color:rgb(45, 224, 21)">Details</button>
                                <!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-outline-success waves-effect" id="btn"><b>LOG IN</b></button>-->
                            </div>
                        </div>
                    </div>
                </div>

        </section>
    </div>
    <div>
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="car-wrap ftco-animate">
                            <div style="border: 2px solid black;">
                                <img class="card-img-top" src="pic/pipe.jpg" alt="Car-1" height=240px>
                            </div>
                            <div class="price-wrap d-flex">
                                <span style="color: black;font-family:verdana;font-size: 18px;"><b>AGS Irrigation
                                        Pipe</b></span>
                            </div>
                            <div class="price-wrap d-flex">
                                <span class="rate" style="size: 30px;"><b id="price7">₹2,500</b>&nbsp &nbsp<sub
                                        style="color:black;font-size:15px">₹<strike>4,000</strike></sub></span><span
                                    style="color:gray">&nbsp Save ₹1500(12%) </span></span>
                            </div>

                            <div class="price-wrap d-flex">
                                <pre>     </pre>
                                <button type="button" class="btn" style="background-color:rgb(45, 224, 21);"
                                    onclick="add(7)" id="btn">Add</button>
                                <button class="btn btn-success waves effect"
                                    onclick="document.getElementById('irr-pipe').style.display='block'"
                                    style="margin-left:12px;color:black;background-color:rgb(45, 224, 21)">Details</button>
                                <!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-outline-success waves-effect" id="btn"><b>LOG IN</b></button>-->
                                <pre>      </pre>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <div class="car-wrap ftco-animate">
                            <div style=" border: 2px solid black;">
                                <img class="card-img-top" src="pic/fertilizer.jpg" alt="Car-2" style="height: 195px;">
                            </div>
                            <div class="price-wrap d-flex">
                                <p style="color: black;font-family:verdana;font-size: 18px;"><b>EasyGro Chilli Growing
                                        Kit
                                        <!--Earth Magic Potting Soil Mix with Required Fertilizers for Plants--></b></p>
                            </div>
                            <div class="price-wrap d-flex">

                                <span class="rate" style="size: 30px;"><b id="price8"> ₹899</b>&nbsp &nbsp<sub
                                        style="color:black;font-size:15px">₹<strike>25500</strike></sub></span><span
                                    style="color:gray">&nbsp Save ₹250(10%) </span>
                                </span></span></span></span></span></span></span>

                            </div>

                            <div class="price-wrap d-flex">
                                <pre>     </pre>
                                <button type="button" class="btn" style="background-color:rgb(45, 224, 21);"
                                    onclick="add(8)" id="btn">Add</button>
                                <button class="btn btn-success waves effect"
                                    onclick="document.getElementById('fertilizer').style.display='block'"
                                    style="margin-left:12px;color:black;background-color:rgb(45, 224, 21)">Details</button>
                                <!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-outline-success waves-effect" id="btn"><b>LOG IN</b></button>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3">
                        <div class="car-wrap ftco-animate">
                            <div style=" border: 2px solid black;">
                                <img class="card-img-top" src="pic/filter.jpg" alt="Car-3" style="height: 195px;">
                            </div>
                            <div class="price-wrap d-flex">

                                <span style="color: black;font-family:verdana;font-size: 18px;"><b>PINOLEX
                                        <!--Plastic T-Type--> 2 Inche T-Type Disk Filter
                                        <!--Cleaner for Garden Lawn/Ro Purifier Water Tank--></b></span>
                            </div>
                            <div class="price-wrap d-flex">

                                <span class="rate" style="size: 30px;"><b id="price9"> ₹1,665</b>&nbsp &nbsp<sub
                                        style="color:black;font-size:15px">₹<strike>1790</strike></sub></span><span
                                    style="color:gray">&nbsp Save ₹125(7%) </span></span>

                            </div>

                            <div class="price-wrap d-flex">
                                <pre>     </pre>
                                <button type="button" class="btn" style="background-color:rgb(45, 224, 21);"
                                    onclick="add(9)" id="btn">Add</button>
                                <button class="btn btn-success waves effect"
                                    onclick="document.getElementById('filter').style.display='block'"
                                    style="margin-left:12px;color:black;background-color:rgb(45, 224, 21)">Details</button>
                                <!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" class="btn btn-outline-success waves-effect" id="btn"><b>LOG IN</b></button>-->
                            </div>
                        </div>
                    </div>
                </div>

        </section>
    </div>
    <div class="alert alert-success " role="alert">
        Visit below site for More Instrument , equipment & Fertilizers etc... <a
            href="https://dir.indiamart.com/search.mp?ss=agricultural+equipment&src=as-rcnt%3Akwd%3Dag%3Apos%3D5%3Acat%3D-2%3Amcat%3D-2&prdsrc=1&search_type=p"
            target=_blank class="alert-link"> INDIA MART</a>. Give it a click if you like.
    </div>
    <!--finish instrument view-->


    <!--Details of Loan Remover-->
    <div id="loan-remover" class="modal">

        <form class="modal-content animate">

            <div class="imgcontainer">
                <span onclick="document.getElementById('loan-remover').style.display='none'" class="close"
                    title="Close PopUp">&times;</span>

            </div>

            <div class="container">
                <h2>Kisan Kraft 1400-Watt Electric Lawn Remover by Kisan Kraft</h2><br>
                <strike>M.R.P.:₹ 19,990.00</strike>

                <br>
                <span style="color:green;font-size:18px">Price:₹ 18,000.00<sup>*</sup></span> <span
                    style="color:red;font-size:14px">FREE Delivery.</span><a href=""> Details</a><br>
                You Save:₹ 1990.00 (10%)<br>
                Inclusive of all taxes
                <ul style="color:black;font-size:14px;">


                    <li>10 Days Returnable
                    <li>6 Month Warranty

                    <li>In stock.
                    <li>Delivery by: Mar 24 - 27 Details
                    <li>Cash On Delivery Available
                    <li>Sold and fulfilled by Field Star Agro (4.3 out of 5 | 204 ratings).
                    <li>New (4) from ₹ 18,000.00 + FREE Shipping
                    <li>Manual push use for cutting grass in lawn and garden
                    <li>Electric Lawn Mower with 1400 watt (1.8hp) induction motor
                    <li>Electric Lawn Mower with cutting width of 400mm & Grass box capacity of 50 L
                    <li>Effortless and very even cutting
                    <li>The lawn mower can cut grass from an height of 30mm to 70mm
                </ul>
            </div>

        </form>
    </div>
    <!--Deatil of water pump-->
    <div id="water-pump" class="modal">

        <form class="modal-content animate">

            <div class="imgcontainer">
                <span onclick="document.getElementById('water-pump').style.display='none'" class="close"
                    title="Close PopUp">&times;</span>

            </div>

            <div class="container">
                <h3>NEPTUNE SIMPLIFY FARMING 6.5 HP 4 Stroke Engine Petrol Start Kerosene Run Water Pump Set,3x3-inch
                </h3><br>
                <h5>by NEPTUNE SIMPLIFY FARMING</h5>
                <strike>M.R.P.:₹ 5,240.00</strike><br>
                <span style="color:green;font-size:18px">Price:₹ 4,990.00<sup>*</sup></span> <span
                    style="color:red;font-size:14px">FREE Delivery.</span><a href=""> Details</a><br>
                You Save:₹ 2490.00 (5%)<br>
                Inclusive of all taxes
                <ul style="color:black;font-size:14px;">

                    <li>10 Days Returnable

                    <li>3 Month Warranty
                    <li>In stock.
                    <li>Delivery wihtin 7 Days
                    <li>Cash On Delivery Available
                    <li><b>Size:</b> PetrolKerosene Waterpump
                    <li>Engine Output: 6.5 HP, Engine Displacement: 196 CC, Oil Capacity: 600 ML (20w40 grade oil), Fuel
                        Tank Capacity: 3 Liter
                    <li>Pump Inter Diameter/Outlet Diameter: 80mm/80mm, Continue Operation Time: 9 Hour
                    <li>Suction : 6 Meter , Pump Lift: 30 M (horizontal) , Discharge Capacity: 600L/min, Rated Rotation
                        Speed: 3600 RPM
                    <li>Application: Submersible Pump, Clarified Water Pump, Sewage Pump, Slurry Pump, Oil Transfer
                        Pump, Chemical Pump
                    <li>Warranty Type: Manufacturing Defects Warranty till 3 Months after delivery date
                </ul>
            </div>

        </form>
    </div>
    <!-- Details of Hand Sprayer-->
    <div id="hand-pump" class="modal">

        <form class="modal-content animate">

            <div class="imgcontainer">
                <span onclick="document.getElementById('hand-pump').style.display='none'" class="close"
                    title="Close PopUp">&times;</span>

            </div>

            <div class="container">
                <h3>Neptune Knapsack Battery Operated Sprayer VN-13 (12V/12AH)</h3><br>
                <h5>by NEPTUNE SIMPLIFY FARMING</h5>
                <strike>M.R.P.:₹ 4,800.00</strike><br>
                <span style="color:green;font-size:18px">Price:₹ 3,840.00<sup>*</sup></span> <span
                    style="color:red;font-size:14px">FREE Delivery.</span><a href=""> Details</a><br>
                You Save:₹ 960.00 (20%)<br>
                Inclusive of all taxes
                <ul style="color:black;font-size:14px;">

                    <li>10 Days Returnable

                    <li>3 Month Warranty
                    <li>In stock.
                    <li>Delivery wihtin 7 Days
                    <li>Cash On Delivery Available
                    <li><b>Features</b>
                        <ul type="disc">
                            <li>User friendly operation .
                            <li>Spraying can be done by pressing single button.
                            <li>No manual efforts required to create the pressure.
                            <li>Continuous & Mist spray
                            <li>Fixed with a regulator for controlling the pressure.
                            <li> Long lasting & HI-performance battery.
                            <li>Fixed with back rest and shoulder pad for comfortable
                                spraying.
                            <li>Available in attractive colours
                            <li>Techinical Specifications
                            <li>Capacity:16 Liters
                            <li>Battery: 12V/12AH
                            <li>Pressure:0.2-0.45 Mpa
                        </ul>

                </ul>
            </div>

        </form>
    </div>
    <!-- deatils Irrigation Pipe-->
    <div id="irr-pipe" class="modal">

        <form class="modal-content animate">

            <div class="imgcontainer">
                <span onclick="document.getElementById('irr-pipe').style.display='none'" class="close"
                    title="Close PopUp">&times;</span>

            </div>

            <div class="container">
                <h3>AGS Irrigation 12MM - 20 Meters Hose Pipe</h3>
                <b><strike>M.R.P.:₹ 4,000.00</b></strike><br>
                <span style="color:green;font-size:18px">Price:₹ 2500.00<sup>*</sup></span> <span
                    style="color:red;font-size:14px">FREE Delivery.</span><a href=""> Details</a><br>
                You Save:₹ 1500.00 (15%)<br>
                Inclusive of all taxes
                <ul style="color:black;font-size:14px;">


                    <li>10 Days Returnable
                    <li>6 Month Warranty

                    <li>In stock.
                    <li>Delivery within 9-10 Days
                    <li>Cash On Delivery Available
                    <li style="color:Gray"><b>highLights</b>
                    <li>Type: Garden
                    <li>Material: HDPE
                    <li>Length: 20 m
                    <li>Internal Diameter: 12 mm
                </ul>
                <table border=1 cellpadding=4 cellspacing=4>
                    <tr>
                        <th colspan=2>Specifications
                    </tr>
                    <tr>

                        <td>In The Box
                            Sales Package
                        <td>1 Hose Pipe
                    </tr>
                    <tr>
                        <th colspan=2>General
                    </tr>
                    <tr>

                        <td>Brand
                        <td>AGS Irrigation
                    </tr>
                    <tr>
                        <td>Model Number
                        <td>12MM - 20 Meters
                    </tr>
                    <tr>
                        <td>Type
                        <td>Garden
                    </tr>
                    <tr>
                        <td>Material
                        <td> HDPE
                    </tr>
                    <tr>
                        <td>Color
                        <td>Black
                    </tr>
                    <tr>
                        <td>Suitable For
                        <td>Gardening
                    </tr>
                    <tr>
                        <td>Certification
                        <td>ISI
                    <tr>

                    <tr>
                        <td>Length
                        <td>20 m
                    </tr>
                    <tr>
                        <td>Internal Diameter
                        <td>12 mm
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <!--detail of Fertilizers-->
    <div id="fertilizer" class="modal">

        <form class="modal-content animate">

            <div class="imgcontainer">
                <span onclick="document.getElementById('fertilizer').style.display='none'" class="close"
                    title="Close PopUp">&times;</span>

            </div>

            <div class="container">
                <h3>EasyGro Chilli Growing Kit (Grow bag, Soil, manure, Seeds)</h3><br>

                <strike>M.R.P.:₹ 1,249.00</strike><br>
                <span style="color:green;font-size:18px"><b>Price:₹ 899.00</b><sup>*</sup></span> <span
                    style="color:red;font-size:14px">FREE Delivery.</span><a href=""> Details</a><br>
                You Save:₹ 250.00 (10%)<br>
                Inclusive of all taxes
                <ul style="color:black;font-size:14px;">
                    <li>In stock.
                    <li>Delivery within 9-10 Days
                    <li>Cash On Delivery Available
                    <li><b>DESCRIPTION :</b>
                    <li>
                        <p>Growing a plant at home is a relaxing hobby everyone must-have. Growing small veggie plants
                            in your house would be a great idea to start with.
                            How nice would it be if you could eat Coriander or Mint that is grown at your house?
                            You will definitely stand unique in your neighborhood.
                            Consuming the veggies grown by yourself also gives you satisfaction.
                            So why don't you try growing some Green leafy vegetables with our new kind of TrustBasket
                            HDPE Grow Bag.</p>
                    <li><b>PRODUCT CONTAINS:</b>
                    <li>One HDPE Grow Bag
                    <li>One Pack of Earth Magic Potting soil - 5 KG
                    <li>One Pack of Vermicompost - 5 KG
                    <li>One Pack of Garden Red soil - 5 KG
                    <li>One Pack of Chilli Seeds Packet
            </div>
        </form>
    </div>
    <!--Filter-->
    <div id="filter" class="modal">

        <form class="modal-content animate">

            <div class="imgcontainer">
                <span onclick="document.getElementById('filter').style.display='none'" class="close"
                    title="Close PopUp">&times;</span>

            </div>

            <div class="container">
                <h3>PINOLEX Plastic T-Type 2 Inche Disk Filter Cleaner for Garden Lawn/Ro Purifier Water Tank</h3>
                <h5>By PinoLex</h5>


                <strike>M.R.P.:₹ 1,790.00</strike><br>
                <span style="color:green;font-size:18px"><b>Price:₹1,665.00</b><sup>*</sup></span> <span
                    style="color:red;font-size:14px">FREE Delivery.</span><a href=""> Details</a><br>
                You Save:₹ 125.00 (7%)<br>
                Inclusive of all taxes
                <ul style="color:black;font-size:14px;">
                    <li>10 Days Returnable
                    <li>In stock.
                    <li>Delivery within 5-6 Days
                    <li>Cash On Delivery Available
                    <li>Useful in maintenance of overhead water tank. comes with 2inch size bsp male thread
                    <li>Used in gardening agriculture green house swimming pools industries and so on
                    <li>Helps to remove dirt, sand, silt from water
                    <li>Solid body build to resist any type of weather
                    <li>Comes with uv resistance

            </div>
        </form>
    </div>
    <!--seeder-->
    <div id="seeder" class="modal">

        <form class="modal-content animate">

            <div class="imgcontainer">
                <span onclick="document.getElementById('seeder').style.display='none'" class="close"
                    title="Close PopUp">&times;</span>

            </div>

            <div class="container">
                <h4>Chapin 8701B Garden Push seeder With 6 Seed Plates for Up to 20 Varieties Of Seeds, (1 Garden
                    Seeder/Package)</h4>
                <h6>by Chapin International</h6>


                <strike>M.R.P.:₹ 4,081.00</strike><br>
                <span style="color:green;font-size:18px"><b>Price:₹3,850.00</b><sup>*</sup></span> <span
                    style="color:red;font-size:14px">FREE Delivery.</span><a href=""> Details</a><br>
                You Save:₹ 231.00 (6%)<br>
                Inclusive of all taxes
                <ul style="color:black;font-size:14px;">
                    <li>10 Days Returnable
                    <li>In stock.
                    <li>Delivery within 5-6 Days
                    <li>Cash On Delivery Available
                    <li>Durable powder-coated Steel frame with cushion-grip handles
                    <li>6 interchangeable seed plates accommodate up to 20 different types of seed
                    <li>30-Inch rotating wheel row marker for uniform planting
                    <li>Plow and wide rear wheel to cover soil over seeds aiding in successful germination
                    <li>Easy push design rolls easily over cultivated dirt and convenient kickstand helps to stabilize
                        when not in use

            </div>
        </form>
    </div>
    <!--Cultivator-->
    <div id="cultivator" class="modal">

        <form class="modal-content animate">

            <div class="imgcontainer">
                <span onclick="document.getElementById('cultivator').style.display='none'" class="close"
                    title="Close PopUp">&times;</span>

            </div>

            <div class="container">
                <h4>Neptune 2 Stroke 62cc Heavy Duty Inter Crop Cultivator, NC-62Chapin 8701B Garden Push seeder With 6
                    Seed Plates for Up to 20 Varieties Of Seeds, (1 Garden Seeder/Package)</h4>



                <strike>M.R.P.:₹ 23,090.00</strike><br>
                <span style="color:green;font-size:18px"><b>Price:₹22,199.00</b><sup>*</sup></span> <span
                    style="color:red;font-size:14px">FREE Delivery.</span><a href=""> Details</a><br>
                You Save:₹ 890.00 (4%)<br>
                Inclusive of all taxes
                <ul style="color:black;font-size:14px;">
                    <li>15 Days Returnable
                    <li>In stock.
                    <li>Delivery within 10-12 Days
                    <li>Cash On Delivery Available
                    <li> KEY FEATURES
                        <ul>
                            <li> Small Size & Light Weight.
                            <li>Perfect Combination of Power, Control, Maneuverability & Reliability.
                            <li> Leave Lower Growing Methods in the Dust.
                        </ul>
                        <table border=1 cellpadding=4 cellspacing=4>
                            <tr>
                                <th colspan=2>Specifications
                            </tr>
                            <tr>

                                <td>Brand
                                <td>Neptune
                            <tr>
                                <td>Speed
                                <td>6500 rpm
                            </tr>
                            <tr>

                                <td>Staring System
                                <td>Recoil Starter
                            </tr>
                            <tr>
                                <td>Engine Model
                                <td>1E48F/NC-62
                            </tr>
                            <tr>
                                <td>Displacement
                                <td>62cc
                            </tr>
                            <tr>
                                <td>Engine type
                                <td>2 stroke
                            </tr>
                            <tr>
                                <td>Engine Power
                                <td>3 HP
                            </tr>
                            <tr>
                                <td>Fuel
                                <td>Petrol/1.2L Capacity
                            </tr>
                            <tr>

                                <td>Width
                                <td>Tiilage:40 cm
                            </tr>
                            <tr>
                                <td>Power
                                <td>2.2 KW
                            </tr>
                        </table>

            </div>
        </form>
    </div>
    <!--tractor-->
    <div id="tractor" class="modal">

        <form class="modal-content animate">

            <div class="imgcontainer">
                <span onclick="document.getElementById('tractor').style.display='none'" class="close"
                    title="Close PopUp">&times;</span>

            </div>

            <div class="container">
                <h3>Mahindra Yuvo 575 DI 4WD</h3>



                <strike>M.R.P.:₹ 8,42,400.00</strike><br>
                <span style="color:green;font-size:18px"><b>Price:₹7,80,000.00</b><sup>*</sup></span> <span
                    style="color:red;font-size:14px">FREE Delivery.</span><a href=""> Details</a><br>
                You Save:₹ 62,400.00 (8%)<br>
                Inclusive of all taxes
                <ul style="color:black;font-size:14px;">

                    <li style="color:red;">Out Of stock.</li>

                    <table border=1 cellpadding=4 cellspacing=4>
                        <tr>
                            <th colspan=2>Specifications
                        </tr>
                        <tr>

                            <td>Brand
                            <td>Mahindra
                        <tr>
                            <td>No of cylinder
                            <td>4
                        </tr>
                        <tr>

                            <td>Horsepower
                            <td>45 hp
                        </tr>
                        <tr>
                            <td>Gear Box
                            <td>12 forward + reverse
                        </tr>
                        <tr>
                            <td>Brakes
                            <td>Oil Immersed Brakes
                        </tr>
                        <tr>
                            <td>Warranty
                            <td>2000 Hours or 2 yr
                        </tr>
                        <tr>
                            <td>Clutch
                            <td>Single/Dual
                        </tr>
                        <tr>
                            <td>Cooling
                            <td>Liquid cooled
                        </tr>
                        <tr>

                            <td>Air filter
                            <td>Dry Type
                        </tr>
                        <tr>
                            <td>Engine Rated RPM
                            <td>N/A
                        </tr>
                    </table>

            </div>
        </form>
    </div>
    <input type="button" value="GO TO CART" class="btn" style="background-color:rgb(45, 224, 21);margin-left:18cm"  onclick="return gotocart()">
    <section id="footer">
        <div class="container text-center">
            <p>Heart <i class="fa fa-heart-o"></i> of Perfect Farming</p>
        </div>
    </section>
   


<?php
    require "footer.php";
?>