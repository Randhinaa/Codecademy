/*jshint multistr:true */
var text = " Hello! How are you Alice? Are you Alice?";
var myName="Alice";
var hits=[];

var newText=text.replace(/[^a-zA-Z ]/g, "");

var word = [];
word = newText.split(' ');
console.log(word);

for (var i = 0; i < word.length; i++)
{
    console.log(word[i]);
    if (word[i] === myName)
    {
        hits.push(word[i]);
    }
}

/*for(var i=0;i<text.length;i++)
{
  if(text[i]===myName[0])
  {
     for(var j=i; j<( myName.length + i );j++)
      {
          hits.push(text[j]);
      }
  }
}*/

if (hits.length === 0)
{
    console.log("Your name wasn't found!");
}
else
{
    console.log("Your name has appeared in the array!");
    console.log(hits);
}
