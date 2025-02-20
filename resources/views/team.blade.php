<!-- Team Start -->
<section id="team">
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">We Are <span class="text-primary">Professional & Expert</span> Workers</h1>
        </div>
        <div class="row g-5">
            @foreach ($employees as $employee)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/team-1.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text-uppercase">{{ $employee->first_name }} {{ $employee->last_name }}</h4>
                            <span>{{ $employee->position }}</span>
                            
                            @if ($employee->projects->isNotEmpty())
                                <p><strong>Current Project:</strong> {{ $employee->projects->first()->name }}</p>
                                
                                <!-- Read More Button -->
                                <button class="btn btn-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#projects-{{ $employee->id }}">
                                    Read More
                                </button>

                                <!-- Dropdown for additional projects -->
                                <div class="collapse mt-2" id="projects-{{ $employee->id }}">
                                    <ul class="list-group">
                                        @foreach ($employee->projects as $project)
                                            <li class="list-group-item">
                                                {{ $project->name }} ({{ $project->pivot->currently_working ? 'Currently Working' : 'Completed' }})
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <p>No projects assigned</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Team End -->

