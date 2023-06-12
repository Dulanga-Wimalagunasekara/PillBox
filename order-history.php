<!DOCTYPE html>

<!--Some UI components were taken from https://uiverse.io/-->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./css/resetCss.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <script src="./js/script.js"></script>
    <script src="./js/main.js"></script>
    <title>Document</title>
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
            <div id="cartIcon" onclick="redirectCart()">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z"/>
                </svg>
            </div>
            <div id="callIcon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
            </div>
            <div>
                <button class="sign_in_button"> Log out
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
                    </div>
                </button>
            </div>
        </div>

    </header>

    <div class="order-container">
        <div class="shopping-cart">
            <div class="shopping-cart-image">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
            </div>
            <div class="shopping-cart-heading">
                <h1>Your Shopping Cart</h1>
            </div>
            
                <div>Unlock a world of convenience and care with our online pharmacy portal. Browse our wide range of trusted medications and health products in your shopping cart, taking the first step towards a healthier you.
        </div>
        </div>
        <div class="item-cart">

            <div class="card">
                <div class="card-upper">
                    <div class="ref-code">
                        <p> #ref : Smed4267-23 </p>
                    </div>
                    <div class="total-amount">
                        <p> Rs 4890.00 </p>
                    </div>
                </div>
                <div class="card-lower">
                    <div class="transaction-date">
                        <p> 2023-05-30 </p>
                    </div>
                    <div class="status">
                        <p> Success </p>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="button" value="View">
                </div>
            </div>

            <div class="card">
                <div class="card-upper">
                    <div class="ref-code">
                        <p> #ref : Smed4467-23 </p>
                    </div>
                    <div class="total-amount">
                        <p> Rs 100.00 </p>
                    </div>
                </div>
                <div class="card-lower">
                    <div class="transaction-date">
                        <p> 2023-04-14 </p>
                    </div>
                    <div class="status">
                        <p> Success </p>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="button" value="View">
                </div>
            </div>

            <div class="card">
                <div class="card-upper">
                    <div class="ref-code">
                        <p> #ref : Smed5277-23 </p>
                    </div>
                    <div class="total-amount">
                        <p> Rs 3451.00 </p>
                    </div>
                </div>
                <div class="card-lower">
                    <div class="transaction-date">
                        <p> 2023-02-27 </p>
                    </div>
                    <div class="status">
                        <p> Success </p>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="button" value="View">
                </div>
            </div>

            <div class="card">
                <div class="card-upper">
                    <div class="ref-code">
                        <p> #ref : Smed2291-23 </p>
                    </div>
                    <div class="total-amount">
                        <p> Rs 1180.00 </p>
                    </div>
                </div>
                <div class="card-lower">
                    <div class="transaction-date">
                        <p> 2023-02-11 </p>
                    </div>
                    <div class="status">
                        <p> Success </p>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="button" value="View">
                </div>
            </div>

            <div class="card">
                <div class="card-upper">
                    <div class="ref-code">
                        <p> #ref : Smed2491-239 </p>
                    </div>
                    <div class="total-amount">
                        <p> Rs 1850.00 </p>
                    </div>
                </div>
                <div class="card-lower">
                    <div class="transaction-date">
                        <p> 2023-01-31 </p>
                    </div>
                    <div class="status">
                        <p> Success </p>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="button" value="View">
                </div>
            </div>

        </div>
    </div>

</body>
</html>