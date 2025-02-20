<div class="container-fluid px-5 d-none d-lg-block">
    <div class="row gx-5">
        <div class="col-lg-4 text-center py-3">
            <a href="https://www.google.com/maps/search/?q=Petrovaradin,+Novi+Sad" 
            target="_blank" class="map-link">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt custom-icon text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Our Office</h6>
                        <span>Petrovaradin, Novi Sad</span>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-4 text-center border-start border-end py-3">
            <a href="mailto:info@example.com?subject=Business%20Collaboration%20Proposal&body=Hello,%20I%20am%20interested%20..."
                class="map-link">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open custom-icon text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Email Us</h6>
                        <span>info@example.com</span>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-4 text-center py-3">
            <a href="tel:+0123456789" class="map-link">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate custom-icon text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Call Us</h6>
                        <span>+012 345 6789</span>
                    </div>

                </div>
            </a>
        </div>
    </div>
</div>

<!-- Navbar Start -->

<div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
    <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
        <a href="{{ route('index') }}" class="navbar-brand">
            <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>WEBUILD
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">All in Lists</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('contact.info') }}" class="dropdown-item">Contacts List</a>
                        <a href="{{ route('employees.index') }}" class="dropdown-item">Employees List</a>
                        <a href="{{ route('projects.index') }}" class="dropdown-item">Projects List</a>
                        <a href="{{ route('employee_projects.index') }}" class="dropdown-item">Employees vs Projects List</a>
                    </div>
                </div> 
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Go to</a>
                    <div class="dropdown-menu m-0">
                        <a href="#contact-list" class="dropdown-item">Contacts</a>
                        <a href="#employees" class="dropdown-item">Employees</a>
                        <a href="#projects" class="dropdown-item">Projects</a>
                        <a href="#employee_projects" class="dropdown-item">Employees vs Projects</a>
                    </div>
                </div>
              
                <a href="{{ route('index') }}#contact" class="nav-item nav-link last">Contact</a>
            </div>
        </div>
    </nav>
</div>


<!-- Navbar End -->

<style>
    html {
        scroll-behavior: smooth;
    }
</style>
