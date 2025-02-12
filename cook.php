<div id="cookies">
    <div class="container">
        <div class="subcontainer">
            <div class="cookies">
                <p>Tous les produits ont été créés à partir des fragrances de parfums, pour certains célèbres sur le marché, en s'inspirant d'eux. Toute référence à des marques, des noms de produits ou des designers n'est utilisée que pour l'identification des fragrances (ART. 1 decr. n°92/9142). Les marques, noms de produits et designers respectifs, appartiennent à leurs propriétaires respectifs. Quiconque achète un produit Chogan, achète un produit ORIGINAL CHOGAN !!
                    <!-- <a href="privacy.php">Plus d'informations</a> -->
                </p>
                <button id="cookies-btn">D'accord</button>
            </div>
        </div>
    </div>
</div>
<script>

    setCookie = (cName, cValue, expDays) => {
        let date = new Date();
        date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
        const expires = "expires" + date.toUTCString();
        document.cookie = cName + "=" + cValue + "; " + expires + "; path=/"
    }

    getCookie = (cName) => {
        const name = cName + "=";
        const cDecoded = decodeURIComponent(document.cookie);
        const cArr = cDecoded.split("; ");
        let value;
        cArr.forEach(val => {
            if (val.indexOf(name) === 0) value = val.substring(name.length);
        })

        return value;
    }

    document.querySelector("#cookies-btn").addEventListener("click", () => {
        document.querySelector("#cookies").style.display = "none";
        setCookie("cookie", true, 3);
    });

    cookieMessage = () => {
        if (!getCookie("cookie")) {
            document.querySelector("#cookies").style.display = "block";
        }
    }

    window.addEventListener("Load", cookieMessage());

</script>