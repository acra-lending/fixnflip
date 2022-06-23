function updateTextView(_obj){
    var num = getNumber(_obj.val());
    if(num==0){
      _obj.val('');
    }else{
      _obj.val(num.toLocaleString());
    }
  }
  function getNumber(_str){
    var arr = _str.split('');
    var out = new Array();
    for(var cnt=0;cnt<arr.length;cnt++){
      if(isNaN(arr[cnt])==false){
        out.push(arr[cnt]);
      }
    }
    return Number(out.join(''));
  }
  $(document).ready(function(){

    $('#purchasePrice, #firstLien, #secondLien, #taxesOwed, #marketRent, #annualTaxes, #annualInsurance, #liquidity, #marketValue, #amountRequested, #afterRepairValue, #sqFt, #requestedLoanAmount, #estimatedProceeds, #netWorth, #liquidity1, #netWorth1, #liquidity2, #netWorth2, #liquidity3, #netWorth3, #estimatedValue, #rentalIncome, #otherIncome, #totalIncome, #realEstateTaxes, #insurance, #otherExpenses').on('keyup',function(){
      updateTextView($(this));
    });
    
  });