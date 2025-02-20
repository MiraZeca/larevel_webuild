<!-- Appointment Start -->

<section id="contact">

    <div class="container-fluid py-6 px-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span>
                    </h1>
                </div>
                <p class="mb-5">Nonumy ipsum amet tempor takimata vero ea elitr. Diam diam ut et eos duo duo sed.
                    Lorem
                    elitr sadipscing eos et ut et stet justo, sit dolore et voluptua labore. Ipsum erat et ea ipsum
                    magna
                    sadipscing lorem. Sit lorem sea sanctus eos. Sanctus sit tempor dolores ipsum stet justo sit
                    erat ea,
                    sed diam sanctus takimata sit. Et at voluptua amet erat justo amet ea ipsum eos, eirmod accusam
                    sea sed
                    ipsum kasd ut.</p>
                <a class="btn btn-primary py-3 px-5" href="#">Get A Quote</a>
            </div>
            <div class="col-lg-8">
                <div class="bg-light text-center p-5">

                    <form id="contactForm" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

             
                        <!-- Polja forme -->
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control border-0"
                                        placeholder="Your Name" style="height: 55px;" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control border-0"
                                        placeholder="Your Email" style="height: 55px;" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control border-0"
                                        placeholder="Subject" style="height: 55px;" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="7" class="form-control border-0" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                        <div id="errorMessages"></div>
                        <div id="successMessage"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Appointment End -->

<script>
$(document).ready(function() {
        $("#contactForm").submit(function(event) {
            event.preventDefault(); // Sprečava klasično slanje forme

            $.ajax({
                url: $(this).attr("action"),
                method: $(this).attr("method"),
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        $("#contactForm")[0].reset(); // Reset forme
                        $("#successMessage").html('<div class="alert alert-success">' +
                            response.success + '</div>');
                    }
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorList = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function(key, value) {
                        errorList += '<li>' + value + '</li>';
                    });
                    errorList += '</ul></div>';
                    $("#errorMessages").html(errorList);
                }
            });
        });
    });
</script>

