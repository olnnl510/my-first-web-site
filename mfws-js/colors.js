var Links = {
  setColor: function (color) {
    var alist = document.querySelectorAll('a');
    var i = 0;
    while (i < alist.length) {
      // console.log(alist[i]);
      alist[i].style.color = color;
      i = i + 1;
    }
  }
}

var Body = {
  setColor: function (color) {
    document.querySelector('body').style.color = color;
  },
  setBackgroundColor: function (color) {
    document.querySelector('body').style.backgroundColor = color;
    // document : 객체 , querySelector: 객체에 속해있는 함수
    // 객체에 속해있는 함수 : 함수x 메소드(method)o
  }
}

function nightDayHandler(self) {
  var target = document.querySelector('body');
  if (self.value === 'night') {
    Body.setBackgroundColor('black');
    Body.setColor('white');
    self.value = 'day'

    Links.setColor('powderblue');

  } else {
    Body.setBackgroundColor('white');
    Body.setColor('black');
    self.value = 'night'

    Links.setColor('blue');

  }
}

/*
js파일에
<script></script>
들어가면 안됨
 */