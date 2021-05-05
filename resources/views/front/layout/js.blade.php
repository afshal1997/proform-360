<script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/scrollax.min.js') }}"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>
<script src="{{ asset('assets/front/js/country-flags-dropdown.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
    });

    AOS.init();

    const contactForm = document.querySelector('#contactForm');
    contactForm.addEventListener('submit',e => {
        e.preventDefault();
        fetch(`{{route('contactform')}}`,{
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="token"]').getAttribute('content')
            },
            body: new FormData(contactForm)
        }).then(r => r.json()).then(data => {
            contactForm.reset();
            js_success(data.msg)
        }).catch(e => console.log(error));
    })

    const submitPackageForm = (evt, packageForm) => {
        evt.preventDefault();

        fetch(`{{ route('order.create', 1) }}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="token"]').getAttribute('content')
            },
            body: new FormData(packageForm)
        }).then(response => {
            if (response.ok) {
                return response.json();
            }

            throw new Error('Something went wrong. Please try again');
        })
        .then(data => {
            console.log(data, 'Done!');
        })
        .catch(error => {
            console.log(error);
        });
        
    };

</script>
