<section class="ftco-section img" id="order" style="background-image: url(images/order_bg.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                    <div class="heading-section ftco-animate mb-5 text-center">
                        <span class="subheading">Order</span>
                        <h2 class="mb-4">Your Cake</h2>
                    </div>
                    <form action="contactdb.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id="Name" name="name" placeholder="khusi kumari">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control"id="Email" name="email" placeholder="kumarikhushboo19muz@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control"id="Address" name="address" placeholder="new delhi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control"id="Phone" name="phone" placeholder="9874563215">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="text" class="form-control" id="book_date" name="date"  placeholder="Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Time</label>
                                    <input type="text" class="form-control" id="book_time" name="time" placeholder="Time">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cake Flavour</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ios-ios-arrow-down"></span></div>
                                        <select  id="taste" name="Taste" class="form-control">
                                            <option name="Taste" value="">Black Forest</option>
                                            <option value="">Yellow Butter Cake</option>
                                            <option value="">Pound Cake</option>
                                            <option value="">Red Velvet Cake</option>
                                            <option value="">Carrot Cake</option>
                                            <option value="">Sponge Cake</option>
                                            <option value="">Genoise Cake</option>
                                            <option value="">Chiffon Cake</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kg</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ios-ios-arrow-down"></span></div>
                                        <select  id="weight" name="Kg" class="form-control">
                                            <option name="Kg" value="">0.5</option>
                                            <option value="">1</option>
                                            <option value="">1.5</option>
                                            <option value="">2.5</option>
                                            <option value="">5</option>
                                            <option value="">10</option>
                                            <option value="">Custom</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <input type="submit" name="submit" value="Order Your Cake" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- order a cake section ends -->
