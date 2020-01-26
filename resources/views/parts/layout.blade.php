
@include('parts.header')

<div id="home">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="#" class="navbar-brand"><img src="img/nuno.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#course" class="nav-link">Course</a></li>
                <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#resources" class="nav-link">Resources</a></li>
                <li class="nav-item"><a href="#clients" class="nav-link">Clients</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contacts</a></li>
            </ul>
        </div>
    </nav>

    <!-- End Navigation -->

@include('parts.footer')
