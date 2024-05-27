<div style="display: flex; flex-direction: row; gap: 200px; margin-top:5%">
    <div style="background-color: white; padding: 50px; margin-left:100px; width: 400px; font-size:20px; width:60%">
        <div>
            <h1 style="width:350px; color:red; font-size:35px ">Trouver la formation adéquate</h1>
            <p>Parmis des centaines de formations professionnelles.</p>
            <p> Des formations dispensées par des experts portant sur des sujets multiples.</p>
            <a style="margin-left: 50px" href="{{ route('register') }}" class="nav-link"><button type="button" class="btn btn-primary">Commencer</button></a>
        </div>
    </div>
    <div style="background-color: white;padding: 10px;border: 1px solid white;width:80%; margin-right:10%">
        <img style="height: 300px; width: 400px" src="app_logo.png" alt="">
    </div>
</div>

<div style="margin-top:5%;">
    <center>
        <form action="/search/base">
            <input style="height:50px; width:300px" type="search" id="site-search" placeholder="Formation" name="title" />
            <button class="btn btn-primary" type="submit" style="height:50px">Search</button>
        </form>
    </center>
</div>

<div style="margin-top:10%; background-color: #dcd7d5; height:100px "><br>
    <div style="margin-left:15%;">
        <h3>Actualités</h3>
    </div>
</div>

<div style="margin-left:200px; margin-top:50px; margin-right:200px; ">
<div style="display: flex;flex-direction: row; gap: 100px;">
    @foreach($actualites as $actualite)
    <div style="background-color:  #f5f4f4 ;padding: 10px;border: 1px solid white;width:100%; ">
        <h1>{{$actualite->titre}} </h1>
        <a href=""><img src="/images/actus/{{$actualite->image}}" width="100%" alt=""></a>
        
        <h2>Objectifs :</h2>
        <p style="width:100%">{{$actualite->contenu}}</p><br>

        <h5>Date de publication :</h5>
        <p style="width:100%">{{$actualite->created_at}}</p>
    </div>  

    @endforeach
</div>
</div>

<div style="margin-top:10%; background-color: #dcd7d5; height:100px "><br>
    <div style="margin-left:15%;">
        <h3>Sujets populaires</h3>
    </div>
</div>

<div style="display: flex;flex-direction: row; gap: 50px; margin-left: 5%; margin-top: 10%">
    <div style="border: none; padding: 20px;text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;border-radius: 20px;background-color:  #f0eeee ; ">
        <p style="">Directeur/Directrice artistique</p>
    </div>
    <div style="border: none; padding: 20px;text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;border-radius: 20px;background-color:  #f0eeee ; ">
        Directeur/Directrice artistique
    </div>
    <div style="border: none; padding: 20px;text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;border-radius: 20px;background-color:  #f0eeee ; ">
        Directeur/Directrice artistique
    </div>
    <div style="border: none; padding: 20px;text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;border-radius: 20px;background-color:  #f0eeee ; ">
        Directeur/Directrice artistique
    </div>
</div>
<div style="display: flex;flex-direction: row; gap: 50px; margin-left: 5%; margin-top: 1%">
    <div style="border: none; padding: 20px;text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;border-radius: 20px;background-color:  #f0eeee ; ">
        <p style="">Directeur/Directrice artistique</p>
    </div>
    <div style="border: none; padding: 20px;text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;border-radius: 20px;background-color:  #f0eeee ; ">
        Directeur/Directrice artistique
    </div>
    <div style="border: none; padding: 20px;text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;border-radius: 20px;background-color:  #f0eeee ; ">
        Directeur/Directrice artistique
    </div>
    <div style="border: none; padding: 20px;text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;border-radius: 20px;background-color:  #f0eeee ; ">
        Directeur/Directrice artistique
    </div>
</div>

<div style="margin-top:10%; background-color:#5F91D0; height:100px "><br>
    <div style="margin-left:15%;">
        <h3>Nos Partenaires</h3>
    </div>
</div>




