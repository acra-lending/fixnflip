<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KPPCHXS');</script>
  <!-- End Google Tag Manager -->
  @include('includes.head')
  {{-- @stack('includes.head') --}}
</head>

<body id="page-top">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPPCHXS"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

        @include('includes.navbar')

        <div class="container col-3 mt-4 pt-5" id="messages">    
            @include('includes.messages')
        </div>

        @yield('content')


        <footer class="main-footer">
            @include('includes.footer')
        </footer>

        @include('includes.scripts')
        @stack('custom-scripts')
</body> 
</html>