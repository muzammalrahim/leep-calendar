<style type="text/css">
	 /*============================================loader css==================================*/
.loader{
    width: 150px;
    height: 150px;
    margin: 30px auto 0;
    position: relative;
}
.loader div{
    width: 150px;
    height: 150px;
    border: 3px solid #60012C;
    border-radius: 100%;
    opacity: 0;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    top: 50%;
    left: 50%;
    animation: animate 1.8s infinite linear;
}
.loader div:nth-child(1) { animation-delay:200ms; }
.loader div:nth-child(2) { animation-delay:400ms; }
.loader div:nth-child(3) { animation-delay:600ms; }
.loader div:nth-child(4) { animation-delay:800ms; }
.loader div:nth-child(5) { animation-delay:1000ms; }
.loader div:nth-child(6) { animation-delay:1200ms; }
.loader div:nth-child(7) { animation-delay:1400ms; }
.loader div:nth-child(8) { animation-delay:1600ms; }
.loader div:nth-child(9) { animation-delay:1800ms; }
@keyframes animate{
    0%{
        opacity: 0.0;
        width: 0;
        height: 0;
    }
    10%{
        opacity: 0.9;
    }
    100%{
        opacity: 0.0;
        width: 150px;
        height: 150px;
    }
}
/*============================================loader css==================================*/
</style>

<div class="loader-bg" style="width: 100%;height: 100vh;display:flex; justify-content:center;align-items:center;position: fixed; background: #fff;z-index: 10000000;opacity: 0.8;">
<div class="loader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>
</div>