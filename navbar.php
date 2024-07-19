<style>
    .nav-item{
        font-size: 17px;
    }

    .navbar-toggler-icon{
        padding-left: 900px;
    }
.navbar-brand2 {
    position: absolute;
    top:-10px;
    z-index:1000;
}

.navbar-brand .name {
    font-size: 1em;
    color: #ccc;
}

.navbar-logo {
    width: auto;
    height: 120px;
}

.navbar-toggler-icon {
    color: #f37d21;
    font-size: 1.5em;
}

.navbar-nav .nav-link {
    color: white;
    margin-right: 1.1em;
}

.navbar-nav .nav-link.active {
    color: #f37d21;
    border-radius: 5px;
}

.navbar-nav .nav-item:hover .nav-link {
    background-color: #444;
    border-radius: 5px;
}
</style>

<a class="navbar-brand2" id="navbar-brand1" href="index.php">
        <img src="childs_image\SHIVOMTECHNOLOGIESgreyscale-01.png" alt="logo" class="navbar-logo" />
</a>
<nav class="navbar navbar-expand-lg navbar-inverse bg-black">
    <div class="container-fluid">
    <div>
        <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">=</span>
        </button>
    </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About-us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Gallary.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




<script>
    $(document).ready(function() {
        var path = window.location.pathname.split("/").pop();

        $('.navbar-nav a').each(function() {
            var href = $(this).attr('href');
            
            if (path === href) {
                $(this).addClass('active'); 
            } else {
                $(this).removeClass('active'); 
            }
        });
    });
</script>

