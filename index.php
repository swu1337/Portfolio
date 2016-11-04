<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Steven Wu</title>
            <link rel="icon" href="favicon.ico">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="src/css/vendor/normalize.css">
            <link rel="stylesheet" type="text/css" href="src/css/style.css">
        </head>
        <body>
            <header class="header">
                <div class="header-heading-group">
                    <h1 class="header-heading">Steven Wu</h1>
                    <span class="header-subtitle">Front-End Developer</span>
                </div>
            </header>
            <section class="main-section light-grey">
                <p class="main-section-heading">about me</p>
                <div class="divider"></div>
                <div class="about-me-info">
                    <div class="about-me-icn">
                        <p class="dump-icn">&#60;&#47;&#62;</p>
                    </div>
                    <p class="about-me-info-text">
                        Lorem ipsum dolor sit amet,
                         consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam,
                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                         Excepteur sint occaecat cupidatat non proident,
                         sunt in culpa qui officia deserunt mollit anim id est laborum.
                     </p>
                </div>
                <div class="about-me-info">
                    <div class="about-me-icn">
                        <p class="dump-icn">&#60;&#47;&#62;</p>
                    </div>
                    <p class="about-me-info-text">
                        Lorem ipsum dolor sit amet,
                         consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam,
                         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                         Excepteur sint occaecat cupidatat non proident,
                         sunt in culpa qui officia deserunt mollit anim id est laborum.
                     </p>
                </div>
                <div class="about-me-info">
                    <div class="about-me-icn">
                        <p class="dump-icn">&#60;&#47;&#62;</p>
                    </div>
                     <p class="about-me-info-text">
                         Lorem ipsum dolor sit amet,
                          consectetur adipiscing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                          Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                </div>
            </section>
            <section class="main-section">
                <p class="main-section-heading">skills</p>
                <div class="divider"></div>
                <ul class="skill-wrapper">
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/html5.svg" />
                    </li>
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/angular-js.svg" />
                    </li>
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/bower.svg" />
                    </li>
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/css3.svg" />
                    </li>
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/grunt.svg" />
                    </li>
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/javascript.svg" />
                    </li>
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/mysql.svg" />
                    </li>
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/laravel.svg" />
                    </li>
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/sass.svg" />
                    </li>
                    <li class="skill-logo">
                        <img class="skill-logo-img" src="src/img/languages/php.svg" />
                    </li>
                </ul>
            </section>
            <section class="main-section grey">
                <form class="contact-form" action="src/php/mail.php" method="post" autocomplete="off">
                    <p class="main-section-heading">let's talk</p>
                    <div class="divider"></div>
                    <div class="form-wrapper">
                        <label class="form-label" for="name">Name:</label>
                        <input id="name" class="form-input" type="text" name="name" placeholder="John" required />
                        <label class="form-label" for="email">E-Mail:</label>
                        <input id="email" class="form-input" type="email" placeholder="example@gmail.com" name="email" required/>
                        <label class="form-label" for="subject">Subject:</label>
                        <input id="subject" class="form-input" type="text" placeholder="Subject" name="subject" required/>
                        <label class="form-label" for="message">Message:</label>
                        <textarea id="message" class="form-message" rows="6" name="message" placeholder="Let's talk..." required></textarea>
                        <button class="form-submit btn" type="submit">Send</button>
                        <!-- <input type="submit" class="form-submit btn" value="Send" /> -->
                    </div>
                </form>
            </section>
            <footer class="footer">
                <p class="footer-paragraph">Steven Wu Represent</p>
            </footer>
            <script src="src/js/app.js" type="text/javascript"></script>
        </body>
    </html>
