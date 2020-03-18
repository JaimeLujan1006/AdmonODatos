f = open("elpoema.txt","r")

print("1:",f.read(2))#leer los primeros 3 caracteres
print("2:",f.read())#leer los caracteres restantes en el archivo.
print("3:",f.read())#Se alcanza el final del archivo (EOF)
f.close()
