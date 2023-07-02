<?php include("include/header.php");?>

    <div class="page-banner home-banner">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 class="mb-4"><?php echo $hero_row['title']?></h1>
            <p class="text-lg mb-5"><?php echo $hero_row['content']?></p>

            <a href="" class="btn btn-outline border text-secondary">More Info</a>
            <a href="#" class="btn btn-primary btn-split ml-2">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
          <div class="img-place">
              <img src="admin/image/<?php echo $hero_row['logo'];?>" alt="">
            </div>
          <div class="img-place">
              <img src="admin/image/<?php echo $hero_row['image'];?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="page-section features">
      <div class="container">
        <div class="row justify-content-center">
<?php
$feature_sql="SELECT * FROM feature ORDER BY id DESC";
$feature_result=mysqli_query($con,$feature_sql);
 ?>
 <?php while($feature_row=mysqli_fetch_assoc($feature_result)){?>
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="assets/img/icon_pattern.svg" alt="">
              </div>
              <div>
                <h5><?php echo $feature_row['title'] ;?></h5>
                <p><?php echo $feature_row['content'] ;?></p>
              </div>
            </div>
          </div>
          <?php }
          ?>
  
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <?php
    $section1_sql="SELECT * FROM about where id='1'";
    $section1_query = mysqli_query($con,$section1_sql);
    $section1_row=mysqli_fetch_assoc($section1_query);
     ?>
    <div class="page-section">
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
  
  
    <?php
    $section2_sql="SELECT * FROM about where id='2'";
    $section2_query = mysqli_query($con,$section2_sql);
    $section2_row=mysqli_fetch_assoc($section2_query);
     ?>
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow fadeInLeft">
            <h2 class="title-section"><?php echo $section2_row['title'] ;?></h2>
            <div class="divider"></div>
            <p class="mb-5"><?php echo $section2_row['content'] ;?></p>
            <a href="about.php" class="btn btn-primary">More Details</a>
            
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="admin/image/<?php echo $section2_row['image']; ?>" alt="">
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <div class="subhead">Why Choose Us</div>
          <h2 class="title-section">Your <span class="marked">Comfort</span> is Our Priority</h2>
          <div class="divider mx-auto"></div>
        </div>
  
        <div class="row mt-5 text-center">
          <div class="col-lg-4 py-3">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>High Performance</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>
          <div class="col-lg-4 py-3">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Friendly Prices</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>
          <div class="col-lg-4 py-3">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>No time-confusing</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

  
    <div class="page-section bg-light">
      <div class="container">
        
        <div class="owl-carousel wow fadeInUp" id="testimonials">
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="assets/img/person/person_1.jpg" alt="">
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
                  <img src="assets/img/person/person_2.jpg" alt="">
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
  
    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h2 class="title-section">Get in Touch</h2>
            <div class="divider"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Laborum ratione autem quidem veritatis!</p>
  
            <ul class="contact-list">
              <li>
                <div class="icon"><span class="mai-map"></span></div>
                <div class="content">123 Fake Street, New York, USA</div>
              </li>
              <li>
                <div class="icon"><span class="mai-mail"></span></div>
                <div class="content"><a href="#">hamdan54@gmail.com</a></div>
              </li>
              <li>
                <div class="icon"><span class="mai-phone-portrait"></span></div>
                <div class="content"><a href="#">+961 78896221</a></div>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 py-3 wow fadeInUp">
            <div class="subhead">Contact Us</div>
            <h2 class="title-section">Drop Us a Line</h2>
            <div class="divider"></div>
            
            <form <form action="function.php" method="post">
              <div class="py-2">
                <input type="text" class="form-control" placeholder="Full name" name="fullName">
              </div>
              <div class="py-2">
                <input type="text" class="form-control" placeholder="Email" name="email">
              </div>
              <div class="py-2">
                <textarea rows="6" class="form-control" placeholder="Enter message" name="message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary rounded-pill mt-4" name="submit">Send Message</button>
            </form>
            
            
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
   
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section client-section">
      <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
          <div class="item wow zoomIn">
            <img src="assets/img/clients/airbnb.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="assets/img/clients/google.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="assets/img/clients/stripe.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="assets/img/clients/paypal.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="assets/img/clients/mailchimp.png" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
  </main>

  <?php include("include/footer.php");?>