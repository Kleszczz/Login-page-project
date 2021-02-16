function messhtml()
{
  var username,userpw,mess;

  username = parseFloat(document.frmbincode.username.value);
  userpw = parseFloat(document.frmbincode.userpw.value);

  if (username == null || userpw== null)
    mess = "<font color=red><b>Nic nie wpisałeś 0.o?</b></font>";
       else if(username == "root" && userpw == "toor")
        mess = "<font color=red><b>Jesteś zalogowany, teraz złap flage i wpisz ją</b></font>";
          else if(username == "root" && userpw != "toor")
            mess = "<font color=red><b>Jesteś blisko :)</b></font>";
              else if(username !="root" && userpw == "toor")
                mess = "<font color=red><b>Jesteś blisko :)</b></font>";
                  else mess="<font color=red><b>o.0 co zrobiles?</b></font>";

  document.getElementById("messhtml").innerHTML = mess;
}



