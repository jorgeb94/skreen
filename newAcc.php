<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" href="css/accstyle.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title>Skreen | Register</title>
</head>

<body>
  <div class="split right">
    <div class="centered">
      <div class="account">
        <form class="ui form" action="login.php">
          <h4 class="ui-dividing-header">Create Account</h4>
          <div class="field">
            <label id="labels">Name</label>
            <div class="two fields">
              <div class="field">
                <input type="text" name="shipping[first-name]" placeholder="First Name">
              </div>
              <div class="field">
                <input type="text" name="shipping[last-name]" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="field">
            <label id="labels">Billing Address</label>
            <div class="fields">
              <div class="twelve wide field">
                <input type="text" name="shipping[address]" placeholder="Street Address">
              </div>
              <div class="four wide field">
                <input type="text" name="shipping[address-2]" placeholder="Apt #">
              </div>
            </div>
          </div>
          <div class="two fields">
            <div class="field">
              <label id="labels">State</label>
              <select class="ui fluid dropdown">
                <option value="">State</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
          <h4 class="ui-dividing-header">Billing Information</h4>
          <div class="field">
            <label id="labels">Card Type</label>
            <select class="ui fluid dropdown">
              <option value="">Type</option>
              <option value="">Visa</option>
              <option value="">MasterCard</option>
              <option value="">Discover</option>
              <option value="">American Express</option>
            </select>
          </div>
          <div class="fields" id="divContainer">
            <div class="seven wide field">
              <label id="labels">Card Number</label>
              <input type="text" name="card[number]" maxlength="16" placeholder="Card #">
            </div>
            <div class="three wide field">
              <label id="labels">CVC</label>
              <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
            </div>
            <div class="six wide field">
              <label id="labels">Expiration</label>
              <div class="two fields">
                <div class="field">
                  <select class="ui fluid search dropdown" name="card[expire-month]">
                    <option value="">Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                  </select>
                </div>
                <div class="field">
                  <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                </div>
              </div>
            </div>
          </div>
          <div class="fields">
            <div class="seven wide field">
              <label id="labels">Username</label>
              <input id= "inpKey" type="text" placeholder="Username">
            </div>
            <div class="seven wide field">
              <label id="labels">Password</label>
              <input id="inpValue" type="password" placeholder="Password">
            </div>
          </div>

          <button class="ui button" tabindex="0" id="btnInsert"><a href="subs.php">Submit</div></button>

        </form>
      </div>
    </div>
  </div>



  <div class="split left">
    <div class="centered">
    </div>
  </div>

 </div>
 <div class="playbutton">
  <div class="play">
    <i class="play icon"></i>
  </div>

  <div class="nav" id="nav">
    <div class="logo">
      <span>S<i class="fas fa-video"></i>REEN</span>
    </div>
  </div>


  <script type="text/javascript">
    const inpKey = document.getElementById('inpKey')
    const inpValue = document.getElementById('inpValue')
    const btnInsert = document.getElementById('btnInsert')
    localStorage.clear;
    btnInsert.addEventListener('click', function(){
      localStorage.setItem(inpKey.value, inpValue.value)
      console.log(localStorage)
    })

  </script>

</body>


</html>
