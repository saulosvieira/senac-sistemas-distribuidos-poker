<html>
<head>
<title>Poker</title>
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;

    vertical-align: baseline;
}

#container {
    width: 1280px;
    margin: 0 auto;
    background-color: black;
}

#mesa {
    background-image: url("assets/img/mesa.png");
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;

}

.jogador1 {
    position: absolute;
    width: 110px;
    height: 80px;
    top: 125px;
    left: 120px;
    color: #fff;
}

.jogador2 {
    position: absolute;
    width: 110px;
    height: 80px;
    top: 25px;
    left: 350px;
    color: #fff;
}

.jogador3 {
    position: absolute;
    width: 110px;
    height: 80px;
    top: 25px;
    left: 770px;
    color: #fff;
}

.jogador4 {
    position: absolute;
    width: 110px;
    height: 80px;
    top: 125px;
    left: 1080px;
    color: #fff;
}

.jogador5 {
    position: absolute;
    width: 110px;
    height: 80px;
    top: 380px;
    left: 1080px;
    color: #fff;
}

.jogador6 {
    position: absolute;
    width: 110px;
    height: 80px;
    top: 460px;
    left: 770px;
    color: #fff;
}

.jogador7 {
    position: absolute;
    width: 110px;
    height: 80px;
    top: 460px;
    left: 350px;
    color: #fff;
}

.jogador8 {
    position: absolute;
    width: 110px;
    height: 80px;
    top: 380px;
    left: 120px;
    color: #fff;
}

.carta {
    width: 49px;
    height: 77px;
    float: left;
    margin: 1px;
}

.carta-virada {

    background: url('assets/img/deck.png') -98px -306px;

}

.p1 {
    background: url('assets/img/deck.png') 0px 0px;
}

.p2 {
    background: url('assets/img/deck.png') -49px 0px;
}

.p3 {
    background: url('assets/img/deck.png') -98px 0px;
}

.p4 {
    background: url('assets/img/deck.png') -147px 0px;
}

.p5 {
    background: url('assets/img/deck.png') -196px 0px;
}

.p6 {
    background: url('assets/img/deck.png') -245px 0px;
    width: 48px !important;
}

.p7 {
    background: url('assets/img/deck.png') -293px 0px;
}

.p8 {
    background: url('assets/img/deck.png') -343px 0px;
}

.p9 {
    background: url('assets/img/deck.png') -392px 0px;
}

.p10 {
    background: url('assets/img/deck.png') -441px 0px;
}

.p11 {
    background: url('assets/img/deck.png') -491px 0px;
    width: 48px !important;
}

.p12 {
    background: url('assets/img/deck.png') -539px 0px;
}

.p13 {
    background: url('assets/img/deck.png') -588px 0px;
}

.p1 {
    background: url('assets/img/deck.png') 0px 0px;
}

.p2 {
    background: url('assets/img/deck.png') -49px 0px;
}

.p3 {
    background: url('assets/img/deck.png') -98px 0px;
}

.p4 {
    background: url('assets/img/deck.png') -147px 0px;
}

.p5 {
    background: url('assets/img/deck.png') -196px 0px;
}

.p6 {
    background: url('assets/img/deck.png') -245px 0px;
    width: 48px !important;
}

.p7 {
    background: url('assets/img/deck.png') -293px 0px;
}

.p8 {
    background: url('assets/img/deck.png') -343px 0px;
}

.p9 {
    background: url('assets/img/deck.png') -392px 0px;
}

.p10 {
    background: url('assets/img/deck.png') -441px 0px;
}

.p11 {
    background: url('assets/img/deck.png') -491px 0px;
    width: 48px !important;
}

.p12 {
    background: url('assets/img/deck.png') -539px 0px;
}

.p13 {
    background: url('assets/img/deck.png') -588px 0px;
}

.o1 {
    background: url('assets/img/deck.png') 0px -77px;
}

.o2 {
    background: url('assets/img/deck.png') -49px -77px;
}

.o3 {
    background: url('assets/img/deck.png') -98px -77px;
}

.o4 {
    background: url('assets/img/deck.png') -147px -77px;
}

.o5 {
    background: url('assets/img/deck.png') -196px -77px;
}

.o6 {
    background: url('assets/img/deck.png') -245px -77px;

}

.o7 {
    background: url('assets/img/deck.png') -294px -77px;
}

.o8 {
    background: url('assets/img/deck.png') -343px -77px;
}

.o9 {
    background: url('assets/img/deck.png') -392px -77px;
}

