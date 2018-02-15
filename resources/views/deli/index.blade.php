<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Te amo Delia</title>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Courgette);

    body
    {
      text-align:center;
      font-family: 'Courgette', cursive;
      height: 100%;
      background-color: #ffffff;
      background-image: url("images/overlay.png"), url("../images/love.jpg");
      background-image: url("images/overlay.png"), url("../images/love.jpg");
      background-image: url("images/overlay.png"), url("/images/love.jpg");
      background-image: url("images/overlay.png"), url("../images/love.jpg");
      background-repeat: repeat,			no-repeat,			no-repeat;
      background-size: 100px 100px, cover,				cover;
      background-position: top left,		center center,		bottom center;
      background-attachment: fixed,			fixed,				fixed;
    }

    svg
    {
      animation: bit 1s infinite; /* Set the time here */
      -webkit-animation: bit 1s infinite;
      transition:transform 1s;
      -webkit-transition:transform 1s;
      -webkit-animation-delay: 6s; /* Chrome, Safari, Opera */
      animation-delay: 6s;
    }
    #myHeart
    {
      stroke:red;
      stroke-width:4px;
      fill-opacity:0;
    }

    svg path
    {
      stroke:rgb(255,255,255);
      stroke-dasharray:1300;
      stroke-dashoffset: 0;
      stroke-width:3px;
      fill-opacity:0;
      animation: anim 12s linear forwards; /* Set the time here */
      -webkit-animation: anim 12s linear forwards;
    }

    /* Here their animations */

    @keyframes anim
    {
    0%
      {
        stroke-dashoffset: 1000;
        fill:rgba(255,0,0,0);
      }50%{
        stroke-dashoffset: 0;
        fill:rgba(255,0,0,0);
        fill-opacity:0;
      }
      100%
      {
        fill:rgba(255,0,0,1);
        fill-opacity:1;
      }
    }

    @-webkit-keyframes anim
    {
      0%
      {
        stroke-dashoffset: 1000;
        fill:rgba(255,0,0,0);
      }50%{
        stroke-dashoffset: 0;
        fill:rgba(255,0,0,0);
        fill-opacity:0;
      }
      100%
      {
        fill:rgba(255,0,0,1);
        fill-opacity:1;
      }
    }


    @keyframes bit
    {
    0%{
        transform:scale(1);
      }
      50%{
        transform:scale(1.3);
      }
      100%{
        transform:scale(1);
      }
    }

    @-webkit-keyframes bit
    {
    0%{
        transform:scale(1);
      }
      50%{
        transform:scale(1.3);
      }
      100%{
        transform:scale(1);
      }
    }
  </style>
</head>
<body>
  <h1>Happy Valentine's Day. </h1>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"

    width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">

  <path id="myHeart" d="M457.901,146.444C436.495,54.316,301.703,30.921,256,124.192

    C210.297,30.921,75.506,54.314,54.099,146.444C19.256,296.402,216.886,364.586,256,447.25

    C295.114,364.586,492.744,296.404,457.901,146.444z"/>

  </svg>
  
</body>
</html>