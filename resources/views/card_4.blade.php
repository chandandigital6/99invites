<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Birthday Invitation</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            background: url({{asset('assets/img/bg5.webp')}}) no-repeat center center fixed;
            background-size: cover;
        }

        .card {
            background: rgba(224, 216, 224, 0.9);
            border-radius: 25px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 700px;
            height: 600px;
            padding: 40px;
            text-align: center;
            transition: transform 0.3s, background 0.3s;
            margin: 10px;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            background: linear-gradient(to bottom right, pink, white);
            transform: scale(1.05);
        }

        .header {
            background: linear-gradient(
                135deg,
                #6a11cb,
                #2575fc,
                #3a7d44,
                #ff3cac
            );
            background: -webkit-linear-gradient(
                135deg,
                #6a11cb,
                #2575fc,
                #3a7d44,
                #ff3cac
            );
            border-radius: 20px 20px 0 0;
            color: white;
            padding: 20px 0;
            position: relative;
            z-index: 1;
        }

        .header h1 {
            margin: 0;
            font-size: 2.8em;
            font-family: "Pacifico", cursive;
        }

        .sprinkles {
            margin: 0;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0;
            position: relative;
            z-index: 1;
        }

        .image-container img {
            border-radius: 50%;
            width: 180px;
            height: 180px;
            object-fit: cover;
            border: 5px solid #ffeb3b;
        }

        .content h2 {
            color: #ff5722;
            margin: 15px 0;
            font-family: "Roboto", sans-serif;
            font-size: 2em;
            position: relative;
            z-index: 1;
        }

        .content h1 {
            color: #044e68;
            font-size: 2.5em;
            margin: 0;
            font-family: "Lobster", cursive;
            position: relative;
            z-index: 1;
        }

        .content p {
            color: #555;
            margin: 10px 0;
            font-size: 1.2em;
            position: relative;
            z-index: 1;
        }

        .footer {
            border-top: 1px solid #6a6b6c;
            padding-top: 5px;
            position: relative;
            z-index: 1;
        }

        .footer p {
            color: #1a85b0;
            margin: 10px 0;
            font-size: 1em;
            font-family: "Roboto", sans-serif;
        }



        /* Responsive Design */
        @media (max-width: 768px) {
            .card {
                max-width: 90%;
            }

            .header h1 {
                font-size: 2.2em;
            }

            .image-container img {
                width: 150px;
                height: 150px;
            }

            .content h1 {
                font-size: 2em;
            }

            .content p {
                font-size: 1em;
            }

            .footer p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
@foreach($birthDay as $data)


<!-- Card start -->
<div class="card">
    <div class="sprinkles"></div>
    <div class="header">
        <h1>{{$data->title}}</h1>
    </div>
    <div class="image-container">
        <img src="{{asset('storage/'.$data->image)}}" alt="Birthday Image" />
    </div>
    <div class="content">
        <h2>Join us to celebrate</h2>
        <h1>{{$data->name}}</h1>
        <p>{{ \Illuminate\Support\Carbon::parse($data->datetime)->format('l, d F Y,') }}</p>
        <p>{{ \Illuminate\Support\Carbon::parse($data->datetime)->format(' h:i A') }}</p>
        <p>{!! $data->other !!}</p>
    </div>
    <div class="footer">
        <p>RSVP by July 5th</p>
        <p>Contact: (123) 456-7890</p>
    </div>
</div>

@endforeach
<!-- Card end -->

<!-- Three.js Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script>
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(
        75,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
    );
    const renderer = new THREE.WebGLRenderer({ alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.querySelector('.sprinkles').appendChild(renderer.domElement);

    const confettiMaterials = Array.from(
        { length: 100 },
        () =>
            new THREE.MeshBasicMaterial({
                color: getRandomColor(),
                side: THREE.DoubleSide,
            })
    );
    const confettiGeometry = new THREE.PlaneGeometry(10, 20);

    function getRandomColor() {
        return Math.random() * 0xffffff;
    }

    function createConfetti() {
        const confetti = new THREE.Mesh(
            confettiGeometry,
            confettiMaterials[
                Math.floor(Math.random() * confettiMaterials.length)
                ]
        );
        confetti.position.set(
            Math.random() * window.innerWidth - window.innerWidth / 2,
            window.innerHeight / 2,
            Math.random() * window.innerWidth - window.innerWidth / 2
        );
        confetti.rotation.set(
            Math.random() * Math.PI,
            Math.random() * Math.PI,
            Math.random() * Math.PI
        );
        scene.add(confetti);

        const confettiSize = Math.random() * 0.3 + 0.1;
        const confettiSpeed = Math.random() * 2.0 + 1.0;

        const animateConfetti = () => {
            confetti.position.y -= confettiSpeed;
            confetti.position.x +=
                Math.sin((confetti.position.y + confetti.position.x) * 0.05) * 1.0;

            if (confetti.position.y < -window.innerHeight / 2) {
                confetti.position.y = window.innerHeight / 2;
            }

            confetti.rotation.x += 0.01;
            confetti.rotation.y += 0.01;

            requestAnimationFrame(animateConfetti);
        };

        animateConfetti();
    }

    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }

    function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    }

    window.addEventListener("resize", onWindowResize);

    for (let i = 0; i < 500; i++) {
        createConfetti();
    }

    camera.position.z = 5;

    animate();
</script>
</body>
</html>
