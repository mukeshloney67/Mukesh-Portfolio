<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mukesh Kumar</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./inc/img/m-icon.jpg">
    <?php include("./inc/links.php"); ?>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/indexResponsive.css">
</head>

<body>
    <?php include("./inc/header.php"); ?>
    <div class="hero-sec-wrapper">
        <div class="hero-sec-1-wrapper">
            <div class="hero-sec-1">
                <div class="hero-sec-1-left">
                    <div class="hero-sec-1-text-container">
                        <h1 class="revalia-regular">Mukesh</h1>
                        <h2 class="revalia-regular">Kumar</h2>
                    </div>
                </div>
                <div class="hero-sec-1-right">
                    <img src="./inc/img/mukesh_dp.jpg" alt="dp">
                </div>
            </div>
        </div>
        <div class="black-hr-line"></div>
        <div class="hero-sec-2-wrapper">
            <div class="hero-sec-2">
                <div class="hero-sec-2-left">
                    <div class="hero-sec-2-left-text-container">
                        <p class="roboto">Crafting modern web experiences with clean code and creative design.</p>
                    </div>
                </div>
                <div class="hero-sec-2-right">
                    <div class="hero-sec-2-right-text-container">
                        <p class="roboto">Full-Stack <span>Developer &</span> UI/UX <span>Designer</span></p>
                    </div>
                </div>

            </div>

            <div class="hero-sec-2-slide-wrapper">
                <div class="hero-sec-2-slide">
                    <span class="sarpanch-regular">MERN</span>
                    <span class="sarpanch-regular">System Design</span>
                    <span class="sarpanch-regular">UX</span>
                    <span class="sarpanch-regular">Prototyping</span>
                    <span class="sarpanch-regular">Figma</span>
                    <span class="sarpanch-regular">Typescript</span>
                    <span class="sarpanch-regular">PostgreSQL</span>
                    <span class="sarpanch-regular">C++</span>
                    <span class="sarpanch-regular">AWS</span>
                    <span class="sarpanch-regular">Docker</span>
                    <span class="sarpanch-regular">Kubernetes</span>
                    <span class="sarpanch-regular">Typescript</span>
                    <span class="sarpanch-regular">Prototyping</span>
                </div>
                <div class="hero-sec-2-slide">
                    <span class="sarpanch-regular">MERN</span>
                    <span class="sarpanch-regular">System Design</span>
                    <span class="sarpanch-regular">UX</span>
                    <span class="sarpanch-regular">Prototyping</span>
                    <span class="sarpanch-regular">Figma</span>
                    <span class="sarpanch-regular">Typescript</span>
                    <span class="sarpanch-regular">PostgreSQL</span>
                    <span class="sarpanch-regular">C++</span>
                    <span class="sarpanch-regular">AWS</span>
                    <span class="sarpanch-regular">Docker</span>
                    <span class="sarpanch-regular">Kubernetes</span>
                    <span class="sarpanch-regular">PostgreSQL</span>
                    <span class="sarpanch-regular">Figma</span>
                </div>

            </div>

        </div>

    </div>


    <!-- about sec  -->

    <?php include("./inc/components/about.php"); ?>

    <!-- project sec  -->
    <?php include("./inc/components/project.php"); ?>

    <!-- skill section  -->
    <?php include("./inc/components/skills.php"); ?>

    <!-- skill icon  -->
    <?php include("./inc/components/skill_icon.php"); ?>


    <!-- conatct  -->
    <?php include("./inc/components/contact.php"); ?>



    <?php include("./inc/footer.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="./js/script.js"></script>
    <!-- <script>
        const scroll = new LocomotiveScroll({
            el: document.querySelector('body'),
            smooth: true
        });
    </script> -->
</body>

</html>