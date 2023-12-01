<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.header2')
    <title>Karanggupito | Surat</title>
    <style>
        body{
            /* display: grid; */
            background-color: white
        }
        * {
            margin: 0;
            padding: 0;
            /* box-sizing: border-box; */
        }
        .a{
            background-color: white;
            text-align: center;
            display: grid;
            position: relative;
            align-items: center;
            justify-items: center;
            /* border: 5px solid lightgray; */
            width: 90%;
            height: 90%;
            margin: 25px auto;
            box-sizing: border-box;
            grid-template-areas: "header"
                                "nav"
                                "main"
                                "footer";

            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 2fr 2fr;
            padding: 5px;
        }
        header {
            grid-area: header;
            background-color: white;
            /* padding: 40px 0; */
            height: 150px;
            border: 5px solid black;
            padding: 5px;
            
        }
        nav {
            grid-area: nav;
            background-color: white;
            /* padding: 40px 0; */
            /* height: 100px; */
            display: flex;
            justify-content: center;
            align-items: center;
            /* padding-top: 50px; */
        }
        main {
            grid-area: main;
            background-color: white;
            /* padding: 280px 0; */
            /* height: 560px; */
            text-align: left;
            padding-bottom: 60px;
            padding-left: 20px;
            padding-right: 20px;
        }
        footer {
            grid-area: footer;
            background-color: white;
            /* padding: 53px 0; */
            /* height: 106px; */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: right;
        }
        header img {
            position: absolute;
            left: 15;
            margin: 0px;
            padding: 0px;
            z-index: 1;
        }
        header h3 {
            margin-left: 80px;
            position: relative;
        }
        header h2 {
            margin-left: 80px;
            position: relative;
        }
        header p {
            margin-left: 80px;
            position: relative;
            font-size: 13px;
        }
        header a {
            margin-left: 80px;
            position: relative;
            font-size: 13px;
        }
        nav h3 {
            text-decoration: underline;
        }
        footer h6 {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="a">
        @yield('container')
    </div>

    @include('includes.footer2')
</body>
</html>
