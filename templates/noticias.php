  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <h2 class="fs-2 text-dark fw-bold text-center">CienciaPR en las noticias</h2>
      </div>
    </div>
    <div class="row g-4 align-items-stretch">
      <div class="col-12 col-lg-6">
        <div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
          <a href="<?= SERVER_URI ?>post.php?id=<?= $post['id'] ?>" class="text-decoration-none position-relative d-block">
            <div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 300px; background-image: url('<?= SERVER_URI ?>images/1-noticias.jpg');">
              <a href="<?= SERVER_URI ?>category.php?id=<?= $post['category_id'] ?>" class="badge fw-medium bg-success text-dark px-3 py-2 text-decoration-none position-relative" style="z-index: 1;">Noticias Científicas</a>
            </div>
          </a>
          <div class="card-body d-flex flex-column justify-content-between p-4">
            <div>
              <a href="<?= SERVER_URI ?>post.php?id=<?= $post['id'] ?>" class="text-decoration-none text-dark">
                <h3 class="card-title fw-bold mb-3">Jóvenes puertorriqueños representarán a Puerto Rico en la Feria Internacional MILSET en Abu Dhabi</h3>
              </a>
              <p class="card-text text-muted fs-6">Tres jóvenes científicos de Puerto Rico viajarán para representar a la isla en una competencia internacional de ciencia...</p>
            </div>
            <div class="mt-3">
              <small class="text-uppercase text-muted fw-bold" style="font-size: 0.7rem;">Por Admin • Septiembre 2025</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 d-flex">
        <div class="row g-4 flex-grow-1">
          <div class="col-12 col-md-6">
            <div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
              <!-- <img src="<?= SERVER_URI ?>images/2-noticias.jpg" class="card-img-top" alt="Noticia 2" style="height: 140px; object-fit: cover;"> -->
               <div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('<?= SERVER_URI ?>images/2-noticias.jpg');">
                <span class="badge fw-medium bg-success text-dark px-3 py-2">Talento PR</span>
              </div>
              
              <div class="card-body p-3">
                <h5 class="card-title fw-bold mb-2" style="font-size: 0.95rem;">Talento del Centro Molecular-UPR destaca en EE. UU.</h5>
                <small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
              <!-- <img src="<?= SERVER_URI ?>images/3-noticias.jpg" class="card-img-top" alt="Noticia 3" style="height: 140px; object-fit: cover;"> -->
              <div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('<?= SERVER_URI ?>images/3-noticias.jpg');">
                <span class="badge fw-medium bg-success text-dark px-3 py-2">Exterior</span>
              </div>
              
              <div class="card-body p-3">
                <h5 class="card-title fw-bold mb-2" style="font-size: 0.95rem;">Embajadora del RUM en Fulbright Canadá</h5>
                <small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
              <!-- <img src="<?= SERVER_URI ?>images/4-noticias.jpg" class="card-img-top" alt="Noticia 4" style="height: 140px; object-fit: cover;"> -->
               <div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('<?= SERVER_URI ?>images/4-noticias.jpg');">
                <span class="badge fw-medium bg-success text-dark px-3 py-2">Tecnología</span>
              </div>
                             
              <div class="card-body p-3">
                <h5 class="card-title fw-bold mb-2" style="font-size: 0.95rem;">Biología RUM inaugura corredor y laboratorio</h5>
                <small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card h-100 shadow-sm border-0 rounded-3 bg-white">
              <!-- <img src="<?= SERVER_URI ?>images/5-noticias.jpg" class="card-img-top" alt="Noticia 5" style="height: 140px; object-fit: cover;"> -->
               <div class="card-img-top d-flex align-items-end p-3 bg-cover bg-center" style="height: 180px; background-image: url('<?= SERVER_URI ?>images/5-noticias.jpg');">
                <span class="badge fw-medium bg-success text-dark px-3 py-2">Novedades</span>
              </div>
                             
              <div class="card-body p-3">
                <h5 class="card-title fw-bold mb-2" style="font-size: 0.95rem;">Hepatitis C y Parkinson: estudio del RUM</h5>
                <small class="text-uppercase text-muted d-block" style="font-size: 0.65rem;">Por Admin • Septiembre 2025</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12 text-center">
        <a href="#" class="btn btn-primary text-white btn-lg fs-6">Ver todas las noticias</a>
      </div>
    </div>

  </div>