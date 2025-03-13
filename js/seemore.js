
    document.addEventListener("DOMContentLoaded", function () {
        let produits = document.querySelectorAll(".category__single");
        let produitsParPage = 8;
        let indexProduit = produitsParPage;

        // Masquer tous les produits sauf les 8 premiers
        produits.forEach((produit, index) => {
            if (index >= produitsParPage) {
                produit.style.display = "none";
            }
        });

        // Création du bouton Voir Plus
        let voirPlusBtn = document.createElement("button");
        voirPlusBtn.textContent = "Voir plus";
        voirPlusBtn.style.display = "block";
        voirPlusBtn.style.margin = "20px auto";
        voirPlusBtn.style.padding = "10px 20px";
        voirPlusBtn.style.fontSize = "16px";
        voirPlusBtn.style.backgroundColor = "#000";
        voirPlusBtn.style.color = "#fff";
        voirPlusBtn.style.border = "none";
        voirPlusBtn.style.cursor = "pointer";
        voirPlusBtn.style.borderRadius = "5px";
        voirPlusBtn.style.textAlign = "center";
        voirPlusBtn.style.transition = "background-color 0.3s ease";
voirPlusBtn.addEventListener("mouseover", function () {
    voirPlusBtn.style.backgroundColor = "#D4AF37";
});
voirPlusBtn.addEventListener("mouseout", function () {
    voirPlusBtn.style.backgroundColor = "#000"; // Remet la couleur initiale (noir)
});


        document.querySelector(".category .container").appendChild(voirPlusBtn);

        // Afficher 8 produits supplémentaires à chaque clic
        voirPlusBtn.addEventListener("click", function () {
            let produitsCaches = [...produits].slice(indexProduit, indexProduit + produitsParPage);
            produitsCaches.forEach(produit => produit.style.display = "block");

            indexProduit += produitsParPage;

            // Cacher le bouton si tous les produits sont affichés
            if (indexProduit >= produits.length) {
                voirPlusBtn.style.display = "none";
            }
        });
    });

