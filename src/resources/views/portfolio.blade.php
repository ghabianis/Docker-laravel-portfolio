<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="icon" href="./img/images/anis.jpg">
    <title>Anis Ghabi</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }


    header {
        background-color: #f0f0f0;
        width: 100%;
        position: fixed;
        z-index: 999;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 200px;
    }

    .logo {
        text-decoration: none;
        color: #3a6cf4;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 1.8em;
    }

    .navigation a {
        color: #3a6cf4;
        text-decoration: none;
        font-size: 1.1em;
        font-weight: 500;
        padding-left: 30px;
    }

    .navigation a:hover {
        color: #601cfc;
    }

    section {
        padding: 100px 200px;
    }

    .main {
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background: url(./img/images/des.jpg) no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .main h2 {
        color: #fff;
        font-size: 1.4em;
        font-weight: 500;
    }

    .main h2 span {
        display: inline-block;
        margin-top: 10px;
        color: #4e9eff;
        font-size: 3em;
        font-weight: 600;
    }

    .main h3 {
        color: #fff;
        font-size: 2em;
        font-weight: 700;
        letter-spacing: 1px;
        margin-top: 10px;
        margin-bottom: 30px;
    }

    .main-btn {
        color: #fff;
        background-color: #3a6cf4;
        text-decoration: none;
        font-size: 1.1em;
        font-weight: 600;
        display: inline-block;
        padding: 0.9375em 2.1875em;
        letter-spacing: 1px;
        border-radius: 15px;
        margin-bottom: 40px;
        transition: 0.7s ease;
    }

    .main-btn:hover {
        background-color: #0a49f6;
        transform: scale(1.1);
    }

    .social-icons a {
        color: #fff;
        font-size: 1.7em;
        padding-right: 30px;
    }

    .title {
        display: flex;
        justify-content: center;
        color: #3a6cf4;
        font-size: 2.2em;
        font-weight: 800;
        margin-bottom: 30px;
    }

    .content {
        display: flex;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .card {
        background-color: #fff;
        width: 21.25em;
        box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
        border-radius: 10px;
        padding: 25px;
        margin: 15px;
        transition: 0.7s ease;
    }

    .card:hover {
        transform: scale(1.1);
    }

    .card .icon {
        color: #3a6cf4;
        font-size: 8em;
        text-align: center;
    }

    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        color: inherit;
    }

    .info {
        text-align: center;
    }

    .info h3 {
        color: #3a6cf4;
        font-size: 1.2em;
        font-weight: 700;
        margin: 10px;
    }

    .projects {
        background-color: #000016;
    }

    .projects .content {
        margin-top: 30px;
    }

    .project-card {
        background-color: #fff;
        border: 1px solid #fff;
        min-height: 14em;
        width: 23em;
        overflow: hidden;
        border-radius: 10px;
        margin: 20px;
        transition: 0.7s ease;
    }

    .project-card:hover {
        transform: scale(1.1);
    }

    .project-card:hover .project-image {
        opacity: 0.9;
    }

    .project-image img {
        width: 100%;
    }

    .project-info {
        padding: 1em;
    }

    .project-category {
        font-size: 0.8em;
        color: #000;
    }

    .project-title {
        display: flex;
        justify-content: space-between;
        text-transform: uppercase;
        font-weight: 800;
        margin-top: 10px;
    }

    .more-details {
        text-decoration: none;
        color: #3a6cf4;
    }

    .more-details:hover {
        color: #601cfc;
    }

    .contact .icon {
        font-size: 4.5em;
    }

    .contact .info h3 {
        color: #000;
    }

    .contact .info p {
        font-size: 1.5em;
    }

    .footer {
        background-color: #000016;
        color: #fff;
        padding: 2em;
        display: flex;
        justify-content: space-between;
    }

    .footer-title {
        font-size: 1.3em;
        font-weight: 600;
    }

    .footer-title span {
        color: #3a6cf4;
    }

    .footer .social-icons a {
        font-size: 1.3em;
        padding: 0 12px 0 0;
    }

    @media (max-width:1023px) {
        header {
            padding: 12px 20px;
        }

        .navigation a {
            padding-left: 10px;
        }

        .title {
            font-size: 1.8em;
        }

        section {
            padding: 80px 20px;
        }

        .main-content h2 {
            font-size: 1em;
        }

        .main-content h3 {
            font-size: 1.6em;
        }

        .content {
            flex-direction: column;
            align-items: center;
        }

    }

    @media (max-width:641px) {
        body {
            font-size: 12px;
        }

        .main-content h2 {
            font-size: 0.8em;
        }

        .main-content h3 {
            font-size: 1.4em;
        }
    }

    @media (max-width:300px) {
        body {
            font-size: 10px;

        }
    }

    .contact-form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
    }

    .contact-form h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .contact-form .form-group {
        margin-bottom: 15px;
    }

    .contact-form label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .contact-form textarea {
        height: 150px;
    }

    .contact-form button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #3a6cf4;
        border: none;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
    }

    .contact-form button[type="submit"]:hover {
        background-color: #3a6cf4;
    }
</style>

