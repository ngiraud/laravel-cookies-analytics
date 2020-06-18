@if(config('analytics.google.enabled') === true)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('analytics.google.id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', '{{ config('analytics.google.id') }}');
    </script>
@endif

@if(config('analytics.cookies.enabled') === true)
    <script>
        window.cookieSettings = {!! \NGiraud\CookiesAnalytics\Cookies::make()->toJson() !!}
    </script>
@endif
