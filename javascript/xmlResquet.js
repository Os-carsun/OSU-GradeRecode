var xmlhttp;
var json;
var params;
var login=null;

function loadXMLDoc(url,userid,pwd){
  console.log();
  params = "userid="+userid+"&pwd="+pwd;
  if(login!=null)
    params +="&login="+login;
  
  xmlhttp = null;
  if (window.XMLHttpRequest){ // code for all new browsers
      xmlhttp = new XMLHttpRequest() ;
  }else if (window.ActiveXObject){ // code for IE5 and IE6
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP") ;
  }
  if (xmlhttp!=null){
      xmlhttp.onreadystatechange=state_Change ;
      
      xmlhttp.open("post",url,true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send(params);

  }else{
      alert("Your browser does not support XMLHTTP.");
    }
  }

  function state_Change(){
  if (xmlhttp.readyState==4){ // 4 = "loaded"
    if (xmlhttp.status==200){ // 200 = OK
      json = eval('('+xmlhttp.response+')');
      console.log(json);
      // document.cookie="PHPSESSID="+json.ssid;
      // window.document.getElementById('name').innerHTML=json.name;
      // window.document.getElementById('age').innerHTML=json.age;
      // window.document.getElementById('userid').innerHTML=json.userid;
      // window.document.getElementById('pwd').innerHTML=json.pwd;
      // if(json.login_code!=undefined){
      //   window.document.getElementById('login_code').innerHTML="login_code: "+json.login_code;
      //   login = json.ssid;
      // }
      // if(json.login_tag!=undefined){
      //   window.document.getElementById('login_code').innerHTML="login_tag: "+json.login_tag;
      // }
    }else{
      alert("Problem retrieving XML data");
    }
  }
}
