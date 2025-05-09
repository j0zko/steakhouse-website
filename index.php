<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Indulge in the finest cuts of steak in a luxurious ambiance at Your Steakhouse. Our restaurant is dedicated to delivering an exceptional dining experience, with a focus on quality, freshness, and attention to detail."
    />
    <title>Joe Crusty Steakhouse</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" type="image/png" href="obrazky/favicon.png" />
  </head>
  <body>
    <header class="navbar">
      <div class="container nav-container">
        <nav>
          <ul class="menu-items">
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="gallery.html">Gallery</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="header">
      <?php include ('includes/headings.php'); ?>
    </section>

    <section id="aboutt" class="about">
      <div class="container">
        <h2>Welcome to Crusty Steaks</h2>
        <p>Crusty Steaks: Indulge in Exquisite Flame-Kissed Perfection</p>
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/AmC9SmCBUj4?si=K2hIyTTRD2S5X8ju"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
          allowfullscreen
        ></iframe>
      </div>
    </section>

    <section id="about" class="about">
      <div class="container">
        <h3>About Our Steakhouse</h3>
        <p>
          Welcome to Your Steakhouse, where we pride ourselves on delivering an
          exceptional dining experience. Located in the heart of the city, our
          restaurant offers a cozy and inviting atmosphere perfect for any
          occasion.
        </p>
        <p>
          At Your Steakhouse, we source only the finest cuts of meat from local
          farmers, ensuring the highest quality and freshness in every dish. Our
          talented chefs skillfully prepare each steak to perfection,
          guaranteeing a memorable culinary journey with every bite.
        </p>
        <p>
          Whether you're celebrating a special occasion or simply craving a
          delicious steak dinner, our attentive staff is dedicated to providing
          you with impeccable service from start to finish.
        </p>
        <div class="image-gallery">
          <div class="image-item">
            <img
              src="/home/joe/Desktop/SteakH/steakhouse-website/obrazky/R.jpeg"
              alt="Beef fillet steak with mushrooms"
            />
            <p>
              PREMIUM STEAKS<br />Our steaks are cooked using a patented
              broiling method developed by our founder. They’re seasoned to
              perfection, and then served sizzling on 500-degree plates.
            </p>
          </div>
          <div class="image-item">
            <img
              src="/home/joe/Desktop/SteakH/steakhouse-website/obrazky/hqdefault.jpg"
              alt="Steak on grill"
            />
            <p>
              PREMIUM STEAKS<br />Our steaks are cooked using a patented
              broiling method developed by our founder. They’re seasoned to
              perfection, and then served sizzling on 500-degree plates.
            </p>
          </div>
          <div class="image-item">
            <img
              src="/home/joe/Desktop/SteakH/steakhouse-website/obrazky/steakdish.jpg"
              alt="Steak dish"
            />
            <p>
              THE MOST RIGOROUS HOSPITALITY TRAINING<br />Our experienced
              front-of-house team is trained to deliver memorable meals that
              consistently exceed expectations.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="signup-section">
      <div class="container">
        <h2>Sign Up for Our Newsletter</h2>
        <form class="signup-form">
          <input type="email" placeholder="Email Address" required />
          <input type="text" placeholder="First Name" required />
          <input type="text" placeholder="Last Name" required />
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </section>

    <?php include ('includes/footer.php'); ?>
  </body>
</html>
