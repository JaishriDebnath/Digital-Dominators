<!DOCTYPE html>
<html lang="en">
<head>
  <title>HRM SYSTEM</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{url('Lassets/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{url('Lassets/css/owl.carousel.min.css')}}">

  <link rel="stylesheet" href="{{url('Lassets/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{url('Lassets/css/style.css')}}">
  <script nonce="6da9ce04-0f6c-43e5-aab7-4f6243b33a8f">try{(function(w,d){!function(bS,bT,bU,bV){bS[bU]=bS[bU]||{};bS[bU].executed=[];bS.zaraz={deferred:[],listeners:[]};bS.zaraz._v="5629";bS.zaraz.q=[];bS.zaraz._f=function(bW){return async function(){var bX=Array.prototype.slice.call(arguments);bS.zaraz.q.push({m:bW,a:bX})}};for(const bY of["track","set","debug"])bS.zaraz[bY]=bS.zaraz._f(bY);bS.zaraz.init=()=>{var bZ=bT.getElementsByTagName(bV)[0],b$=bT.createElement(bV),ca=bT.getElementsByTagName("title")[0];ca&&(bS[bU].t=bT.getElementsByTagName("title")[0].text);bS[bU].x=Math.random();bS[bU].w=bS.screen.width;bS[bU].h=bS.screen.height;bS[bU].j=bS.innerHeight;bS[bU].e=bS.innerWidth;bS[bU].l=bS.location.href;bS[bU].r=bT.referrer;bS[bU].k=bS.screen.colorDepth;bS[bU].n=bT.characterSet;bS[bU].o=(new Date).getTimezoneOffset();if(bS.dataLayer)for(const ce of Object.entries(Object.entries(dataLayer).reduce(((cf,cg)=>({...cf[1],...cg[1]})),{})))zaraz.set(ce[0],ce[1],{scope:"page"});bS[bU].q=[];for(;bS.zaraz.q.length;){const ch=bS.zaraz.q.shift();bS[bU].q.push(ch)}b$.defer=!0;for(const ci of[localStorage,sessionStorage])Object.keys(ci||{}).filter((ck=>ck.startsWith("_zaraz_"))).forEach((cj=>{try{bS[bU]["z_"+cj.slice(7)]=JSON.parse(ci.getItem(cj))}catch{bS[bU]["z_"+cj.slice(7)]=ci.getItem(cj)}}));b$.referrerPolicy="origin";b$.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bS[bU])));bZ.parentNode.insertBefore(b$,bZ)};["complete","interactive"].includes(bT.readyState)?zaraz.init():bS.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>

</head>
<body>

@yield('content')
</body>
</html>