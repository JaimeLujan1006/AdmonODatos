f = open("elpoema.txt","r")

while True:
    line = f.read()
    if not line:
        break
    print(line)