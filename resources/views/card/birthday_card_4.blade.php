<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday 4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>

    <style>
        @font-face {
            font-family: 'Monoton';
            font-style: normal;
            font-weight: 400;
            src: local('Monoton'), local('Monoton-Regular'), url(https://themes.googleusercontent.com/static/fonts/monoton/v4/AKI-lyzyNHXByGHeOcds_w.woff) format('woff');
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: radial-gradient(#968550, #f8a90c);
            background-image: url({{asset('assets/Img/bday4back.jpg')}});
            background-size: cover;
            background-attachment: fixed;
            overflow: hidden;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }

        .invitation-card {

            width: 90%;
            max-width: 450px;
            background-color: rgba(154, 233, 247, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            background-image: url({{asset('assets/Img/bday4card.jpg')}});
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
            text-align: center;
            padding: 20px;

        }

        .invitation-card img {
            border-radius: 50%;
            width: 60%;
            height: auto;
            box-shadow: 0 4px 8px rgba(130, 108, 108, 0.2);
            margin-bottom: 20px;
        }

        .invitation-card h1 {
            font-size: 2.5em;
            margin: 20px 0;
            color: #ffffff;
        }

        .invitation-card h2 {
            font-size: 1.9em;
            margin: 10px 0;
            color: #ffffff;
        }

        .invitation-card p {
            font-size: 1.2em;
            margin: 5px 0;
            color: #f9f9f9;
        }

        @media (max-width: 767px) {
            .invitation-card {
                max-width: 300px;
                padding: 9px;

            }

            .invitation-card img {
                width: 50%;
            }

            .invitation-card h1 {
                font-size: 2em;
            }

            .invitation-card h2 {
                font-size: 1.5em;
            }

            .invitation-card p {
                font-size: 1em;
            }
        }

        @media (max-width: 500px) {
            .invitation-card {
                max-width: 90%;
                padding: 8px;
                margin-top: 60px;

            }

            .invitation-card img {
                width: 80%;
            }

            .invitation-card h1 {
                font-size: 1.5em;
            }

            .invitation-card h2 {
                font-size: 1.2em;
            }

            .invitation-card p {
                font-size: 0.8em;
            }
        }
    </style>
</head>
<body>
<canvas id="c"></canvas>
<div class="invitation-card">
    <img src="{{asset('assets/Img/baby4.jpg')}}" alt="Baby Photo">
    <h1>It's time to party!</h1>
    <h2>Join us to celebrate Olivia's 3rd birthday!</h2>
    <p>Saturday, October 17th at 2 p.m.</p>
    <p>123 Anywhere St., Any City, ST 12345</p>
    <p>RSVP to Lillian Pratt (Carey's Mom)</p>
    <p>123-456-7890</p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script>
    var c = document.getElementById("c");
    var ctx = c.getContext("2d");

    var bc = document.createElement("canvas");
    var bCtx = bc.getContext("2d");

    var cw = c.width = bc.width = window.innerWidth,
        cx = cw / 2;
    var ch = c.height = bc.height = window.innerHeight + 100,
        cy = ch;

    var frames = 0;
    var requestId = null;
    var rad = (Math.PI / 180);
    var kappa = 0.5522847498;

    var x, y;
    bCtx.strokeStyle = "#abcdef";
    bCtx.lineWidth = 1;

    var balloons = [];

    function Balloon() {
        this.r = randomIntFromInterval(20, 70);
        this.R = 1.4 * this.r;
        this.x = randomIntFromInterval(this.r, cw - this.r);
        this.y = ch + 2 * this.r;
        this.a = this.r * 4.5;
        this.pm = Math.random() < 0.5 ? -1 : 1;
        this.speed = randomIntFromInterval(1.5, 4);
        this.k = this.speed / 5;
        this.hue = this.pm > 0 ? "210" : "10";
    }

    function Draw() {
        updateBalloons(bCtx);
        ctx.clearRect(0, 0, cw, ch);
        var img = bc;
        ctx.drawImage(img, 0, 0);
        requestId = window.requestAnimationFrame(Draw);
    }

    function Init() {
        if (requestId) {
            window.cancelAnimationFrame(requestId);
            requestId = null;
        }
        cw = c.width = bc.width = window.innerWidth, cx = cw / 2;
        ch = c.height = bc.height = window.innerHeight + 100, cy = ch;
        bCtx.strokeStyle = "#abcdef";
        bCtx.lineWidth = 1;
        Draw();
    }

    setTimeout(function() {
        Init();
        window.addEventListener('resize', Init, false);
    }, 15);

    function updateBalloons(ctx) {
        frames += 1;
        if (frames % 37 == 0 && balloons.length < 37) {
            var balloon = new Balloon();
            balloons.push(balloon);
        }
        ctx.clearRect(0, 0, cw, ch);

        for (var i = 0; i < balloons.length; i++) {
            var b = balloons[i];
            if (b.y > -b.a) {
                b.y -= b.speed
            } else {
                b.y = parseInt(ch + b.r + b.R);
            }

            var p = thread(b, ctx);
            b.cx = p.x;
            b.cy = p.y - b.R;
            ctx.fillStyle = Grd(p.x, p.y, b.r, b.hue)
            drawBalloon(b, ctx);
        }
    }

    function drawBalloon(b, ctx) {
        var or = b.r * kappa;

        var p1 = { x: b.cx - b.r, y: b.cy }
        var pc11 = { x: p1.x, y: p1.y + or }
        var pc12 = { x: p1.x, y: p1.y - or }

        var p2 = { x: b.cx, y: b.cy - b.r }
        var pc21 = { x: b.cx - or, y: p2.y }
        var pc22 = { x: b.cx + or, y: p2.y }

        var p3 = { x: b.cx + b.r, y: b.cy }
        var pc31 = { x: p3.x, y: p3.y - or }
        var pc32 = { x: p3.x, y: p3.y + or }

        var p4 = { x: b.cx, y: b.cy + b.R };
        var pc41 = { x: p4.x + or, y: p4.y }
        var pc42 = { x: p4.x - or, y: p4.y }

        var t1 = { x: p4.x + .2 * b.r * Math.cos(70 * rad), y: p4.y + .2 * b.r * Math.sin(70 * rad) }
        var t2 = { x: p4.x + .2 * b.r * Math.cos(110 * rad), y: p4.y + .2 * b.r * Math.sin(110 * rad) }

        ctx.beginPath();
        ctx.moveTo(p4.x, p4.y);
        ctx.bezierCurveTo(pc42.x, pc42.y, pc11.x, pc11.y, p1.x, p1.y);
        ctx.bezierCurveTo(pc12.x, pc12.y, pc21.x, pc21.y, p2.x, p2.y);
        ctx.bezierCurveTo(pc22.x, pc22.y, pc31.x, pc31.y, p3.x, p3.y);
        ctx.bezierCurveTo(pc32.x, pc32.y, pc41.x, pc41.y, p4.x, p4.y);
        ctx.lineTo(t1.x, t1.y);
        ctx.lineTo(t2.x, t2.y);
        ctx.closePath();
        ctx.fill();
    }

    function thread(b, ctx) {
        ctx.beginPath();
        for (var i = b.a; i > 0; i -= 1) {
            var t = i * rad;
            x = b.x + b.pm * 50 * Math.cos(b.k * t - frames * rad)
            y = b.y + b.pm * 25 * Math.sin(b.k * t - frames * rad) + 50 * t
            ctx.lineTo(x, y)
        }
        ctx.stroke();
        return { x: x, y: y };
    }

    function Grd(x, y, r, hue) {
        var grd = ctx.createRadialGradient(x - .5 * r, y - 1.7 * r, 0, x - .5 * r, y - 1.7 * r, r);
        grd.addColorStop(0, 'hsla(' + hue + ',100%,65%,.95)');
        grd.addColorStop(0.4, 'hsla(' + hue + ',100%,45%,.85)');
        grd.addColorStop(1, 'hsla(' + hue + ',100%,25%,.80)');
        return grd;
    }

    function randomIntFromInterval(mn, mx) {
        return ~~(Math.random() * (mx - mn + 1) + mn);
    }
</script>
</body>
</html>
