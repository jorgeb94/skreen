
$("#buttonSearch").click(function(){
  clearMovieSearch()
  movieVal = $("#inputSearch").val()
  console.log(movieVal)

fetch('http://www.omdbapi.com/?s='+movieVal+'&page=1&apikey=d98f7659')
  .then(
    function(response) {
      if (response.status !== 200) {
        console.log('Looks like there was a problem. Status Code: ' +
          response.status);
        return;
      }

      // Examine the text in the response
      response.json().then(function(data) {

        data.Search.forEach(function(element){
          $('#movies').append("<div>"+element.Title+"</div>")
        })
      });
    }
  )
  .catch(function(err) {
    console.log('Fetch Error :-S', err);
  });
})

function clearMovieSearch(){
  $("#movies").empty()
}

const {
  styler, decay, spring, listen, pointer, value, easing
} = window.popmotion;

const slider = document.querySelector('.carousel');
const divStyler = styler(slider);
const sliderX = value(0, divStyler.set('x'));
let activeAnimation;
listen(document, 'mousedown touchstart')
  .start(() => {
    if (activeAnimation) activeAnimation.stop();
    activeAnimation = pointer({ x: sliderX.get() })
      .pipe(({ x }) => x < 0 ? x : x * 0.1)
      .start(sliderX);
  });

listen(document, 'mouseup touchend')
  .start(() => {
    if (activeAnimation) activeAnimation.stop()
    activeAnimation = decay({
        from: sliderX.get(),
        velocity: sliderX.getVelocity(),
        power: 0.8,
        timeConstant: 350,
        // restDelta: 0.5,
        modifyTarget: v => {
          if (v > 0) {
            return 0;
          } else {
            const itemWidth = 110 + 15;
            const totalWidth = itemWidth * slider.children.length;
            const singleScreen = v %= totalWidth;
            const snapTo = Math.round(singleScreen / itemWidth) * itemWidth;
            return snapTo;
          }
        },
      })
      .start({
        update: (v) => {
          sliderX.update(v)
          // console.log(sliderX, v);
        },
        complete: () => {
          console.log('!!!!');
        }
      })
  });
