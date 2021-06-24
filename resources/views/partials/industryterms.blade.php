<style>
    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 4.75rem;
        background-color: #f8f9fa; 
        padding: 1rem 0 0.5rem;
        z-index: 1000;
    }
    div.anchor {
    display: block;
    position: relative;
    top: -4.85rem;
    visibility: hidden;
}
</style>
<section class="projects-section bg-light py-5" id="setting">
    <div class="container">
        <div class="text-center">
            <h2 class="mx-auto mt-2 mb-2 pb-4">Industry Terms</h1>
        </div>
        <div class="text-center sticky">
                @include('partials.industryterms.letters')
        </div>
            @include('partials.industryterms.a')
            @include('partials.industryterms.b')
            @include('partials.industryterms.c')
            @include('partials.industryterms.d')
            @include('partials.industryterms.e')
            @include('partials.industryterms.f')
            @include('partials.industryterms.g')
            @include('partials.industryterms.h')
            @include('partials.industryterms.i')
            @include('partials.industryterms.j')
            @include('partials.industryterms.k')
    </div>
</section>