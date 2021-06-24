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
<<<<<<< HEAD
    $('#purchasePrice, #firstLien, #secondLien, #taxesOwed, #marketValue, #amountRequested, #afterRepairValue, #sqFt').on('keyup',function(){
=======
    $('#purchasePrice, #firstLien, #secondLien, #taxesOwed, #marketRent, #annualTaxes, #annualInsurance, #liquidity, #marketValue, #amountRequested, #afterRepairValue, #sqFt').on('keyup',function(){
>>>>>>> 4df95686cf23d9ce8c222f4d5686cac5cf75b531
      updateTextView($(this));
    });
  });