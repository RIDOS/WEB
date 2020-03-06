(() => {
    const cnv = document.querySelector('canvas');
    const ctx = cnv.getContext('2d');

    function init() {
        cnv.width = innerWidth;
        cnv.height = innerHeight;
    }

    init();

    const numberOfRings = 3;
    const ringRadiusOffset = 7;
    const ringsRadius = 200;
    const wavesOfSet = 15;
    const colors = ['#ff1122','#bb1122', '#ff1122'];
    let startAngle = 0;

    function updateRings() {
        for (let i = 0; i < numberOfRings; i++) {
            let radius = i * ringRadiusOffset + ringsRadius;
            let offsetAngle = i * wavesOfSet * Math.PI / 180;
            drawRing(radius, colors[i], offsetAngle);
        }

        startAngle >= 360? startAngle=0: startAngle++;
    }

    let centerX = cnv.width / 2;
    let centerY = cnv.height / 2;

    const maxWaveAmplitude = 17;
    const numberOfWaves = 7;


    function drawRing(radius, color, offsetAngle) {
        ctx.strokeStyle = color;
        ctx.lineWidth = 9;

        ctx.beginPath();

        for (let j = -180; j < 180; j++) {
            let currentAngle = (j + startAngle) * Math.PI / 180;
            let displacement = 0;
            let now = Math.abs(j);

            if (now > 70) {
                displacement = (now - 70) / 70;
            }

            if (displacement >= 1) displacement = 1;

            let waveAmplitude = radius + displacement * Math.sin((currentAngle + offsetAngle) * numberOfWaves) * maxWaveAmplitude;
            let x = centerX + Math.cos(currentAngle) * waveAmplitude;
            let y = centerY + Math.sin(currentAngle) * waveAmplitude;

            j > -180? ctx.lineTo(x,y) : ctx.moveTo(x, y);
        }

        ctx.closePath();
        ctx.stroke();
    }

    function loop() {
        cnv.width |= 0; //ctx.clearRect(0, 0, cnv.width, cnv.height);
        updateRings();
        requestAnimationFrame(loop);
    }

    loop();

    window.addEventListener('resize', init);
})();