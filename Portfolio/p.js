function openPage(pageName, elmnt, color) 
{
  var i, container, tablinks;
  container = document.getElementsByClassName("container");
  for (i = 0; i < tabcontent.length; i++) 
  {
    tabcontent[i].style.display = "none";
  }


  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) 
  {
    tablinks[i].style.backgroundColor = "";
  }


  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

document.getElementById("defaultOpen").click();

