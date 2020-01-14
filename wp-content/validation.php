
<style>
#form_container {
  width: 300px;
  height: auto;
  margin: 30px auto;
  padding: 30px;
  border-radius: 5px;
  background: #95a5a6;
  box-shadow: 15px 15px 8px #292929;
  position: relative;
  z-index: 3;
  border: none;
}


/*This hiddes the labels for use only by the JS as there are placeholders in the HTML*/
label {
  visibility: hidden;
}

input {
  width: calc(100% - 16px);
  padding: 10px 0 10px 10px;
  margin: 0;
  border: 2px solid transparent;
  border-radius: 5px;
  box-shadow: 1px 1px 1px #B2B2B2, -1px -1px 1px #292929;
  position: relative;
}
input:focus {
  outline:none;
  border: 2px solid transparent;
}

input.isRequired {
  border: 2px solid #e74c3c;
}

/*used a button so to easily add fontawesome's icon to the submit*/
button:hover {
  background: #2980b9;
}
button:focus {
  box-shadow: 1px 1px 1px #B2B2B2, -1px -1px 1px #292929;
}

/*style for the error box*/
.errorMessages {
  width: calc(100% - 8px);
  padding: 20px 0;
  background: #e74c3c;
  color: white;
  border: 2px solid #EC644B;
  display: none;
}
.errorMessages li {
  padding: 0 0 5px 0;
  margin: 0 0 0 30px;
  font-family: Open Sans, sans serif;
}

#info {
  width: 360px;
  position: absolute;
  left: 20px;
  top: 10px;
}

#info h1 {
  margin: 10px 0;
}

#info li {
  list-style: none;
  margin-bottom: 5px;
}
#info li::before {
  content: '\f1d9';
  position: absolute;
  left: 8px;
  font:normal normal normal 14px/1 FontAwesome;
  font-size:inherit;
  text-rendering:auto;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
}
</style>
<script>
//onblur function
function requiredField(input) {
    if (input.value.length < 1) {
      //red border
        input.style.borderColor = "#e74c3c";
      
    } else if (input.type == "email") {
      console.log("this is an email type");
      
        if (input.value.indexOf("@") != -1 && input.value.indexOf(".") != -1) {
          //green border
          input.style.borderColor = "#2ecc71";
        } else {
          //red border
          input.style.borderColor = "#e74c3c";
        }
      
    } else {
      //green border
        input.style.borderColor = "#2ecc71";
    }
}


//great artical on how to pull the broswer's errors and then display these fields when the end user tries submitting the form https://www.tjvantoll.com/2012/08/05/html5-form-validation-showing-all-error-messages/

var createAllErrors = function() {
        var form = $( this ),
            errorList = $( "ul.errorMessages", form );

        var showAllErrorMessages = function() {
            errorList.empty();

            // Find all invalid fields within the form.
            var invalidFields = form.find( ":invalid" ).each( function( index, node ) {

                // Find the field's corresponding label
                var label = $( "label[for=" + node.id + "] "),
                    // Opera incorrectly does not fill the validationMessage property.
                    message = node.validationMessage || 'Invalid value.';

                errorList
                    .show()
                    .append( "<li><span>" + label.html() + "</span> " + message + "</li>" );
            });
        };

        // Support Safari
        form.on( "submit", function( event ) {
            if ( this.checkValidity && !this.checkValidity() ) {
                $( this ).find( ":invalid" ).first().focus();
                event.preventDefault();
            }
        });

        $( "input[type=submit], button:not([type=button])", form )
            .on( "click", showAllErrorMessages);

        $( "input", form ).on( "keypress", function( event ) {
            var type = $( this ).attr( "type" );
            if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type )
              && event.keyCode == 13 ) {
                showAllErrorMessages();
            }
        });
    };
    
    $( "form" ).each( createAllErrors );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!-- MultiStep Form --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<body>
  <div id="info">
    <h1>Check this out</h1>
    <p>Some basic form validation that gives feed back in the form of border colors</p>
    <ul>
      <li>Red border when field is empty</li>
      <li>Green border when filled</li>
      <li>Checks email type field for "@" and a "."</li>
      <li>HTML5 and JT's scrpt takes over once sumitted if there are errors</li>
      <li>PROFIT!</li>
    </ul>
  </div>
  <div id="form_container">
    <h2 id="title">Company</h2>
    <form id="form" action="" accept-charset="UTF-8" method="">
      
      <ul class="errorMessages"></ul>
      
      <!-- This is to provide a "name" for the js to pull from in the error report once submitted-->
      <label for="fname">first name:</label>
      <input id="fname" type="text" onblur="requiredField(this)" placeholder="first name" required>
      
      <label for="lname">last name:</label>
      <input id="lname" type="text" onblur="requiredField(this)" placeholder="last name" required>
      
      <label for="email">email:</label>
      <input id="email" type="email" onblur="requiredField(this)" placeholder="email" required>
      
      <button type="submit">
        <span>submit <i class="fa fa-bolt"></i></span>
      </button>
    </form>
  </div>
</body>