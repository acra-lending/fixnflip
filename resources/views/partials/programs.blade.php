<style>
      .card {
          height: 20rem;
          border: none;
          border-radius: 0;
          /* background-color: rgb(245, 245, 245); */
      }
      .card img {
          height: 70%;
      }
      .card-body:hover {
        /* border: 1px solid rgba(0, 0, 0, 0.125); */
        /* border-right: 1px solid rgba(0, 0, 0, 0.125); */
        box-shadow: 0 0.8rem 1rem rgba(0, 0, 0, 0.15);
        transform: translateY(-0.225rem); 
        transition: 200ms;
      }  
</style>
<section class="projects-section mb-5" id="programs">
  <div class="container-fluid">
      <!-- Project One Row-->
      <div class="card-group">
          <div class="card">
            <a href="/programs" style="text-decoration: none;">
            <div class="card-body justify-content-center">
              <img src="{{ asset('img/icons/purchase_loans.svg') }}" class="card-img-top mx-auto" alt="purchase-loans">
              <h5 class="card-title text-uppercase font-weight-bold text-center pt-3" style="color: var(--primary-color);">Purchase Loans</h5>
            </a>
            </div>
          </div>
          <div class="card">
            <a href="/programs" style="text-decoration: none;">
            <div class="card-body" style="background-color: #f0f0f0;">
              <img src="{{ asset('img/icons/purchase_rehab.svg') }}" class="card-img-top mx-auto" alt="purchase-rehab">
              <h5 class="card-title text-uppercase font-weight-bold text-center pt-3" style="color: var(--primary-color);">Purchase & Rehab</h5>
            </a>
            </div>
          </div>
          <div class="card">
            <a href="/programs" style="text-decoration: none;">
            <div class="card-body">
              <img src="{{ asset('img/icons/rate_term_refinance.svg') }}" class="card-img-top mx-auto" alt="rate-term-refinance">
              <h5 class="card-title text-uppercase font-weight-bold text-center pt-3" style="color: var(--primary-color);">Rate & Term Refinance</h5>
            </a>
            </div>
          </div>
          <div class="card">
            <a href="/programs" style="text-decoration: none;">
            <div class="card-body" style="background-color: #f0f0f0;">
              <img src="{{ asset('img/icons/refinance_rehab.svg') }}" class="card-img-top mx-auto" alt="refinance-rehab">
              <h5 class="card-title text-uppercase font-weight-bold text-center pt-3" style="color: var(--primary-color);">Refinance Rehab</h5>
            </a>
            </div>
          </div>
          <div class="card">
            <a href="/programs" style="text-decoration: none;">
              <div class="card-body">
                <img src="{{ asset('img/icons/refinance_cash_out.svg') }}" class="card-img-top mx-auto" alt="refinance-cash-out">
                <h5 class="card-title text-uppercase font-weight-bold text-center pt-3" style="color: var(--primary-color);">Refinance Cash Out</h5>
              </a>
              </div>
          </div>
      </div>
  </div>
</section>