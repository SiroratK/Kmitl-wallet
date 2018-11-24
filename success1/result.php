$.getScript('https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js', function(){

var loading = `<style>
div#container {
  margin: 20px;
  width: 200px;
  height: 200px;
  pointer-events: none;
  user-select: none;
}
div#bkground {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 200px;
  height: 200px;
}
div#bkground div {
  width: 182px;
  height: 182px;
  background-color: #a3a3ff;
  border-radius: 100px;
}
div#whitecircle {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 200px;
  height: 200px;
}
div#whitecircle div {
  width: 182px;
  height: 182px;
  background-color: #fff;
  border-radius: 100px;
}
div#tick {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 200px;
  height: 200px;
}
div#tick div {
  color: #E0E0FF;
  font-size: 0;
  font-weight: bold;
}
</style>
<div id="container">
<div id='bkground'><div></div></div>
<div id='whitecircle'><div></div></div>
<div id='tick'><div>✔</div></div>
</div>
</div>
$('div#check.check').html(loading);
var bar = new ProgressBar.Circle(container, {
  strokeWidth: 5,
  easing: 'easeInOutExpo',
  duration: 1500,
  color: '#a3a3ff',
  trailColor: '#d1d1ff',
  trailWidth: 5,
  svgStyle: null,
  from: { color: '#a3a3ff', width: 5 },
  to: { color: '#a3a3ff', width: 5 },
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);
    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value);
    }
  }
});
bar.text.style.color = 'transparent';
bar.animate(1.0);
var interval2 = setInterval(function(){
  if ($('div.progressbar-text').text() == '100') {
    clearInterval(interval2);
    $('div#whitecircle div').animate({
      width: 0,
      height: 0
    }, 333, function(){
      $('div#tick div').animate({
        fontSize: 150
      }, 333);
    });
  };
}, 100);

})
