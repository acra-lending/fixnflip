{{ Form::open(['action' => 'App\Http\Controllers\FormController@submit2', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    <div class="container mx-auto bpla-form shadow">
        <h1 class="mb-3">Multi-Family</h1>
        <h3 class="mb-4">Quote Request Form</h3>
        <p class="pb-0 mb-0">As a busy real estate investor, we value your time and the opportunity to compete for your business. Be advised pricing and leverage are determined by the borrower’s experience, project, credit and liquidity.</p>
        <p class="pt-2">Kindly, assist us in delivering our best pricing by filling out this form with as much detail as possible.</p>
        {{-- <ul class="pt-3">
            <li>SFR 1-4 Units; Multi-Family 5-29 Units. No mixed-use</li>
            <li>Loan Amounts: SFR 1-4 Units – up to $4 million; Multi-Family 5-29 Units – up to $7.5 million</li>
            <li>All loans are 12 months, interest only with 3 months minimum interest</li>
            <li>No rural properties</li>
            <li>Minimum “AS IS” value $75,000</li>
            <li>No interest charged on un-used rehab available for experience investors.</li>
        </ul> --}}
        <br/>
        <br/>
            {{-- <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="referredBy" name="referredBy" value="{{ old('referredBy') }}" required>
                            <option selected disabled value="">Select</option>
                            <option value="Rob Jennings">Rob Jennings</option>
                        </select>
                        <label class="referredBy">Referred by: <span class="required"> *</span></label>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="letter-banner">
                    <h4 class="text-center pt-2">Contact Information</h4>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Jane Smith" required>
                        <label for="name" class="form-label">Name<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                        <label for="email" class="form-label">Email<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="555-555-5555" required>
                        <label for="phone" class="form-label">Phone<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <label class="aeName2">Account Executive<span class="required"> *</span></label>
                    <select id="aeName2" name="aeName2" value="{{ old('aeName2') }}">
                        <option value=""></option>
                        @foreach($users as $user)
                        <option value="{{$user->email}}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Borrower Information -->
            <div class="row">
                <div class="letter-banner">
                    <h4 class="text-center pt-2">Borrower Information</h4>
                </div>
                <div class="col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="If entity or company own the Property, list here"><i class="fas fa-info-circle"></i></a>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="entityName" name="entityName" value="{{ old('entityName') }}" placeholder="ACME">
                        <label for="entityName">Entity Name</label>
                        <input type="text" id="ref" name="ref" value="{{ request('ref') }}" hidden>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="mailingAddress" name="mailingAddress" value="{{ old('mailingAddress') }}" placeholder="Street Address">
                        <label for="mailingAddress" class="form-label">Mailing Address/City/State</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="own" name="own" value="{{ old('own') }}">
                            <option selected value="N/A"></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label class="addSqFt">Own?</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="liquidity" name="liquidity" value="{{ old('liquidity') }}" placeholder="Liquidity">
                        <label for="liquidity" class="form-label">Liquidity</label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="netWorth" name="netWorth" value="{{ old('netWorth') }}" placeholder="Net Worth">
                        <label for="netWorth" class="form-label">Net Worth</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <p>List owners of either entity/company or Property</p>
                <p>1)</p>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="listName1" name="listName1" value="{{ old('listName1') }}" placeholder="John Doe">
                        <label for="listName1" class="form-label">Name</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 m-0 py-0">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ownership1" name="ownership1" value="{{ old('ownership1') }}" placeholder="Jane Doe">
                        <label for="ownership1" class="form-label">Ownership %</label>
                    </div>
                </div>
                <div class="col-sml-12 col-md-12 col-lg-5">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="personalResidence1" name="personalResidence1" value="{{ old('personalResidence1') }}" placeholder="J">
                        <label for="personalResidence1" class="form-label">Personal Residence City/State</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="own1" name="own1" value="{{ old('own1') }}">
                            <option selected value="N/A"></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label class="own?">Own?</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="liquidity1" name="liquidity1" value="{{ old('liquidity1') }}" placeholder="Liquidity">
                        <label for="liquidity1" class="form-label">Liquidity</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="netWorth1" name="netWorth1" value="{{ old('netWorth1') }}" placeholder="Net Worth">
                        <label for="netWorth1" class="form-label">Net Worth</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="creditScore1" name="creditScore1" value="{{ old('creditScore1') }}" placeholder="Net Worth">
                        <label for="creditScore1" class="form-label">Credit Score</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <p>2)</p>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="listName2" name="listName2" value="{{ old('listName2') }}" placeholder="John Doe">
                        <label for="listName2" class="form-label">Name</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 m-0 py-0">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ownership2" name="ownership2" value="{{ old('ownership2') }}" placeholder="Jane Doe">
                        <label for="ownership2" class="form-label">Ownership %</label>
                    </div>
                </div>
                <div class="col-sml-12 col-md-12 col-lg-5">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="personalResidence2" name="personalResidence2" value="{{ old('personalResidence2') }}" placeholder="J">
                        <label for="personalResidence2" class="form-label">Personal Residence City/State</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="own2" name="own2" value="{{ old('own2') }}">
                            <option selected value="N/A"></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label class="own?">Own?</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="liquidity2" name="liquidity2" value="{{ old('liquidity2') }}" placeholder="Liquidity">
                        <label for="liquidity2" class="form-label">Liquidity</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="netWorth2" name="netWorth2" value="{{ old('netWorth2') }}" placeholder="Net Worth">
                        <label for="netWorth2" class="form-label">Net Worth</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="creditScore2" name="creditScore2" value="{{ old('creditScore2') }}" placeholder="Net Worth">
                        <label for="creditScore2" class="form-label">Credit Score</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <p>3)</p>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="listName3" name="listName3" value="{{ old('listName3') }}" placeholder="John Doe">
                        <label for="listName3" class="form-label">Name</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 m-0 py-0">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ownership3" name="ownership3" value="{{ old('ownership3') }}" placeholder="Jane Doe">
                        <label for="ownership3" class="form-label">Ownership %</label>
                    </div>
                </div>
                <div class="col-sml-12 col-md-12 col-lg-5">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="personalResidence3" name="personalResidence3" value="{{ old('personalResidence3') }}" placeholder="J">
                        <label for="personalResidence3" class="form-label">Personal Residence City/State</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="own3" name="own3" value="{{ old('own3') }}">
                            <option selected value="N/A"></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label class="own?">Own?</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="liquidity3" name="liquidity3" value="{{ old('liquidity3') }}" placeholder="Liquidity">
                        <label for="liquidity3" class="form-label">Liquidity</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="netWorth3" name="netWorth3" value="{{ old('netWorth3') }}" placeholder="Net Worth">
                        <label for="netWorth3" class="form-label">Net Worth</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="creditScore3" name="creditScore3" value="{{ old('creditScore3') }}" placeholder="Net Worth">
                        <label for="creditScore3" class="form-label">Credit Score</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <label class="marketComparables">How many properties do they currenty own?</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="propertiesOwned" name="propertiesOwned" value="{{ old('propertiesOwned') }}" placeholder="">
                    </div>
                </div>
            </div>


            <!-- Subject Property Information -->
            <div class="row">
                <div class="letter-banner">
                    <h4 class="text-center pt-2">Subject Property Information</h4>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Street Address" required>
                        <label for="address" class="form-label">Address<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="address2" name="address2" value="{{ old('address2') }}" placeholder="Street Address Line 2">
                        <label for="address2" class="form-label">Address Line 2</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" placeholder="City" required>
                        <label for="city" class="form-label">City<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <select class="form-select" name="state" value="{{ old('state') }}" required>
                            <option selected disabled value=""> </option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                        <label for="state" class="form-label">State<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="zipcode" id="zipcode" value="{{ old('zipcode') }}" placeholder="ZIP" required>
                        <label for="zipcode" class="form-label">ZIP<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="totalUnits" name="totalUnits" value="{{ old('totalUnits') }}" placeholder="1-50">
                        <label for="totalUnits" class="form-label">Total # of Units</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="vacantUnits" name="vacantUnits" value="{{ old('vacantUnits') }}" placeholder="1-50">
                        <label for="vacantUnits" class="form-label"># of Vacant Units</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="occupancyPercentage" name="occupancyPercentage" value="{{ old('occupancyPercentage') }}" placeholder="1-50">
                        <label for="occupancyPercentage" class="form-label">Occupancy %</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="form-floating mb-5">
                        <select class="form-select" id="ownerOccupied" name="ownerOccupied" value="{{ old('ownerOccupied') }}">
                            <option selected value="N/A"></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label class="ownerOccupied">Does the owner occupy any portion of the property?</label>
                    </div>
                </div>
            </div>

            <!-- Loan Information -->
            <div class="row">
                <div class="letter-banner">
                    <h4 class="text-center pt-2">Loan Information</h4>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="requestedLoanAmount" name="requestedLoanAmount" value="{{ old('requestedLoanAmount') }}" placeholder="John Doe">
                        <label for="requestedLoanAmount" class="form-label">Requested Loan Amount</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ltv" name="ltv" value="{{ old('ltv') }}" placeholder="Jane Doe">
                        <label for="ltv" class="form-label">LTV</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="cltv" name="cltv" value="{{ old('cltv') }}" placeholder="J">
                        <label for="cltv" class="form-label">CLTV</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="estimatedValue" name="estimatedValue" value="{{ old('estimatedValue') }}" placeholder="John Doe">
                        <label for="estimatedValue" class="form-label">Estimated Value</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="purchasePrice" name="purchasePrice" value="{{ old('purchasePrice') }}" placeholder="Purchase Price">
                        <label for="purchasePrice" class="form-label">Purchase Price</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="Final credit score will be determined by lender credit pull"><i class="fas fa-info-circle"></i></a>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="creditScore" name="creditScore" value="{{ old('creditScore') }}" required>
                            <option selected value="N/A">Select</option>
                            <option value="600-619">600-619</option>
                            <option value="620-639">620-639</option>
                            <option value="640-659">640-659</option>
                            <option value="660-679">660-679</option>
                            <option value="680-699">680-699</option>
                            <option value="700-719">700-719</option>
                            <option value="720-739">720-739</option>
                            <option value="740-759">740-759</option>
                            <option value="760-779">760-779</option>
                            <option value="780-800">780-800</option>
                        </select>
                        <label class="creditScore">Estimated Fico Score<span class="required"> *</span></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="purpose" name="purpose" value="{{ old('purpose') }}" required>
                            <option selected value="N/A">Select</option>
                            <option value="Purchase">Purchase</option>
                            <option value="Rate And Term Refinance">Rate And Term Refinance</option>
                            <option value="Refinance Cash-Out">Refinance Cash-Out</option>
                        </select>
                        <label class="purpose">Loan Programs<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="estimatedProceeds" name="estimatedProceeds" value="{{ old('estimatedProceeds') }}" placeholder="John Doe">
                        <label for="estimatedProceeds" class="form-label">Estimated Proceeds</label>
                    </div>
                </div>
            </div>


            <!-- Annual Income -->
            <div class="row">
                <div class="letter-banner">
                    <h4 class="pt-2">Annual Income</h4>
                </div>
                <p>Please Select<span class="required"> *</span></p>
                <div class="col-sm-12 col-lg-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="annualIncome" id="currentYear" value="Current Year" required>
                        <label class="form-check-label" for="currentYear">
                            Current Year
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="currentMonths1" name="currentMonths1" value="{{ old('currentMonths1') }}" placeholder="Months">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <div class="form-check form-check-inline mb-5">
                        <input class="form-check-input" type="radio" name="annualIncome" id="t-12" value="T-12" required>
                        <label class="form-check-label" for="t-12">
                          T-12
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="rentalIncome" name="rentalIncome" value="{{ old('rentalIncome') }}" placeholder="John Doe">
                        <label for="rentalIncome" class="form-label">Rental Income Collected</label>

                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="otherIncome" name="otherIncome" value="{{ old('otherIncome') }}" placeholder="John Doe">
                        <label for="otherIncome" class="form-label">Other Income Collected</label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="totalIncome" name="totalIncome" value="{{ old('totalIncome') }}" placeholder="John Doe">
                        <label for="totalIncome" class="form-label">Total Income Collected</label>
                    </div>
                </div>
            </div>
            
            <!-- Annual Expenses -->
            <div class="row">
                <div class="letter-banner">
                    <h4 class="pt-2">Annual Expenses</h4>
                </div>
                <p>Please Select<span class="required"> *</span></p>
                <div class="col-sm-12 col-lg-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="annualExpenses" id="currentYear" value="Current Year" required>
                        <label class="form-check-label" for="currentYear">
                            Current Year
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="currentMonths2" name="currentMonths2" value="{{ old('currentMonths2') }}" placeholder="Months">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <div class="form-check form-check-inline mb-5">
                        <input class="form-check-input" type="radio" name="annualExpenses" id="t-12" value="T-12" required>
                        <label class="form-check-label" for="t-12">
                          T-12
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <p><em>Do not include one time capital expense items</em></p>
                <div class="col-md-6 col-12">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="realEstateTaxes" name="realEstateTaxes" value="{{ old('realEstateTaxes') }}" placeholder="John Doe" required>
                        <label for="realEstateTaxes" class="form-label">Real Estate Taxes<span class="required"> *</span></label>

                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="insurance" name="insurance" value="{{ old('insurance') }}" placeholder="John Doe" required>
                        <label for="insurance" class="form-label">Insurance<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="otherExpenses" name="otherExpenses" value="{{ old('otherExpenses') }}" placeholder="John Doe">
                        <label for="otherExpenses" class="form-label">Other Expenses</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-12 mb-4">
                    <label for="formFileMultiple" class="form-label">Please upload images, budgets and supporting documentation here (pdf,jpg,png,gif)Max Filesize: 29MB</label>
                    {{-- <input class="form-control" type="file" id="formFileMultiple" name="formFileMultiple" multiple> --}}
                    <div class="form-group">
                        {{ Form::file('attachment[]', array('multiple' => true, 'class' => 'form-control', 'accept' => 'pdf,jpeg,jpg,bmp,png,gif')) }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }} --}}
                    {{-- <div class="progress mt-3" hidden>
                        <div class="bar"></div>
                        <div class="percent">0%</div>
                    </div>
                    <div class="complete"></div> --}}
                </div>
            </div>
        </div>
{{ Form::close() }}