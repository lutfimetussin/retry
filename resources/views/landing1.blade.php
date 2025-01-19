@include('partials.header')


<!-- Introduction Section Start -->
<div class="custom-container-wrapper">
          <div class="custom-container">
              <img src="{{ asset('assets/assets/images/myself1.png') }}" alt="Myself" class="custom-image">
              <div class="custom-text">
                <h1>Welcome to my world</h1> 
                <p>A space to share my writing, video, artwork, 
                  and a lot of interesting things from time to time</p>
              </div>            
          </div>
          <button type="button" class="button2">View Content</button>
        </div>
        <!-- Introduction Section End -->

        <div class="custom-container-wrapper2">
          <div class="custom-text2">
            <h1>Content</h1> 
            <div class="custom-text2">
            <p>Discover the world through my lens of boundless thought, endless possibilities, and inspired ideas!</p>
            </div>
        </div>
        <div class="container mt-5 mb-5">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
            <div class="col mb-4">
              <div class="card h-100 d-flex flex-column" style="position: relative;">
                <img class="card-img-top" src="{{ asset('assets/assets/images/writing.png') }}" alt="writingImage">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Writing</h5>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-primary mt-auto">View Writing</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card h-100 d-flex flex-column">
              <img class="card-img-top" src="{{ asset('assets/assets/images/bedeo.png') }}" alt="videoImage">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Video</h5>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-primary mt-auto">View Video</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card h-100 d-flex flex-column">
                <img class="card-img-top" src="{{ asset('assets/assets/images/artwork.png') }}" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Artwork</h5>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-primary mt-auto">View Artwork</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

  <!-- Influenced Section Start -->
  <div class="custom-container-wrapper3">
    
        <div class="custom-text2">
          <h1>Influenced by:</h1>
      </div>
          <div class="custom-text3">
          <p>As any other youth around the world, nor in this country, I am not immune to the attraction from mass media. In my view, most of us are impacted. In terms of communication, acceptance, general view of social behavior, etc. This attraction is, of course, accompanied by an attractor. I am not discussing the issues about mass media effects here. I am sharing with you how it all started. These individuals, including musicians, chefs, philosophers, and world leaders, have profoundly influenced my life.  Many of them did begin their journeys under challenging circumstances, and it is not what you expect for the result they create when reflecting on what happened in their lives. Some struggling financially, some having difficult situations and difficult family dynamics or restrictions rooted in tradition, some losing important people in their lives, and some having difficulty in the academic world. Overall, most of them started with humble beginnings. However, the person they become at the end is very impactful towards society. In which I get inspired. There are many of them, actually, but I choose to show only a few due to technical reasons.</p>
        </div>

          <div class="custom-image2">
          <img src="{{ asset('assets/assets/images/jose.png') }}" alt="..." class="img-thumbnail">
          </div>
          <div class="custom-image3">
          <img src="{{ asset('assets/assets/images/mahmoud.png') }}" alt="..." class="img-thumbnail">
          </div>
          <div class="custom-image4">
          <img src="{{ asset('assets/assets/images/lenin.png') }}" alt="..." class="img-thumbnail">
          </div>
          <div class="custom-image5">
          <img src="{{ asset('assets/assets/images/wolff.png') }}" alt="..." class="img-thumbnail">
          </div>
          <div class="custom-image6">
          <img src="{{ asset('assets/assets/images/dugin.png') }}" alt="..." class="img-thumbnail">
          </div>
          <div class="custom-image7">
          <img src="{{ asset('assets/assets/images/asad.png') }}" alt="..." class="img-thumbnail">
          </div>
          <div class="custom-image8">
          <img src="{{ asset('assets/assets/images/mpw.png') }}" alt="..." class="img-thumbnail">
          </div>
          <div class="custom-image9">
          <img src="{{ asset('assets/assets/images/tony.png') }}" alt="..." class="img-thumbnail">
          </div>
          <div class="custom-image10">
          <img src="{{ asset('assets/assets/images/mike.png') }}" alt="..." class="img-thumbnail">
          </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@include('partials.footer')
</body>
</html>
