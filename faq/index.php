<!doctype html>
<html lang="en">
  <head>
    <?php include "../components/layout/html.php"; ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/components.css" />
    <link rel="stylesheet" href="../styles/all-courses.css" />
    <link rel="stylesheet" href="../styles/components/search-bar.css" />
    <link rel="stylesheet" href="../styles/faq.css" />
  </head>
  <body>
    <?php include "../components/layout/header.php"; ?>
    <main>
    
        <header>
          <div class="container">
            <h1>Frequently Asked Questions</h1>
            <p>
              Your questions answered about our Online Teacher Training System
            </p>
          </div>
        </header>

        <section class="faq-section">
          <div class="container">
            <div class="faq">
              <h2>General Questions</h2>
              <div class="faq-item">
                <input type="checkbox" id="faq1" />
                <label for="faq1" class="faq-question"
                  >What is the Online Teacher Training System?</label
                >
                <div class="faq-answer">
                  <p>
                    The Online Teacher Training System is a platform where
                    teachers can purchase and enroll in online courses to
                    improve their skills. Experienced professionals can also
                    publish and review courses on the platform.
                  </p>
                </div>
              </div>

              <div class="faq-item">
                <input type="checkbox" id="faq2" />
                <label for="faq2" class="faq-question"
                  >How can I sign up?</label
                >
                <div class="faq-answer">
                  <p>
                    To sign up, click on the "Sign Up" button on the top right
                    corner of the homepage. You will need to provide your email,
                    full name, and create a password.
                  </p>
                </div>
              </div>

              <div class="faq-item">
                <input type="checkbox" id="faq3" />
                <label for="faq3" class="faq-question"
                  >What types of courses are available?</label
                >
                <div class="faq-answer">
                  <p>
                    We offer a wide variety of courses ranging from Kindergarten
                    teaching methods to advanced subjects like Theoretical
                    Physics.
                  </p>
                </div>
              </div>

              <h2>Payments & Certificates</h2>
              <div class="faq-item">
                <input type="checkbox" id="faq4" />
                <label for="faq4" class="faq-question"
                  >How do I pay for a course?</label
                >
                <div class="faq-answer">
                  <p>
                    You can pay for a course via credit card or PayPal. Once
                    your payment is confirmed, you will gain full access to the
                    course.
                  </p>
                </div>
              </div>

              <div class="faq-item">
                <input type="checkbox" id="faq5" />
                <label for="faq5" class="faq-question"
                  >Will I get a certificate after completing a course?</label
                >
                <div class="faq-answer">
                  <p>
                    Yes, after completing a course, you will receive a
                    certificate that certifies your course completion. You can
                    download it directly from your profile.
                  </p>
                </div>
              </div>

              <h2>Support</h2>
              <div class="faq-item">
                <input type="checkbox" id="faq6" />
                <label for="faq6" class="faq-question"
                  >What if I face issues with the course?</label
                >
                <div class="faq-answer">
                  <p>
                    If you face any issues, you can submit a support ticket
                    through our support system. Our support agents will resolve
                    the issue as soon as possible.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section> 
    </main>

    <?php include "../components/layout/footer.php"; ?>
  </body>
</html>
