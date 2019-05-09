<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Skreen | Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="/css/skreen.css">
    <link rel="stylesheet" href="/css/nav.css">

  </head>
  <body>
  <a href="#top"></a>
  <div class="nav" id="nav">
    <div class="logo">
      <span>S<i class="fas fa-video"></i>REEN</span>
    </div>
    <div class="searchNav">
      <input id="inputSearch" type="text" name="" value="">
      <span id="buttonSearch" name="button"><i class="fas fa-search"></i></span>
    </div>
  </div>
  <div class="main-container">
    <div class="featured-container">
    </div>
    <div class="movies-container" id="movie-container">
      <div class="movieplayer-container" id='movieplayer-container'>
      </div>
      <div class="movies-box" id="movies-box">
      <h2>Animated</h2>
      <div class="grid-container">
        <div class="item">
          <img src="/images/spiderman2.jpg" alt="">
          <div class="description-box">
            <div class="title">
              <h4 id="title">Spider-Man: Into the Spider-Verse</h4>
            </div>
            <div class="rating">
              Rating: <span id='rate'>8.5</span>
            </div>
            <div class="play-movie" id="play-movie">
                <div class="playButton">
                  <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/tg52up16eq0?rel=0;&autoplay=1')"><i class="play circle icon"></i></button>
                </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/coco.jpg" alt="">
          <div class="description-box">
            <div class="title">
              <h4 id="title">Coco</h4>
            </div>
            <div class="rating">
              Rating: <span id='rate'>8.5</span>
            </div>
            <div class="play-movie" id="play-movie">
                <div class="playButton">
                  <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/Ga6RYejo6Hk')"><i class="play circle icon"></i></button>
                </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/insideout.jpg" alt="">
          <div class="description-box">
            <div class="title">
              <h4 id="title">Inside Out</h4>
            </div>
            <div class="rating">
              Rating: <span id='rate'>8.5</span>
            </div>
            <div class="play-movie" id="play-movie">
                <div class="playButton">
                  <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/seMwpP0yeu4')"><i class="play circle icon"></i></button>
                </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/zootopia.jpg" alt="">
          <div class="description-box">
            <div class="title">
              <h4 id="title">Zootopia</h4>
            </div>
            <div class="rating">
              Rating: <span id='rate'>8</span>
            </div>
            <div class="play-movie" id="play-movie">
                <div class="playButton">
                  <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/jWM0ct-OLsM')"><i class="play circle icon"></i></button>
                </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/spongebob.jpg" alt="">
          <div class="description-box">
            <div class="title">
              <h4 id="title">The SpongeBob Movie</h4>
            </div>
            <div class="rating">
              Rating: <span id='rate'>6</span>
            </div>
            <div class="play-movie" id="play-movie">
                <div class="playButton">
                  <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/Tv8xk7BKaNM')"><i class="play circle icon"></i></button>
                </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/spiritedaway.jpg" alt="">
          <div class="description-box">
            <div class="title">
              <h4 id="title">Spirited Away</h4>
            </div>
            <div class="rating">
              Rating: <span id='rate'>8.6</span>
            </div>
            <div class="play-movie" id="play-movie">
                <div class="playButton">
                  <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/ByXuk9QqQkk')"><i class="play circle icon"></i></button>
                </div>
            </div>
          </div>
        </div>
        </div>
      <h2>Comedies</h2>
      <div class="grid-container">
        <div class="item">
          <img src="/images/anchorman.jpg" alt="">
          <div class="description-box">
            <div class="title">
              <h4 id="title">Anchorman: The Legend of Ron Burgundy</h4>
            </div>
            <div class="rating">
              Rating: <span id='rate'>7.2</span>
            </div>
            <div class="play-movie" id="play-movie">
                <div class="playButton">
                  <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/-T3wnP91OnI')"><i class="play circle icon"></i></button>
                </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/bridesmaids.jpg" alt="">
                  <div class="description-box">
                    <div class="title">
                      <h4 id="title">Bridesmaids</h4>
                    </div>
                    <div class="rating">
                      Rating: <span id='rate'>6.8</span>
                    </div>
                    <div class="play-movie" id="play-movie">
                        <div class="playButton">
                          <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/FNppLrmdyug')"><i class="play circle icon"></i></button>
                        </div>
                    </div>
                  </div>
                </div>
        <div class="item">
          <img src="/images/stepbrothers.jpg" alt="">
                  <div class="description-box">
                    <div class="title">
                      <h4 id="title">Step Brothers</h4>
                    </div>
                    <div class="rating">
                      Rating: <span id='rate'>6.9</span>
                    </div>
                    <div class="play-movie" id="play-movie">
                        <div class="playButton">
                          <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/CewglxElBK0')"><i class="play circle icon"></i></button>
                        </div>
                    </div>
                  </div>
        </div>
        <div class="item">
          <img src="/images/scarymovie.jpg" alt="">
                <div class="description-box">
                    <div class="title">
                      <h4 id="title">Scary Movie 2</h4>
                    </div>
                    <div class="rating">
                      Rating: <span id='rate'>5.3</span>
                    </div>
                    <div class="play-movie" id="play-movie">
                        <div class="playButton">
                          <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/5t_tgiWatvs')"><i class="play circle icon"></i></button>
                        </div>
                    </div>
                  </div>
              </div>
        <div class="item">
        <img src="/images/thelongestyard.jpg" alt="">
          <div class="description-box">
              <div class="title">
                <h4 id="title">The Longest Yard</h4>
              </div>
              <div class="rating">
                Rating: <span id='rate'>6.4</span>
              </div>
              <div class="play-movie" id="play-movie">
                  <div class="playButton">
                    <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/l1BF53bXP8I')"><i class="play circle icon"></i></button>
                  </div>
              </div>
            </div>
        </div>
        <div class="item">
          <img src="/images/whitechicks.jpg" alt="">
            <div class="description-box">
                <div class="title">
                  <h4 id="title">White Chicks</h4>
                </div>
                <div class="rating">
                  Rating: <span id='rate'>5.6</span>
                </div>
                <div class="play-movie" id="play-movie">
                    <div class="playButton">
                      <button type="button" name="button" onclick="getMovie('https://www.youtube.com/embed/aeVkbNka9HM')"><i class="play circle icon"></i></button>
                    </div>
                </div>
              </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/movie-database.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
