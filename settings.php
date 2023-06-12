<!DOCTYPE html>

<!--Some UI components were taken from https://uiverse.io/-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PillBox</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/resetCss.css">
    <link rel="stylesheet" href="css/settings.css">
</head>
    <body>
        <header>
        <div class="search">
            <input type="text" class="search_input" placeholder="Type your text">
            <button class="search_button">
                <svg class="search_icon" aria-hidden="true" viewBox="0 0 24 24">
                    <g>
                        <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                    </g>
                </svg>
            </button>
        </div>

        <div id="businessName">
            <span>PillBox</span>
        </div>

        <div id="iconsWrapper">
            <div id="callIcon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
            </div>
            <div>
                <button class="sign_out_button"> Sign Out
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
                    </div>
                </button>
            </div>
        </div>
        </header>
        <div class="userwrapper">
        <div class="userpic">
        <div class="container">
            <div class="card">
                <input accept="image/png, image/jpeg" name="avatar" type="file">
            
                <main>
                    <a href="">
                        <svg xml:space="preserve" style="enable-background:new 0 0 129.5 129.5;" viewBox="0 0 129.5 129.5" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Camada_1" version="1.1">
                            <style type="text/css">
                                .st0 {
                                    fill: #BAC5E1;
                                }
        
                                .st1 {
                                    fill: #FFFFFF;
                                }
                            </style>
                            <g>
        
                                <ellipse ry="64.8" rx="64.8" cy="64.8" cx="64.8" class="st0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -26.8258 64.7633)"></ellipse>
                                <ellipse ry="32.6" rx="25.2" cy="54.2" cx="64.8" class="st1"></ellipse>
                                <path d="M64.8,89.1c-21.1,0-39.6,6.4-50.5,16.2c11.9,14.7,30.1,24.2,50.5,24.2c20.4,0,38.6-9.4,50.5-24.2C104.4,95.6,85.8,89.1,64.8,89.1z" class="st1"></path>
                                <path d="M67.6,105.9H62c-5.3,0-9.6-4.3-9.6-9.6V74.4c0-5.3,4.3-9.6,9.6-9.6h5.6c5.3,0,9.6,4.3,9.6,9.6v21.9C77.2,101.6,72.9,105.9,67.6,105.9z" class="st1"></path>
                                <path d="M43,55.7c1.5,4.2,0.9,8.3-1.3,9s-5.1-2.1-6.6-6.3c-1.5-4.2-0.9-8.3,1.3-9C38.6,48.6,41.6,51.4,43,55.7z" class="st1"></path>
                                <ellipse ry="4.2" rx="8.1" cy="57" cx="90.4" class="st1" transform="matrix(0.328 -0.9447 0.9447 0.328 6.8843 123.7582)"></ellipse>
                                <path d="M42.7,55.5c-3.3-6-6.6-12.3-6.5-19.1c0.2-6.8,5.3-14,12.1-13.7c1.2,0,2.4,0.3,3.5,0.1c2.3-0.3,4.1-2.3,6-3.7c4.3-3.2,10.3-3.9,15.2-1.9c3.1,1.2,5.7,3.4,8.6,4.8c5.6,2.6,12.4,2.4,17.8-0.7c-1.1,2.1-3,3.8-5.2,4.6c2,0.6,4.3,0.6,6.3-0.2c-1.2,2.2-3.2,3.9-5.5,4.8c1.7,0.1,3.4,0.2,5.2,0.4c-1.5,2.1-3.6,3.7-6,4.6c1.4,0,2.7,0.1,4.1,0.1c-1,3-3.6,5.4-6.7,6.1c0.9,0,1.7,0,2.6,0c-2.9,4.1-5.7,8.2-8.6,12.4c-0.8,1.2-1.7,2.4-2.9,3.2c-1,0.6-2.2,0.9-3.3,1.2c-8.5,1.9-17.2,2.5-25.8,1.7c-3-0.3-6-0.8-8.4-2.6c-2.3-1.8-3.6-5.4-2-7.8" class="st1"></path>
                                <path d="M48.5,95.3c0.2-3.4,0.6-6.8,1.3-10.2c1.7,1.9,4.6,2.2,7.1,2.3c3.9,0.2,7.8,0.3,11.6,0.5c0.5,2.6,0.8,5.8-1.1,7.6c-0.9,0.9-2.1,1.3-3.3,1.6c-2.6,0.7-5.3,1.1-8,1.1c-3.2,0-7.1-0.9-8.1-4c0.3-0.3,0.7-0.6,1-0.9" class="st1"></path>
                                <path d="M81,95.3c-0.2-3.4-0.6-6.8-1.3-10.2c-1.7,1.9-4.6,2.2-7.1,2.3c-3.9,0.2-7.8,0.3-11.6,0.5c-0.5,2.6-0.8,5.8,1.1,7.6c0.9,0.9,2.1,1.3,3.3,1.6c2.6,0.7,5.3,1.1,8,1.1c3.2,0,7.1-0.9,8.1-4c-0.3-0.3-0.7-0.6-1-0.9" class="st1"></path>
                            </g>
                        </svg>
                    </a>
                </main>
                <div class="stroke2">
                <span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="12" width="12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                    </svg>
                </span>
                </div>
            </div>
        </div>
        
        </div>
            <div class="info">
                <h2>Profile Picture</h2>
            </div>
        <div class="update">
        <div class="legend">
        <fieldset>
        <legend>Change Personal Details</legend>
        <form class="setform">
            <div>
                <button class="setfancy" href="#">
                    <span class="settop-key"></span>
                    <span class="settext">update</span>
                    <span class="setbottom-key-1"></span>
                    <span class="setbottom-key-2"></span>
                </button>
            </div>        
            <div class="setflex">
                <label>
                    <span>Name in Full</span>
                    <input required="" placeholder="" type="text" class="setinput">
                </label>
            </div>
            <div class="setflex">
                <label>
                    <span>Address</span>
                    <textarea required="" rows="3" placeholder="" class="setinput01"></textarea>
                </label>
            </div>  
            <div class="setflex">         
            <label>
                <span>email</span>
                <input required="" placeholder="" type="email" class="setinput">
            </label> 
            </div>
            <div class="setflex">
            <label>
                <span>contact number</span>
                <input required="" type="tel" placeholder="" class="setinput">
            </label>
           </div>
           <div>
            <button class="setfancy" href="#">
              <span class="settop-key"></span>
              <span class="settext">Apply Changes</span>
              <span class="setbottom-key-1"></span>
              <span class="setbottom-key-2"></span>
            </button>
            </div>
        </form>
        </fieldset>
        </div> 
        </div>
    </div>
    <div class="passwords">
    <div class="passwordtext">
        <div>
        <input type="password" name="text" class="input" placeholder="Enter current password">
        </div>
            
    </div>
    <div class="passwordtext2">
        <input type="password" name="text" class="input" placeholder="Enter new password">
    </div>
    <div class="pwchange">
        <button class="setfancy" href="#">
            <span class="settop-key"></span>
            <span class="settext">Change</span>
            <span class="setbottom-key-1"></span>
            <span class="setbottom-key-2"></span>
          </button>
    </div>
    </div>
    </div>
    </body>
</html>