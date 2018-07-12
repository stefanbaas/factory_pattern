####Welk design pattern is gekozen?
Factory Pattern

####Wat zijn de kenmerken (toegevoegde waarde) van dit design pattern?
Bij het gebruik van de factory pattern, maak je objecten zonder de exacte class te specificeren van het object dat je maakt. Dit kan bijvoorbeeld door gebruik te maken van een interface en het implementeren van ‘child’ classes.

####Welke concept is bedacht om het pattern te kunnen toepassen?
Ik heb als concept een ‘voertuig fabriek’ bedacht, die verschillende voertuigen kan aanmaken zoals een auto of een motor. Alle voertuigen moeten voldoen aan hetzelfde contract/interface. Ieder voertuig heeft bijvoorbeeld een merk, aantal wielen en een snelheid.
Ik heb een ‘CarFactory’ en een ‘MotorcycleFactory’ aangemaakt, die allebei hun eigen classes gebruiken. Deze factories zijn een extensie van de ‘VehicleFactory’. De classes ‘Car’ en ‘Motocycle’ die in de factories worden gebruikt zijn een extensie van de klasse ‘Vehicle’, hierin staan alle getters en setters. In de child classes worden alle ‘setters’ gedefinieerd. Omdat de child classes een extensie zijn van de ‘Vehicle’ classe, hoef je niet opnieuw de getters te definiëren. Elke ‘Vehicle’ heeft een merk, aantal wielen en een snelheid die je kan definiëren.

####Wat zijn de responsibilities van de geïmplementeerde classes?
Dat je makkelijk een nieuwe classe kan aanmaken, die dezelfde onderdelen heeft.

####In welk opzicht wordt polymorfie bereikt?
Iedere ‘Vehicle’ heeft dezelfde functies, maar heeft zijn eigen waardes.

