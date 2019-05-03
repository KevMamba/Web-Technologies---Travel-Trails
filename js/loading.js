var current_url=location.href;
if(localStorage.length==0){
  localStorage.setItem("url",current_url);
  window.location.assign("loading.html");
}
else{
  localStorage.clear();
}