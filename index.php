<?php
require 'include folder/header.php';
?>

<header>
    <navbar class="nav">
        <!-- <img src="" alt="logo"> -->
        <h2 class="span-color">Gandoki</h2>
        <nav-list>
            <li><a href="">HOME</a></li>
            <li><a href="">ABOUT ME</a></li>
            <li><a href="">SKILLS</a></li>
            <li><a href="">CONTACT</a></li>
        </nav-list>
    </navbar>
</header>
<!-- <hr class="text-light"> -->

    <div class="container w-100">
        <div class="content w-50">
        <h1 class="creative">CREATIVE UI <br><span>DESIGNER</span> <br> BACKEND WEB DEVELOPER</h1>
        <h1 class="creative"> <br><span></span></h1>
        </div>


        <div class="content_image w-50 d-flex justify-content-center">
            <img src="man 2.png" alt="" width="400">
        </div>

    </div>

    <hr class="text-light">
    
<div class="about_me">
    <div class="about justify-content-center text-light">
        <h3>
            about <span class="span-color">me</span>
        </h3><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium assumenda aliquid sint sunt laborum, molestias distinctio labore eius excepturi porro, deleniti iure quisquam. Dolorem ad adipisci labore aliquid neque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium assumenda aliquid sint sunt laborum, molestias distinctio labore eius excepturi porro, deleniti iure quisquam. Dolorem ad adipisci labore aliquid neque.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium assumenda aliquid sint sunt laborum, molestias distinctio labore eius excepturi porro, deleniti iure quisquam. Dolorem ad adipisci labore aliquid neque.</p>
    </div>

    <div class="about_section_image w-50 d-flex justify-content-center">
    <img src="man.png" alt="">
    </div>
</div>


<div class="cate">
    <div class="category">
        <h3 class="text-light">My recent<span class="span-color"> works</span></h3>
        <button class="categories">All</button>
        <button class="categories">UI/UX</button>
        <button class="categories">WEB DESIGN</button>

        <!-- <div class="card">
            <div class="card-body d-flex justify-content-around">
                <img src="man.png" alt="">  
                <img src="man.png" alt="">  
                <img src="man.png" alt="">  
            </div>
        </div> -->
        
        <div class="card">
            <div class="card-body d-flex justify-content-around">
            <img src="man.png" alt="">
            <img src="man.png" alt="">
            <img src="man.png" alt="">
            </div>
        </div>

    </div>



</div>

<hr class="text-light">

<div class="contact d-flex justify-content-around align-items-center">
<div class="contact_content">
    <h3 class="text-light mb-4">GOT A PROJECT IN <span class="span-color">MIND</span></h3>
    <img src="man 2.png" alt="">
</div>

<div class="card my-5" style="width: 40rem;">
    <div class="card-body">

        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text text-secondary">We'll never share your email with anyone else.</div>
            </div>
            <label for="" class="form-label text-light">Message</label>
            <textarea name="" id="" cols="87" rows="10" class="rounded"></textarea>
            <button type="submit" class="btn btn-primary my-3 w-100">Send Message</button>
        </form>
    </div>
</div>
</div>

</main>
<?php
require 'include folder/footer.php';
?>