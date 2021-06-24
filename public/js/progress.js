var SITEURL = "{{URL('/apply')}}";
$(function() {
    $(document).ready(function()
    {
        // $('.progress').hide();
        var bar = $('.bar');
        var percent = $('.percent');
          $('form').ajaxForm({
            beforeSend: function() {
                var percentVal = '0%';
                bar.width(percentVal)
                percent.html(percentVal);
            },
            uploadProgress: function(event, position, total, percentComplete) {
                $('.progress').removeAttr('hidden');
                var percentVal = percentComplete + '%';
                bar.width(percentVal)
                percent.html(percentVal);
                $('.complete').html('Sending, please wait...');
            },
            complete: function(data) {
                $('.complete').html(data.responseJSON.success);
<<<<<<< HEAD
                
=======
>>>>>>> 4df95686cf23d9ce8c222f4d5686cac5cf75b531
            }
          });
    }); 
 });