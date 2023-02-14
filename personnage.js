const personnage = new Personnage('Fatima', 10, 5, 100, true);

const nomElem = document.getElementById('nom');
nomElem.textContent = personnage.nom;

const atkElem = document.getElementById('atk');
atkElem.textContent = personnage.atk;

const armorElem = document.getElementById('armor');
armorElem.textContent = personnage.armor;

const vieElem = document.getElementById('vie');
vieElem.textContent = personnage.vie;

const goodBoyElem = document.getElementById('goodBoy');
goodBoyElem.textContent = personnage.goodBoy ? 'Oui' : 'Non';

const attaquerBtn = document.getElementById('attaquer');
attaquerBtn.addEventListener('click', () => {
  personnage.attaque(personnage);
  vieElem.textContent = personnage.vie;
});