.o10 {
    background: url('assets/img/deck.png') -441px -77px;
}

.o11 {
    background: url('assets/img/deck.png') -491px -77px;

}

.o12 {
    background: url('assets/img/deck.png') -539px -77px;
}

.o13 {
    background: url('assets/img/deck.png') -588px -77px;
}

.c1 {
    background: url('assets/img/deck.png') 0px -154px;
}

.c2 {
    background: url('assets/img/deck.png') -49px -154px;
}

.c3 {
    background: url('assets/img/deck.png') -98px -154px;
}

.c4 {
    background: url('assets/img/deck.png') -147px -154px;
}

.c5 {
    background: url('assets/img/deck.png') -196px -154px;
}

.c6 {
    background: url('assets/img/deck.png') -245px -154px;

}

.c7 {
    background: url('assets/img/deck.png') -294px -154px;
}

.c8 {
    background: url('assets/img/deck.png') -343px -154px;
}

.c9 {
    background: url('assets/img/deck.png') -392px -154px;
}

.c10 {
    background: url('assets/img/deck.png') -441px -154px;
}

.c11 {
    background: url('assets/img/deck.png') -491px -154px;

}

.c12 {
    background: url('assets/img/deck.png') -539px -154px;
}

.c13 {
    background: url('assets/img/deck.png') -588px -154px;
}

.e1 {
    background: url('assets/img/deck.png') 0px -231px;

}

.e2 {
    background: url('assets/img/deck.png') -49px -231px;

}

.e3 {
    background: url('assets/img/deck.png') -98px -231px;
}

.e4 {
    background: url('assets/img/deck.png') -147px -231px;
}

.e5 {
    background: url('assets/img/deck.png') -196px -231px;
}

.e6 {
    background: url('assets/img/deck.png') -245px -231px;

}

.e7 {
    background: url('assets/img/deck.png') -293px -231px;
}

.e8 {
    background: url('assets/img/deck.png') -343px -231px;
}

.e9 {
    background: url('assets/img/deck.png') -392px -231px;
}

.e10 {
    background: url('assets/img/deck.png') -441px -231px;
}

.e11 {
    background: url('assets/img/deck.png') -491px -231px;

}

.e12 {
    background: url('assets/img/deck.png') -539px -231px;
}

.e13 {
    background: url('assets/img/deck.png') -588px -231px;
}

.mesa {
    position: absolute;
    width: 260px;
    height: 80px;
    top: 300px;
    left: 490px;
}

.control{
    position: absolute;
    top: 600px;
    left: 10px;
}

.control input[type=button] {
    padding:10px 20px;
    background:#fff;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}


</style>
</head>
<body>
<div id="container">
    <div id="mesa">
        <div class="jogador1">
            <h2>Jogador 1</h2>

            <div class="carta p5"></div>
            <div class="carta c7"></div>
        </div>

        <div class="jogador2">
            <h2>Jogador 2</h2>

            <div class="carta carta-virada"></div>
            <div class="carta carta-virada"></div>
        </div>

        <div class="jogador3">
            <h2>Jogador 3</h2>

            <div class="carta carta-virada"></div>
            <div class="carta carta-virada"></div>
        </div>

        <div class="jogador4">
            <h2>Jogador 4</h2>

            <div class="carta carta-virada"></div>
            <div class="carta carta-virada"></div>
        </div>

        <div class="jogador5">
            <h2>Jogador 5</h2>

            <div class="carta carta-virada"></div>
            <div class="carta carta-virada"></div>
        </div>

        <div class="jogador6">
            <h2>Jogador 6</h2>

            <div class="carta carta-virada"></div>
            <div class="carta carta-virada"></div>
        </div>

        <div class="jogador7">
            <h2>Jogador 7</h2>

            <div class="carta carta-virada"></div>
            <div class="carta carta-virada"></div>
        </div>

        <div class="jogador8">
            <h2>Jogador 8</h2>

            <div class="carta carta-virada"></div>
            <div class="carta carta-virada"></div>
        </div>

        <div class="mesa">

            <div class="carta e11"></div>
            <div class="carta c4"></div>
            <div class="carta o7"></div>
            <div class="carta p2"></div>
            <div class="carta c11"></div>

        </div>

        <div class="control">
            <input type="button" value="Fold"/>
            <input type="button" value="Call"/>
            <input type="button" value="Raise"/>
        </div>
    </div>
</div>


<script>

</script>
</body>
</html>