const monImage = document.querySelector('img');

let maRequete = new Request('fleurs.jpg');

fetch(maRequete)
.then(function(reponse) {
  if (!response.ok) {
    throw new Error(`erreur HTTP! statut: ${reponse.status}`);
  }
  return reponse.blob();
})
.then(function(reponse) {
  let URLobjet = URL.createObjectURL(reponse);
  monImage.src = URLobjet;
});
