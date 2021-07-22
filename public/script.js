
function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};

function confirmParentConsent() {
    debugger;    
    if($('#txtGuardian').val()==null || $('#txtGuardian').val()==undefined || $('#txtGuardian').val()=="")
    {
    alert("Please fill your name and then click on- I Accept");
    return;
    }
    var orderguid=getUrlParameter('orderguid');
    if(orderguid=="" || orderguid==null || orderguid==undefined)
    {
        alert("Order Guid is not passed");
        return;
    }
    var token=getToken();
    
    updateOrder(token,orderguid);
}
function updateOrder(token,orderguid)
{
    var result="";
    var gaurdianName=$('#txtGuardian').val();
    var settings = {
        "url": "https://mgravity.api.crm8.dynamics.com/api/data/v9.1/salesorders("+orderguid+")",
        "method": "PATCH",
        "timeout": 0,
        "async":false,
        "headers": {
          "Content-Type": ["application/json"],
          "Accept": "application/json",
          "Authorization": "Bearer "+token+"",
          
        },
        "data": JSON.stringify({"mg_iaccept":true,"description":"This order has been confirmed by the Customer Guardian-"+gaurdianName+" at "+Date()+""}),
        error: function (XMLHttpRequest, textStatus, errorThrown) {

            alert("Error occurred. Status: " + XMLHttpRequest.status + "; Error: " + XMLHttpRequest.responseText); // Display error message  
            
        },
        success:function()
        {
            $("body").empty();
            $("body").append("<h2>Thanks for the Consent provided. We hope you have an awesome experience with Microgravity.</h2>");
            //$("body").append("<input type='button' onclick='window.close();' value='Close this window' class='button'/>");
        }
      };
      
      $.ajax(settings).done(function (response) {
          //debugger;
        //alert(response);
      });
}
function getToken()
{
    
    var token;
    var settings = {
        "url": "https://prod-25.centralindia.logic.azure.com:443/workflows/bcf89a913916486e8b88dc6f1a75d4cd/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=-_ug1znRc5rrDstoe16K9mdvX2UuQefNRySiUG-Miek",
        "method": "POST",
        "timeout": 0,
        "headers": {
          "Content-Type": ["application/json", "application/json"]
        },
        "data": JSON.stringify({"request_type":"access_token"}),
        "async":false
      };
      
      $.ajax(settings).done(function (response) {
        token=response["token"];
        //console.log(token);
        //alert(token);
      });
return token;
}

