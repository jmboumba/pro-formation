@extends('layouts.user')
    
@section('content')
  <div style="background-image: url('/images/back_boat.jpg'); height:400px; color:white; background-repeat: no-repeat; width:100%; background-size: cover; margin-top:5%">
    <div><br><br><br><br><br><br><br>
      <center><p style="font-size:40px">Résultat concernant votre thème recherche</p></center>
    </div>
  </div>
    
    <div style="margin-top:2%; margin-left:10%">
      <h2 style="font-size:35px">Résultat de recherche : {{$title}}</h2>
    </div>

    

    @if(isset($results))
    <section class="product_section layout_padding" style="z-index: 10; ">
         <div class="container">
            <div class="row" style="width:100%; margin-left:15%">
            @foreach($results as $result)
               <div class="col-sm-6 col-md-4 col-lg-4" style="">
                  <div class="box" style="height:300px">
                        
                     <div class="option_container">
                        <div style="height:200px">
                           <center><p>Hello</p></center>
                           <center><p>Hello</p></center>
                        </div>
                        <div class="options">
                           <a href="{{ url('/formations/' . $result->id . '/details') }}" class="option1">
                           {{$result->titre}}
                           </a>
                           
                        </div>
                     </div>
                  </div>
                  
               </div>
               @endforeach
            
         </div>
      </section>
      
      @endif
    
    <div style="margin-top:15%">
      @if(isset($message_error))
        <center><h1>{{$message_error}}</h1></center>
      @endif
    </div>