<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <style>
        /* ========================================= */
        /*              LOADER FORMS                 */
        /* ========================================= */
        .ajax_load {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: var(--z-index-load);
        }

        .ajax_load_box {
            margin: auto;
            text-align: center;
            color: #ffffff;
            font-weight: var(--weight-bold);
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
        }

        .ajax_load_box_circle {
            border: 16px solid #e3e3e3;
            border-top: 16px solid var(--hover-color-green);
            border-radius: 50%;
            margin: auto;
            width: 80px;
            height: 80px;

            -webkit-animation: spin 1.2s linear infinite;
            -o-animation: spin 1.2s linear infinite;
            animation: spin 1.2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }


        .form-body{
            height: 70vh;
            display: flex;
            align-items: center;
            text-align: center;
            border-radius: 5px;
            font-family: sans-serif;
            justify-content: center;
            background: url(bg.jpg);
            background-size: cover;
            background-position: center;
        }

        .container{
            position: relative;
            width: 400px;
            background: white;
            padding: 60px 40px;
        }
        header{
            font-size: 40px;
            margin-bottom: 60px;
            font-family: 'Montserrat', sans-serif;
        }
        .input-field, form .button{
            margin: 25px 0;
            position: relative;
            height: 50px;
            width: 100%;
        }
        .input-field input{
            height: 100%;
            width: 100%;
            border: 1px solid silver;
            padding-left: 15px;
            outline: none;
            font-size: 19px;
            transition: .4s;
        }
        input:focus{
            border: 1px solid #1DA1F2;
        }
        .input-field label, span.show{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .input-field label{
            left: 15px;
            pointer-events: none;
            color: grey;
            font-size: 18px;
            transition: .4s;
        }
        span.show{
            right: 20px;
            color: #111;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            user-select: none;
            visibility: hidden;
            font-family: 'Open Sans', sans-serif;
        }
        input:valid ~ span.show{
            visibility: visible;
        }
        input:focus ~ label,
        input:valid ~ label{
            transform: translateY(-33px);
            background: white;
            font-size: 16px;
            color: #1DA1F2;
        }
        form .button{
            margin-top: 30px;
            overflow: hidden;
            z-index: 111;
        }
        .button .inner{
            position: absolute;
            height: 100%;
            width: 300%;
            left: -100%;
            z-index: -1;
            transition: all .4s;
            background: -webkit-linear-gradient(right,#00dbde,#fc00ff,#00dbde,#fc00ff);
        }
        .button:hover .inner{
            left: 0;
        }
        .button button{
            width: 100%;
            height: 100%;
            border: none;
            background: none;
            outline: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
        }
        .container .auth{
            margin: 35px 0 20px 0;
            font-size: 19px;
            color: grey;
        }
        .links{
            display: flex;
            cursor: pointer;
        }
        .facebook, .google{
            height: 40px;
            width: 100%;
            border: 1px solid silver;
            border-radius: 3px;
            margin: 0 10px;
            transition: .4s;
        }
        .facebook:hover{
            border: 1px solid #4267B2;
        }
        .google:hover{
            border: 1px solid #dd4b39;
        }
        .facebook i, .facebook span{
            color: #4267B2;
        }
        .google i, .google span{
            color: #dd4b39;
        }
        .links i{
            font-size: 23px;
            line-height: 40px;
            margin-left: -90px;
        }
        .links span{
            position: absolute;
            font-size: 17px;
            font-weight: bold;
            padding-left: 8px;
            font-family: 'Open Sans', sans-serif;
        }
        .signup{
            margin-top: 50px;
            font-family: 'Noto Sans', sans-serif;
        }
        .signup a{
            color: #3498db;
            text-decoration: none;
        }
        .signup a:hover{
            text-decoration: underline;
        }


    </style>

    <?= $v->section("styles"); ?>

    <?= $head; ?>
</head>
<body>

<!-- ===========    LOADER   ========================================================== -->
<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde! Carregando...</p>
    </div>
</div>

<!-- ===========    CONTEÚDO   ========================================================== -->
<?= $v->section("content"); ?>

</body>



<?= $v->section("script"); ?>

</html>

