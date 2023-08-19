<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../style.css" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .debug {
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <!-- WHITE HAEDER -->
    <header class="position-fixed w-100 transition">
        <div class="d-flex p-4 container">
            <a href="/yes-blog" class="d-flex text-decoration-none">
                <h3 class="my-auto text-black">LOGO</h3>
            </a>

            <!-- RIGHT MENU -->
            <div class="ms-auto d-lg-flex d-none gap-2">
                <a href="/yes-blog/location" class="btn">
                    Location
                </a>
                <a href="/yes-blog/blog" class="btn">
                    Blog
                </a>
                <a href="/yes-blog/price" class="btn btn-dark">
                    PRICE LIST
                </a>
            </div>

            <!-- RIGHT MOBILE MENU ICON -->
            <div class="d-lg-none d-flex ms-auto" onclick="showMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="pointer bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                </svg>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="menu" class="hide p-4 position-fixed left-0 top-0 w-100 h-100 bg-black d-flex flex-column">
            <div onclick="showMenu()" class="pointer ms-auto">
                X
            </div>

            <!-- MENU -->
            <a href="/yes-blog/location" class="btn text-white">
                Location
                <hr />
            </a>
            <a href="/yes-blog/blog" class="btn text-white">
                Blog
                <hr />
            </a>
            <div>
                <a href="/yes-blog/price" class="btn btn-light w-100">PRICE LIST</a>
            </div>
        </div>
    </header>

    <!-- SECTION SEARCH -->
    <section class="container" style="padding-top:100px;">
        <div class="text-center">
        <h1>Title goes here</h1>
        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime doloremque quibusdam ratione nesciunt facilis
            sequi ab reprehenderit voluptas explicabo</b>

        <div class="d-flex mt-4">
            <input class="app-input flex-grow-1 p-2" placeholder="find us">
        </div>
    </div>

        <div class="row gx-2 gy-2 mt-2">
            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Jakarta</span>
                    </div>
                    <h1>Street somewhere no 30</h1>
                    <p>
                        Sunday - Wednesday
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Jakarta</span>
                    </div>
                    <h1>Street somewhere no 30</h1>
                    <p>
                        Sunday - Wednesday
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Jakarta</span>
                    </div>
                    <h1>Street somewhere no 30</h1>
                    <p>
                        Sunday - Wednesday
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark">Location</a>
                        <a class="btn btn-success">Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <!-- FOOTER -->
    <footer class="py-5 container">
        <div class="row">
            <div class="col-lg-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus itaque saepe quaerat molestiae
                    voluptatum blanditiis nesciunt recusandae dolorem deserunt porro totam, ipsa tempore nihil rem at
                    laboriosam corrupti magnam.</p>
                <b>Contact:</b>
                <p>+1234567890</p>
                <b>Email</b>
                <p>admin@mail.com</p>
            </div>


            <div class="col-lg-8">
                <b>Office Jakarta</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quam labore autem quisquam harum dolor
                    itaque nisi. Tenetur, et cumque? In consequatur accusamus nulla assumenda libero ullam voluptates
                    commodi sit!</p>

                <b>Office Surabaya</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quam labore autem quisquam harum dolor
                    itaque nisi. Tenetur, et cumque? In consequatur accusamus nulla assumenda libero ullam voluptates
                    commodi sit!</p>

                <div class="d-flex justify-content-between">
                    <b>About us</b>

                    <b>Contact Us</b>

                    <b>Hire Us</b>
                </div>
            </div>
        </div>
        <hr />
        <div class="text-center">
            Copyright by Peduli Digital x Yes Tech : by Rico Arisandy
        </div>
    </footer>

    <script>
        /**
         * SCRIPT TO CHANGE HEADER BACKGROUND
         **/
        const header = document.querySelector('header');

        // Listen for the scroll event
        window.addEventListener('scroll', function () {
            // Check the scroll position
            const scrollPosition = window.scrollY;

            // Change the background color if scroll position is 100 or more
            if (scrollPosition >= 100) {
                header.style.backgroundColor = 'white'; // Change the color to your desired value
            } else {
                header.style.backgroundColor = 'transparent'; // Change the color to your desired value
            }
        });

        /**
         * SCRIPT TO SHOW MOBILE MENU
         **/
        const menu = document.getElementById('menu')

        function showMenu() {
            if (menu.classList.contains('show')) {
                menu.classList.remove("show")
                menu.classList.add("hide")
            } else {
                menu.classList.remove("hide")
                menu.classList.add("show")
            }
        }

    </script>
</body>

</html>
