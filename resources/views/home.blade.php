<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taman Rekreasi Bandung</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/home.css') !!}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">TRB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategory
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Gratis</a>
          <a class="dropdown-item" href="#">Berbayar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Indoor</a>
          <a class="dropdown-item" href="#">Outdoor</a>
        </div>
      </li>
      
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>-->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari tempat wisata" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
    </form>
  </div> -->
</nav>

    <div class="container">
        <div class="row"  id="intro">
            <div class="col-12 col-md-6">
            <h1><b>Tempat Rekreasi Bandung</h1><br><br>
            <p>
               Tempat Rekreasi Bandung
               Sebelum anda bepergian ke tempat wisata yang ada di Bandung, lebih baik terlebih dahulu mengenal tempat yang ingin anda kunjungi 
               agar anda bisa menyiapkan segala sesuatunya dengan baik.
               Website ini menyajikan berbagai informasi terkati tempat wisata 
               apa saja yang ada di Bandung beserta hal - hal lain yang wajib anda ketahui
               untuk dapat berkunjung ke tempat wisata tersebut.</p>
            </div>
            <div class="col-12" col-md-6>
                <img src="{{URL::asset('img/intro-img.jpg')}}" class="intro-img" alt="intro-img">
            </div>
        </div>
    </div>   
    <br>
    <br>
    <hr>
    <div class="row">    
        <div class="col-md-4 ">
            <div class="card">
            <span class="card-title">The Lodge Lembang</span>
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="200" height="400" src="https://www.youtube.com/embed/c8ujKjGsy2o" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- card image -->
            <br>    
            <div class="card-content">
                
                <p class="card-text"> The Lodge merupakan salah satu tempat wisata yang ada di kecamatan Lembang Kabupaten Bandung Barat.</p>                    
                <br><a href="thelodge" class="btn btn-primary btn-sm float-left">Lebih Lanjut</a>       
            </div><!-- card content -->       
        </div>
    </div>
        <div class="col-md-4 ">
            <div class="card">
            <span class="card-title">Taman Lalu Lintas</span>
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="200" height="400" src="https://www.youtube.com/embed/_DJD1bY3xLI" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- card image -->
                
            <div class="card-content">
                <br>
                 <p class="card-text">Taman Lalu Lintas adalah taman rekreasi edukasi tentang apa saja yang harus diperhatikan pada lalu lintas</p> <a href="detail" class="btn btn-primary btn-sm float-left">Lebih Lanjut</a>                  
            </div><!-- card content -->        
        </div> 
    </div>
        <div class="col-md-4 ">
            <div class="card">
            <span class="card-title">Trans Studio Bandung</span>
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="200" height="400" src="https://www.youtube.com/embed/eO3PF2Ar7cc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- card image -->
            <br>
            <div class="card-content">
                
                <p class="card-text">Trans Studio Bandung merupakan wahana permainan yang ada di kota Bandung,
                    wahana ini merupakan salah satu wahana indoor terbesar di kota Bandung
                </p> <a href="tsb" class="btn btn-primary btn-sm float-left">Lebih Lanjut</a>                    
            </div><!-- card content -->        
      </div>
    </div>
    <div class="row">    
        <div class="col-md-4 ">
            <div class="card">
            <span class="card-title">The Lodge Lembang</span>
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="200" height="400" src="https://www.youtube.com/embed/c8ujKjGsy2o" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- card image -->
            <br>    
            <div class="card-content">
                
                <p class="card-text"> The Lodge merupakan salah satu tempat wisata yang ada di kecamatan Lembang Kabupaten Bandung Barat.</p>                    
                <br><a href="thelodge" class="btn btn-primary btn-sm float-left">Lebih Lanjut</a>       
            </div><!-- card content -->       
        </div>
    </div>
        <div class="col-md-4 ">
            <div class="card">
            <span class="card-title">Taman Lalu Lintas</span>
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="200" height="400" src="https://www.youtube.com/embed/_DJD1bY3xLI" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- card image -->
                
            <div class="card-content">
                <br>
                 <p class="card-text">Taman Lalu Lintas adalah taman rekreasi edukasi tentang apa saja yang harus diperhatikan pada lalu lintas</p> <a href="detail" class="btn btn-primary btn-sm float-left">Lebih Lanjut</a>                  
            </div><!-- card content -->        
        </div> 
    </div>
        <div class="col-md-4 ">
            <div class="card">
            <span class="card-title">Trans Studio Bandung</span>
                <div class="card-image">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="200" height="400" src="https://www.youtube.com/embed/eO3PF2Ar7cc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- card image -->
            <br>
            <div class="card-content">
                
                <p class="card-text">Trans Studio Bandung merupakan wahana permainan yang ada di kota Bandung,
                    wahana ini merupakan salah satu wahana indoor terbesar di kota Bandung
                </p> <a href="tsb" class="btn btn-primary btn-sm float-left">Lebih Lanjut</a>                    
            </div><!-- card content -->        
      </div>
    </div>

    <div class="footer">
        <p>&copy; 2020 || Rizal Fathur Rahman</p>
    </div>











<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>