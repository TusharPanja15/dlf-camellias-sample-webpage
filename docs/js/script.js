//Startup popup modal script
        $(window).on('load', function() {
            $('#newUser').modal('show');
        });


        //Inserting user data to get download option
        $(document).ready(function() {
            $('#submit').click(function() {
                var name = $('#name').val();
                var email = $('#email').val();
                if (name == '' || email == '') {
                    $('#error').modal("show");
                } else {
                    $('#error_message').html('');
                    $.ajax({
                        url: "insert.php",
                        method: "POST",
                        data: {
                            name: name,
                            email: email
                        },
                        success: function(data) {
                            $("form").trigger("reset");
                            $('#success_message').fadeIn().html(data);
                            setTimeout(function() {
                                $('#downloadModal').modal("show");
                            }, 2000);
                        }
                    });
                }
            });
        });



        //Inserting user data from startup popup
        $(document).ready(function() {
            $('#submitDetails').click(function() {
                var name = $('#firstName').val();
                var email = $('#userEmail').val();
                var phone_no = $('#phone_no').val();
                if (name == '' || email == '' || phone_no == '') {
                    $('#newUser').modal("hide");
                    $('#error').modal("show");
                } else {
                    $('#error_message').html('');
                    $.ajax({
                        url: "submit.php",
                        method: "POST",
                        data: {
                            name: name,
                            email: email,
                            phone_no: phone_no
                        },
                        success: function(data) {
                            $("form").trigger("reset");
                            $('#success_message').fadeIn().html(data);
                            setTimeout(function() {
                                $('#newUser').modal("hide");
                                $('#success').modal("show");
                            }, 2000);
                        }
                    });
                }
            });
        });