<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5">
        <div class="container text-center py-5">
            <h1 class="display-4">Welcome to My Portfolio</h1>
            <p class="lead">I create amazing digital experiences</p>
            <a href="#projects" class="btn btn-light btn-lg mt-3">View My Portfolio</a>
        </div>
    </section>

   <section id="projects" class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Profile Image -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="profile-img-container">
                    <img src="assets/images/dio.png" alt="Dionisio de Jesus Martins" class="img-fluid rounded-circle shadow">
                    <div class="skills-badge">
                        <span class="badge bg-primary">Web Design</span>
                        <span class="badge bg-primary">Back-end</span>
                        <span class="badge bg-success">Front-end</span>
                        <span class="badge bg-success">Android APP</span>
                        <span class="badge bg-info">UX/UI</span>
                    </div>
                </div>
            </div>
            <!-- About Content -->
            <div class="col-lg-7">
                <h2 class="section-title mb-4">About <span class="text-primary">Me</span></h2>
                <p class="lead">Hello! I'm <strong>Dionisio de Jesus Martins</strong>, a final-year in Departament Technical Computer and Informatics, student passionate about web development and software engineering for android application.</p>
                
                <div class="about-details">
                    <p>Currently completing my degree at <strong>Instituto Profissional de Canossa</strong>, I specialize in building responsive websites and applications using modern technologies. My academic projects include:</p>
                    
                    <ul class="about-list">
                        <li><i class="fas fa-check-circle text-primary"></i> Developed a <strong>Geographic Information System for Village Locations in Ermera Administrative Post (Web & Android Based</strong> Using PHP for Web & Java for android applications & MySQL</li>
                        <li><i class="fas fa-check-circle text-primary"></i> Develop a <strong>Media Portal Website System for Café.TV Ermera</strong> Using PHP & MySQL</li>
                        <li><i class="fas fa-check-circle text-primary"></i> Created Interactive front-end projects with <strong> Android Studio for Android Applications</strong></li>
                    </ul>
                      <p>I'm seeking opportunities to apply my skills in real-world projects while continuing to learn from industry professionals IT.</p>
                    
                </div>
            </div>
        </div>
        
        <!-- Skills Progress Bars -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-center mb-4">My Skills</h3>
                <div class="skill-progress">
                    <h6>Web Design <span class="float-end">80%</span></h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"></div>
                    </div>

                     <h6>Android APP <span class="float-end">75%</span></h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"></div>
                    </div>
                    
                    <h6>JavaScript <span class="float-end">60%</span></h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%"></div>
                    </div>
                    
                    <h6>UI/UX Design <span class="float-end">50%</span></h6>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>