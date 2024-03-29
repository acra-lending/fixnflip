<style>
    /* .progress { position:relative; width:100%; background-color: var(--gray-color); height: 20px; }
    .bar { background-color: var(--primary-color); width:0%; height:40px; }
    .percent { position:absolute; display:inline-block; left:50%; top:50%; color: #fff;} */
    h4 {
        color: #fff;
    }
</style>
<div class="container">
    
    <div class="accordion accordion-flush py-5" id="accordionExample">
        {{-- <h3>Please select</h3> --}}
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Business Purpose Loan Analysis - Apply here for short-term (12-24 months) Fix and Flip/Bridge Loans.
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              @include('partials.forms.bpla')
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Multi-Family Quote Request - Apply here for Multi-Family long term financing.
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                @include('partials.forms.mf')
            </div>
          </div>
        </div>
    </div>
</div>
@push('custom-scripts')
<!-- Type Select -->
<script src="js/typeahead.js?ver=1.0.0"></script>
<script src="js/filesize.js?ver=0.1"></script>
@endpush