<body>

    <header>
        <a href="#" class="logo">Ghabi Anis</a>
        <nav class="navigation">
            <a href="#services">Services</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>


    <section class="main">
        <div>
            <h2>Hello, I'm Anis Ghabi<br><span>Backend Developer @Tekab.dev</span></h2>
            <h3>I'm a backend developer with 1y+ of experience working in server-side using Nestjs and Docker</h3>
            <a href="#projects" class="main-btn">View my work</a>
            <div class="social-icons">
                <a href="https://www.linkedin.com/in/ghabi-anis/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/ghabianis" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.facebook.com/AnisGhabipro/" target="_blank"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </section>

    <section class="cards" id="services">
        <h2 class="title">Services</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class='fas fa-code'></i>
                </div>
                <div class="info">
                    <h3>Script Writing</h3>
                    <p>Research and write scripts for different topics that can be used in different domains</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class='fas fa-laugh-wink'></i>
                </div>
                <div class="info">
                    <h3>Front-end Development</h3>
                    <p>Using a different framework like <strong>Angular2</strong>,<strong> React </strong>
                        ,<strong>HTML</strong> , <strong> CSS</strong>, <strong> JS </strong> ,<strong> BOOTSTRAP
                        </strong>, <strong> MATERIAL UI </strong> and more technologies to create a responsive web
                        design </p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class='fas fa-server'></i>
                </div>
                <div class="info">
                    <h3>Back-end Development</h3>
                    <p>Working with a different languages and frameworks like <strong>Laravel</strong> as a <strong> PHP
                        </strong> Framework and <strong>Node Js</strong>, <strong>ExpressJs</strong> as <strong>
                            javascript </strong> Frameworks and more to make Backend well created and Managed </p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class='fas fa-database'></i>
                </div>
                <div class="info">
                    <h3>Database Management</h3>
                    <p>I used to managed a different kind of databases SQL and NonSQL like<strong> Mongodb</strong>,
                        <strong>Firebase</strong> , <strong> MySql</strong>, <strong> MariaDB</strong>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class='fas fa-edit'></i>
                </div>
                <div class="info">
                    <h3>Content creator</h3>
                    <p>I have experience working on Youtube for 2years recording and editing videos and uploading them.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class='fas fa-question'></i>
                </div>
                <div class="info">
                    <h3>Problem Solver</h3>
                    <p>I have a good ability to solve hard level problems and deal with large algorithms</p>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="title">Projects</h2>
        <div class="content">
            <div class="project-card">
                <div class="project-image">
                    <img src="./img/images/work1.png" height="200px" />
                </div>
                <div class="project-info">
                    <p class="project-category">javascript Apps</p>
                    <strong class="project-title">
                        <span>Music Player App</span>
                        <a href="http://ghabianis.me/Web-Music-Player/" target="_blank" class="more-details">More
                            details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./img/images/work3.png" height="200px" />
                </div>
                <div class="project-info">
                    <p class="project-category">FullStack Apps</p>
                    <strong class="project-title">
                        <span>DashBoard App </span>
                        <a href="https://github.com/ghabianis/Dashboard-App-with-keycloak-Auth" target="_blank"
                            class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./img/images/work4.png" />
                </div>
                <div class="project-info">
                    <p class="project-category">FullStack Apps</p>
                    <strong class="project-title">
                        <span>Angular/MaterialUi app</span>
                        <a href="https://github.com/ghabianis/Angular-MaterialUi-_JsonServer_CrudApp" target="_blank"
                            class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./img/images/work5.png" />
                </div>
                <div class="project-info">
                    <p class="project-category">FullStack Apps</p>
                    <strong class="project-title">
                        <span>Angular/Keycloak</span>
                        <a href="https://github.com/ghabianis/Keycloak_Angular_Authentification_App" target="_blank"
                            class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./img/images/work6.png" />
                </div>
                <div class="project-info">
                    <p class="project-category">FullStack Apps</p>
                    <strong class="project-title">
                        <span>Whatsapp Clone</span>
                        <a href="https://github.com/ghabianis/Whatsapp-Clone-App" target="_blank"
                            class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="./img/images/work7.jpg" />
                </div>
                <div class="project-info">
                    <p class="project-category">Script Writing & Video Production</p>
                    <strong class="project-title">
                        <span>Task Tracer App</span>
                        <a href="https://github.com/ghabianis/Task-Tracer-V1" target="_blank" class="more-details">More
                            details</a>
                    </strong>
                </div>
            </div>
            <a href="https://github.com/ghabianis" target="_blank" class="aa">
                <div class="card">
                    <div class="icon">
                        <i class='fab fa-github'></i>
                    </div>
                    <span class="text-center text-decoration-none">Click Me For More</span>
                </div>
            </a>

        </div>
    </section>

    <section class="cards contact contact-form" id="contact">
        <h2 class="title">Contact Form</h2>
        <form id="contactForm" method="POST" action="{{ route('submit-form') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>

    <footer class="footer">
        <p class="footer-title">&copy;<span>Anis Ghabi</span></p>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/ghabi-anis/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/ghabianis" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.facebook.com/AnisGhabipro/" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
    </footer>  
</body>

</html>