<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Steven Wu</title>
            <link rel="icon" href="favicon.ico">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="src/css/style.css">
        </head>
        <body>
            <header class="header">
                <div class="header__heading-group">
                    <h1 class="header__heading">Steven Wu</h1>
                    <span class="header__subtitle">Front-End Developer</span>
                </div>
            </header>
            <section class="main-section main-section--light-grey">
                <p class="main-section__heading">about me</p>
                <div class="divider"></div>
                <div class="main-section__info">
                    <div class="main-section__icn">
                        <p class="main-section__icn-image">&#60;&#47;&#62;</p>
                    </div>
                    <p class="main-section__info-text">
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
                <div class="main-section__info">
                    <div class="main-section__icn">
                        <p class="main-section__icn-image">&#60;&#47;&#62;</p>
                    </div>
                    <p class="main-section__info-text">
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
                <div class="main-section__info">
                    <div class="main-section__icn">
                        <p class="main-section__icn-image">&#60;&#47;&#62;</p>
                    </div>
                    <p class="main-section__info-text">
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
                <p class="main-section__heading">skills</p>
                <div class="divider"></div>
                <ul class="main-section__list">
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/html5.svg" />
                    </li>
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/angular-js.svg" />
                    </li>
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/bower.svg" />
                    </li>
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/css3.svg" />
                    </li>
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/grunt.svg" />
                    </li>
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/javascript.svg" />
                    </li>
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/mysql.svg" />
                    </li>
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/laravel.svg" />
                    </li>
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/sass.svg" />
                    </li>
                    <li class="main-section__list-item">
                        <img class="main-section__list-image" src="src/img/languages/php.svg" />
                    </li>
                </ul>
            </section>
            <section class="main-section main-section--grey">
                <form class="form" action="src/php/mail.php" method="post" autocomplete="off">
                    <p class="main-section__heading">let's talk</p>
                    <div class="divider"></div>
                    <div class="form__wrapper">
                        <label class="form__label" for="name">Name:</label>
                        <input id="name" class="form__input" type="text" name="name" placeholder="John" required />
                        <label class="form__label" for="email">E-Mail:</label>
                        <input id="email" class="form__input" type="email" placeholder="example@gmail.com" name="email" required/>
                        <label class="form__label" for="subject">Subject:</label>
                        <input id="subject" class="form__input" type="text" placeholder="Subject" name="subject" required/>
                        <label class="form__label" for="message">Message:</label>
                        <textarea id="message" class="form__input form__input--message" rows="6" name="message" placeholder="Let's talk..." required></textarea>
                        <button class="form__submit btn" type="submit">Send</button>
                    </div>
                </form>
            </section>
            <footer class="footer">
                <p class="footer__paragraph">Steven Wu Represent</p>
            </footer>
            <script src="src/js/app.js" type="text/javascript"></script>
        </body>
    </html>
