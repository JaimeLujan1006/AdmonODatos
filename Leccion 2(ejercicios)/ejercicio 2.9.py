f = open("elpoema2.txt","w")
print("When I think about myself,", file=f)
print("I almost laugh myself to death.", file=f)
f.close()
f = open("elpoema2.txt", "r")
data = f.read()
print(data)
