    @include('profile.head')

    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    @include("profile.header")
    
    
    
    
    
    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation"     >
        <div class="container" style="margin-left:300px">
         
              
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="{{url('/uploadmaison')}}"  method="post"  enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Ajouter un immobilié</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="adresse" type="text" id="name" placeholder="Adresse" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="surface" type="number" id="surface" placeholder="surface" required="">
                            </fieldset>
                            </div>
                            
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                             <input name="prix" type="text" id="prix" placeholder="Prix" required="">
                              </fieldset>
                            </div>
                          
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="time" name="catégorie" id="time">
                                    <option value="time">Maison</option>
                                    <option name="villa" id="Breakfast">Villa</option>
                                    <option name="appartement" id="Lunch">Appartement</option>
                                    <option name="studio" id="Dinner">Studio</option>
                                </select>
                              </fieldset>
                            </div>



                             <div class="col-lg-12">
                              <fieldset>
                                <textarea name="description" rows="6" id="message" placeholder="Description" required=""></textarea>
                              </fieldset>
                            </div>
    
                            <div class="col-lg-12">

                               <div>
                              <label>Image</label>
                             <input class="form-control" type="file" name="image" required>
                              </div>

                               </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Ajouter</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
           
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->


      @include("profile.footer")
    @include("profile.script")
   
    
  </body>
</html>