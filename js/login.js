if($("#signin").length) {

    let request = new XMLHttpRequest();

    request.onload = function () {
        
        if(this.readyState == 4 && this.status == 200) {

            let user = JSON.parse(this.response);

            $('#loginbtn').click(function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                if($("#inputEmail").val() !== user.email || $("#inputPassword").val() !== user.password){

                    $(".login-error").text("Din E-postadress eller lösenord stämmer inte");
                }
                else {
                    //window.location.replace("http://localhost/inlämningsuppgifter Javascript & JQuery/inlämningsuppgift2/index.php");
                    window.location.href ="http://localhost/inlämningsuppgifter Javascript & JQuery/inlämningsuppgift2/validate_api_signin.php";
                }
            });
        };
    };

    request.open("GET", "https://fe18.azurewebsites.net/api/user");
    request.send();
};


// $.ajax(
//   'https://fe18.azurewebsites.net/api/user',
//   {
//       success: function(data) {
//         alert('AJAX call was successful!');
//         alert('Data from the server' + data);
//       },
//       error: function() {
//         alert('There was some error performing the AJAX call!');
//       }
//    }
// );