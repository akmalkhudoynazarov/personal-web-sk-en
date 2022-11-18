
function moveOne() {
  var i = 0;
  if (i == 0) {
    i = 1;
    var elem = document.querySelector('.counter-col1');
    var number = 20;
    var id = setInterval(frame, 50);
    function frame() {
      if (number >= 47) {
        clearInterval(id);
        i = 0;
      } else {
        number++;
        elem.innerHTML = "<h2>" + number + "+" + "</h2>";
      }
    }
  }
}
function moveTwo() {
  var i = 0;
  if (i == 0) {
    i = 1;
    var elem = document.querySelector('.counter-col2');
    var number = 70;
    var id = setInterval(frame, 50);
    function frame() {
      if (number >= 99) {
        clearInterval(id);
        i = 0;
      } else {
        number++;
        elem.innerHTML = "<h2>" + number + "%" + "</h2>";
      }
    }
  }
}
function moveThree() {
  var i = 0;
  if (i == 0) {
    i = 1;
    var elem = document.querySelector('.counter-col3');
    var number = 50;
    var id = setInterval(frame, 50);
    function frame() {
      if (number >= 85) {
        clearInterval(id);
        i = 0;
      } else {
        number++;
        elem.innerHTML = "<h2>" + number + "%</h2>";
      }
    }
  }
}
function moveFour() {
  var i = 0;
  if (i == 0) {
    i = 1;
    var elem = document.querySelector('.counter-col4');
    var number = 130;
    var id = setInterval(frame, 100);
    function frame() {
      if (number >= 160) {
        clearInterval(id);
        i = 0;
      } else {
        number++;
        elem.innerHTML = "<h2>" + number + "K+</h2>";
      }
    }
  }
}
moveOne();
moveTwo();
moveThree();
moveFour();