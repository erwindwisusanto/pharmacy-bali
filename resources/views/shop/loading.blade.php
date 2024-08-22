<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find the Nearest Pharmacy</title>
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
          <svg width="288" height="308" viewBox="0 0 288 308" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="144" cy="144" r="144" fill="#ECF7F7"/>
            <g clip-path="url(#clip0_0_1)">
            <path d="M65.7637 112.215H222.236V187.993H65.7637V112.215Z" fill="#00B2AE"/>
            <path d="M213.881 112.215H222.236V187.993H213.881V112.215Z" fill="#00A7A4"/>
            <path d="M222.236 100.766H65.7637V83.9048C65.7637 82.2428 67.1111 80.8958 68.7727 80.8958H219.227C220.889 80.8958 222.236 82.2428 222.236 83.9048V100.766Z" fill="#00B2AE"/>
            <path d="M105.204 80.9086C120.161 80.7291 132.14 68.4588 131.961 53.5021C131.781 38.5454 119.511 26.5662 104.554 26.7456C89.5969 26.9251 77.6175 39.1954 77.797 54.1521C77.9765 69.1087 90.2469 81.088 105.204 80.9086Z" fill="#00B2AE"/>
            <path d="M217.98 197.056V186.212C217.98 184.55 216.632 183.203 214.971 183.203H65.7637C64.1017 183.203 62.7547 184.551 62.7547 186.212V197.056H217.98Z" fill="#CCCCCC"/>
            <path d="M100.625 171.167H80.8093C79.1473 171.167 77.8003 169.82 77.8003 168.158V138.068C77.8003 136.406 79.1477 135.059 80.8093 135.059H100.625C102.287 135.059 103.634 136.406 103.634 138.068V168.158C103.634 169.82 102.287 171.167 100.625 171.167Z" fill="#E7F9FD"/>
            <path d="M199.925 171.167H180.109C178.447 171.167 177.1 169.82 177.1 168.158V138.068C177.1 136.406 178.447 135.059 180.109 135.059H199.925C201.587 135.059 202.934 136.406 202.934 138.068V168.158C202.934 169.82 201.587 171.167 199.925 171.167Z" fill="#E7F9FD"/>
            <path d="M116.917 47.796H112.403C111.572 47.796 110.899 47.1225 110.899 46.2913V41.7781C110.899 40.1161 109.552 38.7691 107.89 38.7691H101.871C100.209 38.7691 98.8624 40.1161 98.8624 41.7781V46.2917C98.8624 47.1225 98.1889 47.7964 97.3577 47.7964H92.8441C91.1821 47.7964 89.8351 49.1434 89.8351 50.8054V56.8233C89.8351 58.4853 91.1825 59.8323 92.8441 59.8323H97.3577C98.1885 59.8323 98.8624 60.5058 98.8624 61.3369V65.8506C98.8624 67.5125 100.21 68.8595 101.871 68.8595H107.89C109.552 68.8595 110.899 67.5122 110.899 65.8506V61.3369C110.899 60.5061 111.572 59.8323 112.403 59.8323H116.917C118.579 59.8323 119.926 58.4849 119.926 56.8233V50.805C119.926 49.1434 118.579 47.796 116.917 47.796Z" fill="#E7F9FD"/>
            <path d="M186.11 69.4622L190.942 43.747L167.538 38.4967L152.764 47.3605C144.214 52.4906 141.441 63.5805 146.572 72.1304C149.957 77.7728 155.937 80.8987 162.071 80.8987C165.232 80.8987 168.434 80.0679 171.342 78.3231L186.11 69.4622Z" fill="#00B2AE"/>
            <path d="M97.0583 80.8958H128.353V100.767H97.0583V80.8958Z" fill="#E7F9FD"/>
            <path d="M159.647 80.8958H190.942V100.767H159.647V80.8958Z" fill="#E7F9FD"/>
            <path d="M158.161 197.056H122.937V138.068C122.937 136.406 124.284 135.059 125.946 135.059H155.152C156.814 135.059 158.161 136.406 158.161 138.068V197.056Z" fill="#E7F9FD"/>
            <path d="M151.523 183.203H136.477C135.646 183.203 134.973 182.53 134.973 181.699V172.671C134.973 171.841 135.646 171.167 136.477 171.167H151.523C152.354 171.167 153.027 171.84 153.027 172.671V181.699C153.027 182.53 152.354 183.203 151.523 183.203Z" fill="#75E2F8"/>
            <path d="M151.523 159.131H136.477C135.646 159.131 134.973 158.457 134.973 157.626V148.599C134.973 147.768 135.646 147.094 136.477 147.094H151.523C152.354 147.094 153.027 147.768 153.027 148.599V157.626C153.027 158.457 152.354 159.131 151.523 159.131Z" fill="#75E2F8"/>
            <path d="M219.227 80.8958H210.872C212.534 80.8958 213.881 82.2428 213.881 83.9048V100.766H222.236V83.9048C222.236 82.2428 220.889 80.8958 219.227 80.8958Z" fill="#00A7A4"/>
            <path d="M104.881 26.7329C103.46 26.7329 102.065 26.8437 100.703 27.0544C113.676 29.0633 123.607 40.2785 123.607 53.8143C123.607 67.3502 113.676 78.5654 100.703 80.5743C102.065 80.785 103.46 80.8958 104.881 80.8958C119.838 80.8958 131.962 68.7709 131.962 53.8143C131.962 38.8574 119.837 26.7329 104.881 26.7329Z" fill="#0F747F"/>
            <path d="M222.236 183.203H213.881C215.543 183.203 216.89 184.55 216.89 186.212V197.056H225.245V186.212C225.245 184.55 223.898 183.203 222.236 183.203Z" fill="#00A7A4"/>
            <path d="M107.891 135.058H99.5359C101.198 135.058 102.545 136.405 102.545 138.067V168.158C102.545 169.82 101.197 171.167 99.5359 171.167H107.891C109.553 171.167 110.9 169.82 110.9 168.158V138.067C110.9 136.406 109.553 135.058 107.891 135.058Z" fill="#CEDEE0"/>
            <path d="M207.191 135.058H198.836C200.498 135.058 201.845 136.405 201.845 138.067V168.158C201.845 169.82 200.498 171.167 198.836 171.167H207.191C208.853 171.167 210.2 169.82 210.2 168.158V138.067C210.2 136.406 208.853 135.058 207.191 135.058Z" fill="#CEDEE0"/>
            <path d="M186.11 69.4622L188.195 58.3628L159.913 75.3319C157.43 76.8221 154.731 77.6434 152.027 77.8519C155.007 79.8387 158.511 80.8983 162.071 80.8983C165.232 80.8983 168.434 80.0675 171.342 78.3227L186.11 69.4622Z" fill="#00B2AE"/>
            <path d="M162.055 135.058H153.7C155.361 135.058 156.708 136.405 156.708 138.067V197.056H165.064V138.068C165.064 136.406 163.716 135.058 162.055 135.058Z" fill="#CEDEE0"/>
            <path d="M218.343 117.004H62.7547C61.0928 117.004 59.7457 115.657 59.7457 113.995V101.959C59.7457 100.297 61.0928 98.95 62.7547 98.95H218.343C220.005 98.95 221.352 100.297 221.352 101.959V113.995C221.352 115.657 220.005 117.004 218.343 117.004Z" fill="#CCCCCC"/>
            <path d="M225.245 98.95H216.89C218.552 98.95 219.899 100.297 219.899 101.959V113.995C219.899 115.657 218.552 117.004 216.89 117.004H225.245C226.907 117.004 228.254 115.657 228.254 113.995V101.959C228.255 100.297 226.907 98.95 225.245 98.95Z" fill="#00B2AE"/>
            <path d="M186.11 69.4622L201.433 60.2686C209.984 55.1388 212.756 44.0485 207.626 35.4986C202.496 26.9487 191.406 24.1758 182.855 29.3059L167.537 38.4963L186.11 69.4622Z" fill="#E7F9FD"/>
            <path d="M190.752 26.7874C192.902 28.223 194.778 30.1433 196.196 32.5078C201.327 41.0577 198.554 52.1477 190.004 57.2778L181.766 62.2204L186.11 69.4626L201.433 60.2689C209.984 55.1392 212.756 44.0489 207.626 35.499C203.988 29.4352 197.353 26.2821 190.752 26.7874Z" fill="#CEDEE0"/>
            <path d="M56.7364 195.241H231.264C232.926 195.241 234.273 196.588 234.273 198.25V204.268C234.273 205.93 232.925 207.277 231.264 207.277H56.7364C55.0744 207.277 53.7274 205.93 53.7274 204.268V198.25C53.7274 196.588 55.0744 195.241 56.7364 195.241Z" fill="#CCCCCC"/>
            <path d="M231.264 195.241H222.908C224.57 195.241 225.917 196.588 225.917 198.25V204.268C225.917 205.93 224.57 207.277 222.908 207.277H231.264C232.926 207.277 234.273 205.93 234.273 204.268V198.25C234.273 196.588 232.926 195.241 231.264 195.241Z" fill="#686868"/>
            <path d="M231.263 192.515H227.97V186.212C227.97 184.036 226.751 182.139 224.961 181.168V119.728H225.245C228.407 119.728 230.979 117.156 230.979 113.995V101.959C230.979 98.7971 228.407 96.2251 225.245 96.2251H224.961V83.9044C224.961 80.7429 222.389 78.1709 219.227 78.1709H176.89L202.834 62.6044C207.594 59.7491 210.956 55.2108 212.302 49.8264C213.649 44.442 212.817 38.8556 209.962 34.0964C207.107 29.3368 202.569 25.9748 197.184 24.6285C191.799 23.2822 186.213 24.1137 181.454 26.969L151.362 45.0232C146.603 47.8785 143.241 52.4165 141.894 57.8013C140.548 63.1856 141.379 68.772 144.235 73.5312C145.28 75.2735 146.569 76.8308 148.041 78.1706H122.028C129.677 72.7695 134.686 63.8686 134.686 53.8136C134.686 37.3785 121.315 24.0076 104.879 24.0076C99.4303 24.0076 94.0982 25.4923 89.46 28.3015C88.1729 29.0807 87.7613 30.7561 88.5409 32.0432C89.3205 33.3303 90.9959 33.7418 92.2826 32.9623C96.0701 30.6686 100.426 29.4567 104.88 29.4567C118.311 29.4567 129.237 40.3832 129.237 53.8136C129.237 67.2441 118.311 78.1706 104.88 78.1706C91.4489 78.1706 80.5224 67.2441 80.5224 53.8136C80.5224 49.3229 81.7539 44.936 84.0832 41.1268C84.8682 39.843 84.4639 38.1661 83.1805 37.3811C81.8963 36.5961 80.2198 37 79.4344 38.2838C76.582 42.95 75.0737 48.3199 75.0737 53.8144C75.0737 63.869 80.0832 72.7702 87.7323 78.1713H68.7728C65.6113 78.1713 63.0393 80.7432 63.0393 83.9048V96.2255H62.7545C59.593 96.2255 57.021 98.7974 57.021 101.959V113.995C57.021 117.157 59.593 119.729 62.7545 119.729H63.0393V181.169C61.2488 182.14 60.03 184.036 60.03 186.212V192.515H56.7366C53.575 192.515 51.0031 195.087 51.0031 198.249V204.267C51.0031 207.428 53.575 210 56.7366 210H71.4429C72.9479 210 74.1674 208.781 74.1674 207.275C74.1674 205.77 72.9479 204.551 71.4429 204.551H56.7362C56.5793 204.551 56.4518 204.423 56.4518 204.267V198.249C56.4518 198.092 56.5796 197.964 56.7362 197.964H231.264C231.421 197.964 231.548 198.092 231.548 198.249V204.267C231.548 204.423 231.42 204.551 231.264 204.551H84.157C82.6519 204.551 81.4324 205.77 81.4324 207.275C81.4324 208.781 82.6519 210 84.157 210H231.263C234.425 210 236.997 207.428 236.997 204.267V198.249C236.997 195.087 234.425 192.515 231.263 192.515ZM167.788 185.928H222.236C222.393 185.928 222.521 186.056 222.521 186.212V192.515H167.788V185.928ZM219.512 83.9048V96.2255H193.666V83.6203H219.227C219.384 83.6203 219.512 83.7479 219.512 83.9048ZM162.372 96.2255V83.6203H188.217V96.2255H162.372ZM131.077 96.2255V83.6203H156.922V96.2255H131.077ZM184.257 31.6421C186.671 30.1938 189.372 29.4516 192.117 29.4516C193.364 29.4516 194.621 29.6053 195.862 29.9155C199.835 30.9083 203.183 33.3891 205.29 36.9008C207.396 40.4119 208.009 44.5332 207.017 48.5055C206.023 52.4775 203.543 55.8254 200.032 57.932L187.045 65.7242L171.275 39.4314L184.257 31.6421ZM147.181 59.1232C148.174 55.1508 150.654 51.8033 154.166 49.6967L166.602 42.2347L182.372 68.5275L169.94 75.9862C167.576 77.4048 164.882 78.1578 162.143 78.1713H161.993C156.579 78.1448 151.692 75.3679 148.908 70.7286C146.801 67.2169 146.188 63.0959 147.181 59.1232ZM125.628 83.6203V96.2255H99.7827V83.6203H125.628ZM68.488 83.9048C68.488 83.7479 68.6159 83.6203 68.7725 83.6203H94.3333V96.2255H68.488V83.9048ZM62.4697 113.995V101.959C62.4697 101.802 62.5976 101.675 62.7542 101.675H225.245C225.402 101.675 225.53 101.802 225.53 101.959V113.995C225.53 114.152 225.402 114.28 225.245 114.28H62.7542C62.5976 114.28 62.4697 114.152 62.4697 113.995ZM219.512 119.729V180.478H167.788V138.067C167.788 134.906 165.216 132.334 162.055 132.334H125.945C122.784 132.334 120.212 134.906 120.212 138.067V180.479H68.488V119.729L219.512 119.729ZM65.4787 186.212C65.4787 186.055 65.6066 185.928 65.7635 185.928H120.212V192.515H65.4787V186.212ZM125.661 192.515V138.067C125.661 137.91 125.789 137.783 125.945 137.783H162.054C162.211 137.783 162.339 137.911 162.339 138.067V192.515H125.661Z" fill="black"/>
            <path d="M151.523 168.443H136.478C134.146 168.443 132.248 170.34 132.248 172.672V181.699C132.248 184.031 134.146 185.928 136.478 185.928H151.523C153.855 185.928 155.752 184.031 155.752 181.699V172.672C155.752 170.34 153.855 168.443 151.523 168.443ZM150.303 180.479H137.697V173.892H150.303V180.479Z" fill="black"/>
            <path d="M151.523 144.37H136.478C134.146 144.37 132.248 146.267 132.248 148.599V157.627C132.248 159.958 134.146 161.856 136.478 161.856H151.523C153.855 161.856 155.752 159.958 155.752 157.627V148.599C155.752 146.267 153.855 144.37 151.523 144.37ZM150.303 156.406H137.697V149.819H150.303V156.406Z" fill="black"/>
            <path d="M80.8089 173.892H107.891C111.052 173.892 113.625 171.32 113.625 168.158V138.068C113.625 134.906 111.052 132.334 107.891 132.334H80.8089C77.6473 132.334 75.0754 134.906 75.0754 138.068V168.158C75.0754 171.32 77.6473 173.892 80.8089 173.892ZM80.5245 138.067C80.5245 137.91 80.6523 137.783 80.8089 137.783H107.891C108.048 137.783 108.176 137.911 108.176 138.067V168.158C108.176 168.315 108.048 168.442 107.891 168.442H80.8089C80.652 168.442 80.5245 168.314 80.5245 168.158V138.067Z" fill="black"/>
            <path d="M180.109 173.892H207.191C210.353 173.892 212.925 171.32 212.925 168.158V138.068C212.925 134.906 210.353 132.334 207.191 132.334H180.109C176.948 132.334 174.375 134.906 174.375 138.068V168.158C174.375 171.32 176.948 173.892 180.109 173.892ZM179.824 138.067C179.824 137.91 179.952 137.783 180.109 137.783H207.191C207.348 137.783 207.476 137.911 207.476 138.067V168.158C207.476 168.315 207.348 168.442 207.191 168.442H180.109C179.952 168.442 179.824 168.314 179.824 168.158V138.067Z" fill="black"/>
            <path d="M92.844 62.5568H96.1375V65.8502C96.1375 69.0118 98.7094 71.5837 101.871 71.5837H107.889C111.051 71.5837 113.623 69.0118 113.623 65.8502V62.5568H116.916C120.078 62.5568 122.65 59.9849 122.65 56.8233V50.8054C122.65 47.6438 120.078 45.0719 116.916 45.0719H113.623V41.7785C113.623 38.6169 111.051 36.045 107.889 36.045H101.871C98.7094 36.045 96.1375 38.6169 96.1375 41.7785V45.0719H92.844C89.6825 45.0719 87.1105 47.6438 87.1105 50.8054V56.8233C87.1105 59.9849 89.6825 62.5568 92.844 62.5568ZM92.5596 50.8054C92.5596 50.6484 92.6875 50.5209 92.844 50.5209H97.3577C99.6895 50.5209 101.587 48.6236 101.587 46.2917V41.7781C101.587 41.6212 101.715 41.4937 101.871 41.4937H107.89C108.047 41.4937 108.174 41.6215 108.174 41.7781V46.2917C108.174 48.6236 110.071 50.5209 112.403 50.5209H116.917C117.074 50.5209 117.201 50.6488 117.201 50.8054V56.8233C117.201 56.9803 117.073 57.1078 116.917 57.1078H112.403C110.071 57.1078 108.174 59.0051 108.174 61.337V65.8506C108.174 66.0075 108.046 66.135 107.89 66.135H101.871C101.714 66.135 101.587 66.0072 101.587 65.8506V61.337C101.587 59.0051 99.6895 57.1078 97.3577 57.1078H92.844C92.6871 57.1078 92.5596 56.9799 92.5596 56.8233V50.8054Z" fill="black"/>
            </g>
            <circle cx="143.416" cy="214.416" r="40.4867" fill="white"/>
            <path d="M188.914 179.014C189.476 179.726 190.514 179.852 191.238 179.281C191.953 178.712 192.072 177.672 191.503 176.957C191.128 176.483 190.74 176.014 190.348 175.55C189.758 174.853 188.718 174.766 188.015 175.354C187.317 175.943 187.231 176.987 187.819 177.685C188.19 178.123 188.556 178.566 188.914 179.014Z" fill="black"/>
            <path d="M201.44 217.744C201.395 218.656 202.097 219.433 203.008 219.479C203.037 219.48 203.067 219.481 203.095 219.481C203.969 219.481 204.7 218.794 204.745 217.91C205.35 206.116 202.397 193.88 195.962 183.321C195.486 182.541 194.471 182.294 193.687 182.769C192.908 183.245 192.66 184.263 193.136 185.042C199.153 194.919 202.003 206.409 201.44 217.744Z" fill="black"/>
            <path d="M153.307 272.142C150.085 272.695 146.791 272.975 143.519 272.975C129.766 272.975 116.458 268.091 106.049 259.224C105.353 258.63 104.31 258.713 103.716 259.41C103.123 260.106 103.207 261.15 103.903 261.742C114.911 271.119 128.98 276.284 143.519 276.284C146.978 276.284 150.459 275.988 153.867 275.404C154.768 275.25 155.373 274.395 155.218 273.494C155.065 272.594 154.21 271.995 153.307 272.142Z" fill="black"/>
            <path d="M99.276 252.382C98.6858 251.683 97.6474 251.597 96.943 252.186C96.2451 252.775 96.1589 253.819 96.747 254.517C97.4126 255.304 98.0912 256.084 98.7934 256.85C99.4144 257.524 100.46 257.566 101.131 256.95C101.805 256.332 101.85 255.285 101.232 254.612C100.56 253.88 99.9115 253.135 99.276 252.382Z" fill="black"/>
            <path d="M179.591 251.074C199.51 231.177 199.554 198.883 179.613 178.986C159.716 159.089 127.4 159.089 107.503 178.986C87.6057 198.883 87.6057 231.199 107.503 251.096C127.4 270.994 159.694 270.971 179.591 251.074ZM117.76 189.244C132.01 175.016 155.127 175.016 169.355 189.244C183.606 203.494 183.583 226.589 169.333 240.817C155.105 255.045 132.01 255.067 117.76 240.839C103.532 226.611 103.532 203.494 117.76 189.244Z" fill="black"/>
            <path d="M230.935 268.331L219.333 256.727C218.687 256.081 217.64 256.081 216.993 256.727C216.347 257.373 216.347 258.42 216.993 259.067L228.596 270.67C229.242 271.317 230.289 271.316 230.935 270.67C231.582 270.024 231.582 268.977 230.935 268.331Z" fill="black"/>
            <path d="M213.256 255.328C213.902 255.974 214.949 255.974 215.595 255.328C216.242 254.682 216.242 253.635 215.595 252.988L214.82 252.213C214.174 251.567 213.127 251.567 212.48 252.213C211.834 252.859 211.834 253.906 212.48 254.552L213.256 255.328Z" fill="black"/>
            <path d="M226.4 297.883C220.995 303.288 212.238 303.288 206.833 297.883L187.995 279.045C184.333 275.361 183.164 270.133 184.488 265.479L184.466 265.501L176.856 257.869C180.397 255.168 183.663 251.852 186.429 248.339L194.04 255.949C198.694 254.648 203.9 255.817 207.561 259.479L226.4 278.317C231.804 283.722 231.804 292.479 226.4 297.883Z" fill="black"/>
            <path d="M123.868 225.704C124.616 225.178 124.794 224.146 124.269 223.399C121.369 219.276 119.836 214.453 119.836 209.455C119.836 208.855 119.857 208.258 119.902 207.669C119.971 206.758 119.288 205.964 118.377 205.895C117.483 205.842 116.671 206.509 116.602 207.421C116.553 208.092 116.527 208.771 116.527 209.455C116.527 215.138 118.267 220.619 121.563 225.303C122.082 226.042 123.11 226.234 123.868 225.704Z" fill="black"/>
            <path d="M119.855 200.151C120.679 200.531 121.665 200.174 122.05 199.34C122.296 198.805 122.563 198.281 122.845 197.767C123.284 196.967 122.994 195.961 122.192 195.52C121.393 195.08 120.385 195.371 119.945 196.173C119.624 196.756 119.323 197.349 119.043 197.957C118.662 198.786 119.026 199.768 119.855 200.151Z" fill="black"/>
            <path d="M141.892 237.089L142.62 238.655C142.907 239.229 143.48 239.604 144.12 239.604C144.782 239.604 145.356 239.229 145.62 238.655L146.348 237.111C148.576 232.302 152.084 227.758 156.76 223.589C160.841 219.949 163.091 214.832 163.091 209.427C163.091 200.161 156.529 192.694 148.333 190.92C136.138 188.303 125.15 197.506 125.15 209.449C125.15 214.766 127.377 219.839 131.304 223.413C136.267 227.935 139.73 232.413 141.892 237.089ZM144.142 200.339C148.951 200.339 152.833 204.266 152.833 209.074C152.833 213.905 148.951 217.832 144.142 217.832C139.311 217.832 135.385 213.905 135.385 209.074C135.385 204.266 139.311 200.339 144.142 200.339Z" fill="black"/>
            <defs>
            <clipPath id="clip0_0_1">
            <rect width="186" height="186" fill="white" transform="translate(51 24)"/>
            </clipPath>
            </defs>
            </svg>
        </div>
        <h2 class="inline-text">Find the Nearest Pharmacy</h2>
        <div class="loader" style="display: inline-block; text-align: center;"></div>
        <p>Prices and availability of items may vary</p>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/shop/js/theme.min.js') }}"></script>
  <script>
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        window.location.replace('{{ route("delivery") }}');
      }, 2000);
    });
  </script>
</body>
</html>