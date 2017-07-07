var friends ={
     bill:{
         firstName: "BILL",
         lastName: "Deigns",
         number:" 12345678",
         address: ['Kerby street','Arlington','Texas']
         },
     steve: {
         firstName: "STEVE",
         lastName: "Deigns",
         number:" 12345678",
         address: ['Cooper Street','Arlington','Texas']
         }
    
    };
    
    var list = function(i)
    {
        for(i in friends)
        {
          //console.log(i);
        }
    };
    var search = function(name)
    {
        for (var key in friends)
        {
            if(friends[key].firstName === name )
            {
                //console.log(friends[key]);
		console.log("FirstName: " + friends[key].firstName);
                console.log("LastName: " + friends[key].lastName);
                console.log("Number: " + friends[key].number);
                console.log("Address: " + friends[key].address);
                return friends[key];
            }
        }
    };
    
    var searchContact = prompt("Whom do you want to search from the list?").toUpperCase();
    console.log(searchContact);
    search(searchContact);
    
        
    