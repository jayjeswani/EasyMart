<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dependent dropdown with array</title>
  <script type="text/javascript">
    var states={'maharashtra':{'Nagpur':['Ram Nagar', 'Civil Lines', 'Zinga Bai Takli','Jaripatka','Hudkeshwar','Hingna','Koradi','Sadar','Dighori','Bajaj Nagar','Deekshabhoomi','Mahal','Itwari','Dhantoli','Nandanvan','Binaki'],
                          'Mumbai':['Dadar', 'Dharavi', 'Bandra','Andheri','Dadar','Thane','Dombivali','Bhivandi','Kalyan'],
                          'Amravati':['jaipur','jodhpur','bhilwara','udaipur','ajmer']},
                 'rajasthan':{'Jodhpur':['seattle','olympia','spokane','tacoma','richland'],
                        'Jaipur':['huston','austin','dallas','elpaso','texas city'],
                        'Udaipur':['los angeles','san francisco','san diago','oakland','long beach'],
                        'Ajmer':['miami','orlando','tampa','naples','florida city']},
                 'gujrat':{'Surat':['sydney','harbor','newcastle','orange','dubbo'],
                              'Ahmedabad':['brisbane','gold cost','cairns','townsville','toowoomba'],
                              'Rajkot':['hobart','launceston','devonport','burnie','george town'],
                              'Jamnagar':['melbourne','ballarat','geelong','mildura','bindigo']}
               
                 };
                 window.onload=function(){
                  var statesel=document.getElementById('state');
                  var citysel=document.getElementById('city');
                  var areasel=document.getElementById('area');
                  for(var x in states){
                    statesel.options[statesel.options.length]=new Option (x,x);
                  }
                  statesel.onchange=function(){
                    areasel.length=1;
                    citysel.length=1;
                    for(var y in states[this.value]){
                      citysel.options[citysel.options.length]=new Option (y,y);
                    }
                  }
                  citysel.onchange=function(){
                    areasel.length=1;
                    var z=states[statesel.value][this.value];
                    for(var i=0;i<z.length;i++)
                    {
                      areasel.options[areasel.options.length]=new Option(z[i],z[i]);
                    }
                  }
              }
  </script>

</head>
<body>
      <form name="form1" id="form1" action="/action_page.php">
        State:<select name="state" id="state">
          <option value="" selected="selected">Select State</option>
        </select>
        <br><br>
        City:<select name="city" id="city">
          <option value="" selected="selected">Select City</option>
        </select>
        <br><br>
        Area:<select name="area" id="area">
          <option value="" selected="selected">Select Area</option>
        </select>
        <br><br>
        <input type="submit" value="Submit" >
      </form>
</body>
</html>