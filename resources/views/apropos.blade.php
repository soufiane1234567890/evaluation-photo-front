@extends('layouts.app')

@section('content')
<style>
.about {
  background-color: #f8f9fa;
  padding: 50px 0;
}

.about h2 {
  font-size: 32px;
  margin-bottom: 30px;
}

.about p {
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 20px;
}

.about img {
  border-radius: 50%;
  max-width: 100%;
  height: auto;
  margin-top: 20px;
}

</style>
<section class="about">
    <div class="container">
      <h2>A propos de moi</h2>
      <div class="row">
        <div class="col-md-6">
          <p>Bienvenue sur mon blog ! Je suis passionné par les nouvelles technologies et j'aime partager mes découvertes avec le plus grand nombre. J'espère que vous trouverez ici des informations utiles et intéressantes.</p>
          <p>N'hésitez pas à me contacter si vous avez des questions ou des suggestions.</p>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('images/apropos.jpg') }}" alt="Photo de moi" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  


<footer>
    <p>© 2023 Blog</p>
</footer>
@endsection