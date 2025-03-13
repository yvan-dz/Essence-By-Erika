<div id="info-popup">
    <div class="info-container">
        <div class="info-content">
            <p>
                Cette page sert principalement de vitrine des produits. Pour plus de détails ou pour commander, veuillez me contacter sur WhatsApp via le bouton ci-dessous.
            </p>
            <a id="info-whatsapp-btn" href="https://wa.me/+4917632797790" target="_blank">Commander sur WhatsApp</a>
            <button id="info-close-btn">D'accord</button>
        </div>
    </div>
</div>

<style>
    /* Fenêtre modale en Dark Mode */
    #info-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        max-width: 500px;
        background: #1e1e1e; /* Fond sombre */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2);
        z-index: 1000;
        text-align: center;
        color: #fff; /* Texte blanc */
    }

    /* Conteneur principal */
    .info-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Contenu de l'info */
    .info-content p {
        font-size: 16px;
        color: #ddd; /* Texte légèrement gris */
        margin-bottom: 15px;
    }

    /* Bouton WhatsApp */
    #info-whatsapp-btn {
        background-color: #25D366;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 10px;
        text-decoration: none;
        display: inline-block;
    }

    /* Bouton "D'accord" */
    #info-close-btn {
        background-color: #ff4d4d;
        color: white;
        border: none;
        padding: 8px 12px;
        font-size: 14px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Animation d'apparition */
    #info-popup {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    #info-popup.show {
        opacity: 1;
    }

</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        function showInfo() {
            let popup = document.getElementById("info-popup");
            popup.style.display = "block";
            setTimeout(() => popup.classList.add("show"), 10);
        }

        function closeInfo() {
            let popup = document.getElementById("info-popup");
            popup.classList.remove("show");
            setTimeout(() => popup.style.display = "none", 300);
        }

        // Vérifier si l'élément existe avant d'attacher les événements
        if (document.getElementById("info-close-btn")) {
            document.getElementById("info-close-btn").addEventListener("click", closeInfo);
        }

        document.querySelectorAll(".category__text h5 a").forEach(link => {
            link.addEventListener("click", function(event) {
                event.preventDefault();
                showInfo();
            });
        });
    });
</script>
