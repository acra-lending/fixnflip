@component('mail::message')

# Fix N Flip Business Purpose Loan Analysis<br/>
<strong>Referred by:</strong> {{ $mail['referredBy'] }}<br/>

<hr/>

# Pre-Approval Form Details:

<strong>Entity Name:</strong> {{ $mail['entityName'] }}

<strong>Sponsor/Borrower First Name:</strong> {{ $mail['sponsorFirstName'] }}<br/>
<strong>Sponsor/Borrower Last Name:</strong> {{ $mail['sponsorLastName'] }}<br/>
<strong>Sponsor/Borrower Name:</strong> {{ $mail['sponsorMiddleInitial'] }}<br/>
<strong>Email:</strong> {{ $mail['email'] }}<br/>
<strong>Phone:</strong> {{ $mail['phone'] }}<br/> 

<strong>Co-Sponsor/Co-Borrower Name:</strong> {{ $mail['coSponsorFirstName'] }}<br/>
<strong>Co-Sponsor/Co-Borrower Name:</strong> {{ $mail['coSponsorLastName'] }}<br/>
<strong>Co-Sponsor/Co-Borrower Name:</strong> {{ $mail['coSponsorMiddleInitial'] }}<br/>
<strong>Email:</strong> {{ $mail['email2'] }}<br/>
<strong>Phone:</strong> {{ $mail['phone2'] }}<br/> 

<strong>Broker Name:</strong> {{ $mail['brokerName'] }}<br/>
<strong>Broker Email:</strong> {{ $mail['brokerEmail'] }}<br/>
<strong>Broker Phone:</strong> {{ $mail['brokerPhone'] }}<br/>

<hr/>

# Subject Property Address:

{{ $mail['address'] }}<br/> 
{{ $mail['address2'] }}<br/>
{{ $mail['city'] }}, {{ $mail['state'] }} {{ $mail['zipcode'] }}<br/>

<strong>Number of units:</strong> {{ $mail['units'] }}<br/>

<hr/>

<strong>Loan Program:</strong> {{ $mail['loanPrograms'] }}<br/>

<strong>Purchase Price:</strong> ${{ $mail['purchasePrice'] }}<br/>

<strong>Original Purchase Date:</strong> {{ $mail['originalPurchaseDate'] }}<br/>

<strong>First Lien:</strong> ${{ $mail['firstLien'] }}<br/>

<strong>Second Lien:</strong> ${{ $mail['secondLien'] }}<br/>

<strong>Taxes Owed:</strong> ${{ $mail['taxesOwed'] }}<br/>

<hr/>

# If Rental Property:

<strong>Market Rent:</strong> ${{ $mail['marketRent'] }}<br/>

<strong>Annual Taxes:</strong> ${{ $mail['annualTaxes'] }}<br/>

<strong>Annual Insurance:</strong> ${{ $mail['annualInsurance'] }}<br/>

<strong>HOA (if applicable):</strong> ${{ $mail['hoa'] }}<br/>

<strong>Other:</strong> ${{ $mail['other'] }}<br/>

<hr/>

# Loan Details:

<strong>Borrower's Liquidity:</strong> ${{ $mail['liquidity'] }}<br/>

<strong>As Is / Current Market Value:</strong> ${{ $mail['marketValue'] }}<br/>

<strong>Amount of Rehab Requested:</strong> ${{ $mail['amountRequested'] }} <br/>

<strong>After Repair Value:</strong> ${{ $mail['afterRepairValue'] }} <br/>

<strong>LTV Requested (%):</strong> ${{ $mail['ltvRequested'] }} <br/>

<strong>Already ran market comparables?</strong> {{ $mail['marketComparables'] }}<br/>

<strong>Exit Strategy:</strong> {{ $mail['exitStrategy'] }}<br/>

<strong>Estimated FICO Score:</strong> {{ $mail['creditScore'] }}<br/>

<hr/>

# Sponsor's Real Estate Experience:

<strong>Properties Sold in Last 36 Months:</strong> {{ $mail['propertiesSold'] }}<br/>

<strong>Properties Currently Owned:</strong> {{ $mail['propertiesOwned'] }}<br/>

<strong>Scope of Work:</strong> 
{{ $mail['scopeOfWork'] }}<br/>

<strong>Adding Square Footage?</strong> {{ $mail['addSqFt'] }}<br/>
<strong>How much?</strong> {{ $mail['sqFt'] }}<br/>

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
