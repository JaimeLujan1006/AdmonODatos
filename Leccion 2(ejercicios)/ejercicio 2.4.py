f = open("elpoema.txt","r")
chunk = 200
while True:
    data = f.read(chunk)
    if not data:
        break
    print(data)