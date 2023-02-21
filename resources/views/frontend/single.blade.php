@extends('frontend.app')
@section('content')
<!-- slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/img/car1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/car2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/car3.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/car4.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/car5.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/car6.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/car7.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/car8.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- content -->
<div class="single_car">
  <div class="container py-5">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-7">
        <div class="title">
          <h1 class="fw-bold">
            Chevrolet Camaro 2017
          </h1>
          <h6 class="text-muted fw-light">1LS</h6>
          <span class="fw-bold h4">4.89</span> <span><i class="fa fa-star fa-2x align-top" aria-hidden="true"></i></span> &nbsp; <span class="align-text-bottom">(124 trips)</span>
          <div class="row mt-2">
            <div class="col-sm-6 pt-3">
              <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-0" role="img" version="1.1">
                <path d="M20.47 21.12c0 .34.27.62.62.62s.63-.28.63-.63V9.78c0-1.14-1.09-2.04-2.1-2.08h-.84l-2.85-4.62c-.32-.48-.97-.83-1.55-.83h-4.07c-.71 0-1.29.58-1.29 1.29v2.6a.625.625 0 0 0 1.25 0l.04-2.65h4.07c.16 0 .42.14.5.26l3.02 4.9c.11.19.31.3.53.3h1.16c.38.02.88.43.88.83v11.34Z" fill="#121214"></path>
                <path d="M2.87 21.74h16.26c.35 0 .62-.29.62-.63s-.27-.62-.62-.62H3.5V8.99h6.15c.34 0 .62-.29.62-.63s-.27-.62-.62-.62H2.87c-.34 0-.62.28-.62.62v12.75c0 .35.28.63.62.63Z" fill="#121214"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.91 8.99h3.87c.23 0 .44-.13.57-.34.1-.2.09-.45-.04-.64l-1.94-2.84a.631.631 0 0 0-.52-.27h-1.94c-.34 0-.62.28-.62.62v2.85c0 .34.27.62.62.62Zm2.68-1.25h-2.06V6.15h.98l1.08 1.59ZM2.87 6.77h3.67c.34 0 .62-.28.62-.63V3.81c0-.86-.65-1.56-1.45-1.56H3.7c-.81 0-1.45.68-1.45 1.56v2.33c0 .35.28.63.62.63Zm3.04-1.25H3.5V3.81c0-.17.09-.31.2-.31h2.01c.09 0 .2.13.2.31v1.71ZM9.56 15.73c0 1.33 1.08 2.42 2.42 2.42a2.43 2.43 0 0 0 2.43-2.42c0-1.104-1.553-3.91-1.875-4.49l-.005-.01c-.22-.39-.87-.39-1.09 0-.31.56-1.88 3.4-1.88 4.5Zm1.25 0c0-.4.54-1.64 1.17-2.87.63 1.22 1.18 2.47 1.17 2.87 0 .64-.53 1.17-1.17 1.17-.64 0-1.17-.52-1.17-1.17Z" fill="#121214"></path>
              </svg> &nbsp; <span>25 MPG</span>
            </div>
            <div class="col-sm-6 pt-3">
              <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-0" role="img" version="1.1">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.58 15.24c0 1.6 1.3 2.9 2.9 2.9a2.9 2.9 0 0 0 2.89-2.9c0-1.02-1.11-3.29-2.04-5.02-.34-.63-1.37-.63-1.71 0-.93 1.73-2.04 4-2.04 5.02Zm1.25 0c0-.52.64-2.05 1.65-3.97 1.01 1.92 1.64 3.46 1.65 3.97 0 .91-.74 1.65-1.65 1.65-.91 0-1.65-.74-1.65-1.65Z" fill="#121214"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.95 22.35V1.62c0-.34-.27-.62-.62-.62h-4.87c-1.04 0-2.04.39-2.8 1.1a.61.61 0 0 0-.04.88c.24.25.63.27.89.03.53-.49 1.22-.76 1.95-.76h4.25V4.5H9.84c-.16 0-.32.07-.44.18L4.19 9.89c-.11.11-.18.27-.18.44v12.03c0 .34.27.62.62.62h15.7c.35 0 .63-.28.62-.63Zm-1.24-.62H5.26V10.59l4.84-4.84h9.61v15.98Z" fill="#121214"></path>
                <path d="M4.18 7.43a.63.63 0 0 0 .89-.01l1.85-1.85c.24-.24.24-.64 0-.88a.628.628 0 0 0-.88 0L4.18 6.55c-.24.24-.24.64 0 .88Z" fill="#121214"></path>
              </svg> &nbsp; <span>Gas</span>
            </div>
            <div class="col-sm-6 pt-3">
              <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-0" role="img" version="1.1">
                <path d="M19.67 21.45H7.27c-1.33 0-2.5-.85-2.91-2.1l-2.2-6.68c-.38-1.14-.05-2.4.83-3.21l6.08-5.63c.8-.75 2.28-1.33 3.38-1.33h8.92c.35 0 .62.28.62.62 0 .34-.28.62-.62.62h-8.92c-.78 0-1.96.46-2.53.99l-6.09 5.64c-.52.48-.71 1.23-.49 1.9l2.2 6.68c.25.75.94 1.25 1.72 1.25h12.4c.59 0 1.07-.48 1.07-1.07V5.51c0-.34.28-.62.62-.62.34 0 .62.28.62.62v13.61a2.3 2.3 0 0 1-2.3 2.33Z" fill="#121214"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.15 11.33H6.92c-.7 0-.93-.39-1-.56-.06-.17-.16-.62.35-1.1l4.27-4.03c.46-.43 1.27-.76 1.9-.76h5.71c.81 0 1.47.66 1.47 1.47v3.51c0 .81-.66 1.47-1.47 1.47Zm-10.5-1.25h10.5c.13 0 .22-.1.22-.22v-3.5c0-.12-.1-.22-.22-.22h-5.71c-.31 0-.82.2-1.04.42l-3.75 3.52Z" fill="#121214"></path>
                <path d="M17.04 13.72h1.95c.35 0 .62-.28.62-.62 0-.34-.27-.62-.62-.62h-1.95c-.34 0-.62.28-.62.62 0 .34.27.62.62.62Z" fill="#121214"></path>
              </svg> &nbsp; <span>2 door</span>
            </div>
          </div>
          <div class="mt-4">
            <p class="fw-bold">
              <small>HOSTED BY</small>
            </p>
            <div class="row">
              <div class="col-2 text-center position-relative">
                <a href="">
                  <img class="rounded-circle img-fluid" src="{{ asset('assets/img/hosted.jpg')}}" alt="">
                  <div class="img-cap">
                    <p class="img_cap_cont text-dark">
                      5.0 <i class="fa fa-star" aria-hidden="true"></i>
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-10">
                <p class="h4 fw-bold">Xscape Rentals</p>
                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="All-Star Host" aria-labelledby="allStarHostLabel" class="seo-pages-0" role="img" version="1.1">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="m19.585 13.072 2.257 2.76a.7.7 0 0 1-.404 1.128l-2.871.575-1.18 3.538a.698.698 0 0 1-.664.478.7.7 0 0 1-.593-.326l-2.376-3.771a.554.554 0 0 1 .294-.826 8.623 8.623 0 0 0 4.649-3.525c.201-.31.655-.315.888-.03Zm-15.169 0c.234-.284.688-.278.889.03a8.62 8.62 0 0 0 4.648 3.526c.345.108.487.52.294.826l-2.376 3.77a.703.703 0 0 1-1.258-.151l-1.18-3.538-2.87-.574a.698.698 0 0 1-.404-1.13l2.257-2.758Zm11.242-5.249-1.715 1.455.522 2.171a.383.383 0 0 1-.574.417l-1.89-1.174-1.89 1.173a.383.383 0 0 1-.576-.417l.524-2.17-1.714-1.451a.384.384 0 0 1 .215-.678l2.242-.157.843-2.039a.383.383 0 0 1 .709 0l.843 2.039 2.24.155a.384.384 0 0 1 .22.676ZM12 2a6.667 6.667 0 1 0 .001 13.334 6.667 6.667 0 0 0 0-13.334Z" fill="#121214"></path>
                </svg>
                <span>All-Star Host</span>
                <p class="mb-1">7,847 tripsJoined Feb 2021</p>
                <p class="small text-muted">Typically responds in 1 minute</p>
              </div>
            </div>
          </div>
          <div class="mt-2 row">
            <div class="col-1 text-center">
              <svg width="32px" height="32px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="eudsx7t0 seo-pages-1nl2isx-MediaObjectItem" role="img" version="1.1">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.579 6.56c-6.83 0-12.36 5.53-12.36 12.36 0 6.83 5.53 12.36 12.36 12.36 6.83 0 12.36-5.53 12.36-12.36 0-6.83-5.54-12.36-12.36-12.36Zm2.74 14.62.79 3.28-2.85-1.77c-.21-.13-.44-.19-.68-.19-.23 0-.47.06-.67.19l-2.85 1.77.79-3.28c.11-.47-.05-.96-.42-1.28l-2.6-2.2 3.38-.24c.48-.03.91-.34 1.09-.79l1.27-3.07 1.27 3.07c.19.45.61.75 1.09.79l3.38.24-2.59 2.2c-.36.32-.52.81-.4 1.28Z" fill="#dc3545"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="m43.399 33.56-5.9-7.22c1.26-2.19 2-4.72 2-7.43C39.489 10.69 32.809 4 24.579 4s-14.92 6.69-14.92 14.92c0 2.37.57 4.61 1.56 6.61-.02.02-.04.03-.06.05-.04.03-.08.06-.12.1l-6.45 7.89c-.28.35-.37.82-.21 1.24.15.42.51.73.95.82l5.24 1.05 2.15 6.45c.16.47.57.81 1.06.86a1.253 1.253 0 0 0 1.23-.59l6.27-9.95c1.06.24 2.16.38 3.29.38.77 0 1.51-.08 2.25-.19l6.15 9.76c.24.38.65.6 1.08.6.05 0 .1 0 .15-.01.49-.06.9-.4 1.06-.86l2.15-6.45 5.24-1.05c.44-.09.8-.4.95-.82.16-.43.08-.9-.2-1.25Zm-31.18-14.64c0-6.82 5.54-12.36 12.36-12.36 6.82 0 12.36 5.54 12.36 12.36 0 6.82-5.54 12.36-12.36 12.36-6.82 0-12.36-5.55-12.36-12.36Zm23.01 16.24c.14-.43.51-.76.96-.85l3.88-.78-4.1-5.01a15.035 15.035 0 0 1-6.53 4.48l4.26 6.75 1.53-4.59Zm-20.94 4.59-1.53-4.6c-.15-.43-.51-.76-.96-.85l-3.88-.78 4.7-5.75c1.58 2.12 3.69 3.82 6.15 4.87l-4.48 7.11Zm19.23-23.09c-.26-.8-.98-1.36-1.82-1.42l-3.8-.26-1.42-3.44a2.07 2.07 0 0 0-1.91-1.28c-.84 0-1.59.5-1.91 1.28l-1.43 3.44-3.81.27c-.84.07-1.55.63-1.8 1.43-.26.8-.01 1.67.63 2.21l2.91 2.47-.89 3.68a2.064 2.064 0 0 0 3.09 2.24l3.2-1.99 3.2 1.99a2.076 2.076 0 0 0 2.3-.08c.68-.5 1-1.34.8-2.16l-.89-3.68 2.91-2.47c.66-.56.91-1.43.64-2.23Zm-5.79 3.24c-.37.31-.53.81-.42 1.28l.79 3.28-2.85-1.77c-.21-.13-.44-.19-.68-.19-.23 0-.47.06-.67.19l-2.85 1.77.79-3.28c.11-.47-.05-.96-.42-1.28l-2.6-2.2 3.38-.24c.48-.03.91-.34 1.09-.79l1.27-3.07 1.27 3.07c.19.45.61.75 1.09.79l3.38.24-2.57 2.2Z" fill="#dc3545"></path>
              </svg>
            </div>
            <div class="col-11">
              <p class="mb-1">All-Star Hosts like Xscape Rentals are the top-rated and most experienced hosts on Turo.</p>
              <a class="text-theme" href="">Learn more</a>
            </div>
          </div>
          <div class="mt-2 row">
            <div class="col-1 text-center">
              <svg width="32px" height="32px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="eudsx7t0 seo-pages-1nl2isx-MediaObjectItem" role="img" version="1.1">
                <path d="m30.45 26.43-4.38-4.38v-5.78H13.71v14.94c0 2 1.62 3.62 3.62 3.62h5.13c2 0 3.62-1.62 3.62-3.62V26.6l2.11 2.11c.61.61 1.61.61 2.23 0l.04-.05c.61-.61.61-1.62-.01-2.23ZM29.27 10.99a2.49 2.49 0 0 1 2.49-2.49h.84V5.65h-7.97l-2.87 3.23 2.1 2.1h5.41" fill="#dc3545"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.218 11.118 20.87 9.77c-.47-.47-.49-1.22-.05-1.71l2.87-3.23c.23-.28.57-.43.93-.43h7.97c.69 0 1.25.56 1.25 1.25v3.06c0 .69-.56 1.25-1.25 1.25h-1.05c-.441 0-.816.275-.963.664l2.653 3.156c.19.22.29.51.29.8v.45h3.24c.69 0 1.25.56 1.25 1.25v5.78c0 .395-.184.748-.47.977 1.907 2.347 3.25 4.938 3.85 7.473.81 3.43.2 6.38-1.73 8.31-.68.68-1.5 1.21-2.44 1.56a8.89 8.89 0 0 1-2.399.497l-.001.013c-.13 1.56-1.47 2.79-3.05 2.79H12.25c-1.59 0-2.92-1.24-3.05-2.82L7.811 23.31H7.25c-.69 0-1.25-.56-1.25-1.25v-5.78c0-.69.56-1.25 1.25-1.25h13.5v-1.49c0-.26.08-.52.24-.73l1.228-1.692Zm6.454 1.122h-4.17l-1.242 1.72v1.07h7.762l-2.35-2.79Zm6.357 26.105a5.976 5.976 0 0 0 1.311-.305c.6-.22 1.12-.56 1.55-.98 1.3-1.29 1.67-3.41 1.07-5.97-.465-1.951-1.451-3.958-2.854-5.83L35.03 38.346Zm.45-17.535a22.746 22.746 0 0 0-3.419-2.69c-.58-.37-1.36-.2-1.73.38-.37.58-.2 1.36.38 1.73a20.033 20.033 0 0 1 3.102 2.448L32.33 40.68c-.03.29-.27.51-.56.51H12.25c-.29 0-.54-.22-.56-.51l-1.374-17.37h.164a1.25 1.25 0 0 0 0-2.5H8.5v-3.28h3.96v13.69c0 2.69 2.19 4.87 4.87 4.87h5.13c2.68 0 4.87-2.18 4.87-4.86v-1.61c1.07 1.04 2.87 1.07 4.01-.07.54-.54.83-1.24.83-2s-.3-1.47-.83-2l-4.01-4.01v-4.01h8.18v3.28h-.03ZM28.25 9.74h-3.88l-.9-.91 1.72-1.93h6.16v.57c-1.42.08-2.62 1-3.1 2.27ZM22 17.53h-7.04v13.69a2.37 2.37 0 0 0 1.6 2.242V26.3a1.25 1.25 0 0 1 2.5 0v7.29h1.54v-7.26a1.25 1.25 0 0 1 2.5 0v7.173a2.37 2.37 0 0 0 1.73-2.283V26.6c0-.51.3-.96.77-1.16.47-.19 1.01-.09 1.36.27l2.11 2.11c.16.16.3.16.46 0 .13-.13.14-.22.14-.27 0-.05-.01-.15-.09-.23l-4.38-4.38c-.23-.23-.37-.55-.37-.88v-4.53H22Z" fill="#dc3545"></path>
                <path d="M35.64 9.21c-.69 0-1.25-.56-1.25-1.25V5.83a1.25 1.25 0 0 1 2.5 0v2.13c0 .69-.56 1.25-1.25 1.25Z" fill="#dc3545"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.74 10.63c0 1.93 1.57 3.51 3.51 3.51 1.94 0 3.51-1.58 3.51-3.51 0-1.93-1.57-3.51-3.51-3.51-1.93 0-3.51 1.58-3.51 3.51Zm2.5-.01c0-.56.45-1.01 1.01-1.01s1.01.45 1.01 1.01-.45 1.01-1.01 1.01-1.01-.45-1.01-1.01Z" fill="#dc3545"></path>
                <path d="M16.56 7.07a1.24 1.24 0 1 0 0-2.48 1.24 1.24 0 0 0 0 2.48Z" fill="#dc3545"></path>
              </svg>
            </div>
            <div class="col-11">
              <p class="mb-1">Xscape Rentals has completed training on enhanced cleaning and disinfection practices.</p>
              <a class="text-theme" href="">Learn more</a>
            </div>
          </div>
          <div class="mt-4">
            <p class="fw-bold"><small>DESCRIPTION</small></p>
            <p>This is an automatic transmission</p>
            <p id="more1">Turn heads while you cruise down the highway in this blacked out beast. Upgraded and blacked out rims match the shiny gloss black body. This summer, drop the top with the push of a button and fill all eyes on you in the California sun.
              <br>
              Fastrak Toll Tag# : 1010000984937
            </p>
            <button onclick="showSec1()" id="showBtn1">More</button>
          </div>
          <div class="mt-4">
            <p class="fw-bold mb-1"><small>FEATURES</small></p>
            <div class="fea_sec">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single_fea my-2">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-12fc1ls-MediaObjectItem" role="img" version="1.1">
                      <path d="M11.89 21.78C6.44 21.78 2 17.34 2 11.89S6.44 2 11.89 2s9.89 4.44 9.89 9.89-4.44 9.89-9.89 9.89Zm0-18.53c-4.76 0-8.64 3.88-8.64 8.64 0 4.76 3.88 8.64 8.64 8.64 4.76 0 8.64-3.88 8.64-8.64 0-4.76-3.88-8.64-8.64-8.64Z" fill="#121214"></path>
                      <path d="M18.17 11.36H16.8V9.99c0-.08-.06-.14-.14-.14H16c-.08 0-.14.06-.14.14v1.36H14.5c-.08 0-.14.06-.14.14v.66c0 .08.06.14.14.14h1.36v1.36c0 .08.06.14.14.14h.66c.08 0 .14-.06.14-.14V12.3h1.36c.08 0 .14-.06.14-.14v-.66c.01-.08-.06-.14-.13-.14ZM9.98 13.7c0-.08-.06-.14-.14-.14H7.95l1.08-1.05c.65-.62.95-1.11.95-1.81 0-.92-.68-1.57-1.89-1.57-1.22 0-1.92.81-1.92 1.66 0 .19.02.34.06.47.04.14.18.12.18.12l.96-.18s.12-.02.09-.15a.852.852 0 0 1-.03-.23c0-.4.31-.63.66-.63.43 0 .68.27.68.64 0 .34-.12.57-.56.99l-2 1.93s-.05.04-.05.12v.65c0 .08.06.14.14.14h3.55c.08 0 .14-.06.14-.14v-.82h-.01ZM13.15 9.23h-.97s-.08-.01-.12.06c-.18.37-.52.58-1.03.62-.17.01-.15.12-.15.12v.92s-.01.12.13.12c.47-.01.78-.11 1.02-.36v3.8c0 .08.06.14.14.14h.97c.08 0 .14-.06.14-.14V9.37c0-.08-.06-.14-.13-.14Z" fill="#121214"></path>
                    </svg>
                    <span>Must be 21+ to book</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single_fea my-2">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-12fc1ls-MediaObjectItem" role="img" version="1.1">
                      <path d="M11.936 19.52a.625.625 0 0 1-.625-.626v-4.726H9.05a.626.626 0 0 1 0-1.25h2.26V4.979a.625.625 0 0 1 1.25 0v7.939h2.259a.625.625 0 0 1 0 1.25h-2.26v4.726c0 .345-.28.625-.624.625Z" fill="#121214"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M19.204 22.902H4.725a.625.625 0 0 1-.625-.625V1.725c0-.344.28-.625.625-.625h14.479c.344 0 .625.281.625.625v20.552a.626.626 0 0 1-.625.625ZM5.35 21.652h13.229V2.35H5.35v19.302Z" fill="#121214"></path>
                    </svg>
                    <span>Automatic transmission</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single_fea my-2">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-12fc1ls-MediaObjectItem" role="img" version="1.1">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.45 7.5h-4.8c-.4 0-.6-.3-.6-.7V4.5c0-.3.3-.6.6-.6h4.8c.3 0 .6.3.6.6v2.3c0 .4-.3.7-.6.7Zm-4.2-1.3h3.5v-1h-3.5v1Z" fill="#121214"></path>
                      <path d="M9.65 13h4.8c.3 0 .6-.3.6-.6s-.3-.6-.6-.6h-4.8c-.3 0-.6.3-.6.6s.3.6.6.6Z" fill="#121214"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.35 15.1h5.3c1.3 0 2.3-1 2.3-2.3V6.9h.7c.4 0 .6-.3.6-.6s-.3-.6-.6-.6h-.7V3.8c0-1.3-1-2.3-2.3-2.3h-5.3c-1.3 0-2.3 1-2.3 2.3v1.8h-.7c-.3 0-.6.2-.6.6 0 .4.3.7.6.7h.7v5.9c0 1.3 1 2.3 2.3 2.3Zm-1-11.3c0-.6.4-1.1 1-1.1h5.4c.6 0 1.1.5 1.1 1.1v9c0 .6-.5 1.1-1.1 1.1h-5.3c-.6 0-1.1-.5-1.1-1.1v-9Z" fill="#121214"></path>
                      <path d="M11.85 19.1c-1 0-2-.4-2.8-1.1-.2-.2-.2-.6 0-.9.2-.2.6-.2.9 0 1.1 1.1 2.8 1 3.8 0 .2-.2.6-.2.9 0 .2.2.2.6 0 .9-.7.7-1.8 1.1-2.8 1.1ZM11.95 22.4c-1.8 0-3.6-.7-5-2.1-.2-.2-.2-.6 0-.9.2-.2.6-.2.9 0 2.3 2.3 6.1 2.3 8.4-.1.2-.2.6-.2.9 0 .2.2.2.6 0 .9-1.5 1.5-3.3 2.2-5.2 2.2Z" fill="#121214"></path>
                    </svg>
                    <span>Backup camera</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single_fea my-2">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-12fc1ls-MediaObjectItem" role="img" version="1.1">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.3 5.025c0-.345.28-.625.625-.625h4.8c.345 0 .625.28.625.625v2.3c0 .345-.28.625-.625.625h-4.8a.625.625 0 0 1-.625-.625v-2.3Zm1.25.625V6.7h3.55V5.65H7.55Z" fill="#121214"></path>
                      <path d="M6.925 12.3a.625.625 0 1 0 0 1.25h4.8a.625.625 0 1 0 0-1.25h-4.8Z" fill="#121214"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.625 2C5.38 2 4.3 3.08 4.3 4.325V6.1h-.675a.625.625 0 1 0 0 1.25H4.3v5.975c0 1.245 1.08 2.325 2.325 2.325h5.3c1.369 0 2.325-1.104 2.325-2.325V7.35h.675a.625.625 0 1 0 0-1.25h-.675V4.325C14.25 3.08 13.17 2 11.925 2h-5.3ZM5.55 4.325c0-.555.52-1.075 1.075-1.075h5.3c.555 0 1.075.52 1.075 1.075v9a1.06 1.06 0 0 1-1.075 1.075h-5.3c-.555 0-1.075-.52-1.075-1.075v-9Z" fill="#121214"></path>
                      <path d="M16.725 14.1c.345 0 .625.28.625.625 0 2.152-1.78 3.907-3.89 4.024a.625.625 0 1 1-.07-1.248c1.49-.083 2.71-1.328 2.71-2.776 0-.345.28-.625.625-.625Z" fill="#121214"></path>
                      <path d="M20.025 14.1c.345 0 .625.28.625.625 0 3.948-3.18 7.116-7.108 7.225a.625.625 0 0 1-.034-1.25c3.271-.09 5.892-2.723 5.892-5.975 0-.345.28-.625.625-.625Z" fill="#121214"></path>
                    </svg>
                    <span>Blind spot warning</span>
                  </div>
                </div>
              </div>
              <div id="more2">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="single_fea my-2">
                      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-12fc1ls-MediaObjectItem" role="img" version="1.1">
                        <path d="M6.25 17.869a.626.626 0 0 0 .882.002l4.992-4.963 4.545 4.522-3.905 3.894v-5.94a.625.625 0 0 0-1.25 0v6.439c0 .422.253.8.644.962a1.037 1.037 0 0 0 1.136-.224l4.258-4.246c.238-.237.369-.552.369-.887 0-.335-.131-.65-.37-.888l-4.54-4.514 4.568-4.542c.237-.236.37-.551.37-.886 0-.335-.13-.65-.368-.888l-4.288-4.275a1.036 1.036 0 0 0-1.136-.223c-.39.162-.643.54-.643.962V8.65a.626.626 0 0 0 1.25 0V2.674l3.934 3.923-4.573 4.548-5.02-4.991a.625.625 0 1 0-.881.886l5.014 4.987-4.986 4.958a.623.623 0 0 0-.003.884Z" fill="#121214"></path>
                      </svg>
                      <span>Bluetooth</span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="single_fea my-2">
                      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-12fc1ls-MediaObjectItem" role="img" version="1.1">
                        <path d="M17.4 3.4c-.3 0-.6-.3-.6-.6V1.6c0-.3.3-.6.6-.6s.6.3.6.6v1.2c0 .4-.3.6-.6.6Z" fill="#121214"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4 8.7c-1.3 0-2.3-1-2.3-2.3 0-1.3 1-2.3 2.3-2.3 1.3 0 2.3 1 2.3 2.3 0 1.3-1.1 2.3-2.3 2.3Zm0-3.4c-.6 0-1 .5-1 1s.5 1 1 1 1-.5 1-1-.5-1-1-1Z" fill="#121214"></path>
                        <path d="M17.4 11.8c-.3 0-.6-.3-.6-.6V9.9c0-.3.3-.6.6-.6s.6.3.6.6v1.2c0 .4-.3.7-.6.7ZM13.3 9.4c-.2 0-.4-.1-.5-.3-.2-.3-.1-.7.2-.9l1-.6c.3-.2.7-.1.9.2.2.3.1.7-.2.9l-1 .6c-.2.1-.3.1-.4.1ZM20.5 5.2c-.2 0-.4-.1-.5-.3-.3-.3-.2-.7.1-.9l1-.6c.3-.2.7-.1.9.2.2.4.1.8-.2.9l-1 .6c-.1.1-.2.1-.3.1ZM21.5 9.4c-.1 0-.2 0-.3-.1l-1-.6c-.3-.2-.4-.6-.2-.9.2-.3.6-.4.9-.2l1 .6c.3.2.4.6.2.9-.2.2-.4.3-.6.3ZM14.3 5.2c-.1 0-.2 0-.3-.1l-1-.6c-.3-.2-.4-.6-.2-.9.2-.3.6-.4.9-.2l1 .6c.3.2.4.6.2.9-.2.2-.4.3-.6.3Z" fill="#121214"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7 19.7h-2.228c.018.13.028.264.028.4-.1 1.5-1.3 2.8-2.8 2.8a2.795 2.795 0 0 1-2.771-3.2H2.4c-.3 0-.6-.3-.6-.6s.3-.6.6-.6h10.001a2.775 2.775 0 0 1 2.299-1.2c.933 0 1.788.464 2.302 1.2H19.1v-1.9c0-.6-.5-1.1-1.1-1.2l-5.9-.6c-.05 0-.1-.025-.15-.05a.355.355 0 0 0-.15-.05l-5.1-4.1c-.3-.2-.3-.6-.1-.9.2-.2.6-.3.9-.1l5 4 5.7.6c1.2.1 2.2 1.2 2.2 2.4v2.5c0 .3-.3.6-.7.6Zm-5-1.1c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5 1.5-.7 1.5-1.5-.7-1.5-1.5-1.5Z" fill="#121214"></path>
                        <path d="M2.4 14.8h5.5c.4 0 .6-.3.6-.6s-.3-.6-.6-.6H2.4c-.3 0-.6.3-.6.6s.3.6.6.6Z" fill="#121214"></path>
                      </svg>
                      <span>Convertible</span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="single_fea my-2">
                      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-12fc1ls-MediaObjectItem" role="img" version="1.1">
                        <path d="M15.662 11.39a.623.623 0 0 0 .884-.002l4.521-4.52c.29-.288.448-.673.448-1.08 0-.408-.159-.792-.447-1.08l-3.299-3.3c-.545-.544-1.496-.543-2.04 0l-4.564 4.564a.626.626 0 0 0 .884.884l4.565-4.564c.093-.092.177-.093.271 0l3.3 3.3a.275.275 0 0 1 0 .391l-4.523 4.524a.624.624 0 0 0 0 .883Z" fill="#121214"></path>
                        <path d="M4.739 21.104a1.483 1.483 0 0 0 2.092 0l4.63-4.63a.624.624 0 1 0-.884-.884l-4.63 4.63a.232.232 0 0 1-.325 0l-3.305-3.306a.23.23 0 0 1 0-.325l4.198-4.199a.784.784 0 0 1 .558-.23c.21 0 .41.081.559.23l1.22 1.223c1.367 1.372 3.556 1.432 4.88.133a3.393 3.393 0 0 0 1.009-2.664 3.411 3.411 0 0 0-1.39-2.502 3.411 3.411 0 0 0-3.916-.05c-.45.315-.808.714-1.063 1.187a.624.624 0 1 0 1.1.593c.162-.299.39-.553.678-.754.718-.5 1.754-.488 2.46.032.525.385.838.947.883 1.584a2.136 2.136 0 0 1-.636 1.681c-.822.808-2.25.751-3.12-.123l-1.22-1.222a2.023 2.023 0 0 0-1.442-.599h-.002c-.545 0-1.057.212-1.442.597l-4.2 4.2a1.484 1.484 0 0 0 .002 2.093l3.306 3.305ZM12.179 19.134a.625.625 0 0 1 0-1.25 5.709 5.709 0 0 0 5.703-5.702.625.625 0 1 1 1.25 0c0 3.833-3.12 6.952-6.953 6.952Z" fill="#121214"></path>
                        <path d="M11.554 21.61c0 .346.28.626.625.626 5.543 0 10.054-4.51 10.054-10.054a.626.626 0 0 0-1.25 0c0 4.855-3.95 8.804-8.804 8.804a.625.625 0 0 0-.625.625Z" fill="#121214"></path>
                      </svg>
                      <span>GPS</span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="single_fea my-2">
                      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="seo-pages-12fc1ls-MediaObjectItem" role="img" version="1.1">
                        <path d="M4.757 21.614h12.162a.624.624 0 0 0 .604-.466l4.42-16.782a1.888 1.888 0 0 0-1.34-2.304 1.881 1.881 0 0 0-1.43.194c-.435.253-.745.66-.874 1.146l-3.082 11.621h-1.106a.625.625 0 0 0-.001 1.25l1.586.001h.002c.284 0 .532-.19.604-.465l3.206-12.088a.626.626 0 0 1 .294-.385.636.636 0 0 1 .932.712l-4.298 16.316H5.181L3.547 16.26l1.587.001a.625.625 0 1 0 .001-1.25l-2.51-.002a.626.626 0 0 0-.58.856l2.132 5.356a.625.625 0 0 0 .58.394Z" fill="#121214"></path>
                        <path d="M5.95 18.204a.623.623 0 0 0 .882.071c1.2-1.021 1.678-3.176.204-5.159-1.092-1.468-.759-2.934-.173-3.505a.625.625 0 0 0-.873-.895c-1.063 1.037-1.409 3.193.043 5.146 1.02 1.373.756 2.808-.012 3.461a.626.626 0 0 0-.07.881Z" fill="#121214"></path>
                        <path d="M8.7 18.424a.626.626 0 0 1-.406-1.101c.769-.653 1.033-2.088.013-3.461-1.452-1.953-1.106-4.109-.043-5.146a.625.625 0 0 1 .873.895c-.586.571-.92 2.037.173 3.505 1.474 1.983.995 4.138-.204 5.159a.625.625 0 0 1-.405.149Z" fill="#121214"></path>
                        <path d="M10.497 18.204a.623.623 0 0 0 .882.071c1.2-1.021 1.678-3.176.203-5.159-1.09-1.468-.758-2.934-.172-3.505a.625.625 0 0 0-.873-.895c-1.063 1.037-1.409 3.193.042 5.146 1.021 1.373.757 2.808-.01 3.461a.626.626 0 0 0-.072.881Z" fill="#121214"></path>
                      </svg>
                      <span>Heated seats</span>
                    </div>
                  </div>
                </div>
              </div>
              <button onclick="showSec2()" id="showBtn2">More</button>
            </div>
          </div>
          <div class="mt-4">
            <p class="fw-bold mb-1"> <small>EXTRAS</small> </p>
            <p>Add optional Extras to your trip at checkout.</p>
            <div id="more2 mt-2">
              <div class="single_extra border-bottom">
                <p class="fw-bold mb-1">Pet fee</p>
                <p>$40/trip</p>
              </div>
              <div class="single_extra border-bottom">
                <p class="fw-bold mb-1">Child safety seat</p>
                <p>$35/trip <span class="text-muted">1 available</span></p>
              </div>
              <div class="single_extra border-bottom">
                <p class="fw-bold mb-1">Unlimited mileage</p>
                <p>$80/trip</p>
              </div>
            </div>
          </div>
          <div class="mt-4">
            <p class="fw-bold"><small>RATINGS AND REVIEWS</small></p>
            <span class="h1">4.89</span> <span> <i class="fa fa-star" aria-hidden="true"></i></span>
            <p>(80 ratings)</p>
            <p class="fw-bold text-muted"><small>REVIEWS</small></p>
            <div class="single_review">
              <div class="row">
                <div class="col-2">
                  <img src="{{ asset('assets/img/user_icon.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-10">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5"></div>
    </div>
  </div>
</div>
@endsection