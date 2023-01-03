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
                    <form id="contact" action="{{url('/uploadmaison_interesse')}}"  method="post"  enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Intéréssé par un immobilié</h4>
                        </div>


                            <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="maison_id" type="text" id="name" value="{{$id}}">
                          </fieldset>
                        </div> 
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="nom" type="text" id="name" placeholder="entrer votre nom" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                          <input name="prenom" type="text" id="surface" placeholder="entre votre prénom" required="">
                        </fieldset>
                        </div>
                        
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                         <input name="email" type="text" id="prix" placeholder="entre votre adresse email" required="">
                          </fieldset>
                        </div>

                         <div class="col-md-6 col-sm-12">
                          <fieldset>
                         <input name="num_tele" type="text" id="prix" placeholder="entre votre numéro de téléphone" required="">
                          </fieldset>
                        </div>
                        

                         <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input  name="date_debut" id="date" type="date" class="form-control" placeholder="date_début">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>

                           <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input  name="date_fin" id="date" type="date" class="form-control" placeholder="date_fin">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                      
                   



                        


                          
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Valider</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
       
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->
<!-- jQuery -->
@include("profile.script")
    @include("profile.footer")

    








 

</body>
</html>