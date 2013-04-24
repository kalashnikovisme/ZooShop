function CheckFillRadio(name) {
          radioGr = document.getElementsByName(name);
          var j;
          checked = false;
          for (j=0; j<radioGr.length; j++){
            if (radioGr[j].checked == true){
     checked = true;
     return checked;
            }
          }
          return checked;
        }
