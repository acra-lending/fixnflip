<style>
    div.anchor {
    display: block;
    position: relative;
    top: -7.85rem;
    visibility: hidden;
    }
    h4 {
        color: #fff;
    }
    .list-group {
        -webkit-box-shadow: 0px 0px 6px -1px rgba(0,51,161,0.85); 
        box-shadow: 0px 0px 6px -1px rgba(0,51,161,0.85);
    }
</style>
<section class="projects-section bg-light py-5" id="setting">
    <div class="container-fluid">
        {{-- <div class="text-center">
            <h2 class="mx-auto mt-2 mb-2 pb-4">Ratesheets</h1>
        </div> --}}
        <div class="container">
            @include('partials.ratesheets.index')
        </div>
    </div>
</section>