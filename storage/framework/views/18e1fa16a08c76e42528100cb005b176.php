<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soda</title>
    <link rel="icon" type="image" href="<?php echo e(asset('images/soda_logo.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('styles/styles.css')); ?>" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar flex js-navbar">
        <ul>
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('shop')); ?>">Shop</a></li>
            <li><a href="<?php echo e(route('checkout')); ?>">Checkout</a></li>
            <li><a href="<?php echo e(route('productview')); ?>">Product View</a></li>
            <li><a href="<?php echo e(route('shophome')); ?>">Shop Review</a></li>
            <li><a href="<?php echo e(route('payment')); ?>">Payment</a></li>
            <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
        </ul>
    </nav>

    <main class="content-container">
        <section class="flex section one-container container">
            <div class="section-row flex one one-text">
                <h1 class="bold font-large">Crafting Stories <br></h1>
                <span class="one-h1-2 bold font-large">Building Dreams</span>
                <p class="font-subtext regular one-subheading">
                    Bring your ideas to life with creative design and smooth development. From responsive websites to custom solutions, we create experiences that engage and inspire.
                </p>
                <a href="<?php echo e(route('shophome')); ?>"><button class="one-cta light-cta">Check Out My Creations</button></a>
            </div>
            <div class="divider-large"></div>
        </section>

        <section class="flex section two-container container">
            <div class="section-row two flex">
                <div class="two-text">
                    <h1 class="two-header font-headers">Welcome to My World</h1>
                    <p class="font-text regular">
                        Hi, I’m Oluwaseun Ajiboye, a passionate creator and designer. 
                        This is where my journey unfolds—a story of growth, creativity, and boundless exploration.
                    </p>
                    <br>
                    <p class="font-text regular">
                        From crafting impactful designs to coding my first application, every chapter in my life reflects a leap toward something greater. 
                        I believe life isn’t just about reaching destinations; it’s about the adventures, lessons, and connections we make along the way.
                    </p>
                    <br>
                    <p class="font-text regular">
                        This is my story—a blend of technology, design, and a deep love for innovation. 
                        Join me as I continue to learn, create, and push the boundaries of possibility.
                    </p>
                    <br><br>
                    <p class="font-medium slightly-bold welcome-dj">
                        Welcome to Oluwaseun's Journey...
                    </p>
                    <a href="<?php echo e(route('shop')); ?>"><button class="two-cta light-cta">Explore my Journey</button></a>
                </div>
                <img class="two-img" src="<?php echo e(asset('images/young-handsome-african-man-with-crossed-arms-blue-wall.png')); ?>" alt="">
            </div>
        </section>

        <section class="flex section three-container container">
            <!-- Additional content goes here -->
        </section>
    </main>

    <footer class="flex js-footer">
        <!-- Footer content -->
    </footer>

    <script type="module" src="<?php echo e(asset('scripts/home.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\owner\Desktop\Bukola\sodaStore\sodastore-laravel\resources\views/index.blade.php ENDPATH**/ ?>