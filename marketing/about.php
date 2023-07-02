<?php include("include/header.php");?>


    <div class="container mt-5">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">About</li>
              </ul>
            </nav>
            <h1 class="text-center">About Us</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
  <?php
    $section1_sql="SELECT * FROM about where id='1'";
    $section1_query = mysqli_query($con,$section1_sql);
    $section1_row=mysqli_fetch_assoc($section1_query);
     ?>
    <<div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="admin/image/<?php echo $section1_row['image']; ?>" alt="">
            </div>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <h2 class="title-section"><?php echo $section1_row['title']; ?></h2>
            <div class="divider"></div>
            <p><?php echo $section1_row['content']; ?></p>
            
            <a href="about.php" class="btn btn-primary">More Details</a>
            
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    
  
    <!-- Testimonials -->
    <div class="page-section bg-light">
      <div class="container">
        
        <div class="owl-carousel" id="testimonials">
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../assets/img/person/person_1.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Necessitatibus ipsum magni accusantium consequatur delectus a repudiandae nemo quisquam dolorum itaque, tenetur, esse optio eveniet beatae explicabo sapiente quo.</p>
                  <div class="entry-footer">
                    <strong>Melvin Platje</strong> &mdash; <span class="text-grey">CEO Slurin Group</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../assets/img/person/person_2.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Repudiandae vero assumenda sequi labore ipsum eos ducimus provident a nam vitae et, dolorum temporibus inventore quaerat consectetur quos! Animi, qui ratione?</p>
                  <div class="entry-footer">
                    <strong>George Burke</strong> &mdash; <span class="text-grey">CEO Letro</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
    
    <div class="page-section client-section">
      <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
          <div class="item">
            <img src="../assets/img/clients/airbnb.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/clients/google.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/clients/stripe.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/clients/paypal.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/clients/mailchimp.png" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
  </main>

 
<?php include("include/footer.php");?>