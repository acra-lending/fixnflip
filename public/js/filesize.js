$("#files1").on('change', function() {
    var totalSize = 0;
  
    $("#files1").each(function() {
      for (var i = 0; i < this.files.length; i++) {
        totalSize += this.files[i].size;
      }
    });
  
    var valid = totalSize <= 29000000;
    if (!valid) 
      alert('Over 29MB Max Size');
  
    $("#submitBtn1").prop("disabled", !valid);
  });

$("#files2").on('change', function() {
    var totalSize = 0;
  
    $("#files2").each(function() {
      for (var i = 0; i < this.files.length; i++) {
        totalSize += this.files[i].size;
      }
    });
  
    var valid = totalSize <= 29000000;
    if (!valid) 
      alert('Over 29MB Max Size');
  
    $("#submitBtn2").prop("disabled", !valid);
  });