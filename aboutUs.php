<html lang="en">
  <?php include "head.php" ?>
  <body>
  <?php include "nav.php" ?>

    <section id="aboutUs">
      <div class="about-content">
        <div class="about-text">
          <h2>About Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
             consequat diam ac eleifend pellentesque. Mauris quis fermentum velit. 
             Aenean ac dolor neque. Aliquam at ligula ut magna finibus efficitur.
              Phasellus accumsan dapibus erat, nec tincidunt ex posuere ac. Donec at posuere ipsum, sit amet vestibulum justo.</p>
        </div>
        <div class="about-image">
          <img src="images/abtus.jpg" alt="About Us Image">
        </div>
      </div>
    </section>

    <h1>Contact us</h1>
    <p class="subtitle">Get in touch!</p>  
    <section id="contactUs">
      <div class="contact-content">s
        <div class="contact-form">
          <form action="message.php" method="POST">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="send">Send Message</button>
          </form>
        </div>
        <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.951723721559!2d28.132520620464938!3d-26.1732317263575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95121ee16c7b03%3A0xe153dc86849080e1!2sEduvos%20Bedfordview!5e0!3m2!1sen!2sza!4v1685690330915!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
    
    <?php include "footer.php" ?>

</body>
</html>