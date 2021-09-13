<style>
  #sticky {
    position: sticky;
    position: -webkit-sticky;
    background: var(--primary-color);
    width: 200px;
    height: 100px;
    top: 135px;
    display: flex;
    margin-bottom: -150px;
    justify-content: center;
    align-items: center;
    box-shadow: 0 0 6px #000;
    color: #fff;
    border-radius: 0.5rem 0 0 0.5rem;
    z-index: 9999;
  }
  .dropdown-menu {
    animation-duration: 200ms;
  }
  </style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav" style="z-index: 99999;">
    <div class="container-fluid" style="width: 80%">
        <a class="navbar-brand" href="/">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About
                    </a>
                    <div class="dropdown-menu animated zoomIn" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/overview">Overview</a>
                      <a class="dropdown-item" href="/team">Our Team</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Programs
                    </a>
                    <div class="dropdown-menu animated zoomIn" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/programs">Purchase Loans</a>
                      <a class="dropdown-item" href="/programs#rehab">Purchase & Rehab</a>
                      <a class="dropdown-item" href="/programs#refinance">Rate & Term Refinance</a>
                      <a class="dropdown-item" href="/programs#refinance">Refinance Rehab</a>
                      <a class="dropdown-item" href="/programs#refinance">Refinance Cash Out</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      What To Expect
                    </a>
                    <div class="dropdown-menu animated zoomIn" aria-labelledby="navbarDropdown">
                      {{-- <a class="dropdown-item" href="#">Guidelines</a> --}}
                      <a class="dropdown-item" href="/expect">Setting Expectations</a>
                      <a class="dropdown-item" href="/process">Our Process</a>
                      <a class="dropdown-item" href="/industryterms">Industry Terms</a>
                    </div>
                </li>
                {{-- <li class="nav-item"><a class="nav-link" href="#programs">Programs</a></li> --}}
                {{-- <li class="nav-item"><a class="nav-link" href="#about">About</a></li> --}}

                {{-- <li class="nav-item"><a class="nav-link" href="#setting">Setting Expectations</a></li> --}}
                <li class="nav-item"><a class="nav-link" href="/apply">Get Pre-Approved</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                {{-- <li class="nav-item"><a class=" href="#login"><button class="btn btn-primary pb-1 pt-2" type="submit" style="margin-top: 1.7rem; margin-bottom: 1rem;">Login</button></a></li> --}}
            </ul>
        </div>
    </div>
</nav>
<div class="text-center" id="sticky" style="float: right;">
  <a style="text-decoration: none; color: #fff;" href="tel:8888007661"><p style="font-size: 1.5rem; padding: 0.85rem 0.55rem 0 0.55rem;">Call Us Today<br>(888) 800-7661</p></a>
</div>