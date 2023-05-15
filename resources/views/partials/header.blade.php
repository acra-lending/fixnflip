<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto mt-5 text-uppercase">PREMIER BUSINESS PURPOSE LOANS FOR REAL ESTATE INVESTORS</h1>
            <h2 class="text-white mx-auto mt-4 mb-5 pt-2">Simple Fix & Flip Solutions</h2>
            <a class="btn btn-primary js-scroll-trigger" href="/apply">Get Approved</a>
            <a class="btn btn-primary" data-toggle="modal" data-target=".modal">Bank Statement Analysis</a>
        </div>
        <div class="modal" style="margin-top: 250px;" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="display: none;">      
      </div>
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <h3 class="modal-title" style="text-align: center; margin-bottom: 20px;">Bank Statement Analysis</h3>
      <div class="container" style="display: flex; flex-wrap: wrap; box-sizing: border-box;">
        <div style="flex-basis: calc(100%/2); padding-right: 15px;">
          <div class="info">
            <div class="bsIncome">
              <h5 class="pre" style="color: #3c4858; font-weight: 700;">Bank Statement Income Pre-Screen</h5>
              <div class="analysis">
                <p style="color: #999;">We will review and provide a Bank Statement Analysis prior to submission.</p>
              </div>
            </div>
          </div>
          <div class="expedite">
            <div class="setup">
              <h5 class="review" style="color: #3c4858; font-weight: 700;">Expedite Setup and Review</h5>
              <div class="income">
                <p style="color: #999;">Understand income used for qualifying and expedite the setup and UW review process.</p>
              </div>
            </div>
          </div>
        </div>
        <div style="flex-basis: calc(100%/2);"> 
          <div class="frmContainer" style="position: relative; padding-left: 30px; padding-right: 15px;">
            <div>
              <div style="width: auto;">
                <div>
                  <!-- Form -->
                  
                  {{ Form::open(['action' => 'App\Http\Controllers\FrmController@submit', 'method' => 'POST']) }}
                              <!-- Form inputs -->
                              <div class="form-group">
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required><br>
                                  <input type="text" class="form-control" id="company" name="company" placeholder="Your Company" required><br>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required><br>
                                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required><br>
                                  <!-- <a class="btn btn-primary">Get Started</a> -->
                                  <button type="submit" class="btn btn-primary">Get Started</button>
                              </div>

                              {{ Form::close()}}
                </div>
              </div>          
            </div>
          </div> 
        </div>            
      </div>
      </div>
    </div>
  </div>
</div>
</header>
