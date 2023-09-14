<footer class="mt-auto bgfooter py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-around align-items-center">
                <div>
                    <span class="text-decoration-underline">{{ __('ui.social') }}</span><br>
                    <a class="footerRef mt-1" href=""><i class="bi bi-facebook"></i></a>
                    <a class="footerRef" href=""><i class="bi bi-whatsapp mx-2"></i></a>
                    <a class="footerRef" href=""><i class="bi bi-instagram"></i></a><br>
                    @if(auth()->user() && auth()->user()->role == "user")
                    <a class="footerRef" href="{{route('home', '#form')}}"><span>{{ __('ui.workWithUsForm') }}</span></a>
                    @endif
                </div>
                <div>
                    <h6 class="py-4 mb-0 fw-semibold">
                        <span class="fst-italic">Created by </span>
                        <span class="fw-bold text-decoration-underline text-warning">HeadHeartBody</span>
                        <span class="fst-italic"> team</span>
                    </h6>
                </div>
                <div>
                    <span class="text-decoration-underline">{{ __('ui.info') }}:</span><br>
                    <span><i class="bi bi-telephone"> cel +39 3201234567</i></span><br>
                    <span><i class="bi bi-envelope-at"><a class="text-decoration-none footerRef" href=""> headheartbody@info.it</a></i></span>

                </div>
            </div>

        </div>
    </div>
</footer>