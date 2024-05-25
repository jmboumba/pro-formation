<div style="display: flex; flex-direction: row; gap: 200px;">
    <div style="background-color: white; padding: 50px; margin-left:100px; width: 400px">
        <div>
            <h2 style="width:300px; color:#cb4314 ">Trouver la formation adéquate</h2>
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
        <form action="">
            <input style="height:50px; width:300px" type="search" id="site-search" placeholder="Formation" name="formation" />
            <button type="submit" style="height:50px">Search</button>
        </form>
    </center>
</div>

<div style="margin-top:10%; background-color: #dcd7d5; height:100px "><br>
    <div style="margin-left:15%;">
        <h3>Explorez les formations recentes</h3>
    </div>
</div>

<div style="margin-left:200px">
<div style="display: flex;flex-direction: row; gap: 100px;">
    @foreach($formations as $formation)
    <div style="background-color: white;padding: 10px;border: 1px solid white;width:100%; ">
        <h1>{{$formation->titre}} - {{$formation->description}}</h1>
        <img src="/images/formations/{{$formation->video}}" alt="">
        
        <h2>Objectifs :</h2>
        <p style="width:100%">{{$formation->objectifs}}</p>

        <h2>Programme :</h2>
        <p style="width:100%">{{$formation->programme}}</p>

        <h2>Niveau réquis :</h2>
        <p style="width:100%">{{$formation->niveau}}</p>
    </div>  

    @endforeach
</div>
</div>