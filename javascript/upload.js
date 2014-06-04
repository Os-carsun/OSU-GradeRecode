var upload = new XMLHttpRequest();
var json;
var form = document.getElementById("uploadForm");
function uploadFile() 
{
   var file = document.getElementById("file");
   
   /* Create a FormData instance */
   var formData = new FormData();
   /* Add the file */ 
   formData.append("file", file.files[0]);
   
   upload.open("post", "upload.php", true);
   upload.send(formData);  /* Send to server */ 
}
  
/* Check the response status */  
upload.onreadystatechange = function() 
{
   if (upload.readyState == 4 && upload.status == 200) 
   {
      json = eval('('+upload.response+')');
      if(json.none){alert("need login");}
      console.log(upload.response);
   }

}
