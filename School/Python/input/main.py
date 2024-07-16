f = open("info.txt", "a")
f.write("----\n")

l = []
l.append("Voornaam: "+input("1. Wat is je voornaam?\n")+"\n")
l.append("Achternaam: "+input("2. Wat is je achternaam?\n")+"\n")
l.append("Woonplaats: "+input("3. Wat is je huidige woonplaats?\n")+"\n")
l.append("'Wordt deze info opgeslagen': "+input("4. Mag deze informatie worden opgeslagen?\n")+"\n\n")

print("\n\nBedankt voor het invullen")

for item in l:
    f.write(item)
f.close