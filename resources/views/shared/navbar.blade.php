<!-- header section start -->
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="logo"><a href="#"><img src="images/logo.png" style="width: 150px;"></a></div>
        </div>
        <div class="col-sm-9">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="index.html">Home</a>
                        <a class="nav-item nav-link" href="collection.html">Our collection</a>
                        <a style="cursor: pointer" class="nav-item nav-link"  data-toggle="modal" data-target="#contact">Contact</a>
                        <a style="cursor: pointer" class="nav-item nav-link"  data-toggle="modal" data-target="#login">Login</a>
                        <a style="cursor: pointer" class="nav-item nav-link"  data-toggle="modal" data-target="#sign_up">Sign up</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

@include('shared.login')
@include('shared.sign_up')
@include('shared.contact')
<!-- header section end -->
