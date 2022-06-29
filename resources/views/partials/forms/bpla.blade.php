{{ Form::open(['action' => 'App\Http\Controllers\FormController@submit', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    <div class="container mx-auto bpla-form shadow">
        <h1 class="mb-3">Business Purpose Loan Analysis</h1>
        <h3 class="mb-4">Pre-Approval Form</h3>
        <p class="pb-0 mb-0">As a busy real estate investor, we value your time and the opportunity to compete for your business. Be advised pricing and leverage are determined by the borrower’s experience, project, credit and liquidity.</p>
        <p class="pt-2">Kindly, assist us in delivering our best pricing by filling out this form with as much detail as possible.</p>
        <ul class="pt-3">
            <li>SFR 1-4 Units; Multi-Family 5-29 Units. Mixed-use considered on a case-by-case basis</li>
            <li>Loan Amounts: SFR 1-4 Units – up to $4 million; Multi-Family 5-29 Units – up to $7.5 million</li>
            <li>All loans are 12 months, interest only with 3 months minimum interest</li>
            <li>No rural properties</li>
            <li>Minimum AS IS Value is $75,000 (minimum Purchase Price $75,000)</li>
            <li>No interest charged on un-used rehab available for experience investors.</li>
        </ul>
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
                <div class="col-sm-12 col-lg-4">
                    <label class="aeName">Account Executive<span class="required"> *</span></label>
                    <select id="aeName" name="aeName" value="{{ old('aeName') }}" required>
                        <option value=""></option>
                        @foreach($users as $user)
                        <option value="{{$user->email}}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                <div class="col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="All loans must close into an entity"><i class="fas fa-info-circle"></i></a>
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="entityName" name="entityName" value="{{ old('entityName') }}" placeholder="ACME">
                        <label for="entityName">Entity Name</label>
                        <input type="text" id="ref" name="ref" value="{{ request('ref') }}" hidden>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="Borrower = Sponsor"><i class="fas fa-info-circle"></i></a>
                </div>
                <div class="col-md-5 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="sponsorFirstName" name="sponsorFirstName" value="{{ old('sponsorFirstName') }}" placeholder="John Doe">
                        <label for="sponsorFirstName" class="form-label">Borrower First Name</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="sponsorLastName" name="sponsorLastName" value="{{ old('SponsorLastName') }}" placeholder="Jane Doe">
                        <label for="SponsorLastName" class="form-label">Borrower Last Name</label>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="sponsorMiddleInitial" name="sponsorMiddleInitial" value="{{ old('sponsorMiddleInitial') }}" placeholder="J">
                        <label for="sponsorMiddleInitial" class="form-label">MI</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-floating mb-5">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                        <label for="email" class="form-label">Email<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating mb-5">
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="555-555-5555" required>
                        <label for="phone" class="form-label">Phone<span class="required"> *</span></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="coSponsorFirstName" name="coSponsorFirstName" value="{{ old('coSponsorFirstName') }}" placeholder="John Doe">
                        <label for="coSponsorFirstName" class="form-label">Co-Borrower First Name</label>

                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="coSponsorLastName" name="coSponsorLastName" value="{{ old('coSponsorLastName') }}" placeholder="Jane Doe">
                        <label for="coSponsorLastName" class="form-label">Co-Borrower Last Name</label>
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="coSponsorMiddleInitial" name="coSponsorMiddleInitial" value="{{ old('coSponsorMiddleInitial') }}" placeholder="J">
                        <label for="coSponsorMiddleInitial" class="form-label">MI</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-floating mb-5">
                        <input type="email" class="form-control" id="email2" name="email2" value="{{ old('email2') }}" placeholder="name@example.com">
                        <label for="email2" class="form-label">Email</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating mb-5">
                        <input type="tel" class="form-control" id="phone2" name="phone2" value="{{ old('phone2') }}" placeholder="555-555-5555">
                        <label for="phone2" class="form-label">Phone</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="If applicable"><i class="fas fa-info-circle"></i></a>
                </div>
                <div class="col-md-4 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="brokerName" name="brokerName" value="{{ old('brokerName') }}" placeholder="John Doe">
                        <label for="brokerName" class="form-label">Broker Name</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="brokerEmail" name="brokerEmail" value="{{ old('brokerEmail') }}" placeholder="John Doe">
                        <label for="brokerEmail" class="form-label">Broker Email</label>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="brokerPhone" name="brokerPhone" value="{{ old('brokerPhone') }}" placeholder="John Doe">
                        <label for="brokerPhone" class="form-label">Broker Phone</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="brokerPoints" name="brokerPoints" value="{{ old('brokerPoints') }}" placeholder="John Doe">
                        <label for="brokerPoints" class="form-label">Broker Points</label>

                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="brokerProcessingFees" name="brokerProcessingFees" value="{{ old('brokerProcessingFees') }}" placeholder="John Doe">
                        <label for="brokerProcessingFees" class="form-label">Broker Processing Fees</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="We lend on residential properties 1-29 units. No mixed use."><i class="fas fa-info-circle"></i></a>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Street Address" required>
                        <label for="address" class="form-label">Subject Property Address<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="address2" name="address2" value="{{ old('address2') }}" placeholder="Street Address Line 2">
                        <label for="address2" class="form-label">Street Address Line 2</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" placeholder="City" required>
                        <label for="city" class="form-label">City<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" name="state" value="{{ old('state') }}" required>
                            <option selected disabled value="">Select</option>
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
                <div class="col-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="zipcode" id="zipcode" value="{{ old('zipcode') }}" placeholder="ZIP" required>
                        <label for="zipcode" class="form-label">ZIP<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="units" name="units" value="{{ old('units') }}" placeholder="1-50">
                        <label for="units" class="form-label">How many units? (1-29)</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="loanPrograms" name="loanPrograms" value="{{ old('loanPrograms') }}" required>
                            <option selected disabled value="">Select</option>
                            <option value="Purchase">Purchase</option>
                            <option value="Purchase With Rehab">Purchase With Rehab</option>
                            <option value="Rate And Term Refinance">Rate And Term Refinance</option>
                            <option value="Refinance With Rehab">Refinance With Rehab</option>
                            <option value="Refinance Cash-Out">Refinance Cash-Out</option>
                            <option value="Long Term Rental">Long Term Rental</option>
                        </select>
                        <label class="loanPrograms">Loan Programs<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="purchasePrice" name="purchasePrice" value="{{ old('purchasePrice') }}" placeholder="Purchase Price" required>
                        <label for="purchasePrice" class="form-label">Purchase Price<span class="required"> *</span></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="originalPurchaseDate" name="originalPurchaseDate" value="{{ old('originalPurchaseDate') }}" placeholder="Purchase Date">
                        <label for="originalPurchaseDate" class="form-label">Original Purchase Date</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="firstLien" name="firstLien" value="{{ old('firstLien') }}" placeholder="Purchase Price">
                        <label for="firstLien" class="form-label">First Current Lien</label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="secondLien" name="secondLien" value="{{ old('secondLien') }}" placeholder="Purchase Date">
                        <label for="secondLien" class="form-label">Second Current Lien (if applicable)</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="taxesOwed" name="taxesOwed" value="{{ old('taxesOwed') }}" placeholder="Purchase Date">
                        <label for="taxesOwed" class="form-label">Taxes Owed</label>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <label for="loanDetails" class="form-label">If Rental Property:</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="marketRent" name="marketRent" value="{{ old('marketRent') }}" placeholder="Purchase Price">
                        <label for="marketRent" class="form-label">Market Rent</label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="annualTaxes" name="annualTaxes" value="{{ old('annualTaxes') }}" placeholder="Purchase Price">
                        <label for="annualTaxes" class="form-label">Annual Taxes</label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="annualInsurance" name="annualInsurance" value="{{ old('annualInsurance') }}" placeholder="Purchase Price">
                        <label for="annualInsurance" class="form-label">Annual Insurance</label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="hoa" name="hoa" value="{{ old('hoa') }}" placeholder="HOA (if applicable)">
                        <label for="hoa" class="form-label">HOA (if applicable)</label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="other" name="other" value="{{ old('other') }}" placeholder="Purchase Price">
                        <label for="other" class="form-label">Other</label>
                    </div>
                </div>
            </div> --}}
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <label for="loanDetails" class="form-label">Loan Details:</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="Liquid assets help establish the stability of the borrower and may result in higher LTV's"><i class="fas fa-info-circle"></i></a>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="liquidity" name="liquidity" value="{{ old('liquidity') }}" placeholder="Borrower's Liquidity" required>
                        <label for="marketValue" class="form-label">Borrower's Liquidity<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="marketValue" name="marketValue" value="{{ old('marketValue') }}" placeholder="As Is/Current Market Value" required>
                        <label for="marketValue" class="form-label">"As Is"/Current Market Value<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="amountRequested" name="amountRequested" value="{{ old('amountRequested') }}" placeholder="Amount Requested">
                        <label for="amountRequested" class="form-label">Amount of Rehab Requested</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="The A.R.V. is a critical component used by the lender to determine pricing. Appraisers use the Sponsors rehab budget along with “like” completed projects to determine the A.R.V."><i class="fas fa-info-circle"></i></a>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="afterRepairValue" name="afterRepairValue" value="{{ old('afterRepairValue') }}" placeholder="After Repair Value">
                        <label for="afterRepairValue" class="form-label">After Repair Value (A.R.V.)</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="Lower LTV loans may receive lower interest rate and pricing"><i class="fas fa-info-circle"></i></a>
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="ltvRequested" name="ltvRequested" value="{{ old('ltvRequested') }}" placeholder="LTV Requested" required>
                        <label for="ltvRequested" class="form-label">LTV Requested (%)<span class="required"> *</span></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label class="marketComparables">Already ran market comparables?<span class="required"> *</span></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-5">
                        <select class="form-select" id="marketComparables" name="marketComparables" value="{{ old('marketComparables') }}" required>
                            <option selected value="N/A"></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-floating mb-5">
                        <select class="form-select" id="exitStrategy" name="exitStrategy" value="{{ old('exitStrategy') }}" required>
                            <option selected disabled value=""></option>
                            <option value="Sell">Sell</option>
                            <option value="Hold">Hold</option>
                        </select>
                        <label class="exitStrategy">Exit Strategy<span class="required"> *</span></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="Final credit score will be determined by lender credit pull"><i class="fas fa-info-circle"></i></a>
                    <div class="form-floating mb-5">
                        <select class="form-select" id="creditScore" name="creditScore" value="{{ old('creditScore') }}" required>
                            <option selected value="N/A"></option>
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
                <div class="col-12">
                    <a href="#!" data-bs-toggle="tooltip" data-bs-placement="right" title="Lender must be able to verify Sponsor or Sponsors entities to the properties listed or property will not qualify. Personal residences do not count as experience"><i class="fas fa-info-circle"></i></a>
                    <label for="realEstateExperience" class="form-label">Borrower's Real Estate Experience</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="propertiesSold" name="propertiesSold" value="{{ old('propertiesSold') }}" required>
                            <option selected value="N/A"></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10+">10+</option>
                        </select>
                        <label class="propertiesSold">Properties Sold in Last 36 Months<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating mb-5">
                        <select class="form-select" id="propertiesOwned" name="propertiesOwned" value="{{ old('propertiesOwned') }}" required>
                            <option selected value="N/A"></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10+">10+</option>
                        </select>
                        <label class="propertiesOwned">Properties Currently Owned (excl. Personal)<span class="required"> *</span></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-2">
                        <label for="scopeOfWork" class="form-label">Scope of Work / Additional Comments <a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="In a couple of sentences, please explain the overview of the project. (i.e., basic or high end fixtures, change in floor plan, etc.)"><i class="fas fa-info-circle"></i></a></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <textarea type="text" class="form-control" id="scopeOfWork" name="scopeOfWork" value="{{ old('scopeOfWork') }}" placeholder="Experience" style="height: 100px"></textarea>
                        <label for="scopeOfWork" class="form-label">Please provide a detailed written description of the rehab to be performed.</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="addSqFt" name="addSqFt" value="{{ old('addSqFt') }}" required>
                            <option selected value="N/A"></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label class="addSqFt">Are you adding Square Footage?<span class="required"> *</span></label>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-floating mb-5">
                        <input type="text" class="form-control" id="sqFt" name="sqFt" value="{{ old('sqFt') }}" placeholder="Square Feet">
                        <label for="sqFt" class="form-label">If Yes, how much?</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-12 mb-4">
                    <label for="formFileMultiple" class="form-label">Please upload images, budgets and supporting documentation here (pdf,jpg,png,gif)</label>
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