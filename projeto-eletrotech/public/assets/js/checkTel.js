function checkTel () {

    const input = document.getElementById('tel');
  
      let inputLength = input.value.length;
  
      if (inputLength == 2) {
        input.value += ' ';
      } else if (inputLength == 4) {
        input.value += ' ';
      } else if (inputLength == 9) {
        input.value += '-';
      }
  
  };