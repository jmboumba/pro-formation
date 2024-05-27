@extends('layouts.user')
    
@section('content')

   @if(isset($metiers))
   <div style="background-image: url('/images/data-center.png'); height:400px; color:white; background-repeat: no-repeat; width:100%; background-size: cover; margin-top:5%">
      <div class="heading_container heading_center" >
         <h2 style="margin-top:10%">
            FORMATIONS /  <span>METIER</span>
         </h2>
      </div>
  </div>

    <section class="product_section layout_padding" style="z-index: 10;">
         <div class="container">
            <div class="row" style="width:100%; margin-left:15%">
            @foreach($metiers as $metier)
               <div class="col-sm-6 col-md-4 col-lg-4" >
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           {{$metier->libelle}}
                           </a>
                           
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="/images/metiers/{{$metier->image}}" alt="">
                     </div>
                  </div>
                  
               </div>
               @endforeach
            
         </div>
      </section>
      
      @endif



    @if(isset($secteurs))
    <div style="background-image: url('/images/data-center.png'); height:400px; color:white; background-repeat: no-repeat; width:100%; background-size: cover; margin-top:5%">
      <div class="heading_container heading_center" >
         <h2 style="margin-top:10%">
            FORMATIONS /  <span>SECTEUR</span>
         </h2>
      </div>
   </div>
    
    
    <section class="product_section layout_padding" style="z-index: 10;">
         <div class="container">
            <div class="row" style="width:100%; margin-left:15%">
            @foreach($secteurs as $secteur)
               <div class="col-sm-6 col-md-4 col-lg-4" >
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           {{$secteur->libelle}}
                           </a>
                           
                        </div>
                     </div>
                     <div class="img-box">
                        <img style="height:100%" src="/images/secteurs/{{$secteur->image}}" alt="">
                     </div>
                  </div>
                  
               </div>
               @endforeach
            
         </div>
      </section>
      
      @endif



      <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmTransaction" id="frmTransaction">
       <input type="hidden" name="business" value="">
       <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="item_name" value="">
       <input type="hidden" name="item_number" value="">
       <input type="hidden" name="amount" value="">   
       <input type="hidden" name="currency_code" value="USD">   
       <input type="hidden" name="cancel_return" value="http://demo.expertphp.in/payment-cancel">
       <input type="hidden" name="return" value="http://demo.expertphp.in/payment-status">
    </form>
    <script>document.frmTransaction.submit();</script>