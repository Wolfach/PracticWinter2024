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
      justify-content: space-between;
    flex-wrap: wrap;
      width: 100%;
      display: flex;
      padding: 20x;
    }
    .posterblock{
      margin-top:10px;
    }
    /* .posterblock:first-child{
      margin-left: 0px;
    }
    .posterblock:last-child{
      margin-left: 0px;
    } */

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
      background: rgba(90, 49, 141, 0.8);
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
    /* .play{
      background:url(../images/play.png);
      width: 90px;
      height: 80px;
    } */
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
    /* .posterblock:hover .posterblock__img{
      background: linear-gradient(white, #5a318d);
      opacity: 0.6;

    }
    .posterblock:hover .info-max__block{
      display: flex;
    } */
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
  </style>
</head>
<x-header>
</x-header>
<main>
        <section class="start__video">
                <video class="vid" autoplay muted loop src="video/opening fire force.mp4"></video>
        </section>
    <div class="main__search">
<form>
    <div class="form__main__search">
  <input type="main__search__text" placeholder="Поиск аниме...">
  <button class="button-search" style="border: 0;"><img style="width: 24px" src="images/search.png" alt=""></button>
  </div>
</form>
</div>
<div class="container">
  <div class="line">
    @foreach($animedesc as $animeelement)
    <div class="posterblock" style="">
      <div class="top">
        <div class="info-min">
            <a href=""><span>{{$animeelement->Status}}</span></a>
            <a href=""><span>{{$animeelement->Year}}</span></a>
            <span>{{$animeelement->Age_limit}}</span>
        </div>
        <a href="" class="info-max">
          <div class="info-max__block">
            <div class="episodes">
              <span class="info-max__episodes">Эпизоды</span>
              <span>{{$animeelement->Episodes}}</span>
              </div>
              <div class="play"><img src="images/play.png" alt=""></div>
          </div>
        </a>
          <a href="">
            <img src="{{ asset($animeelement->Poster)}}" alt="" class="posterblock__img">
          </a>
        </div>
        <div class="bottom">
      <div class="posterblock__primary-text"><a href="" style="color: black; text-transform: uppercase;" class="Ru-title">{{$animeelement->RU_Title}}</a></div>
      <div class="posterblock__second-text"><a href="" style="color: #5a318d; font-size: 15px; text-transform: uppercase;" class="Romanji-title">{{$animeelement->Romanji_Title}}</a></div>
      @foreach($animegenres as $animegenre)
        <div class="posterblock__genres" style="display: flex; flex-direction: row;">
          <a href="">{{$animegenre->Genre}}</a>
        </div>
      @endforeach
      </div>
    </div>
    @endforeach
  </div>
</div>
    </main>