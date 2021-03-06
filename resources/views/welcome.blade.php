@extends('main')

@section('title', ' Bienvenue')
@section('main-content')
<main id="main">
	
<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 --><br><br><br><br>
      <div class="carousel-item active" style="background-image: url(img/image_vehistoric.jpg);">
        <div class="carousel-container">
			
          <div class="carousel-content animate__animated animate__fadeInUp">
            <h5>Trouvez le vol qui vous convient et faites voyager votre colis rapidement !</h5>
            <div class="row">
              <div class="col-lg-12 text-center text-center">
                <form method="POST" action="">
                  {{csrf_field()}}
                  <div class="form-group">
					<label>Date départ</label>
                    <input type="date" class="form-control h-10 mb-2" placeholder="" name="date_depart"  required>
                  </div>
				  <div class="form-group">
					<label>Ville départ</label>
                    <input type="text" class="form-control h-10 mb-2" placeholder="ex: BERLIN" name="ville_depart"  required>
                  </div>
				  <div class="form-group">
					<label>Ville d'arrivée</label>
                    <input type="text" class="form-control h-10 mb-2" placeholder="ex: DOUALA" name="ville_arrivee"  required>
                  </div>
				  <div class="form-group">
					<label>Nature du colis</label>
                    <input type="text" class="form-control h-10 mb-2" placeholder="en KG" name="nature_colis"  required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block cfx-get-report-btn w-100 h-60" title=""><i class="fa fa-search"></i> Rechercher</button>
                  </div>
                </form>
                  <br>
                    @if(session()->has('success'))
                      <div class="alert alert-danger">
                        {{ session()->get('success') }}
                      </div>
                    @endif
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

  </div>
</section><!-- End Hero -->

</main>
@endsection
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
  var images = ["image_vehistoric.jpg", "image_vehistoric2.jpg", "image_vehistoric3.jpg"];
  $(function () {
      var i = 0;
      $("#heroCarousel").css("background-image", "url(img/" + images[i] + ")");
      setInterval(function () {
          i++;
          if (i == images.length) {
              i = 0;
          }
          $("#heroCarousel").fadeOut( function () {
              $(this).css("background-image", "url(img/" + images[i] + ")");
              $(this).fadeIn();
          });
      }, 7000);
  });
</script>