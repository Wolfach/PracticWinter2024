<head>
  <style>
    .posterblock span, a{
      transition:0s;
      font-family: "Roboto", sans-serif !important;
  font-weight: 500;
  font-style: normal;
    }
    .info-min a{
      color: white;
      transition: 0s;
    }
    .info-min a:hover{
      color: white;
      transition: 0s;
    }
    .posterblock .top{
      position: relative;
      overflow: hidden;
      max-width: 250px;
      
    }
    .line{
      justify-content: left;
    flex-wrap: wrap;
      width: 100%;
      display: flex;
      padding: 20x;
    }
    .posterblock{
      margin-top:10px;
      margin-left: 25px;
    }
    .container{
      display: flex;
    flex-direction: column;
    justify-content: center;
    }
    .info-max__episodes{
    }
    .posterblock .info-min{
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(rgba(90, 49, 141, 0) 0%, rgba(90, 49, 141, 60) 76.56%);
    transform: translate(0, 100%);
    z-index: 3;
    transition: 0.6s;
    height: 50px;
    }
    .top:hover .info-min{
      transform: translate(0, 0);
      overflow: none;
    }
    .top:hover .info-max{
      background: rgba(255, 165, 0, 0.8);
    }
    .info-max{
      z-index: 2;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: center;
    }
    .info-max__block{
      color:white;
      display: flex;
      align-items:center;
    }
    .info-min span{
      margin-left: 5px
    }
    .top:hover .play{
      opacity: 1;
    }
    .top:hover .info-max{
      opacity: 1;
    }
    .play{
      margin-left: 15px;
      opacity: 0;
    }
    .play img{
      width: 70px;
      height: 76px;
    }
    .episodes{
      justify-content: center;
      flex-direction: column;
    display: flex;
    align-items: end;
    }
    .posterblock__genres a{
      font-size: 13px;
      color: gray;
    }
    .posterblock__img{
      width: 250px;
      height: 354px;
    }
    .posterblock__primary-text{
      text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  width: 250px;
  color: black;
    }
    .posterblock__genres-genre{
       text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  max-width: 250px;
  color: gray;
    }
    .posterblock__second-text{
      text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  width: 250px;
  color: #5a318d;
    }
    .bottom{
      text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  width: 250px;
  color: #5a318d;
}
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
  </style>
</head>
<x-header>
</x-header>
<main>
<div class="container">
  <div class="line">
    @foreach($posters as $animeelement)
    <div class="posterblock" style="">
      <div class="top">

        <a href="" class="info-max">
          <div class="info-max__block">
          </div>
        </a>
          <a href="">
            <img src="{{ asset($animeelement->Poster)}}" alt="" class="posterblock__img">
          </a>
        </div>
        <div class="bottom">
      <div class="posterblock__primary-text"><a href="" style="color: black; text-transform: uppercase;" class="Ru-title">{{$animeelement->RU_Title}}</a></div>
      <div class="posterblock__second-text"><a href="" style="color: #ffa500; font-size: 15px; text-transform: uppercase;" class="Romanji-title">{{$animeelement->Romanji_Title}}</a></div>
      <div class="posteblock__genres" style="display: flex; flex-direction: row; color: gray;">
        @foreach($animeelement->genres as $animegenre)
        <?php
                        $maxGenresToShow = 4;
                        $genreCount = count($animeelement->genres);
                        $genres = $animeelement->genres->slice(0, $maxGenresToShow);

                        $genresString = $genres->implode('Genre', ', ');

                        if ($genreCount > $maxGenresToShow) {
                            $genresString .= '...';
                        }
                    ?>
                    @endforeach
                    <div class="posterblock__genres-genre" style="">
                        <a style="color: gray; font-size: 15px;" href="">{{ $genresString }}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
</div>
</main>