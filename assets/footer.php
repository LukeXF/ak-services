<div class="push"></div>
</div>
<div class="footer">
<div class="container">
	<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <a href="http://elementsoftworks.co.uk" target="_blank">
                <h5>DESIGNED BY</h5>
                <img class="animate" src="http://elementsoftworks.co.uk/assets/img/logo-clear.png">
            </a>
        </div>
	</div>
</div>


<script type="text/javascript">
jQuery(function($)  
{
    $("#contact_form").submit(function()
    {
        var email = $("#email").val(); // get email field value
        var phone = $("#phone").val(); // get phone field value
        var name = $("#name").val(); // get name field value
        var msg = $("#msg").val(); // get message field value

        $.ajax(
        {
            type: "POST",
            url: "https://mandrillapp.com/api/1.0/messages/send.json",
            data: {
                'key': 'f3aumBm_dMe6Inv3vTWD7w',
                'message': {
                    'from_email': email,
                    'from_name': name,
                    'headers': {
                        'Reply-To': email
                    },
                    'subject': 'Website Contact Form Submission (' + name + ' - ' + phone + ')',
                    'text': msg,
                    'to': [
                    {
                        'email': 'andrew@ak-services.co.uk',
                        'name': 'AK Services',
                        'type': 'to'
                    }]
                }
            }
        })
        .done(function(response) {
            document.getElementById('submit').innerHTML = 'Message Sent!';
            document.getElementById('submit').className += '';
            document.getElementById('submit').className += ' btn-success';

            $("#name").val(''); // reset field after successful submission
            $("#email").val(''); // reset field after successful submission
            $("#msg").val(''); // reset field after successful submission
            $("#phone").val(''); // reset field after successful submission
        })
        .fail(function(response) {
            document.getElementById('submit').innerHTML = 'Error :(';
            document.getElementById('submit').className += '';
            document.getElementById('submit').className += ' btn-danger';
        });
        return false; // prevent page refresh
    });
});

</script>



</body>
</html>