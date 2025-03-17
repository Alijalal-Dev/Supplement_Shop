<!doctype html>
<html lang="en">
  <head>
    <title>Supple - Supplements Landing Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> <!--cdncss link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"/>
  </head>

  <body class="bg-black" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 32 32"><path fill="currentColor" d="M9 5.156v21.688l1.531-1L25.844 16L10.53 6.156zm2 3.657L22.156 16L11 23.188z"/></symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="bicycling-round-outline" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" d="M14 2.75a1.25 1.25 0 1 0 0 2.5a1.25 1.25 0 0 0 0-2.5M11.25 4a2.75 2.75 0 1 1 5.5 0a2.75 2.75 0 0 1-5.5 0m-.331 4.506a1.888 1.888 0 1 0-1.93 3.207l3.09 1.349a2.64 2.64 0 0 1 1.37 3.46l-.76 1.773a.75.75 0 0 1-1.378-.59l.76-1.775a1.14 1.14 0 0 0-.592-1.494l-3.09-1.348a3.388 3.388 0 1 1 3.464-5.756l2.159 1.719a.915.915 0 0 0 .57.199H18.5a.75.75 0 0 1 0 1.5h-3.918a2.417 2.417 0 0 1-1.505-.526zM6 15.75a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5M2.25 18a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0M18 15.75a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5M14.25 18a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0" clip-rule="evenodd"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
          <path fill="currentColor"
            d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 256 256">
          <path fill="currentColor"
            d="m245.66 77.66l-29.9 29.9C209.72 177.58 150.67 232 80 232c-14.52 0-26.49-2.3-35.58-6.84c-7.33-3.67-10.33-7.6-11.08-8.72a8 8 0 0 1 3.85-11.93c.26-.1 24.24-9.31 39.47-26.84a110.93 110.93 0 0 1-21.88-24.2c-12.4-18.41-26.28-50.39-22-98.18a8 8 0 0 1 13.65-4.92c.35.35 33.28 33.1 73.54 43.72V88a47.87 47.87 0 0 1 14.36-34.3A46.87 46.87 0 0 1 168.1 40a48.66 48.66 0 0 1 41.47 24H240a8 8 0 0 1 5.66 13.66Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
          <path fill="currentColor"
            d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="bolt-outline" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" d="M20.528 10.374c-.37-.642-1.05-.853-1.699-.944c-.653-.091-1.528-.091-2.586-.091h-.06c-.63 0-1.043-.007-1.343-.048c-.271-.038-.357-.094-.394-.127c-.027-.028-.075-.093-.108-.33c-.039-.28-.04-.663-.04-1.277v-.374c0-1.588 0-2.86-.123-3.766c-.114-.851-.387-1.807-1.331-2.097c-.928-.284-1.706.326-2.31.954c-.645.67-1.41 1.705-2.368 3.001L5.029 9.52c-.61.825-1.12 1.514-1.422 2.083c-.304.57-.525 1.248-.188 1.924v.002l.004.008l.004.007l.004.008l.005.008l.004.008l.004.008l.005.008l.004.007l.001.002c.368.637 1.044.86 1.699.96c.674.102 1.574.109 2.665.109c.637 0 1.042.001 1.34.04c.264.033.343.085.376.114c.03.032.083.105.12.35c.042.281.049.67.049 1.277v.375c0 1.587 0 2.86.122 3.766c.115.85.387 1.807 1.331 2.096c.928.284 1.706-.325 2.31-.954c.645-.67 1.41-1.704 2.368-3.001l3.1-4.193c.63-.854 1.15-1.567 1.455-2.16c.3-.58.509-1.262.175-1.932l-.002-.002l-.003-.008l-.004-.008l-.004-.007l-.004-.009l-.005-.008l-.004-.007l-.005-.008l-.004-.007zm-8.913-7.06c-.569.59-1.276 1.545-2.28 2.903L6.273 10.36c-.658.89-1.098 1.489-1.342 1.948c-.12.223-.164.364-.177.45c-.008.053-.003.076.003.092c.025.035.13.144.622.22c.538.082 1.311.092 2.439.092h.046c.577 0 1.08 0 1.484.051c.433.056.864.181 1.22.516l.006.006l.006.005c.35.344.492.77.557 1.203c.062.414.066.923.066 1.5v.31c0 1.667.001 2.836.108 3.63c.054.396.125.628.194.757c.051.097.081.104.09.106h.002c.01.004.048.017.161-.04c.142-.072.345-.226.628-.52c.568-.59 1.276-1.545 2.28-2.903l3.061-4.143c.654-.885 1.09-1.492 1.33-1.956c.204-.397.181-.531.168-.567c-.023-.033-.123-.134-.603-.202c-.537-.075-1.306-.076-2.44-.076c-.602 0-1.125-.004-1.548-.063c-.437-.06-.869-.192-1.222-.524l-.006-.006l-.005-.005c-.353-.347-.49-.772-.549-1.202c-.055-.394-.054-.883-.054-1.434v-.358c0-1.667-.002-2.836-.11-3.63c-.052-.395-.124-.627-.193-.757c-.051-.097-.08-.103-.089-.105h-.002l-.001-.001c-.01-.004-.047-.016-.161.04c-.142.072-.345.226-.628.52" clip-rule="evenodd"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="bone-outline" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" d="M17.17 3.268a1.77 1.77 0 0 0-2.502 0c-.568.568-.858 1.59-.656 2.322c.09.325.152.715.117 1.109c-.035.397-.174.844-.53 1.2l-5.7 5.7c-.356.356-.803.495-1.2.53a3.178 3.178 0 0 1-1.11-.117c-.732-.202-1.753.088-2.32.656a1.769 1.769 0 1 0 2.5 2.502a.75.75 0 1 1 1.062 1.06a1.769 1.769 0 1 0 2.501 2.502c.568-.568.858-1.59.656-2.322a3.178 3.178 0 0 1-.117-1.109c.035-.397.174-.844.53-1.2l5.7-5.7c.356-.356.803-.495 1.2-.53a3.18 3.18 0 0 1 1.11.117c.732.202 1.753-.088 2.32-.656a1.77 1.77 0 0 0-2.5-2.501a.75.75 0 0 1-1.062-1.061a1.769 1.769 0 0 0 0-2.502m2.003 1.559a3.27 3.27 0 0 0-5.566-2.62c-.919.92-1.398 2.489-1.04 3.783c.058.21.083.414.068.577c-.014.16-.06.234-.097.272l-5.7 5.7c-.037.037-.111.082-.271.096a1.693 1.693 0 0 1-.577-.068c-1.294-.358-2.864.121-3.783 1.04a3.27 3.27 0 0 0 2.62 5.566a3.269 3.269 0 0 0 5.566 2.62c.919-.92 1.398-2.489 1.04-3.783a1.694 1.694 0 0 1-.068-.577c.014-.16.06-.234.097-.272l5.7-5.7c.037-.037.111-.082.271-.096c.163-.015.366.01.577.068c1.294.358 2.864-.121 3.782-1.04a3.269 3.269 0 0 0-2.619-5.566" clip-rule="evenodd"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="bottle-outline" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" d="m16.877 2.598l-.025.046l-.076.138l.866.522l.078-.142l.024-.042l-.041-.025l-.781-.47zm1.054.64h-.001zm-.726 1.554l-1.472-.887l-2.665 1.31a4.434 4.434 0 0 0-2.26 2.472l.059-.03a3.454 3.454 0 0 1 3.703.393c.517.414 1.21.537 1.839.328l1.055-.352l-.01-.133zm1.757 3.998a.746.746 0 0 0 .014-.423c0-.131-.004-.263-.012-.394l-.015-.193l-.262-3.267l.355-.642a4.2 4.2 0 0 0 .166-.317c.053-.116.111-.274.12-.467a1.25 1.25 0 0 0-.195-.73a1.258 1.258 0 0 0-.337-.344a4.243 4.243 0 0 0-.303-.192l-.016-.01l-.799-.482a5.377 5.377 0 0 0-.33-.188a1.26 1.26 0 0 0-.489-.139a1.25 1.25 0 0 0-.763.205a1.26 1.26 0 0 0-.354.364c-.065.098-.131.218-.192.328l-.323.583l-2.827 1.39l-.168.083C10.606 4.79 9.46 6.36 9.116 8.188c-.01.05-.019.103-.034.19l-.001.007l-.03.174a7.243 7.243 0 0 1-2.095 3.926l-.804.791c-.504.496-.91.895-1.214 1.24c-.31.35-.56.693-.71 1.087a3.486 3.486 0 0 0 .363 3.18c.236.35.558.626.939.894c.373.263.859.555 1.46.918l.713.43c.601.361 1.087.654 1.492.86c.412.21.806.366 1.225.405a3.233 3.233 0 0 0 2.88-1.284c.254-.334.413-.731.548-1.183c.133-.445.261-1.011.42-1.715l.255-1.122l.039-.17a7.198 7.198 0 0 1 2.297-3.799l.006-.005l.141-.125a6.094 6.094 0 0 0 1.956-4.097m-1.666.873l-.413.138a3.454 3.454 0 0 1-3.25-.58a1.954 1.954 0 0 0-2.095-.222l-1.186.593a8.707 8.707 0 0 1-2.21 3.83l-.13.13l-.789.774c-.528.52-.897.883-1.161 1.182c-.263.298-.377.482-.433.63c-.228.6-.15 1.28.205 1.807c.087.128.237.28.559.505c.324.229.764.494 1.395.874l.665.4c.631.381 1.071.645 1.422.824c.35.178.546.236.685.249c.586.055 1.168-.2 1.544-.696c.094-.123.19-.319.307-.708c.116-.39.234-.906.4-1.643l.25-1.1l.042-.182a8.697 8.697 0 0 1 2.624-4.452l.137-.121l.004-.004l.128-.113a4.538 4.538 0 0 0 1.3-2.115" clip-rule="evenodd"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="cup-paper-outline" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" d="M9.147 1.25h5.707c.886 0 1.607 0 2.194.06c.612.061 1.146.192 1.64.495c.155.096.304.203.444.32c.444.373.737.838.99 1.399c.241.538.47 1.222.75 2.062l.012.037l.05.148c.147.443.279.837.347 1.165c.071.347.102.747-.083 1.143c-.093.2-.223.38-.382.53c-.317.301-.707.4-1.058.44c-.18.022-.385.032-.61.037l-1.412 9.649c-.114.776-.209 1.427-.352 1.941c-.15.545-.378 1.028-.814 1.405c-.436.377-.947.532-1.508.602c-.53.067-1.188.067-1.972.067h-2.18c-.784 0-1.442 0-1.972-.067c-.561-.07-1.072-.226-1.508-.602c-.436-.377-.663-.86-.814-1.405c-.143-.514-.238-1.165-.352-1.941l-1.413-9.65a6.346 6.346 0 0 1-.609-.035c-.351-.042-.74-.14-1.058-.44a1.75 1.75 0 0 1-.382-.531c-.185-.396-.154-.796-.083-1.143c.068-.328.2-.722.348-1.165l.013-.04l.048-.145c.28-.84.509-1.524.751-2.062c.252-.561.546-1.026.99-1.398a3.57 3.57 0 0 1 .444-.32c.493-.304 1.027-.435 1.639-.497c.588-.059 1.309-.059 2.195-.059m-2.78 7.84l.317 2.16h10.632l.316-2.16zm10.73 3.66H6.903l.512 3.5h9.168zm-.733 5H7.636l.105.72c.123.836.205 1.392.32 1.805c.109.392.223.56.35.67c.127.11.31.2.715.25c.425.054.987.055 1.831.055h2.086c.844 0 1.407-.001 1.831-.055c.404-.05.588-.14.715-.25c.127-.11.241-.278.35-.67c.115-.413.198-.97.32-1.804zM7.103 2.802c-.488.049-.775.14-1.004.281a2.251 2.251 0 0 0-.267.193c-.207.173-.384.416-.585.863c-.208.461-.413 1.073-.708 1.959l-.036.107c-.166.496-.267.804-.315 1.034a.748.748 0 0 0-.023.213a.25.25 0 0 0 .046.064a.748.748 0 0 0 .209.044c.233.028.557.03 1.08.03h13c.523 0 .847-.002 1.08-.03a.749.749 0 0 0 .21-.044a.25.25 0 0 0 .045-.064a.749.749 0 0 0-.023-.213c-.048-.23-.15-.538-.315-1.034l-.035-.107c-.296-.886-.501-1.498-.709-1.959c-.2-.447-.378-.69-.585-.863a2.248 2.248 0 0 0-.267-.193c-.23-.14-.516-.232-1.004-.281c-.503-.051-1.148-.052-2.082-.052h-5.63c-.934 0-1.579 0-2.082.052" clip-rule="evenodd"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="flame-outline" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" d="M9.26 3.099c.404-1.011 1.735-1.636 2.767-.85c1.72 1.31 3.877 3.237 5.613 5.44c1.72 2.183 3.11 4.746 3.11 7.311c0 2.293-.71 3.997-1.738 5.218c-1.019 1.209-2.313 1.901-3.43 2.25a1.153 1.153 0 0 1-1.355-.514c-.24-.403-.241-.94.06-1.371c.857-1.232 1.763-3.004 1.763-4.583c0-.784-.338-1.711-.883-2.663a14.333 14.333 0 0 0-1.403-1.99c-.101 1.402-.406 3.165-1.352 4.623a1.162 1.162 0 0 1-1.894.093c-.159-.201-.316-.422-.46-.624l-.025-.036c-.079-.11-.153-.215-.225-.313c-.686.683-1.325 1.5-1.325 2.41c0 .804.401 1.902.876 2.834c.257.503.15 1.061-.16 1.427c-.328.388-.926.588-1.493.26C5.762 20.895 3.25 18.49 3.25 15c0-.947.321-1.926.77-2.883c.453-.963 1.066-1.967 1.71-2.97c.223-.347.45-.694.675-1.04c1.105-1.693 2.2-3.371 2.855-5.008m1.638.318a.419.419 0 0 0-.245.238c-.716 1.79-1.913 3.622-3.018 5.313c-.22.336-.435.667-.643.99c-.64.995-1.207 1.929-1.614 2.796c-.41.874-.628 1.62-.628 2.246c0 2.294 1.407 4.076 2.883 5.178c-.355-.84-.65-1.811-.65-2.678c0-1.73 1.3-3.037 2.026-3.725c.47-.445 1.282-.485 1.756.099c.17.211.338.446.49.66l.018.025l.125.175c.67-1.274.856-2.828.903-4.108c.02-.526.346-.943.774-1.117a1.2 1.2 0 0 1 1.354.314l-.557.503l.556-.503c.667.737 1.435 1.712 2.04 2.768c.598 1.043 1.082 2.242 1.082 3.409c0 1.693-.768 3.41-1.544 4.689a5.697 5.697 0 0 0 1.858-1.437c.787-.934 1.386-2.29 1.386-4.252c0-2.057-1.137-4.287-2.789-6.383C14.826 6.54 12.77 4.7 11.118 3.442c-.054-.041-.125-.057-.22-.025" clip-rule="evenodd"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="balloon-broken" viewBox="0 0 24 24">
          <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
            <path d="M8 16.607c1.15.86 2.518 1.38 4 1.393c4.142.034 7.594-3.92 7.56-8.196C19.527 5.53 16.142 2.034 12 2c-4.142-.034-7.473 3.404-7.44 7.68A8.88 8.88 0 0 0 5.244 13"/>
            <path d="M15.5 9a3.035 3.035 0 0 0-3-3M12 20.35c.321 0 .482 0 .593-.022c.654-.128 1.051-.772.858-1.39c-.033-.105-.109-.242-.261-.515M12 20.35c-.321 0-.482 0-.593-.022c-.654-.128-1.051-.772-.858-1.39c.033-.105.109-.242.261-.515M12 20.35v2.15"/>
          </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="bag-heart-broken" viewBox="0 0 24 24">
          <g fill="none"><path fill="currentColor" d="m12 12.191l-.519.542a.75.75 0 0 0 1.038 0zm-.957 3.675l-.444.604zm1.914 0l-.444-.605zm-.957.462v.75zm-.514-1.067c-.417-.307-.878-.69-1.227-1.093c-.368-.426-.509-.757-.509-.971h-1.5c0 .77.441 1.45.875 1.952c.453.525 1.014.984 1.474 1.321zM9.75 13.197c0-.576.263-.827.492-.907c.25-.088.714-.06 1.24.443l1.037-1.083c-.825-.79-1.861-1.096-2.773-.776c-.934.327-1.496 1.226-1.496 2.323zm3.65 3.273c.46-.337 1.022-.796 1.475-1.32c.434-.502.875-1.183.875-1.953h-1.5c0 .214-.141.545-.51.971c-.348.403-.809.786-1.226 1.093zm2.35-3.273c0-1.097-.562-1.996-1.496-2.323c-.912-.32-1.948-.014-2.773.776l1.038 1.083c.525-.503.989-.531 1.24-.443c.228.08.491.33.491.907zM10.6 16.47c.368.27.782.608 1.4.608v-1.5c-.024 0-.04 0-.094-.03a4 4 0 0 1-.42-.287zm1.914-1.21a4 4 0 0 1-.42.289c-.054.029-.07.029-.094.029v1.5c.618 0 1.032-.337 1.4-.608z"/>
            <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M9 6V5a3 3 0 1 1 6 0v1m5.224 6.526c-.586-3.121-.878-4.682-1.99-5.604C17.125 6 15.537 6 12.36 6h-.72c-3.176 0-4.764 0-5.875.922c-1.11.922-1.403 2.483-1.989 5.604c-.823 4.389-1.234 6.583-.034 8.029C4.942 22 7.174 22 11.639 22h.722c4.465 0 6.698 0 7.897-1.445c.696-.84.85-1.93.696-3.555"/>
          </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="adhesive-plaster-broken" viewBox="0 0 24 24">
          <g fill="none">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M13.5 7.642L9.071 3.213a4.142 4.142 0 0 0-5.858 5.858L14.93 20.787a4.142 4.142 0 0 0 5.858-5.858l-4.358-4.358"/><path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="m12 17.858l-2.929 2.929A4.142 4.142 0 0 1 2.596 20m3.546-8l-2.929 2.929c-.322.322-.58.685-.774 1.071M12 6.142l2.929-2.929a4.142 4.142 0 1 1 5.858 5.858L17.857 12"/><path fill="#3FC3D7" d="M15.841 12.871a.788.788 0 1 1-1.114 1.114a.788.788 0 0 1 1.114-1.114m-3.712-3.712a.787.787 0 1 0-1.114 1.114a.787.787 0 0 0 1.114-1.114m4.641 6.497a.787.787 0 1 1-1.114 1.114a.787.787 0 0 1 1.114-1.114M9.345 8.23A.788.788 0 1 0 8.23 9.346A.788.788 0 0 0 9.345 8.23m3.712 3.713a.787.787 0 1 1-1.113 1.114a.787.787 0 0 1 1.113-1.114m.928 2.785a.788.788 0 1 1-1.114 1.113a.788.788 0 0 1 1.114-1.113m-3.712-3.713a.787.787 0 1 0-1.114 1.114a.787.787 0 0 0 1.114-1.114"/>
          </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star" viewBox="0 0 512 512">
          <path fill="currentColor" d="M394 480a16 16 0 0 1-9.39-3L256 383.76L127.39 477a16 16 0 0 1-24.55-18.08L153 310.35L23 221.2a16 16 0 0 1 9-29.2h160.38l48.4-148.95a16 16 0 0 1 30.44 0l48.4 149H480a16 16 0 0 1 9.05 29.2L359 310.35l50.13 148.53A16 16 0 0 1 394 480"/>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="play" width="4em" height="4em" viewBox="0 0 32 32">
          <path fill="currentColor" d="M9 5.156v21.688l1.531-1L25.844 16L10.53 6.156zm2 3.657L22.156 16L11 23.188z"/>
        </symbol>
        <symbol id="facebook" viewBox="0 0 20 20">
          <path fill="white" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443z"/>
        </symbol>
        <symbol id="linkedin" viewBox="0 0 20 20">
          <path fill="white" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4M7.65 13.979H5.706V7.723H7.65zm-.984-7.024c-.614 0-1.011-.435-1.011-.973c0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973m8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355c-.537 0-.856.371-.997.728c-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01c1.279 0 2.238.857 2.238 2.699z"/>
        </symbol>
        <symbol id="youtube" viewBox="0 0 20 20">
          <path fill="white" d="M11.603 9.833L9.357 8.785C9.161 8.694 9 8.796 9 9.013v1.974c0 .217.161.319.357.228l2.245-1.048c.197-.092.197-.242.001-.334M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m0 13.5c-4.914 0-5-.443-5-3.9s.086-3.9 5-3.9s5 .443 5 3.9s-.086 3.9-5 3.9"/>
        </symbol>
        <symbol id="twitter" viewBox="0 0 20 20">
          <path fill="white" d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6s9.6-4.298 9.6-9.6S15.302.4 10 .4m3.905 7.864c.004.082.005.164.005.244c0 2.5-1.901 5.381-5.379 5.381a5.335 5.335 0 0 1-2.898-.85c.147.018.298.025.451.025c.886 0 1.701-.301 2.348-.809a1.895 1.895 0 0 1-1.766-1.312a1.9 1.9 0 0 0 .853-.033a1.892 1.892 0 0 1-1.517-1.854v-.023c.255.141.547.227.857.237a1.89 1.89 0 0 1-.585-2.526a5.376 5.376 0 0 0 3.897 1.977a1.891 1.891 0 0 1 3.222-1.725a3.797 3.797 0 0 0 1.2-.459a1.9 1.9 0 0 1-.831 1.047a3.799 3.799 0 0 0 1.086-.299a3.834 3.834 0 0 1-.943.979"/>
        </symbol>
        <symbol id="instagram" viewBox="0 0 20 20">
          <path fill="white" d="M13 10a3 3 0 1 1-6 0c0-.171.018-.338.049-.5H6v3.997c0 .278.225.503.503.503h6.995a.503.503 0 0 0 .502-.503V9.5h-1.049c.031.162.049.329.049.5m-3 2a2 2 0 1 0-.001-4.001A2 2 0 0 0 10 12m2.4-4.1h1.199a.301.301 0 0 0 .301-.3V6.401a.301.301 0 0 0-.301-.301H12.4a.301.301 0 0 0-.301.301V7.6c.001.165.136.3.301.3M10 .4A9.6 9.6 0 0 0 .4 10a9.6 9.6 0 0 0 9.6 9.6a9.6 9.6 0 0 0 9.6-9.6A9.6 9.6 0 0 0 10 .4m5 13.489C15 14.5 14.5 15 13.889 15H6.111C5.5 15 5 14.5 5 13.889V6.111C5 5.5 5.5 5 6.111 5h7.778C14.5 5 15 5.5 15 6.111z"/>
        </symbol>
      </svg>

      <header id="top" class="position-sticky top-0 start-0">
        <nav class="navbar navbar-expand-lg fixed-top bg-black py-4" style="height: 100px">
            <div class="container">
                <a class="navbar-brand" href="#home">
                    <img src="images/supp_logo.png" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header bg-black">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body bg-black">
                        <ul class="navbar-nav justify-content-end flex-grow-1 gap-4 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" aria-current="page" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" aria-current="page" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" aria-current="page" href="#products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" aria-current="page" href="#faqs">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" aria-current="page" href="#contact">Contact</a>
                            </li>

                            <!-- Login and Register Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="{{ route('login') }}" style="color: var(--bs-link-color);">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase" href="{{ route('register') }}" style="color: var(--bs-link-color);">Register</a>
                                </li>
                            @endguest

                            <!-- User Dropdown (Authenticated Users) -->
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: var(--bs-link-color);">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item text-uppercase" style="color: var(--bs-link-color);">Logout</button>
                                            </form>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard') }}" class="dropdown-item text-uppercase" style="color: var(--bs-link-color);">Dashboard</a>
                                    </ul>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section id="home" class="section-padding">
      <div class="container">
        <div class="row g-3 flex-row-reverse align-items-center">
          <div class="col-md-6">
            <img src="images/supple1.jpg" class="img-fluid rounded-4" style="height: 600px;margin-left: 100px" alt="banner">
          </div>
          <div class="col-md-6 text-center">
            <h3 class="">
                No matter where you are, your supplements come to you!
            </h3>
            <a href="#features" class="btn btn-primary text-uppercase px-5 py-3 text-dark fw-semibold rounded-pill mt-4">Discover us</a>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="bg-secondary py-5">
      <div class="container text-center">
        <div class="row g-4 justify-content-center text-white">
          <div class="col-md-4">
            <div class="icon">
              <svg class="text-primary balloon-broken" width="81" height="81">
                <use xlink:href="#balloon-broken"></use>
              </svg>
            </div>
            <h4 class="mt-2">
              100% High Quality Product
            </h4>
            <p>
              We have option of pick up in store
            </p>
          </div>
          <div class="col-md-4">
            <div class="icon">
              <svg class="text-primary bag-heart-broken" width="81" height="81">
                <use xlink:href="#bag-heart-broken"></use>
              </svg>
            </div>
            <h4 class="mt-2">
              Cash on delivery
            </h4>
            <p>
              Inside City delivery within 1 day
            </p>
          </div>
          <div class="col-md-4">
            <div class="icon">
              <svg class="text-primary adhesive-plaster-broken" width="81" height="81">
                <use xlink:href="#adhesive-plaster-broken"></use>
              </svg>
            </div>
            <h4 class="mt-2">
              Money Back Guarantee
            </h4>
            <p>
              We will take return in some cases
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="features" class="section-padding">
      <div class="container">
        <div class="text-center pb-5">
          <h2>Benefits of Our Supplements</h2>
        </div>
        <div class="row">
          <div class="col-md-4 mt-3">
            <div class="d-flex gap-4 align-items-start flex-md-row-reverse mb-5 me-2">
              <div class="icon">
                <svg class="text-primary bicycling-round-outline" width="81" height="81">
                  <use xlink:href="#bicycling-round-outline"></use>
                </svg>
              </div>
             <div class="text-md-end">
                <h4>Enhance the Resistance</h4>
                <p>Stay resilient against stress, fatigue, and sickness.</p>
             </div>
            </div>
            <div class="d-flex gap-4 flex-md-row-reverse mb-5 me-2">
              <div class="icon">
                <svg class="text-primary bolt-outline" width="81" height="81">
                  <use xlink:href="#bolt-outline"></use>
                </svg>
              </div>
              <div class="text-md-end">
                <h4>Enhances Energy Levels</h4>
                <p> Fights fatigue and improves daily performance.</p>
              </div>
            </div>
            <div class="d-flex gap-4 flex-md-row-reverse mb-5 me-2">
              <div class="icon">
                <svg class="text-primary bone-outline" width="81" height="81">
                  <use xlink:href="#bone-outline"></use>
                </svg>
              </div>
              <div class="text-md-end">
                <h4>Bone Health</h4>
                <p>Strengthen your bones with key vitamins like calcium and vitamin D for long-term support and mobility.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <img src="images/feature_img.png" class="img-fluid rounded-4" style="margin-top:50px;margin-left:30px">
          </div>
          <div class="col-md-4 mt-3">
            <div class="d-flex gap-4 mb-5 ms-2">
              <div class="icon">
                <svg class="text-primary bottle-outline" width="81" height="81">
                  <use xlink:href="#bottle-outline"></use>
                </svg>
              </div>
              <div class="text-start">
                <h4>Easy to Consume</h4>
                <p>Available in pills, powders, or gummies for convenience.</p>
              </div>
            </div>
            <div class="col">
              <div class="d-flex gap-4 mb-5 ms-2">
                <div class="icon">
                  <svg class="text-primary cup-paper-outline" width="81" height="81">
                    <use xlink:href="#cup-paper-outline"></use>
                  </svg>
                </div>
                <div class="text-start">
                  <h4>Great Taste</h4>
                  <p>Enjoy the benefits of supplements without the chalky aftertaste delicious flavors make health a treat.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="d-flex gap-4 mb-5 ms-2">
                <div class="icon">
                  <svg class="text-primary flame-outline" width="81" height="81">
                    <use xlink:href="#flame-outline"></use>
                  </svg>
                </div>
                <div class="text-start">
                  <h4>Energy Booster</h4>
                  <p>Boost your energy during training to get the most out of your weightlifting sessions.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="products" class="bg-black py-5">
        <div class="container">
          <div class="text-center pb-5">
            <h2 class="text-white">Featured Supplements</h2>
            <p class="text-white opacity-75">Exclusive discounts on our premium collection</p>
          </div>

          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Product Card 1 -->
            <div class="col">
              <div class="card h-100 bg-secondary border-0 rounded-3 overflow-hidden">
                <div class="position-relative">
                  <img src="images/product-large-1.jpg" alt="Supplement 1" class="card-img-top">
                  <div class="position-absolute top-0 end-0 m-2">
                    <span class="badge bg-primary text-dark fw-bold px-2 py-1 rounded-pill">-47%</span>
                  </div>
                </div>
                <div class="card-body d-flex flex-column">
                  <div class="d-flex mb-2">
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <span class="ms-1 text-white-50 small">(124)</span>
                  </div>
                  <h5 class="card-title text-white fw-bold">Premium Whey Protein</h5>
                  <p class="card-text text-white-50 small">High-quality protein supplement for muscle recovery and growth.</p>
                  <div class="mt-auto">
                    <div class="d-flex align-items-center mb-3">
                      <span class="fs-5 fw-bold text-primary me-2">$99.99</span>
                      <span class="text-white-50 text-decoration-line-through">$190.00</span>
                    </div>
                    <button class="btn btn-primary text-dark fw-semibold w-100 rounded-pill py-2">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col">
              <div class="card h-100 bg-secondary border-0 rounded-3 overflow-hidden">
                <div class="position-relative">
                  <img src="images/product-large-2.jpg" alt="Supplement 2" class="card-img-top">
                  <div class="position-absolute top-0 end-0 m-2">
                    <span class="badge bg-primary text-dark fw-bold px-2 py-1 rounded-pill">-38%</span>
                  </div>
                </div>
                <div class="card-body d-flex flex-column">
                  <div class="d-flex mb-2">
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <span class="ms-1 text-white-50 small">(89)</span>
                  </div>
                  <h5 class="card-title text-white fw-bold">Pre-Workout Energy</h5>
                  <p class="card-text text-white-50 small">Advanced formula for enhanced performance and energy during workouts.</p>
                  <div class="mt-auto">
                    <div class="d-flex align-items-center mb-3">
                      <span class="fs-5 fw-bold text-primary me-2">$79.99</span>
                      <span class="text-white-50 text-decoration-line-through">$129.99</span>
                    </div>
                    <button class="btn btn-primary text-dark fw-semibold w-100 rounded-pill py-2">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col">
              <div class="card h-100 bg-secondary border-0 rounded-3 overflow-hidden">
                <div class="position-relative">
                  <img src="images/product-large-3.jpg" alt="Supplement 3" class="card-img-top">
                  <div class="position-absolute top-0 end-0 m-2">
                    <span class="badge bg-primary text-dark fw-bold px-2 py-1 rounded-pill">NEW</span>
                  </div>
                </div>
                <div class="card-body d-flex flex-column">
                  <div class="d-flex mb-2">
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <span class="ms-1 text-white-50 small">(56)</span>
                  </div>
                  <h5 class="card-title text-white fw-bold">BCAA Complex</h5>
                  <p class="card-text text-white-50 small">Essential amino acids to support muscle growth and reduce recovery time.</p>
                  <div class="mt-auto">
                    <div class="d-flex align-items-center mb-3">
                      <span class="fs-5 fw-bold text-primary me-2">$69.99</span>
                      <span class="text-white-50 text-decoration-line-through">$99.99</span>
                    </div>
                    <button class="btn btn-primary text-dark fw-semibold w-100 rounded-pill py-2">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col">
              <div class="card h-100 bg-secondary border-0 rounded-3 overflow-hidden">
                <div class="position-relative">
                  <img src="images/product-thumbnail-1.jpg" alt="Supplement 4" class="card-img-top">
                  <div class="position-absolute top-0 end-0 m-2">
                    <span class="badge bg-primary text-dark fw-bold px-2 py-1 rounded-pill">-25%</span>
                  </div>
                </div>
                <div class="card-body d-flex flex-column">
                  <div class="d-flex mb-2">
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <svg class="star text-warning" width="16" height="16"><use xlink:href="#star"></use></svg>
                    <span class="ms-1 text-white-50 small">(72)</span>
                  </div>
                  <h5 class="card-title text-white fw-bold">Vitamin Complex</h5>
                  <p class="card-text text-white-50 small">Complete multivitamin formula to support overall health and immunity.</p>
                  <div class="mt-auto">
                    <div class="d-flex align-items-center mb-3">
                      <span class="fs-5 fw-bold text-primary me-2">$49.99</span>
                      <span class="text-white-50 text-decoration-line-through">$69.99</span>
                    </div>
                    <button class="btn btn-primary text-dark fw-semibold w-100 rounded-pill py-2">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center mt-5">
            <a href="#" class="btn btn-outline-primary text-white border-2 px-4 py-2 rounded-pill fw-semibold">View All Products</a>
          </div>
        </div>
      </section>

      <section id="faqs" class="bg-secondary section-padding section-margin">
        <div class="container">
          <div class="text-center pb-5">
            <h2>FAQs</h2>
            <p>Frequently asked questions.</p>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="accordion" id="accordionExample">

                <div class="accordion-item rounded-0 mb-3">
                  <h3 class="accordion-header">
                    <button class="accordion-button text-capitalize fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      What types of supplements do you offer?
                    </button>
                  </h3>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>We offer a wide range of supplements, including vitamins, minerals, protein powders, pre-workouts, and wellness supplements for immunity, energy, and overall health.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item rounded-0 mb-3">
                  <h3 class="accordion-header">
                    <button class="accordion-button text-capitalize fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Are your supplements safe to use?
                    </button>
                  </h3>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes! Our supplements are made with high-quality ingredients and follow strict safety standards. However, we recommend consulting a healthcare professional before use.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item rounded-0 mb-3">
                  <h3 class="accordion-header">
                    <button class="accordion-button text-capitalize fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How long does shipping take?
                    </button>
                  </h3>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Shipping times vary based on location. Typically, orders are delivered within 1 day if it's the same city; otherwise, it may take 2 to 3 days.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item rounded-0 mb-3">
                  <h3 class="accordion-header">
                    <button class="accordion-button text-capitalize fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      How should I store my supplements?
                    </button>
                  </h3>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Keep supplements in a cool, dry place, away from direct sunlight. Some products may require refrigeration—check the packaging for details.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item rounded-0 mb-3">
                  <h3 class="accordion-header">
                    <button class="accordion-button text-capitalize fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Do you offer free shipping?
                    </button>
                  </h3>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes! We offer free shipping on orders over 800 DHS. Check our shipping policy for details.</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>



    <footer class="section-padding pt-0" id="contact">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-3">
            <div class="logo mb-4"><img src="images/logo_supp.png" alt="logo" class="img-fluid"></div>
            <div class="social-links mt-3">
              <ul class="d-flex gap-3 list-unstyled">
                <li>
                  <a href="#">
                    <svg class="facebook" width="30" height="30">
                      <use xlink:href="#facebook" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="instagram" width="30" height="30">
                      <use xlink:href="#instagram" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="twitter" width="30" height="30">
                      <use xlink:href="#twitter" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="linkedin" width="30" height="30">
                      <use xlink:href="#linkedin" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="youtube" width="30" height="30">
                      <use xlink:href="#youtube" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 ps-md-5">
            <div class="d-flex flex-column text-left">
                <h4 class="mb-4">Links</h4>
                <a href="#about" class="nav-link mb-2 text-uppercase">About</a>
                <a href="#features" class="nav-link mb-2 text-uppercase">Features</a>
                <a href="#products" class="nav-link mb-2 text-uppercase">Products</a>
                <a href="#faqs" class="nav-link mb-2 text-uppercase">FAQS</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex flex-column text-left">
                <h4 class="mb-4">Contact</h4>
                <a href="#" class="nav-link mb-2 text-capitalize">+212 458 5195</a>
                <a href="#" class="nav-link mb-2 text-capitalize">SupplementSage@gmail.com</a>
                <a href="#" class="nav-link mb-2 text-capitalize">Ain Chok,Casablanca</a>
            </div>
          </div>
          <div class="col-md-3">
            <h4 class="mb-4">Ask your Question</h4>
            <form id="form" class="d-flex gap-3 flex-wrap">
              <div class="w-100 d-flex gap-3">
                <div class="w-50">
                  <input type="text" name="name" placeholder="Full Name*" class="form-control w-100">
                </div>
                <div class="w-50">
                  <input type="text" name="email" placeholder="Email*" class="form-control w-100">
                </div>
              </div>
              <div class="w-100">
                <input type="text" placeholder="Question*" class="form-control w-100">
              </div>
              <a href="#" class="btn btn-primary text-uppercase px-5 py-3 text-dark fw-semibold rounded-pill mt-4">Send</a>
            </form>
          </div>
        </div>
      </div>
    </footer>
    <hr class="m-0">

    <script src="js/jquery-1.11.0.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>

</html>




