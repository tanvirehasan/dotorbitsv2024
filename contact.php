 <?php  include 'inc/header.php'; ?> 

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Contact</li>
              </ul>
              <h2>Get in touch</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14602.440801516466!2d90.4325517!3d23.7968912!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a224a5d521c8532!2sdotOrbit!5e0!3m2!1sen!2sbd!4v1603311835476!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      <div class="blankline30"></div>
      <div class="blankline30"></div>

      <div class="container">
        <div class="row">
          <div class="span8">
            <h4>Get in touch with us by filling contact form below</h4>

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="row">
                <div class="span4 form-group field">
                  <input type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="span4 form-group">
                  <input type="email" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <input type="text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                    placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <div class="text">
                    <button class="btn btn-theme btn-medium margintop10" type="submit">Send a message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contact information<span></span></h5>

                <ul class="contact-info">
                  <li><label>Address :</label> Nurercala Bazar, Vatara, Gulshan-2<br />  Dhaka 1212, Bangladesh</li>
                  <li><label>Phone :</label>+8801843 640 517</li>
                  <li><label>Email : </label>  team@dotorbits.com</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>


 <?php  include 'inc/footer.php'; ?> 