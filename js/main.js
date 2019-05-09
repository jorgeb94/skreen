var imported = document.createElement('script');
imported.src = 'js/movie-database.js';
document.head.appendChild(imported);

// for (var i = 0; i < movies.length; i++) {
//   console.log(movies[i].title)
// }


function getMovie(url){
  $('#movieplayer-container').empty()
  var movieCon = document.getElementById("movieplayer-container");
  movieCon.style.display = "inline";
  var movieFormat = "<div class='movieFormat' id='movieFormat'><iframe width='560' height='315' src='" + url + "' frameborder='0' allowfullscreen></iframe></div>"
  $('#movieplayer-container').append(movieFormat);
  //scroll to stop
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;

}
//seach by title
var searchInput = document.getElementById('inputSearch');
searchBtn = document.getElementById('buttonSearch');

searchBtn.addEventListener('click', function(){
$("#movies-box").empty();
searchItem = searchInput.value;
$('#movies-box').append("<div class='grid-container' id='grid-container'></div>")
  for (var i = 0; i < movies.length; i++) {
    var poster = movies[i].poster;
      if(searchItem.length != 0){
        if(movies[i].title.includes(searchItem) || movies[i].genre.includes(searchItem) || movies[i].rating.includes(searchItem) || movies[i].actors.includes(searchItem)){
          $("#grid-container").append("<div class='item'><img src='"+movies[i].poster+"'><div class='description-box'><div class='title'><h4 id='title'>"+movies[i].title+"</h4></div><div class='rating'>Rating: <span id='rate'>8.5</span></div><div class='play-movie' id='play-movie'><div class='playButton'><button type='button' name='button' onclick='getMovie('"+movies[i].url+"')><i class='play circle icon'></i></button></div></div></div></div>");
        }
      }else{
        console.log('no');
      }

  }
});
