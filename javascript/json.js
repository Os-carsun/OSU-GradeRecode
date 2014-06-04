
var upload = new XMLHttpRequest();
var json;
function uploadFile() 
{
   

   upload.open("post", "json.php", true);
   upload.send();
}
upload.onreadystatechange = function() 
{
   if (upload.readyState == 4 && upload.status == 200) 
   {
      json = eval(upload.response);
      console.log(upload.response);
   }else{
      //  alert("Problem retrieving XML data");
    }

}
