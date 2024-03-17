<?php include("header.php"); ?>
<section class="badan">
    <h1 class="ma">Contact me</h1>
    <!-- <img src="foto.jpg" class="img"/>  -->

    <div class="container">
        <form action="POST" class="form-control blur bg-transparent" aria-required="true">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@gmail.com</span>
            </div>

            <div class="input-group">
                <span class="input-group-text">Message</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <div class="d-grid gap-2">
                <a role="button" href="#" class="btn btn-warning">Send</a>
            </div>
        </form>

    </div>
</section>

<?php include_once("footer.php"); ?>