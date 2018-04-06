var clock;

$(document).ready(function() {

	$(document).on('click', '.btn-subscribe', function () {
       // alert('submit button clicked');
        var that = this;
        $(this).parents('#subscribeForm').validate({
            rules: {
                subscribeEmail: {
                    required: true
                }
            },
            messages: {
                subscribeEmail: {
                    required: "Email Id is required"
                }
            },
            submitHandler: function () {
                var formData = $("#subscribeForm").serialize();
                console.log(formData);
                // alert('submit is working');
                $.ajax({
                    type: "POST",
                    url: "submit_1.php",
                    data: formData,
                    cache: false,
                    success: function (response) {
                      //  if (response == 200) {
                            $("#subscribeForm")[0].reset();
                            $(that).parents("#subscribeForm .subscribe-field-group").append("<div class='success-wrapper'><div class='success-info mail-sent'>Thanks for Subscribing us! Our team will contact you soon.</div></div>")
                            setTimeout(function () {
                               $('.success-wrapper').remove();
                           }, 10000);
                        //}
                       //  else {
//                            alert('else is working');
                       // }
                    }
                });
            }
        });
    });
});