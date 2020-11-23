<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Payment Success</title>
    <style>
        @import url(//db.onlinewebfonts.com/c/235b71a9b409e684e865eb4a996e925e?family=IRANYekan);
        *{
            font-family: IRANYekan;
        }
        .payment-success-button{
            transition: all 0.5s;
            margin-top: 10px;border-radius: 100px;font-size: 12px;background : linear-gradient(to right,#CA64DE,#7625D5);outline: none;cursor : pointer;color: white;padding: 12px 8px;border: 1px solid #C8CADA
        }
        .payment-success-button:hover{
            background : linear-gradient(to right, #da66ee, #8525e7);
            transform: scale(1.08);
        }
        @media only screen and (min-width: 768px) {
            .wrapper{
                transform: scale(1.3);
            }
        }
    </style>
</head>
<body style="width: 100vw;height: 100vh;overflow: hidden;display: flex;justify-content: center;margin: 0">
    <div style="width: 100%;height: 100%;background-image : url(background.jpg);background-repeat: repeat;position: absolute;filter: blur(2px)"></div>
    <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;z-index: 100" class="wrapper">
        <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;background-color: rgba(255,255,255,0.89);border-radius: 12px;padding: 20px">
            <img style="object-fit: scale-down;width: 120px" src="./logo.png"/>
            <span style="margin-top: 10px;color: #2B1684">.کیف پول شما با موفقیت شارژ شد</span>
            <div style="height: 1px;margin-top: 15px;width: 200px;background-color: rgba(255,255,255,0.68)"></div>
            <a href="#">
                <button class="payment-success-button">بازگشت به کوبیک</button>
            </a>
        </div>
    </div>
</body>
</html>