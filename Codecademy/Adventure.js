 var user = prompt("What do you wish to do in life?").toUpperCase();
 var BS = prompt("Have you completed BS? true / false?")
 var MS =prompt("Have you completed MS? true / false?");
 switch(user)
 {
     case 'WORK':
         console.log("Job");
         if( BS && MS)
         {
             console.log("Great!");
         }
         else
         {
             console.log("no problem");
         }
         break;
    case 'MARRY':
         console.log("Marry");
         if( BS || MS)
         {
             console.log("Great!");
         }
         else
         {
             console.log("no problem");
         }
         break;
    case 'HAVE FUN':
         console.log("Fun");
         break;
    default:
         console.log("Please enter either work or marry or have fun");
 }
    
         