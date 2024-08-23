<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Success</title>
  <link href="{{ asset('assets/shop/css/theme.min.css') }}" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f8f9fa;
    }
    .content-container {
      text-align: center;
      padding: 20px;
    }
    .content-container img {
      width: 150px;
      height: auto;
    }
    .content-container h2 {
      margin-top: 20px;
      font-weight: 600;
      color: #333;
    }
    .content-container p {
      color: #6c757d;
    }

    .inline-text {
      display: inline-block;
      margin-right: 10px;
    }

    .loader {
      width: 40px;
      aspect-ratio: 4;
      background: radial-gradient(circle closest-side,#000 90%,#0000) 0/calc(100%/3) 100% space;
      clip-path: inset(0 100% 0 0);
      animation: l1 1s steps(4) infinite;
    }
    @keyframes l1 {to{clip-path: inset(0 -34% 0 0)}}
  </style>
</head>
<body>
  <div class="container content-container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="d-flex justify-content-center">
          <svg width="288" height="288" viewBox="0 0 288 288" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="144" cy="144" r="144" fill="#ECF7F7"/>
            <path d="M133.461 203.234H62.2578C53.8441 203.234 47 196.39 47 187.977V86.2578C47 77.8441 53.8441 71 62.2578 71H208.055C216.468 71 223.312 77.8441 223.312 86.2578V165.09C223.312 167.899 221.034 170.176 218.227 170.176C215.419 170.176 213.141 167.899 213.141 165.09V86.2578C213.141 83.4533 210.859 81.1719 208.055 81.1719H62.2578C59.4533 81.1719 57.1719 83.4533 57.1719 86.2578V187.977C57.1719 190.781 59.4533 193.062 62.2578 193.062H133.461C136.269 193.062 138.547 195.339 138.547 198.148C138.547 200.958 136.269 203.234 133.461 203.234Z" fill="#00B2AE"/>
            <path d="M218.227 132.031H52.0859C49.2781 132.031 47 129.755 47 126.945C47 124.136 49.2781 121.859 52.0859 121.859H218.227C221.034 121.859 223.312 124.136 223.312 126.945C223.312 129.755 221.034 132.031 218.227 132.031Z" fill="#00B2AE"/>
            <path d="M218.227 108.297H52.0859C49.2781 108.297 47 106.02 47 103.211C47 100.401 49.2781 98.125 52.0859 98.125H218.227C221.034 98.125 223.312 100.401 223.312 103.211C223.312 106.02 221.034 108.297 218.227 108.297Z" fill="#00B2AE"/>
            <path d="M106.336 155.766H72.4297C69.6218 155.766 67.3438 153.489 67.3438 150.68C67.3438 147.87 69.6218 145.594 72.4297 145.594H106.336C109.144 145.594 111.422 147.87 111.422 150.68C111.422 153.489 109.144 155.766 106.336 155.766Z" fill="#00B2AE"/>
            <path d="M85.9922 172.719H72.4297C69.6218 172.719 67.3438 170.442 67.3438 167.633C67.3438 164.823 69.6218 162.547 72.4297 162.547H85.9922C88.8 162.547 91.0781 164.823 91.0781 167.633C91.0781 170.442 88.8 172.719 85.9922 172.719Z" fill="#00B2AE"/>
            <path d="M194.492 243.922C169.251 243.922 148.719 223.388 148.719 198.148C148.719 172.909 169.251 152.375 194.492 152.375C219.733 152.375 240.266 172.909 240.266 198.148C240.266 223.388 219.733 243.922 194.492 243.922ZM194.492 162.547C174.86 162.547 158.891 178.518 158.891 198.148C158.891 217.779 174.86 233.75 194.492 233.75C214.124 233.75 230.094 217.779 230.094 198.148C230.094 178.518 214.124 162.547 194.492 162.547Z" fill="#00B2AE"/>
            <path d="M188.559 216.799C187.211 216.799 185.916 216.262 184.963 215.309L169.705 200.051C167.718 198.066 167.718 194.844 169.705 192.859C171.692 190.872 174.91 190.872 176.897 192.859L188.559 204.519L212.088 180.988C214.074 179.002 217.293 179.002 219.279 180.988C221.266 182.973 221.266 186.194 219.279 188.18L192.154 215.309C191.201 216.262 189.906 216.799 188.559 216.799Z" fill="#00B2AE"/>
          </svg>
        </div>
        <h2 class="inline-text" style="color: #1DBBB7;">Thank You</h2>
        <p class="fs-14">Your order has been received</p>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/shop/js/theme.min.js') }}"></script>
  <script>
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        window.location.replace('{{ route("view_shop") }}');
      }, 2000);
    });
  </script>
</body>
</html>
