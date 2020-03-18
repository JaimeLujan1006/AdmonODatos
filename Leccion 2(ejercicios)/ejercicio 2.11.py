f = open("elpoema2.txt", "a")
f.write("\nAlone , all alone. Nobady, but nobody. Can make it out here alone.")
f.close()
data = open("elpoema2.txt").read()

print(data)