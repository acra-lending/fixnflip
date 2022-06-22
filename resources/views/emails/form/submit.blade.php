@component('mail::message')

# Fix & Flip Business Purpose Loan Analysis<br/>
<strong>Referred by:</strong> {{ $mail['referredBy'] }}<br/>

<hr/>

# Pre-Approval Form Details:

<strong>Entity Name:</strong> {{ $mail[0]['entityName'] }}

<strong>Borrower First Name:</strong> {{ $mail[0]['sponsorFirstName'] }}<br/>
<strong>Borrower Last Name:</strong> {{ $mail[0]['sponsorLastName'] }}<br/>
<strong>Borrower Middle Initial:</strong> {{ $mail[0]['sponsorMiddleInitial'] }}<br/>
<strong>Email:</strong> {{ $mail[0]['email'] }}<br/>
<strong>Phone:</strong> {{ $mail[0]['phone'] }}<br/> 

<strong>Co-Borrower First Name:</strong> {{ $mail[0]['coSponsorFirstName'] }}<br/>
<strong>Co-Borrower Last Name:</strong> {{ $mail[0]['coSponsorLastName'] }}<br/>
<strong>Co-Borrower Middle Initial:</strong> {{ $mail[0]['coSponsorMiddleInitial'] }}<br/>
<strong>Email:</strong> {{ $mail[0]['email2'] }}<br/>
<strong>Phone:</strong> {{ $mail[0]['phone2'] }}<br/> 

<strong>Broker Name:</strong> {{ $mail[0]['brokerName'] }}<br/>
<strong>Broker Email:</strong> {{ $mail[0]['brokerEmail'] }}<br/>
<strong>Broker Phone:</strong> {{ $mail[0]['brokerPhone'] }}<br/>
<strong>Broker Points:</strong> {{ $mail[0]['brokerPoints'] }}<br/>
<strong>Broker Processing Fees:</strong> ${{ $mail[0]['brokerProcessingFees'] }}<br/>

<hr/>

# Subject Property Address:

{{ $mail[0]['address'] }}<br/> 
{{ $mail[0]['address2'] }}<br/>
{{ $mail[0]['city'] }}, {{ $mail[0]['state'] }} {{ $mail[0]['zipcode'] }}<br/>

<strong>Number of units:</strong> {{ $mail[0]['units'] }}<br/>

<hr/>

<strong>Loan Program:</strong> {{ $mail[0]['loanPrograms'] }}<br/>

<strong>Purchase Price:</strong> ${{ $mail[0]['purchasePrice'] }}<br/>

<strong>Original Purchase Date:</strong> {{ $mail[0]['originalPurchaseDate'] }}<br/>

<strong>First Lien:</strong> ${{ $mail[0]['firstLien'] }}<br/>

<strong>Second Lien:</strong> ${{ $mail[0]['secondLien'] }}<br/>

<strong>Taxes Owed:</strong> ${{ $mail[0]['taxesOwed'] }}<br/>

<hr/>

{{-- # If Rental Property:

<strong>Market Rent:</strong> ${{ $mail[0]['marketRent'] }}<br/>

<strong>Annual Taxes:</strong> ${{ $mail[0]['annualTaxes'] }}<br/>

<strong>Annual Insurance:</strong> ${{ $mail[0]['annualInsurance'] }}<br/>

<strong>HOA (if applicable):</strong> ${{ $mail[0]['hoa'] }}<br/>

<strong>Other:</strong> ${{ $mail[0]['other'] }}<br/>

<hr/> --}}

# Loan Details:

<strong>Borrower's Liquidity:</strong> ${{ $mail[0]['liquidity'] }}<br/>

<strong>As Is / Current Market Value:</strong> ${{ $mail[0]['marketValue'] }}<br/>

<strong>Amount of Rehab Requested:</strong> ${{ $mail[0]['amountRequested'] }}<br/>

<strong>After Repair Value:</strong> ${{ $mail[0]['afterRepairValue'] }}<br/>

<strong>LTV Requested (%):</strong> {{ $mail[0]['ltvRequested'] }}<br/>

<strong>Already ran market comparables?</strong> {{ $mail[0]['marketComparables'] }}<br/>

<strong>Exit Strategy:</strong> {{ $mail[0]['exitStrategy'] }}<br/>

<strong>Estimated FICO Score:</strong> {{ $mail[0]['creditScore'] }}<br/>

<hr/>

# Borrower's Real Estate Experience:

<strong>Properties Sold in Last 36 Months:</strong> {{ $mail[0]['propertiesSold'] }}<br/>

<strong>Properties Currently Owned:</strong> {{ $mail[0]['propertiesOwned'] }}<br/>

<strong>Scope of Work:</strong> 
{{ $mail[0]['scopeOfWork'] }}<br/>

<strong>Adding Square Footage?</strong> {{ $mail[0]['addSqFt'] }}<br/>
<strong>How much?</strong> {{ $mail[0]['sqFt'] }}<br/>

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
