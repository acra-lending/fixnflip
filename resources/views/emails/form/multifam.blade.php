@component('mail::message')

# Fix & Flip Multi-Family Quote Request Form<br/>
<strong>Date:</strong> {{ date('m/d/Y') }}<br/>

<strong>Referred by:</strong> {{ $mail['referredBy'] }}<br/>

<hr/>

# Contact Information:

<strong>Name:</strong> {{ $mail[0]['name'] }}<br/>
<strong>Email:</strong> {{ $mail[0]['email'] }}<br/>
<strong>Phone:</strong> {{ $mail[0]['phone'] }}<br/>

<hr/>

# Borrower Information:

<strong>Entity Name:</strong> {{ $mail[0]['entityName'] }}<br/>
<strong>Mailing Address/City/State:</strong> {{ $mail[0]['mailingAddress'] }}<br/>
{{-- <strong>Own?:</strong> {{ $mail[0]['own'] }}<br/> --}}
<strong>Liquidity:</strong> {{ $mail[0]['liquidity'] }}<br/>
<strong>Net Worth:</strong> {{ $mail[0]['netWorth'] }}<br/>

#### Entity/Company or Properties:

1. <strong>Entity/Company/Property:</strong> {{ $mail[0]['listName1'] }}<br/>
<strong>Ownership %:</strong> {{ $mail[0]['ownership1'] }}<br/>
<strong>Peronsal Residence City/State:</strong> {{ $mail[0]['personalResidence1'] }}<br/>
{{-- <strong>Own?:</strong> {{ $mail[0]['own1'] }}<br/> --}}
<strong>Liquidity:</strong> {{ $mail[0]['liquidity1'] }}<br/> 
<strong>Net Worth:</strong> {{ $mail[0]['netWorth1'] }}<br/> 
<strong>Credit Score:</strong> {{ $mail[0]['creditScore1'] }}<br/> 


2. <strong>Entity/Company/Property:</strong> {{ $mail[0]['listName2'] }}<br/>
<strong>Ownership %:</strong> {{ $mail[0]['ownership2'] }}<br/>
<strong>Peronsal Residence City/State:</strong> {{ $mail[0]['personalResidence2'] }}<br/>
{{-- <strong>Own?:</strong> {{ $mail[0]['own2'] }}<br/> --}}
<strong>Liquidity:</strong> {{ $mail[0]['liquidity2'] }}<br/> 
<strong>Net Worth:</strong> {{ $mail[0]['netWorth2'] }}<br/> 
<strong>Credit Score:</strong> {{ $mail[0]['creditScore2'] }}<br/> 


3. <strong>Entity/Company/Property:</strong> {{ $mail[0]['listName3'] }}<br/>
<strong>Ownership %:</strong> {{ $mail[0]['ownership3'] }}<br/>
<strong>Peronsal Residence City/State:</strong> {{ $mail[0]['personalResidence3'] }}<br/>
{{-- <strong>Own?:</strong> {{ $mail[0]['own3'] }}<br/> --}}
<strong>Liquidity:</strong> {{ $mail[0]['liquidity3'] }}<br/> 
<strong>Net Worth:</strong> {{ $mail[0]['netWorth3'] }}<br/> 
<strong>Credit Score:</strong> {{ $mail[0]['creditScore3'] }}<br/> 

<strong>How many properties do they currently own?:</strong> {{ $mail[0]['propertiesOwned'] }}<br/> 

<hr/>

# Subject Property Information:

{{ $mail[0]['address'] }}<br/> 
{{ $mail[0]['address2'] }}<br/>
{{ $mail[0]['city'] }}, {{ $mail[0]['state'] }} {{ $mail[0]['zipcode'] }}<br/>

<strong>Total Number of Units:</strong> {{ $mail[0]['totalUnits'] }}<br/>
<strong>Number of Vacant Units:</strong> {{ $mail[0]['vacantUnits'] }}<br/>
<strong>Occupancy %:</strong> {{ $mail[0]['occupancyPercentage'] }}<br/>
<strong>Does the owner occupy any portion of the property?:</strong> {{ $mail[0]['ownerOccupied'] }}<br/>

<hr/>

# Borrower Information:

<strong>Requested Loan Amount:</strong> {{ $mail[0]['requestedLoanAmount'] }}<br/>
<strong>LTV:</strong> {{ $mail[0]['ltv'] }}<br/>
<strong>CLTV:</strong> {{ $mail[0]['cltv'] }}<br/>

<strong>Purpose:</strong> {{ $mail[0]['purpose'] }}<br/>
@if($mail[0]['purpose'] == 'Rate And Term Refinance' || $mail[0]['purpose'] == 'Refinance Cash-Out')
<strong>Estimated Value:</strong> {{ $mail[0]['estimatedValue'] }}<br/>
@endif
@if($mail[0]['purpose'] == 'Purchase')
<strong>Purchase Price:</strong> {{ $mail[0]['purchasePrice'] }}<br/>
@endif

<strong>FICO:</strong> {{ $mail[0]['creditScore'] }}<br/>
<strong>Estimated Proceeds:</strong> {{ $mail[0]['estimatedProceeds'] }}<br/>

<hr/>

# Annual Income

{{ $mail[0]['currentMonths1'] }} Months<br/>
<strong>Rental Income Collected:</strong> {{ $mail[0]['rentalIncome'] }}<br/>
<strong>Other Income Collected:</strong> {{ $mail[0]['otherIncome'] }}<br/>
<strong>Total Income Collected:</strong> {{ $mail[0]['totalIncome'] }}<br/>

# Annual Expenses

{{ $mail[0]['currentMonths2'] }} Months<br/>
<strong>Real Estate Taxes:</strong> {{ $mail[0]['realEstateTaxes'] }}<br/>
<strong>Insurance:</strong> {{ $mail[0]['insurance'] }}<br/>
<strong>Other Expenses:</strong> {{ $mail[0]['otherExpenses'] }}<br/>

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
